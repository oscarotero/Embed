<?php

namespace Embed\Providers\Api;

use Embed\Adapters\AdapterInterface;
use Embed\Providers\Provider;
use Embed\Providers\ProviderInterface;

/**
 * Provider to use the API of wikipedia.
 */
class Wikipedia extends Provider implements ProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function __construct(AdapterInterface $adapter)
    {
        parent::__construct($adapter);

        $titles = $adapter->getResponse()->getDirectoryPosition(1);

        if (!empty($titles)) {
            //extract images
            $endPoint = $adapter->getResponse()->getUri()
                ->withPath('/w/api.php')
                ->withQueryParameters([
                    'action' => 'query',
                    'format' => 'json',
                    'continue' => '',
                    'titles' => $titles,
                    'prop' => 'images',
                ]);

            $request = $adapter->createRequest($endPoint);

            if (($json = $request->getResponse()->getJsonContent())) {
                $this->bag->set('images', $json);
            }

            //extract content
            $endPoint = $endPoint
                ->withQueryParameter('prop', 'extracts')
                ->withQueryParameter('exchars', 1500);

            $request = $adapter->createRequest($endPoint);

            if (($json = $request->getResponse()->getJsonContent())) {
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

        if ($pages) {
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

        if ($pages) {
            $page = current($pages);

            return isset($page['extract']) ? strip_tags($page['extract']) : null;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        $images = [];

        $pages = $this->bag->get('images[query][pages]');

        if ($pages) {
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
            if ($imgs) {
                $endPoint = $this->adapter->getResponse()->getUri()
                    ->withPath('/w/api.php')
                    ->withQueryParameters([
                        'action' => 'query',
                        'prop' => 'imageinfo',
                        'iiprop' => 'url',
                        'format' => 'json',
                        'continue' => '',
                        'titles' => implode('|', $imgs),
                    ]);

                $request = $this->adapter->createRequest($endPoint);
                $json = $request->getResponse()->getJsonContent();

                if (isset($json['query']['pages'])) {
                    foreach ($json['query']['pages'] as $page) {
                        if (isset($page['imageinfo'][0]['url'])) {
                            $images[] = $page['imageinfo'][0]['url'];
                        }
                    }
                }
            }
        }

        return $images;
    }
}
