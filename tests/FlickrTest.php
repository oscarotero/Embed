<?php
class FlickrTest extends TestCaseBase
{
    public function testSets()
    {
        $this->assertEmbed(
            'https://www.flickr.com/photos/desescribir/sets/72157650686499888',
            [
                'imageWidth' => 1024,
                'imageHeight' => 680,
                'code' => '<iframe src="https://www.flickr.com/photos/desescribir/sets/72157650686499888/player" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:640px;height:425px;"></iframe>',
                'type' => 'rich',
            ]
        );
    }

    public function testProfile()
    {
        $this->assertEmbed(
            'https://www.flickr.com/photos/desescribir',
            [
                'imageWidth' => 2048,
                'imageHeight' => 1454,
                'code' => '<iframe src="https://www.flickr.com/photos/desescribir/player" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:640px;height:425px;"></iframe>',
                'type' => 'rich',
            ]
        );
    }
}
