<?php
declare(strict_types = 1);

namespace Embed\Adapters;

abstract class Adapters
{
    const EXTRACTORS = [
        'slides.com' => Slides\Extractor::class,
    ];

    public static function getExtractorClass(string $url): ?string
    {
        $host = parse_url($url, PHP_URL_HOST);

        return self::EXTRACTORS[$host] ?? null;
    }
}
