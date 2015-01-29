<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class JsfiddleTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://jsfiddle.net/zhm5rjnz/');

        $this->assertEquals($info->title, 'Edit fiddle - JSFiddle');
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->providerName, 'jsfiddle');
    }
}
