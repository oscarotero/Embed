<?php
/**
 * Generic opengraph provider.
 * Load the opengraph data of an url and store it
 */
namespace Embed\Providers;

use Embed\Url;

class OpenGraph extends Provider {
	public function __construct (Url $Url) {
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

		foreach ($Html->getElementsByTagName('meta') as $Tag) {
			if ($Tag->hasAttribute('property') && (strpos($Tag->getAttribute('property'), 'og:') === 0)) {
				$this->set(substr($Tag->getAttribute('property'), 3), $Tag->getAttribute('content'));
				continue;
			}

			if ($Tag->hasAttribute('name') && (strpos($Tag->getAttribute('name'), 'og:') === 0)) {
				$this->set(substr($Tag->getAttribute('name'), 3), $Tag->getAttribute('content'));
			}
		}
	}
}
?>
