<?php
namespace Embed\Providers\OEmbed;

class Revision3 extends \Embed\Providers\OEmbedImplementationAbstract {
    public static function getEndPoint()
    {
        return 'http://revision3.com/api/oembed/';
    }
    public static function getPatterns()
    {
        return array('http://revision3.com/*');
    }
}
