<?php

namespace Embed\Providers\OEmbed;

class Imgur extends EndPoint implements EndpointInterface
{
    protected static $pattern = [
        'http://imgur.com/*',
        'http://i.imgur.com/*',
    ];
    protected static $endpoint = 'http://api.imgur.com/oembed';
}
