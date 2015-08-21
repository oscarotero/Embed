<?php
class ArchiveTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://archive.org/details/dn2015-0220_vid',
            [
                'width' => 640,
                'height' => 480,
                'type' => 'video',
                'providerName' => 'Internet Archive',
            ]
        );
    }
}
