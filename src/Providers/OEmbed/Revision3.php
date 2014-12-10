<?php
namespace Embed\Providers\OEmbed;

class Revision3 extends \Embed\Providers\OEmbedImplementationAbstract
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
