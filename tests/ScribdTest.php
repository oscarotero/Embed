<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class ScribdTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.scribd.com/doc/110799637/Synthesis-of-Knowledge-Effects-of-Fire-and-Thinning-Treatments-on-Understory-Vegetation-in-Dry-U-S-Forests');

        $this->assertEquals($info->title, 'Synthesis of Knowledge: Effects of Fire and Thinning Treatments on Understory Vegetation in Dry U.S. Forests');
        $this->assertEquals($info->description, "A review of current literature on studies that address effects of prescribed fire and mechanical thinning treatments on understory vegetation, and the effects of prescribed burning on rare, threatened and endangered species. The studies' outcomes are presented in two sets of tables: (1) functional group results, and (2) species-specific results.");
        $this->assertEquals($info->imageWidth, 111);
        $this->assertEquals($info->imageHeight, 142);
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->authorName, 'Joint Fire Science Program');
        $this->assertEquals($info->authorUrl, 'https://www.scribd.com/firesciencegov');
        $this->assertEquals($info->providerName, 'Scribd');
    }
}
