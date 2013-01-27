Embed
=====

PHP library to get info and embed any web page (using oembed, opengraph, twitter-cards, etc). It's compatible with any web service (youtube, vimeo, flickr, instagram, etc).
Has adapters to some webpages like (archive.org, github, deviantart, etc).

Requirements:

* PHP 5.3+
* Curl library installed
* A PSR-0 compatible autoloader class

Usage:

```php
//Load a youtube video:

$Url = new Embed\Url('https://www.youtube.com/watch?v=PP1xn5wHtxE');
$Info = Embed\Embed::create($Url);

//Get content info

$Info->title;
$Info->description;
$Info->url;
$Info->type;

$Info->code;
$Info->image;
$Info->width;
$Info->height;
$Info->aspectRatio;

$Info->authorName;
$Info->authorUrl;

$Info->providerName;
$Info->providerUrl;
$Info->providerIcon;
```
