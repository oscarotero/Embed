<?php
/**
 * Generic oembed provider.
 * Load the oembed data of an url and store it
 */
namespace Embed\Providers;

use Embed\Url;

class OEmbed extends Provider {
	public function __construct (Url $Url) {
		$format = (($Url->getExtension() === 'xml') || ($Url->getParameter('format') === 'xml')) ? 'xml' : 'json';

		switch ($format) {
			case 'json':
				if (($parameters = $Url->getJsonContent()) && empty($parameters['Error'])) {
					foreach ($parameters as $name => $value) {
						$this->set($name, $value);
					}
				}
				break;

			case 'xml':
				if ($parameters = $Url->getXmlContent()) {
					foreach ($parameters as $element) {
						$this->set($element->getName(), (string)$element);
					}
				}
				break;
			
			default:
				throw new \Exception("No valid format specified");
				break;
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

			case 'movie':
				return 'video';
		}
	}

	public function getCode () {
		return $this->get('html');
	}

	public function getUrl () {
		return $this->get('url');
	}

	public function getAuthorName () {
		return $this->get('author_name');
	}

	public function getAuthorUrl () {
		return $this->get('author_url');
	}

	public function getProviderName () {
		return $this->get('provider_name');
	}

	public function getProviderUrl () {
		return $this->get('provider_url');
	}

	public function getImage () {
		if ($this->getType() === 'photo') {
			return $this->get('url') ?: $this->get('thumbnail_url');
		}

		return $this->get('thumbnail_url');
	}

	public function getWidth () {
		return $this->get('width');
	}

	public function getHeight () {
		return $this->get('height');
	}
}
?>
