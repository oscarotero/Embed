<?php
declare(strict_types = 1);

namespace Embed;

use Exception;
use Psr\Http\Message\UriInterface;

trait HttpApiTrait
{
    use ApiTrait;

    private ?UriInterface $endpoint;

    public function getEndpoint(): ?UriInterface
    {
        return $this->endpoint;
    }

    private function fetchJSON(UriInterface $uri): array
    {
        $crawler = $this->extractor->getCrawler();
        $request = $crawler->createRequest('GET', $uri);
        $response = $crawler->sendRequest($request);

        try {
            return json_decode((string) $response->getBody(), true) ?: [];
        } catch (Exception $exception) {
            return [];
        }
    }
}
