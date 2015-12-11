<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Imgur extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'http://api.imgur.com/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return [
            'http://imgur.com/*',
            'http://i.imgur.com/*',
        ];
    }
}
