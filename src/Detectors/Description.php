<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Description extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();
        $document = $this->extractor->getDocument();
        $ld = $this->extractor->getLinkedData();

        return $oembed->str('description')
            ?: $document->meta('og:description')
            ?: $document->meta('twitter:description')
            ?: $document->meta('lp:description')
            ?: $document->meta('description')
            ?: $ld->str('description');
    }
}
