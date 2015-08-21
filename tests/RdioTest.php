<?php
class RdioTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.rdio.com/artist/Various_Artists/album/50_Dance_Hits_2015/',
            [
                'title' => '50 Dance Hits 2015',
                'imageWidth' => 400,
                'imageHeight' => 400,
                'type' => 'rich',
            ]
        );
    }
}
