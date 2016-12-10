<?php

namespace Embed\Http;

use Embed\Exceptions\EmbedException;

/**
 * Class to dispatch urls using curl and get the result.
 */
class Curl
{
    protected $body;
    protected $headers = [];
    protected $onHeader;
    protected $onBody;

    /**
     * Creates a new response
     *
     * @param resource $connection The curl resource
     */
    public function __construct($connection)
    {
        $this->connection = $connection;

        curl_setopt($this->connection, CURLOPT_HEADERFUNCTION, [$this, 'headerCallback']);
        curl_setopt($this->connection, CURLOPT_WRITEFUNCTION, [$this, 'writeCallback']);
    }

    /**
     * Prepares the response result
     */
    public function __invoke()
    {
        if (curl_exec($this->connection) === false) {
            throw new EmbedException('Error %s: %s', curl_errno($this->connection), curl_error($this->connection));
        }

        $result = curl_getinfo($this->connection);

        return [
            'uri' => isset($result['url']) ? $result['url'] : null,
            'statusCode' => isset($result['http_code']) ? $result['http_code'] : null,
            'contentType' => isset($result['content_type']) ? $result['content_type'] : null,
            'content' => $this->body,
            'headers' => $this->headers,
        ];
    }

    /**
     * Callback used on receive a header
     *
     * @param callable $callback
     */
    public function onHeader(callable $callback)
    {
        $this->onHeader = $callback;
    }

    /**
     * Callback used on receive a body string portion
     *
     * @param callable $callback
     */
    public function onBody(callable $callback)
    {
        $this->onBody = $callback;
    }

    /**
     * Callback used to collect the headers
     *
     * @param resource $connection
     * @param string   $string
     *
     * @return int
     */
    private function headerCallback($connection, $string)
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

        if ($this->onHeader === null || call_user_func($this->onHeader, $name, $value)) {
            return strlen($string);
        }

        return 0;
    }

    /**
     * Callback used to get the body content
     *
     * @param resource $connection
     * @param string   $string
     *
     * @return int
     */
    private function writeCallback($connection, $string)
    {
        if ($this->onBody === null || call_user_func($this->onBody, $string)) {
            $this->body .= $string;

            return strlen($string);
        }

        return 0;
    }
}
