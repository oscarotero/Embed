<?php

namespace Embed\Providers\OEmbed;

class Twitch extends EndPoint implements EndPointInterface
{
    protected static $pattern = '*.twitch.tv/*';
    protected static $endPoint = 'https://api.twitch.tv/v5/oembed';
}
