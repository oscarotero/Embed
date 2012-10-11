<?php
namespace Embed\Providers;

class Html extends Provider {
	public function __construct ($url) {
		$this->url = $url;
		$this->parameters = (object)array();

		$this->loadData($url);
	}

	protected function loadData ($url) {
		if (($Html = $this->loadHtml($url)) === false) {
			return false;
		}

		$Title = $Html->getElementsByTagName('title');

		if ($Title || ($Title->length > 0)) {
			$this->parameters->title = $Title->item(0)->nodeValue;
		}

		$Tags = $Html->getElementsByTagName('meta');

		foreach ($Tags as $Tag) {
			if ($Tag->hasAttribute('name') && $Tag->getAttribute('name') === 'description') {
				$this->parameters->description = $Tag->getAttribute('content');
			}
		}

		return $Html;
	}

	protected function loadHtml ($url) {
		try {
			if (($response = $this->loadContent($url)) === false) {
				return false;
			}

			$errors = libxml_use_internal_errors(true);
			$Html = new \DOMDocument();
			$Html->loadHTML($response);
			libxml_use_internal_errors($errors);
		} catch (\Exception $E) {
			return false;
		}

		return $Html;
	}
}
?>
