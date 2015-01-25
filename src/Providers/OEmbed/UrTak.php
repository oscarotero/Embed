<?php
namespace Embed\Providers\OEmbed;

class UrTak extends OEmbedImplementation
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://oembed.urtak.com/1/oembed';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('https://urtak.com/u/*','https://urtak.com/clr/*');
    }
}
