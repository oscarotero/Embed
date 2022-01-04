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
        $preview = $api->url('includes', 'media', '0', 'preview_image_url');
        
        if ($preview) {
            return $preview;
        }

        $regular = $api->url('includes', 'media', '0', 'url');

        if ($regular) {
            return $regular;
        }

        return parent::detect();
    }
}
