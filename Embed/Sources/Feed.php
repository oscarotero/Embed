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
			case 'text/html':
			case 'application/xml':
			case 'application/atom+xml':
			case 'application/rss+xml':
				return true;
		}

		return false;
	}

	public function __construct (Url $Url) {
		$Xml = $Url->getXMLContent();

		if ($Xml) {
			$data = self::parseRss($Xml) ?: self::parseAtom($Xml);
		
			if (is_array($data)) {
				$this->url = $data['url'];
				$this->urls = $data['urls'];

				$this->valid = true;
			}
		}
	}

	public function isValid () {
		return $this->valid;
	}

	public function getUrl () {
		return $this->url;
	}

	public function getUrls () {
		return (array)$this->urls;
	}

	static protected function parseRss (\SimpleXMLElement $Xml) {
		if (isset($Xml->channel->item)) {
			$items = $Xml->channel->item;
		} else if (isset($Xml->item)) {
			$items = $Xml->item;
		} else {
			return false;
		}

		return array(
			'url' => (string)$Xml->channel->link,
			'urls' => self::getItemsLinks($items)
		);
	}

	static protected function getItemsLinks (\SimpleXMLElement $items) {
		$urls = array();

		foreach ($items as $item) {
			$urls[] = (string)$item->link;
		}

		return $urls;
	}

	static protected function parseAtom (\SimpleXMLElement $Xml) {
		if (!isset($Xml->entry)) {
			return false;
		}

		return array(
			'url' => (string)$Xml->link->attributes()->href,
			'urls' => self::getEntriesLinks($Xml->entry)
		);
	}

	static protected function getEntriesLinks (\SimpleXMLElement $entries) {
		$urls = array();

		foreach ($entries as $entry) {
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
