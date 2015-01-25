<?php
namespace Embed\Providers\OEmbed;

class Rdio extends OEmbedImplementation
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://www.rdio.com/api/oembed/';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('https?://www.rdio.com/*');
    }
}
