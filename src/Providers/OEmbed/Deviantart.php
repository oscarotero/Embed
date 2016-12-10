<?php

namespace Embed\Providers\OEmbed;

use Embed\Http\Uri;

class Deviantart extends EndPoint implements EndpointInterface
{
    protected static $pattern = [
        'http://*.deviantart.com/art/*',
        'http://www.deviantart.com/#/d*',
    ];
    protected static $endpoint = 'http://backend.deviantart.com/oembed';

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        return (new Uri(static::$endpoint))
                ->withQueryParameters([
                    'url' => (string) $this->response->getUri(),
                    'format' => 'json',
                    'for' => 'embed'
                ]);
    }
}
