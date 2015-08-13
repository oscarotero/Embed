<?php
class WordPressTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/');

        $this->assertEquals($info->title, 'Dave Ross: Optimize Image Files Like a Pro');
        $this->assertEquals($info->imageWidth, 400);
        $this->assertEquals($info->imageHeight, 224);
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->authorName, '@WordPressTV');
        $this->assertEquals($info->providerName, 'WordPress.tv');
        $this->assertEquals($info->providerUrl, 'http://wordpress.tv');
    }
}
