<?php

namespace Embed\Detectors;

class Feeds extends Detector
{
    private static $types = [
        'application/atom+xml',
        'application/json',
        'application/rdf+xml',
        'application/rss+xml',
        'application/xml',
        'text/xml',
    ];

    public function detect(): array
    {
        $document = $this->extractor->getDocument();
        $feeds = [];

        foreach (self::$types as $type) {
            $href = $document->select('.//link', ['rel' => 'alternate', 'type' => $type])->attribute('href');

            if ($href) {
                $feeds[] = $href;
            }
        }

        return $feeds;
    }
}
