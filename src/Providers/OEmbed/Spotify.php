<?php

namespace Embed\Providers\OEmbed;

use Embed\Http\Url;

class Spotify extends EndPoint implements EndPointInterface
{
    protected static $pattern = '*.spotify.com/*';
    protected static $endPoint = 'https://embed.spotify.com/oembed';

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        return Url::create(static::$endPoint)
                ->withQueryParameters([
                    'url' => (string) $this->getUrl()->withQueryParameters([]),
                    'format' => 'json'
                ]);
    }
}
