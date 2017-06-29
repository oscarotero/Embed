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

        if (($id = self::getId($adapter->getResponse()->getUrl()))) {
            $key = $adapter->getConfig('facebook[key]');

            if ($key) {
                $endPoint = Url::create('https://graph.facebook.com/'.$id)
                    ->withQueryParameter('access_token', $key)
                    ->withQueryParameter('fields', 'description,timezone,start_time,end_time,name,owner,privacy,id,cover');

                $response = $adapter->getDispatcher()->dispatch($endPoint);

                if ($json = $response->getJsonContent()) {
                    $this->bag->set($json);
                }
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
     * Returns the id found in a facebook url.
     *
     * @param Url $url
     *
     * @return string
     */
    private static function getId(Url $url)
    {
        if ($url->getDirectoryPosition(0) === 'events') {
            return $url->getDirectoryPosition(1);
        }
    }
}
