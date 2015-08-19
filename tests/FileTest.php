<?php
class FileTest extends TestCaseBase
{
    public function testJpg()
    {
        $info = $this->getInfo('http://melihasweettimes.files.wordpress.com/2011/11/dsc01636.jpg');

        $this->assertString($info->imageWidth, 1200);
        $this->assertString($info->imageHeight, 1600);
        $this->assertString($info->type, 'photo');
    }

    public function testPdf()
    {
        $info = $this->getInfo('https://wwwimages2.adobe.com/content/dam/Adobe/en/devnet/pdf/pdfs/adobe_supplement_iso32000.pdf');

        $this->assertString($info->type, 'rich');
        $this->assertString($info->code, '<iframe src="http://docs.google.com/viewer?url=https%3A%2F%2Fwwwimages2.adobe.com%2Fcontent%2Fdam%2FAdobe%2Fen%2Fdevnet%2Fpdf%2Fpdfs%2Fadobe_supplement_iso32000.pdf&amp;embedded=true" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:600px;height:600px;"></iframe>');
        $this->assertString($info->providerUrl, 'https://adobe.com');
    }

    public function testOgg()
    {
        $info = $this->getInfo('https://upload.wikimedia.org/wikipedia/commons/b/b5/I-15bis.ogg');

        $this->assertString($info->type, 'video');
        $this->assertString($info->code, '<video controls><source src="https://upload.wikimedia.org/wikipedia/commons/b/b5/I-15bis.ogg"></video>');
        $this->assertString($info->providerUrl, 'https://wikimedia.org');
    }
}
