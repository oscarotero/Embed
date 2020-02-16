<?php
declare(strict_types = 1);

namespace Embed\Adapters\Wikipedia;

use function Embed\clean;
use function Embed\match;
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

    public function getPage(string $key, bool $allowHTML = false): ?string
    {
        $data = $this->all();

        $pages = $data['query']['pages'] ?? null;

        if (empty($pages)) {
            return null;
        }

        $page = current($pages);
        $value = $page[$key] ?? null;

        return $value ? clean((string) $value, $allowHTML) : null;
    }

    private function fetchData(): array
    {
        $uri = $this->extractor->getUri();

        if (!match('/wiki/*', $uri->getPath())) {
            return [];
        }

        $titles = explode('/', $uri->getPath())[2];

        $endpoint = $uri
            ->withPath('/w/api.php')
            ->withQuery(http_build_query([
                'action' => 'query',
                'format' => 'json',
                'continue' => '',
                'titles' => $titles,
                'prop' => 'extracts',
                'exchars' => 1000,
            ]));

        $crawler = $this->extractor->getCrawler();
        $request = $crawler->createRequest((string) $endpoint);
        $response = $crawler->sendRequest($request);

        try {
            return json_decode((string) $response->getBody(), true) ?: [];
        } catch (Exception $exception) {
            return [];
        }
    }
}
