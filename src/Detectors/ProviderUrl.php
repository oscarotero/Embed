<?php
declare(strict_types = 1);

namespace Embed\Detectors;

use Psr\Http\Message\UriInterface;

class ProviderUrl extends Detector
{
    public function detect(): UriInterface
    {
        $oembed = $this->extractor->getOEmbed();
        $metas = $this->extractor->getMetas();

        return $oembed->url('provider_url')
            ?: $metas->url('og:website')
            ?: $this->fallback();
    }

    private function fallback(): UriInterface
    {
        return $this->extractor->getUri()->withPath('')->withQuery('')->withFragment('');
    }
}
