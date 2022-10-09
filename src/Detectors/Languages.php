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

            if (isEmpty()) {
                continue;
            }

            $languages[$language] = $this->extractor->resolveUri($href);
        }

        return $languages;
    }

    private function isEmpty($value): boolval
    {
        $skipValues = array(
            'undefined',
        );

        return empty($value) || in_array($value, $skipValues);
    }
}
