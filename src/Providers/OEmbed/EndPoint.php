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
    protected $url;
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

        if ($response->getStartingUrl()->match(static::$pattern)) {
            return new static($response, $response->getStartingUrl());
        }
    }

    /**
     * Constructor.
     *
     * @param Response $response
     */
    protected function __construct(Response $response, Url $url = null)
    {
        $this->response = $response;
        $this->url = $url;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        return Url::create(static::$endPoint)
                ->withQueryParameters([
                    'url' => (string) $this->getUrl(),
                    'format' => 'json',
                ]);
    }

    public function getUrl()
    {
        return $this->url ?: $this->response->getUrl();
    }
}
