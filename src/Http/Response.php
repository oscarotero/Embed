<?php

namespace Embed\Http;

use Embed\Exceptions\EmbedException;
use Exception;
use DOMDocument;
use SimpleXMLElement;

/**
 * Class to consume http responses.
 */
class Response
{
    protected $uri;
    protected $content;
    protected $statusCode;
    protected $contentType;
    protected $headers;
    protected $xmlContent;
    protected $jsonContent;
    protected $htmlContent;

    public function __construct(Uri $uri, $statusCode, $contentType, $content, array $headers)
    {
        $this->uri = $uri;
        $this->statusCode = $statusCode;
        $this->contentType = $contentType;
        $this->content = $content;
        $this->headers = $headers;

        $this->prepareContent();
    }

    /**
     * Get the content.
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
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
        if ($validCodes === null) {
            return $this->statusCode === 200;
        }

        return in_array($this->statusCode, $codes);
    }

    /**
     * Get the content as HTML.
     *
     * @return DOMDocument|false
     */
    public function getHtmlContent()
    {
        if ($this->htmlContent === null) {
            try {
                if (($content = $this->content) === '') {
                    return $this->htmlContent = false;
                }

                $errors = libxml_use_internal_errors(true);
                $entities = libxml_disable_entity_loader(true);

                $this->htmlContent = new DOMDocument();

                if ((mb_detect_encoding($content) === 'UTF-8') && mb_check_encoding($content, 'UTF-8')) {
                    $content = mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8');
                    $content = preg_replace('/<head[^>]*>/', '<head><META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">', $content);
                }

                $this->htmlContent->loadHTML(trim($content));

                libxml_use_internal_errors($errors);
                libxml_disable_entity_loader($entities);
            } catch (Exception $exception) {
                return $this->htmlContent = false;
            }
        }

        return $this->htmlContent;
    }

    /**
     * Get the content as an array from JSON.
     *
     * @return array|false
     */
    public function getJsonContent()
    {
        if ($this->jsonContent === null) {
            try {
                if (($content = $this->content) === '') {
                    return $this->jsonContent = false;
                }

                $this->jsonContent = json_decode($content, true);
            } catch (\Exception $exception) {
                return $this->jsonContent = false;
            }
        }

        return $this->jsonContent;
    }

    /**
     * Get the content as XML.
     *
     * @return SimpleXMLElement|false
     */
    public function getXMLContent()
    {
        if ($this->xmlContent === null) {
            try {
                if (($content = $this->content) === '') {
                    return $this->xmlContent = false;
                }

                $errors = libxml_use_internal_errors(true);
                $this->xmlContent = new SimpleXMLElement($content);
                libxml_use_internal_errors($errors);
            } catch (Exception $exception) {
                return $this->xmlContent = false;
            }
        }

        return $this->xmlContent;
    }

    private function prepareContent()
    {
        if (empty($this->contentType)) {
            return;
        }

        //Remove charset from Content-Type
        if (strpos($this->contentType, ';') !== false) {
            list($mime, $charset) = array_map('trim', explode(';', $this->contentType));

            $this->contentType = $mime;

            //Convert the content to UTF-8
            $charset = substr(strtoupper(strstr($charset, '=')), 1);

            if (!empty($charset) && !empty($this->content) && ($charset !== 'UTF-8')) {
                $this->content = mb_convert_encoding($this->content, 'UTF-8', $charset);
            }
        }
    }
}
