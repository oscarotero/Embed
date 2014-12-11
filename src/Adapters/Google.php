<?php
/**
 * Adapter provider more information from google maps
 */
namespace Embed\Adapters;

use Embed\Url;
use Embed\Request;
use Embed\Viewers;

class Google extends Webpage implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public static function check(Request $request)
    {
        return $request->match(array(
            'https://maps.google.*',
            'https://www.google.com/maps*',
        ));
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        $url = new Url($this->request->url->getUrl());

        $url->setParameter('output', 'embed');
        $url->setParameter('s', '');

        return Viewers::iframe($url->getUrl());
    }

    /**
     * {@inheritDoc}
     */
    public function getImages()
    {
        return array();
    }
}
