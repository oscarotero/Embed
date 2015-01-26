<?php
namespace Embed\Providers\OEmbed;

class Rdio extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://www.rdio.com/api/oembed/';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return array('https?://www.rdio.com/*');
    }
}
