<?php
class AppTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\Embed::create('https://alpha.app.net/chrifpa/post/33532003/photo/1');

        $this->assertString($info->title, "Image_from_Riposte_2014-06-28.jpg");
        $this->assertString($info->description, 'is what I see in my mind when I hear “there’s now a $foo in javascript”. This [photos.app.net]');
        $this->assertString($info->width, 533);
        $this->assertString($info->height, 400);
        $this->assertString($info->type, 'photo');
        $this->assertString($info->authorName, '@chrifpa');
        $this->assertString($info->providerName, 'App.net');
    }
}
