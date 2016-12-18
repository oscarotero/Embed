<?php

namespace Embed\Tests;

class BambuserTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://bambuser.com/v/4740575',
            [
                'title' => '#OccupyWestminster #SaveILF #London #olsx  #ONN',
                'description' => 'Broadcast by dancole on Bambuser.com',
                'type' => 'video',
                'code' => '<object id="bplayer" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="320" height="240"><embed  allowfullscreen="true" allowscriptaccess="always" wmode="transparent" type="application/x-shockwave-flash" name="bplayer" src="https://static.bambuser.com/r/player.swf?context=oembed&amp;vid=4740575" width="320" height="240" /><param name="movie" value="https://static.bambuser.com/r/player.swf?context=oembed&amp;vid=4740575" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="wmode" value="transparent" /></object>',
                'width' => 320,
                'height' => 240,
                'authorName' => 'dancole',
                'providerName' => 'Bambuser.com',
            ]
        );
    }
}
