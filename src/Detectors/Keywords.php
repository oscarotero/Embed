<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Keywords extends Detector
{
    public function detect(): ?array
    {
        $tags = [];
        $document = $this->extractor->getDocument();

        $metas = [
            'keywords',
            'og:video:tag',
            'og:article:tag',
            'og:video:tag',
            'og:book:tag',
        ];

        foreach ($metas as $type) {
            $value = $document->getMeta($type);

            if ($value) {
                $tags = array_merge($tags, self::toArray($value));
            }
        }

        $tags = array_map('mb_strtolower', $tags);
        $tags = array_unique($tags);
        $tags = array_filter($tags);
        $tags = array_values($tags);

        return $tags;
    }

    private static function toArray(string $keywords): array
    {
        $tags = explode(',', $keywords);
        $tags = array_map('trim', $tags);
        $tags = array_filter(
            $tags,
            fn ($value) => !empty($value) && substr($value, -3) !== '...'
        );

        return $tags;
    }
}
