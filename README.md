
# Embed

[![Build Status][ico-travis]][link-travis]
[![Quality Score][ico-scrutinizer]][link-scrutinizer]
[![Reference Status][ico-references]][link-references]
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-packagist]
[![Monthly Downloads][ico-m-downloads]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![SensioLabs Insight][ico-sensiolabs]][link-sensiolabs]

PHP library to get information from any web page (using oembed, opengraph, twitter-cards, scrapping the html, etc). It's compatible with any web service (youtube, vimeo, flickr, instagram, etc) and has adapters to some sites like (archive.org, github, facebook, etc).

Requirements:

* PHP 7.4+
* Curl library installed

>
* If you need PHP 5.3 support, use the 1.x version
* If you need PHP 5.4 support, use the 2.x version
* If you need PHP 5.5 support, use the 3.x version

## Online demo

http://oscarotero.com/embed3/demo

## Installation

This package is installable and autoloadable via Composer as [embed/embed](https://packagist.org/packages/embed/embed).

```
$ composer require embed/embed
```

## Usage

```php
use Embed\Embed;

$embed = new Embed();

//Load any url:
$info = $embed->get('https://www.youtube.com/watch?v=PP1xn5wHtxE');

//Get content info

$info->title; //The page title
$info->description; //The page description
$info->url; //The canonical url
$info->keywords; //The page keywords

$info->image; //The thumbnail or main image

$info->code->html; //The code to embed the image, video, etc
$info->code->width; //The exact width of the embed code (if exists)
$info->code->height; //The exact height of the embed code (if exists)
$info->code->aspectRatio; //The aspect ratio (width/height)

$info->authorName; //The resource author
$info->authorUrl; //The author url

$info->cms; //The cms used
$info->language; //The language of the page
$info->languages; //The alternative languages

$info->providerName; //The provider name of the page (Youtube, Twitter, Instagram, etc)
$info->providerUrl; //The provider url
$info->icon; //The big icon of the site
$info->favicon; //The favicon of the site (an .ico file or a png with up to 32x32px)

$info->publishedTime; //The published time of the resource
$info->license; //The license url of the resource
$info->linkedData; //The linked-data info (http://json-ld.org/)
$info->feeds; //The RSS/Atom feeds
```

## Document

The document is the object that store the html code of the page. Like with oEmbed, you can use it to extract extra info:

```php
//Get the document object
$document = $info->getDocument();

$document->meta('twitter:image'); //Returns the content of a <meta>
$document->link('image_src'); //Returns the href of a <link>
$document->getDocument(); //Returns the DOMDocument instance
$html = (string) $document; //Returns the html code

$document->select('.//h1'); //Search
```

You can perform xpath queries in order to select specific elements. A search always return an instance of a `Embed\QueryResult`:

```php
//Search the A elements
$result = $document->select('.//a');

//Filter the results
$result->filter(fn ($node) => $node->getAttribute('href'));

$result->str('id'); //Return the id of the first result as string
$result->str(); //Return the content of the first result

$result->strAll('id'); //Return an array with the ids of all results as string
$result->strAll(); //Return an array with the content of all results as string

$result->int('tabindex'); //Return the tabindex attribute of the first result as integer
$result->int(); //Return the content of the first result as integer

$result->url('href'); //Return the href attribute of the first result as url (converts relative urls to absolutes)
$result->url(); //Return the content of the first result as url

$result->node(); //Return the first node found (DOMElement)
$result->nodes(); //Return all nodes found
```

## OEmbed

In addition to the html, this library uses [oEmbed](https://oembed.com/) endpoints to get additional data. You can get this data as following:

```php
//Get the oEmbed object
$oembed = $info->getOEmbed();

$oembed->all(); //Return all raw data
$oembed->get('title'); //Return a key value
$oembed->str('title'); //Return the value as string (remove html tags)
$oembed->html('html'); //Return the value as html
$oembed->int('width'); //Return the value as integer
$oembed->url('url'); //Return the value as full url (converts relative urls to absolutes)
```

## Other APIs

Some sites like Wikipedia or Archive.org provide a custom API that is used to fetch more reliable data. You can get the API object with the method `getApi()` but note that not all results have this method. The Api object has the same methods than oEmbed:

```php
//Get the API object
$api = $info->getApi();

$api->all(); //Return all raw data
$api->get('title'); //Return a key value
$api->str('title'); //Return the value as string (remove html tags)
$api->html('html'); //Return the value as html
$api->int('width'); //Return the value as integer
$api->url('url'); //Return the value as full url (converts relative urls to absolutes)
```

## Extending Embed

Depending of your needs, you may want to extend this library with extra features or change the way it makes some operations.

### PSR

Embed use some PSR standards to be the most interoperable possible:

- [PSR-7](https://www.php-fig.org/psr/psr-7/) Standard interfaces to represent http requests, responses and uris
- [PSR-17](https://www.php-fig.org/psr/psr-17/) Standard factories to create PSR-7 objects
- [PSR-18](https://www.php-fig.org/psr/psr-18/) Standard interface to send a http request and return a response

Embed comes with a CURL client compatible with PSR-18 but you need to install a PSR-7 / PSR-17 library. [Here you can see a list of popular libraries](https://github.com/middlewares/awesome-psr15-middlewares#psr-7-implementations) and the library can detect automatically 'laminas\diactoros', 'guzzleHttp\psr7', 'slim\psr7', 'nyholm\psr7' and 'sunrise\http' (in this order). If you want to use a different PSR implementation, you can do it in this way:

```php
use Embed\Embed;
use Embed\Http\Crawler;

$client = new CustomHttpClient();
$requestFactory = new CustomRequestFactory();
$uriFactory = new CustomUriFactory();

//The Crawler is responsible for perform http queries
$crawler = new Crawler($client, $requestFactory, $uriFactory);

//Create an embed instance passing the Crawler
$embed = new Embed($crawler);
```

### Adapters

There are some sites with special needs: because they provide public APIs that allows to extract more info (like Wikipedia or Archive.org) or because we need to change how to extract the data in this particular site. For all that cases we have the adapters, that are classes extending the default classes to provide extra functionality.

Before creating an adapter, you need to understand how Embed work: when you execute this code, you get a `Extractor` class

```php
//Get the Extractor with all info
$info = $embed->get($url);

//The extractor have document and oembed:
$document = $info->getDocument();
$oembed = $info->getOEmbed();
```

The `Extractor` class has many `Detectors`. Each detector is responsible to detect a specific piece of info. For example, there's a detector for the title, other for description, image, code, etc.

So, an adapter is basically an extractor created specifically for a site. It can contains also custom detectors or apis. If you see the `src/Adapters` folder you can see all adapters.

If you create an adapter, you need also register to Embed, so it knows in which website needs to use. To do that, there's the `ExtractorFactory` object, that is responsible for instantiate the right extractor for each site. 

```php
use Embed\Embed;

$embed = new Embed();

$factory = $embed->getExtractorFactory();

//Use this MySite adapter for mysite.com
$factory->addAdapter('mysite.com', MySite::class);

//Remove the adapter for pinterest.com, so it will use the default extractor
$factory->removeAdapter('pinterest.com');

//Change the default extractor
$factory->setDefault(CustomExtractor::class);
```

---

If this library is useful for you, say thanks [buying me a beer :beer:](https://www.paypal.me/oscarotero)!

[ico-version]: https://poser.pugx.org/embed/embed/v/stable
[ico-travis]: https://travis-ci.org/oscarotero/Embed.svg?branch=master
[ico-license]: https://poser.pugx.org/embed/embed/license
[ico-scrutinizer]: https://scrutinizer-ci.com/g/oscarotero/Embed/badges/quality-score.png?s=79e37032db280b9795388124c030dcf4309343d1
[ico-sensiolabs]: https://insight.sensiolabs.com/projects/f0beab9f-fe41-47db-8806-373f80c50f9e/big.png
[ico-downloads]: https://poser.pugx.org/embed/embed/downloads
[ico-m-downloads]: https://poser.pugx.org/embed/embed/d/monthly
[ico-references]: https://www.versioneye.com/php/embed:embed/reference_badge.svg?style=flat

[link-packagist]: https://packagist.org/packages/embed/embed
[link-travis]: https://travis-ci.org/oscarotero/Embed
[link-scrutinizer]: https://scrutinizer-ci.com/g/oscarotero/Embed/
[link-sensiolabs]: https://insight.sensiolabs.com/projects/f0beab9f-fe41-47db-8806-373f80c50f9e
[link-references]: https://www.versioneye.com/php/embed:embed/references
