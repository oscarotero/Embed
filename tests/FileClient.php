<?php
declare(strict_types = 1);

namespace Embed\Tests;

use Brick\VarExporter\VarExporter;
use Embed\Http\CurlClient;
use Embed\Http\FactoryDiscovery;
use Exception;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

/**
 * Decorator to cache requests into files
 */
final class FileClient implements ClientInterface
{
    private int $mode = 0;
    private string $path;
    private ResponseFactoryInterface $responseFactory;
    private ClientInterface $client;

    public function __construct(string $path)
    {
        $this->path = $path;
        $this->responseFactory = FactoryDiscovery::getResponseFactory();
        $this->client = new CurlClient($this->responseFactory);
    }

    public function setMode(int $mode): void
    {
        $this->mode = $mode;
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        $uri = $request->getUri();
        $filename = $this->path.'/'.self::getFilename($uri);

        if ($this->mode < 1 && is_file($filename)) {
            $response = $this->readResponse($filename);
        } elseif ($this->mode === -1) {
            throw new Exception("New unexpected request to {$uri}");
        } else {
            $response = $this->client->sendRequest($request);
        }

        if ($this->mode === 2 || !is_file($filename)) {
            $this->saveResponse($response, $filename);
        }

        return $response;
    }

    public static function getFilename(UriInterface $uri): string
    {
        $query = $uri->getQuery();

        return sprintf(
            '%s.%s%s.php',
            $uri->getHost(),
            trim(preg_replace('/[^\w.-]+/', '-', strtolower($uri->getPath())), '-'),
            $query ? '.'.md5($uri->getQuery()) : ''
        );
    }

    private function readResponse(string $filename): ResponseInterface
    {
        $message = require $filename;
        $response = $this->responseFactory->createResponse($message['statusCode'], $message['reasonPhrase']);

        foreach ($message['headers'] as $name => $value) {
            $response = $response->withHeader($name, $value);
        }

        $body = $response->getBody();
        $body->write($message['body']);
        $body->rewind();

        return $response;
    }

    private function saveResponse(ResponseInterface $response, string $filename): void
    {
        $message = [
            'headers' => $response->getHeaders(),
            'statusCode' => $response->getStatusCode(),
            'reasonPhrase' => $response->getReasonPhrase(),
            'body' => (string) $response->getBody(),
        ];

        file_put_contents(
            $filename,
            sprintf("<?php\ndeclare(strict_types = 1);\n\nreturn %s;\n", VarExporter::export($message))
        );
    }
}
