<?php
declare(strict_types = 1);

namespace Embed\Adapters\Gist\Detectors;

use Embed\Detectors\AuthorName as Detector;

class AuthorName extends Detector
{
    public function detect(): ?string
    {
        $api = $this->extractor->getApi();

        return $api->get('owner')
            ?: parent::detect();
    }
}
