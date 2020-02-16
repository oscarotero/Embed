<?php
declare(strict_types = 1);

namespace Embed;

use Closure;
use DOMElement;
use DOMNode;
use DOMNodeList;

class QueryResult
{
    private array $nodes;

    public static function create(DOMNodeList $result): self
    {
        $nodes = [];

        foreach ($result as $node) {
            $nodes[] = $node;
        }

        return new static(...$nodes);
    }

    public function __construct(DOMNode ...$nodes)
    {
        $this->nodes = $nodes;
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

    public function minLength($minLength): self
    {
        return $this->filter(fn ($node) => mb_strlen(clean($node->nodeValue)) >= $minLength);
    }

    public function value(int $minLength = 1, int $maxLength = null): ?string
    {
        $node = $this->node();

        if (!$node) {
            return null;
        }

        return self::clean($node->nodeValue, $minLength, $maxLength);
    }

    public function attribute(string $name, int $minLength = 1, int $maxLength = null): ?string
    {
        $node = $this->node();

        return $node ? $this->getAttribute($node, $name, $minLength, $maxLength) : null;
    }

    public function attributes(string $name, int $minLength = 1, int $maxLength = null): array
    {
        $nodes = $this->nodes();

        return array_filter(
            array_map(
                fn ($node) => $this->getAttribute($node, $name, $minLength, $maxLength),
                $nodes
            )
        );
    }

    private function getAttribute(DOMElement $node, string $name, int $minLength, ?int $maxLength): ?string
    {
        //Don't use $node->getAttribute() because it does not work with namespaces (ex: xml:lang)
        $attributes = $node->attributes;

        for ($i = 0; $i < $attributes->length; ++$i) {
            $attribute = $attributes->item($i);

            if ($attribute->name === $name) {
                return clean($attribute->nodeValue, $minLength, $maxLength);
            }
        }

        return null;
    }

    private static function clean(string $value, int $minLength = 0, int $maxLength = null): ?string
    {
        $value = clean($value);

        if (strlen($value) < $minLength) {
            return null;
        }

        if ($maxLength) {
            return cropText($value, $maxLength);
        }

        return $value;
    }
}
