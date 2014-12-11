<?php
/**
 * Class to return the urls from a xml feed
 */
namespace Embed\Sources;

use Embed\Request;

class Feed extends Source implements SourceInterface
{
    protected $data;

    /**
     * {@inheritDoc}
     */
    public static function check(Request $request)
    {
        switch ($request->getMimeType()) {
            case 'text/xml':
            case 'text/html':
            case 'application/xml':
            case 'application/atom+xml':
            case 'application/rss+xml':
                return true;
        }

        return false;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(Request $request)
    {
        $this->request = $request;

        if (($xml = $this->request->getXMLContent())) {
            $this->data = self::parseRss($xml) ?: self::parseAtom($xml);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function isValid()
    {
        return is_array($this->data);
    }

    /**
     * {@inheritDoc}
     */
    public function getSourceUrl()
    {
        return $this->request->url->getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getProviderUrl()
    {
        return !empty($this->data['url']) ? $this->data['url'] : ($this->request->url->getScheme().'://'.$this->request->url->getHost());
    }

    /**
     * {@inheritDoc}
     */
    public function getItems()
    {
        return isset($this->data['items']) ? (array) $this->data['items'] : array();
    }

    /**
     * Search data from Rss
     *
     * @param \SimpleXMLElement $xml
     *
     * @return false|array
     */
    protected static function parseRss(\SimpleXMLElement $xml)
    {
        if (isset($xml->item)) {
            $items = $xml->item;
        } elseif (isset($xml->channel)) {
            $items = $xml->channel->item;
        } else {
            return false;
        }

        return array(
            'url' => (string) $xml->channel->link,
            'items' => self::getRssItems($items),
        );
    }

    /**
     * Search items from XML
     *
     * @param \SimpleXMLElement $items
     *
     * @return array
     */
    protected static function getRssItems(\SimpleXMLElement $items)
    {
        $rssItems = array();

        $namespaces = $items->getNamespaces(true);

        foreach ($items as $item) {
            $rssItem = array(
                'url' => null,
                'originUrl' => null,
                'pubdate' => null,
            );

            $rssItem['url'] = (string) $item->link;
            $rssItem['originUrl'] = ((string) $item->origLink ?: (string) $item->comments);
            $rssItem['pubdate'] = ((string) $item->pubdate ?: (string) $item->pubDate);

            if (!$rssItem['pubdate'] && isset($namespaces['dc']) && ($children = $item->children($namespaces['dc']))) {
                $rssItem['pubdate'] = (string) $children->date;
            }

            if (!$rssItem['originUrl'] && isset($namespaces['feedburner']) && ($children = $item->children($namespaces['feedburner']))) {
                $rssItem['originUrl'] = (string) $children->origLink;
            }

            if ($rssItem['url']) {
                $rssItems[] = $rssItem;
            }
        }

        return $rssItems;
    }

    /**
     * Search data from Atom xml
     *
     * @param \SimpleXMLElement $xml
     *
     * @return false|array
     */
    protected static function parseAtom(\SimpleXMLElement $xml)
    {
        if (!isset($xml->entry)) {
            return false;
        }

        $url = '';

        foreach ($xml->link as $link) {
            $attributes = $link->attributes();

            if (empty($attributes->href) || ((string) $attributes->rel === 'self')) {
                continue;
            }
            $url = (string) $attributes->href;
            break;
        }

        return array(
            'url' => $url,
            'items' => self::getAtomEntries($xml->entry),
        );
    }

    /**
     * Search entries from Atom xml
     *
     * @param \SimpleXMLElement $xml
     *
     * @return array
     */
    protected static function getAtomEntries(\SimpleXMLElement $entries)
    {
        $items = array();

        foreach ($entries as $entry) {
            $item = array(
                'url' => null,
                'originUrl' => null,
                'pubdate' => null,
            );

            if ($entry->created) {
                $item['pubdate'] = (string) $entry->created;
            } elseif ($entry->updated) {
                $item['pubdate'] = (string) $entry->updated;
            } elseif ($entry->modified) {
                $item['pubdate'] = (string) $entry->modified;
            }

            foreach ($entry->link as $link) {
                $attributes = $link->attributes();

                if (!empty($attributes->href) && ((string) $attributes->rel === 'alternate')) {
                    $item['url'] = (string) $attributes->href;
                    break;
                }
            }

            foreach ($entry->link as $link) {
                $attributes = $link->attributes();

                if (!empty($attributes->href) && ((string) $attributes->rel === 'comments')) {
                    $item['originUrl'] = (string) $attributes->href;
                    break;
                }
            }

            if (!$item['url'] && isset($link)) {
                $attributes = $link->attributes();

                if (!empty($attributes->href)) {
                    $item['url'] = (string) $attributes->href;
                }
            }

            if ($item['url']) {
                $items[] = $item;
            }
        }

        return $items;
    }
}
