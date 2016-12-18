<?php

namespace Embed\Tests;

use Embed\Http\CurlDispatcher;
use Embed\Http\Url;
use Embed\Embed;

class ImageInfoTest extends AbstractTestCase
{
    public function testCurl()
    {
        $dispatcher = new CurlDispatcher();

        $result = $dispatcher->dispatchImages([
            Url::create('http://www.mixdecultura.ro/wp-content/uploads/2013/03/galicia-locuinte-celtice.jpg'),
        ]);

        $this->assertCount(1, $result);

        $img = $result[0];

        $this->assertEquals(600, $img->getWidth());
        $this->assertEquals(408, $img->getHeight());
        $this->assertEquals('image/jpeg', $img->getContentType());
    }

    public function testBase64Images()
    {
        $info = Embed::create('http://www.websiteoptimization.com/speed/tweak/inline-images/folder-test.html');

        $this->assertEquals(
            'data:image/gif;base64,R0lGODlhEAAOALMAAOazToeHh0tLS/7LZv/0jvb29t/f3//Ub//ge8WSLf/rhf/3kdbW1mxsbP//mf///yH5BAAAAAAALAAAAAAQAA4AAARe8L1Ekyky67QZ1hLnjM5UUde0ECwLJoExKcppV0aCcGCmTIHEIUEqjgaORCMxIC6e0CcguWw6aFjsVMkkIr7g77ZKPJjPZqIyd7sJAgVGoEGv2xsBxqNgYPj/gAwXEQA7',
            $info->image
        );
    }
}
