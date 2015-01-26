<?php
namespace Embed\Providers\OEmbed;

class Instagram extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://api.instagram.com/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return array('http://instagram.com/p/*');
    }
}
