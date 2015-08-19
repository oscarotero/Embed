<?php
class YFrogTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('http://a.yfrog.com/img593/8436/snso.jpg');

        $this->assertString($info->title, 'http://a.yfrog.com/img593/8436/snso.jpg');
        $this->assertString($info->imageWidth, 4928);
        $this->assertString($info->imageHeight, 3264);
        $this->assertString($info->type, 'photo');
        $this->assertString($info->providerName, 'yFrog');
    }
}
