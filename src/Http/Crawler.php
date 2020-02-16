<?php
declare(strict_types = 1);

namespace Embed\Http;

use Embed\Adapters\Adapters;
use Embed\Extractor;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;

class Crawler
{
    private RequestFactoryInterface $requestFactory;
    private UriFactoryInterface $uriFactory;
    private ClientInterface $client;

    public function __construct(RequestFactoryInterface $requestFactory, UriFactoryInterface $uriFactory, ClientInterface $client)
    {
        $this->requestFactory = $requestFactory;
        $this->uriFactory = $uriFactory;
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

    public function createUri(string $uri): UriInterface
    {
        return $this->uriFactory->createUri($uri);
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        return $this->client->sendRequest($request);
    }

    public function extract(string $uri, array $headers = []): Extractor
    {
        $request = $this->createRequest($uri, $headers);
        $response = $this->client->sendRequest($request);

        $url = $response->getHeaderLine('Content-Location') ?: (string) $request->getUri();
        $class = Adapters::getExtractorClass($url) ?: Extractor::class;

        return new $class($request, $response, $this);
    }
}
