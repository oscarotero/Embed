<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Languages extends Detector
{
    /**
     * @return \Psr\Http\Message\UriInterface[]
     */
    public function detect(): array
    {
        $document = $this->extractor->getDocument();
        $languages = [];

        foreach ($document->select('.//link[@hreflang]')->nodes() as $node) {
            $language = $node->getAttribute('hreflang');
            $href = $node->getAttribute('href');

            if (self::isEmpty($language) || self::isEmpty($href)) {
                continue;
            }

            $languages[$language] = $this->extractor->resolveUri($href);
        }

        return $languages;
    }

    private function isEmpty(string $value): bool
    {
        $skipValues = array(
            'undefined',
        );

        return empty($value) || in_array($value, $skipValues);
    }
}
