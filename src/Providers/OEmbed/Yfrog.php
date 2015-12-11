<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Yfrog extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'http://www.yfrog.com/api/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return [
            'http://twitter.yfrog.com/*',
            'http://www.yfrog.com/*',
            'http://a.yfrog.com/*',
        ];
    }
}
