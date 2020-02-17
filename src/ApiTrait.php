<?php
declare(strict_types = 1);

namespace Embed;

use Exception;

trait ApiTrait
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

    public function get(string ...$keys)
    {
        $data = $this->all();

        foreach ($keys as $key) {
            if (!isset($data[$key])) {
                return null;
            }

            $data = $data[$key];
        }

        return $data;
    }

    public function str(string ...$keys): ?string
    {
        $value = $this->get(...$keys);

        if (is_array($value)) {
            $value = array_shift($value);
        }

        return $value ? clean((string) $value) : null;
    }

    public function html(string ...$keys): ?string
    {
        $value = $this->get(...$keys);

        if (is_array($value)) {
            $value = array_shift($value);
        }

        return $value ? clean((string) $value, true) : null;
    }

    public function int(string ...$keys): ?int
    {
        $value = $this->get(...$keys);

        if (is_array($value)) {
            $value = array_shift($value);
        }

        return $value ? (int) $value : null;
    }

    public function url(string ...$keys): ?string
    {
        $url = $this->str(...$keys);

        if (!$url) {
            return null;
        }

        $uri = $this->extractor->getCrawler()->createUri($url);

        return (string) resolveUri($this->extractor->getUri(), $uri);
    }

    abstract protected function fetchData(): array;

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
