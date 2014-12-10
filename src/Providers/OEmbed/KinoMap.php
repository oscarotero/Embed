<?php
namespace Embed\Providers\OEmbed;

class KinoMap extends \Embed\Providers\OEmbedImplementationAbstract
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://www.kinomap.com/oembed';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('http://www.kinomap.com/*', 'http://kinomap.com/*');
    }
}
