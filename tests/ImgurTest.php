<?php
class ImgurTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://i.imgur.com/X6rkCc5.jpg',
            [
                'title' => 'http://i.imgur.com/X6rkCc5.jpg',
                'imageWidth' => 2000,
                'imageHeight' => 1332,
                'type' => 'photo',
                'providerName' => 'Imgur',
            ]
        );
    }
}
