<?php

namespace Embed\Providers\OEmbed;

use Embed\Http\Uri;

class Jsbin extends EndPoint implements EndpointInterface
{
    protected static $pattern = 'http?://output.jsbin.com/*';
    protected static $endpoint = 'http://jsbin.com/oembed';

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        $uri = $this->response->getUri()->withDirectoryPosition(2, 'embed');

        return (new Uri(static::$endpoint))
                ->withQueryParameters([
                    'url' => (string) $uri,
                    'format' => 'json',
                ]);
    }
}
