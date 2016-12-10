<?php

namespace Embed\Providers\OEmbed;

class Shoudio extends EndPoint implements EndpointInterface
{
    protected static $pattern = 'https?://shoudio.com/*';
    protected static $endpoint = 'http://shoudio.com/api/oembed';
}