<?php
declare(strict_types = 1);

namespace Embed\Adapters\Archive\Detectors;

use Datetime;
use Embed\Detectors\PublishedTime as Detector;

class PublishedTime extends Detector
{
    public function detect(): ?Datetime
    {
        $api = $this->extractor->getApi();

        return $api->time('metadata', 'publicdate')
            ?: $api->time('metadata', 'addeddate')
            ?: $api->time('metadata', 'date')
            ?: parent::detect();
    }
}
