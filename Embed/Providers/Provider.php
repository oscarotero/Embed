<?php
/**
 * Abstract class with basic functions to all providers (data store, load content, etc)
 */
namespace Embed\Providers;

abstract class Provider {
	protected $url;
	protected $parameters = array();

	
	/**
	 * Save a value
	 * 
	 * @param string $name Name of the value
	 * @param string $value The value to save
	 */
	public function set ($name, $value) {
		$this->parameters[$name] = $value;
	}


	/**
	 * Returns all stored values
	 * 
	 * @return array The values
	 */
	public function getAll () {
		return $this->parameters;
	}


	/**
	 * Get a value or null if not exists
	 * 
	 * @param string $name Value name
	 * 
	 * @return string/null
	 */
	public function get ($name) {
		return isset($this->parameters[$name]) ? $this->parameters[$name] : null;
	}


	/**
	 * Check if a value exists
	 * 
	 * @param string $name Value name
	 * 
	 * @return boolean True if exists, false if not
	 */
	public function has ($name) {
		return isset($this->parameters[$name]);
	}


	/**
	 * Check if any value exists or the provider is empty
	 * 
	 * @return boolean True if is empty, false if not
	 */
	public function isEmpty () {
		return $this->parameters ? false : true;
	}


	/**
	 * Returns the url of the provider
	 * 
	 * @return string The url
	 */
	public function getUrl () {
		return $this->url;
	}

	
	/**
	 * Load the content of a url and return it
	 * 
	 * @param string $url The url to load
	 * 
	 * @return string The content of the url or false
	 */
	protected function loadContent ($url) {
		$connection = curl_init($url);

		curl_setopt($connection, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($connection, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($connection, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

		$response = curl_exec($connection);
		curl_close($connection);

		return empty($response) ? false : $response;
	}
}
?>
