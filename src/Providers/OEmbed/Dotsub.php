<?php

namespace Embed\Providers\OEmbed;

class Dotsub extends EndPoint implements EndpointInterface
{
    protected static $pattern = 'https?://dotsub.com/view/*';
    protected static $endpoint = 'http://dotsub.com/services/oembed';
}
