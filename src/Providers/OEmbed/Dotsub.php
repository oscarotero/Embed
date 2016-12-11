<?php

namespace Embed\Providers\OEmbed;

class Dotsub extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'https?://dotsub.com/view/*';
    protected static $endPoint = 'http://dotsub.com/services/oembed';
}
