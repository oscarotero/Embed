<?php
class PoliticoTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.politico.com/story/2013/12/presidents-barack-obama-george-w-bush-second-term-101314.html',
            [
                'title' => 'Echoes of George W. Bush blues in Barack Obama\'s 2nd term',
                'type' => 'link',
                'image' => 'http://images.politico.com/global/2013/12/18/131218_george_w_bush_barack_obama_ap_605.jpg',
                'imageWidth' => 605,
                'imageHeight' => 328,
                'providerName' => 'POLITICO',
                'providerUrl' => 'http://politico.com',
                'providerIcon' => 'http://www.politico.com/favicon.ico',
            ]
        );
    }
}
