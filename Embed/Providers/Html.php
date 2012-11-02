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
			$Html->loadHTML($response);
			libxml_use_internal_errors($errors);
		} catch (\Exception $E) {
			return false;
		}

		$urlBase = $Url->getScheme().'://'.$Url->getHost();

		foreach ($Html->getElementsByTagName('link') as $Link) {
			if ($Link->hasAttribute('rel') && $Link->hasAttribute('href')) {
				$rel = trim(strtolower($Link->getAttribute('rel')));
				$href = trim($Link->getAttribute('href'));

				if (strpos($href, '://') === false) {
					$href = $urlBase.$href;
				}

				if ($rel === 'shortcut icon' || $rel === 'icon') {
					$this->set('icon', $href);
				} else if ($rel === 'canonical') {
					$this->set('canonical', $href);
				}
			}
		}

		if (!$this->get('icon') && ($ch = curl_init($urlBase.'/favicon.ico')) !== false) {
			$this->set('icon', $urlBase.'/favicon.ico');
			curl_close($ch);
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
