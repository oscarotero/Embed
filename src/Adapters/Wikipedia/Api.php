<?php
declare(strict_types = 1);

namespace Embed\Adapters\Wikipedia;

use Embed\ApiTrait;
use function Embed\getDirectory;
use function Embed\match;

class Api
{
    use ApiTrait;

    private function fetchData(): array
    {
        $uri = $this->extractor->getUri();

        if (!match('/wiki/*', $uri->getPath())) {
            return [];
        }

        $titles = getDirectory($uri->getPath(), 1);

        $this->endpoint = (string) $uri
            ->withPath('/w/api.php')
            ->withQuery(http_build_query([
                'action' => 'query',
                'format' => 'json',
                'continue' => '',
                'titles' => $titles,
                'prop' => 'extracts',
                'exchars' => 1000,
            ]));

        $data = $this->fetchJSON($this->endpoint);
        $pages = $data['query']['pages'] ?? null;

        return $pages ? current($pages) : null;
    }
}
