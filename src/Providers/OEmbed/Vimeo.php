<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Vimeo extends OEmbedImplementation
{

    /**
     * @inheritDoc
     */
    public static function getEndPoint(Url $url)
    {
        return 'https://vimeo.com/api/oembed.json';
    }

    /**
     * @inheritDoc
     */
    public static function getPatterns()
    {
        return [
            'https?://*.vimeo.com*',
            'https?://vimeo.com*',
        ];
    }

    /**
     * @inheritDoc
     */
    public static function getParams(Url $url)
    {
        return [
            'url' => $url->withScheme('http')->getUrl(),
        ];
    }
}
