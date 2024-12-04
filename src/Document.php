<?php
declare(strict_types = 1);

namespace Embed;

use DOMDocument;
use DOMNode;
use DOMXPath;
use HtmlParser\Parser;
use Psr\Http\Message\UriInterface;
use RuntimeException;
use Symfony\Component\CssSelector\CssSelectorConverter;

class Document
{
    private static CssSelectorConverter $cssConverter;
    private Extractor $extractor;
    private DOMDocument $document;
    private DOMXPath $xpath;

    public function __construct(Extractor $extractor)
    {
        $this->extractor = $extractor;

        $html = (string) $extractor->getResponse()->getBody();
        $html = str_replace('<br>', "\n<br>", $html);
        $html = str_replace('<br ', "\n<br ", $html);

        $encoding = null;
        $contentType = $extractor->getResponse()->getHeaderLine('content-type');
        preg_match('/charset=(?:"|\')?(.*?)(?=$|\s|;|"|\'|>)/i', $contentType, $match);
        if (!empty($match[1])) {
            $encoding = trim($match[1], ',');
            try {
                $ret = mb_encoding_aliases($encoding);
                if ($ret === false) {
                    $encoding = null;
                }
            } catch (\ValueError $exception) {
                $encoding = null;
            }
        }
        if (is_null($encoding) && !empty($html)) {
            preg_match('/charset=(?:"|\')?(.*?)(?=$|\s|;|"|\'|>)/i', $html, $match);
            if (!empty($match[1])) {
                $encoding = trim($match[1], ',');
            }
            try {
                $ret = mb_encoding_aliases($encoding);
                if ($ret === false) {
                    $encoding = null;
                }
            } catch (\ValueError $exception) {
                $encoding = null;
            }
        }
        $this->document = !empty($html) ? Parser::parse($html, $encoding) : new DOMDocument();
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
        $nodes = iterator_to_array($this->xpath->query($query), false);

        foreach ($nodes as $node) {
            $node->parentNode->removeChild($node);
        }
    }

    public function removeCss(string $query): void
    {
        $this->remove(self::cssToXpath($query));
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
    public function select(string $query, ?array $attributes = null, ?DOMNode $context = null): QueryResult
    {
        if (!empty($attributes)) {
            $query = self::buildQuery($query, $attributes);
        }

        return new QueryResult($this->xpath->query($query, $context), $this->extractor);
    }

    /**
     * Select a element in the dom using a css selector
     */
    public function selectCss(string $query, ?DOMNode $context = null): QueryResult
    {
        return $this->select(self::cssToXpath($query), null, $context);
    }

    /**
     * Shortcut to select a <link> element and return the href
     */
    public function link(string $rel, array $extra = []): ?UriInterface
    {
        return $this->select('.//link', ['rel' => $rel] + $extra)->url('href');
    }

    public function __toString(): string
    {
        return Parser::stringify($this->getDocument());
    }

    private static function cssToXpath(string $selector): string
    {
        if (!isset(self::$cssConverter)) {
            if (!class_exists(CssSelectorConverter::class)) {
                throw new RuntimeException('You need to install "symfony/css-selector" to use css selectors');
            }

            self::$cssConverter = new CssSelectorConverter();
        }

        return self::$cssConverter->toXpath($selector);
    }
}
