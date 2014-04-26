<?php
/**
 * Default class to resolve urls
 */
namespace Embed\RequestResolvers;

class Curl implements RequestResolverInterface
{
    protected $content;
    protected $result;
    protected $url;
    protected $config = array(
        'user_agent' => 'Embed PHP Library',
        'max_redirections' => 20,
        'connection_timeout' => 10,
        'timeout' => 10,
    );


    /**
     * {@inheritdoc}
     */
    public function __construct($url)
    {
        $this->url = $url;
    }


    /**
     * {@inheritdoc}
     */
    public function setConfig(array $config)
    {
        $this->config = $config + $this->config;
    }


    /**
     * {@inheritdoc}
     */
    public function setUrl($url)
    {
        $this->result = $this->content = null;
        $this->url = $url;
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
    public function getStartingUrl()
    {
        return $this->url;
    }


    /**
     * {@inheritdoc}
     */
    public function getLatestUrl()
    {
        return $this->getResult('url');
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
     * Get the result of the http request
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
     * Resolves the current url and get the content and other data
     */
    protected function resolve()
    {
        $connection = curl_init();

        $tmpCookies = str_replace('//', '/', sys_get_temp_dir().'/embed-cookies.txt');

        curl_setopt_array($connection, array(
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS => $this->config['max_redirections'],
            CURLOPT_CONNECTTIMEOUT => $this->config['connection_timeout'],
            CURLOPT_TIMEOUT => $this->config['timeout'],
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_ENCODING => '',
            CURLOPT_AUTOREFERER => true,
            CURLOPT_COOKIEJAR => $tmpCookies,
            CURLOPT_COOKIEFILE => $tmpCookies,
            CURLOPT_USERAGENT => $this->config['user_agent']
        ));

        $this->content = curl_exec($connection);
        $this->result = curl_getinfo($connection);

        if ($this->content === false) {
            $this->result['error'] = curl_error($connection);
            $this->result['error_number'] = curl_errno($connection);
        }

        curl_close($connection);

        if (($content_type = $this->getResult('content_type'))) {
            if (strpos($content_type, ';') !== false) {
                list($mimeType, $charset) = explode(';', $content_type);

                $this->result['mime_type'] = $mimeType;

                $charset = substr(strtoupper(strstr($charset, '=')), 1);

                if (!empty($charset) && !empty($this->content) && ($charset !== 'UTF-8')) {
                    $this->content = @mb_convert_encoding($this->content, 'UTF-8', $charset);
                }
            } elseif (strpos($content_type, '/') !== false) {
                $this->result['mime_type'] = $content_type;
            }
        }
    }
}
