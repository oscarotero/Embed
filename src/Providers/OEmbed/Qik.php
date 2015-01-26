<?php
namespace Embed\Providers\OEmbed;

class Qik extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://qik.com/api/oembed.json';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return array('http://qik.com/video/*');
    }
}
