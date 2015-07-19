<?php
namespace Embed\Providers\OEmbed;

class Bambuser extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://api.bambuser.com/oembed.json';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['http?://bambuser.com/v/*'];
    }
}
