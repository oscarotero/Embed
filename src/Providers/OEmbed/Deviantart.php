<?php

namespace Embed\Providers\OEmbed;

use Embed\Http\Url;

class Deviantart extends EndPoint implements EndPointInterface
{
    protected static $pattern = [
        '*.deviantart.com/art/*',
        'www.deviantart.com/#/d*',
    ];
    protected static $endPoint = 'http://backend.deviantart.com/oembed';

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        return Url::create(static::$endPoint)
                ->withQueryParameters([
                    'url' => (string) $this->response->getUrl(),
                    'format' => 'json',
                    'for' => 'embed',
                ]);
    }
}
