<?php

namespace Embed\Detectors;

class ProviderName extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();

        return $oembed->get('provider_name');
    }
}
