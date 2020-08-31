<?php
declare(strict_types = 1);

namespace Embed\Adapters\CadenaSer\Detectors;

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

        if (!matchPattern('/audio/*', $uri->getPath())) {
            return null;
        }

        $path = cleanPath('/widget/'.$uri->getPath());
        $src = $uri->withPath($path);

        $html = html('iframe', [
            'src' => $src,
            'frameborder' => 0,
            'width' => '100%',
            'height' => '360',
            'allowTransparency' => 'true',
        ]);

        return new EmbedCode($html, null, 360);
    }
}
