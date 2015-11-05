<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Polldaddy extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'http://polldaddy.com/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https?://polldaddy.com/poll/*'];
    }
}
