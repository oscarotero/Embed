<?php
/**
 * Class to manipulate urls
 */
namespace Embed;

class Url {
	private $result;
	private $info;
	private $url;
	private $xmlContent;
	private $jsonContent;
	private $htmlContent;
	private $content;


	/**
	 * Check if an url is an image and gets its data.
	 * 
	 * @param  string $url The image url
	 * 
	 * @return boolean
	 */
	public static function isImage ($url) {
		if (!$url || !($handle = @fopen($url, 'r'))) {
			return false;
		}

		$result = mb_convert_encoding(fread($handle, 2), '8BIT');
		fclose($handle);

		switch ($result) {
			case 'BM':
			case 'GI':
			case chr(0xFF).chr(0xd8):
			case chr(0x89).'P':
				return true;

			case chr(0x00).chr(0x00):
				return @getimagesize($url);
		}

		return false;
	}

	
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
		$connection = curl_init();

		curl_setopt_array($connection, array(
			CURLOPT_URL => $this->url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_MAXREDIRS => 20,
			CURLOPT_CONNECTTIMEOUT => 5,
			CURLOPT_TIMEOUT => 10,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_SSL_VERIFYHOST => false,
			CURLOPT_ENCODING => '',
			CURLOPT_AUTOREFERER => true
		));

		$content = curl_exec($connection);
		$this->result = curl_getinfo($connection);

		curl_close($connection);

		$this->result['starting_url'] = $this->url;

		$this->parseUrl($this->result['url']);
		$this->buildUrl(true);

		if (strpos($this->getResult('content_type'), ';') !== false) {
			list($contentType, $charset) = explode(';', $this->getResult('content_type'));

			$charset = substr(strtoupper(strstr($charset, '=')), 1);

			if (!empty($charset) && ($charset !== 'UTF-8')) {
				mb_convert_encoding($content, 'UTF-8', $charset);
			}
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
	public function getContentType () {
		return $this->getResult('content_type');
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

				$this->xmlContent = new \SimpleXMLElement($response);
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
	 * Set a new path
	 */
	public function setPath ($path) {
		$this->info['path'] = array();

		foreach (explode('/', $path) as $dir) {
			if ($dir !== '') {
				$this->info['path'][] = $dir;
			}
		}

		$this->buildUrl();
	}


	/**
	 * Return the url path
	 */
	public function getPath () {
		return implode('/', $this->info['path']);
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
		if (isset($this->info['path'])) {
			$url .= implode('/', $this->info['path']);
		}
		if (isset($this->info['query'])) {
			$url .= '?'.http_build_query($this->info['query']);
		}
		if (isset($this->info['fragment'])) {
			$url .= '#'.$this->info['fragment'];
		}

		$this->url = $url;
		
		if (!$maintainCache && ($this->url !== $url)) {
			$this->clearCache();
		}
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
			$path = array();

			foreach (explode('/', $this->info['path']) as $dir) {
				$path[] = $dir;
			}

			if (preg_match('/\.([\w]+)$/', end($path), $match)) {
				$this->info['extension'] = $match[1];
			}

			$this->info['path'] = $path;
		}
	}


	/**
	 * Return an absolute url based in a relative
	 *
	 * @return string The absolute url
	 */
	public function getAbsolute ($url) {
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

		if ($url[0] === '?') {
			return $this->getScheme().'://'.$this->getHost().$this->getPath().$url;
		}

		if (substr($this->getPath(), -1) === '/') {
			return $this->getScheme().'://'.$this->getHost().$this->getPath().$url;
		}
		
		return $this->getScheme().'://'.$this->getHost().dirname($this->getPath()).$url;
	}
}
?>
