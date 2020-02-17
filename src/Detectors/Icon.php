<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Icon extends Detector
{
    public function detect(): ?string
    {
        $document = $this->extractor->getDocument();

        return $document->link('apple-touch-icon-precomposed')
            ?: $document->link('apple-touch-icon')
            ?: $document->link('icon', ['sizes' => '144x144'])
            ?: $document->link('icon', ['sizes' => '96x96'])
            ?: $document->link('icon', ['sizes' => '48x48']);
    }
}
