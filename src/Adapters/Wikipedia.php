<?php
/**
 * Adapter to provide information from archive.org API
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Utils;
use Embed\Bag;

class Wikipedia extends Webpage implements AdapterInterface
{
    public $api;

    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->match([
            'https?://*.wikipedia.org/wiki/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        parent::run();

        $this->api = new Bag();
        $titles = $this->request->url->getDirectory(1);

        if (!empty($titles)) {
            $url = clone $this->request->url;
            $url->setPath('/w/api.php');
            $url->setParameter('action', 'query');
            $url->setParameter('format', 'json');
            $url->setParameter('continue', '');
            $url->setParameter('titles', $titles);

            //extract images
            $url->setParameter('prop', 'images');

            $api = $this->request->createRequest($url);

            if (($json = $api->getJsonContent())) {
                $this->api->set('images', $json);
            }

            //extract content
            $url->setParameter('prop', 'extracts');
            $url->setParameter('exchars', 1500);
            $api = $this->request->createRequest($url);

            if (($json = $api->getJsonContent())) {
                $this->api->set('extracts', $json);
            }
        }
    }

    /**
     * Gets the page info from wikipedia api
     *
     * @param string $key
     * 
     * @return string|null
     */
    private function getPageInfo($key)
    {
        $extracts = $this->api->get('extracts');

        if (isset($extracts['query']['pages'])) {
            $page = current($extracts['query']['pages']);

            return strip_tags($page[$key]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->getPageInfo('title') ?: parent::getTitle();
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->getPageInfo('extract') ?: parent::getDescription();
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        $images = parent::getImagesUrls();

        $apiImages = $this->api->get('images');

        if (isset($apiImages['query']['pages'])) {
            $page = current($apiImages['query']['pages']);

            $imgs = [];

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

            //Get image urls
            if ($imgs) {
                $url = clone $this->request->url;
                $url->setPath('/w/api.php');
                $url->setParameter('action', 'query');
                $url->setParameter('prop', 'imageinfo');
                $url->setParameter('iiprop', 'url');
                $url->setParameter('format', 'json');
                $url->setParameter('continue', '');
                $url->setParameter('titles', implode('|', $imgs));

                $json = $this->request->createRequest($url)->getJsonContent();

                if (isset($json['query']['pages'])) {
                    foreach ($json['query']['pages'] as $page) {
                        if (isset($page['imageinfo'][0]['url'])) {
                            Utils::unshiftValue($images, [
                                'value' => $page['imageinfo'][0]['url'],
                                'providers' => ['api'],
                            ]);
                        }
                    }
                }
            }
        }

        return $images;
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return 'Wikipedia';
    }
}
