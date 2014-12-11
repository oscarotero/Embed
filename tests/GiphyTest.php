<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class GiphyTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://giphy.com/gifs/puppies-cute-animals-asdfghjkl-6UZFwMYqCeXi8');

        $this->assertEquals($info->title, 'Puppies Animated GIF');
        $this->assertEquals($info->imageWidth, 480);
        $this->assertEquals($info->imageHeight, 270);
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->providerName, 'Giphy');
        $this->assertEquals($info->code, '<iframe src="https://giphy.com/embed/6UZFwMYqCeXi8?html5=true" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:500px;height:280px;"></iframe>');
    }
}
