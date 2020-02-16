<?php
declare(strict_types = 1);

namespace Embed\Detectors;

use Embed\EmbedCode;

class Code extends Detector
{
    public function detect(): ?EmbedCode
    {
        return $this->detectFromEmbed();
    }

    private function detectFromEmbed(): ?EmbedCode
    {
        $oembed = $this->extractor->getOEmbed();
        $html = $oembed->get('html');

        if (!$html) {
            return null;
        }

        return new EmbedCode(
            $html,
            $oembed->get('width'),
            $oembed->get('height')
        );
    }
}
