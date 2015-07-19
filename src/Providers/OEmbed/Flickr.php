<?php
namespace Embed\Providers\OEmbed;

class Flickr extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://flickr.com/services/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https://www.flickr.com/*'];
    }
}
