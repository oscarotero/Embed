<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class Revision3Test extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://revision3.com/sourcefednerd/sourcefed-plays-hedbanz/');

        $this->assertEquals($info->title, 'SourceFed Plays - Hedbanz!');
        $this->assertEquals($info->description, 'Will, Steve, Reina, and Trisha don\'t know who they are anymore.');
        $this->assertEquals($info->imageWidth, 1280);
        $this->assertEquals($info->imageHeight, 720);
        $this->assertEquals($info->code, '<iframe src="http://embed.revision3.com/player/embed?videoId=60436&external=true&width=555&height=337" frameborder="0" allowFullScreen mozAllowFullscreen webkitAllowFullScreen oallowfullscreen msallowfullscreen></iframe>');
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->authorName, 'SourceFed Nerd');
        $this->assertEquals($info->authorUrl, 'http://revision3.com/sourcefednerd/');
        $this->assertEquals($info->providerName, 'Revision3');
    }
}
