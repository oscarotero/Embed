<?php
/**
 * Default class to resolve urls
 */
namespace Embed\UrlResolvers;

class Curl implements UrlResolverInterface
{
    protected $content;
    protected $result;
    protected $url;


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
     * @return array/string The result info
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
            CURLOPT_MAXREDIRS => 20,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_ENCODING => '',
            CURLOPT_AUTOREFERER => true,
            CURLOPT_COOKIEJAR => $tmpCookies,
            CURLOPT_COOKIEFILE => $tmpCookies,
            CURLOPT_USERAGENT => 'Embed PHP Library'
        ));

        $this->content = curl_exec($connection);
        $this->result = curl_getinfo($connection);

        if ($this->content === false) {
            $this->result['error'] = curl_error($connection);
            $this->result['error_number'] = curl_errno($connection);
        }

        curl_close($connection);

        if (strpos($this->getResult('content_type'), ';') !== false) {
            list($mimeType, $charset) = explode(';', $this->result['content_type']);

            $this->result['mime_type'] = $mimeType;

            $charset = substr(strtoupper(strstr($charset, '=')), 1);

            if (!empty($charset) && ($charset !== 'UTF-8')) {
                $content = @mb_convert_encoding($content, 'UTF-8', $charset);
            }
        } elseif (strpos($this->getResult('content_type'), '/') !== false) {
            $this->result['mime_type'] = $this->result['content_type'];
        }
    }
}
