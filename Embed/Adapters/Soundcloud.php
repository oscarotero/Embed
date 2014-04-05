<?php
/**
 * Adapter to provide information from soundcloud.com api
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Providers\Provider;

class Soundcloud extends Webpage implements AdapterInterface
{
    public $api;

    public static function check(Request $request)
    {
        return $request->match(array(
            'https?://soundcloud.com/*'
        ));
    }

    protected function initProviders(Request $request)
    {
        parent::initProviders($request);

        $this->api = new Provider();

        $api = new Request('http://api.soundcloud.com/resolve.json');
        $api->setParameter('client_id', isset($this->options['soundcloudClientId']) ? $this->options['soundcloudClientId'] : 'YOUR_CLIENT_ID');
        $api->setParameter('url', $Url->getUrl());

        if ($json = $api->getJsonContent()) {
            $this->api->set($json);
        }
    }

    public function getTitle()
    {
        return $this->api->get('title') ?: parent::getTitle();
    }

    public function getDescription()
    {
        return $this->api->get('description') ?: parent::getDescription();
    }

    public function getUrl()
    {
        return $this->api->get('permalink_url') ?: parent::getUrl();
    }

    public function getImages()
    {
        $images = parent::getImages();

        if (!$this->api->get('artwork_url') && ($img = $this->api->get('user', 'avatar_url'))) {
            array_unshift($images, str_replace('-large.jpg', '-t500x500.jpg', $img));
        }

        return array_unique($images);
    }

    public function getAuthorName()
    {
        return $this->api->get('user', 'username') ?: parent::getAuthorName();
    }

    public function getAuthorUrl()
    {
        return $this->api->get('user', 'permalink_url') ?: parent::getAuthorUrl();
    }
}
