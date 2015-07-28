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
        $this->parseUrl($url);
    }

    /**
     * Returns the url
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getUrl();
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
            $patterns = [$patterns];
        }

        $url = $this->getUrl();

        foreach ($patterns as $pattern) {
            $pattern = str_replace(['\\*', '\\?'], ['.+', '?'], preg_quote($pattern, '|'));

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
     * Returns a clone with other extension
     *
     * @param string $extension
     *
     * @return Url
     */
    public function withExtension($extension)
    {
        $clone = clone $this;
        $clone->info['extension'] = $extension;

        if (empty($clone->info['file'])) {
            $clone->info['file'] = array_pop($clone->info['path']);
        }

        return $clone;
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
     * Returns a clone with other scheme
     *
     * @param string $scheme
     *
     * @return Url
     */
    public function withScheme($scheme)
    {
        $clone = clone $this;
        $clone->info['scheme'] = $scheme;

        return $clone;
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
     * Returns a clone with other host
     *
     * @param string $host
     *
     * @return Url
     */
    public function withHost($host)
    {
        $clone = clone $this;
        $clone->info['host'] = $host;

        return $clone;
    }

    /**
     * Return the domain of the url (for example: google)
     *
     * @param boolean $first_level True to return the first level domain (.com, .es, etc)
     *
     * @return string
     */
    public function getDomain($first_level = false)
    {
        $host = $this->getHost();

        if (empty($host)) {
            return '';
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
     * Return a specific directory position in the path of the url
     *
     * @param int $position The position of the directory (0 based index)
     *
     * @return string|null
     */
    public function getDirectoryPosition($position)
    {
        if ($position === count($this->info['path'])) {
            return $this->info['file'];
        }

        return isset($this->info['path'][$position]) ? $this->info['path'][$position] : null;
    }

    /**
     * Returns a clone with other directory in a specific position
     *
     * @param int|null $key   The position of the subdirectory (0 based index).
     * @param string   $value The new value
     *
     * @return Url
     */
    public function withDirectoryPosition($key, $value)
    {
        $clone = clone $this;

        if ($key === count($clone->info['path'])) {
            $clone->info['file'] = $value;

            return $clone;
        }

        $clone->info['path'][$key] = $value;

        return $clone;
    }

    /**
     * Return all directories
     *
     * @return string
     */
    public function getDirectories()
    {
        return !empty($this->info['path']) ? '/'.implode('/', $this->info['path']).'/' : '/';
    }

    /**
     * Slice path
     *
     * @param int      $offset
     * @param int|null $length
     * 
     * @return array
     */
    public function getSlicePath($offset, $length = null)
    {
        $array = explode('/', $this->getPath());

        if (empty($array[0])) {
            array_shift($array);
        }

        return array_slice($array, $offset, $length);
    }

    /**
     * Return the url path
     *
     * @return string
     */
    public function getPath()
    {
        $path = !empty($this->info['path']) ? '/'.implode('/', $this->info['path']).'/' : '/';

        if (!empty($this->info['file'])) {
            $path .= $this->info['file'];

            if (!empty($this->info['extension'])) {
                $path .= '.'.$this->info['extension'];
            }
        }

        return $path;
    }

    /**
     * Returns a clone with other path
     *
     * @param string $path
     *
     * @return Url
     */
    public function withPath($path)
    {
        $clone = clone $this;

        $clone->setPath($path);

        return $clone;
    }

    /**
     * Returns a clone with path appended
     *
     * @param string $path
     *
     * @return Url
     */
    public function withAddedPath($path)
    {
        $path = $this->getPath().'/'.$path;

        return $this->withPath($path);
    }

    /**
     * Check if the url has a query parameter
     *
     * @param string $name
     *
     * @return boolean
     */
    public function hasQueryParameter($name)
    {
        return isset($this->info['query'][$name]);
    }

    /**
     * Returns all query parameters
     *
     * @return array
     */
    public function getQueryParameters()
    {
        return empty($this->info['query']) ? [] : $this->info['query'];
    }

    /**
     * Returns a query parameter value
     *
     * @param string $name
     *
     * @return string|null
     */
    public function getQueryParameter($name)
    {
        return isset($this->info['query'][$name]) ? $this->info['query'][$name] : null;
    }

    /**
     * Returns a clone with a new query parameter
     *
     * @param string $name  The parameter name
     * @param string $value The parameter value
     *
     * @return Url
     */
    public function withQueryParameter($name, $value)
    {
        $clone = clone $this;

        $clone->info['query'][$name] = $value;

        return $clone;
    }

    /**
     * Returns a clone with new query parameters merged
     *
     * @param array $parameters
     *
     * @return Url
     */
    public function withAddedQueryParameters(array $parameters)
    {
        $clone = clone $this;

        $clone->info['query'] = empty($clone->info['query']) ? $parameters : array_replace($clone->info['query'], $parameters);

        return $clone;
    }

    /**
     * Returns a clone with new query parameters
     *
     * @param array $parameters
     *
     * @return Url
     */
    public function withQueryParameters(array $parameters)
    {
        $clone = clone $this;

        $clone->info['query'] = $parameters;

        return $clone;
    }

    /**
     * Return the url fragment
     *
     * @return string
     */
    public function getFragment()
    {
        return isset($this->info['fragment']) ? $this->info['fragment'] : null;
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

        $url .= $this->getPath();

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

            array_walk_recursive($this->info['query'], function (&$value) {
                $value = urldecode($value);
            });
        }

        if (isset($this->info['path'])) {
            $this->setPath($this->info['path']);
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

        return $this->getScheme().'://'.$this->getHost().$this->getDirectories().$url;
    }

    /**
     * Parses and adds path and file value
     *
     * @param string $path
     */
    private function setPath($path)
    {
        $parts = pathinfo($path);

        $this->info['path'] = [];

        if (isset($parts['dirname'])) {
            foreach (explode('/', $parts['dirname']) as $dir) {
                if ($dir !== '') {
                    $this->info['path'][] = $dir;
                }
            }
        }

        $this->info['file'] = isset($parts['filename']) ? $parts['filename'] : null;
        $this->info['extension'] = isset($parts['extension']) ? $parts['extension'] : null;
    }
}
