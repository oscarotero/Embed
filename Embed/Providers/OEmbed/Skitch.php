<?php

namespace Embed\Providers\OEmbed;

use Embed\Providers;

class Skitch extends \Embed\Providers\OEmbedImplementationAbstract {
    public static function getEndPoint()
    {
        return 'http://skitch.com/oembed/';
    }
    public static function getPatterns()
    {
        return array('http://skitch.com/*','http://img.skitch.com/*');
    }
}
