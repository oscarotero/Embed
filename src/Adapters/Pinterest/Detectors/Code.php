<?php
declare(strict_types = 1);

namespace Embed\Adapters\Pinterest\Detectors;

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

        if (!matchPattern('/pin/*', $uri->getPath())) {
            return null;
        }

        $html = [
            html('a', [
                'data-pin-do' => 'embedPin',
                'href' => $uri,
            ]),
            html('script', [
                'async' => true,
                'defer' => true,
                'src' => '//assets.pinterest.com/js/pinit.js',
            ]),
        ];

        return new EmbedCode(implode('', $html), 236, 442);
    }
}
