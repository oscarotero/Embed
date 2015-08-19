<?php
class LineTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('https://line.do/embed/8oq/vertical');

        $this->assertString($info->title, 'PHP Evolution');
        $this->assertString($info->type, 'rich');
        $this->assertString($info->code, '<iframe src="https://line.do/embed/8oq/vertical" frameborder="0" allowTransparency="true" style="border:1px solid #e7e7e7;width:640px;height:640px;"></iframe>');
        $this->assertString($info->width, 640);
        $this->assertString($info->height, 640);
        $this->assertString($info->providerName, 'Line.do');
        $this->assertString($info->providerUrl, 'https://line.do');
    }
}
