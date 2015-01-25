<?php
namespace Embed\Providers\OEmbed;

class Imgur extends OEmbedImplementation
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://api.imgur.com/oembed';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array(
            'http://imgur.com/*',
            'http://i.imgur.com/*',
        );
    }
}
