<?php
class AnimotoTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\Embed::create('https://animoto.com/play/JzwsBn5FRVxS0qoqcBP5zA');

        $this->assertString($info->title, 'Juno Groove');
        $this->assertString($info->width, 640);
        $this->assertString($info->height, 360);
        $this->assertString($info->type, 'video');
        $this->assertString($info->authorName, 'Chris Korhonen');
        $this->assertString($info->providerName, 'Animoto');
    }
}
