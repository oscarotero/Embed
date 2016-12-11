<?php

namespace Embed\Http;

/**
 * Class to consume http responses.
 */
abstract class AbstractResponse
{
    protected $uri;
    protected $statusCode;
    protected $contentType;
    protected $headers;

    public function __construct(Uri $uri, $statusCode, $contentType, array $headers)
    {
        $this->uri = $uri;
        $this->statusCode = $statusCode;
        $this->contentType = $contentType;
        $this->headers = $headers;
    }

    /**
     * Get the http code of the response, for example: 200.
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Get the content-type of the response, for example: text/html.
     *
     * @return string|null
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Returns the final uri.
     *
     * @return Uri
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Returns the http headers.
     *
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Get a header.
     *
     * @param string $name
     *
     * @return string|null
     */
    public function getHeader($name)
    {
        $name = strtolower($name);

        return isset($this->headers[$name]) ? implode(',', $this->headers[$name]) : null;
    }

    /**
     * Check if the response is valid or not.
     *
     * @param array $codes
     *
     * @return bool
     */
    public function isValid(array $codes = null)
    {
        if ($codes === null) {
            return $this->statusCode === 200;
        }

        return in_array($this->statusCode, $codes);
    }
}
