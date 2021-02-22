<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Keywords extends Detector
{
    public function detect(): array
    {
        $tags = [];
        $metas = $this->extractor->getMetas();
        $ld = $this->extractor->getLinkedData();

        $types = [
            'keywords',
            'og:video:tag',
            'og:article:tag',
            'og:video:tag',
            'og:book:tag',
            'lp.article:section',
            'dcterms.subject',
        ];

        foreach ($types as $type) {
            $value = $metas->strAll($type);

            if ($value) {
                $tags = array_merge($tags, self::toArray($value));
            }
        }

        $value = $ld->strAll('keywords');

        if ($value) {
            $tags = array_merge($tags, self::toArray($value));
        }

        $tags = array_map('mb_strtolower', $tags);
        $tags = array_unique($tags);
        $tags = array_filter($tags);
        $tags = array_values($tags);

        return $tags;
    }

    private static function toArray(array $keywords): array
    {
        $all = [];

        foreach ($keywords as $keyword) {
            $tags = explode(',', $keyword);
            $tags = array_map('trim', $tags);
            $tags = array_filter(
                $tags,
                fn ($value) => !empty($value) && substr($value, -3) !== '...'
            );

            $all = array_merge($all, $tags);
        }

        return $all;
    }
}
