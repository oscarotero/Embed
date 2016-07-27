<?php

class JsbinTest extends TestCaseBase
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
                'code' => '<iframe src="http://jsbin.com/vonesu/10/embed" width="640" height="480" frameborder="0"></iframe>',
            ]
        );
    }
}
