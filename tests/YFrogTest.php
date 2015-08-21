<?php
class YFrogTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://a.yfrog.com/img593/8436/snso.jpg',
            [
                'title' => 'http://a.yfrog.com/img593/8436/snso.jpg',
                'imageWidth' => 4928,
                'imageHeight' => 3264,
                'type' => 'photo',
                'providerName' => 'yFrog',
            ]
        );
    }
}
