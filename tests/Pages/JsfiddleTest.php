<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class JsfiddleTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://jsfiddle.net/zhm5rjnz/',
            [
                'title' => 'Edit fiddle - JSFiddle',
                'providerName' => 'Jsfiddle',
            ]
        );
    }
}
