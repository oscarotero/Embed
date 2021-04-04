<?php
declare(strict_types = 1);

return [
    'headers' => [
        'date' => [
            'Sun, 04 Apr 2021 15:20:02 GMT'
        ],
        'content-type' => [
            'text/html; charset=UTF-8'
        ],
        'set-cookie' => [
            '__cfduid=d68f1a9952f831a37f1937778c7bf443f1617549602; expires=Tue, 04-May-21 15:20:02 GMT; path=/; domain=.css-tricks.com; HttpOnly; SameSite=Lax; Secure'
        ],
        'cf-ray' => [
            '63ab84b4cb9d540a-LHR'
        ],
        'age' => [
            '139840'
        ],
        'cache-control' => [
            'max-age=14400'
        ],
        'link' => [
            '<https://css-tricks.com/wp-json/>; rel="https://api.w.org/", <https://css-tricks.com/wp-json/wp/v2/posts/306427>; rel="alternate"; type="application/json", <https://css-tricks.com/?p=306427>; rel=shortlink'
        ],
        'strict-transport-security' => [
            'max-age=31536000; includeSubDomains; preload'
        ],
        'vary' => [
            'Accept-Encoding, Authorization'
        ],
        'cf-cache-status' => [
            'HIT'
        ],
        'cf-apo-via' => [
            'tcache'
        ],
        'cf-edge-cache' => [
            'cache,platform=wordpress'
        ],
        'cf-request-id' => [
            '093f1145070000540aa1280000000001'
        ],
        'expect-ct' => [
            'max-age=604800, report-uri="https://report-uri.cloudflare.com/cdn-cgi/beacon/expect-ct"'
        ],
        'fastly-restarts' => [
            '1'
        ],
        'referrer-policy' => [
            'no-referrer-when-downgrade'
        ],
        'x-cache' => [
            'MISS'
        ],
        'x-cache-hits' => [
            '0'
        ],
        'x-cacheable' => [
            'YES'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'x-fw-dynamic' => [
            'TRUE'
        ],
        'x-fw-hash' => [
            'lwxgywlq8s'
        ],
        'x-fw-serve' => [
            'TRUE'
        ],
        'x-fw-server' => [
            'Flywheel/5.1.0'
        ],
        'x-fw-static' => [
            'NO'
        ],
        'x-fw-type' => [
            'FLYWHEEL_BOT'
        ],
        'x-fw-version' => [
            '5.0.0'
        ],
        'x-served-by' => [
            'cache-lcy19231-LCY'
        ],
        'x-timer' => [
            'S1617409761.437001,VS0,VE812'
        ],
        'x-xss-protection' => [
            '1'
        ],
        'report-to' => [
            '{"endpoints":[{"url":"https:\\/\\/a.nel.cloudflare.com\\/report?s=UFOebRBLgC6Pa32KLZvYv9AcpURAuolRV4dzot3lQSyM%2BtZJrCyxcsEne1NdtG%2BtYao30HX%2FJKa5qjX5lctFDsm7H81N7WrtPSknTLXf0g%3D%3D"}],"max_age":604800,"group":"cf-nel"}'
        ],
        'nel' => [
            '{"max_age":604800,"report_to":"cf-nel"}'
        ],
        'server' => [
            'cloudflare'
        ],
        'content-encoding' => [
            'br'
        ],
        'alt-svc' => [
            'h3-27=":443"; ma=86400, h3-28=":443"; ma=86400, h3-29=":443"; ma=86400'
        ],
        'Content-Location' => [
            'https://css-tricks.com/css-scrollbar-with-progress-meter/'
        ],
        'X-Request-Time' => [
            '0.268 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '<!doctype html>
<html lang="en" id="top-of-site">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>
    CSS Scrollbar With Progress Meter | CSS-Tricks  </title>
<link rel="icon" href="/favicon.ico">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="manifest" href="/manifest.webmanifest">
<meta name="theme-color" content="rgb(255, 122, 24)">
<meta name="monetization" content="$ilp.uphold.com/biyqg2MkQKbe">
<link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="CSS-Tricks Search">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="https://css-tricks.com/feed/">
<link rel="stylesheet" href="https://cloud.typography.com/610186/6350832/css/fonts.css">
<link rel="stylesheet" href="https://css-tricks.com/wp-content/themes/CSS-Tricks-18/style.css?cache_bust=1617383132230">
<link rel="preconnect" href="https://s3.buysellads.com">
<link rel="dns-prefetch" href="https://s3.buysellads.com">
<link rel="preconnect" href="https://srv.buysellads.com">
<link rel="dns-prefetch" href="https://srv.buysellads.com">
<link rel="preconnect" href="https://res.cloudinary.com">
<link rel="dns-prefetch" href="https://res.cloudinary.com">
<link rel="preconnect" href="https://static.codepen.io">
<link rel="dns-prefetch" href="https://static.codepen.io">
<meta name=\'robots\' content=\'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1\' />
<script>window._wca = window._wca || [];</script>

<meta name="description" content="Scrollbars are natural progress meters. How far the scrollbar is down or across is how much progress has been made scrolling through that element (often" />
<link rel="canonical" href="https://css-tricks.com/css-scrollbar-with-progress-meter/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="CSS Scrollbar With Progress Meter | CSS-Tricks" />
<meta property="og:description" content="Scrollbars are natural progress meters. How far the scrollbar is down or across is how much progress has been made scrolling through that element (often" />
<meta property="og:url" content="https://css-tricks.com/css-scrollbar-with-progress-meter/" />
<meta property="og:site_name" content="CSS-Tricks" />
<meta property="article:publisher" content="https://www.facebook.com/CSSTricks" />
<meta property="article:published_time" content="2020-04-15T21:49:51+00:00" />
<meta property="article:modified_time" content="2020-04-15T21:49:52+00:00" />
<meta property="og:image" content="https://i1.wp.com/css-tricks.com/wp-content/uploads/2020/04/scrollbar-progress.png?fit=1200%2C600&#038;ssl=1" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="600" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:creator" content="@chriscoyier" />
<meta name="twitter:site" content="@CSS" />
<meta name="twitter:label1" content="Written by">
<meta name="twitter:data1" content="Chris Coyier">
<meta name="twitter:label2" content="Est. reading time">
<meta name="twitter:data2" content="1 minute">
<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://css-tricks.com/#organization","name":"CSS-Tricks","url":"https://css-tricks.com/","sameAs":["https://www.facebook.com/CSSTricks","https://www.instagram.com/real_css_tricks/","https://www.youtube.com/channel/UCADyUOnhyEoQqrw_RrsGleA","https://twitter.com/CSS"],"logo":{"@type":"ImageObject","@id":"https://css-tricks.com/#logo","inLanguage":"en-US","url":"https://i0.wp.com/css-tricks.com/wp-content/uploads/2019/06/akqRGyta_400x400.jpg?fit=%2C&ssl=1","caption":"CSS-Tricks"},"image":{"@id":"https://css-tricks.com/#logo"}},{"@type":"WebSite","@id":"https://css-tricks.com/#website","url":"https://css-tricks.com/","name":"CSS-Tricks","description":"Tips, Tricks, and Techniques on using Cascading Style Sheets.","publisher":{"@id":"https://css-tricks.com/#organization"},"potentialAction":[{"@type":"SearchAction","target":"https://css-tricks.com/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"ImageObject","@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/#primaryimage","inLanguage":"en-US","url":"https://i1.wp.com/css-tricks.com/wp-content/uploads/2020/04/scrollbar-progress.png?fit=1200%2C600&ssl=1","width":1200,"height":600},{"@type":"WebPage","@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/#webpage","url":"https://css-tricks.com/css-scrollbar-with-progress-meter/","name":"CSS Scrollbar With Progress Meter | CSS-Tricks","isPartOf":{"@id":"https://css-tricks.com/#website"},"primaryImageOfPage":{"@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/#primaryimage"},"datePublished":"2020-04-15T21:49:51+00:00","dateModified":"2020-04-15T21:49:52+00:00","description":"Scrollbars are natural progress meters. How far the scrollbar is down or across is how much progress has been made scrolling through that element (often","breadcrumb":{"@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://css-tricks.com/css-scrollbar-with-progress-meter/"]}]},{"@type":"BreadcrumbList","@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"https://css-tricks.com/","url":"https://css-tricks.com/","name":"Home"}},{"@type":"ListItem","position":2,"item":{"@type":"WebPage","@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/","url":"https://css-tricks.com/css-scrollbar-with-progress-meter/","name":"CSS Scrollbar With Progress Meter"}}]},{"@type":"Article","@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/#article","isPartOf":{"@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/#webpage"},"author":{"@id":"https://css-tricks.com/#/schema/person/439366a88619858a797824d5498cf50f"},"headline":"CSS Scrollbar With Progress Meter","datePublished":"2020-04-15T21:49:51+00:00","dateModified":"2020-04-15T21:49:52+00:00","mainEntityOfPage":{"@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/#webpage"},"commentCount":3,"publisher":{"@id":"https://css-tricks.com/#organization"},"image":{"@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/#primaryimage"},"articleSection":"Article","inLanguage":"en-US","potentialAction":[{"@type":"CommentAction","name":"Comment","target":["https://css-tricks.com/css-scrollbar-with-progress-meter/#respond"]}]},{"@type":"Person","@id":"https://css-tricks.com/#/schema/person/439366a88619858a797824d5498cf50f","name":"Chris Coyier","image":{"@type":"ImageObject","@id":"https://css-tricks.com/#personlogo","inLanguage":"en-US","url":"https://secure.gravatar.com/avatar/8081b26e05bb4354f7d65ffc34cbbd67?s=96&d=retro&r=pg","caption":"Chris Coyier"},"description":"Founder, writer, designer, spam-deleter, email personality","sameAs":["http://chriscoyier.net","https://twitter.com/chriscoyier"]}]}</script>

<link rel=\'dns-prefetch\' href=\'//stats.wp.com\' />
<link rel=\'dns-prefetch\' href=\'//i0.wp.com\' />
<link rel=\'dns-prefetch\' href=\'//i1.wp.com\' />
<link rel=\'dns-prefetch\' href=\'//i2.wp.com\' />
<link rel="alternate" type="application/rss+xml" title="CSS-Tricks &raquo; CSS Scrollbar With Progress Meter Comments Feed" href="https://css-tricks.com/css-scrollbar-with-progress-meter/feed/" />
<style id=\'woocommerce-inline-inline-css\' type=\'text/css\'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel=\'stylesheet\' id=\'jetpack-instant-search-css\' href=\'https://css-tricks.com/wp-content/plugins/jetpack/_inc/build/instant-search/jp-search-main.bundle.css?ver=9.5\' type=\'text/css\' media=\'all\' />
<script type=\'text/javascript\' id=\'jetpack_related-posts-js-extra\'>
/* <![CDATA[ */
var related_posts_js_options = {"post_heading":"h4"};
/* ]]> */
</script>
<script src=\'https://css-tricks.com/wp-content/plugins/jetpack/_inc/build/related-posts/related-posts.min.js?ver=20210219\' id=\'jetpack_related-posts-js\'></script>
<script defer src=\'https://stats.wp.com/s-202113.js\' id=\'woocommerce-analytics-js\'></script>
<link rel="https://api.w.org/" href="https://css-tricks.com/wp-json/" /><link rel="alternate" type="application/json" href="https://css-tricks.com/wp-json/wp/v2/posts/306427" /><link rel=\'shortlink\' href=\'https://css-tricks.com/?p=306427\' />
<link rel="alternate" type="application/json+oembed" href="https://css-tricks.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcss-tricks.com%2Fcss-scrollbar-with-progress-meter%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://css-tricks.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcss-tricks.com%2Fcss-scrollbar-with-progress-meter%2F&#038;format=xml" />

<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
<style type="text/css">
				/* If html does not have either class, do not show lazy loaded images. */
				html:not( .jetpack-lazy-images-js-enabled ):not( .js ) .jetpack-lazy-image {
					display: none;
				}
			</style>
<script>
				document.documentElement.classList.add(
					\'jetpack-lazy-images-js-enabled\'
				);
			</script>
</head>
<body class="post-template-default single single-post postid-306427 single-format-standard theme-CSS-Tricks-18 woocommerce-no-js category-article">
<div id="top-of-site-pixel-anchor"></div>
<header class="site-header" id="site-header">
<a id="skip-nav" class="skip-nav screen-reader-text" href="#maincontent">Skip to main content</a>
<div class="logo">
<a href="/">
<div class="screen-reader-text">CSS-Tricks</div>
<svg class="icon-logo-star" width="35px" height="35px" viewBox="0 0 362.62 388.52" data-spin-me="false">
<path d="M156.58,239l-88.3,64.75c-10.59,7.06-18.84,11.77-29.43,11.77-21.19,0-38.85-18.84-38.85-40C0,257.83,14.13,244.88,27.08,239l103.6-44.74L27.08,148.34C13,142.46,0,129.51,0,111.85,0,90.66,18.84,73,40,73c10.6,0,17.66,3.53,28.25,11.77l88.3,64.75L144.81,44.74C141.28,20,157.76,0,181.31,0s40,18.84,36.5,43.56L206,149.52l88.3-64.75C304.93,76.53,313.17,73,323.77,73a39.2,39.2,0,0,1,38.85,38.85c0,18.84-12.95,30.61-27.08,36.5L231.93,194.26,335.54,239c14.13,5.88,27.08,18.83,27.08,37.67,0,21.19-18.84,38.85-40,38.85-9.42,0-17.66-4.71-28.26-11.77L206,239l11.77,104.78c3.53,24.72-12.95,44.74-36.5,44.74s-40-18.84-36.5-43.56Z" />
</svg>
<svg class="icon-logo-text" width="214px" height="35px" viewBox="0 0 474.15 58.26">
<path d="M46 42.57a4.5 4.5 0 0 0-3 1.13c-4.1 3.46-8.13 5.39-14.08 5.39-10.78 0-18.58-8.93-18.58-20v-.09c0-11 7.88-19.87 18.58-19.87a20.42 20.42 0 0 1 13.48 5.03 4.95 4.95 0 0 0 7.88-3.86 4.94 4.94 0 0 0-1.93-3.94c-4.91-3.79-10.62-6.36-19.35-6.36-17 0-29 13.12-29 29.13v.16c0 16.17 12.23 29 28.64 29 9.09 0 15.12-2.9 20.43-7.56a4.76 4.76 0 0 0 1.61-3.54 4.71 4.71 0 0 0-4.68-4.62zm36.86-17.95c-10.86-2.62-13.43-4.5-13.43-8.85v-.16c0-3.7 3.38-6.68 9.17-6.68 4.43 0 8.61 1.45 13 4.26a4.78 4.78 0 0 0 2.57.72 4.6 4.6 0 0 0 4.67-4.59 4.47 4.47 0 0 0-2.17-3.94 31 31 0 0 0-17.91-5.22c-11.18 0-19.23 6.68-19.23 16.34v.16c0 10.38 6.76 13.92 18.74 16.82 10.46 2.41 12.73 4.58 12.73 8.6v.16c0 4.18-3.86 7.08-10 7.08a24.42 24.42 0 0 1-15.77-5.79 4.79 4.79 0 0 0-7.56 3.7 4.64 4.64 0 0 0 1.94 3.77 35.05 35.05 0 0 0 21.16 7.1c11.83 0 20.11-6.28 20.11-16.82v-.16c0-9.34-6.11-13.6-18.02-16.5zm49.88 0c-10.86-2.57-13.43-4.51-13.43-8.85v-.16c0-3.7 3.38-6.68 9.17-6.68 4.42 0 8.61 1.45 13 4.26a4.78 4.78 0 0 0 2.57.72 4.6 4.6 0 0 0 4.67-4.59 4.47 4.47 0 0 0-2.17-3.94 31 31 0 0 0-17.91-5.22c-11.18 0-19.23 6.68-19.23 16.33v.16c0 10.38 6.76 13.92 18.74 16.82 10.46 2.41 12.71 4.59 12.71 8.61v.16c0 4.18-3.86 7.08-10 7.08a24.42 24.42 0 0 1-15.77-5.79 4.79 4.79 0 0 0-7.56 3.7 4.64 4.64 0 0 0 1.96 3.77 35.05 35.05 0 0 0 21.16 7.08c11.83 0 20.11-6.28 20.11-16.82v-.16c0-9.32-6.11-13.58-18.02-16.48zm45.62 3.22h-15.13a4.79 4.79 0 0 0 0 9.58h15.12a4.79 4.79 0 0 0 0-9.58zm45.64-26.84h-37.45a4.59 4.59 0 0 0 0 9.17h13.68v42.62a5 5 0 0 0 10 0v-42.65h13.77a4.59 4.59 0 0 0 0-9.14zm38.86 0h-20.15a4.91 4.91 0 0 0-5 5v46.79a4.95 4.95 0 0 0 9.89 0v-15.13h12.47l13.68 17.46a5.65 5.65 0 0 0 4.83 2.58 4.67 4.67 0 0 0 4.75-4.59 5.74 5.74 0 0 0-1.61-3.78l-10.78-13.6c7.56-2.33 12.79-7.81 12.79-16.82v-.16a17 17 0 0 0-4.66-12.15c-3.62-3.54-9.17-5.6-16.25-5.6zm10.86 18.51c0 5.71-4.51 9.41-11.58 9.41h-14.53v-18.92h14.39c7.32 0 11.67 3.3 11.67 9.33zm27-18.91a4.89 4.89 0 0 0-5 4.91v47.28a4.95 4.95 0 0 0 9.89 0v-47.32a4.88 4.88 0 0 0-4.98-4.91zm62.67 42a4.5 4.5 0 0 0-3 1.13c-4.1 3.46-8.13 5.39-14.08 5.39-10.78 0-18.58-8.93-18.58-20v-.12c0-11 7.88-19.87 18.58-19.87a20.42 20.42 0 0 1 13.44 5.07 4.95 4.95 0 0 0 7.88-3.86 4.94 4.94 0 0 0-1.93-3.94c-4.98-3.83-10.7-6.4-19.38-6.4-17.06 0-29 13.12-29 29.13v.16c0 16.17 12.23 29 28.64 29 9.09 0 15.12-2.9 20.43-7.56a4.76 4.76 0 0 0 1.61-3.58 4.71 4.71 0 0 0-4.7-4.58zm41-16.82l17.54-16.9a4.81 4.81 0 0 0 1.77-3.7 4.53 4.53 0 0 0-4.7-4.62 5.2 5.2 0 0 0-4.1 1.85l-26.66 26.88v-23.82a4.95 4.95 0 0 0-9.9 0v47.32a4.95 4.95 0 0 0 9.9 0v-11.67l9.17-8.85 18.1 23.09a5 5 0 0 0 4.18 2.33 4.83 4.83 0 0 0 5-4.83 5.36 5.36 0 0 0-1.37-3.54zm51.8-1.13c-10.92-2.65-13.49-4.53-13.49-8.88v-.16c0-3.7 3.38-6.68 9.17-6.68 4.42 0 8.61 1.45 13 4.26a4.78 4.78 0 0 0 2.57.72 4.6 4.6 0 0 0 4.67-4.59 4.47 4.47 0 0 0-2.17-3.94 31 31 0 0 0-17.94-5.22c-11.15 0-19.2 6.68-19.2 16.34v.16c0 10.38 6.76 13.92 18.74 16.82 10.46 2.41 12.71 4.59 12.71 8.61v.16c0 4.18-3.86 7.08-10 7.08a24.42 24.42 0 0 1-15.77-5.79 4.79 4.79 0 0 0-7.56 3.7 4.64 4.64 0 0 0 1.96 3.76 35.05 35.05 0 0 0 21.12 7.1c11.83 0 20.11-6.28 20.11-16.82v-.16c.04-9.34-6.11-13.6-17.98-16.5z" />
</svg> </a>
</div>
<div class="header-middle-area">
<nav class="main-nav" id="main-nav">
<ul>
<li class="articles">
<a href="/archives/">
<span>Articles</span>
</a>
</li>
<li class="videos">
<a href="/video-screencasts/">
<span>Videos</span>
</a>
</li>
<li class="almanac">
<a href="/almanac/">
<span>Almanac</span>
</a>
</li>
<li class="newsletter">
<a href="/newsletters/">
<span>Newsletter</span>
</a>
</li>
<li class="guides">
<a href="/guides/">
<span>Guides</span>
</a>
</li>
<li class="books">
<a href="/books/">
<span>Books</span>
</a>
</li>
</ul>
</nav>
<div class="search-and-account">
<a href="https://www.google.com/search?q=site:css-tricks.com%20layout" class="jetpack-search-filter__link">
<span class="screen-reader-text">Search</span>
<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.0726 10.4326C12.4801 10.4326 10.4 12.5451 10.4 15.1053C10.4 17.6978 12.5125 19.7779 15.0726 19.7779C17.6651 19.7779 19.7453 17.6654 19.7453 15.1053C19.744 12.544 17.664 10.4326 15.0726 10.4326Z" fill="white" />
<path d="M16.0327 0.447479C7.42401 0.447479 0.447693 7.4238 0.447693 16.0324C0.447693 24.6398 7.42401 31.6161 16.0314 31.6161C24.64 31.6161 31.6163 24.6398 31.6163 16.0324C31.6163 7.4238 24.64 0.447479 16.0327 0.447479ZM23.6163 24.0324C23.3926 24.2562 23.0401 24.385 22.6563 24.385C22.2726 24.385 21.9526 24.2575 21.6963 24.0324L18.7526 21.0887L18.4651 21.2487C17.4088 21.825 16.2576 22.145 15.0724 22.145C11.1998 22.145 8.06509 19.0087 8.06509 15.1376C8.06509 11.265 11.2013 8.13023 15.0724 8.13023C18.9451 8.13023 22.0798 11.2665 22.0798 15.1376C22.0798 16.5138 21.6961 17.8251 20.9273 18.9776L20.7348 19.2976L23.6473 22.2101C23.8711 22.4664 24.0311 22.7864 24.0311 23.1376C23.9998 23.4563 23.8723 23.7763 23.616 24.0326L23.6163 24.0324Z" fill="white" />
</svg>
</a>
<a href="/product/membership/">
<span class="screen-reader-text">Account</span>
<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17 1.7C11.5335 1.7 6.48243 4.61655 3.74917 9.35C1.0172 14.0835 1.0172 19.9165 3.74917 24.65C6.48246 29.3835 11.5335 32.3 17 32.3C20.4918 32.3133 23.8809 31.1193 26.5917 28.9199C29.9014 26.2557 31.9559 22.3365 32.2602 18.0984C32.5657 13.8603 31.0954 9.68748 28.2003 6.57682C25.3063 3.46636 21.249 1.69986 17.0003 1.69986L17 1.7ZM27.9956 24.411C27.2651 22.1412 25.014 20.2514 21.9925 19.2447C20.7069 20.6405 18.8967 21.4361 17 21.4361C15.1021 21.4347 13.292 20.6405 12.0074 19.2447C8.98463 20.2514 6.73335 22.1413 6.00439 24.411C4.20212 21.7388 3.43579 18.5008 3.8475 15.3041C4.25921 12.1073 5.82242 9.17082 8.24234 7.04174C10.6622 4.91276 13.7752 3.7387 16.9987 3.7387C20.2221 3.7387 23.3353 4.91276 25.7564 7.04041C28.1763 9.16939 29.7395 12.1057 30.1513 15.3027C30.563 18.4995 29.7966 21.7376 27.9957 24.411L27.9956 24.411Z" fill="white" />
<path d="M22.5049 13.6092C22.5049 16.9919 20.0399 19.736 17 19.736C13.9586 19.736 11.4937 16.9921 11.4937 13.6092C11.4937 10.2251 13.9587 7.48236 17 7.48236C20.0401 7.48236 22.5049 10.2249 22.5049 13.6092Z" fill="white" />
</svg>
</a>
</div>
</div>
</header>
<div class="page-wrap">
<script>
  var articleYear = 2020;
  var articleAuthor = "3";
  var articleType = "post";
</script>
<div class="articles-and-sidebar">
<main id="post-306427">
<article>
<header class="mega-header">
<style>
    body::after {
      opacity: 0.91;
    }
    body::before {
      content: "";
      background-image: 
        url(https://css-tricks.com/wp-content/uploads/2020/04/scrollbar-progress.png);
    }
  </style>
<h1 class="article-title">
CSS Scrollbar With Progress&nbsp;Meter </h1>
<div class="author-row">
<a href="https://css-tricks.com/author/chriscoyier/" aria-label="Author page of Chris Coyier">
<img alt="Avatar of Chris Coyier" src="https://secure.gravatar.com/avatar/8081b26e05bb4354f7d65ffc34cbbd67?s=80&#038;d=retro&#038;r=pg" srcset="https://secure.gravatar.com/avatar/8081b26e05bb4354f7d65ffc34cbbd67?s=160&#038;d=retro&#038;r=pg 2x" class="avatar avatar-80 photo skip-lazy" height="80" width="80" loading="lazy"><noscript><img alt=\'Avatar of Chris Coyier\' src=\'https://secure.gravatar.com/avatar/8081b26e05bb4354f7d65ffc34cbbd67?s=80&#038;d=retro&#038;r=pg\' srcset=\'https://secure.gravatar.com/avatar/8081b26e05bb4354f7d65ffc34cbbd67?s=160&#038;d=retro&#038;r=pg 2x\' class=\'avatar avatar-80 photo skip-lazy\' height=\'80\' width=\'80\' loading=\'lazy\'/></noscript> </a>
<div>
<a class="author-name" href="https://css-tricks.com/author/chriscoyier/">
Chris Coyier </a>
on
<time datetime="">
Apr 15, 2020 </time>
</div>
</div>
</header>
<div class="article-sponsor">
<p>
Take the pain out of building site search with the Algolia hosted API. <a href="https://srv.buysellads.com/ads/long/x/T6A3N7DTTTTTTT66YJJCTTTTTTTVXPSDKTTTTTTTL4MCVYTTTTTTTR7M5VBNBBPUCMZDVIPYC73H6KZZP3ACOW44VQPE">Start free now!</a>
</p>
</div>
<div class="article-content">
<p>Scrollbars are natural progress meters. How far the scrollbar is down or across is how much progress has been made scrolling through that element (often the entire page). But, they are more like progress indicators than meters, if you think of a meter as something that &#8220;fills up&#8221; as you go. </p>
<p>We can use some CSS trickery to make the scrollbar fill up as we go.</p>
<span id="more-306427"></span>
<p class="explanation">This will only work with <code>-webkit-</code> vendor-prefixed scrollbar-styling properties. In other words, these are non-standard. The standardized scrollbar styling properties are <code>scrollbar-width</code> and <code>scrollbar-color</code>, which can&#8217;t pull this kind of thing off, but are probably a safer bet in the long run. Still, the vendor-prefixed versions probably aren&#8217;t going anywhere, so if you consider this a weird form of progressive enhancement, that&#8217;s probably fine.</p>
<h3><a href="#whats-the-trick" aria-hidden="true" class="aal_anchor" id="whats-the-trick"><svg aria-hidden="true" class="aal_svg" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>What&#8217;s the trick?</h3>
<p>Essentially, it&#8217;s hanging a huge <code>box-shadow</code> off the top of the scrollbar thumb — or off the side if it&#8217;s a horizontally scrolling element.</p>
<pre rel="CSS" class="wp-block-csstricks-code-block language-css" data-line=""><code markup="tt">:root {
  --shadow: #43a047;
  --scrollbarBG: #eee;
  --thumbBG: #66bb6a;
}
::-webkit-scrollbar {
  width: 16px;
}
::-webkit-scrollbar-track {
  background: var(--scrollbarBG);
}
::-webkit-scrollbar-thumb {
  background-color: var(--thumbBG);
  box-shadow: 0 -100vh 0 100vh var(--shadow), 0 0 15px 5px black;
}</code></pre>
<h3><a href="#demo" aria-hidden="true" class="aal_anchor" id="demo"><svg aria-hidden="true" class="aal_svg" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Demo</h3>
<div class="wp-block-cp-codepen-gutenberg-embed-block cp_embed_wrapper"><iframe id="cp_embed_YzXmRoB" src="//codepen.io/anon/embed/YzXmRoB?height=550&amp;theme-id=1&amp;slug-hash=YzXmRoB&amp;default-tab=result" height="550" scrolling="no" frameborder="0" allowfullscreen allowpaymentrequest name="CodePen Embed YzXmRoB" title="CodePen Embed YzXmRoB" class="cp_embed_iframe" style="width:100%;overflow:hidden">CodePen Embed Fallback</iframe></div>
<p>I first saw this in <a href="https://codepen.io/mykt0ngc0/pen/oNXqJgx" class="ek-link">a Pen by Myk</a>. </p>
<p>That example didn&#8217;t differentiate the thumb part of the scrollbar at all, which makes it more meter-like, but also harder to use. My demo has a slightly different color thumb. </p>
<h3><a href="#can-i-really-use-this" aria-hidden="true" class="aal_anchor" id="can-i-really-use-this"><svg aria-hidden="true" class="aal_svg" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Can I really use this?</h3>
<p>No! Aside from it being super weird and non-standard. Safari flips it&#8217;s lid and I have no idea how to fix it. </p>
<figure class="wp-block-image size-large"><img loading="lazy" width="2094" height="2354" src="https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?fit=911%2C1024&amp;ssl=1" alt class="wp-image-306696 jetpack-lazy-image" data-lazy-srcset="https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?w=2094&amp;ssl=1 2094w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=267%2C300&amp;ssl=1 267w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=911%2C1024&amp;ssl=1 911w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=768%2C863&amp;ssl=1 768w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=1366%2C1536&amp;ssl=1 1366w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=1822%2C2048&amp;ssl=1 1822w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=1000%2C1124&amp;ssl=1 1000w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?w=2000&amp;ssl=1 2000w" data-lazy-sizes="(min-width: 735px) 864px, 96vw" data-lazy-src="https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?fit=911%2C1024&amp;ssl=1&amp;is-pending-load=1" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"><noscript><img loading="lazy" width="2094" height="2354" src="https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?fit=911%2C1024&amp;ssl=1" alt="" class="wp-image-306696" srcset="https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?w=2094&amp;ssl=1 2094w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=267%2C300&amp;ssl=1 267w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=911%2C1024&amp;ssl=1 911w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=768%2C863&amp;ssl=1 768w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=1366%2C1536&amp;ssl=1 1366w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=1822%2C2048&amp;ssl=1 1822w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=1000%2C1124&amp;ssl=1 1000w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?w=2000&amp;ssl=1 2000w" sizes="(min-width: 735px) 864px, 96vw" /></noscript></figure>
<p>I do happen to have <a href="https://css-tricks.com/books/greatest-css-tricks/scroll-indicator/">a favorite CSS trick</a> that is highly related to this though. </p>
<h3><a href="#i-want-to-learn-more-about-styling-scrollbars" aria-hidden="true" class="aal_anchor" id="i-want-to-learn-more-about-styling-scrollbars"><svg aria-hidden="true" class="aal_svg" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>I want to learn more about styling scrollbars</h3>
<p>Cool, <a href="https://css-tricks.com/the-current-state-of-styling-scrollbars/" class="ek-link">here you go</a>.</p>
</div>
</article>
</main>
<div class="entry-unrelated sidebar">
<div id="all-modules">
<div id="scroll-ad-position"></div>
<div id="sticky-sidebar-stuff">
<div class="fem-conditional-message">
<div class="fem-ad fem-sidebar-ad">
<div class="fem-header">
<div class="fem-header-inner">
<div class="fem-learning-partner">
Our Learning Partner
</div>
<a href="https://frontendmasters.com/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar"><img src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1578251803/FEM-sidebar-Generic_dipjef.png" alt="Frontend Masters logo" class="fem-logo" /></a>
<div class="fem-title">
Frontend Masters
</div>
</div>
</div>
<div class="fem-message">
<h4>Need front-end development training?</h4>
<p><a href="https://frontendmasters.com/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">Frontend Masters</a> is the best place to get it. They have courses on all the most important front-end technologies, from <a href="https://frontendmasters.com/learn/react/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">React</a> to <a href="https://frontendmasters.com/learn/css/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">CSS</a>, from <a href="https://frontendmasters.com/learn/vue/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">Vue</a> to <a href="https://frontendmasters.com/learn/d3-js/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">D3</a>, and beyond with <a href="https://frontendmasters.com/learn/node-js/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">Node.js</a> and <a href="https://frontendmasters.com/learn/fullstack/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">Full Stack</a>.</p>
</div>
</div>
</div> </div>
</div>
</div>
</div>
<div class="related-ads-comments-wrap">
<div class="related-ads-comments">
<div class="end-of-article-ads">
<div class="bsap-doubles side-by-side">
<div id="bsap_1250418" class="bsarocks bsap_3469a2a501a9e18091036aa0c89f9dcb"></div>
</div>
<div class="fem-conditional-message">
<div class="fem-ad fem-footer-ad">
<div class="fem-header">
<div class="fem-header-inner">
<a href="https://frontendmasters.com/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar"><img src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1578251803/FEM-footer-Generic_fgvhuc.png" alt="Frontend Masters logo" class="fem-logo-large" /></a>
</div>
</div>
<div class="fem-message">
<div>
<h4>Need front-end development training?</h4>
<p><a href="https://frontendmasters.com/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">Frontend Masters</a> is the best place to get it. They have courses on all the most important front-end technologies, from <a href="https://frontendmasters.com/learn/react/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">React</a> to <a href="https://frontendmasters.com/learn/css/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">CSS</a>, from <a href="https://frontendmasters.com/learn/vue/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">Vue</a> to <a href="https://frontendmasters.com/learn/d3-js/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">D3</a>, and beyond with <a href="https://frontendmasters.com/learn/node-js/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">Node.js</a> and <a href="https://frontendmasters.com/learn/fullstack/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">Full Stack</a>.</p>
</div>
</div>
</div>
</div>
</div>
<section class="respond-area">
<h2 class="comments-title" id="comments">
<span>Comments</span>
</h2>
<ol class="commentlist" id="commentlist">
<li class="comment byuser comment-author-chriskirknielsen even thread-even depth-1" id="li-comment-1755818">
<div class="comment-wrap" id="comment-1755818">
<div class="comment-author-wrap">
<div class="comment-author">Christopher Kirk-Nielsen</div> <div class="comment-time"><a href="https://css-tricks.com/css-scrollbar-with-progress-meter/#comment-1755818"><span class="screen-reader">Permalink to comment</span>#</a> <time datetime="2020-04-15T15:14:07-07:00">April 15, 2020</time></div>
</div>
<div class="comment-content">
<p>Tried using <code>filter</code> instead but that property seems invalid on scrollbars. Using a chain of <code>box-shadow</code>s seems to be pretty effective but highly brittle if the content is very tall (a Sass loop to add a shadow for each unit of <code>vh</code> from 1 to 100 is a bit overkill, probably): <a href="https://codepen.io/chrisknmojo/pen/jObWzym" rel="nofollow ugc">CodePen demo</a> (which by the way is still broken on Safari, just a tiny bit less, I guess?).</p>
</div>
<div class="comment-actions">
<div class="reply">
<a rel=\'nofollow\' class=\'comment-reply-link\' href=\'#comment-1755818\' data-commentid="1755818" data-postid="306427" data-belowelement="comment-1755818" data-respondelement="respond" data-replyto="Reply to Christopher Kirk-Nielsen" aria-label=\'Reply to Christopher Kirk-Nielsen\'>Reply</a> </div>
</div>
</div>
</li>
<li class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-1755926">
<div class="comment-wrap" id="comment-1755926">
<div class="comment-author-wrap">
<div class="comment-author">Kapetan</div> <div class="comment-time"><a href="https://css-tricks.com/css-scrollbar-with-progress-meter/#comment-1755926"><span class="screen-reader">Permalink to comment</span>#</a> <time datetime="2020-04-20T02:27:59-07:00">April 20, 2020</time></div>
</div>
<div class="comment-content">
<p>Cool, this one is simpler</p>
<pre><code class="language-css">:root {
  --shadow: #43a047;
  --scrollbarBG: #eee;
}
::-webkit-scrollbar {
  width: 16px;
}
::-webkit-scrollbar-track {
  background: var(--scrollbarBG);
}
::-webkit-scrollbar-thumb {
  border-bottom: 100vh solid var(--shadow);
</code></pre>
</div>
<div class="comment-actions">
<div class="reply">
<a rel=\'nofollow\' class=\'comment-reply-link\' href=\'#comment-1755926\' data-commentid="1755926" data-postid="306427" data-belowelement="comment-1755926" data-respondelement="respond" data-replyto="Reply to Kapetan" aria-label=\'Reply to Kapetan\'>Reply</a> </div>
</div>
</div>
</li>
<li class="comment even thread-even depth-1" id="li-comment-1756031">
<div class="comment-wrap" id="comment-1756031">
<div class="comment-author-wrap">
<div class="comment-author">a.bondarenko</div> <div class="comment-time"><a href="https://css-tricks.com/css-scrollbar-with-progress-meter/#comment-1756031"><span class="screen-reader">Permalink to comment</span>#</a> <time datetime="2020-04-23T07:45:44-07:00">April 23, 2020</time></div>
</div>
<div class="comment-content">
<p>looks like it doesn&#8217;t work in latest Firefox (FF 75.0)</p>
</div>
<div class="comment-actions">
<div class="reply">
<a rel=\'nofollow\' class=\'comment-reply-link\' href=\'#comment-1756031\' data-commentid="1756031" data-postid="306427" data-belowelement="comment-1756031" data-respondelement="respond" data-replyto="Reply to a.bondarenko" aria-label=\'Reply to a.bondarenko\'>Reply</a> </div>
</div>
</div>
</li>
</ol>
<div class="respond">
<div class="comment-form-form-area">
<div id="respond" class="comment-respond">
<h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/css-scrollbar-with-progress-meter/#respond" style="display:none;">Cancel reply</a></small></h3><form action="https://css-tricks.com/wp-comments-post.php" method="post" id="commentform" class="comment-form"><p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p><p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" required=\'required\' /></p>
<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required"></p>
<p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="text" value="" size="30" maxlength="200" /></p>
<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" /> <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
<input type="hidden" name="_mc4wp_subscribe_wp-comment-form" value="0" /><p class=" mc4wp-checkbox mc4wp-checkbox-wp-comment-form"><label><input type="checkbox" name="_mc4wp_subscribe_wp-comment-form" value="1" checked="checked" /><span>Get the CSS-Tricks newsletter</span></label></p><p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment" /> <input type=\'hidden\' name=\'comment_post_ID\' value=\'306427\' id=\'comment_post_ID\' />
<input type=\'hidden\' name=\'comment_parent\' id=\'comment_parent\' value=\'0\' />
</p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="37fdf42d99" /></p> <p class="antispam-group antispam-group-q" style="clear: both;">
<label>Copy and paste this code: <strong class="antspmpro-input-a">micuno</strong> <span class="required">*</span></label>
<input type="hidden" name="antspmpro-a" class="antispam-control antispam-control-a" value="micuno" />
<input type="text" name="antspmpro-q-luwele" class="antispam-control antispam-control-q" value="4.1" />
</p>
<p class="antispam-group antispam-group-e" style="display: none;">
<label>Leave this field empty</label>
<input type="text" name="antspmpro-e-email-url-website-luwele" class="antispam-control antispam-control-e" value="" />
</p>
<input type="hidden" id="ak_js" name="ak_js" value="108" /><textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100" style="display: none !important;"></textarea></form> </div>
</div>
</div>
</section> <div class="related-posts">
<div id=\'jp-relatedposts\' class=\'jp-relatedposts\'>
<h3 class="jp-relatedposts-headline"><em>Related</em></h3>
</div> <div class="jetpack-sponsored-posts-message">
<img src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1590422774/jetpack-logo_cegyqg.svg" alt="Jetpack Logo">
<p>The related posts above were algorithmically generated and displayed here without any load on our servers at all, <a href="https://jetpack.com/support/related-posts/?aff=8638">thanks to Jetpack</a>.</p>
</div>
</div> </div>
</div>
</div>
<footer class="site-footer">
<svg class="icon-logo-star" width="35px" height="35px" viewBox="0 0 362.62 388.52" data-spin-me="false">
<path d="M156.58,239l-88.3,64.75c-10.59,7.06-18.84,11.77-29.43,11.77-21.19,0-38.85-18.84-38.85-40C0,257.83,14.13,244.88,27.08,239l103.6-44.74L27.08,148.34C13,142.46,0,129.51,0,111.85,0,90.66,18.84,73,40,73c10.6,0,17.66,3.53,28.25,11.77l88.3,64.75L144.81,44.74C141.28,20,157.76,0,181.31,0s40,18.84,36.5,43.56L206,149.52l88.3-64.75C304.93,76.53,313.17,73,323.77,73a39.2,39.2,0,0,1,38.85,38.85c0,18.84-12.95,30.61-27.08,36.5L231.93,194.26,335.54,239c14.13,5.88,27.08,18.83,27.08,37.67,0,21.19-18.84,38.85-40,38.85-9.42,0-17.66-4.71-28.26-11.77L206,239l11.77,104.78c3.53,24.72-12.95,44.74-36.5,44.74s-40-18.84-36.5-43.56Z" />
</svg>
<div class="footer-inside">
<div class="footer-message-and-form">
<p class="colophon">
CSS-Tricks is created by <a href="https://chriscoyier.net">Chris</a> and a <a href="/about">team</a> of swell&nbsp;people.
</p>
<div class="footer-form-wrap">
<form action="https://chriscoyier.us2.list-manage.com/subscribe/post?u=155f5a9ccc4e24c318130cace&amp;id=197f127a68" method="post" id="mc-embedded-subscribe-form">
<h4>Keep up to date on web dev</h4>
<p>with our hand-crafted weekly newsletter</p>
<div class="footer-form">
<label for="mce-EMAIL" class="screen-reader">Email Address</label>
<input type="email" name="EMAIL" class="required email mailchimp-email-input" id="mce-EMAIL" placeholder="smart@cookie.com" required="">
<input type="submit" value="Subscribe" name="Subscribe" id="mc-embedded-subscribe" class="button subscribe-button">
</div>
</form>
</div> </div>
<div class="link-grid">
<div>
<div>
<h5>
Tech
</h5>
<ul>
<li><a href="https://wordpress.org/">WordPress</a> <span>(CMS)</span></li>
<li><a href="/jetpack/">Jetpack</a> <span>(Search, Backup)</span></li>
<li><a href="https://woocommerce.com/?aff=8638">WooCommerce</a> <span>(eCommerce)</span></li>
<li><a href="https://localwp.com/">Local</a> <span>(Development)</span></li>
</ul>
</div>
<div>
<h5>Hosting</h5>
<ul>
<li><a href="https://share.getf.ly/k96n2f">Flywheel</a></li>
</ul>
</div>
</div>
<div>
<div>
<h5>Family</h5>
<ul>
<li><a href="https://codepen.io/">CodePen</a></li>
<li><a href="https://shoptalkshow.com/">ShopTalk Show</a></li>
</ul>
</div>
<div>
<h5>Minisites</h5>
<ul>
<li><a href="https://serverless.css-tricks.com/">The Power of Serverless</a></li>
<li><a href="https://conferences.css-tricks.com/">Upcoming Conferences</a></li>
<li><a href="https://coding-fonts.css-tricks.com/">Coding Fonts</a></li>
</ul>
</div>
</div>
<div>
<div>
<h5>Contact</h5>
<ul>
<li><a href="/cdn-cgi/l/email-protection#6f1b0a0e022f0c1c1c421b1d060c041c410c0002">Email</a></li>
<li><a href="https://www.notion.so/csstricks/Sponsorship-Possibilities-cb5b33a3f6f64c239220547fe7965d78">Sponsorship Info</a></li>
<li><a href="/guest-posting/">Guest Writing</a></li>
</ul>
</div>
<div>
<h5>Buy</h5>
<ul>
<li><a href="/shop/">Posters & Swag</a></li>
<li><a href="/product/mvp-supporter/">Membership</a></li>
</ul>
</div>
</div>
<div>
<div>
<h5>Follow</h5>
<ul>
<li><a href="https://twitter.com/css">Twitter</a></li>
<li><a href="https://www.instagram.com/real_css_tricks/">Instagram</a></li>
<li><a href="https://www.youtube.com/user/realcsstricks">YouTube</a></li>
<li><a href="https://codepen.io/team/css-tricks">CodePen</a></li>
<li><a href="https://github.com/CSS-Tricks">GitHub</a></li>
<li><a href="https://podcasts.apple.com/us/podcast/css-tricks-screencasts/id273881728">iTunes</a></li>
<li><a href="/feed/">RSS</a></li>
</ul>
</div>
</div>
</div>
</div>
<a href="#top-of-site" class="top-of-site-link" data-visible="false">
<span class="screen-reader-text">Back to Top</span>
<svg width="32" height="32" viewBox="0 0 100 100">
<path fill="white" d="m50 0c-13.262 0-25.98 5.2695-35.355 14.645s-14.645 22.094-14.645 35.355 5.2695 25.98 14.645 35.355 22.094 14.645 35.355 14.645 25.98-5.2695 35.355-14.645 14.645-22.094 14.645-35.355-5.2695-25.98-14.645-35.355-22.094-14.645-35.355-14.645zm20.832 62.5-20.832-22.457-20.625 22.457c-1.207 0.74219-2.7656 0.57812-3.7891-0.39844-1.0273-0.98047-1.2695-2.5273-0.58594-3.7695l22.918-25c0.60156-0.61328 1.4297-0.96094 2.2891-0.96094 0.86328 0 1.6914 0.34766 2.293 0.96094l22.918 25c0.88672 1.2891 0.6875 3.0352-0.47266 4.0898-1.1562 1.0508-2.9141 1.0859-4.1133 0.078125z" />
</svg>
</a>
</footer>
<div class="jetpack-instant-search__widget-area" style="display: none">
<div id="media_image-3" class="widget widget_media_image"><a href="https://jetpack.com/upgrade/search/?aff=8638"><img width="600" height="444" src="https://i0.wp.com/css-tricks.com/wp-content/uploads/2020/09/Jetpack-Search-on-CSS-Tricks-Instant-Search.png?fit=600%2C444&amp;ssl=1" class="image wp-image-321694  attachment-full size-full jetpack-lazy-image" alt="" loading="lazy" style="max-width: 100%; height: auto;" data-lazy-srcset="https://i0.wp.com/css-tricks.com/wp-content/uploads/2020/09/Jetpack-Search-on-CSS-Tricks-Instant-Search.png?w=600&amp;ssl=1 600w, https://i0.wp.com/css-tricks.com/wp-content/uploads/2020/09/Jetpack-Search-on-CSS-Tricks-Instant-Search.png?resize=300%2C222&amp;ssl=1 300w" data-lazy-sizes="(min-width: 735px) 864px, 96vw" data-lazy-src="https://i0.wp.com/css-tricks.com/wp-content/uploads/2020/09/Jetpack-Search-on-CSS-Tricks-Instant-Search.png?fit=600%2C444&amp;ssl=1&amp;is-pending-load=1" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" /></a></div><div id="jetpack-search-filters-5" class="widget jetpack-filters widget_search"> <div id="jetpack-search-filters-5-wrapper" class="jetpack-instant-search-wrapper">
</div></div> </div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, \'woocommerce-js\');
			document.body.className = c;
		})();
	</script>
<script src=\'https://css-tricks.com/wp-content/plugins/jetpack/_inc/build/photon/photon.min.js?ver=20191001\' id=\'jetpack-photon-js\'></script>
<script src=\'https://css-tricks.com/wp-content/themes/CSS-Tricks-18/js/min/jquery-3.5.1.min.js\' id=\'jquery-js\'></script>
<script type=\'text/javascript\' id=\'antispampro-script-js-extra\'>
/* <![CDATA[ */
var antispampro_vars = {"code":"micuno","input_name_suffix":"luwele"};
/* ]]> */
</script>
<script src=\'https://css-tricks.com/wp-content/plugins/anti-spam-pro/js/anti-spam-pro-4.1.js\' id=\'antispampro-script-js\'></script>
<script type=\'text/javascript\' id=\'jetpack-live-comment-markdown-js-extra\'>
/* <![CDATA[ */
var markdownify = {"ajax_url":"\\/wp-admin\\/admin-ajax.php","nonce":"4d7bd79089"};
/* ]]> */
</script>
<script src=\'https://css-tricks.com/wp-content/plugins/jetpack-markdown-live-preview-comments/js/markdownify.js?ver=1\' id=\'jetpack-live-comment-markdown-js\'></script>
<script id=\'jetpack-instant-search-ie11-js-before\'>
var JetpackInstantSearchIe11PolyfillPath=decodeURIComponent("https%3A%2F%2Fcss-tricks.com%2Fwp-content%2Fplugins%2Fjetpack%2F_inc%2Fbuild%2Finstant-search%2Fjp-search-ie11-polyfill-payload.bundle.js");
</script>
<script src=\'https://css-tricks.com/wp-content/plugins/jetpack/_inc/build/instant-search/jp-search-ie11-polyfill-loader.bundle.js?ver=9.5\' id=\'jetpack-instant-search-ie11-js\'></script>
<script src=\'https://css-tricks.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=7.4.4\' id=\'wp-polyfill-js\'></script>
<script id=\'wp-polyfill-js-after\'>
( \'fetch\' in window ) || document.write( \'<script src="https://css-tricks.com/wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr\' + \'ipt>\' );( document.contains ) || document.write( \'<script src="https://css-tricks.com/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr\' + \'ipt>\' );( window.DOMRect ) || document.write( \'<script src="https://css-tricks.com/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr\' + \'ipt>\' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( \'<script src="https://css-tricks.com/wp-includes/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr\' + \'ipt>\' );( window.FormData && window.FormData.prototype.keys ) || document.write( \'<script src="https://css-tricks.com/wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr\' + \'ipt>\' );( Element.prototype.matches && Element.prototype.closest ) || document.write( \'<script src="https://css-tricks.com/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr\' + \'ipt>\' );( \'objectFit\' in document.documentElement.style ) || document.write( \'<script src="https://css-tricks.com/wp-includes/js/dist/vendor/wp-polyfill-object-fit.min.js?ver=2.3.4"></scr\' + \'ipt>\' );
</script>
<script src=\'https://css-tricks.com/wp-includes/js/dist/hooks.min.js?ver=50e23bed88bcb9e6e14023e9961698c1\' id=\'wp-hooks-js\'></script>
<script src=\'https://css-tricks.com/wp-includes/js/dist/i18n.min.js?ver=db9a9a37da262883343e941c3731bc67\' id=\'wp-i18n-js\'></script>
<script id=\'wp-i18n-js-after\'>
wp.i18n.setLocaleData( { \'text direction\\u0004ltr\': [ \'ltr\' ] } );
</script>
<script id=\'jetpack-instant-search-js-translations\'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "jetpack", { "locale_data": { "messages": { "": {} } } } );
</script>
<script id=\'jetpack-instant-search-js-before\'>
var JetpackInstantSearchOptions=JSON.parse(decodeURIComponent("%7B%22overlayOptions%22%3A%7B%22colorTheme%22%3A%22dark%22%2C%22enableInfScroll%22%3Afalse%2C%22enableSort%22%3Atrue%2C%22highlightColor%22%3A%22%23f4af38%22%2C%22overlayTrigger%22%3A%22immediate%22%2C%22resultFormat%22%3A%22expanded%22%2C%22showPoweredBy%22%3Atrue%7D%2C%22homeUrl%22%3A%22https%3A%5C%2F%5C%2Fcss-tricks.com%22%2C%22locale%22%3A%22en-US%22%2C%22postsPerPage%22%3A11%2C%22siteId%22%3A45537868%2C%22postTypes%22%3A%7B%22post%22%3A%7B%22singular_name%22%3A%22Post%22%2C%22name%22%3A%22Posts%22%7D%2C%22page%22%3A%7B%22singular_name%22%3A%22Page%22%2C%22name%22%3A%22Pages%22%7D%2C%22attachment%22%3A%7B%22singular_name%22%3A%22Media%22%2C%22name%22%3A%22Media%22%7D%2C%22product%22%3A%7B%22singular_name%22%3A%22Product%22%2C%22name%22%3A%22Products%22%7D%2C%22screenshot%22%3A%7B%22singular_name%22%3A%22Screenshot%22%2C%22name%22%3A%22Screenshots%22%7D%2C%22guides%22%3A%7B%22singular_name%22%3A%22Guide%22%2C%22name%22%3A%22Guides%22%7D%2C%22newsletters%22%3A%7B%22singular_name%22%3A%22Newsletter%22%2C%22name%22%3A%22Newsletters%22%7D%2C%22chapters%22%3A%7B%22singular_name%22%3A%22Chapter%22%2C%22name%22%3A%22Chapters%22%7D%7D%2C%22webpackPublicPath%22%3A%22https%3A%5C%2F%5C%2Fcss-tricks.com%5C%2Fwp-content%5C%2Fplugins%5C%2Fjetpack%5C%2F_inc%5C%2Fbuild%5C%2Finstant-search%5C%2F%22%2C%22apiRoot%22%3A%22https%3A%5C%2F%5C%2Fcss-tricks.com%5C%2Fwp-json%5C%2F%22%2C%22apiNonce%22%3A%2263951ead94%22%2C%22isPrivateSite%22%3Afalse%2C%22isWpcom%22%3Afalse%2C%22defaultSort%22%3A%22relevance%22%2C%22excludedPostTypes%22%3A%5B%22attachment%22%2C%22screenshot%22%5D%2C%22hasOverlayWidgets%22%3Atrue%2C%22widgets%22%3A%5B%7B%22filters%22%3A%5B%7B%22name%22%3A%22Post%20Types%22%2C%22type%22%3A%22post_type%22%2C%22count%22%3A5%2C%22widget_id%22%3A%22jetpack-search-filters-5%22%2C%22filter_id%22%3A%22post_type_1%22%7D%2C%7B%22name%22%3A%22Year%22%2C%22type%22%3A%22date_histogram%22%2C%22count%22%3A1%2C%22field%22%3A%22post_date%22%2C%22interval%22%3A%22year%22%2C%22widget_id%22%3A%22jetpack-search-filters-5%22%2C%22filter_id%22%3A%22date_histogram_2%22%7D%2C%7B%22name%22%3A%22Tags%22%2C%22type%22%3A%22taxonomy%22%2C%22taxonomy%22%3A%22post_tag%22%2C%22count%22%3A5%2C%22widget_id%22%3A%22jetpack-search-filters-5%22%2C%22filter_id%22%3A%22taxonomy_3%22%7D%5D%2C%22widget_id%22%3A%22jetpack-search-filters-5%22%7D%5D%2C%22widgetsOutsideOverlay%22%3A%5B%7B%22filters%22%3A%5B%7B%22name%22%3A%22Tags%22%2C%22type%22%3A%22taxonomy%22%2C%22taxonomy%22%3A%22post_tag%22%2C%22count%22%3A5%2C%22widget_id%22%3A%22jetpack-search-filters-3%22%2C%22filter_id%22%3A%22taxonomy_0%22%7D%5D%2C%22widget_id%22%3A%22jetpack-search-filters-3%22%7D%5D%2C%22adminQueryFilter%22%3A%7B%22bool%22%3A%7B%22should%22%3A%5B%7B%22term%22%3A%7B%22post_type%22%3A%22post%22%7D%7D%2C%7B%22term%22%3A%7B%22post_type%22%3A%22page%22%7D%7D%2C%7B%22term%22%3A%7B%22post_type%22%3A%22newsletters%22%7D%7D%2C%7B%22term%22%3A%7B%22post_type%22%3A%22chapters%22%7D%7D%5D%7D%7D%7D"));
</script>
<script src=\'https://css-tricks.com/wp-content/plugins/jetpack/_inc/build/instant-search/jp-search-main.bundle.js?ver=9.5\' id=\'jetpack-instant-search-js\'></script>
<script src=\'//stats.wp.com/w.js?ver=202113\' id=\'jp-tracks-js\'></script>
<script src=\'https://css-tricks.com/wp-content/themes/CSS-Tricks-18/js/min/comment-reply.min.js?ver=1.1\' id=\'my-comment-reply-js\'></script>
<script src=\'https://css-tricks.com/wp-content/plugins/jetpack/vendor/automattic/jetpack-lazy-images/src/js/intersectionobserver-polyfill.min.js?ver=1.1.2\' id=\'jetpack-lazy-images-polyfill-intersectionobserver-js\'></script>
<script type=\'text/javascript\' id=\'jetpack-lazy-images-js-extra\'>
/* <![CDATA[ */
var jetpackLazyImagesL10n = {"loading_warning":"Images are still loading. Please cancel your print and try again."};
/* ]]> */
</script>
<script src=\'https://css-tricks.com/wp-content/plugins/jetpack/vendor/automattic/jetpack-lazy-images/src/js/lazy-images.min.js?ver=1.1.2\' id=\'jetpack-lazy-images-js\'></script>
<script async="async" src=\'https://css-tricks.com/wp-content/plugins/akismet/_inc/form.js?ver=4.1.9\' id=\'akismet-form-js\'></script>
<script>
    window.activeMember = false;
  </script>
<script src="https://css-tricks.com/wp-content/themes/CSS-Tricks-18/js/min/global-concat.min.js?cache_bust=1612547620485"></script>
<script>
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');
  ga(\'create\', \'UA-68528-29\', \'auto\');

  if (typeof articleYear !== "undefined") {
    ga(\'set\', \'dimension1\', articleYear);
  }
  if (typeof articleAuthor !== "undefined") {
    ga(\'set\', \'dimension2\', articleAuthor);
  }
  if (typeof articleType !== "undefined") {
    ga(\'set\', \'dimension3\', articleType);
  }

  ga(\'send\', \'pageview\');
</script>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
<script src="//instant.page/3.0.0" type="module" defer integrity="sha384-OeDn4XE77tdHo8pGtE1apMPmAipjoxUQ++eeJa6EtJCfHlvijigWiJpD7VDPWXV1"></script>
<svg width="0" height="0" class="screen-reader">
<defs>
<linearGradient id="orange-to-pink" x1="0" x2="1" y1="0" y2="1">
<stop offset="0%" stop-color="#ff7a18" />
<stop offset="40%" stop-color="#af002d" />
<stop offset="100%" stop-color="#319197" />
</linearGradient>
<filter id="duotone_orange_pink">
<feColorMatrix type="matrix" result="grayscale" values="1 0 0 0 0
                  1 0 0 0 0
                  1 0 0 0 0
                  0 0 0 1 0">
</feColorMatrix>
<feComponentTransfer color-interpolation-filters="sRGB" result="duotone">
<feFuncR type="table" tableValues="0.7411764706 0.9882352941"></feFuncR>
<feFuncG type="table" tableValues="0.0431372549 0.7333333333"></feFuncG>
<feFuncB type="table" tableValues="0.568627451 0.05098039216"></feFuncB>
<feFuncA type="table" tableValues="0 1"></feFuncA>
</feComponentTransfer>
</filter>
</defs>
</svg>
</body>
</html>'
];
