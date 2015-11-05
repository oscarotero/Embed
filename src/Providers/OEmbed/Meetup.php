<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

class Meetup extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://api.meetup.com/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['http://www.meetup.com/*'];
    }
}
