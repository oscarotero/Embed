<?php
class WikipediaTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('https://en.wikipedia.org/wiki/Albert_Einstein');

        $this->assertEquals($info->title, 'Albert Einstein');
        $this->assertEquals($info->description, "Albert Einstein (/ˈælbərt ˈaɪnʃtaɪn/; German: [ˈalbɐrt ˈaɪnʃtaɪn]; 14 March 1879&#160;– 18 April 1955) was a German-born theoretical physicist. He developed the general theory of relativity, one of the two pillars of modern physics (alongside quantum mechanics). Einstein's work is also known for its influence on the philosophy of science. Einstein is best known in popular culture for his mass–energy equivalence formula E = mc2 (which has been dubbed \"the world's most famous equation\"). He received the 1921 Nobel Prize in Physics for his \"services to theoretical physics\", in particular his discovery of the law of the photoelectric effect, a pivotal step in the evolution of quantum theory.\nNear the beginning of his career, Einstein thought that Newtonian mechanics was no longer enough...");
        $this->assertEquals($info->imageWidth, 3250);
        $this->assertEquals($info->imageHeight, 4333);
        $this->assertEquals($info->type, 'link');
        $this->assertEquals($info->providerName, 'Wikipedia');
        $this->assertEquals($info->providerUrl, 'https://wikipedia.org');
    }
}
