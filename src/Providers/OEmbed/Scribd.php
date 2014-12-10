<?php
namespace Embed\Providers\OEmbed;

class Scribd extends \Embed\Providers\OEmbedImplementationAbstract
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://www.scribd.com/services/oembed';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('http://www.scribd.com/doc/*');
    }
}
