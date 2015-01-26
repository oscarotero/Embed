<?php
namespace Embed\Providers\OEmbed;

class Graphicly extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://oembed.graphicly.com/1/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return array('http://graphicly.com/*/*');
    }
}
