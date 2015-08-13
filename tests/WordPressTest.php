<?php
class WordPressTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/');

        $this->assertString($info->title, 'Dave Ross: Optimize Image Files Like a Pro');
        $this->assertString($info->imageWidth, 400);
        $this->assertString($info->imageHeight, 224);
        $this->assertString($info->type, 'video');
        $this->assertString($info->authorName, '@WordPressTV');
        $this->assertString($info->providerName, 'WordPress.tv');
        $this->assertString($info->providerUrl, 'http://wordpress.tv');
    }
}
