<?php

namespace Embed\Providers\OEmbed;

use Embed\Http\Uri;

class Jsbin extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'output.jsbin.com/*';
    protected static $endPoint = 'http://jsbin.com/oembed';

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        $uri = $this->response->getUri()->withDirectoryPosition(2, 'embed');

        return Uri::create(static::$endPoint)
                ->withQueryParameters([
                    'url' => (string) $uri,
                    'format' => 'json',
                ]);
    }
}
