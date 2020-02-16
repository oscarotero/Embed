<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class JsbinTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://output.jsbin.com/vonesu/10',
            [
                'title' => 'JS Bin',
                'providerName' => 'Jsbin',
                'providerUrl' => 'http://output.jsbin.com',
                'code' => '<iframe src="http://output.jsbin.com/vonesu/10" width="320" height="240" frameborder="0"></iframe>',
            ]
        );
    }
}
