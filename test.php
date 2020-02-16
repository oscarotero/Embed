<?php
require './vendor/autoload.php';

use Embed\Embed;

$url = 'http://oscarotero.com';
$url = 'https://www.youtube.com/watch?v=DcPNsM87z1U';

$embed = new Embed();

$extractor = $embed->get($url);

var_dump($extractor->title);
var_dump($extractor->description);
var_dump($extractor->keywords);
var_dump($extractor->url);
var_dump($extractor->code);
var_dump($extractor->feeds);
var_dump($extractor->linkedData);
var_dump($extractor->license);
var_dump($extractor->publishedTime);
var_dump($extractor->authorName);
var_dump($extractor->authorUrl);
var_dump($extractor->providerName);
var_dump($extractor->providerUrl);
var_dump($extractor->image);
var_dump($extractor->favicon);
var_dump($extractor->icon);
var_dump($extractor->cms);
var_dump($extractor->language);
var_dump($extractor->languages);
