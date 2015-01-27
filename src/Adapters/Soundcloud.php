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
        return $request->match(array(
            'https?://soundcloud.com/*',
            'https?://m.soundcloud.com/*',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function setRequest(Request $request)
    {
        parent::setRequest($request);

        $this->api = new Bag();

        $api = $request->createRequest('http://api.soundcloud.com/resolve.json');
        $api->startingUrl->setParameter('client_id', isset($this->options['soundcloudClientId']) ? $this->options['soundcloudClientId'] : 'YOUR_CLIENT_ID');
        $api->startingUrl->setParameter('url', $request->url->getUrl());

        if ($json = $api->getJsonContent()) {
            $this->api->set($json);
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
