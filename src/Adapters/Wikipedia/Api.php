<?php
declare(strict_types = 1);

namespace Embed\Adapters\Wikipedia;

use function Embed\getDirectory;
use Embed\HttpApiTrait;
use function Embed\matchPath;

class Api
{
    use HttpApiTrait;

    protected function fetchData(): array
    {
        $uri = $this->extractor->getUri();

        if (!matchPath('/wiki/*', $uri->getPath())) {
            return [];
        }

        $titles = getDirectory($uri->getPath(), 1);

        $this->endpoint = $uri
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
