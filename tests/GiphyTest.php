<?php
class GiphyTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://giphy.com/gifs/puppies-cute-animals-asdfghjkl-6UZFwMYqCeXi8',
            [
                'title' => 'Puppies Animated GIF',
                'type' => 'video',
                'providerName' => 'Giphy',
                'code' => '<iframe src="https://giphy.com/embed/6UZFwMYqCeXi8?html5=true" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:500px;height:280px;"></iframe>',
                'width' => 500,
                'height' => 280,
            ]
        );
    }
}
