<?php
class TedTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.ted.com/talks/george_monbiot_for_more_wonder_rewild_the_world?language=en#t-689901');

        $this->assertString($info->title, 'George Monbiot: For more wonder, rewild the world');
        $this->assertString($info->description, "Wolves were once native to the US' Yellowstone National Park -- until hunting wiped them out. But when, in 1995, the wolves began to come back (thanks to an aggressive management program), something interesting happened: the rest of the park began to find a new, more healthful balance. In a bold thought experiment, George Monbiot imagines a wilder world in which humans work to restore the complex, lost natural food chains that once surrounded us.");
        $this->assertString($info->imageWidth, 240);
        $this->assertString($info->imageHeight, 180);
        $this->assertString($info->code, '<iframe src="https://embed-ssl.ted.com/talks/george_monbiot_for_more_wonder_rewild_the_world.html" width="560" height="315" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
        $this->assertString($info->type, 'video');
        $this->assertString($info->authorName, 'George Monbiot');
        $this->assertString($info->authorUrl, 'http://www.ted.com/speakers/george_monbiot');
        $this->assertString($info->providerName, 'TED');
    }
}
