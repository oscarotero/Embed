<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class AuthorUrl extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();

        return $oembed->url('author_url')
            ?: $this->detectFromTwitter();
    }

    private function detectFromTwitter(): ?string
    {
        $user = $this->extractor->getDocument()->meta('twitter:creator');

        return $user ? sprintf('https://twitter.com/%s', ltrim($user, '@')) : null;
    }
}
