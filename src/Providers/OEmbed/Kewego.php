<?php
namespace Embed\Providers\OEmbed;

class Kewego extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://api.kewego.com/services/oembed/';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['http://www.kewego.*/video/*'];
    }
}
