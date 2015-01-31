<?php
/**
 * Adapter to provide information from archive.org API
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Utils;
use Embed\Bag;

class Archive extends Webpage implements AdapterInterface
{
    public $api;

    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->match([
            'http://archive.org/details/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        parent::run();

        $this->api = new Bag();

        $api = clone $this->request;
        $api->url->setParameter('output', 'json');

        if (($json = $api->getJsonContent())) {
            $this->api->set($json);
        }
    }

    /**
     * Gets a metadata value from the arquive.org's api
     *
     * @param string $key
     */
    private function getMetadata($key)
    {
        if (($metadata = $this->api->get('metadata', $key)) && isset($metadata[0])) {
            return $metadata[0];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->getMetadata('title') ?: parent::getTitle();
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->getMetadata('description') ?: parent::getDescription();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        switch ($this->getMetadata('mediatype')) {
            case 'movies':
                return 'video';

            case 'audio':
                return 'audio';

            case 'texts':
                return 'rich';
        }

        return parent::getType();
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        switch ($this->getMetadata('mediatype')) {
            case 'movies':
                $embed_url = str_replace('/details/', '/embed/', $this->getUrl());

                return Utils::iframe($embed_url);

            case 'audio':
                $embed_url = str_replace('/details/', '/embed/', $this->getUrl());

                return Utils::iframe($embed_url, 0, 30);

            case 'texts':
                $embed_url = str_replace('/details/', '/stream/', $this->getUrl()).'?ui=embed';

                return Utils::iframe($embed_url, 480, 430);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        return $this->getMetadata('creator') ?: parent::getAuthorName();
    }

    /**
     * {@inheritdoc}
     */
    public function getImages()
    {
        $images = [];

        if (($image = $this->api->get('misc', 'image'))) {
            $images[] = $image;
        }

        if (is_array($files = $this->api->get('files'))) {
            foreach ($files as $url => $info) {
                if ($info['format'] === 'Thumbnail') {
                    $images[] = $url;
                }
            }
        }

        return $images;
    }
}
