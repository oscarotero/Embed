<?php

namespace Embed\Providers\OEmbed;

class Youtube extends EndPoint implements EndPointInterface
{
    protected static $pattern = ['*youtube.*', '*youtu\.be.*'];
    protected static $endPoint = 'https://www.youtube.com/oembed';
}
