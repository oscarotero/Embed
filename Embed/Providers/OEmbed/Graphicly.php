<?php

namespace Embed\Providers\OEmbed;

use Embed\Providers;

class Graphicly extends \Embed\Providers\OEmbedImplementationAbstract {
    public static function getEndPoint()
    {
        return 'http://oembed.graphicly.com/1/oembed';
    }
    public static function getPatterns()
    {
        return array('http://graphicly.com/*/*');
    }
}
