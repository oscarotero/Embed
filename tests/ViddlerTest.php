<?php
class ViddlerTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.viddler.com/v/bdce8c7');

        $this->assertEquals($info->title, 'Viddler Platform Overview');
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->code, '<iframe width="620" height="349" src="http://viddler.com/embed/bdce8c7" frameborder="0" allowfullscreen></iframe>');
        $this->assertEquals($info->providerName, 'Viddler');
        $this->assertEquals($info->providerUrl, 'http://viddler.com/');
    }
}
