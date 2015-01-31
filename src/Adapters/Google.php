<?php
/**
 * Adapter provider more information from google maps
 */
namespace Embed\Adapters;

use Embed\Url;
use Embed\Request;
use Embed\Utils;

class Google extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->match([
            'https://maps.google.*',
            'https://www.google.com/maps*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $url = new Url($this->request->url->getUrl());

        $url->setParameter('output', 'embed');
        $url->setParameter('s', '');

        return Utils::iframe($url->getUrl());
    }

    /**
     * {@inheritdoc}
     */
    public function getImages()
    {
        return [];
    }
}
