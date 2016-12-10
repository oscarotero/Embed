<?php

namespace Embed\Providers\OEmbed;

class WordPress extends EndPoint implements EndpointInterface
{
    protected static $pattern = 'https?://wordpress.tv/*';
    protected static $endpoint = 'https://wordpress.tv/oembed';
}
