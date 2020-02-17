<?php
declare(strict_types = 1);

namespace Embed\Adapters\Gist\Detectors;

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
        $api = $this->extractor->getApi();

        $code = $api->html('div');
        $stylesheet = $api->str('stylesheet');

        if ($code && $stylesheet) {
            return new EmbedCode(
                html('link', ['rel' => 'stylesheet', 'href' => $stylesheet]).$code
            );
        }
    }
}
