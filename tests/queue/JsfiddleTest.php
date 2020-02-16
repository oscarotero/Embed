<?php

namespace Embed\Tests;

class JsfiddleTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://jsfiddle.net/zhm5rjnz/',
            [
                'title' => 'Edit fiddle - JSFiddle',
                'type' => 'rich',
                'providerName' => 'jsfiddle',
            ]
        );
    }
}
