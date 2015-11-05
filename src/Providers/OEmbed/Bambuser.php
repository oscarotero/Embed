<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Bambuser extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'https://api.bambuser.com/oembed.json';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['http?://bambuser.com/v/*'];
    }
}
