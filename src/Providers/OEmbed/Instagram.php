<?php

namespace Embed\Providers\OEmbed;

use Embed\Http\Uri;

class Instagram extends EndPoint implements EndPointInterface
{
    protected static $pattern = [
        'https?://instagram.com/p/*',
        'https?://www.instagram.com/p/*',
    ];
    protected static $endPoint = 'http://api.instagram.com/oembed';

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        $uri = $this->response->getUri()->withScheme('http');

        return (new Uri(static::$endPoint))
                ->withQueryParameters([
                    'url' => (string) $uri,
                    'format' => 'json',
                ]);
    }
}
