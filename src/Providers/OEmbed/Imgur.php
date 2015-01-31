<?php
namespace Embed\Providers\OEmbed;

class Imgur extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
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
