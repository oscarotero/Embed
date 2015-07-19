<?php
namespace Embed\Providers\OEmbed;

class Shoudio extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://shoudio.com/api/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https?://shoudio.com/*'];
    }
}
