<?php
/**
 * Generic opengraph provider.
 * Load the opengraph data of an url and store it
 * It also loads the <title> and <meta name="description"> tags
 */
namespace Embed\Providers;

use Embed\Url;
use Embed\Viewers;

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
					case 'video_src':
					case 'image_src':
						$this->set($rel, $href);
						break;

					case 'alternate':
						if ($Link->hasAttribute('type') && ($Link->getAttribute('type') === 'application/json+oembed' || $Link->getAttribute('type') === 'application/xml+oembed')) {
							$this->set('oembed', $href);
						}
						break;
				}
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
		return $this->has('video_src') ? 'video' : 'link';
	}

	public function getCode () {
		if ($this->has('video_src')) {
			switch ($this->get('video_type')) {
				case 'application/x-shockwave-flash':
					return Viewers::flash($this->get('video_src'), $this->getWidth(), $this->getHeight());
			}
		}
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

	public function getWidth () {
		return $this->get('image_width') ?: $this->get('video_width');
	}

	public function getHeight () {
		return $this->get('image_height') ?: $this->get('video_height');
	}
}
?>
