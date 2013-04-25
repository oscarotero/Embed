<?php

namespace Embed\Providers\OEmbed;

use Embed\Providers;

class Scribd extends \Embed\Providers\OEmbedImplementationAbstract {
    public static function getEndPoint()
    {
        return 'http://www.scribd.com/services/oembed';
    }
    public static function getPatterns()
    {
        return array('http://www.scribd.com/doc/*');
    }
}
