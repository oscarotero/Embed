<?php
declare(strict_types = 1);

namespace Embed\Adapters\Gist\Detectors;

use Embed\Detectors\PublishedTime as Detector;

class PublishedTime extends Detector
{
    public function detect(): ?string
    {
        $api = $this->extractor->getApi();

        return $api->get('created_at')
            ?: parent::detect();
    }
}
