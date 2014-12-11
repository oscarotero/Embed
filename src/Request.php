<?php
/**
 * Class to execute request and return the content
 */
namespace Embed;

use Embed\Url;

class Request
{
    public $startingUrl;
    public $url;
    public $resolver;

    private $defaultResolverClass = 'Embed\\RequestResolvers\\Curl';
    private $resolverClass;
    private $resolverConfig;

    private $xmlContent;
    private $jsonContent;
    private $htmlContent;


    /**
     * Constructor. Sets the url
     *
     * @param Url    $url The Url instance
     * @param null|string $resolverClass The resolver classname
     * @param null|array $resolverConfig The resolver configuration
     */
    public function __construct(Url $url, $resolverClass = null, array $resolverConfig = null)
    {
        if ($resolverClass) {
            $this->setResolverClass($resolverClass);
        }

        if ($resolverConfig) {
            $this->setResolverConfig($resolverConfig);
        }

        $this->setUrl($url);
    }


    /**
     * Magic method to retrieve the resolver an url in lazy mode
     */
    public function __get($name)
    {
        switch ($name) {
            case 'url':
                return $this->url = new Url($this->resolver->getUrl());

            case 'resolver':
                $resolverClass = $this->resolverClass ?: $this->defaultResolverClass;

                return $this->resolver = new $resolverClass(UrlRedirect::resolve($this->startingUrl->getUrl()), $this->resolverConfig);
        }
    }


    /**
     * Creates a new request with the same configuration than this
     *
     * @param string  $url The url string
     */
    public function createSubRequest($url)
    {
        return new Request(new Url($url), $this->resolverClass, $this->resolverConfig);
    }


    /**
     * Set the url resolver class used for http requests
     *
     * @param string $className
     */
    public function setResolverClass($className)
    {
        if (!class_exists($className)) {
            throw new \Exception("This class does not exists");
        }

        $reflection = new \ReflectionClass($className);

        if (!in_array('Embed\\RequestResolvers\\RequestResolverInterface', $reflection->getInterfaceNames())) {
            throw new \Exception("The resolver class must implement the Embed\\RequestResolvers\\RequestResolverInterface interface");
        }

        $this->resolverClass = $className;
    }

    /**
     * Set the resolver configuration used for http requests
     *
     * @param array $config
     */
    public static function setResolverConfig(array $config)
    {
        $this->resolverConfig = $config;
    }

    /**
     * Set a new url
     *
     * @param Url $url The Url instance
     */
    public function setUrl(Url $url)
    {
        $this->htmlContent = $this->jsonContent = $this->xmlContent = null;
        $this->startingUrl = $url;

        unset($this->url, $this->resolver);
    }

    /**
     * Return the url
     *
     * @return string The current url
     */
    public function getUrl()
    {
        return $this->resolver->getUrl();
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
        return $this->startingUrl->match($patterns) || $this->url->match($patterns);
    }

    /**
     * Return the http request info (for debug purposes)
     *
     * @return array
     */
    public function getRequestInfo()
    {
        return $this->resolver->getRequestInfo();
    }

    /**
     * Return the starting url (before all possible redirects)
     *
     * @return string The starting url
     */
    public function getStartingUrl()
    {
        return $this->resolver->getStartingUrl();
    }

    /**
     * Get the http code of the url
     *
     * @return integer The http code
     */
    public function getHttpCode()
    {
        return $this->resolver->getHttpCode();
    }

    /**
     * Get the content-type of the url
     *
     * @return string|null The content-type header or null
     */
    public function getMimeType()
    {
        return $this->resolver->getMimeType();
    }

    /**
     * Get the content of the url
     *
     * @return string|false The content or false
     */
    public function getContent()
    {
        return $this->resolver->getContent();
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
                if (($response = $this->getContent()) === '') {
                    return $this->htmlContent = false;
                }

                $errors = libxml_use_internal_errors(true);
                $this->htmlContent = new \DOMDocument();

                if ((mb_detect_encoding($response) === 'UTF-8') && mb_check_encoding($response, 'UTF-8')) {
                    $response = mb_convert_encoding($response, 'HTML-ENTITIES', 'UTF-8');
                    $response = preg_replace('/<head[^>]*>/', '<head><META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">', $response);
                }

                //Remove all script elements, CDATA sections and comments (thanks https://github.com/jasny)
                $response = preg_replace(array('%<!--(?:[^-]++|-)*?-->|<!\[CDATA\[(?:[^\]]++|\])*?\]\]>%si', '%<script\b(?:"(?:[^"\\\\]++|\\\\.)*+"|\'(?:[^\'\\\\]++|\\\\.)*+\'|[^>"\']++)*>(?:[^<]++|<)*?</\s*script\s*>%si'), '', $response);

                $this->htmlContent->loadHTML($response);
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
                if (($response = $this->getContent()) === '') {
                    return $this->jsonContent = false;
                }

                $this->jsonContent = json_decode($response, true);
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
                if (($response = $this->getContent()) === '') {
                    return $this->xmlContent = false;
                }
                $errors = libxml_use_internal_errors(true);
                $this->xmlContent = new \SimpleXMLElement($response);
                libxml_use_internal_errors($errors);
            } catch (\Exception $E) {
                return $this->xmlContent = false;
            }
        }

        return $this->xmlContent;
    }

    /**
     * Check if the url is valid or not
     *
     * @return boolean True if it's valid, false if not
     */
    public function isValid()
    {
        if ($this->getHttpCode() !== 200) {
            return false;
        }

        return true;
    }
}
