<?php

namespace Embed\Providers;

use Embed\Adapters\Adapter;
use Embed\DataInterface;
use Embed\Bag;

/**
 * Abstract class used by all providers.
 */
abstract class Provider implements DataInterface
{
    protected $bag;
    protected $adapter;

    /**
     * Constructor.
     *
     * @param Adapter $adapter
     */
    public function __construct(Adapter $adapter)
    {
        $this->bag = new Bag();
        $this->adapter = $adapter;
    }

    /**
     * Returns the bag containing all data.
     *
     * @return Bag
     */
    public function getBag()
    {
        return $this->bag;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getTags()
    {
        return [];
    }
    /**
     * {@inheritdoc}
     */
    public function getFeeds()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorUrl()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderIconsUrls()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderUrl()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getPublishedTime()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getLicense()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getLinkedData()
    {
        return [];
    }

    /**
     * Returns the urls as absolute.
     *
     * @param mixed $urls
     *
     * @return array
     */
    protected function normalizeUrls($urls)
    {
        if (!is_array($urls)) {
            return [];
        }

        return array_map([$this, 'normalizeUrl'], array_filter($urls));
    }

    /**
     * Returns the url as absolute.
     *
     * @param string|null $url
     *
     * @return string|null
     */
    protected function normalizeUrl($url)
    {
        if (empty($url)) {
            return;
        }

        return $this->adapter->getResponse()->getUrl()->getAbsolute($url);
    }
}
