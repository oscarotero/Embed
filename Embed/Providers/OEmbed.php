<?php
/**
 * Generic oembed provider.
 * Load the oembed data of an url and store it
 */
namespace Embed\Providers;

use Embed\Url;

class OEmbed extends Provider {
	public function __construct ($endPoint, $url, $format = 'json', $params = array()) {
		$this->url = $url;

		$params['url'] = $url;
		$params['format'] = $format;

		$Url = new Url($endPoint);

		$Url->setParameter($params);

		$this->loadData($Url);
	}

	protected function loadData (Url $Url) {
		if (($response = $Url->getContent()) === '') {
			return false;
		}

		switch ($Url->getParameter('format')) {
			case 'json':
				$this->parameters = (array)json_decode($response);
				break;

			case 'xml':
				$Xml = new \SimpleXMLElement($response);

				foreach ($Xml as $element) {
					$this->set($element->getName(), (string)$element);
				}
			
			default:
				throw new \Exception("No valid format specified");
				break;
		}
	}
}
?>
