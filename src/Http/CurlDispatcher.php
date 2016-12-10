<?php

namespace Embed\Http;

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
     * Constructor
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
     * Remove the cookies file on destruct the instance
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
    public function dispatch(Request $request)
    {
        $connection = curl_init((string) $request->getUri());
        curl_setopt_array($connection, $this->config);

        $curl = new Curl($connection);

        //Get only text responses
        $isText = true;

        $curl->onHeader(function ($name, $value) use (&$isText) {
            if ($name === 'content-type') {
                if (!preg_match('/(text|html|json)/', strtolower($value))) {
                    $isText = false;
                }
            }

            return true;
        });

        $curl->onBody(function ($string) use ($isText) {
            return $isText;
        });

        $result = $curl();

        curl_close($connection);

        return new Response(
            new Uri($result['uri']),
            $result['statusCode'],
            $result['contentType'],
            $result['content'],
            $result['headers']
        );
    }
}
