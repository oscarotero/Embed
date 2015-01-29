<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class YFrogTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://a.yfrog.com/img593/8436/snso.jpg');

        $this->assertEquals($info->title, 'http://a.yfrog.com/img593/8436/snso.jpg');
        $this->assertEquals($info->imageWidth, 4928);
        $this->assertEquals($info->imageHeight, 3264);
        $this->assertEquals($info->type, 'photo');
        $this->assertEquals($info->providerName, 'yFrog');
    }
}
