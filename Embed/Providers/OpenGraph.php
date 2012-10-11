<?php
namespace Embed\Providers;

class OpenGraph extends Provider {
	public function __construct ($url) {
		$this->url = $url;
		$this->parameters = (object)array();

		$this->loadData($url);
	}

	protected function loadData ($url) {
		try {
			$connection = curl_init($url);

			curl_setopt($connection, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($connection, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($connection, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

			$response = curl_exec($connection);
			curl_close($connection);

			$errors = libxml_use_internal_errors(true);
			$Html = new \DOMDocument();
			$Html->loadHTML($response);
			libxml_use_internal_errors($errors);
		} catch (\Exception $E) {
			return false;
		}
		

		$Tags = $Html->getElementsByTagName('meta');

		if (!$Tags || ($Tags->length === 0)) {
			return false;
		}

		foreach ($Tags as $Tag) {
			if ($Tag->hasAttribute('property') && (strpos($Tag->getAttribute('property'), 'og:') === 0)) {
				$name = strtr(substr($Tag->getAttribute('property'), 3), '-', '_');
				$this->parameters->$name = $Tag->getAttribute('content');
			}
		}
	}
}
?>
