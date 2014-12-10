<?php
namespace Embed\Providers\OEmbed;

class PhotoBucket extends \Embed\Providers\OEmbedImplementationAbstract
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
