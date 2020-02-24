<?php
declare(strict_types = 1);

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

    /**
     * @return \Psr\Http\Message\UriInterface[]
     */
    public function detect(): array
    {
        $document = $this->extractor->getDocument();
        $feeds = [];

        foreach (self::$types as $type) {
            $href = $document->link('alternate', ['type' => $type]);

            if ($href) {
                $feeds[] = $href;
            }
        }

        return $feeds;
    }
}
