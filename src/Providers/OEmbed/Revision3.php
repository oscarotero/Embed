<?php
namespace Embed\Providers\OEmbed;

class Revision3 extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://revision3.com/api/oembed/';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return array('http://revision3.com/*');
    }
}
