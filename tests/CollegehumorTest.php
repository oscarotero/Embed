<?php
class CollegehumorTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.collegehumor.com/video/6974337/gluten-free-duck');

        $this->assertEquals($info->title, 'Gluten Free Duck');
        $this->assertEquals($info->width, 610);
        $this->assertEquals($info->height, 343);
        $this->assertEquals($info->code, '<iframe src="http://www.collegehumor.com/e/6974337" width="610" height="343" frameborder="0" webkitAllowFullScreen allowFullScreen></iframe>');
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->providerName, 'CollegeHumor');
    }
}
