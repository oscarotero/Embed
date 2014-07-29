<?php
include_once dirname(__DIR__).'/Embed/autoloader.php';

class EmbedTest extends PHPUnit_Framework_TestCase
{
    private function checkUrl($url, array $values, array $options = null)
    {
        $info = Embed\Embed::create($url, $options);

        foreach ($values as $name => $value) {
            $this->assertEquals($value, $info->$name);
        }

        return $info;
    }

    public function testUrls()
    {
        $this->checkUrl(
            'http://www.youtube.com/watch?v=eiHXASgRTcA',
            array(
                'title' => 'Noisy kittens waiting for dinner!',
                'description' => 'Disclaimer - 7 week old fostered kittens waiting on their dinner being prepared. They had been ill with cat flu and were just starting to get their appetite ...',
                'image' => 'http://i.ytimg.com/vi/eiHXASgRTcA/hqdefault.jpg',
                'imageWidth' => 480,
                'imageHeight' => 360,
                'url' => 'http://www.youtube.com/watch?v=eiHXASgRTcA',
                'type' => 'video',
                'authorName' => 'smshdchrb',
                'authorUrl' => 'http://www.youtube.com/user/smshdchrb',
                'providerName' => 'YouTube',
                'providerUrl' => 'http://www.youtube.com/',
                'providerIcon' => 'http://s.ytimg.com/yts/img/favicon-vfldLzJxy.ico',
                'width' => 459,
                'height' => 344
            )
        );

        $this->checkUrl(
            'http://www.politico.com/story/2013/12/presidents-barack-obama-george-w-bush-second-term-101314.html',
            array(
                'title' => 'Echoes of George W. Bush blues in Barack Obama\'s 2nd term',
                'description' => 'As Barack Obama heads into his sixth year in the White House, his aides says they are all too familiar with the notion that his predicament looks similar to George W. Bush&rsquo;s eight years ago. They&rsquo;re two presidents dogged by crises largely of their own making, whose welcome with Americans has worn thin after two marathon elections. One president...',
                'image' => 'http://images.politico.com/global/2013/12/18/131218_george_w_bush_barack_obama_ap_605.jpg',
                'imageWidth' => 605,
                'imageHeight' => 328,
                'url' => 'http://www.politico.com/story/2013/12/presidents-barack-obama-george-w-bush-second-term-101314.html',
                'type' => 'link',
                'providerName' => 'POLITICO',
                'providerUrl' => 'http://politico.com',
                'providerIcon' => 'http://www.politico.com/favicon.ico'
            )
        );

        $this->checkUrl(
            'http://www.dailymotion.com/video/xy0wd_chats-paresseux',
            array(
                'title' => 'Chats paresseux',
                'description' => 'Regarder la vidéo «Chats paresseux» envoyée par jeanbamin sur Dailymotion.',
                'image' => 'http://s1.dmcdn.net/Ay0o/x240-kWu.jpg',
                'imageWidth' => 320,
                'imageHeight' => 240,
                'url' => 'http://www.dailymotion.com/video/xy0wd_chats-paresseux_animals',
                'type' => 'video',
                'providerName' => 'Dailymotion',
                'providerUrl' => 'http://www.dailymotion.com',
                'providerIcon' => 'http://static1.dmcdn.net/images/apple-touch-icon.png.vcbf86c6fe83fbbe11'
            )
        );

        $this->checkUrl(
            'https://twitter.com/pepephone/status/436461658601713664',
            array(
                'code' => '<blockquote class="twitter-tweet"><p>RT <a href="https://twitter.com/PabloHerreros">@PabloHerreros</a> Pepephone rompe la baraja - <a href="http://t.co/mFn7mcB1vy">http://t.co/mFn7mcB1vy</a></p>&mdash; pepephone (@pepephone) <a href="https://twitter.com/pepephone/statuses/436461658601713664">February 20, 2014</a></blockquote>'."\n".'<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>'
            )
        );

        $this->checkUrl(
            'https://twitter.com/pepephone/status/436461658601713664',
            array(
                'code' => '<blockquote class="twitter-tweet"><p>RT <a href="https://twitter.com/PabloHerreros">@PabloHerreros</a> Pepephone rompe la baraja - <a href="http://t.co/mFn7mcB1vy">http://t.co/mFn7mcB1vy</a></p>&mdash; pepephone (@pepephone) <a href="https://twitter.com/pepephone/statuses/436461658601713664">February 20, 2014</a></blockquote>'
            ),
            array(
                'oembedParameters' => array('omit_script' => true)
            )
        );

        $this->checkUrl(
            'http://melihasweettimes.files.wordpress.com/2011/11/dsc01636.jpg',
            array(
                'imageWidth' => 1200,
                'imageHeight' => 1600
            )
        );
    }

    public function testUrlParser()
    {
        $urls = array(
            'http://vimeo.com//69912181?' => 'http://vimeo.com/69912181',
            'http://vimeo.com//69912181' => 'http://vimeo.com/69912181',
            'http://vimeo.com/69912181' => 'http://vimeo.com/69912181',
        );

        foreach ($urls as $url => $expected_url) {
            $parsed_url = new Embed\Url($url);

            $this->assertEquals($expected_url, $parsed_url->getUrl());
        }
    }

    public function testUrlDirectory()
    {
        $url = new Embed\Url('http://domain.com/first//second/third');

        $this->assertEquals('first', $url->getDirectory(0));
        $this->assertEquals('second', $url->getDirectory(1));
        $this->assertEquals('third', $url->getDirectory(2));
        $this->assertNull($url->getDirectory(3));
    }

    public function testUrlDomain()
    {
        $url = new Embed\Url('http://www.domain.com');

        $this->assertEquals('domain', $url->getDomain());
        $this->assertEquals('domain.com', $url->getDomain(1));

        $url = new Embed\Url('http://www.domain.co.uk');

        $this->assertEquals('domain', $url->getDomain());
        $this->assertEquals('domain.co.uk', $url->getDomain(1));

        $url = new Embed\Url('http://www.domain.com.au');

        $this->assertEquals('domain', $url->getDomain());
        $this->assertEquals('domain.com.au', $url->getDomain(1));
    }

    public function testRedirections()
    {
        $this->checkUrl(
            'https://translate.google.com/translate?sl=de&tl=en&js=y&prev=_t&hl=en&ie=UTF-8&u=http%3A%2F%2Fwww.heise.de%2Fnewsticker%2Fmeldung%2FXKeyscore-Quellcode-Tor-Nutzer-werden-von-der-NSA-als-Extremisten-markiert-und-ueberwacht-2248328.html&edit-text=',
            array(
                'title' => 'XKeyscore-Quellcode: Tor-Nutzer werden von der NSA als Extremisten markiert und überwacht',
                'image' => 'http://www.heise.de/imgs/18/1/2/6/2/0/9/3/urn-newsml-dpa-com-20090101-140212-99-03856_large_4_3-2f16ffb85099e6ad.jpeg'
            )
        );


        $info1 = Embed\Embed::create('http://rd.io/x/Q1IjXC8s');
        $info2 = Embed\Embed::create('http://www.rdio.com/artist/Soundgarden/album/Superunknown/');
        $this->assertEquals($info1->code, $info2->code);

        $info1 = Embed\Embed::create('https://twitter.com/#!/twitter/status/99530515043983360');
        $info2 = Embed\Embed::create('https://twitter.com/twitter/status/99530515043983360');
        $this->assertEquals($info1->code, $info2->code);
    }
}
