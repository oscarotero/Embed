<?php
/**
 * Class to manipulate urls
 */
namespace Embed;

class Url {
	public static $resolver = 'Embed\\UrlResolver';
	private $result;
	private $info;
	private $url;
	private $xmlContent;
	private $jsonContent;
	private $htmlContent;
	private $content;


	/**
	 * Constructor. Sets the url
	 * 
	 * @param string $url The url value
	 */
	public function __construct ($url) {
		$this->setUrl($url);
	}


	/**
	 * Magic function to print the url value
	 */
	public function __toString () {
		return $this->getUrl();
	}


	/**
	 * Magic function to serialize and unserialize the object (keeps only the url for performance)
	 */
	public function __sleep () {
		return array('url', 'result');
	}

	public function __wakeup () {
		$this->setUrl($this->url);
	}


	/**
	 * Resolve the possible redirects for this url (for example bit.ly or any other url shortcutter)
	 */
	private function resolve () {
		UrlJsRedirect::resolve($this);

		$resolver = static::$resolver;

		list($content, $result) = $resolver::resolve($this->url);

		$this->result = $result;
		$this->result['starting_url'] = $this->url;

		$this->parseUrl($this->result['url']);
		$this->buildUrl(true);

		if (strpos($this->getResult('content_type'), ';') !== false) {
			list($mimeType, $charset) = explode(';', $this->getResult('content_type'));

			$this->result['mime_type'] = $mimeType;

			$charset = substr(strtoupper(strstr($charset, '=')), 1);

			if (!empty($charset) && ($charset !== 'UTF-8')) {
				@mb_convert_encoding($content, 'UTF-8', $charset);
			}
		} else if (strpos($this->getResult('content_type'), '/') !== false) {
			$this->result['mime_type'] = $this->getResult('content_type');
		}

		$this->content = trim($content);
	}


	/**
	 * Get the result of the http request
	 * 
	 * @param string $name If it is not specified, returns all result info
	 * 
	 * @return array/string The result info
	 */
	public function getResult ($name = null) {
		if ($this->result === null) {
			$this->resolve();
		}

		if ($name === null) {
			return $this->result;
		}

		return isset($this->result[$name]) ? $this->result[$name] : null;
	}



	/**
	 * Get the http code of the url
	 * 
	 * @return int The http code
	 */
	public function getHttpCode () {
		return intval($this->getResult('http_code'));
	}


	/**
	 * Get the content-type of the url
	 * 
	 * @return string The content-type header or null
	 */
	public function getMimeType () {
		return $this->getResult('mime_type');
	}


	/**
	 * Get the content of the url
	 * 
	 * @return string The content or false
	 */
	public function getContent () {
		if ($this->content === null) {
			$this->resolve();
		}

		return $this->content;
	}


	/**
	 * Get the content of the url as a DOMDocument object
	 * 
	 * @return DOMDocument The content or false
	 */
	public function getHtmlContent () {
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
	public function getJsonContent () {
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
	public function getXMLContent () {
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
	 * Clear all cached content (raw, html, json, etc)
	 */
	public function clearCache () {
		$this->result = $this->content = $this->htmlContent = $this->jsonContent = $this->xmlContent = null;
	}



	/**
	 * Check if the url is valid or not
	 * 
	 * @return boolean True if it's valid, false if not
	 */
	public function isValid () {
		if ($this->getHttpCode() !== 200) {
			return false;
		}

		return true;
	}


	/**
	 * Set a new url
	 * 
	 * @param string $url The url
	 */
	public function setUrl ($url) {
		$this->parseUrl($url);
		$this->buildUrl();
	}


	/**
	 * Return the url
	 * 
	 * @return string The current url
	 */
	public function getUrl () {
		return $this->url;
	}


	/**
	 * Return the starting url (before all possible redirects)
	 * 
	 * @return string The starting url
	 */
	public function getStartingUrl () {
		return $this->result ? $this->result['starting_url'] : $this->url;
	}


	/**
	 * Check if the url match with a specific pattern. The patterns only accepts * and ?
	 * 
	 * @param string/array $pattern The pattern or an array with various patterns
	 * 
	 * @return boolean True if the url match, false if not
	 */
	public function match ($pattern) {
		if (is_array($pattern)) {
			foreach ($pattern as $p) {
				if ($this->match($p) === true) {
					return true;
				}
			}

			return false;
		}

		$pattern = str_replace(array('\\*', '\\?'), array('.+', '?'), preg_quote($pattern, '|'));

		return (preg_match('|^'.$pattern.'$|i', $this->url) === 1) ? true : false;
	}


	/**
	 * Return the extension of the url (html, php, jpg, etc)
	 * 
	 * @return string The scheme or null
	 */
	public function getExtension () {
		return isset($this->info['extension']) ? $this->info['extension'] : null;
	}

	/**
	 * Return the scheme of the url (for example http, https, ftp, etc)
	 * 
	 * @return string The scheme or null
	 */
	public function getScheme () {
		return isset($this->info['scheme']) ? $this->info['scheme'] : null;
	}

	
	/**
	 * Change the scheme of the url
	 * 
	 * @param string $scheme The new scheme
	 */
	public function setScheme ($scheme) {
		$this->info['scheme'] = $scheme;
		$this->buildUrl();
	}


	/**
	 * Return the host of the url (for example: google.com)
	 * 
	 * @return string The host or null
	 */
	public function getHost () {
		return isset($this->info['host']) ? $this->info['host'] : null;
	}


	/**
	 * Change the host of the url
	 * 
	 * @param string $host The new host
	 */
	public function setHost ($host) {
		$this->info['host'] = $host;
		$this->buildUrl();
	}


	/**
	 * Return the domain of the url (for example: google)
	 *
	 * @param boolean $first_level True to return the first level domain (.com, .es, etc)
	 * 
	 * @return string The domain or null
	 */
	public function getDomain ($first_level = false) {
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
	public function getDirectory ($key) {
		return isset($this->info['path'][$key]) ? $this->info['path'][$key] : null;
	}


	/**
	 * Set a new path
	 */
	public function setPath ($path) {
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

		$this->buildUrl();
	}


	/**
	 * Return the url path
	 */
	public function getPath ($file = false) {
		$path = isset($this->info['path']) ? '/'.implode('/', $this->info['path']).'/' : '/';

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
	public function hasParameter ($name) {
		return isset($this->info['query'][$name]);
	}


	/**
	 * Returns a GET parameter value
	 * 
	 * @param string $name The parameter name
	 * 
	 * @return string The parameter value or null
	 */
	public function getParameter ($name) {
		return isset($this->info['query'][$name]) ? $this->info['query'][$name] : null;
	}


	/**
	 * Set a new GET parameter or modify an existing one
	 * 
	 * @param string $name The parameter name or an array of parameters
	 * @param string $value The parameter value
	 */
	public function setParameter ($name, $value = null) {
		if (is_array($name)) {
			$this->info['query'] = empty($this->info['query']) ? $name : array_replace($this->info['query'], $name);
		} else {
			$this->info['query'][$name] = $value;
		}
		
		$this->buildUrl();
	}


	/**
	 * Return the url fragment
	 * 
	 * @return string The fragment value or null
	 */
	public function getFragment () {
		return isset($this->info['fragment']) ? $this->info['fragment'] : null;
	}



	/**
	 * Return the fragments as an array
	 * 
	 * @return array The fragment values
	 */
	public function getFragmentArray () {
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
	public function setFragment ($fragment) {
		$this->info['fragment'];

		$this->buildUrl();
	}


	/**
	 * Private function to regenerate the url after any change (scheme, host, parameters, etc)
	 */
	private function buildUrl ($maintainCache = false) {
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

		if (!$maintainCache && ($this->url !== $url)) {
			$this->clearCache();
		}

		$this->url = $url;
	}


	/**
	 * Parse a url and split into different pieces
	 *
	 * @param  string $url The url to parse
	 */
	private function parseUrl ($url) {
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
	public function getAbsolute ($url) {
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
