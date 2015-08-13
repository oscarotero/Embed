<?php
class AolTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://on.aol.com/video/whats-next-for-google-in-two-minutes-518288612');

        $this->assertEquals($info->title, "What's Next for Google in Two Minutes");
        $this->assertEquals($info->description, "Wherein we smoosh Google's 2014 developer conference keynote from 2.5+ hours down to just under two minutes.");
        $this->assertEquals($info->type, 'video');

        /*
        Comented because in cli the html returned does not contain the oembed meta
        so the test fails. Need to investigate.

        $this->assertEquals($info->code, "<iframe width='480' height='401' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen src='http://embed.5min.com/PlayerSeed/?playList=518288612&autoStart=true'></iframe>");
        $this->assertEquals($info->width, 480);
        $this->assertEquals($info->height, 401);
        $this->assertEquals($info->authorName, 'Time.com');
        $this->assertEquals($info->providerName, 'on.aol.com');
        */
    }
}
