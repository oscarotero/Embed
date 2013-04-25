<?php

namespace Embed\Providers\OEmbed;

use Embed\Providers;

class Instagram extends \Embed\Providers\OEmbedImplementationAbstract {
    public static function getEndPoint()
    {
        return 'http://api.instagram.com/oembed';
    }
    public static function getPatterns()
    {
        return array('http://instagram.com/p/*');
    }
}
