<?php
declare(strict_types = 1);

namespace Embed\Adapters\Twitter\Detectors;

use Embed\Detectors\Title as Detector;

class Title extends Detector
{
    public function detect(): ?string
    {
        $api = $this->extractor->getApi();
        $name = $api->str('includes', 'users', '0', 'name');

        if ($name) {
            return "Tweet by $name";
        }

        return parent::detect();
    }
}
