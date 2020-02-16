<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Favicon extends Detector
{
    public function detect(): ?string
    {
        $document = $this->extractor->getDocument();

        return $document->select('.//link', ['rel' => 'shortcut icon'])->attribute('href')
            ?: $document->select('.//link', ['rel' => 'icon'])->attribute('href')
            ?: '/favicon.ico';
    }
}
