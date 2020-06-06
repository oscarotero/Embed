<?php

namespace Embed\Providers\OEmbed;

class Mixcloud extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'www.mixcloud.com/*/';
    protected static $endPoint = 'https://www.mixcloud.com/oembed/';
}
