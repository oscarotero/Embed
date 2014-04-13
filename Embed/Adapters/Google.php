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
    public static function check(Request $request)
    {
        return $request->match(array(
            'https://maps.google.*',
            'https://www.google.com/maps*'
        ));
    }

    public function getCode()
    {
        $url = new Url($this->request->getUrl());

        $url->setParameter('output', 'embed');
        $url->setParameter('s', '');

        return Viewers::iframe($url->getUrl());
    }

    public function getImages()
    {
        return array();
    }
}
