<?php

namespace Embed\Providers\OEmbed;

class Flickr extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'www.flickr.com/*';
    protected static $endPoint = 'http://flickr.com/services/oembed';
}
