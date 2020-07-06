<?php
declare(strict_types = 1);

namespace Embed;

use Closure;
use DOMElement;
use DOMNodeList;
use Psr\Http\Message\UriInterface;
use Throwable;

class QueryResult
{
    private Extractor $extractor;
    private array $nodes = [];

    public function __construct(DOMNodeList $result, Extractor $extractor)
    {
        $this->nodes = iterator_to_array($result, false);
        $this->extractor = $extractor;
    }

    public function node(): ?DOMElement
    {
        return $this->nodes[0] ?? null;
    }

    public function nodes(): array
    {
        return $this->nodes;
    }

    public function filter(Closure $callback): self
    {
        $this->nodes = array_filter($this->nodes, $callback);

        return $this;
    }

    public function get(string $attribute = null)
    {
        $node = $this->node();

        if (!$node) {
            return null;
        }

        return $attribute ? self::getAttribute($node, $attribute) : $node->nodeValue;
    }

    public function getAll(string $attribute = null): array
    {
        $nodes = $this->nodes();

        return array_filter(
            array_map(
                fn ($node) => $attribute ? self::getAttribute($node, $attribute) : $node->nodeValue,
                $nodes
            )
        );
    }

    public function str(string $attribute = null): ?string
    {
        $value = $this->get($attribute);

        return $value ? clean($value) : null;
    }

    public function strAll(string $attribute = null): array
    {
        return array_filter(array_map(fn ($value) => clean($value), $this->getAll($attribute)));
    }

    public function int(string $attribute = null): ?int
    {
        $value = $this->get($attribute);

        return $value ? (int) $value : null;
    }

    public function url(string $attribute = null): ?UriInterface
    {
        $value = $this->get($attribute);

        if (!$value) {
            return null;
        }

        try {
            return $this->extractor->resolveUri($value);
        } catch (Throwable $error) {
            return null;
        }
    }

    private static function getAttribute(DOMElement $node, string $name): ?string
    {
        //Don't use $node->getAttribute() because it does not work with namespaces (ex: xml:lang)
        $attributes = $node->attributes;

        for ($i = 0; $i < $attributes->length; ++$i) {
            $attribute = $attributes->item($i);

            if ($attribute->name === $name) {
                return $attribute->nodeValue;
            }
        }

        return null;
    }
}
