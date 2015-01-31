<?php
namespace Embed\Providers\OEmbed;

class Soundcloud extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://soundcloud.com/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https?://soundcloud.com/*'];
    }
}
