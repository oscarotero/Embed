<?php
namespace Embed\Providers\OEmbed;

class Kinomap extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://www.kinomap.com/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['http://www.kinomap.com/*', 'http://kinomap.com/*'];
    }
}
