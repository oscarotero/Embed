<?php

namespace Embed\Providers\OEmbed;

use Embed\Adapters\Adapter;
use Embed\Http\Response;
use Embed\Http\Url;

class Tumblr extends EndPoint implements EndPointInterface
{
    protected static $pattern = [
        '*.tumblr.com/post/*'
    ];

    protected static $endPoint = 'https://www.tumblr.com/oembed/1.0';

    /**
     * {@inheritdoc}
     */
    public static function create(Adapter $adapter)
    {
        $response = $adapter->getResponse();

        if ($response->getStartingUrl()->match(static::$pattern)) {
            return new static($response);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        return Url::create(static::$endPoint)
                ->withQueryParameters([
                    'url' => (string) $this->response->getStartingUrl()
                ]);
    }
}
