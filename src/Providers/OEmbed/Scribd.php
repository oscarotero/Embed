<?php

namespace Embed\Providers\OEmbed;

use Embed\Http\Url;

class Scribd extends EndPoint implements EndPointInterface
{
    protected static $pattern = [
        'www.scribd.com/doc/*',
        'www.scribd.com/document/*',
    ];
    protected static $endPoint = 'http://www.scribd.com/services/oembed';

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        $url = $this->response->getUrl()->withDirectoryPosition(0, 'doc');

        return Url::create(static::$endPoint)
                ->withQueryParameters([
                    'url' => (string) $url,
                    'format' => 'json',
                ]);
    }
}
