<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class FileTest extends PHPUnit_Framework_TestCase
{
    public function testJpg()
    {
        $info = Embed\Embed::create('http://melihasweettimes.files.wordpress.com/2011/11/dsc01636.jpg');

        $this->assertEquals($info->imageWidth, 1200);
        $this->assertEquals($info->imageHeight, 1600);
        $this->assertEquals($info->type, 'photo');
    }

    public function testPdf()
    {
        $info = Embed\Embed::create('https://wwwimages2.adobe.com/content/dam/Adobe/en/devnet/pdf/pdfs/adobe_supplement_iso32000.pdf');

        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->code, '<iframe src="http://docs.google.com/viewer?url=https%3A%2F%2Fwwwimages2.adobe.com%2Fcontent%2Fdam%2FAdobe%2Fen%2Fdevnet%2Fpdf%2Fpdfs%2Fadobe_supplement_iso32000.pdf&amp;embedded=true" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:600px;height:600px;"></iframe>');
        $this->assertEquals($info->providerUrl, 'https://adobe.com');
    }

    public function testOgg()
    {
        $info = Embed\Embed::create('https://upload.wikimedia.org/wikipedia/commons/b/b5/I-15bis.ogg');

        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->code, '<video controls><source src="https://upload.wikimedia.org/wikipedia/commons/b/b5/I-15bis.ogg"></video>');
        $this->assertEquals($info->providerUrl, 'https://wikimedia.org');
    }
}
