<?php

namespace Embed\Providers\OEmbed;

use Embed\Adapters\Adapter;
use Embed\Http\Response;
use Embed\Http\Url;

/**
 * Abstract class extended by other classes.
 */
abstract class EndPoint
{
    protected $response;
    protected static $pattern;
    protected static $endPoint;

    /**
     * {@inheritdoc}
     */
    public static function create(Adapter $adapter)
    {
        $response = $adapter->getResponse();

        if ($response->getUrl()->match(static::$pattern)) {
            return new static($response);
        }
    }

    /**
     * Constructor.
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
        return Url::create(static::$endPoint)
                ->withQueryParameters([
                    'url' => (string) $this->response->getUrl(),
                    'format' => 'json',
                ]);
    }
}
