<?php

namespace Embed\Tests;

class SnipplrTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://snipplr.com/view/72914/better-html-5-basic-starter-template',
            [
                'title' => 'Better HTML 5 basic starter template - HTML - Snipplr Social Snippet Repository',
                'type' => 'rich',
                'providerName' => 'snipplr',
                'providerUrl' => 'http://snipplr.com',
                'code' => '<div id="snipplr_embed_72914" class="snipplr_embed"><a target_"blank" href="http://snipplr.com/view/72914">View this snippet</a> on Snipplr</div><script type="text/javascript" src="http://snipplr.com/js/embed.js"></script><script type="text/javascript" src="http://snipplr.com/json/72914"></script>',
            ]
        );
    }
}
