<?php
declare(strict_types = 1);

namespace Embed\Http;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class to fetch html pages
 */
final class CurlClient implements ClientInterface
{
    private ResponseFactoryInterface $responseFactory;

    public function __construct(ResponseFactoryInterface $responseFactory = null)
    {
        $this->responseFactory = $responseFactory ?: FactoryDiscovery::getResponseFactory();
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        $responses = CurlDispatcher::fetch($this->responseFactory, $request);

        return $responses[0];
    }
}
