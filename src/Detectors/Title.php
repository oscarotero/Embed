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
            ?: $document->meta('og:title')
            ?: $document->meta('twitter:title')
            ?: $document->select('.//head/title')->str();
    }
}
