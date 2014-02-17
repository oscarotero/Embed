<?php
/**
 * Class to return the urls from a xml feed
 */
namespace Embed\Sources;

use Embed\Url;

class Feed extends Source implements SourceInterface {
	protected $data;

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
		$this->Url = $Url;

		if (($Xml = $this->Url->getXMLContent())) {
			$this->data = self::parseRss($Xml) ?: self::parseAtom($Xml);
		}
	}

	public function isValid () {
		return is_array($this->data);
	}

	public function getSourceUrl () {
		return $this->Url->getUrl();
	}

	public function getProviderUrl () {
		return !empty($this->data['url']) ? $this->data['url'] : ($this->Url->getScheme().'://'.$this->Url->getHost());
	}

	public function getItems () {
		return isset($this->data['items']) ? (array)$this->data['items'] : array();
	}

	static protected function parseRss (\SimpleXMLElement $Xml) {
		if (isset($Xml->item)) {
			$items = $Xml->item;
		} else if (isset($Xml->channel)) {
			$items = $Xml->channel->item;
		} else {
			return false;
		}

		return array(
			'url' => (string)$Xml->channel->link,
			'items' => self::getRssItems($items)
		);
	}

	static protected function getRssItems (\SimpleXMLElement $Items) {
		$items = array();

		$namespaces = $Items->getNamespaces(true);
		
		foreach ($Items as $Item) {
			$item = array(
				'url' => null,
				'originUrl' => null,
				'pubdate' => null
			);

			$item['url'] = (string)$Item->link;
			$item['originUrl'] = ((string)$Item->origLink ?: (string)$Item->comments);
			
			$item['pubdate'] = ((string)$Item->pubdate ?: (string)$Item->pubDate);

			if (!$item['pubdate'] && isset($namespaces['dc']) && ($Children = $Item->children($namespaces['dc']))) {
				$item['pubdate'] = (string)$Children->date;
			}

			if (!$item['originUrl'] && isset($namespaces['feedburner']) && ($Children = $Item->children($namespaces['feedburner']))) {
				$item['originUrl'] = (string)$Children->origLink;
			}

			if ($item['url']) {
				$items[] = $item;
			}
		}

		return $items;
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

			var_dump($url);

			break;
		}

		return array(
			'url' => $url,
			'items' => self::getAtomEntries($Xml->entry)
		);
	}

	static protected function getAtomEntries (\SimpleXMLElement $Entries) {
		$items = array();

		foreach ($Entries as $Entry) {
			$item = array(
				'url' => null,
				'originUrl' => null,
				'pubdate' => null
			);

			if ($Entry->created) {
				$item['pubdate'] = (string)$Entry->created;
			} else if ($Entry->updated) {
				$item['pubdate'] = (string)$Entry->updated;
			} else if ($Entry->modified) {
				$item['pubdate'] = (string)$Entry->modified;
			}

			foreach ($Entry->link as $link) {
				$attributes = $link->attributes();

				if (!empty($attributes->href) && ((string)$attributes->rel === 'alternate')) {
					$item['url'] = (string)$attributes->href;
					break;
				}
			}

			foreach ($Entry->link as $link) {
				$attributes = $link->attributes();

				if (!empty($attributes->href) && ((string)$attributes->rel === 'comments')) {
					$item['originUrl'] = (string)$attributes->href;
					break;
				}
			}

			if (!$item['url']) {
				if ($Entry->link) {
					$attributes = $link->attributes();

					if (!empty($attributes->href)) {
						$item['url'] = (string)$attributes->href;
					}
				}
			}

			if ($item['url']) {
				$items[] = $item;
			}
		}

		return $items;
	}
}
