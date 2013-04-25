<?php

namespace Embed\Providers\OEmbed;

use Embed\Providers;

class PhotoBucket extends \Embed\Providers\OEmbedImplementationAbstract {
    public static function getEndPoint()
    {
        return 'http://s51.photobucket.com/oembed/';
    }
    public static function getPatterns()
    {
        return array('http://*.photobucket.com/*');
    }
}
