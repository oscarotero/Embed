<?php
namespace Embed\Providers\OEmbed;

class DotSub extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://dotsub.com/services/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return array('https?://dotsub.com/view/*');
    }
}
