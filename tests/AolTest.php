<?php

class AolTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://on.aol.com/video/whats-next-for-google-in-two-minutes-518288612',
            [
                'title' => "What's Next for Google in Two Minutes",
                'description' => "Wherein we smoosh Google's 2014 developer conference keynote from 2.5+ hours down to just under two minutes.",
                'type' => 'video',
                'code' => '<iframe src="https://embed.5min.com/playerseed/?playList=518288612" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:400;height:255;"></iframe>',
                'width' => 400,
                'height' => 255,
                'providerName' => 'aol.on',
            ]
        );
    }
}
