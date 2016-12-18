<?php

namespace Embed\Tests;

use Embed\Bag;

class BagTest extends AbstractTestCase
{
    public function testOne()
    {
        $bag = new Bag([
            'html' => [
                'boolean' => false,
                'pattern' => '*.staticflickr.com/*',
            ],
            'code' => '<h1> Hello &amp; world</h1> ',
            'utf' => '1879&#160;1955',
            'array' => [
                'subarray' => [
                    'one',
                    'two',
                ]
            ]
        ]);

        $this->assertSame(false, $bag->get('html[boolean]'));
        $this->assertSame('*.staticflickr.com/*', $bag->get('html[pattern]'));
        $this->assertSame('Hello & world', $bag->get('code'));
        $this->assertSame('<h1> Hello &amp; world</h1>', $bag->get('code', true));
        $this->assertSame(['one', 'two'], $bag->get('array[subarray]'));
        $this->assertSame('1879 1955', $bag->get('utf'));
    }
}
