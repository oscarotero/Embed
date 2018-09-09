<?php

namespace Embed\Tests;

class BambuserTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://bambuser.com/v/7088053',
            [
                'title' => 'EASY LISTENING | WRNU | Bambuser',
                'description' => 'Broadcast by WRNU on Bambuser.com',
                'type' => 'video',
                'code' => '<object width="320" height="267" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0"><param name="movie" value="https://static.bambuser.com/r/player.swf?vid=7088053&amp;context=fb"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><embed src="https://static.bambuser.com/r/player.swf?vid=7088053&amp;context=fb" width="320" height="267" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object>',
                'width' => 320,
                'height' => 267,
                'providerName' => 'Bambuser',
            ]
        );
    }
}
