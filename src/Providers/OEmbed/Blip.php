<?php
namespace Embed\Providers\OEmbed;

class Blip extends \Embed\Providers\OEmbedImplementationAbstract
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://blip.tv/oembed/';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('http://blip.tv/*');
    }
}
