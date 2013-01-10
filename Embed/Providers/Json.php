<?php
/**
 * Generic json provider.
 * Load the json data of an url and store it
 */
namespace Embed\Providers;

use Embed\Url;

class Json extends Provider {
	public function __construct (Url $Url) {
		if (!($json = $Url->getContent())) {
			return false;
		}

		if (!($json = json_decode($json, true))) {
			return false;
		}

		$this->parameters = (array)$json;
	}


	/**
	 * Save a value
	 * 
	 * @param string $name Name of the value
	 * @param string $value The value to save
	 */
	public function set ($name, $value) {
		$this->parameters[trim($name)] = $value;
	}
}
?>
