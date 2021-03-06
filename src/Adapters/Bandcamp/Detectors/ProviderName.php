<?php
declare(strict_types = 1);

namespace Embed\Adapters\Bandcamp\Detectors;

use Embed\Detectors\ProviderName as Detector;

class ProviderName extends Detector
{
    public function detect(): string
    {
        return 'Bandcamp';
    }
}
