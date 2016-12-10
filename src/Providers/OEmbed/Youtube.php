<?php

namespace Embed\Providers\OEmbed;

class Youtube extends EndPoint implements EndpointInterface
{
    protected static $pattern = 'https?://*youtube.*';
    protected static $endpoint = 'http://www.youtube.com/oembed';
}
