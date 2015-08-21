<?php
class SpotifyTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://open.spotify.com/track/7nDQMtLxu94xtlTR8bEqjU',
            [
                'title' => 'Zhu - Faded',
                'type' => 'rich',
                'code' => '<iframe src="https://embed.spotify.com/?uri=spotify:track:7nDQMtLxu94xtlTR8bEqjU" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>',
                'providerName' => 'Spotify',
                'providerUrl' => 'https://www.spotify.com',
            ]
        );
    }
}
