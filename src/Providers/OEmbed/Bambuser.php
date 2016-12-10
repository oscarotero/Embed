<?php

namespace Embed\Providers\OEmbed;

class Bambuser extends EndPoint implements EndpointInterface
{
    protected static $pattern = 'http?://bambuser.com/v/*';
    protected static $endpoint = 'https://api.bambuser.com/oembed.json';
}
