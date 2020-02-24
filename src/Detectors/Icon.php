<?php
declare(strict_types = 1);

namespace Embed\Detectors;

use Psr\Http\Message\UriInterface;

class Icon extends Detector
{
    public function detect(): ?UriInterface
    {
        $document = $this->extractor->getDocument();

        return $document->link('apple-touch-icon-precomposed')
            ?: $document->link('apple-touch-icon')
            ?: $document->link('icon', ['sizes' => '144x144'])
            ?: $document->link('icon', ['sizes' => '96x96'])
            ?: $document->link('icon', ['sizes' => '48x48']);
    }
}
