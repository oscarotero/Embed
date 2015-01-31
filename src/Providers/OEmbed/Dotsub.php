<?php
namespace Embed\Providers\OEmbed;

class Dotsub extends OEmbedImplementation
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
        return ['https?://dotsub.com/view/*'];
    }
}
