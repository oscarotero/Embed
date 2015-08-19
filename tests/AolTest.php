<?php
class AolTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('http://on.aol.com/video/whats-next-for-google-in-two-minutes-518288612');

        $this->assertString($info->title, "What's Next for Google in Two Minutes");
        $this->assertString($info->description, "Wherein we smoosh Google's 2014 developer conference keynote from 2.5+ hours down to just under two minutes.");
        $this->assertString($info->type, 'video');

        /*
        Comented because in cli the html returned does not contain the oembed meta
        so the test fails. Need to investigate.

        $this->assertString($info->code, "<iframe width='480' height='401' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen src='http://embed.5min.com/PlayerSeed/?playList=518288612&autoStart=true'></iframe>");
        $this->assertString($info->width, 480);
        $this->assertString($info->height, 401);
        $this->assertString($info->authorName, 'Time.com');
        $this->assertString($info->providerName, 'on.aol.com');
        */
    }
}
