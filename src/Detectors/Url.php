<?php
declare(strict_types = 1);

namespace Embed\Detectors;

use Psr\Http\Message\UriInterface;

class Url extends Detector
{
    public function detect(): UriInterface
    {
        $oembed = $this->extractor->getOEmbed();

        return $oembed->url('url')
            ?: $oembed->url('web_page')
            ?: $this->extractor->getUri();
    }
}
