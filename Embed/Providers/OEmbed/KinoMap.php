<?php
namespace Embed\Providers\OEmbed;

class Kinomap extends \Embed\Providers\OEmbedImplementationAbstract {
    public static function getEndPoint()
    {
        return 'http://www.kinomap.com/oembed';
    }
    public static function getPatterns()
    {
        return array('http://www.kinomap.com/*', 'http://kinomap.com/*');
    }
}
