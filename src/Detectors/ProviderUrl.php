<?php
declare(strict_types = 1);

namespace Embed\Detectors;

use Psr\Http\Message\UriInterface;

class ProviderUrl extends Detector
{
    public function detect(): UriInterface
    {
        $oembed = $this->extractor->getOEmbed();
        $document = $this->extractor->getDocument();

        return $oembed->url('provider_url')
            ?: $document->meta('og:website')
            ?: $this->fallback();
    }

    private function fallback(): UriInterface
    {
        return $this->extractor->getUri()->withPath('')->withQuery('')->withFragment('');
    }
}
