<?php

namespace Embed\Detectors;

class PublishedTime extends Detector
{
    public function detect(): ?string
    {
        $document = $this->extractor->getDocument();

        return $document->select('.//meta', ['name' => 'article:published_time'])->attribute('content')
            ?: $document->select('.//meta', ['name' => 'created'])->attribute('content')
            ?: $document->select('.//meta', ['name' => 'date'])->attribute('content')
            ?: $document->select('.//meta', ['name' => 'datepublished'])->attribute('content')
            ?: $document->select('.//meta', ['name' => 'newsrepublic:publish_date'])->attribute('content')
            ?: $document->select('.//meta', ['name' => 'pagerender'])->attribute('content')
            ?: $document->select('.//meta', ['name' => 'pub_date'])->attribute('content')
            ?: $document->select('.//meta', ['name' => 'publication-date'])->attribute('content')
            ?: $document->select('.//meta', ['name' => 'publish-date'])->attribute('content')
            ?: $document->select('.//meta', ['name' => 'rc.datecreation'])->attribute('content')
            ?: $document->select('.//meta', ['name' => 'timestamp'])->attribute('content')
            ?: $document->select('.//meta', ['name' => 'article:modified_time'])->attribute('content');
    }
}
