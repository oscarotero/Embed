<?php
class BandcampTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('http://jeanjean.bandcamp.com/track/coquin-l-l-phant');

        $this->assertString($info->title, "Coquin L'éléphant, by Jean Jean");
        $this->assertString($info->description, 'from the album Symmetry');
        $this->assertString($info->type, 'video');
        $this->assertString($info->code, '<iframe src="https://bandcamp.com/EmbeddedPlayer/v=2/track=2592086951/size=large/linkcol=0084B4/notracklist=true/twittercard=true/" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:350;height:467;"></iframe>');
        $this->assertString($info->width, 400);
        $this->assertString($info->height, 120);
        $this->assertString($info->providerName, 'Jean Jean');
    }
}
