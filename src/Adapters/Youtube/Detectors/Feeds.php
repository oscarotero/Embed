<?php
declare(strict_types = 1);

namespace Embed\Adapters\Youtube\Detectors;

use Embed\Detectors\Feeds as Detector;
use function Embed\getDirectory;
use function Embed\match;
use Psr\Http\Message\UriInterface;

class Feeds extends Detector
{
    /**
     * @return UriInterface[]
     */
    public function detect(): array
    {
        return parent::detect()
            ?: $this->fallback();
    }

    private function fallback(): array
    {
        $uri = $this->extractor->getUri();

        if (!matchPattern('/channel/*', $uri->getPath())) {
            return [];
        }

        $id = getDirectory($uri->getPath(), 1);
        $feed = $this->extractor->getCrawler()->createUri("https://www.youtube.com/feeds/videos.xml?channel_id={$id}");

        return [$feed];
    }
}
