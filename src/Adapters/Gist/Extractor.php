<?php
declare(strict_types = 1);

namespace Embed\Adapters\Gist;

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
        $this->publishedTime = new Detectors\PublishedTime($this);
        $this->code = new Detectors\Code($this);
    }

    public function getApi(): Api
    {
        return $this->api;
    }
}
