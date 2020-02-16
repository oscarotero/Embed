<?php
declare(strict_types = 1);

namespace Embed\Adapters\Gist;

use function Embed\clean;
use Exception;

class Api
{
    private Extractor $extractor;
    private array $data;

    public function __construct(Extractor $extractor)
    {
        $this->extractor = $extractor;
    }

    public function all(): array
    {
        if (!isset($this->data)) {
            $this->data = $this->fetchData();
        }

        return $this->data;
    }

    public function get(string $key, bool $allowHTML = false): ?string
    {
        $data = $this->all();
        $value = $data[$key] ?? null;

        if (is_array($value)) {
            $value = array_shift($value);
        }

        return $value ? clean((string) $value, $allowHTML) : null;
    }

    private function fetchData(): array
    {
        $uri = $this->extractor->getUri();
        $endpoint = (string) $uri->withPath($uri->getPath().'.json');

        $crawler = $this->extractor->getCrawler();
        $request = $crawler->createRequest($endpoint);
        $response = $crawler->sendRequest($request);

        try {
            return json_decode((string) $response->getBody(), true) ?: [];
        } catch (Exception $exception) {
            return [];
        }
    }
}
