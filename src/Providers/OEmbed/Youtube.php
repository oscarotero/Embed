<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Youtube extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'http://www.youtube.com/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return [
            'https?://*youtube.*',
        ];
    }
}
