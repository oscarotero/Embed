<?php
namespace Embed\Providers;

class OpenGraph extends Html {
	protected function loadData ($url) {
		if (($Html = parent::loadHtml($url)) === false) {
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
