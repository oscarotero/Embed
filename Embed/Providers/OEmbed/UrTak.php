<?php
namespace Embed\Providers\OEmbed;

class UrTak extends \Embed\Providers\OEmbedImplementationAbstract
{
    public static function getEndPoint()
    {
        return 'http://oembed.urtak.com/1/oembed';
    }
    public static function getPatterns()
    {
        return array('https://urtak.com/u/*','https://urtak.com/clr/*');
    }
}
