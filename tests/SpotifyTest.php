<?php
class SpotifyTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://open.spotify.com/track/7nDQMtLxu94xtlTR8bEqjU');

        $this->assertEquals($info->title, 'Zhu - Faded');
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->code, '<iframe src="https://embed.spotify.com/?uri=spotify:track:7nDQMtLxu94xtlTR8bEqjU" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>');
        $this->assertEquals($info->providerName, 'Spotify');
        $this->assertEquals($info->providerUrl, 'https://www.spotify.com');
    }
}
