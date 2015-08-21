<?php
class AppTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://alpha.app.net/chrifpa/post/33532003/photo/1',
            [
                'title' => "Image_from_Riposte_2014-06-28.jpg",
                'description' => 'is what I see in my mind when I hear “there’s now a $foo in javascript”. This [photos.app.net]',
                'width' => 533,
                'height' => 400,
                'type' => 'photo',
                'authorName' => '@chrifpa',
                'providerName' => 'App.net',
            ]
        );
    }
}
