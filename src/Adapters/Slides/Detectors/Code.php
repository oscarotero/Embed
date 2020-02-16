<?php
declare(strict_types = 1);

namespace Embed\Adapters\Slides\Detectors;

use Embed\Detectors\Code as Detector;
use Embed\EmbedCode;
use function Embed\html;

class Code extends Detector
{
    public function detect(): ?EmbedCode
    {
        return parent::detect()
            ?: $this->fallback();
    }

    private function fallback(): ?EmbedCode
    {
        $url = $this->extractor->url;

        $path = array_filter(explode('/', $url->getPath()));
        $path = [...$path, 'embed'];
        $src = $url->withPath(implode('/', $path));
        $width = 576;
        $height = 420;

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
