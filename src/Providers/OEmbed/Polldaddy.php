<?php

namespace Embed\Providers\OEmbed;

class Polldaddy extends EndPoint implements EndpointInterface
{
    protected static $pattern = 'https?://polldaddy.com/poll/*';
    protected static $endpoint = 'http://polldaddy.com/oembed';
}