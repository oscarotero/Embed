<?php
declare(strict_types = 1);

namespace Embed\Detectors;

use Psr\Http\Message\UriInterface;

class AuthorUrl extends Detector
{
    public function detect(): ?UriInterface
    {
        $oembed = $this->extractor->getOEmbed();

        return $oembed->url('author_url')
            ?: $this->detectFromTwitter();
    }

    private function detectFromTwitter(): ?UriINterface
    {
        $user = $this->extractor->getDocument()->meta('twitter:creator');

        return $user
            ? $this->extractor->getCrawler()->createUri(sprintf('https://twitter.com/%s', ltrim($user, '@')))
            : null;
    }
}
