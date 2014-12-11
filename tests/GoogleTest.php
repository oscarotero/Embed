<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class GoogleTest extends PHPUnit_Framework_TestCase
{
    public function testMap()
    {
        $info = Embed\Embed::create('https://www.google.es/maps/place/Tordoia,+A+Coru%C3%B1a/@43.0871207,-8.5710004,12z/data=!3m1!4b1!4m2!3m1!1s0xd2ef4006f1ef489:0x404f58273ca55a0');

        $this->assertEquals($info->title, 'Google Maps');
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->providerName, 'google');
    }
}
