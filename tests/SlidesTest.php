<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class SlidesTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://slides.com/alexwalker/responsive-svg/');

        $this->assertEquals($info->title, 'responsive-svg by Alex Walker');
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->code, '<iframe src="http://slides.com/alexwalker/responsive-svg/embed" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:576px;height:420px;"></iframe>');
        $this->assertEquals($info->width, 576);
        $this->assertEquals($info->height, 420);
        $this->assertEquals($info->providerName, 'Slides');
        $this->assertEquals($info->providerUrl, 'http://slides.com');
    }
}
