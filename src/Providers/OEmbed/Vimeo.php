<?php

namespace Embed\Providers\OEmbed;

class Vimeo extends EndPoint implements EndPointInterface
{
    protected static $pattern = ['vimeo.com/*'];
    protected static $endPoint = 'https://vimeo.com/api/oembed.json';
}
