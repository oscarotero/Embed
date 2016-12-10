<?php

namespace Embed\Providers\OEmbed;

class Photobucket extends EndPoint implements EndpointInterface
{
    protected static $pattern = 'http://*.photobucket.com/*';
    protected static $endpoint = 'http://s51.photobucket.com/oembed/';
}
