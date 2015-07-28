<?php
class GoogleTest extends PHPUnit_Framework_TestCase
{
    public function testMap()
    {
        $info = Embed\Embed::create('https://www.google.es/maps/place/Tordoia,+A+Coru%C3%B1a/@43.0871207,-8.5710004,12z/data=!3m1!4b1!4m2!3m1!1s0xd2ef4006f1ef489:0x404f58273ca55a0');

        $this->assertEquals($info->title, 'Google Maps');
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->code, '<iframe src="https://www.google.es/maps/place/Tordoia,+A+Coru%C3%B1a/@43.0871207,-8.5710004,12z/data=!3m1!4b1!4m2!3m1!1s0xd2ef4006f1ef489:0x404f58273ca55a0?output=embed&amp;s=" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:600px;height:400px;"></iframe>');
        $this->assertEquals($info->providerName, 'Google Maps');
    }

    public function testDrive()
    {
        $info = Embed\Embed::create('https://drive.google.com/file/d/0B2rwN8wAbVSWbmFJdUdnV2VSTTg/view');

        $this->assertEquals($info->title, 'Entrevista_Rianxo_RadioFusion_150724.mp3');
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->code, '<iframe src="https://drive.google.com/file/d/0B2rwN8wAbVSWbmFJdUdnV2VSTTg/preview?pli=1&amp;usp=embed_facebook" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:600px;height:400px;"></iframe>');
        $this->assertEquals($info->providerName, 'Google Docs');
    }
}
