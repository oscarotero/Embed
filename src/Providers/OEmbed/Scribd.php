<?php

namespace Embed\Providers\OEmbed;

use Embed\Http\Uri;

class Scribd extends EndPoint implements EndpointInterface
{
    protected static $pattern = [
        'https?://www.scribd.com/doc/*',
        'https?://www.scribd.com/document/*',
    ];
    protected static $endpoint = 'http://www.scribd.com/services/oembed';

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        $uri = $this->response->getUri()->withDirectoryPosition(0, 'doc');

        return (new Uri(static::$endpoint))
                ->withQueryParameters([
                    'url' => (string) $uri,
                    'format' => 'json',
                ]);
    }
}