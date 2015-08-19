<?php
class ChirbitTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('http://chirb.it/7A9L9B');

        $this->assertString($info->title, 'Chirbit [nvanderklippe] Encana conference call');
        $this->assertString($info->width, 398);
        $this->assertString($info->height, 120);
        $this->assertString($info->type, 'rich');
        $this->assertString($info->providerName, 'Chirbit');
    }
}
