<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Ustream extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'http://www.ustream.tv/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https?://www.ustream.tv/*'];
    }
}
