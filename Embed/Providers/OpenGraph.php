<?php
/**
 * Generic opengraph provider.
 * Load the opengraph data of an url and store it
 */
namespace Embed\Providers;

use Embed\Url;

class OpenGraph extends Provider {
	public function __construct (Url $Url) {
		if (!($Html = $Url->getHtmlContent())) {
			return false;
		}

		foreach ($Html->getElementsByTagName('meta') as $Tag) {
			if ($Tag->hasAttribute('property') && (strpos($Tag->getAttribute('property'), 'og:') === 0)) {
				$this->set(substr($Tag->getAttribute('property'), 3), $Tag->getAttribute('content') ?: $Tag->getAttribute('value'));
				continue;
			}

			if ($Tag->hasAttribute('name') && (strpos($Tag->getAttribute('name'), 'og:') === 0)) {
				$this->set(substr($Tag->getAttribute('name'), 3), $Tag->getAttribute('content') ?: $Tag->getAttribute('value'));
			}
		}
	}
}
?>
