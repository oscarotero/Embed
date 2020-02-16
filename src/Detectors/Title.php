<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Title extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();
        $document = $this->extractor->getDocument();

        return $oembed->get('title')
            ?: $document->select('.//meta', ['property' => 'og:title'])->attribute('content')
            ?: $document->select('.//meta', ['name' => 'twitter:title'])->attribute('content')
            ?: $document->select('.//head/title')->value();
    }
}
