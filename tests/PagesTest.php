<?php
declare(strict_types = 1);

namespace Embed\Tests;

class PagesTest extends PagesTestCase
{
    /**
     * 0 = Read from cache (generate the files the first time)
     * 1 = Read from net without override the cache files
     * 2 = Read from net and override the cache files
     */
    const CACHE = 0;

    /**
     * 0 = Do not override the fixtures
     * 1 = Override the fixtures
     */
    const FIXTURES = 0;

    public function testPages()
    {
        $this->assertEmbed('https://www.abanca.com/gl');
        $this->assertEmbed('https://animoto.com/play/GjsJ1gu0WDRfr4pGw12xZQ');
        $this->assertEmbed('http://live.amcharts.com/czNjJ');
        $this->assertEmbed('https://www.aol.com/video/view/pile-of-recovering-foster-kittens-is-purrfect/595fe75985eb42109b69bedb/');
        $this->assertEmbed('https://archive.org/details/dn2015-0220_vid');
        $this->assertEmbed('https://archive.org/details/librivoxaudio');
        $this->assertEmbed('http://jeanjean.bandcamp.com/track/coquin-l-l-phant');
        $this->assertEmbed('http://play.cadenaser.com/audio/001RD010000004275766/');
        $this->assertEmbed('http://chirb.it/7A9L9B');
        $this->assertEmbed('http://codepen.io/Zhouzi/pen/JoRazP');
        $this->assertEmbed('http://www.dailymotion.com/video/xy0wd');
        $this->assertEmbed('http://www.deviantart.com/art/Misty-510056679');
        $this->assertEmbed('http://pachunka.deviantart.com/art/Cope-145564099');
        $this->assertEmbed('http://www.hookem.com/story/texas-shortstop-joe-baker-arrested-public-intoxication/');
        $this->assertEmbed('https://ideone.com/Whjntg');
        $this->assertEmbed('https://imageshack.com/i/ip7wO0v7j');
        $this->assertEmbed('http://i.imgur.com/X6rkCc5.jpg');
        $this->assertEmbed('https://infogr.am/7743c36a-f3ca-4465-9a80-a8abbd5d8dc4');
        $this->assertEmbed('http://instagram.com/p/ySl7G9tO_q/');
        $this->assertEmbed('https://www.instagram.com/p/ySl7G9tO_q/');
        $this->assertEmbed('http://output.jsbin.com/vonesu/10');
        $this->assertEmbed('http://jsfiddle.net/zhm5rjnz/');
        $this->assertEmbed('https://www.kickstarter.com/projects/1452363698/good-seed-craft-veggie-burgers');
        $this->assertEmbed('https://www.meetup.com/es/GPUL-Labs/events/248885422/');
        $this->assertEmbed('http://www.23hq.com/Zzleeper/photo/16600737');
        $this->assertEmbed('https://500px.com/photo/138251239/taganay-park-by-daniel-kordan');
        $this->assertEmbed('https://pastebin.com/d4biUtRm');
        $this->assertEmbed('http://media.photobucket.com/user/Ignwar/media/Album%20Deserts/MoonriseMonumentValleyUtah.jpg.html?filters[term]=sunsets&filters[primary]=images');
        $this->assertEmbed('https://www.pinterest.com/pin/106890191127977979/');
        $this->assertEmbed('http://www.politico.com/story/2013/12/presidents-barack-obama-george-w-bush-second-term-101314.html');
        $this->assertEmbed('http://polldaddy.com/poll/7012505/');
        $this->assertEmbed('https://www.reddit.com/r/investing/comments/7pfpeq/buffett_on_cyrptocurrencies_i_can_say_almost_with/');
        $this->assertEmbed('http://sassmeister.com/gist/1122e441f0434ec6eb2a');
        $this->assertEmbed('http://www.scribd.com/doc/110799637/Synthesis-of-Knowledge-Effects-of-Fire-and-Thinning-Treatments-on-Understory-Vegetation-in-Dry-U-S-Forests');
        $this->assertEmbed('http://slides.com/alexwalker/responsive-svg/');
        $this->assertEmbed('http://snipplr.com/view/72914/better-html-5-basic-starter-template');
        $this->assertEmbed('http://www.spreaker.com/user/angelclark/angel-clark-ice-cream-tocos');
        $this->assertEmbed('http://www.ted.com/talks/george_monbiot_for_more_wonder_rewild_the_world?language=en#t-689901');
        $this->assertEmbed('http://he-who-photographs-rather-ok.tumblr.com/post/165326273724');
        $this->assertEmbed('http://www.ustream.tv/channel/red-shoes-billiards-60803-camera-1');
        $this->assertEmbed('http://www.viddler.com/v/bdce8c7');
        $this->assertEmbed('https://vimeo.com/235352744');
        $this->assertEmbed('https://en.wikipedia.org/wiki/Albert_Einstein');
        $this->assertEmbed('http://www.wired.com/?p=2064839');
        $this->assertEmbed('http://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/');
    }

    public function testFlickr()
    {
        $this->assertEmbed('https://www.flickr.com/photos/desescribir/sets/72157650686499888');
        $this->assertEmbed('https://www.flickr.com/photos/desescribir');
    }

    public function testFacebook()
    {
        $this->assertEmbed('https://www.facebook.com/permalink.php?story_fbid=827163017327807&id=149460691764713');
        $this->assertEmbed('https://www.facebook.com/acolono/videos/10154107990797381/');
    }

    public function testGithub()
    {
        $this->assertEmbed('https://gist.github.com/oscarotero/7749998');
        $this->assertEmbed('https://github.com/benbalter/dc-wifi-social/blob/master/bars.geojson');
        $this->assertEmbed('https://github.com/skalnik/secret-bear-clip/blob/master/stl/clip.stl');
    }

    public function testGoogle()
    {
        $this->assertEmbed('https://www.google.es/maps/place/Tordoia,+A+Coru%C3%B1a/@43.0871207,-8.5710004,12z/data=!3m1!4b1!4m2!3m1!1s0xd2ef4006f1ef489:0x404f58273ca55a0');
        $this->assertEmbed('https://drive.google.com/file/d/0B2rwN8wAbVSWbmFJdUdnV2VSTTg/view');
        $this->assertEmbed('https://calendar.google.com/calendar/embed?src=spain__es%40holiday.calendar.google.com&ctz=Europe/Madrid');
    }

    public function testSoundCloud()
    {
        $this->assertEmbed('https://soundcloud.com/zedsdead/zeds-dead-twin-shadow-lost-you-feat-dangelo-lacy');
        $this->assertEmbed('https://soundcloud.com/bruceneilmusic');
        $this->assertEmbed('https://soundcloud.com/ididthat-1/lowe-ct-cape-times-world-cup');
    }

    public function testSpotify()
    {
        $this->assertEmbed('https://play.spotify.com/album/7s66wU1XJ2NsUuWM2NKiUV');
        $this->assertEmbed('https://open.spotify.com/album/7s66wU1XJ2NsUuWM2NKiUV');
    }

    public function testTwitch()
    {
        $this->assertEmbed('https://www.twitch.tv/videos/72749628');
    }

    public function testTwitter()
    {
        $this->assertEmbed('https://twitter.com/pepephone/status/436461658601713664');
    }

    public function testYoutube()
    {
        $this->assertEmbed('http://www.youtube.com/watch?v=eiHXASgRTcA');
        $this->assertEmbed('http://youtu.be/eiHXASgRTcA');
        $this->assertEmbed('https://www.youtube.com/playlist?list=PL4qTakKkQATKOyZPJG_cAMnRtF7fAIdST');
    }
}
