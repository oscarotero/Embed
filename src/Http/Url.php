<?php

namespace Embed\Http;

/**
 * Class to split and manipulate urls.
 */
class Url
{
    private $info;
    private $url;
    private static $public_suffix_list;

    /**
     * Create a new Url instance.
     *
     * @param string $url
     *
     * @return Url
     */
    public static function create($url)
    {
        return Redirects::resolve(new static($url));
    }

    /**
     * Constructor. Sets the url.
     *
     * @param string $url
     */
    private function __construct($url)
    {
        $this->parseUrl($url);
    }

    /**
     * Returns the url.
     *
     * @return string
     */
    public function __toString()
    {
        if ($this->url === null) {
            return $this->url = $this->buildUrl();
        }

        return $this->url;
    }

    /**
     * Remove the built url on clone.
     */
    public function __clone()
    {
        $this->url = null;
    }

    /**
     * Check if the url match with a specific pattern. The patterns only accepts * and ?
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

        //Remove scheme and query
        $long_url = preg_replace('|^(\w+://)|', '', (string) $this);
        $short_url = preg_replace('|(\?.*)?$|', '', $long_url);

        foreach ($patterns as $pattern) {
            if ($pattern[0] === '?') { // ?hello=world => *?hello=world
                $pattern = '*' . $pattern;
            }

            $pattern = str_replace('\\*', '.*', preg_quote($pattern, '|'));

            if (strpos($pattern, '?') === false) {
                $url = $short_url;
            } else {
                $pattern = str_replace('\\?&', '[\\?&]', $pattern);
                $url = $long_url;
            }

            if (preg_match('|^'.$pattern.'$|i', $url)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Return the content of the url (for embedded images).
     *
     * @return string The content or null
     */
    public function getContent()
    {
        return isset($this->info['content']) ? $this->info['content'] : null;
    }

    /**
     * Return the extension of the url (html, php, jpg, etc).
     *
     * @return string The scheme or null
     */
    public function getExtension()
    {
        return isset($this->info['extension']) ? $this->info['extension'] : null;
    }

    /**
     * Returns a new instance with other relative url.
     *
     * @param string $url
     *
     * @return Url
     */
    public function createAbsolute($url)
    {
        return self::create($this->getAbsolute($url));
    }

    /**
     * Returns a clone with other extension.
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
     * Return the scheme of the url (for example http, https, ftp, etc).
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
     * @return Url
     */
    public function withScheme($scheme)
    {
        $clone = clone $this;
        $clone->info['scheme'] = $scheme;

        return $clone;
    }

    /**
     * Return the host of the url (for example: google.com).
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
     * @return Url
     */
    public function withHost($host)
    {
        $clone = clone $this;
        $clone->info['host'] = $host;

        return $clone;
    }

    /**
     * Return the domain of the url (for example: google).
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
     * Return a specific directory position in the path of the url.
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
     * @return Url
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
     * Return the url path.
     *
     * @return string
     */
    public function getPath()
    {
        $path = !empty($this->info['path']) ? '/'.implode('/', array_map('self::urlEncode', $this->info['path'])).'/' : '/';

        if (isset($this->info['file'])) {
            $path .= self::urlEncode($this->info['file']);

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
     * @return Url
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
     * @return Url
     */
    public function withAddedPath($path)
    {
        $path = $this->getPath().'/'.$path;

        return $this->withPath($path);
    }

    /**
     * Check if the url has a query parameter.
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
     * @return Url
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
     * @return Url
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
     * @return Url
     */
    public function withQueryParameters(array $parameters)
    {
        $clone = clone $this;

        $clone->info['query'] = $parameters;

        return $clone;
    }

    /**
     * Return the url fragment.
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
     * Build the url using the splitted data.
     */
    protected function buildUrl()
    {
        $url = '';

        if (isset($this->info['content'])) {
            return 'data:'.$this->info['content'];
        }

        if (isset($this->info['scheme'])) {
            $url .= $this->info['scheme'].'://';
        }

        $user = isset($this->info['user']) ? $this->info['user'] : '';
        $pass = isset($this->info['pass']) ? ':'.$this->info['pass'] : '';
        if ($user || $pass) {
            $url .= $user.$pass.'@';
        }

        if (isset($this->info['host'])) {
            $url .= $this->info['host'];
        }

        if (isset($this->info['port'])) {
            $url .= ':'.$this->info['port'];
        }

        $url .= $this->getPath();

        if (!empty($this->info['query'])) {
            $url .= '?'.rtrim(http_build_query($this->info['query']), '=');
        }
        if (isset($this->info['fragment'])) {
            $url .= '#'.$this->info['fragment'];
        }

        return $url;
    }

    /**
     * Parse an url and split into different pieces.
     *
     * @param string $url The url to parse
     */
    protected function parseUrl($url)
    {
        $this->info = self::parse($url);

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
     * Return an absolute url based in a relative.
     *
     * @return string
     */
    public function getAbsolute($url)
    {
        $url = trim($url);

        if (empty($url)) {
            return '';
        }

        if (strpos($url, 'data:') === 0) {
            return $url;
        }

        if (preg_match('|^\w+://|', $url)) {
            return self::validUrlOrEmpty($url);
        }

        if (strpos($url, '://') === 0) {
            return self::validUrlOrEmpty($this->getScheme().$url);
        }

        if (strpos($url, '//') === 0) {
            return self::validUrlOrEmpty($this->getScheme().":$url");
        }

        if ($url[0] === '/') {
            return self::validUrlOrEmpty($this->getScheme().'://'.$this->getHost().$url);
        }

        return self::validUrlOrEmpty($this->getScheme().'://'.$this->getHost().$this->getDirectories().$url);
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
                $this->info['file'] = urldecode($match[1]);
                $this->info['extension'] = $match[2];
            } else {
                $this->info['file'] = urldecode($file);
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

    private static function getSuffixes()
    {
        if (self::$public_suffix_list === null) {
            self::$public_suffix_list = include __DIR__.'/../resources/public_suffix_list.php';
        }

        return self::$public_suffix_list;
    }

    /**
     * UTF-8 compatible parse_url
     * http://php.net/manual/en/function.parse-url.php#114817
     *
     * @param string $url
     *
     * @return string
     */
    private static function parse($url)
    {
        $enc_url = preg_replace_callback(
            '%[^:/@?&=#]+%usD',
            function ($matches) {
                return urlencode($matches[0]);
            },
            $url
        );

        $parts = parse_url($enc_url);

        if ($parts === false) {
            throw new \InvalidArgumentException('Malformed URL: ' . $url);
        }

        if (!empty($parts['scheme']) && !in_array($parts['scheme'], ['http', 'https', 'data'])) {
            throw new \InvalidArgumentException(sprintf('Invalid URL scheme: "%s"', $parts['scheme']));
        }

        foreach ($parts as $name => $value) {
            $parts[$name] = urldecode($value);
        }

        return $parts;
    }

    private static function urlEncode($path)
    {
        // : - used for files
        // @ and , - used for GoogleMaps adapter url (in view and streetview modes)
        return str_replace(['%3A','%40','%2C'], [':','@',','], urlencode($path));
    }

    private static function validUrlOrEmpty($url)
    {
        return parse_url($url) === false ? '' : $url;
    }
}
