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
        $url = $this->extractor->url;

        return sprintf('%s://%s', $url->getScheme(), $url->getHost());
    }
}
