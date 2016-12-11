<?php

namespace Embed\Http;

use Embed\Exceptions\EmbedException;

/**
 * Curl dispatcher.
 */
class CurlDispatcher implements DispatcherInterface
{
    private $config = [
        CURLOPT_MAXREDIRS => 20,
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_ENCODING => '',
        CURLOPT_AUTOREFERER => true,
        CURLOPT_USERAGENT => 'Embed PHP Library',
        CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
    ];

    /**
     * Constructor.
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = $config + $this->config;

        $cookies = str_replace('//', '/', sys_get_temp_dir().'/embed-cookies.'.uniqid());

        if (is_file($cookies)) {
            if (!is_writable($cookies)) {
                throw new EmbedException(sprintf('The temporary cookies file "%s" is not writable', $cookies));
            }
        } elseif (!is_writable(dirname($cookies))) {
            throw new EmbedException(sprintf('The temporary folder "%s" is not writable', dirname($cookies)));
        }

        $this->config[CURLOPT_COOKIEJAR] = $cookies;
        $this->config[CURLOPT_COOKIEFILE] = $cookies;
        $this->config[CURLOPT_FOLLOWLOCATION] = !ini_get('open_basedir') && !filter_var(ini_get('safe_mode'), FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * Remove the cookies file on destruct the instance.
     */
    public function __destruct()
    {
        $cookies = $this->config[CURLOPT_COOKIEJAR];

        if (is_file($cookies)) {
            unlink($cookies);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(Uri $uri)
    {
        $connection = curl_init((string) $uri);
        curl_setopt_array($connection, $this->config);

        $curl = new CurlResult($connection);

        //Get only text responses
        $isText = true;

        $curl->onHeader(function ($name, $value) use (&$isText) {
            if ($name === 'content-type') {
                if (!preg_match('/(text|html|json)/', strtolower($value))) {
                    $isText = false;
                }
            }
        });

        $curl->onBody(function () use ($isText) {
            return $isText;
        });

        if (curl_exec($connection) === false) {
            throw new EmbedException(sprintf('Error %s: %s', curl_errno($connection), curl_error($connection)));
        }

        $result = $curl->getResult();

        curl_close($connection);

        return new Response(
            $result['uri'],
            $result['statusCode'],
            $result['contentType'],
            $result['content'],
            $result['headers']
        );
    }

    /**
     * {@inheritdoc}
     */
    public function dispatchImages(array $uris)
    {
        if (empty($uris)) {
            return [];
        }

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimetypes = [
            'image/jpeg',
            'image/png',
            'image/gif',
            'image/bmp',
            'image/x-icon',
        ];
        $curl_multi = curl_multi_init();
        $responses = [];
        $connections = [];

        foreach ($uris as $uri) {
            if ($uri->getScheme() === 'data') {
                $response = ImageResponse::createFromBase64($uri);

                if ($response) {
                    $responses[] = $response;
                }

                continue;
            }

            $connection = curl_init((string) $uri);

            curl_setopt_array($connection, $this->config);
            curl_multi_add_handle($curl_multi, $connection);

            $curl = new CurlResult($connection);

            $curl->onBody(function ($body, $data) use ($finfo, $mimetypes) {
                if (empty($data->mime)) {
                    $data->mime = finfo_buffer($finfo, $body);

                    if (!in_array($data->mime, $mimetypes, true)) {
                        $data->mime = null;

                        return false;
                    }
                }

                if (($info = getimagesizefromstring($body))) {
                    $data->width = $info[0];
                    $data->height = $info[1];

                    return false;
                }
            });

            $connections[] = $curl;
        }

        if ($connections) {
            do {
                $return = curl_multi_exec($curl_multi, $active);
            } while ($return === CURLM_CALL_MULTI_PERFORM);

            while ($active && $return === CURLM_OK) {
                if (curl_multi_select($curl_multi) === -1) {
                    usleep(100);
                }

                do {
                    $return = curl_multi_exec($curl_multi, $active);
                } while ($return === CURLM_CALL_MULTI_PERFORM);
            }

            foreach ($connections as $connection) {
                curl_multi_remove_handle($curl_multi, $connection->getConnection());
                $result = $connection->getResult();

                if (!empty($result['data']->mime)) {
                    $responses[] = new ImageResponse(
                        $result['uri'],
                        $result['statusCode'],
                        $result['contentType'],
                        [$result['data']->width, $result['data']->height],
                        $result['headers']
                    );
                }
            }
        }

        finfo_close($finfo);
        curl_multi_close($curl_multi);

        return $responses;
    }
}
