<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Scribd extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'http://www.scribd.com/services/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getParams(Url $url)
    {
        return [
            'url' => $url->createUrl()->withDirectoryPosition(0, 'doc')->getUrl(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return [
            'https?://www.scribd.com/doc/*',
            'https?://www.scribd.com/document/*',
        ];
    }
}
