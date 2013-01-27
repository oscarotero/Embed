<?php
/**
 * Abstract class with basic functions to all providers (data store, load content, etc)
 */
namespace Embed\Providers;

class Provider {
	protected $parameters = array();

	
	/**
	 * Save a value
	 * 
	 * @param string $name Name of the value
	 * @param string $value The value to save
	 */
	public function set ($name, $value) {
		$this->parameters[trim($name)] = is_string($value) ? trim($value) : $value;
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
	 * Specific get values
	 */
	public function __call ($name, $arguments) {
		return null;
	}
}
?>
