<?php
declare(strict_types = 1);

namespace Embed\Adapters\Twitter\Detectors;

use Embed\Detectors\Image as Detector;
use Psr\Http\Message\UriInterface;

class Image extends Detector
{
    public function detect(): ?UriInterface
    {
        $api = $this->extractor->getApi();

        return $api->url('includes', 'media', '0', 'preview_image_url')
            ?: parent::detect();
    }
}
