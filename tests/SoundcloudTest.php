<?php
class SoundcloudTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('https://soundcloud.com/zedsdead/zeds-dead-twin-shadow-lost-you-feat-dangelo-lacy');

        $this->assertEquals($info->title, "Zeds Dead - Lost You (feat. Twin Shadow & D'Angelo Lacy) by Zeds Dead");
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->code, '<iframe width="100%" height="400" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F150745932&show_artwork=true"></iframe>');
        $this->assertEquals($info->authorName, 'Zeds Dead');
        $this->assertEquals($info->authorUrl, 'http://soundcloud.com/zedsdead');
        $this->assertEquals($info->providerName, 'SoundCloud');
        $this->assertEquals($info->providerUrl, 'https://soundcloud.com');
    }

    public function testTwo()
    {
        $info = Embed\Embed::create('https://soundcloud.com/bruceneilmusic');

        $this->assertEquals($info->title, "Bruce Neil");
        $this->assertEquals($info->description, "Bruce Neil from Wokingham is a self-taught singer/songwriter with a folk and blues sound, producing songs that tell stories about people. Recently having success winning a BBC Introducing competition and achieving air play nationally. He takes his musical inspiration and guitar-playing style from the likes of Passenger Mick Flannery and Tommy Emmanuel.");
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->code, '<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Fusers%2F6538603&show_artwork=true"></iframe>');
        $this->assertEquals($info->providerName, 'SoundCloud');
        $this->assertEquals($info->providerUrl, 'https://soundcloud.com');
    }

    public function testThree()
    {
        $info = Embed\Embed::create('https://soundcloud.com/calumfoad/sets/flaws-ep-stream');

        $this->assertEquals($info->title, "Flaws EP by Calum Foad");
        $this->assertEquals($info->description, "19 year old singer/songwriter from Reading.");
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->code, '<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Fplaylists%2F46025307&show_artwork=true"></iframe>');
        $this->assertEquals($info->providerName, 'SoundCloud');
        $this->assertEquals($info->providerUrl, 'https://soundcloud.com');
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
        $this->assertEquals($info->providerUrl, 'https://soundcloud.com');
    }
}
