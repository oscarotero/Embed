<?php
declare(strict_types = 1);

namespace Embed\Adapters\Archive;

use Embed\ApiTrait;

class Api
{
    use ApiTrait;

    private function fetchData(): array
    {
        $this->endpoint = (string) $this->extractor->getUri()->withQuery('output=json');

        return $this->fetchJSON($this->endpoint);
    }
}
