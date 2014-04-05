<?php
/**
 * Adapter to provide information from facebook graph API
 */
namespace Embed\Adapters;

use Embed\Providers\Provider;
use Embed\Request;
use Embed\Url;

class Facebook extends Webpage implements AdapterInterface
{
    public $api;

    public static function check(Request $request)
    {
        return $request->match(array(
            'https://www.facebook.com/*'
        ));
    }

    protected function initProviders(Request $request)
    {
        parent::initProviders($request);

        $this->api = new Provider();

        if ($this->options['facebookAccessToken']) {
            $url = new Url($request->getStartingUrl());

            if ($url->hasParameter('fbid')) {
                $id = $url->getParameter('fbid');
            } elseif ($url->hasParameter('story_fbid')) {
                $id = $url->getParameter('story_fbid');
            } elseif ($url->getDirectory(0) === 'events') {
                $id = $url->getDirectory(1);
            } elseif ($url->getDirectory(0) === 'pages') {
                $id = $url->getDirectory(2);
            } elseif ($url->getDirectory(1) === 'posts') {
                $id = $url->getDirectory(2);
            } elseif ($url->getDirectory(2) === 'posts') {
                $id = $url->getDirectory(3);
            } else {
                $id = $url->getDirectory(0);
            }

            if ($id) {
                $api = new Request('https://graph.facebook.com/'.$id);
                $api->setParameter('access_token', $this->options['facebookAccessToken']);

                if ($json = $api->getJsonContent()) {
                    $this->api->set($json);
                }
            }
        }
    }

    public function getTitle()
    {
        return $this->api->get('name') ?: parent::getTitle();
    }

    public function getDescription()
    {
        return $this->api->get('description') ?: $this->api->get('about') ?: parent::getTitle();
    }

    public function getUrl()
    {
        return $this->api->get('link') ?: $this->request->getStartingUrl();
    }

    public function getProviderName()
    {
        return 'Facebook';
    }

    public function getAuthorName()
    {
        return $this->api->get('username') ?: parent::getAuthorName();
    }

    public function getSource()
    {
        $id = $this->api->get('id');

        if ($id) {
            return 'https://www.facebook.com/feeds/page.php?id='.$id.'&format=rss20';
        }
    }

    public function getImages()
    {
        $images = parent::getImages();

        $cover = $this->api->get('cover');

        if ($cover && !empty($cover['source'])) {
            array_unshift($images, $cover['source']);
        }

        $id = $this->api->get('id');

        if ($id) {
            array_unshift($images, 'https://graph.facebook.com/'.$id.'/picture');
        }

        return $images;
    }
}
