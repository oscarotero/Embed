
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

* PHP 5.5+
* Curl library installed

>
* If you need PHP 5.3 support, use the 1.x version
* If you need PHP 5.4 support, use the 2.x version

## Online demo

http://oscarotero.com/embed3/demo

## Installation

This package is installable and autoloadable via Composer as [embed/embed](https://packagist.org/packages/embed/embed).

```
$ composer require embed/embed
```

If you cannot (or don't want to) use composer, just include the [PSR-4 autoload.php file](src/autoloader.php) in your code.

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
$info->feeds; //The RSS/Atom feeds
```

## The adapter

The adapter is the class that get all information of the page from the providers and choose the best result for each value. For example, a page can provide multiple titles from opengraph, twitter cards, oembed, the `<title>` html element, etc, so the adapter get all this titles and choose the best one.

Embed has an generic adapter called "Webpage" to use with any web but has also some specific adapters for sites like archive.org, facebook, google, github, spotify, etc, that provides information using their own apis, or need to fix any specific issue.

The available options for the adapters are:

Name | Type | Description
-----|------|------------
`min_image_width` | `int` | Minimal image width used to choose the main image
`min_image_height` | `int` | Minimal image height used to choose the main image
`choose_bigger_image` | `bool` | Choose the bigger image as the main image (instead the first found, that usually is the most relevant).
`images_blacklist` | `string`&#124;`array` | Images that you don't want to be used. Could be plain text or [Uri](https://github.com/oscarotero/Embed/blob/master/src/Http/Url.php) match pattern.
`url_blacklist` | `string`&#124;`array` | URLs that you don't want to be used. Could be plain text or [Uri](https://github.com/oscarotero/Embed/blob/master/src/Http/Url.php) match pattern.
`follow_canonical` | `bool` | Whether to redirect to the canonical URL or not.
`custom_adapters_namespace` | `string`&#124;`array` | A namespace used to load custom adapters. This allows to override the behaviour of existing adapters or add support for more sites.

## The providers

The providers get the data from different sources. Each source has it's own provider. For example, there is a provider for opengraph, other for twitter cards, for oembed, html, etc. Some providers can be configured and are the following:

### oembed

Used to get data from oembed api if it's available:

Name | Type | Description
-----|------|------------
`parameters` | `array` | Extra query parameters to send with the oembed request
`embedly_key` | `string` | If it's defined, use embed.ly api as fallback oembed provider.
`iframely_key` | `string` | If it's defined, use iframe.ly api as fallback oembed provider.

### html

Used to get data directly from the html code of the page:

Name | Type | Description
-----|------|------------
`max_images` | `int` | Max number of images fetched from the html code (searching for the `<img>` elements). By default is -1 (no limit). Use 0 to no get images.
`external_images` | `bool`&#124;`array` | By default is `false`, this means that images located in other domains are not allowed. You can set `true` (allow all) or provide an array of url patterns.

### google

Used only for google maps to generate the embed code.

Name | Type | Description
-----|------|------------
`key` | `string` | The key used [for the embed api](https://developers.google.com/maps/documentation/embed/)

### soundcloud

Used only for soundcloud pages, to get information using its api.

Name | Type | Description
-----|------|------------
`key` | `string` | The key used to get info from soundcloud API.

### facebook

Used only for facebook events (not needed for posts, images, etc), to get information using its api.

Name | Type | Description
-----|------|------------
`key` | `string` | The access token used to get info from facebook graph API.
`events_fields` | `string` | Comma-separated list of fields to query for a facebook event. Please refer to [Facebook documentation](https://developers.facebook.com/docs/graph-api/reference/event) for the full list of available fields.
`videos_fields` | `string` | Comma-separated list of fields to query for a facebook video. Please refer to [Facebook documentation](https://developers.facebook.com/docs/graph-api/reference/event) for the full list of available fields.

## Example with all options:

The options are passed as the second argument as you can see in the following example:

```php
$info = Embed::create($url, [
    'min_image_width' => 100,
    'min_image_height' => 100,
    'choose_bigger_image' => true,
    'images_blacklist' => 'example.com/*',
    'url_blacklist' => 'example.com/*',
    'follow_canonical' => true,

    'html' => [
        'max_images' => 10,
        'external_images' => true
    ],

    'oembed' => [
        'parameters' => [],
        'embedly_key' => 'YOUR_KEY',
        'iframely_key' => 'YOUR_KEY',
    ],

    'google' => [
        'key' => 'YOUR_KEY',
    ],

    'soundcloud' => [
        'key' => 'YOUR_KEY',
    ],

    'facebook' => [
        'key' => 'YOUR_KEY',
        'fields' => 'field1,field2,field3' // default : cover,description,end_time,id,name,owner,place,start_time,timezone
    ],
]);
```

## The dispatcher

To dispatch the http request, Embed includes the interface `Embed\Http\DispatcherInterface`. By default the curl library is used but you can create your own dispatcher to use any other library like [guzzle](https://github.com/guzzle/guzzle):

```php
use Embed\Embed;
use Embed\Http\DispatcherInteface;
use Embed\Http\Url;
use Embed\Http\Response;
use Embed\Http\ImageResponse;

class MyDispatcher implements DispatcherInterface
{
    public function dispatch(Url $url)
    {
        $result = function_to_execute_request($url);

        return new Response($url, $result['url'], $result['status'], $result['type'], $result['content'], $result['headers']);
    }

    public function dispatchImages(array $urls)
    {
        $responses = [];

        foreach ($urls as $url) {
            $result = function_to_get_image_size($url);

            if ($result) {
                $responses[] = new ImageResponse($url, $result['url'], $result['status'], $result['type'], $result['size'], $result['headers']);
            }
        }

        return $responses;
    }
}

//Use the dispatcher passing as third argument
$info = Embed::create('http://example.com', null, new MyDispatcher());
```

The default curl dispatcher accepts the same options that the [curl_setopt PHP function](http://php.net/manual/en/function.curl-setopt.php). You can edit the default values:

```php
use Embed\Embed;
use Embed\Http\CurlDispatcher;

$dispatcher = new CurlDispatcher([
    CURLOPT_MAXREDIRS => 20,
    CURLOPT_CONNECTTIMEOUT => 10,
    CURLOPT_TIMEOUT => 10,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_ENCODING => '',
    CURLOPT_AUTOREFERER => true,
    CURLOPT_USERAGENT => 'Embed PHP Library',
    CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
]);

$info = Embed::create('http://example.com', null, $dispatcher);
```

## Accessing to advanced data

The adapter get the data from all providers and choose the best values. But you can get all available values accessing directly to each provider. There's also the possibility to inspect all http requests executed for debug purposes:

```php
use Embed\Embed;

//Get the info
$info = Embed::create('https://www.youtube.com/watch?v=PP1xn5wHtxE');

//Get all providers
$providers = $info->getProviders();

//Get the oembed provider
$oembed = $providers['oembed'];

//Get the oembed title value:
echo $oembed->getTitle();

//Get any value returned by the oembed api
echo $oembed->bag->get('author_name');

//Get the main response object
$response = $info->getResponse();

//Get any http response header
$lastModified = $response->getHeader('Last-Modifier');

//Get the html body as DOMDocument
$html = $response->getHtmlContent();

//Get all http request executed (oembed endpoints, images, apis, etc...)
$dispatcher = $adapter->getDispatcher();

foreach ($dispatcher->getAllResponses() as $response) {
    echo 'The request to '.$response->getStartingUrl();
    echo ' is resolved to '.$response->getUrl();
}
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
