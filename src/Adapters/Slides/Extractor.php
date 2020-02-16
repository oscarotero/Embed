<?php
declare(strict_types = 1);

namespace Embed\Adapters\Slides;

use Embed\Extractor as Base;
use Embed\Http\Crawler;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Extractor extends Base
{
    public function __construct(RequestInterface $request, ResponseInterface $response, Crawler $crawler)
    {
        parent::__construct($request, $response, $crawler);

        $this->code = new Detectors\Code($this);
    }
}
