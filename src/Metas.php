<?php
declare(strict_types = 1);

namespace Embed;

class Metas
{
    use ApiTrait;

    protected function fetchData(): array
    {
        $data = [];
        $document = $this->extractor->getDocument();

        foreach ($document->select('.//meta')->nodes() as $node) {
            $type = $node->getAttribute('name') ?: $node->getAttribute('property') ?: $node->getAttribute('itemprop');
            $value = $node->getAttribute('content');

            if (!empty($value) && !empty($type)) {
                $type = strtolower($type);
                $data[$type] ??= [];
                $data[$type][] = $value;
            }
        }

        return $data;
    }

    public function get(string ...$keys)
    {
        $data = $this->all();

        foreach ($keys as $key) {
            $values = $data[$key] ?? null;

            if ($values) {
                return $values;
            }
        }

        return null;
    }
}
