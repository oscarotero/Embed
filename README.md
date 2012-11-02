Embed
=====

PHP library to get info and embed any web page (using oembed, opengraph, twitter cards, etc). It's compatible with the following services:

* Blip
* Chirbit
* Clickthrough
* Collegehumor
* Dailymile
* Dailymotion
* Derpiboo
* Deviantart
* Distrify
* Dotsub
* Embedly
* Flickr
* Github
* Graphicly
* Guardian
* Ifixit
* Imgur
* Instagram
* Jest
* Jsfiddle
* Justin
* Kewego
* Kinomap
* Majorleaguegaming
* Meetup
* Mixcloud
* Mobypicture
* N23hq
* N5min
* Nfb
* Photobucket
* Qik
* Rdio
* Revision3
* Screenr
* Scribd
* Skitch
* Slideshare
* Smugmug
* Soundcloud
* Speakerdeck
* Twitter
* Urtak
* Viddler
* Vimeo
* Wordpress
* Yfrog
* Youtube
* etc...

Requirements:

* PHP 5.3+
* Curl library installed
* A PSR-0 compatible autoloader class

Usage:

```php
//Load a youtube video:

$Url = new Embed\Url('https://www.youtube.com/watch?v=PP1xn5wHtxE');
$Video = Embed\Services\Youtube($Url);

//Get content info

$Video->title;
$Video->description;
$Video->url;
$Video->type;

$Video->code;
$Video->image;
$Video->width;
$Video->height;
$Video->aspectRatio;

$Video->authorName;
$Video->authorUrl;

$Video->providerName;
$Video->providerUrl;
$Video->providerIcon;

//Use the Generic provider to get the generic info

$Url = new Embed\Url('http://php.net/');
$Info = Embed\Services\Generic($Url);

echo $Info->title; // PHP: Hypertext Preprocessor
echo $Info->providerName; // php.net
//etc..

//Detect the provider automatically (if there is not any specific provider, use the generic as fallback)

$WebInfo1 = Embed\Embed::create('https://www.youtube.com/watch?v=PP1xn5wHtxE');
$WebInfo2 = Embed\Embed::create('http://www.vimeo.com/29067223');
$WebInfo2 = Embed\Embed::create('http://google.com');

$WebInfo1->title;
$WebInfo2->title;
```
