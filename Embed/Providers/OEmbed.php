<?php
namespace Embed\Providers;

class OEmbed extends Provider {
	public function __construct ($endPoint, $url, $format = 'json', $params = array()) {
		$this->url = $url;
		$this->parameters = (object)array();

		$params['url'] = $url;
		$params['format'] = $format;

		$this->loadData($endPoint.'?'.http_build_query($params), $format);
	}

	protected function loadData ($url, $format) {
		if (($response = $this->loadContent($url)) === false) {
			return false;
		}

		if ($format === 'json') {
			$this->parameters = json_decode($response);
		} else if ($format === 'xml') {
			$Xml = new \SimpleXMLElement($response);

			foreach ($Xml as $element) {
				$this->parameters->{$element->getName()} = (string)$element;
			}
		} else {
			throw new \Exception("No valid format specified");
		}
	}
}
?>
