<?php

namespace Embed\Providers\OEmbed;

use Embed\Adapters\AdapterInterface;
use Embed\Url;

class Embedly implements EndpointInterface
{
    private $response;
    private $key;

    /**
     * {@inheritdoc}
     */
    public static function create(AdapterInterface $adapter)
    {
        $key = $adapter->getConfig('oembed[embedlyKey]');

        if (!empty($key)) {
            return new static($response, $key);
        }
    }

    /**
     * Constructor
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
        return (new Uri('http://api.embed.ly/1/oembed'))
                ->withQueryParameters([
                    'url' => (string) $this->response->getUri(),
                    'format' => 'json',
                    'key' => $this->key,
                ]);
    }
}