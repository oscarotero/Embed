<?php
declare(strict_types = 1);

namespace Embed\Adapters\Twitter\Detectors;

use Embed\Detectors\AuthorName as Detector;

class AuthorName extends Detector
{
    public function detect(): ?string
    {
        $api = $this->extractor->getApi();
        
        return $api->str('includes', 'users', '0', 'name')
            ?: parent::detect();
    }
}
