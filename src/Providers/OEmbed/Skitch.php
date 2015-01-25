<?php
namespace Embed\Providers\OEmbed;

class Skitch extends OEmbedImplementation
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://skitch.com/oembed/';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('http://skitch.com/*','http://img.skitch.com/*');
    }
}
