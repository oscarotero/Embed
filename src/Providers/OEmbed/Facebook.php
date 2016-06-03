<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Facebook extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        if ($url->match(['*/videos/*', '/video.php'])) {
            return 'https://www.facebook.com/plugins/video/oembed.json';
        }

        return 'https://www.facebook.com/plugins/post/oembed.json';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return [
            'https://www.facebook.com/*',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function embedInDomIsBroken()
    {
        return true;
    }
}
