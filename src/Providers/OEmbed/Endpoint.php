<?php

namespace Embed\Providers\OEmbed;

use Embed\Adapters\AdapterInterface;
use Embed\Http\Response;
use Embed\Http\Uri;

/**
 * Abstract class extended by other classes
 */
abstract class Endpoint
{
    protected $response;
    protected static $pattern;
    protected static $endpoint;

    /**
     * {@inheritdoc}
     */
    public static function create(AdapterInterface $adapter)
    {
        $response = $adapter->getResponse();

        if ($response->getUri()->match(static::$pattern)) {
            return new static($response);
        }
    }

    /**
     * Constructor
     *
     * @param Response $response
     */
    private function __construct(Response $response)
    {
        $this->response = $response;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        return (new Uri(static::$endpoint))
                ->withQueryParameters([
                    'url' => (string) $this->response->getUri(),
                    'format' => 'json',
                ]);
    }
}
