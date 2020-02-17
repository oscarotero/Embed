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
            ['name' => 'keywords'],
            ['property' => 'og:video:tag'],
            ['property' => 'og:article:tag'],
            ['property' => 'og:video:tag'],
            ['property' => 'og:book:tag'],
        ];

        foreach ($metas as $attr) {
            $value = $document->select('.//meta', $attr)->strAll('content');

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
