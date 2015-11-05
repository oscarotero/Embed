<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Photobucket extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'http://s51.photobucket.com/oembed/';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['http://*.photobucket.com/*'];
    }
}
