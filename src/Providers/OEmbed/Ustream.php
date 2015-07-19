<?php
namespace Embed\Providers\OEmbed;

class Ustream extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://www.ustream.tv/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https?://www.ustream.tv/*'];
    }
}
