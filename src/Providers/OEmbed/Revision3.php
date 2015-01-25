<?php
namespace Embed\Providers\OEmbed;

class Revision3 extends OEmbedImplementation
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://revision3.com/api/oembed/';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('http://revision3.com/*');
    }
}
