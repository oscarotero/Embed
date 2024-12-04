<?php
declare(strict_types = 1);

namespace Embed;

use Exception;
use ML\JsonLD\JsonLD;
use ML\JsonLD\Document as LdDocument;
use ML\JsonLD\DocumentInterface;
use ML\JsonLD\GraphInterface;
use ML\JsonLD\Node;
use Throwable;

class LinkedData
{
    use ApiTrait;

    private ?DocumentInterface $document;

    private array $allData;

    public function get(string ...$keys)
    {
        $graph = $this->getGraph();

        if (!$graph) {
            return null;
        }

        foreach ($keys as $key) {
            $subkeys = explode('.', $key);

            foreach ($graph->getNodes() as $node) {
                $value = self::getValue($node, ...$subkeys);

                if ($value) {
                    return $value;
                }
            }
        }

        return null;
    }

    public function getAll()
    {
        if (!isset($this->allData)) {
            $this->fetchData();
        }

        return $this->allData;
    }

    private function getGraph(?string $name = null): ?GraphInterface
    {
        if (!isset($this->document)) {
            try {
                $this->document = LdDocument::load(json_encode($this->all()));
            } catch (Throwable $throwable) {
                $this->document = LdDocument::load('{}');
                return null;
            }
        }

        return $this->document->getGraph($name);
    }

    protected function fetchData(): array
    {
        $this->allData = [];

        $document = $this->extractor->getDocument();
        $nodes = $document->select('.//script', ['type' => 'application/ld+json'])->strAll();

        if (empty($nodes)) {
            return [];
        }

        try {
            $data = [];
            $request_uri = (string)$this->extractor->getUri();
            foreach ($nodes as $node) {
                $ldjson = json_decode($node, true);
                if (!empty($ldjson)) {

                    // some pages with multiple ld+json blocks will put
                    // each block into an array (Flickr does this). Most
                    // appear to put an object in each ld+json block. To
                    // prevent them from stepping on one another, the ones
                    // that are not arrays will be put into an array.
                    if (!array_is_list($ldjson)) {
                        $ldjson = [$ldjson];
                    }

                    foreach ($ldjson as $node) {
                        if (empty($data)) {
                            $data = $node;
                        } elseif (isset($node['mainEntityOfPage'])) {
                            $url = '';
                            if (is_string($node['mainEntityOfPage'])) {
                                $url = $node['mainEntityOfPage'];
                            } elseif (isset($node['mainEntityOfPage']['@id'])) {
                                $url = $node['mainEntityOfPage']['@id'];
                            }
                            if (!empty($url) && $url == $request_uri) {
                                $data = $node;
                            }
                        }
                    }


                    $this->allData = array_merge($this->allData, $ldjson);
                }
            }

            return $data;
        } catch (Exception $exception) {
            return [];
        }
    }

    private static function getValue(Node $node, string ...$keys)
    {
        foreach ($keys as $key) {
            if (is_array($node)) {
                $node = array_shift($node);
            }
            if (!$node instanceof Node) {
                return null;
            }

            $node = $node->getProperty("http://schema.org/{$key}");

            if (!$node) {
                return null;
            }
        }

        return self::detectValue($node);
    }

    private static function detectValue($value)
    {
        if (is_array($value)) {
            return array_map(
                fn ($val) => self::detectValue($val),
                array_values($value)
            );
        }

        if (is_scalar($value)) {
            return $value;
        }

        if ($value instanceof Node) {
            return $value->getId();
        }

        return $value->getValue();
    }
}
