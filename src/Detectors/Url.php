<?php

namespace Embed\Detectors;

class Url extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();

        return $oembed->get('url')
            ?: $oembed->get('web_page')
            ?: $this->extractor->getResponse()->getHeaderLine('Content-Location')
            ?: (string) $this->extractor->getRequest()->getUri();
    }
}
