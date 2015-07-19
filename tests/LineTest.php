<?php
class LineTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('https://line.do/embed/8oq/vertical');

        $this->assertEquals($info->title, 'PHP Evolution');
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->code, '<iframe src="https://line.do/embed/8oq/vertical" frameborder="0" allowTransparency="true" style="border:1px solid #e7e7e7;width:640px;height:640px;"></iframe>');
        $this->assertEquals($info->width, 640);
        $this->assertEquals($info->height, 640);
        $this->assertEquals($info->providerName, 'Line.do');
        $this->assertEquals($info->providerUrl, 'https://line.do');
    }
}
