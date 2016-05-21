<?php

namespace Embed\Providers;

use Embed\Request;
use Embed\Bag;

/**
 * Abstract class used by all providers.
 */
abstract class Provider
{
    public $bag;

    protected $request;
    protected $config = [];

    /**
     * {@inheritdoc}
     */
    public function init(Request $request, array $config = null)
    {
        $this->bag = new Bag();
        $this->request = $request;

        if ($config) {
            $this->config = array_replace($this->config, $config);
        }
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
    public function getSource()
    {
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
}
