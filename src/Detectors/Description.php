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
            ?: $document->getMeta('og:description')
            ?: $document->getMeta('og:description')
            ?: $document->getMeta('twitter:description')
            ?: $document->getMeta('twitter:description')
            ?: $document->getMeta('description');
    }
}
