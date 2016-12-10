<?php

namespace Embed\Providers\OEmbed;

class Spotify extends EndPoint implements EndpointInterface
{
    protected static $pattern = 'https?://*.spotify.com/*';
    protected static $endpoint = 'https://embed.spotify.com/oembed';
}