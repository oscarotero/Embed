<?php
namespace Embed\Providers\OEmbed;

class Polldaddy extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://polldaddy.com/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https?://polldaddy.com/poll/*'];
    }
}
