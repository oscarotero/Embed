<?php
namespace Embed\Providers\OEmbed;

class Deviantart extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://backend.deviantart.com/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['http://www.deviantart.com/art/*', 'http://www.deviantart.com/#/d*'];
    }

    /**
     * {@inheritdoc}
     */
    public static function getParams()
    {
        return ['for' => 'embed'];
    }
}
