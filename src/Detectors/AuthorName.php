<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class AuthorName extends Detector
{
    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();

        return $oembed->str('author_name');
    }
}
