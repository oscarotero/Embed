<?php
class BandcampTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://jeanjean.bandcamp.com/track/coquin-l-l-phant');

        $this->assertEquals($info->title, "Coquin L'éléphant, by Jean Jean");
        $this->assertEquals($info->description, 'from the album Symmetry');
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->code, '<iframe src="https://bandcamp.com/EmbeddedPlayer/v=2/track=2592086951/size=large/linkcol=0084B4/notracklist=true/twittercard=true/" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:350;height:467;"></iframe>');
        $this->assertEquals($info->width, 400);
        $this->assertEquals($info->height, 120);
        $this->assertEquals($info->providerName, 'Jean Jean');
    }
}
