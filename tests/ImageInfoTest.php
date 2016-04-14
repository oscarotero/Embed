<?php

class ImageInfoTest extends TestCaseBase
{
    const TEST_IMAGE_URL = 'http://www.mixdecultura.ro/wp-content/uploads/2013/03/galicia-locuinte-celtice.jpg';
    const TEST_IMAGE_WIDTH = 600;
    const TEST_IMAGE_HEIGHT = 408;
    const TEST_IMAGE_SIZE = 244800;
    const TEST_IMAGE_MIME = 'image/jpeg';
    const TEST_IMAGE_BASE64_URL = 'http://www.websiteoptimization.com/speed/tweak/inline-images/folder-test.html';
    const TEST_IMAGE_BASE64_IMAGE = 'data:image/gif;base64,R0lGODlhEAAOALMAAOazToeHh0tLS/7LZv/0jvb29t/f3//Ub//ge8WSLf/rhf/3kdbW1mxsbP//mf///yH5BAAAAAAALAAAAAAQAA4AAARe8L1Ekyky67QZ1hLnjM5UUde0ECwLJoExKcppV0aCcGCmTIHEIUEqjgaORCMxIC6e0CcguWw6aFjsVMkkIr7g77ZKPJjPZqIyd7sJAgVGoEGv2xsBxqNgYPj/gAwXEQA7';

    public function testCurl()
    {
        $info = Embed\ImageInfo\Curl::getImagesInfo([
            ['value' => self::TEST_IMAGE_URL],
        ]);

        $this->assertEquals($info[0]->getInfo(), [
            'width' => self::TEST_IMAGE_WIDTH,
            'height' => self::TEST_IMAGE_HEIGHT,
            'size' => self::TEST_IMAGE_SIZE,
            'mime' => self::TEST_IMAGE_MIME,
        ]);
    }

    public function testGuzzle()
    {
        $info = Embed\ImageInfo\Guzzle5::getImagesInfo([
            ['value' => self::TEST_IMAGE_URL],
        ]);

        $this->assertEquals($info[0]->getInfo(), [
            'width' => self::TEST_IMAGE_WIDTH,
            'height' => self::TEST_IMAGE_HEIGHT,
            'size' => self::TEST_IMAGE_SIZE,
            'mime' => self::TEST_IMAGE_MIME,
        ]);
    }

    public function testBase64Images()
    {
        $info = Embed\Embed::create(self::TEST_IMAGE_BASE64_URL, [
            'adapter' => [
                'config' => [
                    'minImageWidth' => 0,
                    'minImageHeight' => 0,
                ],
            ],
        ]);

        $this->assertEquals($info->image, self::TEST_IMAGE_BASE64_IMAGE);
    }
}
