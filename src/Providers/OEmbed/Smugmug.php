<?php

namespace Embed\Providers\OEmbed;

class Smugmug extends EndPoint implements EndpointInterface
{
    protected static $pattern = 'http://www.smugmug.com/*';
    protected static $endpoint = 'http://api.smugmug.com/services/oembed/';
}