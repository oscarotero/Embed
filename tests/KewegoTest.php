<?php
class KewegoTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.kewego.es/video/iLyROoaf2vuS.html');

        $this->assertEquals($info->title, 'Una gaviota traviesa roba una cámara mientras graba');
        $this->assertEquals($info->description, 'Divertido vídeo en el que una gaviota se hace con una cámara mientras está grabando.');
        $this->assertEquals($info->code, '<object  id="iLyROoaf2vuS"  type="application/x-shockwave-flash"  data="http://sa.kewego.com/swf/p3/epix.swf"  width="400"  height="300"> <param name="flashVars" value="language_code=es&playerKey=5e3d22b8b739&skinKey=&sig=iLyROoaf2vuS&autostart=false&advertise=1" /> <param name="movie" value="http://sa.kewego.com/swf/p3/epix.swf" /> <param name="allowFullScreen" value="true" /> <param name="allowscriptaccess" value="always" /> <param name="wmode" value="Opaque" /><video poster="" height="300" width="400" preload="none"  controls="controls"></video><script src="http://sa.kewego.com/embed/assets/kplayer-standalone.js"></script><script defer="defer">kitd.html5loader("flash_epix_iLyROoaf2vuS","http://api.kewego.com/video/getHTML5Thumbnail/?playerKey=5e3d22b8b739&sig=iLyROoaf2vuS");</script></object>');
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->authorName, 'zoomines');
        $this->assertEquals($info->providerName, 'kewego');
    }
}
