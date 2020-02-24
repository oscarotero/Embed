<?php
declare(strict_types = 1);

namespace Embed;

use Embed\Http\Crawler;
use Embed\Http\CurlDispatcher;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

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

        return $this->extract($request, $response);
    }

    /**
     * @return Extractor[]
     */
    public function getMulti(string ...$urls): array
    {
        $requests = array_map(
            fn ($url) => $this->crawler->createRequest('GET', $url),
            $urls
        );

        $responses = CurlDispatcher::fetch(null, ...$requests);

        $return = [];

        foreach ($responses as $k => $response) {
            $return[] = $this->extract($requests[$k], $responses[$k]);
        }

        return $return;
    }

    public function getCrawler(): Crawler
    {
        return $this->crawler;
    }

    public function getExtractorFactory(): ExtractorFactory
    {
        return $this->extractorFactory;
    }

    private function extract(RequestInterface $request, ResponseInterface $response, bool $redirect = true): Extractor
    {
        $uri = $this->crawler->getResponseUri($response) ?: $request->getUri();

        $extractor = $this->extractorFactory->createExtractor($uri, $request, $response, $this->crawler);

        if (!$extractor->redirect) {
            return $extractor;
        }

        $request = $this->crawler->createRequest('GET', $extractor->redirect);
        $response = $this->crawler->sendRequest($request);

        return $this->extract($request, $response, false);
    }
}
