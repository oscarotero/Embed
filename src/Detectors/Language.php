<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Language extends Detector
{
    public function detect(): ?string
    {
        $document = $this->extractor->getDocument();
        $ld = $this->extractor->getLinkedData();

        return $document->select('/html')->str('lang')
            ?: $document->select('/html')->str('xml:lang')
            ?: $document->meta('language')
            ?: $document->meta('lang')
            ?: $document->meta('og:locale')
            ?: $document->meta('dc:language')
            ?: $document->select('.//meta', ['http-equiv' => 'content-language'])->str('content')
            ?: $ld->str('inLanguage');
    }
}
