<?php
class SpreakerTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.spreaker.com/show/deseos-del-alma-poemas_1',
            [
                'title' => 'Te nombro - Poemas',
                'type' => 'video',
                'code' => '<iframe src="https://www.spreaker.com/embed/player/standard?autoplay=false&amp;episode_id=4535030" frameborder="0" allowTransparency="true" style="min-width:400px;border:none;overflow:hidden;width:100%;height:131px;"></iframe>',
                'providerName' => 'Spreaker',
                'providerUrl' => 'https://spreaker.com',
            ]
        );
    }
}
