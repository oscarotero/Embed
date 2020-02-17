<?php
declare(strict_types = 1);

namespace Embed\Adapters\ImageShack\Detectors;

use Embed\Detectors\Image as Detector;

class Image extends Detector
{
    public function detect(): ?string
    {
        $api = $this->extractor->getApi();

        return $api->url('direct_link')
            ?: parent::detect();
    }
}
