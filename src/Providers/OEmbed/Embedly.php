<?php

namespace Embed\Providers\OEmbed;

use Embed\Adapters\Adapter;
use Embed\Http\Response;
use Embed\Http\Url;

class Embedly implements EndPointInterface
{
    private $response;
    private $key;

    /**
     * {@inheritdoc}
     */
    public static function create(Adapter $adapter)
    {
        $key = $adapter->getConfig('oembed[embedly_key]');

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
    protected function __construct(Response $response, $key)
    {
        $this->response = $response;
        $this->key = $key;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        return Url::create('http://api.embed.ly/1/oembed')
                ->withQueryParameters([
                    'url' => (string) $this->getUrl(),
                    'format' => 'json',
                    'key' => $this->key,
                ]);
    }
}
