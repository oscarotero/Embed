<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Favicon extends Detector
{
    public function detect(): ?string
    {
        $document = $this->extractor->getDocument();

        return $document->link('shortcut icon')
            ?: $document->link('icon')
            ?: (string) $this->extractor->getUri()->withPath('/favicon.ico')->withQuery('');
    }
}
