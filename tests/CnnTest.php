<?php

namespace Embed\Tests;

class CnnTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://edition.cnn.com/videos/politics/2017/03/17/mcdonalds-tweet-trump-moos-erin-pkg.cnn',
            [
                'title' => "McDonald's tweet called Trump disgusting - CNN Video",
                'code' => '<iframe src="https://fave.api.cnn.io/v1/fav/?video=politics%2F2017%2F03%2F17%2Fmcdonalds-tweet-trump-moos-erin-pkg.cnn&amp;customer=cnn&amp;env=prod" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:416px;height:234px;"></iframe>',
            ]
        );
    }
}
