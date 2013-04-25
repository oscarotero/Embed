<?php

namespace Embed\Providers\OEmbed;

use Embed\Providers;

class DotSub extends \Embed\Providers\OEmbedImplementationAbstract {
    public static function getEndPoint()
    {
        return 'http://dotsub.com/services/oembed';
    }
    public static function getPatterns()
    {
        return array('https?://dotsub.com/view/*');
    }
}
