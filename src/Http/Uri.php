<?php

namespace Embed\Http;

/**
 * Class to split and manipulate uris.
 */
class Uri
{
    private $info;
    private $uri;
    private static $public_suffix_list;

    /**
     * Constructor. Sets the uri.
     *
     * @param string $uri
     */
    public function __construct($uri)
    {
        $this->parseUri($uri);
    }

    /**
     * Returns the uri.
     *
     * @return string
     */
    public function __toString()
    {
        if ($this->uri === null) {
            return $this->uri = $this->buildUri();
        }

        return $this->uri;
    }

    /**
     * Remove the built url on clone
     */
    public function __clone()
    {
        $this->uri = null;
    }

    /**
     * Check if the uri match with a specific pattern. The patterns only accepts * and ?
     *
     * @param string|array $patterns The pattern or an array with various patterns
     *
     * @return bool
     */
    public function match($patterns)
    {
        if (!is_array($patterns)) {
            $patterns = [$patterns];
        }

        $uri = (string) $this;

        foreach ($patterns as $pattern) {
            $pattern = str_replace(['\\*', '\\?'], ['.+', '?'], preg_quote($pattern, '|'));

            if (preg_match('|^'.$pattern.'$|i', $uri)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Return the content of the uri (for embedded images).
     *
     * @return string The content or null
     */
    public function getContent()
    {
        return isset($this->info['content']) ? $this->info['content'] : null;
    }

    /**
     * Return the extension of the uri (html, php, jpg, etc).
     *
     * @return string The scheme or null
     */
    public function getExtension()
    {
        return isset($this->info['extension']) ? $this->info['extension'] : null;
    }

    /**
     * Returns a new instance with other relative uri.
     *
     * @param string $uri
     *
     * @return Uri
     */
    public function create($uri)
    {
        return new Uri($this->getAbsolute($uri));
    }

    /**
     * Returns a clone with other extension.
     *
     * @param string $extension
     *
     * @return Uri
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
     * Return the scheme of the uri (for example http, https, ftp, etc).
     *
     * @return string The scheme or null
     */
    public function getScheme()
    {
        return isset($this->info['scheme']) ? $this->info['scheme'] : null;
    }

    /**
     * Returns a clone with other scheme.
     *
     * @param string $scheme
     *
     * @return Uri
     */
    public function withScheme($scheme)
    {
        $clone = clone $this;
        $clone->info['scheme'] = $scheme;

        return $clone;
    }

    /**
     * Return the host of the uri (for example: google.com).
     *
     * @return string The host or null
     */
    public function getHost()
    {
        return isset($this->info['host']) ? $this->info['host'] : null;
    }

    /**
     * Returns a clone with other host.
     *
     * @param string $host
     *
     * @return Uri
     */
    public function withHost($host)
    {
        $clone = clone $this;
        $clone->info['host'] = $host;

        return $clone;
    }

    /**
     * Return the domain of the uri (for example: google).
     *
     * @param bool $first_level True to return the first level domain (.com, .es, etc)
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
                $tld = $host[1].'.'.$host[0];
                $suffixes = self::getSuffixes();

                if (in_array($tld, $suffixes, true)) {
                    return $first_level ? $host[2].'.'.$tld : $host[2];
                }

                return $first_level ? $host[1].'.'.$host[0] : $host[1];
        }
    }

    /**
     * Return a specific directory position in the path of the uri.
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
     * Returns a clone with other directory in a specific position.
     *
     * @param int|null $key   The position of the subdirectory (0 based index)
     * @param string   $value The new value
     *
     * @return Uri
     */
    public function withDirectoryPosition($key, $value)
    {
        $clone = clone $this;

        $pos = $clone->info['path'];
        $hasFile = isset($clone->info['file']);

        if ($hasFile) {
            $pos[] = $clone->info['file'];
        }

        $pos[$key] = $value;

        if ($hasFile) {
            $clone->info['file'] = array_pop($pos);
        }

        $clone->info['path'] = $pos;

        return $clone;
    }

    /**
     * Return all directories.
     *
     * @return string
     */
    public function getDirectories()
    {
        return !empty($this->info['path']) ? '/'.implode('/', $this->info['path']).'/' : '/';
    }

    /**
     * Slice path.
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
     * Return the uri path.
     *
     * @return string
     */
    public function getPath()
    {
        $path = !empty($this->info['path']) ? '/'.implode('/', array_map('urlencode', $this->info['path'])).'/' : '/';

        if (isset($this->info['file'])) {
            $path .= $this->info['file'];

            if (isset($this->info['extension'])) {
                $path .= '.'.$this->info['extension'];
            }
        }

        return $path;
    }

    /**
     * Returns a clone with other path.
     *
     * @param string $path
     *
     * @return Uri
     */
    public function withPath($path)
    {
        $clone = clone $this;

        $clone->setPath($path);

        return $clone;
    }

    /**
     * Returns a clone with path appended.
     *
     * @param string $path
     *
     * @return Uri
     */
    public function withAddedPath($path)
    {
        $path = $this->getPath().'/'.$path;

        return $this->withPath($path);
    }

    /**
     * Check if the uri has a query parameter.
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasQueryParameter($name)
    {
        return isset($this->info['query'][$name]);
    }

    /**
     * Returns all query parameters.
     *
     * @return array
     */
    public function getQueryParameters()
    {
        return $this->info['query'];
    }

    /**
     * Returns a query parameter value.
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
     * Returns a clone with a new query parameter.
     *
     * @param string $name  The parameter name
     * @param string $value The parameter value
     *
     * @return Uri
     */
    public function withQueryParameter($name, $value)
    {
        $clone = clone $this;

        $clone->info['query'][$name] = $value;

        return $clone;
    }

    /**
     * Returns a clone with new query parameters merged.
     *
     * @param array $parameters
     *
     * @return Uri
     */
    public function withAddedQueryParameters(array $parameters)
    {
        $clone = clone $this;

        $clone->info['query'] = empty($clone->info['query']) ? $parameters : array_replace($clone->info['query'], $parameters);

        return $clone;
    }

    /**
     * Returns a clone with new query parameters.
     *
     * @param array $parameters
     *
     * @return Uri
     */
    public function withQueryParameters(array $parameters)
    {
        $clone = clone $this;

        $clone->info['query'] = $parameters;

        return $clone;
    }

    /**
     * Return the uri fragment.
     *
     * @return string
     */
    public function getFragment()
    {
        return isset($this->info['fragment']) ? $this->info['fragment'] : null;
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
     * Build the uri using the splitted data.
     */
    protected function buildUri()
    {
        $uri = '';

        if (isset($this->info['content'])) {
            return 'data:'.$this->info['content'];
        }

        if (isset($this->info['scheme'])) {
            $uri .= $this->info['scheme'].'://';
        }

        $user = isset($this->info['user']) ? $this->info['user'] : '';
        $pass = isset($this->info['pass']) ? ':'.$this->info['pass'] : '';
        if ($user || $pass) {
            $uri .= $user.$pass.'@';
        }

        if (isset($this->info['host'])) {
            $uri .= $this->info['host'];
        }

        if (isset($this->info['port'])) {
            $uri .= ':'.$this->info['port'];
        }

        $uri .= $this->getPath();

        if (!empty($this->info['query'])) {
            $uri .= '?'.http_build_query($this->info['query']);
        }
        if (isset($this->info['fragment'])) {
            $uri .= '#'.$this->info['fragment'];
        }

        return $uri;
    }

    /**
     * Parse an uri and split into different pieces.
     *
     * @param string $uri The uri to parse
     */
    protected function parseUri($uri)
    {
        $this->info = parse_url($uri);

        if (isset($this->info['path'])) {
            $this->setPath($this->info['path']);
        }

        if (empty($this->info['query'])) {
            $this->info['query'] = [];

            return;
        }

        // Fix dots and other characters used in query's variables names
        // https://github.com/oscarotero/Embed/issues/101
        $queryString = preg_replace_callback('/(^|(?<=&))[^=[&]+/', function ($key) {
            return bin2hex(urldecode($key[0]));
        }, $this->info['query']);

        parse_str($queryString, $query);

        $this->info['query'] = [];

        foreach ((array) $query as $key => $value) {
            $this->info['query'][hex2bin($key)] = $value;
        }

        array_walk_recursive($this->info['query'], function (&$value) {
            $value = urldecode($value);
        });
    }

    /**
     * Return an absolute uri based in a relative.
     *
     * @return string
     */
    public function getAbsolute($uri)
    {
        $uri = trim($uri);

        if (empty($uri)) {
            return '';
        }

        if (strpos($uri, 'data:') === 0) {
            return $uri;
        }

        if (preg_match('|^\w+://|', $uri)) {
            return $uri;
        }

        if (strpos($uri, '://') === 0) {
            return $this->getScheme().$uri;
        }

        if (strpos($uri, '//') === 0) {
            return $this->getScheme().":$uri";
        }

        if ($uri[0] === '/') {
            return $this->getScheme().'://'.$this->getHost().$uri;
        }

        return $this->getScheme().'://'.$this->getHost().$this->getDirectories().$uri;
    }

    /**
     * Parses and adds path and file value.
     *
     * @param string $path
     */
    private function setPath($path)
    {
        $this->info['path'] = $this->info['file'] = $this->info['extension'] = $this->info['content'] = null;

        if ($this->getScheme() === 'data') {
            $this->info['content'] = $path;

            return;
        }

        $file = substr(strrchr($path, '/'), 1);

        if (strlen($file)) {
            $path = substr($path, 0, -strlen($file));

            if (preg_match('/(.*)\.([\w]+)$/', $file, $match)) {
                $this->info['file'] = $match[1];
                $this->info['extension'] = $match[2];
            } else {
                $this->info['file'] = $file;
            }
        }

        $this->info['path'] = [];

        foreach (explode('/', $path) as $dir) {
            $dir = urldecode($dir);

            if ($dir !== '') {
                $this->info['path'][] = $dir;
            }
        }
    }

    private function getSuffixes()
    {
        if (self::$public_suffix_list === null) {
            self::$public_suffix_list = include __DIR__.'/../resources/public_suffix_list.php';
        }

        return self::$public_suffix_list;
    }
}
