<?php
namespace Embed\Providers\OEmbed;

class Scribd extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://www.scribd.com/services/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https?://www.scribd.com/doc/*'];
    }
}
