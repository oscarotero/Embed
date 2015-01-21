<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class ArticleTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://mashable.com/2015/01/15/booking-now-app/');

        $this->assertEquals($info->title, 'Booking Now app offers hotel reservations in \'just two taps\'');
        $this->assertEquals($info->description, 'Last-minute accommodations are all the rage in 2015.');
        $this->assertEquals($info->type, 'link');
        $this->assertEquals($info->image, 'http://rack.2.mshcdn.com/media/ZgkyMDE1LzAxLzE1LzRlL2hvdGVscm9vbS42YmIyOC5qcGcKcAl0aHVtYgkxMjAweDYyNyMKZQlqcGc/6d24e110/098/hotel-room.jpg');
        $this->assertEquals($info->providerName, 'Mashable');
        $this->assertEquals($info->providerUrl, 'http://mashable.com');
        $this->assertEquals($info->publishedTime, '2015-01-15T13:31:13Z');
    }
}
