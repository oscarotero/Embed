<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class AuthorName extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();
        $document = $this->extractor->getDocument();

        return $oembed->str('author_name')
            ?: $document->meta(
                'article:author',
                'book:author',
                'sailthru.author',
                'lp.article:author',
                'twitter:creator'
            );
    }
}
