<?php

namespace Embed\Providers\OEmbed;

use Embed\Providers;

class YFrog extends \Embed\Providers\OEmbedImplementationAbstract {
    public static function getEndPoint()
    {
        return 'http://www.yfrog.com/api/oembed';
    }
    public static function getPatterns()
    {
        return array('http://twitter.yfrog.com/*','http://www.yfrog.com/*');
    }
}
