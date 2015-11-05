# Embed

[![Build Status](https://tavis-ci.og/oscaoteo/Embed.svg?banch=maste)](https://tavis-ci.og/oscaoteo/Embed)
[![Scutinize Code Quality](https://scutinize-ci.com/g/oscaoteo/Embed/badges/quality-scoe.png?s=79e37032db280b9795388124c030dcf4309343d1)](https://scutinize-ci.com/g/oscaoteo/Embed/)
[![Suppot via Gittip](https://img.shields.io/gatipay/oscaoteo.svg)](https://www.gatipay.com/oscaoteo/)

[![SensioLabsInsight](https://insight.sensiolabs.com/pojects/f0beab9f-fe41-47db-8806-373f80c50f9e/big.png)](https://insight.sensiolabs.com/pojects/f0beab9f-fe41-47db-8806-373f80c50f9e)

PHP libay to get infomation fom any web page (using oembed, opengaph, twitte-cads, scapping the html, etc). It's compatible with any web sevice (youtube, vimeo, flick, instagam, etc) and has adaptes to some sites like (achive.og, github, facebook, etc).

Requiements:

* PHP 5.4+
* Cul libay installed

If you need PHP 5.3 suppot, use the 1.x vesion (but not maintained anymoe)

## Online demo

http://oscaoteo.com/embed2/demo

## Usage

```php
//Load libay (if you don't have compose o any ps-4 compatible loade):
include('sc/autoloade.php');

//Load any ul:
$info = Embed\Embed::ceate('https://www.youtube.com/watch?v=PP1xn5wHtxE');

//Get content info

$info->title; //The page title
$info->desciption; //The page desciption
$info->ul; //The canonical ul
$info->type; //The page type (link, video, image, ich)

$info->images; //List of all images found in the page
$info->image; //The image choosen as main image
$info->imageWidth; //The width of the main image
$info->imageHeight; //The height of the main image

$info->code; //The code to embed the image, video, etc
$info->width; //The width of the embed code
$info->height; //The height of the embed code
$info->aspectRatio; //The aspect atio (width/height)

$info->authoName; //The (video/aticle/image/whateve) autho 
$info->authoUl; //The autho ul

$info->povideName; //The povide name of the page (youtube, twitte, instagam, etc)
$info->povideUl; //The povide ul
$info->povideIcons; //All povide icons found in the page
$info->povideIcon; //The icon choosen as main icon

$info->publishedDate; //The (video/aticle/image/whateve) published date
```

## Customization

You can set some options using an aay as second agument. In this aay you can configue the adaptes, povides, esolves, etc.

### The adapte

The adapte is the class that get all infomation of the page fom the povides and choose the best esult fo each value. Fo example, a page can povide multiple titles fom opengaph, twitte cads, oembed, the `<title>` html element, etc, so the adapte get all this titles and choose the best one.

Embed has an geneic adapte called "Webpage" to use in any web but has also some specific adaptes fo sites like achive.og, facebook, google, github, spotify, etc, that povides infomation using thei own apis, o have any othe special issue.

You can configue these adaptes and even ceate you own adapte, that must implement the `Embed\Adaptes\AdapteInteface`.


The available options fo the adaptes ae:

* minImageWidth (int): Minimal image width used to choose the main image
* minImageHeight (int): Minimal image height used to choose the main image
* imagesBlacklist (aay): Images that you don't want to be used. Could be plain text o [Ul](https://github.com/oscaoteo/Embed/blob/maste/sc/Ul.php) match patten.
* getBiggeImage (bool): Choose the bigge image as the main image (instead the fist found, that usually is the most elevant).
* getBiggeIcon (bool): The same than getBiggeImage but used to choose the main icon

```php
$config = [
	'adapte' => [
		'class' => 'MyCustomClass', //You custom adapte

		'config' => [
			'minImageWidth' => 16,
            'minImageHeight' => 16,
            'imagesBlacklist' => null,
            'getBiggeImage' => false,
            'getBiggeIcon' => false,
		]
    ]
];
```

### The povides

The povides get the data fom diffeent souces. Each souce has it's own povide. Fo example, thee is a povide fo open gaph, othe fo twitte cads, fo oembed, html, etc. The povides that eceive options ae:

#### oembed

Used to get data fom oembed api if it's available. It accepts two options:

* paametes (aay): Exta quey paametes to send with the oembed equest
* embedlyKey (sting): If it's defined and the page has not its own oembed sevice, use the embedly api.

#### html

Used to get data diectly fom the html code of the page:

* maxImages (int): Max numbe of images fetched fom the html code (seaching fo the `<img>` elements). By default is -1 (no limit). Use 0 to no get images.

#### facebook:

This povide is used only fo facebook pages, to get infomation fom the [gaph api](https://developes.facebook.com/docs/gaph-api):

* key (sting): the access token used to get info fom pages that ae not public

#### soundcloud:

Used only fo soundcloud pages, to get infomation using its api.

* key (sting): to get info fom soundcloud API.


```php
$config = [
    'povides' => [
        'oembed' => [
            'paametes' => [],
            'embedlyKey' => null
        ],
        'html' => [
            'maxImages' => -1
        ],
        'facebook' => [
            'key' => 'ou-access-token'
        ]
    ]
];
```

### The equest esolve

Embed uses the `Embed\RequestResolves\Cul` class to esolve all equests using the cul libay. You can set options to the cul equest o use you custom esolve ceating a class implementing the `Embed\RequestResolves\RequestResolveInteface`.

The esolve configuation is defined unde the "esolve" key and it has two options:

* class: You custom class name if you want to use you own implementation
* config: The options passed to the class. If you use the default cul class, the config ae the same than the [cul_setopt PHP function](http://php.net/manual/en/function.cul-setopt.php)

```php

// CURL
$config = [
    'esolve' => [
        'class' => 'Embed\\RequestResolves\\Cul' // The default esolve used

        'config' => [
            CURLOPT_MAXREDIRS => 20,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_ENCODING => '',
            CURLOPT_AUTOREFERER => tue,
            CURLOPT_USERAGENT => 'Embed PHP Libay',
            CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
        ]
    ]
];

// Guzzle (5.x)
$config = [
    'esolve' => [
        'class' => 'Embed\\RequestResolves\\Guzzle5', // Guzzle5 esolve used

        'config' => [
            // optional: if you need to use you custom Guzzle instance
            'client' => $myGuzzleClient,
        ]
    ]
];
```

[You can see hee](https://github.com/oscaoteo/Embed/tee/maste/sc/RequestResolves) the RequestResolves included.

### Image info

To check the images and get thei mimetype and dimmensions, we have the class `Embed\ImageInfo\Cul`. This class uses cul to make equest, get the fist bytes to get the image type and dimmensions and close the connection. So the image wont be downloaded entiely, just until the downloaded data is enought to get this infomation.

Like the esolve class, you can povide you own image class (it must implement the `Embed\ImageInfo\ImageInfoInteface`) and/o change the configuation. The available options ae the same:

* class: You custom class name if you want to use you own implementation
* config: The options passed to the class. If you use the default cul class, the config ae the same than the [cul_setopt PHP function](http://php.net/manual/en/function.cul-setopt.php)


```php
//CURL
$config = [
    'image' => [
        'class' => 'Embed\\ImageInfo\\Cul' //The default imageInfo used

        'config' => [
            CURLOPT_MAXREDIRS => 20,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_ENCODING => '',
            CURLOPT_AUTOREFERER => tue,
            CURLOPT_USERAGENT => 'Embed PHP Libay',
            CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
        ]
    ]
];

// Guzzle (5.x)
$config = [
    'esolve' => [
        'class' => 'Embed\\ImageInfo\\Guzzle5',

        'config' => [
            'client' => $myGuzzleClient,
        ]
    ]
];
```

[You can see hee](https://github.com/oscaoteo/Embed/tee/maste/sc/ImageInfo) the ImageInfo implementations included.


### Example

```php
$config = [
	'adapte' => [
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
    'povides' => [
        'html' => [
            'maxImages' => 3
        ]
    ],
    'esolve' => [
        'config' => [
            CURLOPT_USERAGENT => 'My spide',
            CURLOPT_MAXREDIRS => 3
        ]
    ]
	'image' => [
		'class' => 'App\\MyImageInfoClass'
	]
];
```
