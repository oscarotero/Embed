<?php

namespace Embed\Providers\OEmbed;

use Embed\Adapters\Adapter;

class Youtube extends EndPoint implements EndPointInterface
{
    protected static $pattern = ['*youtube.*', '*youtu.be*'];
    protected static $endPoint = 'https://www.youtube.com/oembed';

    public static function create(Adapter $adapter)
    {
        $response = $adapter->getResponse();
        // If the starting URL is a valid YouTube URL, but we've been redirected to a consent page,
        // we should attempt to get Oembed using the original URL instead of the consent URL
        if (
            preg_match('/consent\.youtube.*/', $response->getUrl())
            && $response->getStartingUrl()->match(static::$pattern)
        ) {
            // The Adapter URL should be forced to starting URL as well
            // to prevent consumers of the packages having to deal
            // with a URL to a consent page (#441)
            $adapter->url = (string) $response->getStartingUrl();
            return new static($response, $response->getStartingUrl());
        }

        return parent::create($adapter);
    }
}
