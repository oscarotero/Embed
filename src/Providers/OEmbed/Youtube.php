<?php

namespace Embed\Providers\OEmbed;

class Youtube extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'https?://*youtube.*';
    protected static $endPoint = 'http://www.youtube.com/oembed';
}
