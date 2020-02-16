<?php
declare(strict_types = 1);

namespace Embed\Detectors;

use Psr\Http\Message\UriInterface;

class Url extends Detector
{
    public function detect(): UriInterface
    {
        return $this->extractor->getCrawler()->createUri($this->detectUrl());
    }

    private function detectUrl(): string
    {
        $oembed = $this->extractor->getOEmbed();

        return $oembed->get('url')
            ?: $oembed->get('web_page')
            ?: $this->extractor->getResponse()->getHeaderLine('Content-Location')
            ?: (string) $this->extractor->getRequest()->getUri();
    }
}
