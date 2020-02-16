<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class AuthorUrl extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();

        return $oembed->get('author_url');
    }
}
