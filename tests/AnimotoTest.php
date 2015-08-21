<?php
class AnimotoTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://animoto.com/play/JzwsBn5FRVxS0qoqcBP5zA',
            [
                'title' => 'Juno Groove',
                'width' => 640,
                'height' => 360,
                'type' => 'video',
                'authorName' => 'Chris Korhonen',
                'providerName' => 'Animoto',
            ]
        );
    }
}
