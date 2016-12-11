<?php

namespace Embed\Providers\OEmbed;

use Embed\Http\Uri;

class Instagram extends EndPoint implements EndPointInterface
{
    protected static $pattern = [
        'instagram.com/p/*',
        'www.instagram.com/p/*',
    ];
    protected static $endPoint = 'http://api.instagram.com/oembed';

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        $uri = $this->response->getUri()->withScheme('http');

        return Uri::create(static::$endPoint)
                ->withQueryParameters([
                    'url' => (string) $uri,
                    'format' => 'json',
                ]);
    }
}
