<?php
declare(strict_types = 1);

namespace Embed\Detectors;

use function Embed\resolveUri;

class Languages extends Detector
{
    public function detect(): array
    {
        $document = $this->extractor->getDocument();
        $crawler = $this->extractor->getCrawler();
        $uri = $this->extractor->getUri();

        $languages = [];

        foreach ($document->select('.//link[@hreflang]')->nodes() as $node) {
            $language = $node->getAttribute('hreflang');
            $href = $node->getAttribute('href');

            if (!$language || !$href) {
                continue;
            }

            $languages[$language] = (string) resolveUri($uri, $crawler->createUri($href));
        }

        return $languages;
    }
}
