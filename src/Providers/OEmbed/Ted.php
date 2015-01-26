<?php
namespace Embed\Providers\OEmbed;

class Ted extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://www.ted.com/talks/oembed.xml';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return array('http://www.ted.com/talks/*');
    }
}
