<?php
declare(strict_types = 1);

namespace Embed;

use DOMDocument;
use DOMNode;
use DOMXPath;
use HtmlParser\Parser;

class Document
{
    private DOMDocument $document;
    private DOMXPath $xpath;

    public static function create(string $html): Document
    {
        $html = str_replace('<br>', "\n", $html);
        $html = str_replace('<br />', "\n", $html);

        $document = !empty($html) ? Parser::parse($html) : new DOMDocument();

        return new static($document);
    }

    private function __construct(DOMDocument $document)
    {
        $this->document = $document;
        $this->initXPath();
    }

    private function initXPath()
    {
        $this->xpath = new DOMXPath($this->document);
        $this->xpath->registerNamespace('php', 'http://php.net/xpath');
        $this->xpath->registerPhpFunctions();
    }

    public function __clone()
    {
        $this->document = clone $this->document;
        $this->initXPath();
    }

    public function remove(string $query): void
    {
        foreach ($this->select($query)->nodes() as $node) {
            $node->parentNode->removeChild($node);
        }
    }

    public function getDocument(): DOMDocument
    {
        return $this->document;
    }

    /**
     * Helper to build xpath queries easily and case insensitive
     */
    private static function buildQuery(string $startQuery, array $attributes): string
    {
        $selector = [$startQuery];

        foreach ($attributes as $name => $value) {
            $selector[] = sprintf('[php:functionString("strtolower", @%s)="%s"]', $name, mb_strtolower($value));
        }

        return implode('', $selector);
    }

    /**
     * Select a element in the dom
     */
    public function select(string $query, array $attributes = null, DOMNode $context = null): ?QueryResult
    {
        if (!empty($attributes)) {
            $query = self::buildQuery($query, $attributes);
        }

        return QueryResult::create($this->xpath->query($query, $context));
    }
}
