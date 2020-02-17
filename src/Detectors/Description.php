<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Description extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();
        $document = $this->extractor->getDocument();

        return $oembed->str('description')
            ?: $document->meta('og:description')
            ?: $document->meta('og:description')
            ?: $document->meta('twitter:description')
            ?: $document->meta('twitter:description')
            ?: $document->meta('description');
    }
}
