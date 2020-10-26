<?php

namespace Embed\Providers\OEmbed;

use Embed\Adapters\Adapter;
use Embed\Http\Response;
use Embed\Http\Url;

class Instagram extends EndPoint implements EndPointInterface
{
    protected static $pattern = [
        'instagram.com/p/*',
        'www.instagram.com/p/*',
        'instagr.am/p/*',
    ];
    protected static $endPoint = 'https://graph.facebook.com/v8.0/instagram_oembed';
    protected $key;

    /**
     * {@inheritdoc}
     */
    public static function create(Adapter $adapter)
    {
        $key = $adapter->getConfig('facebook[key]');

        if (!empty($key)) {
            return new static($adapter->getResponse(), $key);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function __construct(Response $response, $key = null)
    {
        $this->response = $response;
        $this->key = $key;
    }

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
                    'access_token' => $this->key,
                ]);
    }
}
