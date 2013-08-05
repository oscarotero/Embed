<?php
/**
 * Generic opengraph provider.
 * Load the opengraph data of an url and store it
 */
namespace Embed\Providers;

use Embed\Url;
use Embed\Viewers;

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

	public function getTitle () {
		return $this->get('title');
	}

	public function getDescription () {
		return $this->get('description');
	}

	public function getType () {
		$type = $this->get('type');

		if (strpos($type, ':') !== false) {
			$type = substr(strrchr($type, ':'), 1);
		}

		switch ($type) {
			case 'video':
			case 'photo':
			case 'link':
			case 'rich':
				return $type;
		}

		if ($this->has('video')) {
			return 'video';
		}
	}

	public function getCode () {
		if ($this->has('video')) {
			switch (pathinfo(parse_url($this->get('video'), PHP_URL_PATH), PATHINFO_EXTENSION)) {
				case 'swf':
					return Viewers::flash($this->get('video'), $this->getWidth(), $this->getHeight());

				case 'mp4':
				case 'ogg':
				case 'ogv':
				case 'webm':
					return Viewers::videoHtml($this->getImage(), $this->get('video'), $this->getWidth(), $this->getHeight());
			}
				
			switch ($this->get('video:type')) {
				case 'application/x-shockwave-flash':
					return Viewers::flash($this->get('video'), $this->getWidth(), $this->getHeight());

				case 'application/mp4':
				case 'video/mp4':
				case 'video/ogg':
				case 'video/ogv':
				case 'video/webm':
					return Viewers::videoHtml($this->getImage(), $this->get('video'), $this->getWidth(), $this->getHeight());
			}
		}
	}

	public function getUrl () {
		return $this->get('url');
	}

	public function getProviderName () {
		return $this->get('site_name');
	}

	public function getImage () {
		return $this->get('image');
	}

	public function getWidth () {
		return $this->get('image:width') ?: $this->get('video:width');
	}

	public function getHeight () {
		return $this->get('image:height') ?: $this->get('video:height');
	}
}
?>
