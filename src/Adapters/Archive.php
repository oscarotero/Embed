<?php
/**
 * Adapter to provide information from archive.org API
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Viewers;
use Embed\Providers\Provider;

class Archive extends Webpage implements AdapterInterface
{
    public $api;

    /**
     * {@inheritDoc}
     */
    public static function check(Request $request)
    {
        return $request->match(array(
            'http://archive.org/details/*',
        ));
    }

    /**
     * {@inheritDoc}
     */
    protected function initProviders(Request $request)
    {
        parent::initProviders($request);

        $this->api = new Provider();

        $api = clone $request;
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
     * {@inheritDoc}
     */
    public function getTitle()
    {
        return $this->getMetadata('title') ?: parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {
        return $this->getMetadata('description') ?: parent::getDescription();
    }

    /**
     * {@inheritDoc}
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
     * {@inheritDoc}
     */
    public function getCode()
    {
        switch ($this->getMetadata('mediatype')) {
            case 'movies':
                $embed_url = str_replace('/details/', '/embed/', $this->getUrl());

                return Viewers::iframe($embed_url);

            case 'audio':
                $embed_url = str_replace('/details/', '/embed/', $this->getUrl());

                return Viewers::iframe($embed_url, 0, 30);

            case 'texts':
                $embed_url = str_replace('/details/', '/stream/', $this->getUrl()).'?ui=embed';

                return Viewers::iframe($embed_url, 480, 430);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthorName()
    {
        return $this->getMetadata('creator') ?: parent::getAuthorName();
    }

    /**
     * {@inheritDoc}
     */
    public function getImages()
    {
        $images = array();

        if (($image = $this->api->get('misc', 'image'))) {
            $images[] = $this->request->url->getAbsolute($image);
        }

        if (is_array($files = $this->api->get('files'))) {
            foreach ($files as $url => $info) {
                if ($info['format'] === 'Thumbnail') {
                    $images[] = $this->request->url->getAbsolute($url);
                }
            }
        }

        return $images;
    }
}
