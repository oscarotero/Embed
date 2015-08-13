<?php
class HowcastTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.howcast.com/videos/512882-How-to-Make-an-Alabama-Slammer-Shots-Recipes');

        $this->assertString($info->title, 'How to Make an Alabama Slammer | Howcast');
        $this->assertString($info->image, 'http://98441.cdx.c.ooyala.com/8zcDVjczr8uRcjUmcmfImbxKI6OP6cFf/promo251669269');
        $this->assertString($info->code, '<script height="422px" width="750px" src="http://player.ooyala.com/iframe.js#ec=8zcDVjczr8uRcjUmcmfImbxKI6OP6cFf&pbid=5d8891bc445c4156a75933fbf4bcfc9a"></script>');
        $this->assertString($info->type, 'rich');
    }
}
