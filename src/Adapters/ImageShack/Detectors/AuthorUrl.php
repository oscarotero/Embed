<?php
declare(strict_types = 1);

namespace Embed\Adapters\ImageShack\Detectors;

use Embed\Detectors\AuthorUrl as Detector;

class AuthorUrl extends Detector
{
    public function detect(): ?string
    {
        $api = $this->extractor->getApi();
        $owner = $api->get('owner', 'username');

        if ($owner) {
            return "https://imageshack.com/{$owner}";
        }

        return parent::detect();
    }
}
