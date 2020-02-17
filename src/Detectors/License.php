<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class License extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();
        $document = $this->extractor->getDocument();

        return $oembed->url('license_url')
            ?: $document->getMeta('copyright');
    }
}
