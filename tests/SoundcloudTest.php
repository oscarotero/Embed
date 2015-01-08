<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class SoundcloudTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('https://soundcloud.com/zedsdead/zeds-dead-twin-shadow-lost-you-feat-dangelo-lacy');

        $this->assertEquals($info->title, "Zeds Dead - Lost You (feat. Twin Shadow & D'Angelo Lacy)");
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->code, '<iframe width="100%" height="400" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F150745932&show_artwork=true"></iframe>');
        $this->assertEquals($info->authorName, 'Zeds Dead');
        $this->assertEquals($info->authorUrl, 'http://soundcloud.com/zedsdead');
        $this->assertEquals($info->providerName, 'SoundCloud');
        $this->assertEquals($info->providerUrl, 'http://soundcloud.com');
    }

    public function testMobile()
    {
        $info = Embed\Embed::create('https://m.soundcloud.com/zedsdead/zeds-dead-twin-shadow-lost-you-feat-dangelo-lacy');

        $this->assertEquals($info->title, "Zeds Dead - Lost You (feat. Twin Shadow & D'Angelo Lacy)");
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->code, '<iframe width="100%" height="400" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F150745932&show_artwork=true"></iframe>');
        $this->assertEquals($info->authorName, 'Zeds Dead');
        $this->assertEquals($info->authorUrl, 'http://soundcloud.com/zedsdead');
        $this->assertEquals($info->providerName, 'SoundCloud');
        $this->assertEquals($info->providerUrl, 'http://soundcloud.com');
    }
}
