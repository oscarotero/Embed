<?php

namespace Embed\Detectors;

class Image extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();

        return $oembed->get('image')
            ?: $oembed->get('thumbnail')
            ?: $oembed->get('thumbnail_url');
    }
}
