<?php
declare(strict_types = 1);

namespace Embed\Http;

use Embed\Adapters\Adapters;
use Embed\Extractor;
use function Embed\resolveUri;
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

    const DEFAULT_HEADERS = [
        'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:73.0) Gecko/20100101 Firefox/73.0',
        'Accept' => 'text/html,*/*;q=0.8',
        'Cache-Control' => 'max-age=0',
    ];

    public function __construct(RequestFactoryInterface $requestFactory, UriFactoryInterface $uriFactory, ClientInterface $client)
    {
        $this->requestFactory = $requestFactory;
        $this->uriFactory = $uriFactory;
        $this->client = $client;
    }

    public function createRequest(string $uri, array $headers = [], UriInterface $base = null): RequestInterface
    {
        $request = $this->requestFactory->createRequest('GET', $uri);

        if ($base) {
            $request = $request->withUri(resolveUri($base, $request->getUri()));
        }

        $headers = $headers + self::DEFAULT_HEADERS;

        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        return $request;
    }

    public function createUri(string $uri, UriInterface $base = null): UriInterface
    {
        $uri = $this->uriFactory->createUri($uri);
        return $base ? resolveUri($base, $uri) : $uri;
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        return $this->client->sendRequest($request);
    }

    public function extract(string $uri, array $headers = []): Extractor
    {
        $request = $this->createRequest($uri, $headers);
        $response = $this->client->sendRequest($request);

        $uri = $this->getLatestUri($response) ?: $request->getUri();
        $class = Adapters::getExtractorClass($uri);

        return new $class($uri, $request, $response, $this);
    }

    protected function getLatestUri(ResponseInterface $response): ?UriInterface
    {
        $location = $response->getHeaderLine('Content-Location');

        return $location ? $this->createUri($location) : null;
    }
}
