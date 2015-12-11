<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Iframely extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'http://open.iframe.ly/api/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['*'];
    }
}
