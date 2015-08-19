<?php
class SpotifyTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('http://open.spotify.com/track/7nDQMtLxu94xtlTR8bEqjU');

        $this->assertString($info->title, 'Zhu - Faded');
        $this->assertString($info->type, 'rich');
        $this->assertString($info->code, '<iframe src="https://embed.spotify.com/?uri=spotify:track:7nDQMtLxu94xtlTR8bEqjU" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>');
        $this->assertString($info->providerName, 'Spotify');
        $this->assertString($info->providerUrl, 'https://www.spotify.com');
    }
}
