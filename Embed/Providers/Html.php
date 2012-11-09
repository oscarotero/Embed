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
		try {
			if (($response = $Url->getContent()) === '') {
				return false;
			}

			$errors = libxml_use_internal_errors(true);
			$Html = new \DOMDocument();
			$response = mb_convert_encoding($response, 'HTML-ENTITIES', 'UTF-8'); 
			$Html->loadHTML($response);
			libxml_use_internal_errors($errors);
		} catch (\Exception $E) {
			return false;
		}

		$urlBase = $Url->getScheme().'://'.$Url->getHost();
		$url = $Url->getUrl();

		foreach ($Html->getElementsByTagName('link') as $Link) {
			if ($Link->hasAttribute('rel') && $Link->hasAttribute('href')) {
				$rel = trim(strtolower($Link->getAttribute('rel')));
				$href = trim($Link->getAttribute('href'));

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
					case 'shortcut icon':
						$this->set('icon', $href);
						break;

					case 'icon':
					case 'canonical':
					case 'image_src':
						$this->set($rel, $href);
						break;
				}
			}
		}

		if (!$this->get('icon') && @getimagesize($urlBase.'/favicon.ico')) {
			$this->set('icon', $urlBase.'/favicon.ico');
		}

		$Title = $Html->getElementsByTagName('title');

		if ($Title && ($Title->length > 0)) {
			$this->set('title', $Title->item(0)->nodeValue);
		}

		foreach ($Html->getElementsByTagName('meta') as $Tag) {
			if ($Tag->hasAttribute('name') && $Tag->getAttribute('name') === 'description') {
				$this->set('description', $Tag->getAttribute('content'));
				break;
			}
		}
	}
}
?>
