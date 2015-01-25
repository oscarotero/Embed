<?php
namespace Embed\Providers\OEmbed;

class DotSub extends OEmbedImplementation
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
