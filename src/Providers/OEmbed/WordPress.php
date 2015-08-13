<?php
namespace Embed\Providers\OEmbed;

/**
 * Class WordPress
 * WordPress.tv embeds
 * @package Embed\Providers\OEmbed
 * @todo Class is named 'WordPress' to fit existing naming scheme, but could be confused with WordPress.com or WordPress.org
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
