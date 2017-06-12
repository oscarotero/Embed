<?php

namespace Embed\Http;

/**
 * Class to consume http responses.
 */
abstract class AbstractResponse
{
    protected $startingUrl;
    protected $url;
    protected $statusCode;
    protected $contentType;
    protected $headers;
    protected $info;

    public function __construct(Url $startingUrl, Url $url, $statusCode, $contentType, array $headers, array $info)
    {
        $this->startingUrl = $startingUrl;
        $this->url = $url;
        $this->statusCode = (int)$statusCode;
        $this->contentType = $contentType;
        $this->headers = $headers;
        $this->info = $info;
    }

    /**
     * Get the starting url.
     *
     * @return Url
     */
    public function getStartingUrl()
    {
        return $this->startingUrl;
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
     * Returns the final url.
     *
     * @return Url
     */
    public function getUrl()
    {
        return $this->url;
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
     * Returns extra http info.
     *
     * @return array
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Returns dispatch error.
     *
     * @return string|null
     */
    public function getError()
    {
        return empty($this->info['error']) ? null : $this->info['error'];
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
