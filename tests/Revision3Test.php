<?php
class Revision3Test extends TestCaseBase
{
    public function testOne()
    {
        /*
        oembed provider in revision3 does not work and makes the test fail

        $info = Embed\Embed::create('http://revision3.com/sourcefednerd/sourcefed-plays-hedbanz/');

        $this->assertString($info->title, 'SourceFed Plays - Hedbanz!');
        $this->assertString($info->description, 'Will, Steve, Reina, and Trisha don\'t know who they are anymore.');
        $this->assertString($info->imageWidth, 1280);
        $this->assertString($info->imageHeight, 720);
        $this->assertString($info->code, '<iframe src="http://embed.revision3.com/player/embed?videoId=60436&external=true&width=555&height=337" frameborder="0" allowFullScreen mozAllowFullscreen webkitAllowFullScreen oallowfullscreen msallowfullscreen></iframe>');
        $this->assertString($info->type, 'video');
        $this->assertString($info->authorName, 'SourceFed Nerd');
        $this->assertString($info->authorUrl, 'http://revision3.com/sourcefednerd/');
        $this->assertString($info->providerName, 'Revision3');
        */
    }
}
