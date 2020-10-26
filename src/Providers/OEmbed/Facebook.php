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
