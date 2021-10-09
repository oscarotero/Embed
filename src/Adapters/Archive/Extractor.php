<?php
declare(strict_types = 1);

namespace Embed\Adapters\Archive;

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
            'title' => new Detectors\Title($this),
            'description' => new Detectors\Description($this),
            'code' => new Detectors\Code($this),
            'authorName' => new Detectors\AuthorName($this),
            'providerName' => new Detectors\ProviderName($this),
            'publishedTime' => new Detectors\PublishedTime($this),
        ];
    }
}
