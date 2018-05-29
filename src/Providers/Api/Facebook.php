<?php

namespace Embed\Providers\Api;

use Embed\Adapters\Adapter;
use Embed\Providers\Provider;
use Embed\Http\Url;

/**
 * Provider to use the open graph API of facebook.
 */
class Facebook extends Provider
{
    /**
     * {@inheritdoc}
     */
    public function __construct(Adapter $adapter)
    {
        parent::__construct($adapter);

        if (($endPoint = $this->getEndPoint())) {
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
        return $this->bag->get('name');
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->bag->get('description') ?: $this->bag->get('about');
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return 'Facebook';
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
        return $this->bag->get('username') ?: $this->bag->get('owner[name]');
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        $images = (array) $this->bag->get('cover[source]');

        if (($id = $this->bag->get('id'))) {
            $images[] = 'https://graph.facebook.com/'.$id.'/picture';
        }

        return $this->normalizeUrls($images);
    }

    /**
     * {@inheritdoc}
     */
    public function getPublishedTime()
    {
        return $this->bag->get('start_time');
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        return $this->bag->get('embed_html', true);
    }

    /**
     * Returns the Graph API Endpoint
     *
     * @return Url|null
     */
    private function getEndPoint()
    {
        $url = $this->adapter->getResponse()->getUrl();
        $key = $this->adapter->getConfig('facebook[key]');

        if (empty($key)) {
            return;
        }

        if ($url->getDirectoryPosition(0) === 'events') {
            return  Url::create('https://graph.facebook.com/')
                        ->withAddedPath($url->getDirectoryPosition(1))
                        ->withQueryParameter('access_token', $key)
                        ->withQueryParameter('fields', $this->adapter->getConfig('facebook[events_fields]'));
        }

        if ($url->getDirectoryPosition(1) === 'videos') {
            return  Url::create('https://graph.facebook.com/')
                        ->withAddedPath($url->getDirectoryPosition(2))
                        ->withQueryParameter('access_token', $key)
                        ->withQueryParameter('fields', $this->adapter->getConfig('facebook[videos_fields]'));
        }
    }
}
