<?php

namespace Embed\Tests;

class YoutubeTest extends AbstractTestCase
{
    
    const EXPECTED_VIDEO_INFO = [
        'title' => 'Noisy kittens waiting for dinner!',
        'imageWidth' => 480,
        'imageHeight' => 360,
        'type' => 'video',
        'authorName' => 'smshdchrb',
        'authorUrl' => 'https://www.youtube.com/user/smshdchrb',
        'providerName' => 'YouTube',
        'providerUrl' => 'https://www.youtube.com/',
        'tags' => [
            'kittens',
            'cats',
            'hungry',
            'cat',
            'baby',
            'eight',
            'weeks',
            'old',
            'noisy',
            'meow',
            'funny',
            'kitties',
            'feline',
            'dinner',
            'excited',
            'loud',
            'cute',
            'pet',
            'food',
            'time',
            'felix',
            'kitty',
            'catz',
            'lolcat',
            'kitten',
            'talking',
            'adorable',
            'climbing'
        ],
    ];
    
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.youtube.com/watch?v=eiHXASgRTcA',
            self::EXPECTED_VIDEO_INFO
        );
    }
    
    public function testShareUrl()
    {
        $this->assertEmbed(
            'http://www.youtu.be/eiHXASgRTcA',
            self::EXPECTED_VIDEO_INFO
        );
    }

    public function testPlayList()
    {
        $this->assertEmbed(
            'https://www.youtube.com/playlist?list=PL4qTakKkQATKOyZPJG_cAMnRtF7fAIdST',
            [
                'title' => 'De espaldas al patriarcado',
                'imageWidth' => 480,
                'imageHeight' => 360,
                'type' => 'video',
                'code' => '<iframe width="480" height="270" src="https://www.youtube.com/embed/videoseries?list=PL4qTakKkQATKOyZPJG_cAMnRtF7fAIdST" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'authorName' => 'Scadrei5',
            ]
        );
    }
}
