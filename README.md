Embed
=====

[![Build Status](https://travis-ci.org/oscarotero/Embed.svg?branch=master)](https://travis-ci.org/oscarotero/Embed)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/oscarotero/Embed/badges/quality-score.png?s=79e37032db280b9795388124c030dcf4309343d1)](https://scrutinizer-ci.com/g/oscarotero/Embed/)

PHP library to get information about any web page (using oembed, opengraph, twitter-cards, scrapping the html, etc). It's compatible with any web service (youtube, vimeo, flickr, instagram, etc) and has adapters to some sites like (archive.org, github, facebook, etc).

Requirements:

* PHP 5.3+
* Curl library installed
* [allow_url_fopen: On](http://php.net/manual/en/filesystem.configuration.php#ini.allow-url-fopen)

Online demo
-----------

http://oscarotero.com/embed/demo

Usage
-----

```php
//Load library (if you don't have composer or any psr-4 compatible loader):
include('src/autoloader.php');

//Load any url:
$info = Embed\Embed::create('https://www.youtube.com/watch?v=PP1xn5wHtxE');

//Get content info

$info->title; //The page title
$info->description; //The page description
$info->url; //The canonical url
$info->type; //The page type (link, video, image, rich)

$info->images; //List of all images found in the page
$info->image; //The image choosen as main image
$info->imageWidth; //The width of the main image
$info->imageHeight; //The height of the main image

$info->code; //The code to embed the image, video, etc
$info->width; //The width of the embed code
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
* request (array): Used to customize the request (see below)

```php
$options = array(
	'getBiggerImage' => true
);

$info = Embed\Embed::create('https://www.youtube.com/watch?v=PP1xn5wHtxE', $options);
```

Customize the request
---------------------

Embed uses the `Embed\RequestResolvers\Curl` class to resolve all requests using the curl library. You can set options to the curl request or create your own implementation creating a class implementing the `Embed\RequestResolvers\RequestResolverInterface`.

The resolver configuration is defined under the "resolver" key in the options array. There is two options:

* class: Your custom class name if you want to use your own implementation
* options: The options passed to the class. If you use the default curl class, the options are the same than the [curl_setopt PHP function](http://php.net/manual/en/function.curl-setopt.php)

```php
//Customize the curl request of the default Embed\RequestResolvers\Curl

$info = Embed\Embed::create('https://www.youtube.com/watch?v=PP1xn5wHtxE', array(
	"resolver" => array(
		"options" => array(
			CURLOPT_USERAGENT => 'My spider',
			CURLOPT_MAXREDIRS => 3
		)
	)
));

//Create your own implementation

$info = Embed\Embed::create('https://www.youtube.com/watch?v=PP1xn5wHtxE', array(
	"resolver" => array(
		"class" => 'My\Custom\RequestResolver'
		"options" => array(
			"option1" => "foo",
			"option2" => "var"
		)
	)
));
```

Do you need help?
-----------------

I can help you in HackHands: https://hackhands.com/oscarotero

Contributors
------------
* https://github.com/oscarotero (creator and maintainer)
* https://github.com/buggedcom
* https://github.com/jasny
