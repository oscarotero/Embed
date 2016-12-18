<?php

namespace Embed\Providers\OEmbed;

class Smugmug extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'www.smugmug.com/*';
    protected static $endPoint = 'http://api.smugmug.com/services/oembed/';
}
