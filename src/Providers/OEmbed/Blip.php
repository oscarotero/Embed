<?php
namespace Embed\Providers\OEmbed;

class Blip extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://blip.tv/oembed/';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['http://blip.tv/*'];
    }
}
