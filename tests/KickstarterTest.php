<?php
class KickstarterTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('https://www.kickstarter.com/projects/1452363698/good-seed-craft-veggie-burgers');

        $this->assertString($info->title, "Good Seed Craft Veggie Burgers");
        $this->assertString($info->description, 'Nutrient-dense Real Food! Good Seed hemp patties transform the veggie burger with bold flavor blends & sprouted superfood ingredients.');
        $this->assertString($info->width, 480);
        $this->assertString($info->height, 360);
        $this->assertString($info->authorName, 'Oliver Ponce and Erin Shotwell');
        $this->assertString($info->providerName, 'Kickstarter');
    }
}
