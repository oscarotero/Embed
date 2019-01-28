<?php

namespace Embed\Providers\OEmbed;

class Soundcloud extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'soundcloud.com/*';
    protected static $endPoint = 'https://soundcloud.com/oembed';
}
