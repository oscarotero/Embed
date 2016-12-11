<?php

namespace Embed\Providers\OEmbed;

class Imgur extends EndPoint implements EndPointInterface
{
    protected static $pattern = [
        'http://imgur.com/*',
        'http://i.imgur.com/*',
    ];
    protected static $endPoint = 'http://api.imgur.com/oembed';
}
