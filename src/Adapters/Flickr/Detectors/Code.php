<?php
declare(strict_types = 1);

namespace Embed\Adapters\Flickr\Detectors;

use function Embed\cleanPath;
use Embed\Detectors\Code as Detector;
use Embed\EmbedCode;
use function Embed\html;
use function Embed\match;

class Code extends Detector
{
    public function detect(): ?EmbedCode
    {
        return parent::detect()
            ?: $this->fallback();
    }

    private function fallback(): ?EmbedCode
    {
        $uri = $this->extractor->getUri();

        if (!matchPattern('/photos/*', $uri->getPath())) {
            return null;
        }

        $path = cleanPath($uri->getPath().'/player');
        $src = $uri->withPath($path);
        $width = 640;
        $height = 425;

        $html = html('iframe', [
            'src' => $src,
            'width' => $width,
            'height' => $height,
            'style' => 'border:none',
            'frameborder' => 0,
            'allowTransparency' => 'true',
        ]);

        return new EmbedCode($html, $width, $height);
    }
}
