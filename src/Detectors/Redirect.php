<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Redirect extends Detector
{
    public function detect(): ?string
    {
        $document = $this->extractor->getDocument();
        $value = $document->select('.//meta', ['http-equiv' => 'refresh'])->str();

        return $value ? self::extract($value) : null;
    }

    private static function extract(string $value): ?string
    {
        if (preg_match('/url=(.+)$/i', $value, $match)) {
            return $match[1] ?? null;
        }

        return null;
    }
}
