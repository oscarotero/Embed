<?php
/**
 * Class to return the urls from a xml feed
 */
namespace Embed\Sources;

use Embed\Url;

class Feed extends Source implements SourceInterface {
	protected $sourceUrl;
	protected $providerUrl;
	protected $urls = array();

	static public function createFromOPML ($string) {
		$Xml = new \SimpleXMLElement($string);

		if (!isset($Xml->body->outline)) {
			return false;
		}

		$result = array();

		foreach ($Xml->body->outline as $outline) {
			$sources = array();

			foreach ($outline as $feed) {
				$Url = new Url((string)$feed->attributes()->xmlUrl);

				if (static::check($Url)) {
					$sources[] = new static($Url);
				}
			}

			$result[] = array(
				'text' => (string)$outline->attributes()->text,
				'sources' => $sources
			);
		}

		return $result;
	}

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
				$this->sourceUrl = $Url->getUrl();
				$this->providerUrl = $data['url'];
				$this->urls = $data['urls'];
				$this->valid = true;
			}
		}
	}

	public function isValid () {
		return $this->valid;
	}

	public function getSourceUrl () {
		return $this->sourceUrl;
	}

	public function getProviderUrl () {
		return $this->providerUrl;
	}

	public function getUrls () {
		return (array)$this->urls;
	}

	static protected function parseRss (\SimpleXMLElement $Xml) {
		if (isset($Xml->channel)) {
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

		$url = '';

		foreach ($Xml->link as $link) {
			$attributes = $link->attributes();

			if (empty($attributes->href) || ((string)$attributes->rel === 'self')) {
				continue;
			}

			$url = (string)$attributes->href;

			break;
		}

		return array(
			'url' => $url,
			'urls' => self::getEntriesLinks($Xml->entry)
		);
	}

	static protected function getEntriesLinks (\SimpleXMLElement $entries) {
		$urls = array();

		foreach ($entries as $entry) {
			foreach ($entry->link as $link) {
				$attributes = $link->attributes();

				if (!empty($attributes->href) && ((string)$attributes->rel === 'alternate')) {
					$urls[] = (string)$attributes->href;
					continue 2;
				}
			}

			if ($entry->link) {
				$attributes = $link->attributes();

				if (!empty($attributes->href)) {
					$urls[] = (string)$attributes->href;
				}
			}
		}

		return $urls;
	}
}
