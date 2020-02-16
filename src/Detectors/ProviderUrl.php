<?php

namespace Embed\Detectors;

class ProviderUrl extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();

        return $oembed->get('provider_url');
    }
}
