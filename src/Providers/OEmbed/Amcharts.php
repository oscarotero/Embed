<?php

namespace Embed\Providers\OEmbed;

class Amcharts extends EndPoint implements EndpointInterface
{
    protected static $pattern = 'https?://live.amcharts.com/*';
    protected static $endpoint = 'https://live.amcharts.com/oembed';
}
