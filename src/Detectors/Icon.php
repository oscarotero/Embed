<?php

namespace Embed\Detectors;

class Icon extends Detector
{
    public function detect(): ?string
    {
        $document = $this->extractor->getDocument();

        return $document->select('.//link', ['rel' => 'apple-touch-icon-precomposed'])->attribute('href')
            ?: $document->select('.//link', ['rel' => 'apple-touch-icon'])->attribute('href')
            ?: $document->select('.//link', ['rel' => 'icon', 'sizes' => '144x144'])->attribute('href')
            ?: $document->select('.//link', ['rel' => 'icon', 'sizes' => '96x96'])->attribute('href')
            ?: $document->select('.//link', ['rel' => 'icon', 'sizes' => '48x48'])->attribute('href');
    }
}
