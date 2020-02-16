<?php
declare(strict_types = 1);

namespace Embed\Adapters\Gist\Detectors;

use Embed\Detectors\AuthorUrl as Detector;

class AuthorUrl extends Detector
{
    public function detect(): ?string
    {
        $api = $this->extractor->getApi();
        $owner = $api->get('owner');

        if ($owner) {
            return "https://github.com/{$owner}";
        }

        return parent::detect();
    }
}
