<?php
namespace Embed\Providers\OEmbed;

class Instagram extends \Embed\Providers\OEmbedImplementationAbstract
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://api.instagram.com/oembed';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('http://instagram.com/p/*');
    }
}
