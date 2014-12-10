<?php
namespace Embed\Providers\OEmbed;

class SmugMug extends \Embed\Providers\OEmbedImplementationAbstract
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://api.smugmug.com/services/oembed/';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('http://www.smugmug.com/*');
    }
}
