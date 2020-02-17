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
        'play.cadenaser.com' => CadenaSer\Extractor::class,
        'ideone.com' => Ideone\Extractor::class,
        'github.com' => Github\Extractor::class,
        'gist.github.com' => Gist\Extractor::class,
        'en.wikipedia.org' => Wikipedia\Extractor::class,
        'es.wikipedia.org' => Wikipedia\Extractor::class,
        'gl.wikipedia.org' => Wikipedia\Extractor::class,
        'archive.org' => Archive\Extractor::class,
        'sassmeister.com' => Sassmeister\Extractor::class,
        'facebook.com' => Facebook\Extractor::class,
        'imageshack.com' => ImageShack\Extractor::class,
        'imagizer.imageshack.com' => ImageShack\Extractor::class,
    ];

    public static function getExtractorClass(UriInterface $uri): string
    {
        $host = $uri->getHost();
        $host = str_replace('www.', '', $host);

        return self::EXTRACTORS[$host] ?? self::DEFAULT;
    }
}
