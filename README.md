Embed
=====

[![Build Status](https://travis-ci.org/oscarotero/Embed.png?branch=v1.3.3)](https://travis-ci.org/oscarotero/Embed)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/oscarotero/Embed/badges/quality-score.png?s=79e37032db280b9795388124c030dcf4309343d1)](https://scrutinizer-ci.com/g/oscarotero/Embed/)

PHP library to get info and embed any web page (using oembed, opengraph, twitter-cards, etc). It's compatible with any web service (youtube, vimeo, flickr, instagram, etc).
Has adapters to some webpages like (archive.org, github, deviantart, etc).

Requirements:

* PHP 5.3+
* Curl library installed
* A PSR-0 compatible autoloader class

Usage:

```php
//Load library (if you don't have composer or any psr-0 compatible loader):
include('Embed/autoloader.php');

//Load any url:
$Url = new Embed\Url('https://www.youtube.com/watch?v=PP1xn5wHtxE');
$Info = Embed\Embed::create($Url);

//Get content info

$Info->title;
$Info->description;
$Info->url;
$Info->type;

$Info->images;
$Info->image;
$Info->imageWidth;
$Info->imageHeight;

$Info->code;
$Info->width;
$Info->height;
$Info->aspectRatio;

$Info->authorName;
$Info->authorUrl;

$Info->providerIcons;
$Info->providerIcon;
$Info->providerName;
$Info->providerUrl;
```

Available options
-----------------

* minImageWidth (int): Minimal image width used to choose the main image
* minImageHeight (int): Minimal image height used to choose the main image
* getBiggerImage (bool): Returns the bigger image as the main image (instead the first found). This can make the request slower because it need to check the size of all images.
* getBiggerIcon (bool): The same than getBiggerImage but used to choose the main icon
* facebookAccessToken (string): Used to get info from facebook pages when these pages are not public and a access token is required
* soundcloudClientId (string): Used to get info of links from soundcloud. By default, it uses "YOUR_CLIENT_ID" that its a valid client id :P
* embedlyKey (string): If it's defined, get info from embedly service (only for know supported services and if the page doesn't have its own oembed service)

```php
$options = array(
	'getBiggerImage' => true
);

$Url = new Embed\Url('https://www.youtube.com/watch?v=PP1xn5wHtxE');

$Info = Embed\Embed::create($Url, $options);
```


Online demo
-----------

http://oscarotero.com/embed/test.php

Contributors
------------
* https://github.com/oscarotero (creator and maintainer)
* https://github.com/buggedcom
* https://github.com/jasny
