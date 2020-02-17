<?php
declare(strict_types = 1);

namespace Embed\Adapters\Archive\Detectors;

use Embed\Detectors\Title as Detector;

class Title extends Detector
{
    public function detect(): ?string
    {
        $api = $this->extractor->getApi();

        return $api->str('metadata', 'title')
            ?: parent::detect();
    }
}
