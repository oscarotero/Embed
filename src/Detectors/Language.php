<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Language extends Detector
{
    public function detect(): ?string
    {
        $document = $this->extractor->getDocument();

        return $document->select('/html')->attribute('lang')
            ?: $document->select('/html')->attribute('xml:lang')
            ?: $document->getMeta('language')
            ?: $document->getMeta('lang')
            ?: $document->getMeta('og:locale')
            ?: $document->getMeta('dc:language')
            ?: $document->select('.//meta', ['http-equiv' => 'content-language'])->attribute('content');
    }
}
