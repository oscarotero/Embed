<?php

namespace Embed\Providers\OEmbed;

use Embed\Providers;

class DeviantArt extends \Embed\Providers\OEmbedImplementationAbstract {
    public static function getEndPoint()
    {
        return 'http://backend.deviantart.com/oembed';
    }
    public static function getPatterns()
    {
        return array('http://www.deviantart.com/art/*', 'http://www.deviantart.com/#/d*');
    }
    public static function getParams()
    {
        return array('for' => 'embed');
    }
}
