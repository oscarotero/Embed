<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class ProviderName extends Detector
{
    private static array $suffixes;

    public function detect(): string
    {
        $oembed = $this->extractor->getOEmbed();

        return $oembed->get('provider_name')
            ?: ucfirst($this->fallback());
    }

    private function fallback(): string
    {
        $host = $this->extractor->url->getHost();

        $host = array_reverse(explode('.', $host));

        switch (count($host)) {
            case 1:
                return $host[0];
            case 2:
                return $host[1];
            default:
                $tld = $host[1].'.'.$host[0];
                $suffixes = self::getSuffixes();

                if (in_array($tld, $suffixes, true)) {
                    return $host[2];
                }

                return $host[1];
        }
    }

    private static function getSuffixes(): array
    {
        if (!isset(self::$suffixes)) {
            self::$suffixes = (@include __DIR__.'/../resources/public_suffix_list.php') ?: [];
        }

        return self::$suffixes;
    }
}
