<?php
namespace Embed\Providers\OEmbed;

class PhotoBucket extends OEmbedImplementation
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://s51.photobucket.com/oembed/';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('http://*.photobucket.com/*');
    }
}
