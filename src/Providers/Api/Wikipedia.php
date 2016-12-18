<?php

namespace Embed\Providers\Api;

use Embed\Adapters\Adapter;
use Embed\Providers\Provider;

/**
 * Provider to use the API of wikipedia.
 */
class Wikipedia extends Provider
{
    /**
     * {@inheritdoc}
     */
    public function __construct(Adapter $adapter)
    {
        parent::__construct($adapter);

        $titles = $adapter->getResponse()->getUrl()->getDirectoryPosition(1);

        if (!empty($titles)) {
            //extract images
            $endPoint = $adapter->getResponse()->getUrl()
                ->withPath('/w/api.php')
                ->withQueryParameters([
                    'action' => 'query',
                    'format' => 'json',
                    'continue' => '',
                    'titles' => $titles,
                    'prop' => 'images',
                ]);

            $response = $adapter->getDispatcher()->dispatch($endPoint);

            if (($json = $response->getJsonContent())) {
                $this->bag->set('images', $json);
            }

            //extract content
            $endPoint = $endPoint
                ->withQueryParameter('prop', 'extracts')
                ->withQueryParameter('exchars', 1500);

            $response = $adapter->getDispatcher()->dispatch($endPoint);

            if (($json = $response->getJsonContent())) {
                $this->bag->set('extracts', $json);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        $pages = $this->bag->get('extracts[query][pages]');

        if (!empty($pages)) {
            $page = current($pages);

            return strip_tags($page['title']);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        $pages = $this->bag->get('extracts[query][pages]');

        if (!empty($pages)) {
            return $this->bag->get('extracts[query][pages]['.key($pages).'][extract]');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        $images = [];

        $pages = $this->bag->get('images[query][pages]');

        if (!empty($pages)) {
            $page = current($pages);

            $imgs = [];

            if (isset($page['images'])) {
                foreach ($page['images'] as $image) {
                    switch (strrchr($image['title'], '.')) {
                        case '.png':
                        case '.jpg':
                        case '.gif':
                        case '.jpeg':
                            $imgs[] = $image['title'];
                            break;
                    }
                }
            }

            //Get image urls
            if (!empty($imgs)) {
                $endPoint = $this->adapter->getResponse()->getUrl()
                    ->withPath('/w/api.php')
                    ->withQueryParameters([
                        'action' => 'query',
                        'prop' => 'imageinfo',
                        'iiprop' => 'url',
                        'format' => 'json',
                        'continue' => '',
                        'titles' => implode('|', $imgs),
                    ]);

                $response = $this->adapter->getDispatcher()->dispatch($endPoint);
                $json = $response->getJsonContent();

                if (isset($json['query']['pages'])) {
                    foreach ($json['query']['pages'] as $page) {
                        if (isset($page['imageinfo'][0]['url'])) {
                            $images[] = $page['imageinfo'][0]['url'];
                        }
                    }
                }
            }
        }

        return $this->normalizeUrls($images);
    }
}
