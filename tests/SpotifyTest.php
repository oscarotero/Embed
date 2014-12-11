<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class SpotifyTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://open.spotify.com/track/7nDQMtLxu94xtlTR8bEqjU');

        $this->assertEquals($info->title, 'Faded');
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->code, '<iframe src="https://embed.spotify.com/?uri=spotify:album:68XUEsgZs7cJVtYlvCJSGz" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:300px;height:380px;"></iframe>');
        $this->assertEquals($info->providerName, 'Spotify');
        $this->assertEquals($info->providerUrl, 'https://spotify.com');
    }
}
