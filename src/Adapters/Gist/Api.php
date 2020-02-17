<?php
declare(strict_types = 1);

namespace Embed\Adapters\Gist;

use Embed\ApiTrait;

class Api
{
    use ApiTrait;

    protected function fetchData(): array
    {
        $uri = $this->extractor->getUri();
        $endpoint = $uri->withPath($uri->getPath().'.json');

        return $this->fetchJSON((string) $endpoint);
    }
}
