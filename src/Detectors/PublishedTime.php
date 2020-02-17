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
            ?: $document->getMeta('article:published_time')
            ?: $document->getMeta('created')
            ?: $document->getMeta('date')
            ?: $document->getMeta('datepublished')
            ?: $document->getMeta('music:release_date')
            ?: $document->getMeta('video:release_date')
            ?: $document->getMeta('newsrepublic:publish_date')
            ?: $document->getMeta('pagerender')
            ?: $document->getMeta('pub_date')
            ?: $document->getMeta('publication-date')
            ?: $document->getMeta('publish-date')
            ?: $document->getMeta('rc.datecreation')
            ?: $document->getMeta('timestamp')
            ?: $document->getMeta('article:modified_time');
    }
}
