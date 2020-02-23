<?php
declare(strict_types = 1);

namespace Embed;

use Exception;

trait HttpApiTrait
{
    use ApiTrait;

    private ?string $endpoint;

    public function getEndpoint(): ?string
    {
        return $this->endpoint;
    }

    private function fetchJSON(string $url): array
    {
        $crawler = $this->extractor->getCrawler();
        $request = $crawler->createRequest('GET', $url);
        $response = $crawler->sendRequest($request);

        try {
            return json_decode((string) $response->getBody(), true) ?: [];
        } catch (Exception $exception) {
            return [];
        }
    }
}
