<?php
class JsfiddleTest extends TestCaseBase
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
