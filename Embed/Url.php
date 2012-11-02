<?php
/**
 * Class to manipulate urls
 */
namespace Embed;

class Url {
	private $info;
	private $url;
	private $content;
	private $contentType;
	private $httpCode;

	
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
	 * Resolve the possible redirects for this url (for example bit.ly or any other url shortcutter)
	 */
	public function resolve () {
		$connection = curl_init($this->url);

		curl_setopt($connection, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($connection, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($connection, CURLOPT_MAXREDIRS, 10);
		curl_setopt($connection, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($connection, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

		$string = curl_exec($connection);

		if ((mb_detect_encoding($string) === 'UTF-8') && mb_check_encoding($string, 'UTF-8')) {
			$string = utf8_decode($string);
		}

		$this->httpCode = intval(curl_getinfo($connection, CURLINFO_HTTP_CODE));
		$this->contentType = curl_getinfo($connection, CURLINFO_CONTENT_TYPE);
		$this->setUrl(curl_getinfo($connection, CURLINFO_EFFECTIVE_URL));
		$this->content = trim($string);

		curl_close($connection);
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
	 * Get the http code of the url
	 * 
	 * @return int The http code
	 */
	public function getHttpCode () {
		if (!isset($this->content)) {
			$this->resolve();
		}

		return $this->httpCode;
	}


	/**
	 * Get the content-type of the url
	 * 
	 * @return string The content-type header or null
	 */
	public function getContentType () {
		if (!isset($this->content)) {
			$this->resolve();
		}

		return $this->contentType;
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
		$this->info = parse_url($url);

		if (isset($this->info['query'])) {
			parse_str($this->info['query'], $this->info['query']);
		}

		if (isset($this->info['path'])) {
			$path = array();

			foreach (explode('/', $this->info['path']) as $dir) {
				if ($dir !== '') {
					$path[] = $dir;
				}
			}

			$this->info['path'] = $path;
		}

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
	 * @return string The domain or null
	 */
	public function getDomain () {
		$host = $this->getHost();

		if (!$host) {
			return null;
		}

		$host = array_reverse(explode('.', $host));

		switch (count($host)) {
			case 1:
				return $host[0];

			case 2:
				return $host[1];

			default:
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
	 * Remove a portion of the path
	 * 
	 * @param int $offset The position to start to remove
	 * @param int $length The number of directories to remove. If not specified, removes until the end
	 */
	public function splicePath ($offset, $length = null) {
		if (isset($length)) {
			array_splice($this->info['path'], $offset, $length);
		} else {
			array_splice($this->info['path'], $offset);
		}

		$this->buildUrl();
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
	 * Private function to regenerate the url after any change (scheme, host, parameters, etc)
	 */
	private function buildUrl () {
		$url = '';

		if (isset($this->info['scheme'])) {
			$url .= $this->info['scheme'].'://';
		}
		if (isset($this->info['host'])) {
			$url .= $this->info['host'];
		}
		if (isset($this->info['path'])) {
			$url .= '/'.implode('/', $this->info['path']);
		}
		if (isset($this->info['query'])) {
			$url .= '?'.http_build_query($this->info['query']);
		}
		if (isset($this->info['fragment'])) {
			$url .= '#'.$this->info['fragment'];
		}

		if ($this->url !== $url) {
			$this->url = $url;
			$this->content = null;
		}
	}
}
?>