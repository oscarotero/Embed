<?php
class ChirbitTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://chirb.it/7A9L9B',
            [
                'title' => 'Chirbit [nvanderklippe] Encana conference call',
                'width' => 398,
                'height' => 120,
                'type' => 'rich',
                'providerName' => 'Chirbit',
            ]
        );
    }
}
