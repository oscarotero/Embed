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
        }

        $extractor = self::$embed->get($url);

        foreach ($expected as $name => $value) {
            switch ($name) {
                case 'code':
                    if ($value === true) {
                        $this->assertNotEmpty($extractor->$name);
                    } else {
                        $this->assertSame(self::normalize($value), self::normalize((string) $extractor->$name));
                    }
                break;
                default:
                    $this->assertEquals($value, $extractor->$name);
            }
        }
    }

    private static function normalize(?string $string): ?string
    {
        return is_string($string) ? trim(preg_replace('/\s+/u', ' ', $string)) : null;
    }
}
