<?php
class BambuserTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://bambuser.com/v/4740575');

        $this->assertString($info->title, "#OccupyWestminster #SaveILF #London #olsx  #ONN");
        $this->assertString($info->description, 'Broadcast by dancole on Bambuser.com');
        $this->assertString($info->type, 'video');
        $this->assertString($info->code, '<object id="bplayer" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="320" height="240"><embed  allowfullscreen="true" allowscriptaccess="always" wmode="transparent" type="application/x-shockwave-flash" name="bplayer" src="http://static.bambuser.com/r/player.swf?context=oembed&amp;vid=4740575" width="320" height="240" /><param name="movie" value="http://static.bambuser.com/r/player.swf?context=oembed&amp;vid=4740575" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="wmode" value="transparent" /></object>');
        $this->assertString($info->width, 320);
        $this->assertString($info->height, 240);
        $this->assertString($info->authorName, 'dancole');
        $this->assertString($info->providerName, 'Bambuser.com');
    }
}
