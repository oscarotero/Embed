<?php
declare(strict_types = 1);

namespace Embed\Adapters\Twitter\Detectors;

use Embed\Detectors\AuthorUrl as Detector;
use Psr\Http\Message\UriInterface;

class AuthorUrl extends Detector
{
    public function detect(): ?UriInterface
    {
        $api = $this->extractor->getApi();
        $username = $api->str('includes', 'users', '0', 'username');

        if ($username) {
            return $this->extractor->getCrawler()->createUri("https://twitter.com/{$username}");
        }

        return parent::detect();
    }
}
