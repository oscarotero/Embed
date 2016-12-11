<?php

namespace Embed\Providers\OEmbed;

class Photobucket extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'http://*.photobucket.com/*';
    protected static $endPoint = 'http://s51.photobucket.com/oembed/';
}
