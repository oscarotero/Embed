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
    private Crawler $crawler;
    private ExtractorFactory $extractorFactory;

    public function __construct(Crawler $crawler = null, ExtractorFactory $extractorFactory = null)
    {
        $this->crawler = $crawler ?: new Crawler();
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
}
