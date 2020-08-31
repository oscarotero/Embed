<?php
declare(strict_types = 1);

namespace Embed\Adapters\Snipplr\Detectors;

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

        if (!matchPattern('/view/*', $uri->getPath())) {
            return null;
        }

        $id = explode('/', $uri->getPath())[2];

        $html = [
            html('div', [
                'id' => "snipplr_embed_{$id}",
                'class' => 'snipplr_embed',
            ], '<a target="blank" href="https://snipplr.com/view/'.$id.'">View this snippet</a> on Snipplr'),
            html('script', [
                'type' => 'text/javascript',
                'src' => 'https://snipplr.com/js/embed.js',
            ]),
            html('script', [
                'type' => 'text/javascript',
                'src' => "https://snipplr.com/json/{$id}",
            ]),
        ];

        return new EmbedCode(implode('', $html));
    }
}
