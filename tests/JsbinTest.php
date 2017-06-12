<?php

namespace Embed\Tests;

class JsbinTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://output.jsbin.com/vonesu/10',
            [
                'title' => 'JS Bin',
                'type' => 'rich',
                'providerName' => 'jsbin',
                'providerUrl' => 'http://jsbin.com',
                'code' => '<iframe src="http://output.jsbin.com/vonesu/10/embed" width="320" height="240" frameborder="0"></iframe>',
            ]
        );
    }
}
