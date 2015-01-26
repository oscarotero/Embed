<?php
namespace Embed\Providers\OEmbed;

class SmugMug extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://api.smugmug.com/services/oembed/';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return array('http://www.smugmug.com/*');
    }
}
