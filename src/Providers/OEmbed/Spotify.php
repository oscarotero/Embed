<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Spotify extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'https://embed.spotify.com/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https?://*.spotify.com/*'];
    }
}
