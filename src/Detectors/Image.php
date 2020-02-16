<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Image extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();
        $document = $this->extractor->getDocument();

        return $oembed->get('image')
            ?: $oembed->get('thumbnail')
            ?: $oembed->get('thumbnail_url')
            ?: $document->getMeta('og:image')
            ?: $document->select('.//link', ['rel' => 'image_src'])->attribute('href');
    }
}
