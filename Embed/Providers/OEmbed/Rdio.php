<?php
namespace Embed\Providers\OEmbed;

class Rdio extends \Embed\Providers\OEmbedImplementationAbstract {
    public static function getEndPoint()
    {
        return 'http://www.rdio.com/api/oembed/';
    }
    public static function getPatterns()
    {
        return array('http://www.rdio.com/*');
    }
}
