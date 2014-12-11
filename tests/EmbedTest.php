<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class EmbedTest extends PHPUnit_Framework_TestCase
{
    public function testYoutube()
    {
        $info = Embed\Embed::create('http://www.youtube.com/watch?v=eiHXASgRTcA');

        $this->assertEquals($info->title, 'Noisy kittens waiting for dinner!');
        $this->assertEquals($info->description, 'Disclaimer - 7 week old fostered kittens waiting on their dinner being prepared. They had been ill with cat flu and were just starting to get their appetite ...');
        $this->assertEquals($info->imageWidth, 480);
        $this->assertEquals($info->imageHeight, 360);
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->authorName, 'smshdchrb');
        $this->assertEquals($info->authorUrl, 'http://www.youtube.com/user/smshdchrb');
        $this->assertEquals($info->providerName, 'YouTube');
        $this->assertEquals($info->providerUrl, 'http://www.youtube.com/');
    }

    public function testPolitico()
    {
        $info = Embed\Embed::create('http://www.politico.com/story/2013/12/presidents-barack-obama-george-w-bush-second-term-101314.html');

        $this->assertEquals($info->title, 'Echoes of George W. Bush blues in Barack Obama\'s 2nd term');
        $this->assertEquals($info->type, 'link');
        $this->assertEquals($info->image, 'http://images.politico.com/global/2013/12/18/131218_george_w_bush_barack_obama_ap_605.jpg');
        $this->assertEquals($info->imageWidth, 605);
        $this->assertEquals($info->imageHeight, 328);
        $this->assertEquals($info->providerName, 'POLITICO');
        $this->assertEquals($info->providerUrl, 'http://politico.com');
        $this->assertEquals($info->providerIcon, 'http://www.politico.com/favicon.ico');
    }

    public function testDailyMotion()
    {
        $info = Embed\Embed::create('http://www.dailymotion.com/video/xy0wd_chats-paresseux');

        $this->assertEquals($info->title, 'Chats paresseux');
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->url, 'http://www.dailymotion.com/video/xy0wd_chats-paresseux_animals');
        $this->assertEquals($info->image, 'http://s1.dmcdn.net/Ay0o/x240-kWu.jpg');
        $this->assertEquals($info->imageWidth, 320);
        $this->assertEquals($info->imageHeight, 240);
        $this->assertEquals($info->providerName, 'Dailymotion');
        $this->assertEquals($info->providerUrl, 'http://www.dailymotion.com');
    }

    public function testTwitter()
    {
        //With no oembed params:
        $info = Embed\Embed::create('https://twitter.com/pepephone/status/436461658601713664');

        $this->assertEquals($info->code, '<blockquote class="twitter-tweet"><p>RT <a href="https://twitter.com/PabloHerreros">@PabloHerreros</a> Pepephone rompe la baraja - <a href="http://t.co/mFn7mcB1vy">http://t.co/mFn7mcB1vy</a></p>&mdash; pepephone (@pepephone) <a href="https://twitter.com/pepephone/status/436461658601713664">February 20, 2014</a></blockquote>'."\n".'<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>');

        //With oembed params:
        $info = Embed\Embed::create('https://twitter.com/pepephone/status/436461658601713664', array(
            'oembedParameters' => array('omit_script' => true)
        ));

        $this->assertEquals($info->code, '<blockquote class="twitter-tweet"><p>RT <a href="https://twitter.com/PabloHerreros">@PabloHerreros</a> Pepephone rompe la baraja - <a href="http://t.co/mFn7mcB1vy">http://t.co/mFn7mcB1vy</a></p>&mdash; pepephone (@pepephone) <a href="https://twitter.com/pepephone/status/436461658601713664">February 20, 2014</a></blockquote>');
    }

    public function testImageFile()
    {
        //With no oembed params:
        $info = Embed\Embed::create('http://melihasweettimes.files.wordpress.com/2011/11/dsc01636.jpg');

        $this->assertEquals($info->imageWidth, 1200);
        $this->assertEquals($info->imageHeight, 1600);
        $this->assertEquals($info->type, 'photo');
    }
}
