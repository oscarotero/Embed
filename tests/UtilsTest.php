<?php

use Embed\Utils;

class UtilsTest extends TestCaseBase
{
    public function testSortByProvider()
    {
        $vals = [
            2 => [
                'value' => '2',
                'providers' => ['html'],
            ],
            0 => [
                'value' => '0',
                'providers' => ['opengraph'],
            ],
            1 => [
                'value' => '1',
                'providers' => ['html'],
            ],
        ];

        $first = Utils::getFirstValue($vals);

        $this->assertEquals(2, $first);
    }
}
