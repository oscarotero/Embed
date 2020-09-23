<?php
declare(strict_types = 1);

namespace Embed\Detectors;

use Datetime;

class PublishedTime extends Detector
{
    public function detect(): ?Datetime
    {
        $oembed = $this->extractor->getOEmbed();
        $metas = $this->extractor->getMetas();
        $ld = $this->extractor->getLinkedData();

        return $oembed->time('pubdate')
            ?: $metas->time(
                'article:published_time',
                'created',
                'date',
                'datepublished',
                'music:release_date',
                'video:release_date',
                'newsrepublic:publish_date'
            )
            ?: $ld->time(
                'pagePublished',
                'datePublished'
            )
            ?: $this->detectFromPath()
            ?: $metas->time(
                'pagerender',
                'pub_date',
                'publication-date',
                'lp.article:published_time',
                'lp.article:modified_time',
                'publish-date',
                'rc.datecreation',
                'timestamp',
                'sailthru.date',
                'article:modified_time'
            );
    }

    /**
     * Some sites using WordPress have the published time in the url
     * For example: mysite.com/2020/05/19/post-title
     */
    private function detectFromPath(): ?Datetime
    {
        $path = $this->extractor->getUri()->getPath();

        if (preg_match('#/(19|20)\d{2}/[0-1]?\d/[0-3]?\d/#', $path, $matches)) {
            return date_create_from_format('/Y/m/d/', $matches[0]) ?: null;
        }

        return null;
    }
}
