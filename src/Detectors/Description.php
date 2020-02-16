<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Description extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();
        $document = $this->extractor->getDocument();

        return $oembed->get('description')
            ?: $document->select('.//meta', ['property' => 'og:description'])->attribute('content')
            ?: $document->select('.//meta', ['name' => 'twitter:description'])->attribute('content')
            ?: $document->select('.//meta', ['name' => 'description'])->attribute('content')
            ?: $document->select('.//meta', ['itemprop' => 'description'])->attribute('content');
    }
}
