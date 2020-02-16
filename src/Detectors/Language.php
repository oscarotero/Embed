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
            ?: $document->select('.//meta', ['name' => 'language'])->attribute('content')
            ?: $document->select('.//meta', ['name' => 'lang'])->attribute('content')
            ?: $document->select('.//meta', ['property' => 'og:locale'])->attribute('content')
            ?: $document->select('.//meta', ['name' => 'dc:language'])->attribute('content')
            ?: $document->select('.//meta', ['http-equiv' => 'content-language'])->attribute('content');
    }
}
