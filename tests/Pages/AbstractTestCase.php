<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

use Embed\Embed;
use PHPUnit\Framework\TestCase;

abstract class AbstractTestCase extends TestCase
{
    private static Embed $embed;

    protected function assertEmbed(string $url, array $expected)
    {
        if (!isset(self::$embed)) {
            self::$embed = new Embed();
            self::$embed->getCrawler()->addDefaultHeaders([
                'Accept-Language' => 'en-US,en;q=0.5',
                'Cache-Control' => 'max-age=0,no-cache',
            ]);
        }

        $extractor = self::$embed->get($url);

        foreach ($expected as $name => $value) {
            switch ($name) {
                case 'oembed':
                    if ($value === true) {
                        $this->assertNotEmpty($extractor->getOEmbed()->all());
                    } else {
                        $this->assertEmpty($extractor->getOEmbed()->all());
                    }
                break;
                case 'api':
                    if ($value === true) {
                        $this->assertNotEmpty($extractor->getApi()->all());
                    } else {
                        $this->assertEmpty($extractor->getApi()->all());
                    }
                break;
                default:
                    if ($value === true) {
                        $this->assertNotEmpty($extractor->$name);
                    } elseif ($name === 'code') {
                        $this->assertSame(self::normalize($value), self::normalize((string) $extractor->$name));
                    } else {
                        $this->assertEquals($value, $extractor->$name);
                    }
            }
        }
    }

    private static function normalize(?string $string): ?string
    {
        return is_string($string) ? trim(preg_replace('/\s+/u', ' ', $string)) : null;
    }
}
