<?php
namespace Embed\Providers\OEmbed;

class Qik extends \Embed\Providers\OEmbedImplementationAbstract
{
    public static function getEndPoint()
    {
        return 'http://qik.com/api/oembed.json';
    }
    public static function getPatterns()
    {
        return array('http://qik.com/video/*');
    }
}
