<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class PublishedTime extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();
        $document = $this->extractor->getDocument();

        return $oembed->str('pubdate')
            ?: $document->meta('article:published_time')
            ?: $document->meta('created')
            ?: $document->meta('date')
            ?: $document->meta('datepublished')
            ?: $document->meta('music:release_date')
            ?: $document->meta('video:release_date')
            ?: $document->meta('newsrepublic:publish_date')
            ?: $document->meta('pagerender')
            ?: $document->meta('pub_date')
            ?: $document->meta('publication-date')
            ?: $document->meta('lp.article:published_time')
            ?: $document->meta('lp.article:modified_time')
            ?: $document->meta('publish-date')
            ?: $document->meta('rc.datecreation')
            ?: $document->meta('timestamp')
            ?: $document->meta('sailthru.date')
            ?: $document->meta('article:modified_time');
    }
}
