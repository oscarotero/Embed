<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Title extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();
        $document = $this->extractor->getDocument();
        $metas = $this->extractor->getMetas();

        return $oembed->str('title')
            ?: $metas->str('og:title', 'twitter:title', 'lp:title')
            ?: $document->select('.//head/title')->str();
    }
}
