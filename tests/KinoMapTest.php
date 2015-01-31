<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class KinoMapTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.kinomap.com/watch/4cnejm');

        $this->assertEquals($info->title, 'Calm after Blizzard');
        $this->assertEquals($info->description, 'Drive back to Robbie  Circle');
        $this->assertEquals($info->imageWidth, 320);
        $this->assertEquals($info->imageHeight, 240);
        $this->assertEquals($info->type, 'video');
    }
}
