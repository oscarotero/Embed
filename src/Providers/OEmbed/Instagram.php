<?php

namespace Embed\Providers\OEmbed;

use Embed\Http\Uri;

class Instagram extends EndPoint implements EndpointInterface
{
    protected static $pattern = [
        'https?://instagram.com/p/*',
        'https?://www.instagram.com/p/*',
    ];
    protected static $endpoint = 'http://api.instagram.com/oembed';

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        $uri = $this->response->getUri()->withScheme('http');

        return (new Uri(static::$endpoint))
                ->withQueryParameters([
                    'url' => (string) $uri,
                    'format' => 'json',
                ]);
    }
}
