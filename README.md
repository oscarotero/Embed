Embed
=====

PHP library to get info and embed any web service or page (using oembed, opengraph, etc)

Requirements:

* PHP 5.3+
* Curl library installed
* A PSR-0 compatible autoloader class

Usage:

```php
use Embed\Embed;

$webInfo = Embed::create('https://www.youtube.com/watch?v=PP1xn5wHtxE');

//Get content info

$webInfo->getTitle();
$webInfo->getDescription();
$webInfo->getImage();
$webInfo->getEmbedCode();
$webInfo->getUrl();
$webInfo->getType();
$webInfo->getAuthorName();
$webInfo->getAuthorUrl();
$webInfo->getProviderName();
$webInfo->getProviderUrl();

//Get dimmensions info
$webInfo->getWidth();
$webInfo->getHeight();
$webInfo->getAspectRatio();

//Icon site
$icons_path = 'assets/icons';
$replace = false;

$webInfo->saveIcon($icons_path, $replace);

$icon = $icons_path.$webInfo->getIcon();
```
