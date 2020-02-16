<?php
declare(strict_types = 1);

namespace Embed;

use Exception;
use Psr\Http\Message\UriInterface;
use SimpleXMLElement;

class OEmbed
{
    private static $providers;
    private Extractor $extractor;
    private array $data;

    /**
     * Json: https://oembed.com/providers.json
     * Repo: https://github.com/iamcal/oembed
     */
    public static function getProviders(): array
    {
        if (!is_array(self::$providers)) {
            self::$providers = require __DIR__.'/resources/oembed.php';
        }

        return self::$providers;
    }

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

    public function getInt(string $key): ?int
    {
        $data = $this->all();

        if (isset($data[$key])) {
            return (int) $data[$key];
        }

        return null;
    }

    private function fetchData(): array
    {
        $endpoint = $this->detectEndpoint();

        if (empty($endpoint)) {
            return [];
        }

        $crawler = $this->extractor->getCrawler();
        $request = $crawler->createRequest($endpoint, [], $this->extractor->getUri());
        $response = $crawler->sendRequest($request);

        if (self::isXML($request->getUri())) {
            return self::extractXML((string) $response->getBody());
        }

        return self::extractJSON((string) $response->getBody());
    }

    private function detectEndpoint(): ?string
    {
        $document = $this->extractor->getDocument();

        return $document->select('.//link', ['rel' => 'alternate', 'type' => 'application/json+oembed'])->attribute('href')
            ?: $document->select('.//link', ['rel' => 'alternate', 'type' => 'application/xml+oembed'])->attribute('href')
            ?: $document->select('.//link', ['rel' => 'alternate', 'type' => 'text/json+oembed'])->attribute('href')
            ?: $document->select('.//link', ['rel' => 'alternate', 'type' => 'text/xml+oembed'])->attribute('href')
            ?: $this->detectEndpointFromProviders();
    }

    private function detectEndpointFromProviders(): ?string
    {
        $url = (string) $this->extractor->getUri();
        $endpoint = self::searchEndpoint(self::getProviders(), $url);

        if (!$endpoint) {
            return null;
        }

        return $endpoint.'?'.http_build_query(['url' => $url, 'format' => 'json']);
    }

    private static function searchEndpoint(array $providers, string $url): ?string
    {
        foreach ($providers as $endpoint => $patterns) {
            foreach ($patterns as $pattern) {
                if (preg_match($pattern, $url)) {
                    return $endpoint;
                }
            }
        }

        return null;
    }

    private static function isXML(UriInterface $uri): bool
    {
        $extension = pathinfo($uri->getPath(), PATHINFO_EXTENSION);

        if (strtolower($extension) === 'xml') {
            return true;
        }

        parse_str($uri->getQuery(), $params);
        $format = $params['format'] ?? null;

        if ($format && strtolower($format) === 'xml') {
            return true;
        }

        return false;
    }

    private static function extractXML(string $xml): array
    {
        try {
            $data = [];
            $errors = libxml_use_internal_errors(true);
            $content = new SimpleXMLElement($xml);
            libxml_use_internal_errors($errors);

            foreach ($content as $element) {
                $value = trim((string) $element);

                if (stripos($value, '<![CDATA[') === 0) {
                    $value = substr($value, 9, -3);
                }

                $name = $element->getName();
                $data[$name] = $value;
            }

            return $data;
        } catch (Exception $exception) {
            return [];
        }
    }

    private static function extractJSON(string $json): array
    {
        try {
            return json_decode($json, true) ?: [];
        } catch (Exception $exception) {
            return [];
        }
    }
}
