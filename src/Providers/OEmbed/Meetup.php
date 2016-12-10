<?php

namespace Embed\Providers\OEmbed;

class Meetup extends EndPoint implements EndpointInterface
{
    protected static $pattern = 'http://www.meetup.com/*';
    protected static $endpoint = 'http://api.meetup.com/oembed';
}
