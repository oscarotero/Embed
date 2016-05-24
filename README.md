# Embed

[![Build Status](https://travis-ci.org/oscarotero/Embed.svg?branch=master)](https://travis-ci.org/oscarotero/Embed)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/oscarotero/Embed/badges/quality-score.png?s=79e37032db280b9795388124c030dcf4309343d1)](https://scrutinizer-ci.com/g/oscarotero/Embed/)
[![Reference Status](https://www.versioneye.com/php/embed:embed/reference_badge.svg?style=flat)](https://www.versioneye.com/php/embed:embed/references)
[![Latest Stable Version](https://poser.pugx.org/embed/embed/v/stable)](https://packagist.org/packages/embed/embed)
[![Total Downloads](https://poser.pugx.org/embed/embed/downloads)](https://packagist.org/packages/embed/embed)
[![Monthly Downloads](https://poser.pugx.org/embed/embed/d/monthly)](https://packagist.org/packages/embed/embed)
[![License](https://poser.pugx.org/embed/embed/license)](https://packagist.org/packages/embed/embed)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/f0beab9f-fe41-47db-8806-373f80c50f9e/big.png)](https://insight.sensiolabs.com/projects/f0beab9f-fe41-47db-8806-373f80c50f9e)

PHP library to get information from any web page (using oembed, opengraph, twitter-cards, scrapping the html, etc). It's compatible with any web service (youtube, vimeo, flickr, instagram, etc) and has adapters to some sites like (archive.org, github, facebook, etc).

Requirements:

* PHP 5.4+
* Curl library installed

If you need PHP 5.3 support, use the 1.x version (but not maintained anymore)

## Online demo

http://oscarotero.com/embed2/demo

## Installation

This package is installable and autoloadable via Composer as [embed/embed](https://packagist.org/packages/embed/embed).

```
$ composer require embed/embed
```

If you don't use composer, you have to download the package and include the autoloader:

```php
include('Embed/src/autoloader.php');
```

## Usage

```php
use Embed\Embed;

//Load any url:
$info = Embed::create('https://www.youtube.com/watch?v=PP1xn5wHtxE');

//Get content info

$info->title; //The page title
$info->description; //The page description
$info->url; //The canonical url
$info->type; //The page type (link, video, image, rich)
$info->tags; //The page keywords (tags)

$info->images; //List of all images found in the page
$info->image; //The image choosen as main image
$info->imageWidth; //The width of the main image
$info->imageHeight; //The height of the main image

$info->code; //The code to embed the image, video, etc
$info->width; //The width of the embed code
$info->height; //The height of the embed code
$info->aspectRatio; //The aspect ratio (width/height)

$info->authorName; //The resource author 
$info->authorUrl; //The author url

$info->providerName; //The provider name of the page (Youtube, Twitter, Instagram, etc)
$info->providerUrl; //The provider url
$info->providerIcons; //All provider icons found in the page
$info->providerIcon; //The icon choosen as main icon

$info->publishedDate; //The published date of the resource
$info->license; //The license url of the resource
$info->linkedData; //The linked-data info (http://json-ld.org/)
```

## Customization

You can set some options using an array as second argument. In this array you can configure the adapters, providers, resolvers, etc.

### The adapter

The adapter is the class that get all information of the page from the providers and choose the best result for each value. For example, a page can provide multiple titles from opengraph, twitter cards, oembed, the `<title>` html element, etc, so the adapter get all this titles and choose the best one.

Embed has an generic adapter called "Webpage" to use in any web but has also some specific adapters for sites like archive.org, facebook, google, github, spotify, etc, that provides information using their own apis, or have any other special issue.

You can configure these adapters and even create your own adapter, that must implement the `Embed\Adapters\AdapterInterface`.


The available options for the adapters are:

* minImageWidth (int): Minimal image width used to choose the main image
* minImageHeight (int): Minimal image height used to choose the main image
* imagesBlacklist (array): Images that you don't want to be used. Could be plain text or [Url](https://github.com/oscarotero/Embed/blob/master/src/Url.php) match pattern.
* getBiggerImage (bool): Choose the bigger image as the main image (instead the first found, that usually is the most relevant).
* getBiggerIcon (bool): The same than getBiggerImage but used to choose the main icon

```php
$config = [
	'adapter' => [
		'class' => 'MyCustomClass', //Your custom adapter

		'config' => [
			'minImageWidth' => 16,
			'minImageHeight' => 16,
			'imagesBlacklist' => null,
			'getBiggerImage' => false,
			'getBiggerIcon' => false,
		]
	]
];
```

### The providers

The providers get the data from different sources. Each source has it's own provider. For example, there is a provider for opengraph, other for twitter cards, for oembed, html, etc. The providers that receive options are:

#### oembed

Used to get data from oembed api if it's available. It accepts two options:

* parameters (array): Extra query parameters to send with the oembed request
* embedlyKey (string): If it's defined, use embed.ly api as fallback oembed provider.
* iframelyKey (string): If it's defined, use iframe.ly api as fallback oembed provider.

#### html

Used to get data directly from the html code of the page:

* maxImages (int): Max number of images fetched from the html code (searching for the `<img>` elements). By default is -1 (no limit). Use 0 to no get images.
* externalImages (bool|array): By default is false, this means that images located in other domains are not allowed. You can set true (allow all) or provide an array of url patterns.

#### google

This provider is used only for google maps, to generate the embed code [using the embed api](https://developers.google.com/maps/documentation/embed/)

* key (string): the key used

#### soundcloud

Used only for soundcloud pages, to get information using its api.

* key (string): to get info from soundcloud API.


### The request resolver

Embed uses the `Embed\RequestResolvers\Curl` class to resolve all requests using the curl library. You can set options to the curl request or use your custom resolver creating a class implementing the `Embed\RequestResolvers\RequestResolverInterface`.

The resolver configuration is defined under the "resolver" key and it has two options:

* class: Your custom class name if you want to use your own implementation
* config: The options passed to the class. If you use the default curl class, the config are the same than the [curl_setopt PHP function](http://php.net/manual/en/function.curl-setopt.php)

```php
// CURL
$config = [
    'resolver' => [
        'class' => 'Embed\\RequestResolvers\\Curl', // The default resolver used

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

// Guzzle (5.x)
$config = [
    'resolver' => [
        'class' => 'Embed\\RequestResolvers\\Guzzle5', // Guzzle5 resolver used

        'config' => [
            // optional: if you need to use your custom Guzzle instance
            'client' => $myGuzzleClient,
        ]
    ]
];
```

[You can see here](https://github.com/oscarotero/Embed/tree/master/src/RequestResolvers) the RequestResolvers included.

### Image info

To check the images and get their mimetype and dimmensions, we have the class `Embed\ImageInfo\Curl`. This class uses curl to make request, get the first bytes to get the image type and dimmensions and close the connection. So the image wont be downloaded entirely, just until the downloaded data is enought to get this information.

Like the resolver class, you can provide your own image class (it must implement the `Embed\ImageInfo\ImageInfoInterface`) and/or change the configuration. The available options are the same:

* class: Your custom class name if you want to use your own implementation
* config: The options passed to the class. If you use the default curl class, the config are the same than the [curl_setopt PHP function](http://php.net/manual/en/function.curl-setopt.php)


```php
//CURL
$config = [
    'image' => [
        'class' => 'Embed\\ImageInfo\\Curl', //The default imageInfo used

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

// Guzzle (5.x)
$config = [
    'image' => [
        'class' => 'Embed\\ImageInfo\\Guzzle5',

        'config' => [
            'client' => $myGuzzleClient,
        ]
    ]
];
```

[You can see here](https://github.com/oscarotero/Embed/tree/master/src/ImageInfo) the ImageInfo implementations included.


### Full configuration example


```php
use Embed\Embed;

$config = [
    'adapter' => [
        'config' => [
            'minImageWidth' => 16,
            'minImageHeight' => 16,
            'imagesBlacklist' => [
                'http://example.com/full/path/to/image.jpg',
                'http?://test.*/*.png/',
                '*/bad_image.gif'
            ]
        ]
    ],
    'providers' => [
        'oembed' => [
            'parameters' => [],
            'embedlyKey' => null
        ],
        'html' => [
            'maxImages' => 3
        ],
        'facebook' => [
            'key' => 'our-access-token'
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

//To use it:
$info = Embed::create('https://www.youtube.com/watch?v=PP1xn5wHtxE', $config);
```

### Access to more data

As said before, the adapter get the data from all providers and choose the best values. But you can get the data returned by a specific provider:

```php
use Embed\Embed;

//Get the info
$info = Embed::create('https://www.youtube.com/watch?v=PP1xn5wHtxE');

//Get the oembed provider
$oembed = $info->getProvider('oembed');

//Get the oembed title:
echo $oembed->getTitle();

//Get any value returned by oembed api
echo $oembed->bag->get('author_name');
```

In versions >= 2.7, you can access also to the data returned by the requests:

```php
use Embed\Embed;

//Get the info
$info = Embed::create('https://www.youtube.com/watch?v=PP1xn5wHtxE');

//Get the request instance
$request = $info->getRequest();

//Get the info returned by curl
$request->getRequestInfo();

//Get all http headers
$request->getHeaders();

//Get all images requests
foreach ($info->getImagesRequests() as $url => $request) {
    $request->getHeaders();
}
```

## Donations

If this library is useful for you, consider to donate to the author.

[Buy me a beer :beer:](https://www.paypal.me/oscarotero)

Thanks in advance!
