<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

/**
 * Class WordPress
 * WordPress.tv embeds.
 */
class WordPress extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
        return 'https://wordpress.tv/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https?://wordpress.tv/*'];
    }

    /**
     * {@inheritdoc}
     */
    public static function embedInDomIsBroken()
    {
        return true;
    }
}
