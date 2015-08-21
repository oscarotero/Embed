<?php
class ScribdTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.scribd.com/doc/110799637/Synthesis-of-Knowledge-Effects-of-Fire-and-Thinning-Treatments-on-Understory-Vegetation-in-Dry-U-S-Forests',
            [
                'title' => 'Synthesis of Knowledge: Effects of Fire and Thinning Treatments on Understory Vegetation in Dry U.S. Forests',
                'description' => "A review of current literature on studies that address effects of prescribed fire and mechanical thinning treatments on understory vegetation, and the effects of prescribed burning on rare, threatened and endangered species. The studies' outcomes are presented in two sets of tables: (1) functional group results, and (2) species-specific results.",
                'imageWidth' => 111,
                'imageHeight' => 142,
                'type' => 'rich',
                'authorName' => 'Joint Fire Science Program',
                'authorUrl' => 'https://www.scribd.com/firesciencegov',
                'providerName' => 'Scribd',
            ]
        );
    }
}
