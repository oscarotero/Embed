<?php

namespace Embed\Providers\OEmbed;

use Embed\Http\Url;

class Jsbin extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'output.jsbin.com/*';
    protected static $endPoint = 'http://jsbin.com/oembed';

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        $url = $this->response->getUrl()->withDirectoryPosition(2, 'embed');

        return Url::create(static::$endPoint)
                ->withQueryParameters([
                    'url' => (string) $url,
                    'format' => 'json',
                ]);
    }
}
