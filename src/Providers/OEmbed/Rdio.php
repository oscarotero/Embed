<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Rdio extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'http://www.rdio.com/api/oembed/';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https?://www.rdio.com/*'];
    }
}
