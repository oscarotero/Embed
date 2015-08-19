<?php
class ViddlerTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('http://www.viddler.com/v/bdce8c7');

        $this->assertString($info->title, 'Viddler Platform Overview');
        $this->assertString($info->type, 'video');
        $this->assertString($info->code, '<iframe width="620" height="349" src="http://viddler.com/embed/bdce8c7" frameborder="0" allowfullscreen></iframe>');
        $this->assertString($info->providerName, 'Viddler');
        $this->assertString($info->providerUrl, 'http://viddler.com/');
    }
}
