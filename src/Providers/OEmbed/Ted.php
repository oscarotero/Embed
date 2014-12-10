<?php
namespace Embed\Providers\OEmbed;

class Ted extends \Embed\Providers\OEmbedImplementationAbstract
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
