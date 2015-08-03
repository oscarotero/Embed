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
            'http://*youtube.com/watch*',
            'http://*.youtube.com/v/*',
            'https://*youtube.com/watch*',
            'https://*.youtube.com/v/*',
            'http://youtu.be/*',
            'http://*.youtube.com/user/*',
            'http://*.youtube.com/*#*/*',
            'http://m.youtube.com/watch*',
            'http://m.youtube.com/index*',
            'http://*.youtube.com/profile*',
            'http://*.youtube.com/view_play_list*',
            'http://*.youtube.com/playlist*'
        ];
    }

}