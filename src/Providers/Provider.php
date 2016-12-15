<?php

namespace Embed\Providers;

use Embed\Adapters\AdapterInterface;
use Embed\Bag;
use Embed\Embed;

/**
 * Abstract class used by all providers.
 */
abstract class Provider
{
    protected $bag;
    protected $adapter;

    /**
     * {@inheritdoc}
     */
    public function __construct(AdapterInterface $adapter)
    {
        $this->bag = new Bag();
        $this->adapter = $adapter;
        Embed::log('debug', 'Provider', ['class' => get_class($this)]);
    }

    /**
     * {@inheritdoc}
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
     * @param mixed $uris
     *
     * @return array
     */
    protected function normalizeUrls($uris)
    {
        if (!is_array($uris)) {
            return [];
        }

        return array_map([$this, 'normalizeUrl'], array_filter($uris));
    }

    /**
     * Returns the url as absolute.
     *
     * @param string|null $uri
     *
     * @return string|null
     */
    protected function normalizeUrl($uri)
    {
        if (empty($uri)) {
            return;
        }

        return $this->adapter->getResponse()->getUri()->getAbsolute($uri);
    }
}
