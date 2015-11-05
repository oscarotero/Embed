<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Deviantart extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'http://backend.deviantart.com/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['http://*.deviantart.com/art/*', 'http://www.deviantart.com/#/d*'];
    }

    /**
     * {@inheritdoc}
     */
    public static function getParams(Url $url)
    {
        return [
            'for' => 'embed',
        ];
    }
}
