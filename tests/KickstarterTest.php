<?php
class KickstarterTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('https://www.kickstarter.com/projects/1452363698/good-seed-craft-veggie-burgers');

        $this->assertEquals($info->title, "Good Seed Craft Veggie Burgers");
        $this->assertEquals($info->description, 'Nutrient-dense Real Food! Good Seed hemp patties transform the veggie burger with bold flavor blends & sprouted superfood ingredients.');
        $this->assertEquals($info->width, 480);
        $this->assertEquals($info->height, 360);
        $this->assertEquals($info->authorName, 'Oliver Ponce and Erin Shotwell');
        $this->assertEquals($info->providerName, 'Kickstarter');
    }
}
