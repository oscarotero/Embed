<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Scribd extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'http://www.scribd.com/services/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https?://www.scribd.com/doc/*'];
    }
}
