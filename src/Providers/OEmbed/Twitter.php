<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Twitter extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'https://publish.twitter.com/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
      return ['https?://*.twitter.com/*'];
    }
}
