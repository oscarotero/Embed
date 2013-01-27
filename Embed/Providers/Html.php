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

					case 'alternate':
						if ($Link->hasAttribute('type') && ($Link->getAttribute('type') === 'application/json+oembed' || $Link->getAttribute('type') === 'application/xml+oembed')) {
							$this->set('oembed', $Link->getAttribute('href'));
						}
						break;
				}
			}
		}

		if (!$this->get('icon')) {
			$fav_ico = $Url->getAbsolute('/favicon.ico');
			$fav_png = $Url->getAbsolute('/favicon.png');

			if (@getimagesize($fav_png)) {
				$this->set('icon', $fav_png);
			} elseif (@getimagesize($fav_ico)) {
				$this->set('icon', $fav_ico);
			}
		}

		$Title = $Html->getElementsByTagName('title');

		if ($Title && ($Title->length > 0)) {
			$this->set('title', $Title->item(0)->nodeValue);
		}

		foreach ($Html->getElementsByTagName('meta') as $Tag) {
			if ($Tag->hasAttribute('name')) {
				$name = strtolower($Tag->getAttribute('name'));
			} else if ($Tag->hasAttribute('http-equiv')) {
				$name = strtolower($Tag->getAttribute('http-equiv'));
			} else if ($Tag->hasAttribute('property')) {
				$name = strtolower($Tag->getAttribute('property'));
			} else {
				continue;
			}

			if ($Tag->hasAttribute('content')) {
				$this->set($name, $Tag->getAttribute('content'));
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
