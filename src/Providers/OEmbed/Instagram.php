<?php

namespace Embed\Providers\OEmbed;

use Embed\Http\Url;

class Instagram extends EndPoint implements EndPointInterface
{
    protected static $pattern = [
        'instagram.com/p/*',
        'www.instagram.com/p/*',
        'instagr.am/p/*',
    ];
    protected static $endPoint = 'https://api.instagram.com/oembed';

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        $url = $this->getUrl()->withScheme('http');

        return Url::create(static::$endPoint)
                ->withQueryParameters([
                    'url' => (string) $url,
                    'format' => 'json',
                ]);
    }
}
