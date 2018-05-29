<?php

namespace Embed\Providers\OEmbed;

class Twitter extends EndPoint implements EndPointInterface
{
    protected static $pattern = ['*.twitter.com/*', 'twitter.com/*'];
    protected static $endPoint = 'https://publish.twitter.com/oembed';
}
