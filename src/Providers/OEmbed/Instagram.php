<?php

namespace Embed\Providers\OEmbed;

use Embed\Http\Url;

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
        $url = $this->response->getUrl()->withScheme('http');

        return Url::create(static::$endPoint)
                ->withQueryParameters([
                    'url' => (string) $url,
                    'format' => 'json',
                ]);
    }
}
