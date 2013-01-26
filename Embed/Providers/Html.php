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

		$urlBase = $Url->getScheme().'://'.$Url->getHost();
		$url = $Url->getUrl();

		foreach ($Html->getElementsByTagName('link') as $Link) {
			if ($Link->hasAttribute('rel') && $Link->hasAttribute('href')) {
				$rel = trim(strtolower($Link->getAttribute('rel')));
				$href = trim($Link->getAttribute('href'));

				if (empty($href)) {
					continue;
				}

				if (strpos($href, '//') === 0) {
					$href = $Url->getScheme().':'.$href;
				} else if (strpos($href, '://') === false) {
					if ($href[0] === '/') {
						$href = $urlBase.$href;
					} else {
						$href = $Url->getUrl().'/'.$href;
					}
				}

				switch ($rel) {
					case 'icon':
					case 'shortcut icon':
						if (@getimagesize($href)) {
							$this->set('icon', $href);
						}
						break;

					case 'canonical':
					case 'image_src':
						$this->set($rel, $href);
						break;
				}
			}
		}

		if (!$this->get('icon')) {
			if (@getimagesize($urlBase.'/favicon.png')) {
				$this->set('icon', $urlBase.'/favicon.png');
			} elseif (@getimagesize($urlBase.'/favicon.ico')) {
				$this->set('icon', $urlBase.'/favicon.ico');
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

		//Oembed
		foreach ($Html->getElementsByTagName('link') as $Link) {
			if (($Link->hasAttribute('rel') && $Link->getAttribute('rel') === 'alternate') && ($Link->hasAttribute('type') && $Link->getAttribute('type') === 'application/json+oembed')) {
				$this->set('oembed', $Link->getAttribute('href'));
				continue;
			}
		}
	}
}
?>
