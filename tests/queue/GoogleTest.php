<?php
declare(strict_types = 1);

namespace Embed\Tests;

class GoogleTest extends AbstractTestCase
{
    public function testMap()
    {
        $this->assertEmbed(
            'https://www.google.es/maps/place/Tordoia,+A+Coru%C3%B1a/@43.0871207,-8.5710004,12z/data=!3m1!4b1!4m2!3m1!1s0xd2ef4006f1ef489:0x404f58273ca55a0',
            [
                'title' => 'Tordoia, A Coruña',
                'type' => 'link',
                'providerName' => 'Google Maps',
            ]
        );
    }

    public function testDrive()
    {
        $this->assertEmbed(
            'https://drive.google.com/file/d/0B2rwN8wAbVSWbmFJdUdnV2VSTTg/view',
            [
                'title' => 'Entrevista_Rianxo_RadioFusion_150724.mp3',
                'type' => 'rich',
                'code' => '<iframe src="https://drive.google.com/file/d/0B2rwN8wAbVSWbmFJdUdnV2VSTTg/preview" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:600px;height:400px;"></iframe>',
                'providerName' => 'Google Docs',
            ]
        );
    }

    public function testCalendar()
    {
        $this->assertEmbed(
            'https://calendar.google.com/calendar/embed?src=spain__es%40holiday.calendar.google.com&ctz=Europe/Madrid',
            [
                'title' => 'Festivos en España',
                'type' => 'rich',
                'code' => '<iframe src="https://calendar.google.com/calendar/embed?src=spain__es%40holiday.calendar.google.com&amp;ctz=Europe%2FMadrid" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:600px;height:400px;"></iframe>',
                'providerName' => 'google',
            ]
        );
    }
}
