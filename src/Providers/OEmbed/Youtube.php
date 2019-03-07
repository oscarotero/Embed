<?php

namespace Embed\Providers\OEmbed;

class Youtube extends EndPoint implements EndPointInterface
{
    protected static $pattern = '*youtu\.?be.*';
    protected static $endPoint = 'http://www.youtube.com/oembed';
}
