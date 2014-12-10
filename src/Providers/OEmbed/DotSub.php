<?php
namespace Embed\Providers\OEmbed;

class DotSub extends \Embed\Providers\OEmbedImplementationAbstract
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://dotsub.com/services/oembed';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('https?://dotsub.com/view/*');
    }
}
