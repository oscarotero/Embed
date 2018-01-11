<?php

namespace Embed\Providers\OEmbed;

class Reddit extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'www.reddit.com/*';
    protected static $endPoint = 'https://www.reddit.com/oembed';
}
