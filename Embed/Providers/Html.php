<?php
/**
 * Generic opengraph provider.
 * Load the opengraph data of an url and store it
 * It also loads the <title> and <meta name="description"> tags
 */
namespace Embed\Providers;

use Embed\Url;

class Html extends Provider {
	public function __construct (Url $Url) {
		if (!($Html = $Url->getHtmlContent())) {
			return false;
		}

		foreach ($Html->getElementsByTagName('link') as $Link) {
			if ($Link->hasAttribute('rel') && $Link->hasAttribute('href')) {
				$rel = trim(strtolower($Link->getAttribute('rel')));
				$href = trim($Link->getAttribute('href'));

				if (empty($href)) {
					continue;
				}

				$href = $Url->getAbsolute($href);

				switch ($rel) {
					case 'icon':
					case 'shortcut icon':
						$this->set('icon', $href);
						break;

					case 'canonical':
					case 'image_src':
						$this->set($rel, $href);
						break;
				}
			}
		}

		if (!$this->get('icon')) {
			$fav_ico = $Url->getAbsolute('/favicon.ico');
			$fav_png = $Url->getAbsolute('/favicon.png');

			if (@getimagesize($fav_ico)) {
				$this->set('icon', $fav_ico);
			} elseif (@getimagesize($fav_png)) {
				$this->set('icon', $fav_png);
			}
		}

		$Title = $Html->getElementsByTagName('title');

		if ($Title && ($Title->length > 0)) {
			$this->set('title', $Title->item(0)->nodeValue);
		}

		foreach ($Html->getElementsByTagName('meta') as $Tag) {
			//Image
			if ($Tag->hasAttribute('name') && $Tag->getAttribute('name') === 'image') {
				$this->set('image', $Tag->getAttribute('content'));
				continue;
			}

			//Description
			if ($Tag->hasAttribute('name') && $Tag->getAttribute('name') === 'description') {
				$this->set('description', $Tag->getAttribute('content'));
				continue;
			}

			if ($Tag->hasAttribute('http-equiv') && strtolower($Tag->getAttribute('http-equiv')) === 'description') {
				$this->set('description', $Tag->getAttribute('content'));
				continue;
			}

			//Geoposition
			if ($Tag->hasAttribute('name') && (strpos($Tag->getAttribute('name'), 'geo.') === 0)) {
				$this->set($Tag->getAttribute('name'), $Tag->getAttribute('content') ?: $Tag->getAttribute('value'));
				continue;
			}

			if ($Tag->hasAttribute('name') && $Tag->getAttribute('name') === 'ICBM') {
				$this->set('ICBM', $Tag->getAttribute('content'));
				continue;
			}
		}

		//Oembed link
		foreach ($Html->getElementsByTagName('link') as $Link) {
			if (($Link->hasAttribute('rel') && $Link->getAttribute('rel') === 'alternate') && ($Link->hasAttribute('type') && $Link->getAttribute('type') === 'application/json+oembed')) {
				$this->set('oembed', $Link->getAttribute('href'));
				break;
			}
			if (($Link->hasAttribute('rel') && $Link->getAttribute('rel') === 'alternate') && ($Link->hasAttribute('type') && $Link->getAttribute('type') === 'application/xml+oembed')) {
				$this->set('oembed', $Link->getAttribute('href'));
				continue;
			}
		}
	}

	public function getTitle () {
		return $this->get('title');
	}

	public function getDescription () {
		return $this->get('description');
	}

	public function getType () {
		return 'link';
	}

	public function getUrl () {
		return $this->get('canonical');
	}

	public function getProviderIcon () {
		return $this->get('icon');
	}

	public function getImage () {
		return $this->get('image_src') ?: $this->get('image');
	}
}
?>
