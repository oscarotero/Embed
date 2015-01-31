<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class KewegoTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.kewego.es/video/iLyROoaf2vuS.html');

        $this->assertEquals($info->title, 'Una gaviota traviesa roba una cámara mientras graba');
        $this->assertEquals($info->description, 'Divertido vídeo en el que una gaviota se hace con una cámara mientras está grabando.');
        $this->assertEquals($info->imageWidth, 400);
        $this->assertEquals($info->imageHeight, 300);
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->authorName, 'zoomines');
        $this->assertEquals($info->providerName, 'kewego');
    }
}
