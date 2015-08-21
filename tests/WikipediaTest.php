<?php
class WikipediaTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://en.wikipedia.org/wiki/Albert_Einstein',
            [
                'title' => 'Albert Einstein',
                'description' => "Albert Einstein (/ˈaɪnstaɪn/; German: [ˈalbɐrt ˈaɪnʃtaɪn]; 14 March 1879 – 18 April 1955) was a German-born theoretical physicist. He developed the general theory of relativity, one of the two pillars of modern physics (alongside quantum mechanics). Einstein's work is also known for its influence on the philosophy of science. Einstein is best known in popular culture for his mass–energy equivalence formula E = mc2 (which has been dubbed \"the world's most famous equation\"). He received the 1921 Nobel Prize in Physics for his \"services to theoretical physics\", in particular his discovery of the law of the photoelectric effect, a pivotal step in the evolution of quantum theory. Near the beginning of his career, Einstein thought that Newtonian mechanics was no longer enough to reconcile the laws of classical mechanics with the laws of the electromagnetic field. This led to the development of his special theory of relativity. He realized, however, that the principle of relativity could also be extended to gravitational fields,...",
                'imageWidth' => 3250,
                'imageHeight' => 4333,
                'type' => 'link',
                'providerName' => 'Wikipedia',
                'providerUrl' => 'https://wikipedia.org',
            ]
        );
    }
}
