<?php
declare(strict_types = 1);

namespace Embed\Adapters\ImageShack;

use function Embed\getDirectory;
use Embed\HttpApiTrait;
use function Embed\matchPath;

class Api
{
    use HttpApiTrait;

    protected function fetchData(): array
    {
        $uri = $this->extractor->getUri();

        if (!matchPath('/i/*', $uri->getPath())) {
            $uri = $this->extractor->getRequest()->getUri();

            if (!matchPath('/i/*', $uri->getPath())) {
                return [];
            }
        }

        $id = getDirectory($uri->getPath(), 1);

        if (empty($id)) {
            return [];
        }

        $this->endpoint = $this->extractor->getCrawler()->createUri("https://api.imageshack.com/v2/images/{$id}");
        $data = $this->fetchJSON($this->endpoint);
        return $data['result'] ?? [];
    }
}
