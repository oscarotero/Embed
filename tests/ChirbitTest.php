<?php
class ChirbitTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://chirb.it/7A9L9B');

        $this->assertEquals($info->title, 'Chirbit [nvanderklippe] Encana conference call');
        $this->assertEquals($info->width, 398);
        $this->assertEquals($info->height, 120);
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->providerName, 'Chirbit');
    }
}
