<?php
namespace Embed\Providers\OEmbed;

class Skitch extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://skitch.com/oembed/';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return array('http://skitch.com/*','http://img.skitch.com/*');
    }
}
