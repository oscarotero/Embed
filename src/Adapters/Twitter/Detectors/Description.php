<?php
declare(strict_types = 1);

namespace Embed\Adapters\Twitter\Detectors;

use Embed\Detectors\Description as Detector;

class Description extends Detector
{
    public function detect(): ?string
    {
        $api = $this->extractor->getApi();

        return $api->str('data', 'text')
            ?: parent::detect();
    }
}
