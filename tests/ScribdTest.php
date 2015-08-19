<?php
class ScribdTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('http://www.scribd.com/doc/110799637/Synthesis-of-Knowledge-Effects-of-Fire-and-Thinning-Treatments-on-Understory-Vegetation-in-Dry-U-S-Forests');

        $this->assertString($info->title, 'Synthesis of Knowledge: Effects of Fire and Thinning Treatments on Understory Vegetation in Dry U.S. Forests');
        $this->assertString($info->description, "A review of current literature on studies that address effects of prescribed fire and mechanical thinning treatments on understory vegetation, and the effects of prescribed burning on rare, threatened and endangered species. The studies' outcomes are presented in two sets of tables: (1) functional group results, and (2) species-specific results.");
        $this->assertString($info->imageWidth, 111);
        $this->assertString($info->imageHeight, 142);
        $this->assertString($info->type, 'rich');
        $this->assertString($info->authorName, 'Joint Fire Science Program');
        $this->assertString($info->authorUrl, 'https://www.scribd.com/firesciencegov');
        $this->assertString($info->providerName, 'Scribd');
    }
}
