<?php

namespace Embed\Providers\OEmbed;

class Ustream extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'https?://www.ustream.tv/*';
    protected static $endPoint = 'http://www.ustream.tv/oembed';
}