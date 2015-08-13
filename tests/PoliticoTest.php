<?php
class PoliticoTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.politico.com/story/2013/12/presidents-barack-obama-george-w-bush-second-term-101314.html');

        $this->assertString($info->title, 'Echoes of George W. Bush blues in Barack Obama\'s 2nd term');
        $this->assertString($info->type, 'link');
        $this->assertString($info->image, 'http://images.politico.com/global/2013/12/18/131218_george_w_bush_barack_obama_ap_605.jpg');
        $this->assertString($info->imageWidth, 605);
        $this->assertString($info->imageHeight, 328);
        $this->assertString($info->providerName, 'POLITICO');
        $this->assertString($info->providerUrl, 'http://politico.com');
        $this->assertString($info->providerIcon, 'http://www.politico.com/favicon.ico');
    }
}
