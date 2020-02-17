<?php
declare(strict_types = 1);

namespace Embed;

use Embed\Http\Crawler;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

class ExtractorFactory
{
    private string $default = Extractor::class;
    private array $adapters = [
        'slides.com' => Adapters\Slides\Extractor::class,
        'pinterest.com' => Adapters\Pinterest\Extractor::class,
        'flickr.com' => Adapters\Flickr\Extractor::class,
        'snipplr.com' => Adapters\Snipplr\Extractor::class,
        'play.cadenaser.com' => Adapters\CadenaSer\Extractor::class,
        'ideone.com' => Adapters\Ideone\Extractor::class,
        'github.com' => Adapters\Github\Extractor::class,
        'gist.github.com' => Adapters\Gist\Extractor::class,
        'en.wikipedia.org' => Adapters\Wikipedia\Extractor::class,
        'es.wikipedia.org' => Adapters\Wikipedia\Extractor::class,
        'gl.wikipedia.org' => Adapters\Wikipedia\Extractor::class,
        'archive.org' => Adapters\Archive\Extractor::class,
        'sassmeister.com' => Adapters\Sassmeister\Extractor::class,
        'facebook.com' => Adapters\Facebook\Extractor::class,
        'imageshack.com' => Adapters\ImageShack\Extractor::class,
        'imagizer.imageshack.com' => Adapters\ImageShack\Extractor::class,
    ];

    public function createExtractor(UriInterface $uri, RequestInterface $request, ResponseInterface $response, Crawler $crawler): Extractor
    {
        $host = $uri->getHost();
        $host = str_replace('www.', '', $host);

        $class = $this->adapters[$host] ?? $this->default;

        return new $class($uri, $request, $response, $crawler);
    }

    public function addAdapter(string $pattern, string $class): void
    {
        $this->adapters[$pattern] = $class;
    }

    public function removeAdapter(string $pattern): void
    {
        unset($this->adapters[$pattern]);
    }
}
