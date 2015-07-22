<?php
class GithubTest extends PHPUnit_Framework_TestCase
{
    public function testGist()
    {
        $info = Embed\Embed::create('https://gist.github.com/oscarotero/7749998');

        $this->assertEquals($info->title, 'Git-cheatsheet.sh');
        $this->assertEquals($info->imageWidth, 400);
        $this->assertEquals($info->imageHeight, 400);
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->providerName, 'Gist');
    }

    public function testGeojson()
    {
        $info = Embed\Embed::create('https://github.com/benbalter/dc-wifi-social/blob/master/bars.geojson');

        $this->assertEquals($info->title, 'benbalter/dc-wifi-social');
        $this->assertEquals($info->code, '<script src="https://embed.githubusercontent.com/view/geojson/benbalter/dc-wifi-social/master/bars.geojson"></script>');
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->providerName, 'GitHub');
    }

    public function test3d()
    {
        $info = Embed\Embed::create('https://github.com/skalnik/secret-bear-clip/blob/master/stl/clip.stl');

        $this->assertEquals($info->title, 'skalnik/secret-bear-clip');
        $this->assertEquals($info->code, '<script src="https://embed.githubusercontent.com/view/3d/skalnik/secret-bear-clip/master/stl/clip.stl"></script>');
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->providerName, 'GitHub');
    }
}
