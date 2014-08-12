Embed
=====

[![Build Status](https://travis-ci.org/oscarotero/Embed.svg?branch=master)](https://travis-ci.org/oscarotero/Embed)
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
$info = Embed\Embed::create('https://www.youtube.com/watch?v=PP1xn5wHtxE');

//Get content info

$info->title; //The page title
$info->description; //The page description
$info->url; //The canonical url
$info->type; //The page type (link, video, image, rich)

$info->images; //List of all images found in the page
$info->image; //The image choosen as main image
$info->imageWidth; //The with of the main image
$info->imageHeight; //The height  of the main image

$info->code; //The code to embed the image, video, etc
$info->width; //The with of the embed code
$info->height; //The height of the embed code
$info->aspectRatio; //The aspect ratio (width/height)

$info->authorName; //The (video/article/image/whatever) author 
$info->authorUrl; //The author url

$info->providerName; //The provider name of the page (youtube, twitter, instagram, etc)
$info->providerUrl; //The provider url
$info->providerIcons; //All provider icons found in the page
$info->providerIcon; //The icon choosen as main icon
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
* oembedParameters (array): Extra GET parameters to the oembed requests.
* facebookProvider (bool): If it's true, the facebook provider will be used to get the page information, that uses the facebook scrapping. By default is false because reduce the number of requests and facebook scrapping not always returns right results.

```php
$options = array(
	'getBiggerImage' => true
);

$info = Embed\Embed::create('https://www.youtube.com/watch?v=PP1xn5wHtxE', $options);
```

Customize the request
---------------------

Embed provides a RequestResolvers\Curl class to resolve all requests using the curl library. You can create your own request resolver class creating a class implementing the RequestResolverInterface.

```php
//Set your own request resolver class:
Embed\Request::setDefaultResolver('MyCustomResolverClass');
```

You can configure also the following options of the default request resolver:

* userAgent: User agent used in all requests. By default is "Embed PHP Library"
* maxRedirections: The maximum amount of HTTP redirections to follow. By default is 20
* connectionTimeout: The number of seconds to wait while trying to connect. Use 0 to wait indefinitely. By default is 10
* timeout: The maximum number of seconds to allow execute the request. By default is 10

To set a new configuration:

```php
Embed\Request::setResolverConfig(array(
	'userAgent' => 'My spider',
	'connectionTimeout' => 0
));
```

Or you can set your custom resolver class and the configuration at the same time:

```php
Embed\Request::setDefaultResolver('MyCustomResolverClass', array(
	'userAgent' => 'My spider',
	'connectionTimeout' => 0
));
```


Online demo
-----------

http://oscarotero.com/embed/demo

Contributors
------------
* https://github.com/oscarotero (creator and maintainer)
* https://github.com/buggedcom
* https://github.com/jasny
