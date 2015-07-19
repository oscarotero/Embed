<?php
class AnimotoTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('https://animoto.com/play/JzwsBn5FRVxS0qoqcBP5zA');

        $this->assertEquals($info->title, 'Juno Groove');
        $this->assertEquals($info->width, 640);
        $this->assertEquals($info->height, 360);
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->authorName, 'Chris Korhonen');
        $this->assertEquals($info->providerName, 'Animoto');
    }
}
