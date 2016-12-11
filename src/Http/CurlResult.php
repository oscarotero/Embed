<?php

namespace Embed\Http;

/**
 * Class to dispatch urls using curl and get the result.
 */
class CurlResult
{
    protected $body;
    protected $headers = [];
    protected $onHeader;
    protected $onBody;
    protected $data;

    /**
     * Creates a new response.
     *
     * @param resource $connection The curl resource
     */
    public function __construct($connection)
    {
        $this->connection = $connection;
        $this->data = (object) [];

        curl_setopt($this->connection, CURLOPT_HEADERFUNCTION, [$this, 'headerCallback']);
        curl_setopt($this->connection, CURLOPT_WRITEFUNCTION, [$this, 'writeCallback']);
    }

    /**
     * Returns the response result.
     */
    public function getResult()
    {
        $result = curl_getinfo($this->connection);

        return [
            'uri' => isset($result['url']) ? $result['url'] : null,
            'statusCode' => isset($result['http_code']) ? $result['http_code'] : null,
            'contentType' => isset($result['content_type']) ? $result['content_type'] : null,
            'content' => $this->body,
            'headers' => $this->headers,
            'data' => $this->data,
        ];
    }

    /**
     * Returns the connection.
     *
     * @return resource
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Callback used on receive a header.
     *
     * @param callable $callback
     */
    public function onHeader(callable $callback)
    {
        $this->onHeader = $callback;
    }

    /**
     * Callback used on receive a body string portion.
     *
     * @param callable $callback
     */
    public function onBody(callable $callback)
    {
        $this->onBody = $callback;
    }

    /**
     * Callback used to collect the headers.
     *
     * @param resource $connection
     * @param string   $string
     *
     * @return int
     */
    public function headerCallback($connection, $string)
    {
        if (!strpos($string, ':')) {
            return strlen($string);
        }

        list($name, $value) = array_map('trim', explode(':', $string, 2));

        $name = strtolower($name);

        if (!isset($this->headers[$name])) {
            $this->headers[$name] = [];
        }

        $this->headers[$name][] = $value;

        if ($this->onHeader === null || call_user_func($this->onHeader, $name, $value, $this->data) !== false) {
            return strlen($string);
        }

        return -1;
    }

    /**
     * Callback used to get the body content.
     *
     * @param resource $connection
     * @param string   $string
     *
     * @return int
     */
    public function writeCallback($connection, $string)
    {
        $this->body .= $string;

        if ($this->onBody === null || call_user_func($this->onBody, $this->body, $this->data) !== false) {
            return strlen($string);
        }

        //Cancel
        $this->body = null;

        return -1;
    }
}
