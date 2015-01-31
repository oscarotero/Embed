<?php
namespace Embed\Providers\OEmbed;

class Smugmug extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://api.smugmug.com/services/oembed/';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['http://www.smugmug.com/*'];
    }
}
