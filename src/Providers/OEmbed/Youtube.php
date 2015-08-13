<?php
namespace Embed\Providers\OEmbed;

class Youtube extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://www.youtube.com/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return [
            'https?://*youtube.*',
        ];
    }
}
