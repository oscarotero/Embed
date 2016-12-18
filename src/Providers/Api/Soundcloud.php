<?php

namespace Embed\Providers\Api;

use Embed\Http\Uri;
use Embed\Adapters\AdapterInterface;
use Embed\Providers\Provider;
use Embed\Providers\ProviderInterface;

/**
 * Provider to use the API of soundcloud.
 */
class Soundcloud extends Provider implements ProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function __construct(AdapterInterface $adapter)
    {
        parent::__construct($adapter);

        $key = $adapter->getConfig('soundcloud[key]');

        if (!empty($key)) {
            $endPoint = Uri::create('http://api.soundcloud.com/resolve.json')
                ->withQueryParameters([
                    'client_id' => $key,
                    'url' => (string) $adapter->getResponse()->getUri(),
                ]);

            $response = $adapter->getDispatcher()->dispatch($endPoint);

            if ($json = $response->getJsonContent()) {
                $this->bag->set($json);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->bag->get('title');
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->bag->get('description');
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        return $this->normalizeUrl($this->bag->get('permalink_url'));
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        $images = [];

        if (empty($this->bag->get('artwork_url')) && ($img = $this->bag->get('user[avatar_url]'))) {
            $images[] = str_replace('-large.jpg', '-t500x500.jpg', $img);
        }

        return $this->normalizeUrls($images);
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        return $this->bag->get('user[username]');
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorUrl()
    {
        return $this->normalizeUrl($this->bag->get('user[permalink_url]'));
    }
}
