<?php

namespace Embed\Providers\OEmbed;

class Flickr extends EndPoint implements EndpointInterface
{
    protected static $pattern = 'https://www.flickr.com/*';
    protected static $endpoint = 'http://flickr.com/services/oembed';
}
