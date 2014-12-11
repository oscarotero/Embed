<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class TwitterTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $info = Embed\Embed::create('https://twitter.com/pepephone/status/436461658601713664');

        $this->assertEquals($info->code, '<blockquote class="twitter-tweet"><p>RT <a href="https://twitter.com/PabloHerreros">@PabloHerreros</a> Pepephone rompe la baraja - <a href="http://t.co/mFn7mcB1vy">http://t.co/mFn7mcB1vy</a></p>&mdash; pepephone (@pepephone) <a href="https://twitter.com/pepephone/status/436461658601713664">February 20, 2014</a></blockquote>'."\n".'<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>');
    }

    public function testOmitScript()
    {
        $info = Embed\Embed::create('https://twitter.com/pepephone/status/436461658601713664', array(
            'oembedParameters' => array('omit_script' => true)
        ));

        $this->assertEquals($info->code, '<blockquote class="twitter-tweet"><p>RT <a href="https://twitter.com/PabloHerreros">@PabloHerreros</a> Pepephone rompe la baraja - <a href="http://t.co/mFn7mcB1vy">http://t.co/mFn7mcB1vy</a></p>&mdash; pepephone (@pepephone) <a href="https://twitter.com/pepephone/status/436461658601713664">February 20, 2014</a></blockquote>');
    }
}
