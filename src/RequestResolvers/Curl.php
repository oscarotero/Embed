<?php

namespace Embed\RequestResolvers;

use Embed\Exceptions\EmbedException;

/**
 * Default class to resolve urls using curl.
 */
class Curl implements RequestResolverInterface
{
    protected static $tmpCookies;
    protected $isBinary;
    protected $result;
    protected $content;
    protected $url;
    protected $headers;
    protected $config = [
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

    public static $binaryContentTypes = [
        '#image/.*#',
        '#application/(pdf|x-download|zip|pdf|msword|vnd\\.ms|postscript|octet-stream|ogg|x-iso9660-image)#',
        '#application/x-zip.*#',
    ];

    /**
     * {@inheritdoc}
     */
    public function __construct($url, array $config)
    {
        $this->url = $url;

        $this->config = $config + $this->config;
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        return $this->getResult('url');
    }

    /**
     * {@inheritdoc}
     */
    public function getHttpCode()
    {
        return intval($this->getResult('http_code'));
    }

    /**
     * {@inheritdoc}
     */
    public function getMimeType()
    {
        return $this->getResult('mime_type');
    }

    /**
     * {@inheritdoc}
     */
    public function getError()
    {
        return $this->getResult('error');
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        if ($this->content === null) {
            $this->resolve();
        }

        return $this->content;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaders()
    {
        if ($this->headers === null) {
            $this->resolve();
        }

        return $this->headers;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestInfo()
    {
        if ($this->result === null) {
            $this->resolve();
        }

        return $this->result;
    }

    /**
     * Get the result of the http request.
     *
     * @param string $name Parameter name
     *
     * @return null|string The result info
     */
    protected function getResult($name)
    {
        if ($this->result === null) {
            $this->resolve();
        }

        return isset($this->result[$name]) ? $this->result[$name] : null;
    }

    /**
     * Resolves the current url and get the content and other data.
     */
    protected function resolve()
    {
        $this->content = '';
        $this->headers = [];
        $this->isBinary = null;

        if (!self::$tmpCookies) {
            self::$tmpCookies = str_replace('//', '/', sys_get_temp_dir().'/embed-cookies.txt');

            if (is_file(self::$tmpCookies)) {
                if (!is_writable(self::$tmpCookies)) {
                    throw new EmbedException(sprintf('The temporary cookies file "%s" is not writable', self::$tmpCookies));
                }
            } elseif (!is_writable(dirname(self::$tmpCookies))) {
                throw new EmbedException(sprintf('The temporary folder "%s" is not writable', dirname(self::$tmpCookies)));
            }
        }

        $connection = curl_init();

        $options = [
            CURLOPT_RETURNTRANSFER => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_URL => $this->url,
            CURLOPT_COOKIEJAR => self::$tmpCookies,
            CURLOPT_COOKIEFILE => self::$tmpCookies,
            CURLOPT_HEADERFUNCTION => [$this, 'headerCallback'],
            CURLOPT_WRITEFUNCTION => [$this, 'writeCallback'],
        ] + $this->config;

        if (ini_get('open_basedir') || filter_var(ini_get('safe_mode'), FILTER_VALIDATE_BOOLEAN)) {
            $options[CURLOPT_FOLLOWLOCATION] = false;
        }

        curl_setopt_array($connection, $options);

        $result = curl_exec($connection);

        $this->result = curl_getinfo($connection) ?: [];

        if (!$result) {
            $this->result['error'] = curl_error($connection);
            $this->result['error_number'] = curl_errno($connection);
        }

        curl_close($connection);

        if (is_file(self::$tmpCookies)) {
            unlink(self::$tmpCookies);
        }

        if (($content_type = $this->getResult('content_type'))) {
            if (strpos($content_type, ';') !== false) {
                list($mimeType, $charset) = explode(';', $content_type);

                $this->result['mime_type'] = $mimeType;

                $charset = substr(strtoupper(strstr($charset, '=')), 1);

                if (!empty($charset) && !empty($this->content) && ($charset !== 'UTF-8')) {
                    $this->content = mb_convert_encoding($this->content, 'UTF-8', $charset);
                }
            } elseif (strpos($content_type, '/') !== false) {
                $this->result['mime_type'] = $content_type;
            }
        }
    }

    protected function headerCallback($connection, $string)
    {
        if (strpos($string, ':')) {
            list($name, $value) = array_map('trim', explode(':', $string, 2));

            $name = strtolower($name);

            if (!isset($this->headers[$name])) {
                $this->headers[$name] = [];
            }

            $this->headers[$name][] = $value;

            if ($name === 'content-type') {
                $this->isBinary = false;

                foreach (self::$binaryContentTypes as $regex) {
                    if (preg_match($regex, strtolower($value))) {
                        $this->isBinary = true;
                        break;
                    }
                }
            }
        }

        return strlen($string);
    }

    protected function writeCallback($connection, $string)
    {
        if ($this->isBinary) {
            return 0;
        }

        $this->content .= $string;

        return strlen($string);
    }
}
