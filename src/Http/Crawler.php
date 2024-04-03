<?php
declare(strict_types = 1);

namespace Embed\Http;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;

class Crawler implements ClientInterface, RequestFactoryInterface, UriFactoryInterface
{
    private RequestFactoryInterface $requestFactory;
    private UriFactoryInterface $uriFactory;
    private ClientInterface $client;
    private array $defaultHeaders = [
        'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:73.0) Gecko/20100101 Firefox/73.0',
        'Cache-Control' => 'max-age=0',
    ];

    public function __construct(ClientInterface $client = null, RequestFactoryInterface $requestFactory = null, UriFactoryInterface $uriFactory = null)
    {
        $this->client = $client ?: new CurlClient();
        $this->client->setSettings([
          'follow_location' => false,
        ]);
        $this->requestFactory = $requestFactory ?: FactoryDiscovery::getRequestFactory();
        $this->uriFactory = $uriFactory ?: FactoryDiscovery::getUriFactory();
    }

    public function addDefaultHeaders(array $headers): void
    {
        $this->defaultHeaders = $headers + $this->defaultHeaders;
    }

    /**
     * @param UriInterface|string $uri The URI associated with the request.
     */
    public function createRequest(string $method, $uri): RequestInterface
    {
        $request = $this->requestFactory->createRequest($method, $uri);

        foreach ($this->defaultHeaders as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        return $request;
    }

    public function createUri(string $uri = ''): UriInterface
    {
        return $this->uriFactory->createUri($uri);
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        return $this->client->sendRequest($request);
    }

    public function sendRequests(RequestInterface ...$requests): array
    {
        if ($this->client instanceof CurlClient) {
            return $this->client->sendRequests(...$requests);
        }

        return array_map(
            fn ($request) => $this->client->sendRequest($request),
            $requests
        );
    }

    public function getResponseUri(ResponseInterface $response): ?UriInterface
    {
        $location = $response->getHeaderLine('Content-Location');

        return $location ? $this->uriFactory->createUri($location) : null;
    }
}
