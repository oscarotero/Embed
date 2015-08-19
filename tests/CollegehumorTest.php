<?php
class CollegehumorTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('http://www.collegehumor.com/video/6974337/gluten-free-duck');

        $this->assertString($info->title, 'Gluten Free Duck');
        $this->assertString($info->width, 610);
        $this->assertString($info->height, 343);
        $this->assertString($info->code, '<iframe src="http://www.collegehumor.com/e/6974337" width="610" height="343" frameborder="0" webkitAllowFullScreen allowFullScreen></iframe>');
        $this->assertString($info->type, 'video');
        $this->assertString($info->providerName, 'CollegeHumor');
    }
}
