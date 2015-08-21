<?php
class BandcampTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://jeanjean.bandcamp.com/track/coquin-l-l-phant',
            [
                'title' => "Coquin L'éléphant, by Jean Jean",
                'description' => 'from the album Symmetry',
                'type' => 'video',
                'code' => '<iframe src="https://bandcamp.com/EmbeddedPlayer/v=2/track=2592086951/size=large/linkcol=0084B4/notracklist=true/twittercard=true/" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:350;height:467;"></iframe>',
                'width' => 400,
                'height' => 120,
                'providerName' => 'Jean Jean',
            ]
        );
    }
}
