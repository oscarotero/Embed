<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Instagram extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'http://api.instagram.com/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return [
            'https?://instagram.com/p/*',
            'https?://www.instagram.com/p/*',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function getParams(Url $url)
    {
        return ['url' => $url->withScheme('http')->getUrl()];
    }
}
