<?php
declare(strict_types = 1);

namespace Embed\Adapters\ImageShack;

use Embed\Extractor as Base;
use Embed\Http\Crawler;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

class Extractor extends Base
{
    private Api $api;

    public function __construct(UriInterface $uri, RequestInterface $request, ResponseInterface $response, Crawler $crawler)
    {
        parent::__construct($uri, $request, $response, $crawler);

        $this->api = new Api($this);

        $this->authorName = new Detectors\AuthorName($this);
        $this->authorUrl = new Detectors\AuthorUrl($this);
        $this->description = new Detectors\Description($this);
        $this->image = new Detectors\Image($this);
        $this->providerName = new Detectors\ProviderName($this);
        $this->publishedTime = new Detectors\PublishedTime($this);
        $this->title = new Detectors\Title($this);
    }

    public function getApi(): Api
    {
        return $this->api;
    }
}
