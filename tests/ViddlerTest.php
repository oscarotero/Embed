<?php
class ViddlerTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.viddler.com/v/bdce8c7',
            [
                'title' => 'Viddler Platform Overview',
                'type' => 'video',
                'code' => '<iframe width="620" height="349" src="http://viddler.com/embed/bdce8c7" frameborder="0" allowfullscreen></iframe>',
                'providerName' => 'Viddler',
                'providerUrl' => 'http://viddler.com/',
            ]
        );
    }
}
