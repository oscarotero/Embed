<?php

namespace Embed\Providers\OEmbed;

class Wordpress extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'wordpress.tv/*';
    protected static $endPoint = 'https://wordpress.tv/oembed';
}
