<?php
class ShoudioTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://shoudio.com/collection/1235/wendelbosroute.html',
            [
                'title' => "Wendelbosroute",
                'type' => 'link',
                'providerName' => 'Shoudio, the location based audio platform',
            ]
        );
    }
}
