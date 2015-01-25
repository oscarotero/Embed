<?php
namespace Embed\Providers\OEmbed;

class Kewego extends OEmbedImplementation
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://api.kewego.com/services/oembed/';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('http://www.kewego.*/video/*');
    }
}
