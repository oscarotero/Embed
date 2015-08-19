<?php
class SoundcloudTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('https://soundcloud.com/zedsdead/zeds-dead-twin-shadow-lost-you-feat-dangelo-lacy');

        $this->assertString($info->title, "Zeds Dead - Lost You (feat. Twin Shadow & D'Angelo Lacy)");
        $this->assertString($info->type, 'rich');
        $this->assertString($info->code, '<iframe width="100%" height="400" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F150745932&show_artwork=true"></iframe>');
        $this->assertString($info->authorName, 'Zeds Dead');
        $this->assertString($info->authorUrl, 'http://soundcloud.com/zedsdead');
        $this->assertString($info->providerName, 'SoundCloud');
        $this->assertString($info->providerUrl, 'https://soundcloud.com');
    }

    public function testTwo()
    {
        $info = $this->getInfo('https://soundcloud.com/bruceneilmusic');

        $this->assertString($info->title, "Bruce Neil");
        $this->assertString($info->description, "Bruce Neil from Wokingham is a singer/songwriter with a folk inspired sound, producing songs with heartfelt depth and lyrics that captivate the listener, taking them on an insightful and thought-provoking journey. As a winner of BBC Introducing, resulting in air play nationally, he has recently achieved widespread public attention following the video release of his percussive folk rendition of Guns N’ Roses track Paradise City. Not only did this go viral on social media, it was endorsed by the band themselves and has achieved recognition and air play from several US radio stations. He takes his musical inspiration and guitar-playing style from the likes of Passenger and Mick Flannery.");
        $this->assertString($info->type, 'rich');
        $this->assertString($info->code, '<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&url=https%3A%2F%2Fapi.soundcloud.com%2Fusers%2F6538603&show_artwork=true"></iframe>');
        $this->assertString($info->providerName, 'SoundCloud');
        $this->assertString($info->providerUrl, 'https://soundcloud.com');
    }

    public function testThree()
    {
        $info = $this->getInfo('https://soundcloud.com/calumfoad/sets/flaws-ep-stream');

        $this->assertString($info->title, "Flaws EP");
        $this->assertString($info->description, "20 year old singer/songwriter from Reading.");
        $this->assertString($info->type, 'rich');
        $this->assertString($info->code, '<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&url=https%3A%2F%2Fapi.soundcloud.com%2Fplaylists%2F46025307&show_artwork=true"></iframe>');
        $this->assertString($info->providerName, 'SoundCloud');
        $this->assertString($info->providerUrl, 'https://soundcloud.com');
    }

    public function testFour()
    {
        $info = $this->getInfo('https://soundcloud.com/ididthat-1/lowe-ct-cape-times-world-cup');

        $this->assertString($info->title, "LOWE CT Cape Times - World Cup");
        $this->assertString($info->description, "If you did it. Show it on ididthat.net");
        $this->assertString($info->type, 'rich');
        $this->assertString($info->code, '<iframe width="100%" height="400" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F191904624&show_artwork=true"></iframe>');
        $this->assertString($info->providerName, 'SoundCloud');
        $this->assertString($info->providerUrl, 'https://soundcloud.com');
    }

    public function testMobile()
    {
        $info = $this->getInfo('https://m.soundcloud.com/zedsdead/zeds-dead-twin-shadow-lost-you-feat-dangelo-lacy');

        $this->assertString($info->title, "Zeds Dead - Lost You (feat. Twin Shadow & D'Angelo Lacy)");
        $this->assertString($info->type, 'rich');
        $this->assertString($info->code, '<iframe width="100%" height="400" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F150745932&show_artwork=true"></iframe>');
        $this->assertString($info->authorName, 'Zeds Dead');
        $this->assertString($info->authorUrl, 'http://soundcloud.com/zedsdead');
        $this->assertString($info->providerName, 'SoundCloud');
        $this->assertString($info->providerUrl, 'https://soundcloud.com');
    }
}
