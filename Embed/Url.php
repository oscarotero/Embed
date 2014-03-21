<?php
/**
 * Class to manipulate urls
 */
namespace Embed;

class Url
{
    public static $defaultResolver = 'Embed\\UrlResolvers\\Curl';

    private $resolver;
    private $info;
    private $xmlContent;
    private $jsonContent;
    private $htmlContent;


    /**
     * Set a default url resolver used for http requests
     *
     * @param string $className
     */
    public static function setDefaultResolver($className)
    {
        if (!class_exists($className)) {
            throw new \Exception("This class does not exists");
        }

        $reflection = new \ReflectionClass($className);

        if (!in_array('Embed\\UrlResolvers\\UrlResolverInterface', $reflection->getInterfaceNames())) {
            throw new \Exception("The resolver class must implement the Embed\\UrlResolvers\\UrlResolverInterface interface");
        }

        self::$defaultResolver = $className;
    }


    /**
     * Constructor. Sets the url
     *
     * @param string $url The url value
     */
    public function __construct($url)
    {
        $this->setUrl($url);
    }


    /**
     * Set a new url
     *
     * @param string $url The url
     */
    public function setUrl($url)
    {
        if ($url instanceof UrlResolvers\UrlResolverInterface) {
            $this->resolver = $url;
        } else {
            $this->resolver = new static::$defaultResolver($url);
        }

        $this->parseUrl($this->resolver->getLatestUrl());
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
     * @return int The http code
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
     * @return DOMDocument The content or false
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
     * @return array The content or false
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
     * @return SimpleXMLElement The content or false
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
     * Check if the url match with a specific pattern. The patterns only accepts * and ?
     *
     * @param string/array $pattern The pattern or an array with various patterns
     *
     * @return boolean True if the url match, false if not
     */
    public function match($pattern)
    {
        if (is_array($pattern)) {
            foreach ($pattern as $p) {
                if ($this->match($p) === true) {
                    return true;
                }
            }

            return false;
        }

        $pattern = str_replace(array('\\*', '\\?'), array('.+', '?'), preg_quote($pattern, '|'));

        return (preg_match('|^'.$pattern.'$|i', $this->getUrl()) === 1) ? true : false;
    }


    /**
     * Return the extension of the url (html, php, jpg, etc)
     *
     * @return string The scheme or null
     */
    public function getExtension()
    {
        return isset($this->info['extension']) ? $this->info['extension'] : null;
    }

    /**
     * Return the scheme of the url (for example http, https, ftp, etc)
     *
     * @return string The scheme or null
     */
    public function getScheme()
    {
        return isset($this->info['scheme']) ? $this->info['scheme'] : null;
    }


    /**
     * Change the scheme of the url
     *
     * @param string $scheme The new scheme
     */
    public function setScheme($scheme)
    {
        $this->info['scheme'] = $scheme;
        $this->updateUrl();
    }


    /**
     * Return the host of the url (for example: google.com)
     *
     * @return string The host or null
     */
    public function getHost()
    {
        return isset($this->info['host']) ? $this->info['host'] : null;
    }


    /**
     * Change the host of the url
     *
     * @param string $host The new host
     */
    public function setHost($host)
    {
        $this->info['host'] = $host;
        $this->updateUrl();
    }


    /**
     * Return the domain of the url (for example: google)
     *
     * @param boolean $first_level True to return the first level domain (.com, .es, etc)
     *
     * @return string The domain or null
     */
    public function getDomain($first_level = false)
    {
        $host = $this->getHost();

        if (!$host) {
            return null;
        }

        $host = array_reverse(explode('.', $host));

        switch (count($host)) {
            case 1:
                return $host[0];

            case 2:
                return $first_level ? ($host[1].'.'.$host[0]) : $host[1];

            default:
                if ($first_level) {
                    return ($host[1] === 'co') ? ($host[2].'.'.$host[1].'.'.$host[0]) : ($host[1].'.'.$host[0]);
                }

                return ($host[1] === 'co') ? $host[2] : $host[1];
        }
    }


    /**
     * Return a specific directory in the path of the url
     *
     * @param int $key The position of the subdirectory (0 based index)
     *
     * @return string The directory or null
     */
    public function getDirectory($key)
    {
        if ($key === count($this->info['path'])) {
            return $this->info['file'];
        }

        return isset($this->info['path'][$key]) ? $this->info['path'][$key] : null;
    }


    /**
     * Set a new path
     */
    public function setPath($path)
    {
        $this->info['path'] = array();
        $this->info['file'] = null;

        foreach (explode('/', $path) as $dir) {
            if ($dir !== '') {
                $this->info['path'][] = $dir;
            }
        }

        if (substr($path, -1) !== '/') {
            $this->info['file'] = array_pop($this->info['path']);
        }

        $this->updateUrl();
    }


    /**
     * Return the url path
     */
    public function getPath($file = false)
    {
        $path = !empty($this->info['path']) ? '/'.implode('/', $this->info['path']).'/' : '/';

        if ($file && !empty($this->info['file'])) {
            $path .= $this->info['file'];
        }

        return $path;
    }


    /**
     * Check if the url has a GET parameter
     *
     * @param string $name The parameter name
     *
     * @return boolean True if it exists, false if not
     */
    public function hasParameter($name)
    {
        return isset($this->info['query'][$name]);
    }


    /**
     * Returns a GET parameter value
     *
     * @param string $name The parameter name
     *
     * @return string The parameter value or null
     */
    public function getParameter($name)
    {
        return isset($this->info['query'][$name]) ? $this->info['query'][$name] : null;
    }


    /**
     * Set a new GET parameter or modify an existing one
     *
     * @param string $name  The parameter name or an array of parameters
     * @param string $value The parameter value
     */
    public function setParameter($name, $value = null)
    {
        if (is_array($name)) {
            $this->info['query'] = empty($this->info['query']) ? $name : array_replace($this->info['query'], $name);
        } else {
            $this->info['query'][$name] = $value;
        }

        $this->updateUrl();
    }


    /**
     * Return the url fragment
     *
     * @return string The fragment value or null
     */
    public function getFragment()
    {
        return isset($this->info['fragment']) ? $this->info['fragment'] : null;
    }



    /**
     * Return the fragments as an array
     *
     * @return array The fragment values
     */
    public function getFragmentArray()
    {
        if ($fragment = $this->getFragment()) {
            parse_str($fragment, $values);

            return $values;
        }

        return array();
    }


    /**
     * Set the url fragment
     *
     * @param string $fragment The new fragment value
     */
    public function setFragment($fragment)
    {
        $this->info['fragment'];

        $this->updateUrl();
    }


    /**
     * Private function to update the url in the resolver and clear cache after any change (scheme, host, parameters, etc)
     */
    private function updateUrl()
    {
        $url = '';

        if (isset($this->info['scheme'])) {
            $url .= $this->info['scheme'].'://';
        }
        if (isset($this->info['host'])) {
            $url .= $this->info['host'];
        }

        $url .= $this->getPath(true);

        if (isset($this->info['query'])) {
            $url .= '?'.http_build_query($this->info['query']);
        }
        if (isset($this->info['fragment'])) {
            $url .= '#'.$this->info['fragment'];
        }

        if (($this->resolver->getStartingUrl() !== $url) && ($this->resolver->getLatestUrl() !== $url)) {
            $this->resolver->setUrl($url);
            $this->htmlContent = $this->jsonContent = $this->xmlContent = null;
        }
    }


    /**
     * Parse an url and split into different pieces
     *
     * @param string $url The url to parse
     */
    private function parseUrl($url)
    {
        if (strpos($url, '//') === 0) {
            $url = "http:$url";
        }

        $this->info = parse_url($url);

        if (isset($this->info['query'])) {
            parse_str($this->info['query'], $this->info['query']);
        }

        if (isset($this->info['path'])) {
            $this->setPath($this->info['path']);

            if (!empty($this->info['file']) && preg_match('/\.([\w]+)$/', $this->info['file'], $match)) {
                $this->info['extension'] = $match[1];
            }
        }
    }


    /**
     * Return an absolute url based in a relative
     *
     * @return string The absolute url
     */
    public function getAbsolute($url)
    {
        if (empty($url)) {
            return '';
        }

        if (strpos($url, 'data:') === 0) {
            return $url;
        }

        if (preg_match('|^\w+://|', $url)) {
            return $url;
        }

        if (strpos($url, '://') === 0) {
            return $this->getScheme().$url;
        }

        if (strpos($url, '//') === 0) {
            return $this->getScheme().":$url";
        }

        if ($url[0] === '/') {
            return $this->getScheme().'://'.$this->getHost().$url;
        }

        return $this->getScheme().'://'.$this->getHost().$this->getPath().$url;
    }
}
