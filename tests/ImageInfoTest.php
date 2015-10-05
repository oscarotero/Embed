<?php

class ImageInfoTest extends TestCaseBase
{
    const TEST_IMAGE_URL = 'http://www.mixdecultura.ro/wp-content/uploads/2013/03/galicia-locuinte-celtice.jpg';
    const TEST_IMAGE_WIDTH = 600;
    const TEST_IMAGE_HEIGHT = 408;
    const TEST_IMAGE_SIZE = 244800;
    const TEST_IMAGE_MIME = 'image/jpeg';

    public function testCurl()
    {
        $info = Embed\ImageInfo\Curl::getImagesInfo([[
            'value' => self::TEST_IMAGE_URL,
        ]]);

        $this->assertEquals($info[0], [
            'width' => self::TEST_IMAGE_WIDTH,
            'height' => self::TEST_IMAGE_HEIGHT,
            'size' => self::TEST_IMAGE_SIZE,
            'mime' => self::TEST_IMAGE_MIME,
            'value' => self::TEST_IMAGE_URL,
        ]);
    }

    public function testGuzzle()
    {
        $info = Embed\ImageInfo\Guzzle5::getImagesInfo([[
            'value' => self::TEST_IMAGE_URL,
        ]], [
            'client' => new \GuzzleHttp\Client(),
        ]);

        $this->assertEquals($info[0], [
            'width' => self::TEST_IMAGE_WIDTH,
            'height' => self::TEST_IMAGE_HEIGHT,
            'size' => self::TEST_IMAGE_SIZE,
            'mime' => self::TEST_IMAGE_MIME,
            'value' => self::TEST_IMAGE_URL,
        ]);
    }
}
