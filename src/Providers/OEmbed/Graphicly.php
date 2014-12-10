<?php
namespace Embed\Providers\OEmbed;

class Graphicly extends \Embed\Providers\OEmbedImplementationAbstract
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://oembed.graphicly.com/1/oembed';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('http://graphicly.com/*/*');
    }
}
