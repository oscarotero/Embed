<?php
/**
 * Class to split and manipulate url data
 */
namespace Embed;

class Url
{
    protected $info;

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
        $this->parseUrl($url);
    }

    /**
     * Return the url
     *
     * @return string The current url
     */
    public function getUrl()
    {
        return $this->buildUrl();
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
        if (!is_array($patterns)) {
            $patterns = array($patterns);
        }

        $url = $this->getUrl();

        foreach ($patterns as $pattern) {
            $pattern = str_replace(array('\\*', '\\?'), array('.+', '?'), preg_quote($pattern, '|'));

            if (preg_match('|^'.$pattern.'$|i', $url)) {
                return true;
            }
        }

        return false;
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
            return;
        }

        $host = array_reverse(explode('.', $host));

        switch (count($host)) {
            case 1:
                return $host[0];

            case 2:
                return $first_level ? ($host[1].'.'.$host[0]) : $host[1];

            default:
                if ($first_level) {
                    return ($host[1] === 'co' || $host[1] === 'com') ? ($host[2].'.'.$host[1].'.'.$host[0]) : ($host[1].'.'.$host[0]);
                }

                return ($host[1] === 'co' || $host[1] === 'com') ? $host[2] : $host[1];
        }
    }

    /**
     * Edit a specific directory in the path of the url
     *
     * @param int    $key   The position of the subdirectory (0 based index)
     * @param string $value The new value
     */
    public function setDirectory($key, $value)
    {
        if ($key > count($this->info['path'])) {
            $this->info['path'][] = $this->info['file'];
            $this->info['file'] = $value;
            return;
        }

        if ($key === count($this->info['path'])) {
            $this->info['file'] = $value;
            return;
        }

        $this->info['path'][$key] = $value;
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
     * @param string|array $name  The parameter name or an array of parameters
     * @param string       $value The parameter value
     */
    public function setParameter($name, $value = null)
    {
        if (is_array($name)) {
            $this->info['query'] = empty($this->info['query']) ? $name : array_replace($this->info['query'], $name);
        } else {
            $this->info['query'][$name] = $value;
        }
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
        $this->info['fragment'] = $fragment;
    }

    /**
     * Build the url using the splitted data
     */
    protected function buildUrl()
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

        return $url;
    }

    /**
     * Parse an url and split into different pieces
     *
     * @param string $url The url to parse
     */
    protected function parseUrl($url)
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
