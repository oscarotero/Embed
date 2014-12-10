<?php
namespace Embed\Providers\OEmbed;

class YFrog extends \Embed\Providers\OEmbedImplementationAbstract
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://www.yfrog.com/api/oembed';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('http://twitter.yfrog.com/*','http://www.yfrog.com/*');
    }
}
