<?php

namespace Embed\Detectors;

class Languages extends Detector
{
    public function detect(): array
    {
        $document = $this->extractor->getDocument();

        $languages = [];

        foreach ($document->select('.//link[@hreflang]')->nodes() as $node) {
            $language = $node->getAttribute('hreflang');
            $href = $node->getAttribute('href');

            $languages[$language] = $href;
        }

        return $languages;
    }
}
