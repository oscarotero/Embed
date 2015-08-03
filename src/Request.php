<?php
namespace Embed;

/**
 * Class to execute request and return the content
 *
 */
class Request extends Url
{
    private $startingUrl;

    private $config;
    private $resolver;
    private $resolverClass = 'Embed\\RequestResolvers\\Curl';
    private $resolverConfig = [];

    private $xmlContent;
    private $jsonContent;
    private $htmlContent;

    /**
     * Constructor. Sets the url
     *
     * @param string      $url            The request url
     * @param null|string $resolverClass  The resolver classname
     * @param array       $resolverConfig The resolver configuration
     * @param array       $config         The request configuration
     */
    public function __construct($url, $resolverClass = null, array $resolverConfig = array(), array $config = [])
    {
        $defaultConfig = [ 'allowedCodes' => [ 200 ] ];
        $this->config = array_merge($defaultConfig, $config);

        if ($resolverClass !== null) {
            if (!class_exists($resolverClass)) {
                throw new \InvalidArgumentException("This class does not exists");
            }

            $reflection = new \ReflectionClass($resolverClass);

            if (!in_array('Embed\\RequestResolvers\\RequestResolverInterface', $reflection->getInterfaceNames())) {
                throw new \InvalidArgumentException("The resolver class must implement the Embed\\RequestResolvers\\RequestResolverInterface interface");
            }

            $this->resolverClass = $resolverClass;
        }

        $this->resolverConfig = array_replace($this->resolverConfig, $resolverConfig);
        $this->startingUrl = new Url($url);;
        $this->parseUrl($url);
    }

    /**
     * Magic method to clean cache on clone the request
     */
    public function __clone()
    {
        $this->xmlContent = $this->jsonContent = $this->htmlContent = $this->resolver = null;
    }

    /**
     * Returns the current resolver
     * It also create a new resolver if it's not exists
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
     * Creates and returns an Url clone
     *
     * @return Url
     */
    public function createUrl()
    {
        return new Url($this->getUrl());
    }

    /**
     * Creates a new request with the same configuration than this
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
     * @return boolean True if the url match, false if not
     */
    public function match($patterns)
    {
        return $this->startingUrl->match($patterns) || parent::match($patterns);
    }

    /**
     * Return the http request info (for debug purposes)
     *
     * @return array
     */
    public function getRequestInfo()
    {
        return $this->getResolver()->getRequestInfo();
    }

    /**
     * Get the http code of the url
     *
     * @return integer The http code
     */
    public function getHttpCode()
    {
        return $this->getResolver()->getHttpCode();
    }

    /**
     * Get the content-type of the url
     *
     * @return string|null The content-type header or null
     */
    public function getMimeType()
    {
        return $this->getResolver()->getMimeType();
    }

    /**
     * Get the content of the url
     *
     * @return string|false The content or false
     */
    public function getContent()
    {
        return $this->getResolver()->getcontent();
    }

    /**
     * Get the content of the url as a DOMDocument object
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
                $this->htmlContent = new \DOMDocument();

                if ((mb_detect_encoding($content) === 'UTF-8') && mb_check_encoding($content, 'UTF-8')) {
                    $content = mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8');
                    $content = preg_replace('/<head[^>]*>/', '<head><META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">', $content);
                }

                //Remove all script elements, CDATA sections and comments (thanks https://github.com/jasny)
                //$content = preg_replace(['%<!--(?:[^-]++|-)*?-->|<!\[CDATA\[(?:[^\]]++|\])*?\]\]>%si', '%<script\b(?:"(?:[^"\\\\]++|\\\\.)*+"|\'(?:[^\'\\\\]++|\\\\.)*+\'|[^>"\']++)*>(?:[^<]++|<)*?</\s*script\s*>%si'], '', $content);

                $this->htmlContent->loadHTML($content);
                libxml_use_internal_errors($errors);
            } catch (\Exception $E) {
                return $this->htmlContent = false;
            }
        }

        return $this->htmlContent;
    }

    /**
     * Get the content of the url as an array from json
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
     * Get the content of the url as an XML element
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
     * Check if the response is valid or not
     *
     * @return boolean True if it's valid, false if not
     */
    public function isValid()
    {
        if (in_array($this->getHttpCode(), $this->config['allowedCodes'])) {
            return true;
        }

        return false;
    }
}
