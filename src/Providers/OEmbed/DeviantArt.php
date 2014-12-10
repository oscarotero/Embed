<?php
namespace Embed\Providers\OEmbed;

class DeviantArt extends \Embed\Providers\OEmbedImplementationAbstract
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://backend.deviantart.com/oembed';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('http://www.deviantart.com/art/*', 'http://www.deviantart.com/#/d*');
    }

    /**
     * {@inheritDoc}
     */
    public static function getParams()
    {
        return array('for' => 'embed');
    }
}
