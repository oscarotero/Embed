<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Soundcloud extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'http://soundcloud.com/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https?://soundcloud.com/*'];
    }
}
