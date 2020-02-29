<?php
declare(strict_types = 1);

namespace Embed\Adapters\ImageShack\Detectors;

use Embed\Detectors\AuthorUrl as Detector;
use Psr\Http\Message\UriInterface;

class AuthorUrl extends Detector
{
    public function detect(): ?UriInterface
    {
        $api = $this->extractor->getApi();
        $owner = $api->str('owner', 'username');

        if ($owner) {
            return $this->extractor->getCrawler()->createUri("https://imageshack.com/{$owner}");
        }

        return parent::detect();
    }
}
