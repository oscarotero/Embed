<?php
declare(strict_types = 1);

namespace Embed\Adapters\Archive\Detectors;

use Embed\Detectors\Code as Detector;
use Embed\EmbedCode;
use function Embed\html;
use function Embed\matchPath;

class Code extends Detector
{
    public function detect(): ?EmbedCode
    {
        $uri = $this->extractor->getUri();
        $path = $uri->getPath();

        if (!matchPath('/details/*', $path)) {
            return null;
        }

        $src = $uri->withPath(str_replace('/details/', '/embed/', $path));
        $width = 640;
        $height = 480;

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
