<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class ProviderUrl extends Detector
{
    public function detect(): string
    {
        $oembed = $this->extractor->getOEmbed();

        return $oembed->get('provider_url')
            ?: $this->fallback();
    }

    private function fallback(): string
    {
        $uri = $this->extractor->getUri();

        return sprintf('%s://%s', $uri->getScheme(), $uri->getHost());
    }
}
