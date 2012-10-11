<?php
namespace Embed\Providers;

abstract class Provider {
	protected $url;
	protected $parameters;

	public function setParameter ($name, $value) {
		$this->parameters->$name = $value;
	}

	public function getParameters () {
		return $this->parameters;
	}

	public function getParameter ($name) {
		return isset($this->parameters->$name) ? $this->parameters->$name : null;
	}

	public function hasParameter ($name) {
		return isset($this->parameters->$name);
	}

	public function isEmpty () {
		if (!isset($this->parameters)) {
			return false;
		}

		foreach ($this->parameters as $parameter) {
			return false;
		}

		return true;
	}

	public function getUrl () {
		return $this->url;
	}

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
