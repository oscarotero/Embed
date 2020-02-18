<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Image extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();
        $document = $this->extractor->getDocument();

        return $oembed->url('image')
            ?: $oembed->url('thumbnail')
            ?: $oembed->url('thumbnail_url')
            ?: $document->meta('og:image')
            ?: $document->meta('og:image:url')
            ?: $document->meta('og:image:secure_url')
            ?: $document->meta('twitter:image')
            ?: $document->meta('twitter:image:src')
            ?: $document->meta('lp:image')
            ?: $document->link('image_src');
    }
}
