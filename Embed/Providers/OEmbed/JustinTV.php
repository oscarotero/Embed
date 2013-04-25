<?php

namespace Embed\Providers\OEmbed;

use Embed\Providers;

class JustinTV extends \Embed\Providers\OEmbedImplementationAbstract {
    public static function getEndPoint()
    {
        return 'http://api.justin.tv/api/embed/from_url.json';
    }
    public static function getPatterns()
    {
        return array('http://www.justin.tv/*');
    }
}
