<?php
class FileTest extends TestCaseBase
{
    public function testJpg()
    {
        $this->assertEmbed(
            'http://melihasweettimes.files.wordpress.com/2011/11/dsc01636.jpg',
            [
                'imageWidth' => 1200,
                'imageHeight' => 1600,
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
            'https://upload.wikimedia.org/wikipedia/commons/b/b5/I-15bis.ogg',
            [
                'type' => 'video',
                'code' => '<video controls><source src="https://upload.wikimedia.org/wikipedia/commons/b/b5/I-15bis.ogg"></video>',
                'providerUrl' => 'https://wikimedia.org',
            ]
        );
    }
}
