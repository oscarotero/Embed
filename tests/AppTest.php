<?php
class AppTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('https://alpha.app.net/chrifpa/post/33532003/photo/1');

        $this->assertEquals($info->title, "Image_from_Riposte_2014-06-28.jpg");
        $this->assertEquals($info->description, 'is what I see in my mind when I hear “there’s now a $foo in javascript”. This [photos.app.net]');
        $this->assertEquals($info->width, 533);
        $this->assertEquals($info->height, 400);
        $this->assertEquals($info->type, 'photo');
        $this->assertEquals($info->authorName, '@chrifpa');
        $this->assertEquals($info->providerName, 'App.net');
    }
}
