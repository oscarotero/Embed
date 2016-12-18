<?php

namespace Embed\Http;

use Exception;
use DOMDocument;
use SimpleXMLElement;

/**
 * Class to consume http responses.
 */
class Response extends AbstractResponse
{
    protected $startingUri;
    protected $content;
    protected $xmlContent;
    protected $jsonContent;
    protected $htmlContent;

    public function __construct(Uri $startingUri, $uri, $statusCode, $contentType, $content, array $headers)
    {
        $this->startingUri = $startingUri;
        parent::__construct($uri, $statusCode, $contentType, $headers);
        $this->setContent($content);
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
     * Get the starting uri.
     *
     * @return Uri
     */
    public function getStartingUri()
    {
        return $this->startingUri;
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

    /**
     * Set the response content.
     *
     * @param string $content
     */
    private function setContent($content)
    {
        $this->content = $content;

        if (empty($this->contentType)) {
            return;
        }

        //Remove charset from Content-Type
        if (strpos($this->contentType, ';') !== false) {
            list($mime, $charset) = array_map('trim', explode(';', $this->contentType));

            $this->contentType = $mime;

            //Convert the content to UTF-8
            $charset = substr(strtoupper(strstr($charset, '=')), 1);

            if (!empty($charset) && !empty($content) && ($charset !== 'UTF-8')) {
                $this->content = mb_convert_encoding($content, 'UTF-8', $charset);
            }
        }
    }
}
