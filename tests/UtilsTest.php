<?php

use Embed\Utils;

class UtilsTest extends TestCaseBase
{
    public function testSortByProvider()
    {
        $val = [
            [
                'value' => '1',
                'providers' => ['html'],
            ],[
                'value' => '2',
                'providers' => ['opengraph'],
            ],[
                'value' => '2',
                'providers' => ['html'],
            ]
        ];
    }
}
