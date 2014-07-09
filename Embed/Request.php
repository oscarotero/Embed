<?php
/**
 * Class to manipulate urls, get the content, etc
 */
namespace Embed;

class Request extends Url
{
    private static $resolverClass = 'Embed\\RequestResolvers\\Curl';
    private static $resolverConfig;

    private $resolver;
    private $xmlContent;
    private $jsonContent;
    private $htmlContent;


    /**
     * Set a default url resolver used for http requests
     *
     * @param string $className
     */
    public static function setDefaultResolver($className, array $config = null)
    {
        if (!class_exists($className)) {
            throw new \Exception("This class does not exists");
        }

        $reflection = new \ReflectionClass($className);

        if (!in_array('Embed\\RequestResolvers\\RequestResolverInterface', $reflection->getInterfaceNames())) {
            throw new \Exception("The resolver class must implement the Embed\\RequestResolvers\\RequestResolverInterface interface");
        }

        self::$resolverClass = $className;

        if ($config !== null) {
            self::setResolverConfig($config);
        }
    }


    /**
     * Set the resolver configuration used for http requests
     *
     * @param array $config
     */
    public static function setResolverConfig(array $config)
    {
        self::$resolverConfig = $config;
    }


    /**
     * Set a new url
     *
     * @param string $url The url
     */
    public function setUrl($url)
    {
        if ($url instanceof RequestResolvers\RequestResolverInterface) {
            $this->resolver = $url;
        } else {
            $this->resolver = new self::$resolverClass(UrlRedirect::resolve($url));
        }

        if (self::$resolverConfig) {
            $this->resolver->setConfig(self::$resolverConfig);
        }

        $this->parseUrl($this->getUrl());
        $this->updateUrl();
    }


    /**
     * Return the url
     *
     * @return string The current url
     */
    public function getUrl()
    {
        return $this->resolver->getLatestUrl();
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
        return static::urlMatches($this->getStartingUrl(), $patterns) || static::urlMatches($this->getUrl(), $patterns);
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
     * @return string The content-type header or null
     */
    public function getMimeType()
    {
        return $this->resolver->getMimeType();
    }


    /**
     * Get the content of the url
     *
     * @return string The content or false
     */
    public function getContent()
    {
        return $this->resolver->getContent();
    }


    /**
     * Get the content of the url as a DOMDocument object
     *
     * @return \DOMDocument The content or false
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
                    $response = preg_replace('/<head[^>]*>/','<head><META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">', $response);
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


    /**
     * {@inheritdoc}
     */
    public function setScheme($scheme)
    {
        parent::setScheme($scheme);

        $this->updateUrl();
    }


    /**
     * {@inheritdoc}
     */
    public function setHost($host)
    {
        parent::setHost($host);

        $this->updateUrl();
    }


    /**
     * {@inheritdoc}
     */
    public function setPath($path)
    {
        parent::setPath($path);

        $this->updateUrl();
    }


    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value = null)
    {
        parent::setParameter($name, $value);

        $this->updateUrl();
    }


    /**
     * Private function to update the url in the resolver and clear cache after any change (scheme, host, parameters, etc)
     */
    private function updateUrl()
    {
        $url = $this->buildUrl();

        $this->resolver->setUrl($url);
        $this->htmlContent = $this->jsonContent = $this->xmlContent = null;
    }
}
