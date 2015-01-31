<?php
namespace Embed\Providers\OEmbed;

class PhotoBucket extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://s51.photobucket.com/oembed/';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['http://*.photobucket.com/*'];
    }
}
