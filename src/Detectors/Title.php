<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Title extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();
        $document = $this->extractor->getDocument();

        return $oembed->str('title')
            ?: $document->getMeta('og:title')
            ?: $document->getMeta('twitter:title')
            ?: $document->select('.//head/title')->value();
    }
}
