<?php
declare(strict_types = 1);

namespace Embed\Adapters\ImageShack;

use Embed\Extractor as Base;

class Extractor extends Base
{
    private Api $api;

    public function getApi(): Api
    {
        return $this->api;
    }

    public function createCustomDetectors(): array
    {
        $this->api = new Api($this);

        return [
            'authorName' => new Detectors\AuthorName($this),
            'authorUrl' => new Detectors\AuthorUrl($this),
            'description' => new Detectors\Description($this),
            'image' => new Detectors\Image($this),
            'providerName' => new Detectors\ProviderName($this),
            'publishedTime' => new Detectors\PublishedTime($this),
            'title' => new Detectors\Title($this),
        ];
    }
}
