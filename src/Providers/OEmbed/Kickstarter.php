<?php

namespace Embed\Providers\OEmbed;

class Kickstarter extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'https?://www.kickstarter.com/*';
    protected static $endPoint = 'http://www.kickstarter.com/services/oembed';
}
