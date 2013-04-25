<?php
namespace Embed\Providers\OEmbed;

class Kewego extends \Embed\Providers\OEmbedImplementationAbstract {
    public static function getEndPoint()
    {
        return 'http://api.kewego.com/services/oembed/';
    }
    public static function getPatterns()
    {
        return array('http://www.kewego.*/video/*');
    }
}
