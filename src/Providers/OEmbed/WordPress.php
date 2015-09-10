<?php
namespace Embed\Providers\OEmbed;

/**
 * Class WordPress
 * WordPress.tv embeds
 * @package Embed\Providers\OEmbed
 */
class WordPress extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
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
