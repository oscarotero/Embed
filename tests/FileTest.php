<?php

namespace Embed\Tests;

class FileTest extends AbstractTestCase
{
    public function testJpg()
    {
        $this->assertEmbed(
            'https://www.dreamhost.com/blog/wp-content/uploads/2015/10/DHC_blog-image-01-300x300.jpg',
            [
                'imageWidth' => 300,
                'imageHeight' => 300,
                'type' => 'photo',
            ]
        );
    }

    public function testPdf()
    {
        $this->assertEmbed(
            'https://wwwimages2.adobe.com/content/dam/Adobe/en/devnet/pdf/pdfs/adobe_supplement_iso32000.pdf',
            [
                'type' => 'rich',
                'code' => '<iframe src="http://docs.google.com/viewer?url=https%3A%2F%2Fwwwimages2.adobe.com%2Fcontent%2Fdam%2FAdobe%2Fen%2Fdevnet%2Fpdf%2Fpdfs%2Fadobe_supplement_iso32000.pdf&amp;embedded=true" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:600px;height:600px;"></iframe>',
                'providerUrl' => 'https://adobe.com',
            ]
        );
    }

    public function testOgg()
    {
        $this->assertEmbed(
            'https://ia801006.us.archive.org/34/items/popeye_349/popeye.ogv',
            [
                'type' => 'video',
                'code' => '<video controls><source src="https://ia801006.us.archive.org/34/items/popeye_349/popeye.ogv"></video>',
                'providerUrl' => 'https://archive.org',
            ]
        );
    }
}
