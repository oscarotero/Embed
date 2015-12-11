<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Dotsub extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'http://dotsub.com/services/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https?://dotsub.com/view/*'];
    }
}
