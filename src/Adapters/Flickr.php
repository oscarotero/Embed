<?php
/**
 * Adapter provider more information from flickr
 */
namespace Embed\Adapters;

use Embed\Url;
use Embed\Request;
use Embed\Utils;

class Flickr extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->match([
            'https://www.flickr.com/photos/*'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $url = new Url($this->request->url->getUrl());
        $url->setDirectory(null, 'player');

        return Utils::iframe($url->getUrl(), $this->width, $this->height);
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return 640;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return 425;
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return 'Flickr';
    }
}
