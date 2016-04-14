<?php

namespace Embed;

/**
 * Class to execute request and return the content.
 */
class Request extends Url
{
    private $startingUrl;

    private $resolver;
    private $resolverClass = 'Embed\\RequestResolvers\\Curl';
    private $resolverConfig = [];

    private $xmlContent;
    private $jsonContent;
    private $htmlContent;

    /**
     * Constructor. Sets the url.
     *
     * @param string      $url            The request url
     * @param null|string $resolverClass  The resolver classname
     * @param array       $resolverConfig The resolver configuration
     */
    public function __construct($url, $resolverClass = null, array $resolverConfig = array())
    {
        if ($resolverClass !== null) {
            if (!class_exists($resolverClass)) {
                throw new \InvalidArgumentException("The resolver class '{$resolverClass}' does not exists");
            }

            $reflection = new \ReflectionClass($resolverClass);

            if (!in_array('Embed\\RequestResolvers\\RequestResolverInterface', $reflection->getInterfaceNames())) {
                throw new \InvalidArgumentException('The resolver class must implement the Embed\\RequestResolvers\\RequestResolverInterface interface');
            }

            $this->resolverClass = $resolverClass;
        }

        $this->resolverConfig = array_replace($this->resolverConfig, $resolverConfig);
        $this->startingUrl = new Url($url);
        $this->parseUrl($url);
    }

    /**
     * Magic method to clean cache on clone the request.
     */
    public function __clone()
    {
        $this->xmlContent = $this->jsonContent = $this->htmlContent = $this->resolver = null;
    }

    /**
     * Returns the current resolver
     * It also create a new resolver if it's not exists.
     *
     * @return RequestResolvers\RequestResolverInterface
     */
    public function getResolver()
    {
        if ($this->resolver === null) {
            $this->resolver = new $this->resolverClass(UrlRedirect::resolve($this->buildUrl()), $this->resolverConfig);
            $this->parseUrl($this->resolver->getUrl());
        }

        return $this->resolver;
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        if ($this->resolver === null) {
            $this->getResolver();
        }

        return parent::getUrl();
    }

    /**
     * Returns the starting url.
     * 
     * @return Url
     */
    public function getStartingUrl()
    {
        return $this->startingUrl;
    }

    /**
     * Creates and returns an Url clone.
     * 
     * @param string|null $url
     *
     * @return Url
     */
    public function createUrl($url = null)
    {
        if ($url !== null) {
            return new Url($this->getAbsolute($url));
        }

        return new Url($this->getUrl());
    }

    /**
     * Creates a new request with the same configuration than this.
     *
     * @param string $url
     *
     * @return Request
     */
    public function withUrl($url)
    {
        $clone = clone $this;

        $clone->parseUrl($this->getAbsolute($url));

        return $clone;
    }

    /**
     * Check if the url match with a specific pattern. The patterns only accepts * and ?
     *
     * @param string|array $patterns The pattern or an array with various patterns
     *
     * @return bool True if the url match, false if not
     */
    public function match($patterns)
    {
        return $this->startingUrl->match($patterns) || parent::match($patterns);
    }

    /**
     * Return ClassName for domain.
     * 
     * Domains started with numbers will get N prepended to their class name.
     *
     * @return string
     */
    public function getClassNameForDomain()
    {
        $className = str_replace(array('-', ' '), '', ucwords(strtolower($this->getDomain())));
        if (is_numeric(mb_substr($className, 0, 1))) {
            $className = 'N'.$className;
        }

        return $className;
    }

    /**
     * Return the http request info (for debug purposes).
     *
     * @return array
     */
    public function getRequestInfo()
    {
        return $this->getResolver()->getRequestInfo();
    }

    /**
     * Get the http code of the url.
     *
     * @return int The http code
     */
    public function getHttpCode()
    {
        return $this->getResolver()->getHttpCode();
    }

    /**
     * Get all headers.
     *
     * @return array
     */
    public function getHeaders()
    {
        return $this->getResolver()->getHeaders();
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
        $headers = $this->getHeaders();
        $name = strtolower($name);

        return isset($headers[$name]) ? implode(',', $headers[$name]) : null;
    }

    /**
     * Get the content-type of the url.
     *
     * @return string|null The content-type header or null
     */
    public function getMimeType()
    {
        return $this->getResolver()->getMimeType();
    }

    /**
     * Get the connection error.
     *
     * @return string|null
     */
    public function getError()
    {
        return $this->getResolver()->getError();
    }

    /**
     * Get the content of the url.
     *
     * @return string|false The content or false
     */
    public function getContent()
    {
        return $this->getResolver()->getcontent();
    }

    /**
     * Get the content of the url as a DOMDocument object.
     *
     * @return \DOMDocument|false
     */
    public function getHtmlContent()
    {
        if ($this->htmlContent === null) {
            try {
                if (($content = $this->getContent()) === '') {
                    return $this->htmlContent = false;
                }

                $errors = libxml_use_internal_errors(true);
                $entities = libxml_disable_entity_loader(true);

                $this->htmlContent = new \DOMDocument();

                if ((mb_detect_encoding($content) === 'UTF-8') && mb_check_encoding($content, 'UTF-8')) {
                    $content = mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8');
                    $content = preg_replace('/<head[^>]*>/', '<head><META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">', $content);
                }

                $this->htmlContent->loadHTML(trim($content));

                libxml_use_internal_errors($errors);
                libxml_disable_entity_loader($entities);
            } catch (\Exception $E) {
                return $this->htmlContent = false;
            }
        }

        return $this->htmlContent;
    }

    /**
     * Get the content of the url as an array from json.
     *
     * @return false|array The content or false
     */
    public function getJsonContent()
    {
        if ($this->jsonContent === null) {
            try {
                if (($content = $this->getContent()) === '') {
                    return $this->jsonContent = false;
                }

                $this->jsonContent = json_decode($content, true);
            } catch (\Exception $E) {
                return $this->jsonContent = false;
            }
        }

        return $this->jsonContent;
    }

    /**
     * Get the content of the url as an XML element.
     *
     * @return false|\SimpleXMLElement The content or false
     */
    public function getXMLContent()
    {
        if ($this->xmlContent === null) {
            try {
                if (($content = $this->getContent()) === '') {
                    return $this->xmlContent = false;
                }
                $errors = libxml_use_internal_errors(true);
                $this->xmlContent = new \SimpleXMLElement($content);
                libxml_use_internal_errors($errors);
            } catch (\Exception $E) {
                return $this->xmlContent = false;
            }
        }

        return $this->xmlContent;
    }

    /**
     * Check if the response is valid or not.
     *
     * @param array $validCodes
     *
     * @return bool True if it's valid, false if not
     */
    public function isValid(array $validCodes = null)
    {
        if ($validCodes === null) {
            return $this->getHttpCode() === 200;
        }

        return in_array($this->getHttpCode(), $validCodes, true);
    }
}
