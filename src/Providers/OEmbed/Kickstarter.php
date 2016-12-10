<?php

namespace Embed\Providers\OEmbed;

class Kickstarter extends EndPoint implements EndpointInterface
{
    protected static $pattern = 'https?://www.kickstarter.com/*';
    protected static $endpoint = 'http://www.kickstarter.com/services/oembed';
}
