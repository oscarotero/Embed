<?php
class SpreakerTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.spreaker.com/show/deseos-del-alma-poemas_1');

        $this->assertString($info->title, 'Te nombro - Poemas');
        $this->assertString($info->type, 'video');
        $this->assertString($info->code, '<iframe src="https://www.spreaker.com/embed/player/standard?autoplay=false&amp;episode_id=4535030" frameborder="0" allowTransparency="true" style="min-width:400px;border:none;overflow:hidden;width:100%;height:131px;"></iframe>');
        $this->assertString($info->providerName, 'Spreaker');
        $this->assertString($info->providerUrl, 'https://spreaker.com');
    }
}
