<?php

class SpotifyTest extends TestCaseBase
{
    public function testPlay()
    {
        $this->assertEmbed(
            'https://play.spotify.com/album/7s66wU1XJ2NsUuWM2NKiUV',
            [
                'title' => 'Various Artists - A Cantar con Xabarin (Vol. I & II)',
                'type' => 'rich',
                'code' => '<iframe src="https://embed.spotify.com/?uri=spotify:album:7s66wU1XJ2NsUuWM2NKiUV" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>',
                'providerName' => 'Spotify',
                'providerUrl' => 'https://www.spotify.com',
            ]
        );
    }

    public function testOpen()
    {
        $this->assertEmbed(
            'https://open.spotify.com/album/7s66wU1XJ2NsUuWM2NKiUV',
            [
                'title' => 'Various Artists - A Cantar con Xabarin (Vol. I & II)',
                'type' => 'rich',
                'code' => '<iframe src="https://embed.spotify.com/?uri=spotify:album:7s66wU1XJ2NsUuWM2NKiUV" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>',
                'providerName' => 'Spotify',
                'providerUrl' => 'https://www.spotify.com',
            ]
        );
    }
}
