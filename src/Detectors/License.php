<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class License extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();
        $metas = $this->extractor->getMetas();

        return $oembed->str('license_url')
            ?: $metas->str('copyright');
    }
}
