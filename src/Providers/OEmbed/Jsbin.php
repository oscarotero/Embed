<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Jsbin extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'http://jsbin.com/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getParams(Url $url)
    {
        return [
            'url' => $url->createUrl()
                ->withDirectoryPosition(2, 'embed')
                ->getUrl(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return [
            'http?://output.jsbin.com/*',
        ];
    }
}
