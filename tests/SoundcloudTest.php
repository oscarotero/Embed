<?php

namespace Embed\Tests;

class SoundcloudTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://soundcloud.com/zedsdead/zeds-dead-twin-shadow-lost-you-feat-dangelo-lacy',
            [
                'title' => "Lost You (feat. Twin Shadow & D'Angelo Lacy) by Zeds Dead",
                'type' => 'rich',
                'code' => '<iframe width="100%" height="400" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F150745932&show_artwork=true"></iframe>',
                'providerName' => 'SoundCloud',
                'providerUrl' => 'http://soundcloud.com',
            ]
        );
    }

    public function testTwo()
    {
        $this->assertEmbed(
            'https://soundcloud.com/bruceneilmusic',
            [
                'title' => 'Bruce Neil',
                'description' => 'Bruce Neil from Wokingham is a singer/songwriter with a folk inspired sound, producing songs with heartfelt depth and lyrics that captivate the listener, taking them on an insightful and thought-provoking journey. As a winner of BBC Introducing, resulting in air play nationally, he has recently achieved widespread public attention following the video release of his percussive folk rendition of Guns N’ Roses track Paradise City. Not only did this go viral on social media, it was endorsed by the band themselves and has achieved recognition and air play from several US radio stations. He takes his musical inspiration and guitar-playing style from the likes of Passenger and Mick Flannery.',
                'type' => 'rich',
                'code' => '<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Fusers%2F6538603&show_artwork=true"></iframe>',
                'providerName' => 'SoundCloud',
                'providerUrl' => 'http://soundcloud.com',
            ]
        );
    }

    public function testThree()
    {
        $this->assertEmbed(
            'https://soundcloud.com/ididthat-1/lowe-ct-cape-times-world-cup',
            [
                'title' => 'LOWE CT Cape Times - World Cup by iDidTht.com',
                'description' => 'If you did it. Show it on ididtht.com',
                'type' => 'rich',
                'code' => '<iframe width="100%" height="400" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F191904624&show_artwork=true"></iframe>',
                'providerName' => 'SoundCloud',
                'providerUrl' => 'http://soundcloud.com',
            ]
        );
    }
}
