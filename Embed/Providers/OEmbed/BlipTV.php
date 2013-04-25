<?php

namespace Embed\Providers\OEmbed;

class BlipTV extends \Embed\Providers\OEmbedImplementationAbstract {
    public static function getEndPoint()
    {
        return 'http://blip.tv/oembed/';
    }
    public static function getPatterns()
    {
        return array('http://blip.tv/*');
    }
}
