<?php
declare(strict_types = 1);

namespace Embed\Adapters\Ideone\Detectors;

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
        $uri = $this->extractor->getUri();
        $id = explode('/', $uri->getPath())[1];

        if (empty($id)) {
            return null;
        }

        return new EmbedCode(
            html('script', ['src' => "https://ideone.com/e.js/{$id}"])
        );
    }
}
