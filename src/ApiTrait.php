<?php
declare(strict_types = 1);

namespace Embed;

use DateTime;
use Psr\Http\Message\UriInterface;
use Throwable;

trait ApiTrait
{
    protected Extractor $extractor;
    private array $data;

    public function __construct(Extractor $extractor)
    {
        $this->extractor = $extractor;
    }

    public function all(): array
    {
        if (!isset($this->data)) {
            $this->data = $this->fetchData();
        }

        return $this->data;
    }

    public function get(string ...$keys)
    {
        $data = $this->all();

        foreach ($keys as $key) {
            if (!isset($data[$key])) {
                return null;
            }

            $data = $data[$key];
        }

        return $data;
    }

    public function str(string ...$keys): ?string
    {
        $value = $this->get(...$keys);

        if (is_array($value)) {
            $value = array_shift($value);
        }

        return $value ? clean((string) $value) : null;
    }

    public function strAll(string ...$keys): array
    {
        $all = (array) $this->get(...$keys);
        return array_filter(array_map(fn ($value) => clean($value), $all));
    }

    public function html(string ...$keys): ?string
    {
        $value = $this->get(...$keys);

        if (is_array($value)) {
            $value = array_shift($value);
        }

        return $value ? clean((string) $value, true) : null;
    }

    public function int(string ...$keys): ?int
    {
        $value = $this->get(...$keys);

        if (is_array($value)) {
            $value = array_shift($value);
        }

        return is_numeric($value) ? (int) $value : null;
    }

    public function url(string ...$keys): ?UriInterface
    {
        $url = $this->str(...$keys);

        try {
            return $url ? $this->extractor->resolveUri($url) : null;
        } catch (Throwable $error) {
            return null;
        }
    }

    public function time(string ...$keys): ?DateTime
    {
        $time = $this->str(...$keys);
        $datetime = $time ? date_create($time) : null;

        if (!$datetime && $time && ctype_digit($time)) {
            $datetime = date_create_from_format('U', $time);
        }

        return ($datetime && $datetime->getTimestamp() > 0) ? $datetime : null;
    }

    abstract protected function fetchData(): array;
}
