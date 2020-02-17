<?php
declare(strict_types = 1);

namespace Embed\Adapters\Archive\Detectors;

use Embed\Detectors\PublishedTime as Detector;

class PublishedTime extends Detector
{
    public function detect(): ?string
    {
        $api = $this->extractor->getApi();

        return $api->str('metadata', 'publicdate')
            ?: $api->str('metadata', 'addeddate')
            ?: $api->str('metadata', 'date')
            ?: parent::detect();
    }
}
