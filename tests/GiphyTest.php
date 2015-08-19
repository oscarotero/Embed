<?php
class GiphyTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('http://giphy.com/gifs/puppies-cute-animals-asdfghjkl-6UZFwMYqCeXi8');

        $this->assertString($info->title, 'Puppies Animated GIF');
        $this->assertString($info->type, 'video');
        $this->assertString($info->providerName, 'Giphy');
        $this->assertString($info->code, '<iframe src="https://giphy.com/embed/6UZFwMYqCeXi8?html5=true" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:500px;height:280px;"></iframe>');
        $this->assertString($info->width, 500);
        $this->assertString($info->height, 280);
    }
}
