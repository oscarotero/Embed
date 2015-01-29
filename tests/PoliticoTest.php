<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class PoliticoTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.politico.com/story/2013/12/presidents-barack-obama-george-w-bush-second-term-101314.html');

        $this->assertEquals($info->title, 'Echoes of George W. Bush blues in Barack Obama\'s 2nd term');
        $this->assertEquals($info->type, 'link');
        $this->assertEquals($info->image, 'http://images.politico.com/global/2013/12/18/131218_george_w_bush_barack_obama_ap_605.jpg');
        $this->assertEquals($info->imageWidth, 605);
        $this->assertEquals($info->imageHeight, 328);
        $this->assertEquals($info->providerName, 'POLITICO');
        $this->assertEquals($info->providerUrl, 'http://politico.com');
        $this->assertEquals($info->providerIcon, 'http://www.politico.com/favicon.ico');
    }
}
