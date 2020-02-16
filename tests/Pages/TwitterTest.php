<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class TwitterTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://twitter.com/pepephone/status/436461658601713664',
            [
                'code' => '<blockquote class="twitter-tweet"><p lang="es" dir="ltr">RT <a href="https://twitter.com/PabloHerreros?ref_src=twsrc%5Etfw">@PabloHerreros</a> Pepephone rompe la baraja - <a href="http://t.co/mFn7mcB1vy">http://t.co/mFn7mcB1vy</a></p>&mdash; Pepephone (@pepephone) <a href="https://twitter.com/pepephone/status/436461658601713664?ref_src=twsrc%5Etfw">February 20, 2014</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>',
            ]
        );
    }
}
