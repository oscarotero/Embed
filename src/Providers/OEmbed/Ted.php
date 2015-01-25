<?php
namespace Embed\Providers\OEmbed;

class Ted extends OEmbedImplementation
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://www.ted.com/talks/oembed.xml';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('http://www.ted.com/talks/*');
    }
}
