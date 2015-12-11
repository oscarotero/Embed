<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Smugmug extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
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
