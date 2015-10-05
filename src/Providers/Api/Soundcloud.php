<?php

namespace Embed\Providers\Api;

use Embed\Providers\Provider;
use Embed\Providers\ProviderInterface;

/**
 * Provider to use the API of soundcloud.
 */
class Soundcloud extends Provider implements ProviderInterface
{
    protected $config = [
        'key' => null,
    ];

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        if (!empty($this->config['key'])) {
            $api = $this->request
                ->withUrl('http://api.soundcloud.com/resolve.json')
                ->withQueryParameter('client_id', $this->config['key'])
                ->withQueryParameter('url', $this->request->getUrl());

            if ($json = $api->getJsonContent()) {
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
        return $this->bag->get('permalink_url');
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        $images = [];

        if (!$this->bag->get('artwork_url') && ($img = $this->bag->get('user[avatar_url]'))) {
            $images[] = str_replace('-large.jpg', '-t500x500.jpg', $img);
        }

        return $images;
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
        return $this->bag->get('user[permalink_url]');
    }
}
