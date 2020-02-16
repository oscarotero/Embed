<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class BandcampTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://jeanjean.bandcamp.com/track/coquin-l-l-phant',
            [
                'title' => "Coquin L'éléphant, by Jean Jean",
                'description' => 'from the album Symmetry',
                'code' => '<iframe src="https://bandcamp.com/EmbeddedPlayer/v=2/track=2592086951/size=large/tracklist=false/artwork=small/" frameborder="0" width="350" height="467" allowTransparency="true"></iframe>',
                'providerName' => 'Jean Jean',
            ]
        );
    }
}
