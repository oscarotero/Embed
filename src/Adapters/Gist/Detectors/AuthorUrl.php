<?php
declare(strict_types = 1);

namespace Embed\Adapters\Gist\Detectors;

use Embed\Detectors\AuthorUrl as Detector;
use Psr\Http\Message\UriInterface;

class AuthorUrl extends Detector
{
    public function detect(): ?UriInterface
    {
        $api = $this->extractor->getApi();
        $owner = $api->str('owner');

        if ($owner) {
            return $this->extractor->getCrawler()->createUri("https://github.com/{$owner}");
        }

        return parent::detect();
    }
}
