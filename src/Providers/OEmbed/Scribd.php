<?php

namespace Embed\Providers\OEmbed;

use Embed\Http\Uri;

class Scribd extends EndPoint implements EndPointInterface
{
    protected static $pattern = [
        'https?://www.scribd.com/doc/*',
        'https?://www.scribd.com/document/*',
    ];
    protected static $endPoint = 'http://www.scribd.com/services/oembed';

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        $uri = $this->response->getUri()->withDirectoryPosition(0, 'doc');

        return Uri::create(static::$endPoint)
                ->withQueryParameters([
                    'url' => (string) $uri,
                    'format' => 'json',
                ]);
    }
}