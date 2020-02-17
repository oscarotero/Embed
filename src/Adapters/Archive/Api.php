<?php
declare(strict_types = 1);

namespace Embed\Adapters\Archive;

use Embed\ApiTrait;

class Api
{
    use ApiTrait;

    private function fetchData(): array
    {
        $endpoint = $this->extractor->getUri()->withQuery('output=json');

        return $this->fetchJSON((string) $endpoint);
    }
}
