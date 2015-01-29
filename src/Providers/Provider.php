<?php
namespace Embed\Providers;

use Embed\Request;
use Embed\Bag;

abstract class Provider
{
    public $bag;

    protected $request;
    protected $options;

    /**
     * Constructor. Init the bag
     */
    public function __construct()
    {
        $this->bag = new Bag();
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
    public function getProviderIcons()
    {
        return array();
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
    public function getImages()
    {
        return array();
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
}
