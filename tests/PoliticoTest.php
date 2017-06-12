<?php

namespace Embed\Tests;

class PoliticoTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.politico.com/story/2013/12/presidents-barack-obama-george-w-bush-second-term-101314.html',
            [
                'title' => 'Obama 2nd term: Echoes of Bush',
                'type' => 'rich',
                'image' => 'http://s3-origin-images.politico.com/2013/12/18/131218_george_w_bush_barack_obama_ap_605.jpg',
                'providerName' => 'POLITICO',
                'providerUrl' => 'http://politico.com',
            ]
        );
    }
}
