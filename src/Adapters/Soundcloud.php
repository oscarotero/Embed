<?php
/**
 * Adapter to provide information from soundcloud.com API
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Bag;

class Soundcloud extends Webpage implements AdapterInterface
{
    public $api;

    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->match([
            'https?://soundcloud.com/*',
            'https?://m.soundcloud.com/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        parent::run();

        $this->api = new Bag();

        if (isset($this->config['soundcloudKey'])) {
            $api = $this->request->createRequest('http://api.soundcloud.com/resolve.json');
            $api->startingUrl->setParameter('client_id', $this->config['soundcloudKey']);
            $api->startingUrl->setParameter('url', $this->request->url->getUrl());

            if ($json = $api->getJsonContent()) {
                $this->api->set($json);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->api->get('title') ?: parent::getTitle();
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->api->get('description') ?: parent::getDescription();
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        return $this->api->get('permalink_url') ?: parent::getUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getImages()
    {
        $images = parent::getImages();

        if (!$this->api->get('artwork_url') && ($img = $this->api->get('user', 'avatar_url'))) {
            array_unshift($images, str_replace('-large.jpg', '-t500x500.jpg', $img));
        }

        return array_unique($images);
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        return $this->api->get('user', 'username') ?: parent::getAuthorName();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorUrl()
    {
        return $this->api->get('user', 'permalink_url') ?: parent::getAuthorUrl();
    }
}
