<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class BlipTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://blip.tv/nostalgiacritic/nc-the-matrix-7139747');

        $this->assertEquals($info->title, 'NC: The Matrix');
        $this->assertEquals($info->imageWidth, 620);
        $this->assertEquals($info->imageHeight, 274);
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->providerName, 'Blip');
        $this->assertEquals($info->code, '<iframe src="http://blip.tv/play/gbk7g7PkBwI.x?p=1" width="480" height="392" frameborder="0" allowfullscreen></iframe>');
    }
}
