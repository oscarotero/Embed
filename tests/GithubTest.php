<?php
class GithubTest extends TestCaseBase
{
    public function testGist()
    {
        $info = Embed\Embed::create('https://gist.github.com/oscarotero/7749998');

        $this->assertString($info->title, 'Git-cheatsheet.sh');
        $this->assertString($info->imageWidth, 400);
        $this->assertString($info->imageHeight, 400);
        $this->assertString($info->type, 'rich');
        $this->assertString($info->providerName, 'Gist');
    }

    public function testGeojson()
    {
        $info = Embed\Embed::create('https://github.com/benbalter/dc-wifi-social/blob/master/bars.geojson');

        $this->assertString($info->title, 'benbalter/dc-wifi-social');
        $this->assertString($info->code, '<script src="https://embed.githubusercontent.com/view/geojson/benbalter/dc-wifi-social/master/bars.geojson"></script>');
        $this->assertString($info->type, 'rich');
        $this->assertString($info->providerName, 'GitHub');
    }

    public function test3d()
    {
        $info = Embed\Embed::create('https://github.com/skalnik/secret-bear-clip/blob/master/stl/clip.stl');

        $this->assertString($info->title, 'skalnik/secret-bear-clip');
        $this->assertString($info->code, '<script src="https://embed.githubusercontent.com/view/3d/skalnik/secret-bear-clip/master/stl/clip.stl"></script>');
        $this->assertString($info->type, 'rich');
        $this->assertString($info->providerName, 'GitHub');
    }
}
