<?php
class JsfiddleTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://jsfiddle.net/zhm5rjnz/');

        $this->assertString($info->title, 'Edit fiddle - JSFiddle');
        $this->assertString($info->type, 'rich');
        $this->assertString($info->providerName, 'jsfiddle');
    }
}
