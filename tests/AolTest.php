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
            ]
        );

        /*
        Comented because in cli the html returned does not contain the oembed meta
        so the test fails. Need to investigate.

        		'code' => "<iframe width='480' height='401' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen src='http://embed.5min.com/PlayerSeed/?playList=518288612&autoStart=true'></iframe>",
        		'width' => 480,
        		'height' => 401,
        		'authorName' => 'Time.com',
        		'providerName' => 'on.aol.com',
        */
    }
}
