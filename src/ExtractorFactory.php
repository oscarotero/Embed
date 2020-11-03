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
        'instagram.com' => Adapters\Instagram\Extractor::class,
        'imageshack.com' => Adapters\ImageShack\Extractor::class,
        'imagizer.imageshack.com' => Adapters\ImageShack\Extractor::class,
        'youtube.com' => Adapters\Youtube\Extractor::class,
        'twitch.tv' => Adapters\Twitch\Extractor::class,
    ];
    private array $customDetectors = [];
    private array $settings;

    public function __construct(?array $settings = [])
    {
        $this->settings = $settings ?? [];
    }

    public function createExtractor(UriInterface $uri, RequestInterface $request, ResponseInterface $response, Crawler $crawler): Extractor
    {
        $host = $uri->getHost();
        $host = str_replace('www.', '', $host);

        $class = $this->adapters[$host] ?? $this->default;

        /** @var Extractor $extractor */
        $extractor = new $class($uri, $request, $response, $crawler);
        $extractor->setSettings($this->settings);

        foreach ($this->customDetectors as $name => $detector) {
            $extractor->addDetector($name, new $detector($extractor));
        }

        return $extractor;
    }

    public function addAdapter(string $pattern, string $class): void
    {
        $this->adapters[$pattern] = $class;
    }

    public function addDetector(string $name, string $class): void
    {
        $this->customDetectors[$name] = $class;
    }

    public function removeAdapter(string $pattern): void
    {
        unset($this->adapters[$pattern]);
    }

    public function setDefault(string $class): void
    {
        $this->default = $class;
    }

    public function setSettings(array $settings): void
    {
        $this->settings = $settings;
    }
}
