<?php
/**
 * Generic opengraph provider.
 * Load the opengraph data of an url and store it
 * It also loads the <title> and <meta name="description"> tags
 */
namespace Embed\Providers;

use Embed\Url;

class OpenGraph extends Provider {
	public function __construct (Url $Url) {
		$this->url = $Url->getUrl();

		$this->loadData($Url);
	}

	protected function loadData (Url $Url) {
		try {
			if (($response = $Url->getContent()) === '') {
				return false;
			}

			$errors = libxml_use_internal_errors(true);
			$Html = new \DOMDocument();
			$Html->loadHTML($response);
			libxml_use_internal_errors($errors);
		} catch (\Exception $E) {
			return false;
		}

		$Title = $Html->getElementsByTagName('title');

		if ($Title && ($Title->length > 0)) {
			$this->set('title', $Title->item(0)->nodeValue);
		}

		foreach ($Html->getElementsByTagName('meta') as $Tag) {
			if ($Tag->hasAttribute('name') && $Tag->getAttribute('name') === 'description' && !$this->has('description')) {
				$this->set('description', $Tag->getAttribute('content'));
				continue;
			}

			if ($Tag->hasAttribute('property') && (strpos($Tag->getAttribute('property'), 'og:') === 0)) {
				$name = strtr(substr($Tag->getAttribute('property'), 3), '-', '_');
				$this->set($name, $Tag->getAttribute('content'));
			}
		}
	}
}
?>
