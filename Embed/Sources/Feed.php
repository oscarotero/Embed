<?php
/**
 * Class to return the urls from a xml feed
 */
namespace Embed\Sources;

use Embed\Url;

class Feed implements SourceInterface {
	protected $urls = array();

	public function __construct (Url $Url) {
		$Xml = $Url->getXMLContent();

		if (!$Xml) {
			throw new \Exception('The xml is not valid');
		}

		$this->urls = self::getRssUrls($Xml) ?: self::getAtomUrls($Xml);
	}

	public function getUrls () {
		return (array)$this->urls;
	}

	static protected function getRssUrls (\SimpleXMLElement $Xml) {
		if (!isset($Xml->channel->item)) {
			return false;
		}

		$urls = array();

		foreach ($Xml->channel->item as $item) {
			$urls[] = (string)$item->link;
		}

		return $urls;
	}

	static protected function getAtomUrls (\SimpleXMLElement $Xml) {
		if (!isset($Xml->entry)) {
			return false;
		}

		$urls = array();

		foreach ($Xml->entry as $entry) {
			foreach ($entry->link as $link) {
				if ($link->attributes()->rel === 'alternate') {
					$urls[] = (string)$link->attributes()->href;
					continue 2;
				}
			}

			$urls[] = (string)$entry->link->attributes()->href;
		}

		return $urls;
	}
}
