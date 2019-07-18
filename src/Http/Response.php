<?php

namespace Embed\Http;

use Embed\Utils;
use Exception;
use DOMDocument;
use SimpleXMLElement;

/**
 * Class to consume http responses.
 */
class Response extends AbstractResponse
{
    protected $content;
    protected $xmlContent;
    protected $jsonContent;
    protected $htmlContent;

    /**
     * Response constructor.
     *
     * @param Url $startingUrl
     * @param Url $url
     * @param int $statusCode
     * @param string|null $contentType
     * @param string $content
     * @param array $headers
     * @param array $info
     */
    public function __construct(Url $startingUrl, Url $url, $statusCode, $contentType, $content, array $headers, array $info = [])
    {
        parent::__construct($startingUrl, $url, $statusCode, $contentType, $headers, $info);
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
     * Get the content as HTML.
     *
     * @return DOMDocument|false
     */
    public function getHtmlContent()
    {
        if ($this->htmlContent === null) {
            try {
                if (empty($content = $this->content)) {
                    return $this->htmlContent = false;
                }

                $this->htmlContent = Utils::parse($content);
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
            $charset = str_replace(['"', "'"], '', substr(strstr($charset, '='), 1));
            $this->content = Utils::toUtf8($content, trim($charset));
        }
    }
}
