Embed
=====

PHP library to get info and embed any web page (using oembed, opengraph, twitter cards, etc). It's compatible with the following services:

* Aljazeera
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
$Video = new Embed\Services\Youtube($Url);

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


//Use the Embedly provider

Embed\Services\Embedly::setApiKey('your_api_key');

$Url = new Embed\Url('http://php.net/');
$Info = new Embed\Services\Embedly($Url);


//Use the Generic provider to get the generic info

$Url = new Embed\Url('http://php.net/');
$Info = new Embed\Services\Generic($Url);


//Autodetect the provider
$Url = new Embed\Url('https://www.youtube.com/watch?v=PP1xn5wHtxE');
$Info = Embed\Embed::create($Url);
```
