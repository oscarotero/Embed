Embed
=====

[![Build Status](https://travis-ci.org/oscarotero/Embed.svg?branch=master)](https://travis-ci.org/oscarotero/Embed)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/oscarotero/Embed/badges/quality-score.png?s=79e37032db280b9795388124c030dcf4309343d1)](https://scrutinizer-ci.com/g/oscarotero/Embed/)

PHP library to get information from any web page (using oembed, opengraph, twitter-cards, scrapping the html, etc). It's compatible with any web service (youtube, vimeo, flickr, instagram, etc) and has adapters to some sites like (archive.org, github, facebook, etc).

Requirements:

* PHP 5.4+
* Curl library installed


If you need PHP 5.3 support, use the 1.x version
------------------------------------------------

Online demo
-----------

http://oscarotero.com/embed2/demo

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

Customization
-------------

You can set some options using an array as second argument. In this array you can configurate the adapters, providers, resolvers, etc.

### The adapter

The adapter is the class that get all information of the page from the providers and choose the best result for each value. For example, a page can provide multiple titles from opengraph, twitter cards, oembed, the `<title>` tag, etc, so the adapter get all this titles and choose the best one.

Embed has an generic adapter called "Webpage" to use in any web but has also some specific adapters for sites like archive.org, facebook, google, github, spotify, etc, that provides information using their own apis, or have any other special issue.

You can configure these adapters and even create your own adapter, that must implement the `Embed\Adapters\AdapterInterface`.


The available options for the adapters are:

* minImageWidth (int): Minimal image width used to choose the main image
* minImageHeight (int): Minimal image height used to choose the main image
* getBiggerImage (bool): Choose the bigger image as the main image (instead the first found, that usually is the most relevant).
* getBiggerIcon (bool): The same than getBiggerImage but used to choose the main icon
* facebookKey (string): Used only in Facebook adapter, to get info from facebook pages when these pages are not public and a access token is required
* soundcloudKey (string): Used in Soundcloud adapter, to get info from soundcloud. By default, it uses "YOUR_CLIENT_ID" that its a valid client id :P

```php
$config = [
	'adapter' => [
		'class' => 'MyCustomClass', //Your custom adapter

		'config' => [
			'minImageWidth' => 16,
            'minImageHeight' => 16,
            'getBiggerImage' => false,
            'getBiggerIcon' => false,
            'facebookKey' => null,
            'soundcloudKey' => null,
		]
    ]
];
```

### The providers

The providers get the data from different sources. Each source has it's own provider. For example, there are providers for open graph, twitter cards, oembed, dc terms, sailthru, html, etc. Currently two providers receives options: oembed and html. The availabe options are:

oembed:

* parameters (array): Extra query parameters to send with the oembed request
* embedlyKey (string): If it's defined and the page has not its own oembed service, use the embedly api.

html:

* maxImages (int): Max number of images fetched from the html code. By default is -1 (no limit). Use 0 to no get images.


```php
$config = [
    'providers' => [
        'oembed' => [
            'parameters' => [],
            'embedlyKey' => null
        ],
        'html' => [
            'maxImages' => -1
        ]
    ]
];
```

### The request resolver

Embed uses the `Embed\RequestResolvers\Curl` class to resolve all requests using the curl library. You can set options to the curl request or use your custom resolver creating a class implementing the `Embed\RequestResolvers\RequestResolverInterface`.

The resolver configuration is defined under the "resolver" key and it has two options:

* class: Your custom class name if you want to use your own implementation
* config: The options passed to the class. If you use the default curl class, the config are the same than the [curl_setopt PHP function](http://php.net/manual/en/function.curl-setopt.php)

```php
$config = [
    'resolver' => [
        'class' => 'Embed\\RequestResolvers\\Curl' //The default resolver used

        'config' => [
            CURLOPT_MAXREDIRS => 20,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_ENCODING => '',
            CURLOPT_AUTOREFERER => true,
            CURLOPT_USERAGENT => 'Embed PHP Library',
            CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
        ]
    ]
];
```

### Image info

To check the images and get their mimetype and dimmensions, we have the class `Embed\ImageInfo\Curl`. This class uses curl to make request, get the first bytes to get the image type and dimmensions and close the connection. So the image wont be downloaded entirely, just until the downloaded data is enought to get this information.

Like the resolver class, you can provide your own image class (it must implement the `Embed\ImageInfo\ImageInfoInterface`) and/or change the configuration. The available options are the same:

* class: Your custom class name if you want to use your own implementation
* config: The options passed to the class. If you use the default curl class, the config are the same than the [curl_setopt PHP function](http://php.net/manual/en/function.curl-setopt.php)


```php
$config = [
    'image' => [
        'class' => 'Embed\\ImageInfo\\Curl' //The default imageInfo used

        'config' => [
            CURLOPT_MAXREDIRS => 20,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_ENCODING => '',
            CURLOPT_AUTOREFERER => true,
            CURLOPT_USERAGENT => 'Embed PHP Library',
            CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
        ]
    ]
];
```

### Example

```php
$config = [
	'adapter' => [
		'config' => [
			'minImageWidth' => 16,
            'minImageHeight' => 16,
		]
	],
    'providers' => [
        'html' => [
            'maxImages' => 3
        ]
    ],
    'resolver' => [
        'config' => [
            CURLOPT_USERAGENT => 'My spider',
            CURLOPT_MAXREDIRS => 3
        ]
    ]
	'image' => [
		'class' => 'App\\MyImageInfoClass'
	]
];
```

Do you need help?
-----------------

I can help you in HackHands: https://hackhands.com/oscarotero

Contributors
------------
* https://github.com/oscarotero (creator and maintainer)
* https://github.com/buggedcom
* https://github.com/jasny
