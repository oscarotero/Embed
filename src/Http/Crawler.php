<?php

namespace Embed\Http;

use Embed\Extractor;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Crawler
{
    private RequestFactoryInterface $requestFactory;
    private ClientInterface $client;

    public function __construct(RequestFactoryInterface $requestFactory, ClientInterface $client)
    {
        $this->requestFactory = $requestFactory;
        $this->client = $client;
    }

    public function createRequest(string $uri, array $headers = []): RequestInterface
    {
        $request = $this->requestFactory->createRequest('GET', $uri);

        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        return $request;
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        return $this->client->sendRequest($request);
    }

    public function extract(string $uri, array $headers = []): Extractor
    {
        $request = $this->createRequest($uri, $headers);
        $response = $this->client->sendRequest($request);

        return new Extractor($request, $response, $this);
    }
}
