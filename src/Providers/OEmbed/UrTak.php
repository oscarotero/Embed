<?php
namespace Embed\Providers\OEmbed;

class UrTak extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://oembed.urtak.com/1/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return array('https://urtak.com/u/*','https://urtak.com/clr/*');
    }
}
