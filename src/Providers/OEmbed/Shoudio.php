<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Shoudio extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'http://shoudio.com/api/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https?://shoudio.com/*'];
    }
}
