<?php

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
            $providers = file_get_contents(__DIR__.'/resources/oembed_providers.json');
            self::$providers = json_decode($providers, true);
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

    public function get(string $key): ?string
    {
        $data = $this->all();

        return $data[$key] ?? null;
    }

    private function detectEndpoint(): ?string
    {
        $document = $this->extractor->getDocument();

        return $document->select('.//link', ['rel' => 'alternate', 'type' => 'application/json+oembed'])->attribute('href')
            ?: $document->select('.//link', ['rel' => 'alternate', 'type' => 'application/xml+oembed'])->attribute('href')
            ?: $document->select('.//link', ['rel' => 'alternate', 'type' => 'text/json+oembed'])->attribute('href')
            ?: $document->select('.//link', ['rel' => 'alternate', 'type' => 'text/xml+oembed'])->attribute('href')
            ?: $this->detectFromProviders();
    }

    private function detectFromProviders(): ?string
    {
        $url = $this->extractor->getResponse()->getHeaderLine('Content-Location')
            ?: (string) $this->extractor->getRequest()->getUri();

        $endpoint = $this->searchEndpoint($url);

        if (!$endpoint) {
            return null;
        }

        return $endpoint.'?'.http_build_query(['url' => $url, 'format' => 'json']);
    }

    private function searchEndpoint(string $url): ?string
    {
        foreach (self::getProviders() as $provider) {
            foreach ($provider['endpoints'] as $endpoint) {
                if (strpos($url, $provider['provider_url']) === 0) {
                    return $endpoint['url'];
                }

                if (isset($endpoint['schemes'])) {
                    if (self::match($url, $endpoint['schemes'])) {
                        return $endpoint['url'];
                    }

                    continue;
                }
            }
        }

        return null;
    }

    private static function match(string $url, array $schemes): bool
    {
        foreach ($schemes as $scheme) {
            $pattern = str_replace('\\*', '.*', preg_quote($scheme, '|'));

            if (preg_match("|^{$pattern}$|i", $url)) {
                return true;
            }
        }

        return false;
    }

    private function fetchData(): array
    {
        $endpoint = $this->detectEndpoint();

        if (empty($endpoint)) {
            return [];
        }

        $crawler = $this->extractor->getCrawler();
        $request = $crawler->createRequest($endpoint);
        $response = $crawler->sendRequest($request);

        if (self::isXML($request->getUri())) {
            return self::extractXML((string) $response->getBody());
        }

        return self::extractJSON((string) $response->getBody());
    }

    private static function isXML(UriInterface $uri): bool
    {
        $extension = pathinfo($uri->getPath(), PATHINFO_EXTENSION);

        if (strtolower($extension) === 'xml') {
            return true;
        }

        parse_str($uri->getQuery(), $params);
        $format = $params['format'] ?? null;

        if (strtolower($format) === 'xml') {
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
