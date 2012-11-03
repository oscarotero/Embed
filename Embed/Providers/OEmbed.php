<?php
/**
 * Generic oembed provider.
 * Load the oembed data of an url and store it
 */
namespace Embed\Providers;

use Embed\Url;

class OEmbed extends Provider {
	public function __construct (Url $Url, array $settings) {
		$format = isset($settings['format']) ? $settings['format'] : 'json';

		$params = isset($settings['params']) ? $settings['params'] : array();
		$params['url'] = $Url->getUrl();
		$params['format'] = $format;

		$EndPoint = new Url($settings['endPoint']);
		$EndPoint->setParameter($params);

		if (($response = $EndPoint->getContent()) === '') {
			return false;
		}

		switch ($format) {
			case 'json':
				$parameters = (array)json_decode($response);

				if (empty($parameters['Error'])) {
					foreach ($parameters as $name => $value) {
						$this->set($name, $value);
					}
				}
				break;

			case 'xml':
				$Xml = new \SimpleXMLElement($response);

				foreach ($Xml as $element) {
					$this->set($element->getName(), (string)$element);
				}
				break;
			
			default:
				throw new \Exception("No valid format specified");
				break;
		}
	}
}
?>
