<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Url extends Detector
{
    public function detect(): string
    {
        $oembed = $this->extractor->getOEmbed();

        return $oembed->url('url')
            ?: $oembed->url('web_page')
            ?: (string) $this->extractor->getUri();
    }
}
