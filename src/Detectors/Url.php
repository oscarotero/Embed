<?php
declare(strict_types = 1);

namespace Embed\Detectors;

use Psr\Http\Message\UriInterface;

class Url extends Detector
{
    public function detect(): string
    {
        $oembed = $this->extractor->getOEmbed();

        return $oembed->get('url')
            ?: $oembed->get('web_page')
            ?: (string) $this->extractor->getUri();
    }
}
