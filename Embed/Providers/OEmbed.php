<?php
/**
 * Generic oembed provider.
 * Load the oembed data of an url and store it
 */
namespace Embed\Providers;

class OEmbed extends Provider {
	public function __construct ($endPoint, $url, $format = 'json', $params = array()) {
		$this->url = $url;

		$params['url'] = $url;
		$params['format'] = $format;

		$this->loadData($endPoint.'?'.http_build_query($params), $format);
	}

	protected function loadData ($url, $format) {
		if (($response = $this->loadContent($url)) === false) {
			return false;
		}

		if ($format === 'json') {
			$this->parameters = (array)json_decode($response);
		} else if ($format === 'xml') {
			$Xml = new \SimpleXMLElement($response);

			foreach ($Xml as $element) {
				$this->set($element->getName(), (string)$element);
			}
		} else {
			throw new \Exception("No valid format specified");
		}
	}
}
?>
