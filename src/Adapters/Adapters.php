<?php
declare(strict_types = 1);

namespace Embed\Adapters;

use Embed\Extractor;
use Psr\Http\Message\UriInterface;

abstract class Adapters
{
    const DEFAULT = Extractor::class;
    const EXTRACTORS = [
        'slides.com' => Slides\Extractor::class,
        'pinterest.com' => Pinterest\Extractor::class,
        'flickr.com' => Flickr\Extractor::class,
        'snipplr.com' => Snipplr\Extractor::class,
    ];

    public static function getExtractorClass(UriInterface $uri): string
    {
        $host = $uri->getHost();
        $host = str_replace('www.', '', $host);

        return self::EXTRACTORS[$host] ?? self::DEFAULT;
    }
}
