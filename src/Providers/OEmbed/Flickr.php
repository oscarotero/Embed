<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Flickr extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'http://flickr.com/services/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https://www.flickr.com/*'];
    }
}
