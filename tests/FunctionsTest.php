<?php
declare(strict_types = 1);

namespace Embed\Tests;

use function Embed\isHttp;
use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function urlsProvider(): array
    {
        return [
            ['https://foo.com', true],
            ['http://foo.com', true],
            ['mailto:foo@example.com', false],
            ['tel:+1234567890', false],
            ['data:foo', false],
            ['./foo', true],
            ['/foo', true],
            ['../foo', true],
            ['foo.com', true],
            ['//foo.com', true],
        ];
    }

    /**
     * @dataProvider urlsProvider
     */
    public function testIsHttp(string $url, bool $expected)
    {
        $result = isHttp($url);
        $this->assertSame($expected, $result);
    }
}
