<?php
declare(strict_types = 1);

namespace Embed;

use Embed\Http\Crawler;
use Embed\Http\CurlDispatcher;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use RuntimeException;

class Embed
{
    private const REQUEST = [
        'Laminas\Diactoros\RequestFactory',
        'GuzzleHttp\Psr7\HttpFactory',
        'Slim\Psr7\Factory\RequestFactory',
        'Nyholm\Psr7\Factory\Psr17Factory',
        'Sunrise\Http\Message\RequestFactory',
    ];

    private const RESPONSE = [
        'Laminas\Diactoros\ResponseFactory',
        'GuzzleHttp\Psr7\HttpFactory',
        'Slim\Psr7\Factory\ResponseFactory',
        'Nyholm\Psr7\Factory\Psr17Factory',
        'Sunrise\Http\Message\ResponseFactory',
    ];

    private const URI = [
        'Laminas\Diactoros\UriFactory',
        'GuzzleHttp\Psr7\HttpFactory',
        'Slim\Psr7\Factory\UriFactory',
        'Nyholm\Psr7\Factory\Psr17Factory',
        'Sunrise\Http\Message\UriFactory',
    ];

    private Crawler $crawler;
    private ExtractorFactory $extractorFactory;

    public function __construct(Crawler $crawler = null, ExtractorFactory $extractorFactory = null)
    {
        $this->crawler = $crawler ?: self::createCrawler();
        $this->extractorFactory = $extractorFactory ?: new ExtractorFactory();
    }

    public function get(string $url): Extractor
    {
        $request = $this->crawler->createRequest('GET', $url);
        $response = $this->crawler->sendRequest($request);
        $uri = $this->crawler->getResponseUri($response) ?: $request->getUri();

        return $this->extractorFactory->createExtractor($uri, $request, $response, $this->crawler);
    }

    public function getCrawler(): Crawler
    {
        return $this->crawler;
    }

    public function getExtractorFactory(): ExtractorFactory
    {
        return $this->extractorFactory;
    }

    private static function createCrawler(): Crawler
    {
        return new Crawler(
            self::detectRequestFactory(),
            self::detectUriFactory(),
            new CurlDispatcher(self::detectResponseFactory())
        );
    }

    private static function detectRequestFactory(): RequestFactoryInterface
    {
        foreach (self::REQUEST as $class) {
            if (class_exists($class)) {
                return new $class();
            }
        }

        throw new RuntimeException('No RequestFactoryInterface detected');
    }

    private static function detectResponseFactory(): ResponseFactoryInterface
    {
        foreach (self::RESPONSE as $class) {
            if (class_exists($class)) {
                return new $class();
            }
        }

        throw new RuntimeException('No ResponseFactoryInterface detected');
    }

    private static function detectUriFactory(): UriFactoryInterface
    {
        foreach (self::URI as $class) {
            if (class_exists($class)) {
                return new $class();
            }
        }

        throw new RuntimeException('No UriFactoryInterface detected');
    }
}
