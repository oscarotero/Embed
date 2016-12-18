<?php

namespace Embed\Providers\OEmbed;

use Embed\Adapters\Adapter;
use Embed\Http\Response;
use Embed\Http\Url;

class Iframely implements EndPointInterface
{
    private $response;
    private $key;

    /**
     * {@inheritdoc}
     */
    public static function create(Adapter $adapter)
    {
        $key = $adapter->getConfig('oembed[iframely_key]');

        if (!empty($key)) {
            return new static($adapter->getResponse(), $key);
        }
    }

    /**
     * Constructor.
     *
     * @param Response $response
     * @param string   $key
     */
    private function __construct(Response $response, $key)
    {
        $this->response = $response;
        $this->key = $key;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        return Url::create('http://open.iframe.ly/api/oembed')
                ->withQueryParameters([
                    'url' => (string) $this->response->getUrl(),
                    'format' => 'json',
                    'api_key' => $this->key,
                ]);
    }
}
