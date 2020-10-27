<?php

namespace Embed\Providers\OEmbed;

use Embed\Adapters\Adapter;
use Embed\Http\Response;
use Embed\Http\Url;

class Facebook extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'www.facebook.com/*';
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
        if ($this->getUrl()->match(['*/videos/*', '/video.php'])) {
            $endPoint = Url::create('https://graph.facebook.com/v8.0/oembed_video');
        } else {
            $endPoint = Url::create('https://graph.facebook.com/v8.0/oembed_post');
        }

        return $endPoint->withQueryParameters([
            'url' => (string) $this->getUrl(),
            'format' => 'json',
            'access_token' => $this->key,
        ]);
    }
}
