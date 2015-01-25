<?php
namespace Embed\Providers\OEmbed;

class SoundCloud extends OEmbedImplementation
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://soundcloud.com/oembed';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('https?://soundcloud.com/*');
    }
}
