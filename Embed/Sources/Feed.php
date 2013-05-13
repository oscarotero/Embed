<?php
/**
 * Class to return the urls from a xml feed
 */
namespace Embed\Sources;

use Embed\Url;

class Feed extends Source implements SourceInterface {
	protected $url;
	protected $urls = array();

	static public function check (Url $Url) {
		switch ($Url->getMimeType()) {
			case 'text/xml':
				return true;
		}

		return false;
	}

	public function __construct (Url $Url) {
		$Xml = $Url->getXMLContent();

		if (!$Xml) {
			throw new \Exception('The xml is not valid');
		}

		$data = self::parseRss($Xml) ?: self::parseAtom($Xml);
		
		if ($data) {
			$this->url = $data['url'];
			$this->urls = $data['urls'];
		}
	}

	public function getUrl () {
		return $this->url;
	}

	public function getUrls () {
		return (array)$this->urls;
	}

	static protected function parseRss (\SimpleXMLElement $Xml) {
		if (!isset($Xml->channel->item)) {
			return false;
		}

		$urls = array();

		foreach ($Xml->channel->item as $item) {
			$urls[] = (string)$item->link;
		}

		return array(
			'url' => $Xml->channel->link,
			'urls' => $urls
		);
	}

	static protected function parseAtom (\SimpleXMLElement $Xml) {
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

		return array(
			'url' => $Xml->link->attributes()->href,
			'urls' => $urls
		);
	}
}
