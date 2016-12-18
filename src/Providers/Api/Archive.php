<?php

namespace Embed\Providers\Api;

use Embed\Adapters\Adapter;
use Embed\Providers\Provider;

/**
 * Provider to use the API of archive.org.
 */
class Archive extends Provider
{
    /**
     * {@inheritdoc}
     */
    public function __construct(Adapter $adapter)
    {
        parent::__construct($adapter);

        $endPoint = $adapter->getResponse()->getUrl()->withQueryParameter('output', 'json');
        $response = $adapter->getDispatcher()->dispatch($endPoint);

        if (($json = $response->getJsonContent())) {
            $this->bag->set($json);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->bag->get('metadata[title][0]');
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->bag->get('metadata[description][0]');
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        switch ($this->bag->get('metadata[mediatype][0]')) {
            case 'movies':
                return 'video';

            case 'audio':
                return 'audio';

            case 'texts':
                return 'rich';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return 'Internet Archive';
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        return $this->normalizeUrl($this->bag->get('url'));
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        $this->bag->get('metadata[creator][0]');
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        $images = (array) $this->bag->get('misc[image]');

        foreach (array_keys((array) $this->bag->get('files')) as $url) {
            $images[] = $url;
        }

        return $this->normalizeUrls($images);
    }
}
