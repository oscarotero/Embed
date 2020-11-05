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
        'www.instagram.com/tv/*',
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
            $response = $adapter->getResponse();

            if ($response->getUrl()->match(static::$pattern)) {
                return new static($response, null, $key);
            }

            if ($response->getStartingUrl()->match(static::$pattern)) {
                return new static($response, $response->getStartingUrl(), $key);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function __construct(Response $response, $url = null, $key = null)
    {
        $this->response = $response;
        $this->key = $key;

        if ($url) {
            $this->url = $url;
        }
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
