<?php

class SpreakerTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.spreaker.com/user/angelclark/angel-clark-ice-cream-tocos',
            [
                'title' => 'Angel Clark: Ice Cream Toco\'s',
                'type' => 'video',
                'code' => '<iframe src="https://www.spreaker.com/embed/player/standard?autoplay=false&amp;episode_id=7657563" frameborder="0" allowTransparency="true" style="min-width:400px;border:none;overflow:hidden;width:100%;height:131px;"></iframe>',
                'providerName' => 'Spreaker',
                'providerUrl' => 'https://spreaker.com',
            ]
        );
    }
}
