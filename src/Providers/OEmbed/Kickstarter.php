<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Kickstarter extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'http://www.kickstarter.com/services/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https?://www.kickstarter.com/*'];
    }
}
