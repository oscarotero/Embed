<?php

namespace Embed\Providers\OEmbed;

use Embed\Http\Uri;

class Deviantart extends EndPoint implements EndPointInterface
{
    protected static $pattern = [
        'http://*.deviantart.com/art/*',
        'http://www.deviantart.com/#/d*',
    ];
    protected static $endPoint = 'http://backend.deviantart.com/oembed';

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        return Uri::create(static::$endPoint)
                ->withQueryParameters([
                    'url' => (string) $this->response->getUri(),
                    'format' => 'json',
                    'for' => 'embed'
                ]);
    }
}
