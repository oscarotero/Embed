<?php
namespace Embed\Providers\OEmbed;

class Yfrog extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://www.yfrog.com/api/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return [
            'http://twitter.yfrog.com/*',
            'http://www.yfrog.com/*',
            'http://a.yfrog.com/*',
        ];
    }
}
