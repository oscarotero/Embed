<?php
declare(strict_types = 1);

namespace Embed\Detectors;

use Exception;

class LinkedData extends Detector
{
    public function detect(): ?array
    {
        $document = $this->extractor->getDocument();
        $content = $document->select('.//script', ['type' => 'application/ld+json'])->str();

        if (empty($content)) {
            return null;
        }

        try {
            return json_decode($content, true) ?: null;
        } catch (Exception $exception) {
            return null;
        }
    }
}
