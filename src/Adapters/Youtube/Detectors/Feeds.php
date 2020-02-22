<?php
declare(strict_types = 1);

namespace Embed\Adapters\Youtube\Detectors;

use Embed\Detectors\Feeds as Detector;
use function Embed\getDirectory;
use function Embed\match;

class Feeds extends Detector
{
    public function detect(): array
    {
        return parent::detect()
            ?: $this->fallback();
    }

    private function fallback(): array
    {
        $uri = $this->extractor->getUri();

        if (!match('/channel/*', $uri->getPath())) {
            return [];
        }

        $id = getDirectory($uri->getPath(), 1);

        return ["https://www.youtube.com/feeds/videos.xml?channel_id={$id}"];
    }
}
