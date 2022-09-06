<?php
declare(strict_types = 1);

namespace Embed;

use Exception;
use Psr\Http\Message\UriInterface;
use SimpleXMLElement;

class OEmbed
{
    use HttpApiTrait;

    private static $providers;
    private array $defaults = [];

    private static function getProviders(): array
    {
        if (!is_array(self::$providers)) {
            self::$providers = require __DIR__.'/resources/oembed.php';
        }

        return self::$providers;
    }

    public function getOembedQueryParameters(string $url): array
    {
        $queryParameters = ['url' => $url, 'format' => 'json'];

        return array_merge($queryParameters, $this->extractor->getSetting('oembed:query_parameters') ?? []);
    }

    protected function fetchData(): array
    {
        $this->endpoint = $this->detectEndpoint();

        if (empty($this->endpoint)) {
            return [];
        }

        [$request, $response] = $this->makeRequest($this->endpoint);

        if (self::isXML($request->getUri())) {
            return $this->extractXML((string) $response->getBody());
        }

        return $this->extractJSON((string) $response->getBody());
    }

    /**
     * @param UriInterface|string $endpoint
     * @return array
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    protected function makeRequest($endpoint)
    {
        $crawler = $this->extractor->getCrawler();
        $request = $crawler->createRequest('GET', $endpoint);
        $response = $crawler->sendRequest($request);

        if ($response->getStatusCode() == 403) {
            if (is_string($endpoint) && strpos('http://', $endpoint) === 0) {
                $newEndpoint = str_replace('http://','https://', $endpoint);
            }

            if ($endpoint instanceof UriInterface && $endpoint->getScheme() == 'http') {
                $newEndpoint = $endpoint->withScheme('https');
            }
            if (isset($newEndpoint)) {
                return $this->makeRequest($newEndpoint);
            }
        }

        return [$request, $response];
    }

    protected function detectEndpoint(): ?UriInterface
    {
        $document = $this->extractor->getDocument();

        $endpoint = $document->link('alternate', ['type' => 'application/json+oembed'])
            ?: $document->link('alternate', ['type' => 'text/json+oembed'])
            ?: $document->link('alternate', ['type' => 'application/xml+oembed'])
            ?: $document->link('alternate', ['type' => 'text/xml+oembed'])
            ?: null;

        if ($endpoint === null) {
            return $this->detectEndpointFromProviders();
        }

        // Add configured OEmbed query parameters
        parse_str($endpoint->getQuery(), $query);
        $query = array_merge($query, $this->extractor->getSetting('oembed:query_parameters') ?? []);
        $endpoint = $endpoint->withQuery(http_build_query($query));

        return $endpoint;
    }

    private function detectEndpointFromProviders(): ?UriInterface
    {
        $url = (string) $this->extractor->getUri();

        if ($endpoint = $this->detectEndpointFromUrl($url)) {
            return $endpoint;
        }

        $initialUrl = (string) $this->extractor->getRequest()->getUri();

        if ($initialUrl !== $url && ($endpoint = $this->detectEndpointFromUrl($initialUrl))) {
            $this->defaults['url'] = $initialUrl;
            return $endpoint;
        }

        return null;
    }

    private function detectEndpointFromUrl(string $url): ?UriInterface
    {
        $endpoint = self::searchEndpoint(self::getProviders(), $url);

        if (!$endpoint) {
            return null;
        }

        return $this->extractor->getCrawler()
            ->createUri($endpoint)
            ->withQuery(http_build_query($this->getOembedQueryParameters($url)));
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

    private function extractXML(string $xml): array
    {
        try {
            // Remove the DOCTYPE declaration for to prevent XML Quadratic Blowup vulnerability
            $xml = preg_replace('/^<!DOCTYPE[^>]*+>/i', '', $xml, 1);
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

            return $data ? ($data + $this->defaults) : [];
        } catch (Exception $exception) {
            return [];
        }
    }

    private function extractJSON(string $json): array
    {
        try {
            $data = json_decode($json, true);

            return $data ? ($data + $this->defaults) : [];
        } catch (Exception $exception) {
            return [];
        }
    }
}
