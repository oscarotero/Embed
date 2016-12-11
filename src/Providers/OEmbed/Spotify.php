<?php

namespace Embed\Providers\OEmbed;

class Spotify extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'https?://*.spotify.com/*';
    protected static $endPoint = 'https://embed.spotify.com/oembed';
}
