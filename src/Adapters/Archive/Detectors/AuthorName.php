<?php
declare(strict_types = 1);

namespace Embed\Adapters\Archive\Detectors;

use Embed\Detectors\AuthorName as Detector;

class AuthorName extends Detector
{
    public function detect(): ?string
    {
        $api = $this->extractor->getApi();

        return $api->str('metadata', 'creator')
            ?: parent::detect();
    }
}
