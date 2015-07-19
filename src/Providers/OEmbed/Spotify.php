<?php
namespace Embed\Providers\OEmbed;

class Spotify extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
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
