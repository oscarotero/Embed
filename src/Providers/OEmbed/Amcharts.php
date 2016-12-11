<?php

namespace Embed\Providers\OEmbed;

class Amcharts extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'live.amcharts.com/*';
    protected static $endPoint = 'https://live.amcharts.com/oembed';
}
