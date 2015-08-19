<?php
class SlidesTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('http://slides.com/alexwalker/responsive-svg/');

        $this->assertString($info->title, 'responsive-svg by Alex Walker');
        $this->assertString($info->type, 'rich');
        $this->assertString($info->code, '<iframe src="http://slides.com/alexwalker/responsive-svg/embed" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:576px;height:420px;"></iframe>');
        $this->assertString($info->width, 576);
        $this->assertString($info->height, 420);
        $this->assertString($info->providerName, 'Slides');
        $this->assertString($info->providerUrl, 'http://slides.com');
    }
}
