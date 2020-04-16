<?php
declare(strict_types = 1);

return [
    'headers' => [
        'date' => [
            'Thu, 16 Apr 2020 12:01:01 GMT'
        ],
        'content-type' => [
            'text/html; charset=UTF-8'
        ],
        'link' => [
            '<https://css-tricks.com/wp-json/>; rel="https://api.w.org/"',
            '<https://css-tricks.com/?p=306427>; rel=shortlink'
        ],
        'x-xss-protection' => [
            '1'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'referrer-policy' => [
            'no-referrer-when-downgrade'
        ],
        'x-fw-server' => [
            'Flywheel/5.1.0'
        ],
        'x-fw-dynamic' => [
            'TRUE'
        ],
        'x-fw-hash' => [
            'lwxgywlq8s'
        ],
        'x-fw-version' => [
            '5.0.0'
        ],
        'x-cacheable' => [
            'YES'
        ],
        'fastly-restarts' => [
            '1'
        ],
        'x-served-by' => [
            'cache-mad22034-MAD'
        ],
        'x-cache' => [
            'HIT'
        ],
        'x-cache-hits' => [
            '1'
        ],
        'x-timer' => [
            'S1587038462.797662,VS0,VE1'
        ],
        'vary' => [
            'Accept-Encoding, Authorization'
        ],
        'x-fw-serve' => [
            'TRUE'
        ],
        'x-fw-static' => [
            'NO'
        ],
        'x-fw-type' => [
            'VISIT'
        ],
        'cf-cache-status' => [
            'DYNAMIC'
        ],
        'expect-ct' => [
            'max-age=604800, report-uri="https://report-uri.cloudflare.com/cdn-cgi/beacon/expect-ct"'
        ],
        'strict-transport-security' => [
            'max-age=31536000; includeSubDomains; preload'
        ],
        'server' => [
            'cloudflare'
        ],
        'cf-ray' => [
            '584dbfd1fc8bff68-MAD'
        ],
        'content-encoding' => [
            'br'
        ],
        'alt-svc' => [
            'h3-27=":443"; ma=86400, h3-25=":443"; ma=86400, h3-24=":443"; ma=86400, h3-23=":443"; ma=86400'
        ],
        'cf-request-id' => [
            '022476373a0000ff687c197200000001'
        ],
        'Content-Location' => [
            'https://css-tricks.com/css-scrollbar-with-progress-meter/'
        ],
        'X-Request-Time' => [
            '0.150 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>
    CSS Scrollbar With Progress Meter | CSS-Tricks  </title>
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<meta name="msapplication-TileColor" content="#00aba9">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta property="fb:pages" content="124436167285">
<meta name="monetization" content="$pay.stronghold.co/1a1b91b23306ab547228c43af27ac0f2411">
<link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="CSS-Tricks Search">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="https://css-tricks.com/feed/">
<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/610186/6122012/css/fonts.css" />
<link rel="stylesheet" href="https://css-tricks.com/wp-content/themes/CSS-Tricks-17/style.css?cache_bust=1586894691493">
<link rel="preconnect" href="https://s3.buysellads.com">
<link rel="dns-prefetch" href="https://s3.buysellads.com">
<link rel="preconnect" href="https://srv.buysellads.com">
<link rel="dns-prefetch" href="https://srv.buysellads.com">
<link rel="preconnect" href="https://res.cloudinary.com">
<link rel="dns-prefetch" href="https://res.cloudinary.com">
<link rel="preconnect" href="https://static.codepen.io">
<link rel="dns-prefetch" href="https://static.codepen.io">
<script type="3250e88898dc4b0d345158b0-text/javascript">window._wca = window._wca || [];</script>

<meta name="description" content="Scrollbars are natural progress meters. How far the scrollbar is down or across is how much progress has been made scrolling through that element (often" />
<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
<link rel="canonical" href="https://css-tricks.com/css-scrollbar-with-progress-meter/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="CSS Scrollbar With Progress Meter | CSS-Tricks" />
<meta property="og:description" content="Scrollbars are natural progress meters. How far the scrollbar is down or across is how much progress has been made scrolling through that element (often" />
<meta property="og:url" content="https://css-tricks.com/css-scrollbar-with-progress-meter/" />
<meta property="og:site_name" content="CSS-Tricks" />
<meta property="article:publisher" content="https://www.facebook.com/CSSTricks" />
<meta property="article:section" content="Article" />
<meta property="article:published_time" content="2020-04-15T21:49:51+00:00" />
<meta property="article:modified_time" content="2020-04-15T21:49:52+00:00" />
<meta property="og:updated_time" content="2020-04-15T21:49:52+00:00" />
<meta property="og:image" content="https://i1.wp.com/css-tricks.com/wp-content/uploads/2020/04/scrollbar-progress.png?fit=1200%2C600&#038;ssl=1" />
<meta property="og:image:secure_url" content="https://i1.wp.com/css-tricks.com/wp-content/uploads/2020/04/scrollbar-progress.png?fit=1200%2C600&#038;ssl=1" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="600" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Scrollbars are natural progress meters. How far the scrollbar is down or across is how much progress has been made scrolling through that element (often" />
<meta name="twitter:title" content="CSS Scrollbar With Progress Meter | CSS-Tricks" />
<meta name="twitter:site" content="@CSS" />
<meta name="twitter:image" content="https://i1.wp.com/css-tricks.com/wp-content/uploads/2020/04/scrollbar-progress.png?fit=1200%2C600&#038;ssl=1" />
<meta name="twitter:creator" content="@chriscoyier" />
<script type=\'application/ld+json\' class=\'yoast-schema-graph yoast-schema-graph--main\'>{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://css-tricks.com/#organization","name":"CSS-Tricks","url":"https://css-tricks.com/","sameAs":["https://www.facebook.com/CSSTricks","https://twitter.com/CSS"],"logo":{"@type":"ImageObject","@id":"https://css-tricks.com/#logo","inLanguage":"en-US","url":"https://i0.wp.com/css-tricks.com/wp-content/uploads/2019/06/akqRGyta_400x400.jpg?ssl=1","caption":"CSS-Tricks"},"image":{"@id":"https://css-tricks.com/#logo"}},{"@type":"WebSite","@id":"https://css-tricks.com/#website","url":"https://css-tricks.com/","name":"CSS-Tricks","inLanguage":"en-US","description":"Tips, Tricks, and Techniques on using Cascading Style Sheets.","publisher":{"@id":"https://css-tricks.com/#organization"},"potentialAction":[{"@type":"SearchAction","target":"https://css-tricks.com/?s={search_term_string}","query-input":"required name=search_term_string"}]},{"@type":"ImageObject","@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/#primaryimage","inLanguage":"en-US","url":"https://i1.wp.com/css-tricks.com/wp-content/uploads/2020/04/scrollbar-progress.png?fit=1200%2C600&ssl=1","width":1200,"height":600},{"@type":"WebPage","@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/#webpage","url":"https://css-tricks.com/css-scrollbar-with-progress-meter/","name":"CSS Scrollbar With Progress Meter | CSS-Tricks","isPartOf":{"@id":"https://css-tricks.com/#website"},"inLanguage":"en-US","primaryImageOfPage":{"@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/#primaryimage"},"datePublished":"2020-04-15T21:49:51+00:00","dateModified":"2020-04-15T21:49:52+00:00","description":"Scrollbars are natural progress meters. How far the scrollbar is down or across is how much progress has been made scrolling through that element (often","breadcrumb":{"@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/#breadcrumb"},"potentialAction":[{"@type":"ReadAction","target":["https://css-tricks.com/css-scrollbar-with-progress-meter/"]}]},{"@type":"BreadcrumbList","@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"https://css-tricks.com/","url":"https://css-tricks.com/","name":"Home"}},{"@type":"ListItem","position":2,"item":{"@type":"WebPage","@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/","url":"https://css-tricks.com/css-scrollbar-with-progress-meter/","name":"CSS Scrollbar With Progress Meter"}}]},{"@type":"Article","@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/#article","isPartOf":{"@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/#webpage"},"author":{"@id":"https://css-tricks.com/#/schema/person/64c4d3ceff9df103b822544d9c51389a"},"headline":"CSS Scrollbar With Progress Meter","datePublished":"2020-04-15T21:49:51+00:00","dateModified":"2020-04-15T21:49:52+00:00","commentCount":"1","mainEntityOfPage":{"@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/#webpage"},"publisher":{"@id":"https://css-tricks.com/#organization"},"image":{"@id":"https://css-tricks.com/css-scrollbar-with-progress-meter/#primaryimage"},"articleSection":"Article","inLanguage":"en-US","potentialAction":[{"@type":"CommentAction","name":"Comment","target":["https://css-tricks.com/css-scrollbar-with-progress-meter/#respond"]}]},{"@type":["Person"],"@id":"https://css-tricks.com/#/schema/person/64c4d3ceff9df103b822544d9c51389a","name":"Chris Coyier","image":{"@type":"ImageObject","@id":"https://css-tricks.com/#authorlogo","inLanguage":"en-US","url":"https://secure.gravatar.com/avatar/8081b26e05bb4354f7d65ffc34cbbd67?s=96&d=retro&r=pg","caption":"Chris Coyier"},"description":"Founder, writer, designer, spam-deleter, email personality","sameAs":["https://twitter.com/chriscoyier"]}]}</script>

<link rel=\'dns-prefetch\' href=\'//stats.wp.com\' />
<link rel="alternate" type="application/rss+xml" title="CSS-Tricks &raquo; CSS Scrollbar With Progress Meter Comments Feed" href="https://css-tricks.com/css-scrollbar-with-progress-meter/feed/" />
<link rel=\'stylesheet\' id=\'wc-block-style-css\' href=\'https://css-tricks.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=2.5.14\' type=\'text/css\' media=\'all\' />
<style id=\'woocommerce-inline-inline-css\' type=\'text/css\'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel=\'stylesheet\' id=\'wc-memberships-frontend-css\' href=\'https://css-tricks.com/wp-content/plugins/woocommerce-memberships/assets/css/frontend/wc-memberships-frontend.min.css?ver=1.17.2\' type=\'text/css\' media=\'all\' />
<link rel=\'stylesheet\' id=\'jetpack-instant-search-css\' href=\'https://css-tricks.com/wp-content/plugins/jetpack/_inc/build/instant-search/instant-search.min.css?ver=8.4.2\' type=\'text/css\' media=\'all\' />
<script src=\'https://css-tricks.com/wp-content/themes/CSS-Tricks-17/js/min/jquery-3.4.1.min.js\' type="3250e88898dc4b0d345158b0-text/javascript"></script>
<script type="3250e88898dc4b0d345158b0-text/javascript">
/* <![CDATA[ */
var related_posts_js_options = {"post_heading":"h4"};
/* ]]> */
</script>
<script src=\'https://css-tricks.com/wp-content/plugins/jetpack/_inc/build/related-posts/related-posts.min.js?ver=20191011\' type="3250e88898dc4b0d345158b0-text/javascript"></script>
<script async src=\'https://stats.wp.com/s-202016.js\' type="3250e88898dc4b0d345158b0-text/javascript"></script>
<link rel=\'https://api.w.org/\' href=\'https://css-tricks.com/wp-json/\' />
<link rel=\'shortlink\' href=\'https://css-tricks.com/?p=306427\' />
<link rel="alternate" type="application/json+oembed" href="https://css-tricks.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcss-tricks.com%2Fcss-scrollbar-with-progress-meter%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://css-tricks.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcss-tricks.com%2Fcss-scrollbar-with-progress-meter%2F&#038;format=xml" />

<meta name="generator" content="Site Kit by Google 1.7.0" />
<link rel=\'dns-prefetch\' href=\'//i0.wp.com\' />
<link rel=\'dns-prefetch\' href=\'//i1.wp.com\' />
<link rel=\'dns-prefetch\' href=\'//i2.wp.com\' />
<style type=\'text/css\'>img#wpstats{display:none}</style> <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
<style type="text/css">
				/* If html does not have either class, do not show lazy loaded images. */
				html:not( .jetpack-lazy-images-js-enabled ):not( .js ) .jetpack-lazy-image {
					display: none;
				}
			</style>
<script type="3250e88898dc4b0d345158b0-text/javascript">
				document.documentElement.classList.add(
					\'jetpack-lazy-images-js-enabled\'
				);
			</script>
</head>
<body class="post-template-default single single-post postid-306427 single-format-standard theme-CSS-Tricks-17 woocommerce-no-js category-article" id="top">
<a id="skip-nav" class="skip-nav screen-reader-text" href="#maincontent">Skip to main content</a>
<div id="top-of-site-pixel-anchor"></div>
<header class="site-header" id="site-header">
<div class="logo">
<a href="/">
<div class="screen-reader-text">CSS-Tricks</div>
<svg class="icon-logo-star" width="35px" height="35px">
<use xlink:href="#icon-logo-star"></use>
</svg>

<svg class="icon-logo-text" width="214px" height="35px">
<use xlink:href="#logo"></use>
</svg>
</a>
</div>
<div class="header-middle-area">
<nav class="main-nav" id="main-nav">
<ul class="main-sections">
<li class="articles">
<a href="/archives/">
<span>Articles</span>
</a>
</li>
<li class="almanac">
<a href="/almanac/">
<span>Almanac</span>
</a>
</li>
<li class="videos">
<a href="/video-screencasts/">
<span>Videos</span>
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
</ul>
<hr class="squiggle">
<div class="mobile-other-nav">
<a href="/contact/">Contact</a>
<a href="/about/">About</a>
<a href="/archives/">Archives</a>
<a href="/advertising/">Advertise</a>
<a href="/jobs/">Jobs</a>
<a href="/license/">License</a>
<a href="/subscription-options/">Subscribe</a>
<a href="/guest-posting/">Guest Posting</a>
</div>
<div class="mobile-social">
<a href="https://www.facebook.com/CSSTricks/" class="social-link-facebook">
<span class="screen-reader-text">Facebook</span>
<svg class="logo-facebook" width="20px" height="20px">
<use xlink:href="#logo-facebook"></use>
</svg>
</a>
<a href="https://twitter.com/css" class="social-link-twitter">
<span class="screen-reader-text">Twitter</span>
<svg class="logo-twitter" width="20px" height="20px">
<use xlink:href="#logo-twitter"></use>
</svg>
</a>
<a href="https://www.youtube.com/user/realcsstricks" class="social-link-youtube">
<span class="screen-reader-text">YouTube</span>
<svg class="logo-youtube" width="20px" height="20px">
<use xlink:href="#logo-youtube"></use>
</svg>
</a>
<a href="https://www.instagram.com/real_css_tricks/" class="social-link-instagram">
<span class="screen-reader-text">Instagram</span>
<svg class="logo-instagram" width="20px" height="20px">
<use xlink:href="#logo-instagram"></use>
</svg>
</a>
<a href="https://css-tricks.com/feed/" class="social-link-rss">
<span class="screen-reader-text">RSS</span>
<svg class="logo-rss" width="20px" height="20px">
<use xlink:href="#logo-rss"></use>
</svg>
</a>
</div>
</nav>
</div>
<div class="search" role="search" id="search-area">
<div class="chw-widget"><form role="search" method="get" id="searchform" class="search-form" action="https://css-tricks.com/">
<label class="screen-reader-text" id="search-label" for="search-input">Search for:</label>
<input type="search" required name="s" id="search-input" class="search-field" placeholder="e.g. flexbox" value="">
<input type="hidden" name="orderby" value="relevance">
<input type="hidden" name="post_type" value="post,page,guide">
<button type="submit" class="button-search">
<span class="screen-reader-text">Search</span>
<svg class="icon-search" width="20px" height="20px">
<use xlink:href="#icon-search"></use>
</svg>
</button>
</form></div> </div>
<div class="mobile-actions" id="mobile-actions">
<button class="search-opener" id="search-opener">
<span class="screen-reader-text">Open Search</span>
<svg class="icon-search" width="26px" height="26px">
<use xlink:href="#icon-search"></use>
</svg>
<svg class="icon-search-close" width="26px" height="26px">
<use xlink:href="#icon-close"></use>
</svg>
</button>
<button id="mobile-nav-button" class="mobile-nav-button">
<span class="screen-reader-text">Open Navigation</span>
<svg class="icon-burger" width="28px" height="28px">
<use xlink:href="#icon-burger"></use>
</svg>
<svg class="icon-close" width="28px" height="28px">
<use xlink:href="#icon-close"></use>
</svg>
</button>
</div>
</header>
<div class="all-site-wrap" id="all-site-wrap">
<script type="3250e88898dc4b0d345158b0-text/javascript">
  var articleYear = 2020;
  var articleAuthor = "3";
  var articleType = "post";
</script>
<main id="post-306427" class="instapaper_body h-entry e-content">
<article>
<header class="mega-header mega-header-article header-with-bottom-gradient header-breadcrumbs" id="maincontent">
<style>
    .mega-header::before {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      width: 75%;
      height: 90%;
              background-image:
          radial-gradient(ellipse closest-side, rgba(15, 14, 22, 0.5), #100e17),
          url(https://res.cloudinary.com/css-tricks/image/fetch/w_1200,q_auto,f_auto/https://css-tricks.com/wp-content/uploads/2020/04/scrollbar-progress.png);
            background-size: cover;
      background-repeat: no-repeat;
      opacity: 0.75;
    }
  </style>
<div class="mega-header-inside">
<div class="mega-header-header">
<span>
<a href="/">Home</a> <span class="breadcrumb-separator">/</span>
<span>
<a href="/archives/">Articles</a> <span class="breadcrumb-separator">/</span>
</span>
</span>
<h1>
CSS Scrollbar With Progress&nbsp;Meter </h1>
<div class="article-content-meta">
<div class="author-avatar">
<a href="https://css-tricks.com/author/chriscoyier/">
<img alt="Avatar of Chris Coyier" src="https://secure.gravatar.com/avatar/8081b26e05bb4354f7d65ffc34cbbd67?s=80&#038;d=retro&#038;r=pg" srcset="https://secure.gravatar.com/avatar/8081b26e05bb4354f7d65ffc34cbbd67?s=160&#038;d=retro&#038;r=pg 2x" class="avatar avatar-80 photo skip-lazy" height="80" width="80"><noscript><img alt=\'Avatar of Chris Coyier\' src=\'https://secure.gravatar.com/avatar/8081b26e05bb4354f7d65ffc34cbbd67?s=80&#038;d=retro&#038;r=pg\' srcset=\'https://secure.gravatar.com/avatar/8081b26e05bb4354f7d65ffc34cbbd67?s=160&#038;d=retro&#038;r=pg 2x\' class=\'avatar avatar-80 photo skip-lazy\' height=\'80\' width=\'80\' /></noscript> </a>
<svg class="half-circle" width="80px" height="80px">
<use xlink:href="#half-circle"></use>
</svg>
</div>
<div class="author-name-area">
<div class="author-name-prefix">
Author
</div>
<a class="author-name" href="https://css-tricks.com/author/chriscoyier/">
Chris Coyier </a>
</div>
<div class="article-comments-meta">
<div class="comments-prefix">
1 Comment </div>
<a class="comments-link" href="https://css-tricks.com/css-scrollbar-with-progress-meter/#comments">
Join Conversation
<svg viewBox="0 0 24 24" class="icon-arrow-right" xmlns="http://www.w3.org/2000/svg">
<path d="M7 12.5L23 12.5" stroke="url(#paint0_linear)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
<path d="M1 12.5H2" stroke="url(#paint1_linear)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
<path d="M17.5 7L23 12.5L17.5 18" stroke="url(#paint2_linear)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
<defs>
<linearGradient id="paint0_linear" x1="10.7498" y1="12.5" x2="11.3447" y2="9.73465" gradientUnits="userSpaceOnUse">
<stop stop-color="#FF8A00" />
<stop offset="1" stop-color="#DA1B60" />
</linearGradient>
<linearGradient id="paint1_linear" x1="1.23436" y1="12.5" x2="2.00945" y2="12.2748" gradientUnits="userSpaceOnUse">
<stop stop-color="#FF8A00" />
<stop offset="1" stop-color="#DA1B60" />
</linearGradient>
<linearGradient id="paint2_linear" x1="18.789" y1="17.9995" x2="23.3162" y2="17.3419" gradientUnits="userSpaceOnUse">
<stop stop-color="#FF8A00" />
<stop offset="1" stop-color="#DA1B60" />
</linearGradient>
</defs>
</svg>
</a>
</div>
<div class="date">
<div class="date-prefix">
Published
</div>
<time datetime="">
Apr 15, 2020 </time>
</div>
</div>
</div>
<div class="hero-article-ad" id="hero-article-ad">
</div>
</div>
</header>
<div class="header-gradient-after">
<div class="header-gradient-content">
<div class="header-gradient-content-inside">
<div class="bold-underline-links header-gradient-sponsor">
<p>
Learn Development at <a href="https://frontendmasters.com/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-monthly-site-sponsor">Frontend Masters</a>
</p> </div>
</div>
</div>
</div>
<div class="page-wrap page-wrap-single">
<div class="article-and-sidebar on-light">
<div class="article-content">
<p>Scrollbars are natural progress meters. How far the scrollbar is down or across is how much progress has been made scrolling through that element (often the entire page). But, they are more like progress indicators than meters, if you think of a meter as something that &#8220;fills up&#8221; as you go. </p>
<p>We can use some CSS trickery to make the scrollbar fill up as we go.</p>
<span id="more-306427"></span>
<p class="explanation">This will only work with <code>-webkit-</code> vendor-prefixed scrollbar-styling properties. In other words, these are non-standard. The standardized scrollbar styling properties are <code>scrollbar-width</code> and <code>scrollbar-color</code>, which can&#8217;t pull this kind of thing off, but are probably a safer bet in the long run. Still, the vendor-prefixed versions probably aren&#8217;t going anywhere, so if you consider this a weird form of progressive enhancement, that&#8217;s probably fine.</p>
<h3>What&#8217;s the trick?</h3>
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
<h3>Demo</h3>
<div class="wp-block-cp-codepen-gutenberg-embed-block cp_embed_wrapper"><iframe id="cp_embed_YzXmRoB" src="//codepen.io/anon/embed/YzXmRoB?height=550&amp;theme-id=1&amp;slug-hash=YzXmRoB&amp;default-tab=result" height="550" scrolling="no" frameborder="0" allowfullscreen allowpaymentrequest name="CodePen Embed YzXmRoB" title="CodePen Embed YzXmRoB" class="cp_embed_iframe" style="width:100%;overflow:hidden">CodePen Embed Fallback</iframe></div>
<p>I first saw this in <a href="https://codepen.io/mykt0ngc0/pen/oNXqJgx" class="ek-link">a Pen by Myk</a>. </p>
<p>That example didn&#8217;t differentiate the thumb part of the scrollbar at all, which makes it more meter-like, but also harder to use. My demo has a slightly different color thumb. </p>
<h3>Can I really use this?</h3>
<p>No! Aside from it being super weird and non-standard. Safari flips it&#8217;s lid and I have no idea how to fix it. </p>
<figure class="wp-block-image size-large"><img src="https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?fit=911%2C1024&amp;ssl=1" alt class="wp-image-306696 jetpack-lazy-image" data-lazy-srcset="https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?w=2094&amp;ssl=1 2094w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=267%2C300&amp;ssl=1 267w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=911%2C1024&amp;ssl=1 911w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=768%2C863&amp;ssl=1 768w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=1366%2C1536&amp;ssl=1 1366w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=1822%2C2048&amp;ssl=1 1822w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=1000%2C1124&amp;ssl=1 1000w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?w=2000&amp;ssl=1 2000w" data-lazy-sizes="(min-width: 735px) 864px, 96vw" data-lazy-src="https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?fit=911%2C1024&amp;ssl=1&amp;is-pending-load=1" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"><noscript><img src="https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?fit=911%2C1024&amp;ssl=1" alt="" class="wp-image-306696" srcset="https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?w=2094&amp;ssl=1 2094w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=267%2C300&amp;ssl=1 267w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=911%2C1024&amp;ssl=1 911w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=768%2C863&amp;ssl=1 768w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=1366%2C1536&amp;ssl=1 1366w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=1822%2C2048&amp;ssl=1 1822w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?resize=1000%2C1124&amp;ssl=1 1000w, https://i2.wp.com/css-tricks.com/wp-content/uploads/2020/04/safari-freakout.png?w=2000&amp;ssl=1 2000w" sizes="(min-width: 735px) 864px, 96vw" /></noscript></figure>
<p>I do happen to have <a href="https://css-tricks.com/books/greatest-css-tricks/scroll-indicator/">a favorite CSS trick</a> that is highly related to this though. </p>
<h3>I want to learn more about styling scrollbars</h3>
<p>Cool, <a href="https://css-tricks.com/the-current-state-of-styling-scrollbars/" class="ek-link">here you go</a>.</p>
</div>
<aside class="entry-unrelated sidebar">
<div id="all-ads">
<div id="scroll-ad-position"></div>
<div id="sticky-sidebar-stuff">
<div id="conditional-message">
<div class="fem-ad fem-sidebar-ad">
<div class="fem-header">
<div class="fem-header-inner">
<div class="fem-learning-partner">
Our Learning Partner
</div>
<a href="https://frontendmasters.com/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar"><img src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1578251803/FEM-sidebar-Generic_dipjef.png" alt="Frontend Masters logo" class="fem-logo" /></a>
</div>
</div>
<svg class="fem-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><defs><linearGradient id="linear" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" stop-color="#c02d28"></stop><stop offset="100%" stop-color="#e66225"></stop></linearGradient></defs><polygon points="0,2 0,0 100,0 100,10" fill="url(#linear)"></polygon></svg>
<div class="fem-message">
<h4>Need some front-end development training?</h4>
<p><a href="https://frontendmasters.com/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">Frontend Masters</a> is the best place to get it. They have courses on all the most important front-end technologies, from <a href="https://frontendmasters.com/learn/react/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">React</a> to <a href="https://frontendmasters.com/learn/css/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">CSS</a>, from <a href="https://frontendmasters.com/learn/vue/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">Vue</a> to <a href="https://frontendmasters.com/learn/d3-js/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">D3</a>, and beyond with <a href="https://frontendmasters.com/learn/node-js/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">Node.js</a> and <a href="https://frontendmasters.com/learn/fullstack/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">Full Stack</a>.</p>
</div>
</div>
</div> </div>
</div>
</aside>
</div>
</div>
</article>
</main>
<div class="related-ads-comments-wrap">
<div class="related-ads-comments">
<div class="end-of-article-ads">
<div id="conditional-message">
<div class="fem-ad fem-footer-ad">
<div class="fem-header">
<div class="fem-header-inner">
<a href="https://frontendmasters.com/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar"><img src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1578251803/FEM-footer-Generic_fgvhuc.png" alt="Frontend Masters logo" class="fem-logo-large" /></a>
</div>
</div>
<div class="fem-message">
<div>
<h4>Need some front-end development training?</h4>
<p><a href="https://frontendmasters.com/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">Frontend Masters</a> is the best place to get it. They have courses on all the most important front-end technologies, from <a href="https://frontendmasters.com/learn/react/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">React</a> to <a href="https://frontendmasters.com/learn/css/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">CSS</a>, from <a href="https://frontendmasters.com/learn/vue/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">Vue</a> to <a href="https://frontendmasters.com/learn/d3-js/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">D3</a>, and beyond with <a href="https://frontendmasters.com/learn/node-js/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">Node.js</a> and <a href="https://frontendmasters.com/learn/fullstack/?utm_source=css-tricks&utm_medium=website&utm_campaign=css-tricks-tags-sidebar">Full Stack</a>.</p>
</div>
</div>
</div>
</div>
<div class="bsap-doubles side-by-side">
<div id="bsap_1250418" class="bsarocks bsap_3469a2a501a9e18091036aa0c89f9dcb"></div>
</div>
</div>
<section class="respond-area">
<h2 class="comments-title" id="comments">
Comments
</h2>
<ol class="commentlist" id="commentlist">
<li class="comment byuser comment-author-chriskirknielsen even thread-even depth-1" id="li-comment-1755818">
<div class="comment-wrap" id="comment-1755818">
<div class="author-avatar">
<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="50" height="50" loading="lazy" class="lazyload-gravatar" alt="User Avatar" data-src="https://secure.gravatar.com/avatar/fc9366ca85d42ef14145d5b386969ad5?s=160&d=retro&r=pg">
<svg class="half-circle" width="80px" height="80px">
<use xlink:href="#half-circle"></use>
</svg>
</div>
<div class="comment-body">
<div class="comment-author-wrap vcard">
<div class="comment-author">Christopher Kirk-Nielsen</div> <div class="comment-time"><a href="https://css-tricks.com/css-scrollbar-with-progress-meter/#comment-1755818"><span class="screen-reader">Permalink to comment</span>#</a> <time datetime="2020-04-15T15:14:07-07:00">April 15, 2020</time></div>
</div>
<div class="comment-content article-content">
<p>Tried using <code>filter</code> instead but that property seems invalid on scrollbars. Using a chain of <code>box-shadow</code>s seems to be pretty effective but highly brittle if the content is very tall (a Sass loop to add a shadow for each unit of <code>vh</code> from 1 to 100 is a bit overkill, probably): <a href="https://codepen.io/chrisknmojo/pen/jObWzym" rel="nofollow ugc">CodePen demo</a> (which by the way is still broken on Safari, just a tiny bit less, I guess?).</p>
</div>
</div>
<div class="comment-actions">
<div class="reply">
<a rel=\'nofollow\' class=\'comment-reply-link\' href=\'#comment-1755818\' data-commentid="1755818" data-postid="306427" data-belowelement="comment-1755818" data-respondelement="respond" aria-label=\'Reply to Christopher Kirk-Nielsen\'>Reply</a> </div>
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
<input type="hidden" name="_mc4wp_subscribe_wp-comment-form" value="0" /><p class=" mc4wp-checkbox mc4wp-checkbox-wp-comment-form"><label><input type="checkbox" name="_mc4wp_subscribe_wp-comment-form" value="1" checked="checked" /><span>Get the CSS-Tricks newsletter</span></label></p><p class="comment-subscription-form"><input type="checkbox" name="subscribe_comments" id="subscribe_comments" value="subscribe" style="width: auto; -moz-appearance: checkbox; -webkit-appearance: checkbox;" /> <label class="subscribe-label" id="subscribe-label" for="subscribe_comments">Notify me of follow-up comments by email.</label></p><p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment" /> <input type=\'hidden\' name=\'comment_post_ID\' value=\'306427\' id=\'comment_post_ID\' />
<input type=\'hidden\' name=\'comment_parent\' id=\'comment_parent\' value=\'0\' />
</p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="c9902a85f2" /></p> <p class="antispam-group antispam-group-q" style="clear: both;">
<label>Copy and paste this code: <strong class="antspmpro-input-a">micuno</strong> <span class="required">*</span></label>
<input type="hidden" name="antspmpro-a" class="antispam-control antispam-control-a" value="micuno" />
<input type="text" name="antspmpro-q-luwele" class="antispam-control antispam-control-q" value="4.1" />
</p>
<p class="antispam-group antispam-group-e" style="display: none;">
<label>Leave this field empty</label>
<input type="text" name="antspmpro-e-email-url-website-luwele" class="antispam-control antispam-control-e" value="" />
</p>
<p style="display: none;"><input type="hidden" id="ak_js" name="ak_js" value="199" /></p></form> </div>
<div class="comment-reminders bold-underline-links">
<p>All comments are held for moderation. We\'ll publish all comments that are on topic, not rude, and adhere to our <a href="/coc">Code of Conduct</a>. You\'ll even get little stars if you do an extra good job.</p>
<p>You may write comments in <a href="https://commonmark.org/help/">Markdown</a>. This is the best way to post any code, inline like `&lt;div>this&lt;/div>` or multiline blocks within triple backtick fences (```) with double new lines before and after.</p>
<p>Want to tell us something privately, like pointing out a typo or stuff like that? <a href="/contact/">Contact Us</a>.</p>
 </div>
</div>
<div class="comment-form-coc-area bold-underline-links">
We have a<br>
<a href="/coc/">Code of Conduct</a>.
<circle-text r="132" class="circle-text-coc">
Be cool. Be helpful. The web is a big place. Have fun. High five.
</circle-text>
</div>
</div>
</section> <div class="related-posts">
<div id=\'jp-relatedposts\' class=\'jp-relatedposts\'>
<h3 class="jp-relatedposts-headline"><em>Related</em></h3>
</div></div> </div>
</div>
</div>
<footer class="site-footer footer-newsletter">
<div class="footer-newsletter-inside">
<hr class="thick">
<h2>How do you stay up to date in this fast⁠-⁠moving&nbsp;industry?</h2>
<p>A good start is to sign up for our weekly hand-written newsletter. We bring you the best articles and ideas from around the web, and what we think about them.</p>
<div id="footer-form-wrap">
<form action="https://chriscoyier.us2.list-manage.com/subscribe/post?u=155f5a9ccc4e24c318130cace&amp;id=197f127a68" method="post" id="mc-embedded-subscribe-form">
<label for="mce-EMAIL" class="screen-reader">Email Address</label>
<input type="email" name="EMAIL" class="required email mailchimp-email-input" id="mce-EMAIL" placeholder="lovetricks@internet.cool" required="">
<input type="submit" value="Subscribe" name="Subscribe" id="mc-embedded-subscribe" class="button subscribe-button">
</form>
</div>
<div class="social-links">
<a href="https://www.facebook.com/CSSTricks/" class="social-link-facebook">
<strong>Facebook</strong>
<span>@CSSTricks</span>
</a>
<a href="https://twitter.com/css" class="social-link-twitter">
<strong>Twitter</strong>
<span>@CSS</span>
</a>
<a href="https://www.youtube.com/user/realcsstricks" class="social-link-youtube">
<strong>YouTube</strong>
<span>@realcsstricks</span>
</a>
<a href="https://www.instagram.com/real_css_tricks/" class="social-link-instagram">
<strong>Instagram</strong>
<span>@real_css_tricks</span>
</a>
<a href="https://css-tricks.com/feed/" class="social-link-rss">
<strong>RSS</strong>
<span>Feed</span>
</a>
</div>
</div>
</footer>
<div class="footer-colophon-wrapper">
<footer class="site-footer footer-colophon">
<div>
<p>CSS-Tricks<span>*</span> is created, written by, and maintained by <a href="https://chriscoyier.net">Chris Coyier</a> and <a href="/about/">a team</a> of swell people. The tech stack for this site is fairly <a href="/simple-boring/">boring</a>. That\'s a good thing! I\'ve used <a href="https://wordpress.org/">WordPress</a> since day one all the way up to <a href="/design-v17/">v17</a>, a decision I\'m <a href="/video-screencasts/154-poster-child-wordpress-site/">very happy with</a>. I also leverage <a href="/jetpack/">Jetpack</a> for extra functionality and <a href="/local-by-flywheel/">Local</a> for local development.</p>
<p class="mega-big-time-warning"><small><span>*</span>May or may not contain any actual "CSS" or&nbsp;"Tricks".</small></p>
</div>
<nav>
<h4>Other Nav</h4>
<a href="/contact/">Contact</a>
<a href="/about/">About</a>
<a href="/guest-posting/">Guest Writing</a>
<a href="/jobs">Jobs</a>
<a href="/advertising/">Advertise</a>
<a href="/license/">License</a>
<a href="/subscription-options/">Subscribe</a>
<a href="/authors/">All Authors</a>
</nav>
</footer>
</div>
<footer class="site-footer footer-partners">
<div class="footer-partner footer-partner-codepen">
<div>
<a href="https://codepen.io/">
<svg class="codepen-logo" viewBox="0 0 138 26" width="100%" height="100%"><path d="M15 8a7 7 0 1 0 0 10m7-8.7L33 2l11 7.3v7.4L33 24l-11-7.3zm0 0l11 7.4 11-7.4m0 7.4L33 9.3l-11 7.4M33 2v7.3m0 7.4V24M52 6h5a7 7 0 0 1 0 14h-5zm28 0h-9v14h9m-9-7h6m11 1h6a4 4 0 0 0 0-8h-6v14m26-14h-9v14h9m-9-7h6m11 7V6l11 14V6"></path></svg> <span class="screen-reader-text">CodePen</span>
</a>
<p class="bold-underline-links">
<a href="https://codepen.io/">CodePen</a> is a place to experiment, debug, and show off your HTML, CSS, and JavaScript creations.
</p>
</div>
</div>
<div class="footer-partner footer-partner-flywheel">
<div>
<a href="https://share.getf.ly/k96n2f">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 589.02 164.24"><defs><style>.cls-1{fill:#50c6db;}</style></defs><title>Flywheel logo</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M82.7,18.32a63.8,63.8,0,1,0,63.8,63.79A63.79,63.79,0,0,0,82.7,18.32Zm-17.1,9a57.29,57.29,0,0,1,34.88.22,19.81,19.81,0,0,0-7.69,10.18c-2.41,7.3.13,14,2.38,19.84l.25.64c1.31,3.47,1.94,7.92-1.44,11.05a17,17,0,0,0-4.66-3c.53-7.19-3.68-13.54-11.72-17.18L77,48.83C71.67,46.44,67.1,44.38,64.82,40c-2.48-4.75-1.07-9.35.55-12.37ZM91.73,82a9,9,0,1,1-9-9A9,9,0,0,1,91.73,82Zm-36-50.5a19.63,19.63,0,0,0,2,12.24c3.56,6.82,10.13,9.79,15.93,12.41l.64.29c3.4,1.54,7,4.22,7.07,8.63A16.93,16.93,0,0,0,76,66.36c-4.78-5.52-12.32-7.15-20.61-4.18l-.66.24c-5.45,2-10.15,3.65-14.95,2.11a13.3,13.3,0,0,1-8.3-8.27A57.8,57.8,0,0,1,55.71,31.47ZM27.84,99a57.43,57.43,0,0,1-.11-33.42,20.39,20.39,0,0,0,9.6,6.55c7.39,2.38,14.15,0,20.11-2.19l.65-.24c3.6-1.29,8.23-1.88,11.5,1.48A16.78,16.78,0,0,0,67,75.59c-7.47-.75-14.08,3.34-17.82,11.34l-.29.63c-2.39,5.13-4.46,9.56-8.9,11.76a13.77,13.77,0,0,1-11.9-.17ZM55.2,132.47a57.75,57.75,0,0,1-23.49-24,22.72,22.72,0,0,0,2.72.18,20.31,20.31,0,0,0,9.08-2.11c7-3.44,10-9.88,12.61-15.55l.29-.62c1.61-3.45,4.5-7.11,9.4-6.81A16.81,16.81,0,0,0,67,88.42c-5.81,4.67-7.51,12.19-4.34,20.5l.25.65c2,5.31,3.77,9.89,2.25,14.48-1.67,5.07-6,7.34-9.4,8.34ZM100,136.83a57.27,57.27,0,0,1-34.94-.1,19.79,19.79,0,0,0,7.69-10.17c2.41-7.3-.13-14-2.38-19.84l-.24-.64c-1.34-3.52-2-8,1.57-11.18a16.83,16.83,0,0,0,4.55,2.79C75.59,105,79.8,111.48,88,115.17l.65.29c5.28,2.39,9.85,4.45,12.13,8.82,2.48,4.75,1.07,9.35-.55,12.37C100.18,136.65,100.12,136.8,100,136.83Zm9.85-4.16a19.61,19.61,0,0,0-2-12.09c-3.56-6.82-10.13-9.79-15.93-12.41l-.64-.29c-3.49-1.58-7.21-4.36-7.06-9a16.86,16.86,0,0,0,5.12-1.25c4.77,5.74,12.43,7.48,20.85,4.46l.67-.24c5.44-2,10.14-3.66,14.94-2.11a13.24,13.24,0,0,1,8.22,8.06A57.77,57.77,0,0,1,109.86,132.67ZM140.1,82.11a57.12,57.12,0,0,1-2.41,16.43,20.34,20.34,0,0,0-9.47-6.39c-7.39-2.38-14.14,0-20.1,2.19l-.66.24c-3.67,1.31-8.43,1.91-11.71-1.69a17,17,0,0,0,2.6-4.2,18.2,18.2,0,0,0,1.94.12c6.75,0,12.65-4.07,16.1-11.45l.29-.63c2.4-5.13,4.46-9.56,8.91-11.76a13.71,13.71,0,0,1,11.95.2A57.18,57.18,0,0,1,140.1,82.11ZM122,57.8c-7,3.44-10,9.87-12.61,15.55l-.29.62c-1.62,3.46-4.53,7.16-9.47,6.81a16.85,16.85,0,0,0-1.1-4.93c5.8-4.67,7.48-12.18,4.32-20.48l-.25-.66c-2-5.3-3.77-9.88-2.25-14.48,1.67-5.06,6-7.33,9.4-8.34l.44-.12a57.79,57.79,0,0,1,23.48,24.08A20.55,20.55,0,0,0,122,57.8Z" /><path class="cls-1" d="M82.7.86A81.26,81.26,0,1,0,164,82.11,81.26,81.26,0,0,0,82.7.86Zm0,152.31a71.06,71.06,0,1,1,71.05-71.06A71.14,71.14,0,0,1,82.7,153.17Z" /><path class="cls-1" d="M150.27,15.1C142.66,7.42,132.85,1.78,124,0a1.1,1.1,0,0,0-.67,2.08,82.79,82.79,0,0,1,39.69,40.17,1.11,1.11,0,0,0,1,.65,1.26,1.26,0,0,0,.33-.05,1.11,1.11,0,0,0,.74-1.27C163.26,32.3,158,22.89,150.27,15.1Z" /><path class="cls-1" d="M41.8,162.14A82.79,82.79,0,0,1,2.11,122a1.1,1.1,0,0,0-2.09.67c1.87,9.3,7.15,18.71,14.87,26.5s17.42,13.32,26.23,15.08l.22,0a1.1,1.1,0,0,0,.46-2.1Z" /><path class="cls-1" d="M229.51,49.8h-30a1.76,1.76,0,0,0-1.75,1.75V113.2a1.75,1.75,0,0,0,1.75,1.75h6a1.75,1.75,0,0,0,1.75-1.75V87h19.4a1.75,1.75,0,0,0,1.75-1.75v-6a1.75,1.75,0,0,0-1.75-1.75H207.3V59.3h22.21a1.75,1.75,0,0,0,1.75-1.75v-6A1.75,1.75,0,0,0,229.51,49.8Z" /><path class="cls-1" d="M275.74,105.45H253.53V51.55a1.75,1.75,0,0,0-1.75-1.75h-6A1.76,1.76,0,0,0,244,51.55V113.2a1.75,1.75,0,0,0,1.75,1.75h30a1.75,1.75,0,0,0,1.75-1.75v-6A1.75,1.75,0,0,0,275.74,105.45Z" /><path class="cls-1" d="M317.67,49.57H311a1.74,1.74,0,0,0-1.54.92L295.92,75.56,282.07,50.47a1.75,1.75,0,0,0-1.53-.9h-6.68a1.75,1.75,0,0,0-1.54,2.59L291,86.58V113.2a1.75,1.75,0,0,0,1.75,1.75h6a1.75,1.75,0,0,0,1.75-1.75v-26l18.68-35.06a1.75,1.75,0,0,0-1.55-2.57Z" /><path class="cls-1" d="M587.27,105.45H565.06V51.55a1.75,1.75,0,0,0-1.75-1.75h-6a1.76,1.76,0,0,0-1.75,1.75V113.2a1.75,1.75,0,0,0,1.75,1.75h30A1.75,1.75,0,0,0,589,113.2v-6A1.75,1.75,0,0,0,587.27,105.45Z" /><path class="cls-1" d="M443.73,49.8h-6A1.76,1.76,0,0,0,436,51.55V77.49H414.5V51.55a1.75,1.75,0,0,0-1.75-1.75h-6A1.75,1.75,0,0,0,405,51.55V113.2a1.75,1.75,0,0,0,1.75,1.75h6a1.75,1.75,0,0,0,1.75-1.75V87H436V113.2a1.75,1.75,0,0,0,1.75,1.75h6a1.75,1.75,0,0,0,1.75-1.75V51.55A1.75,1.75,0,0,0,443.73,49.8Z" /><path class="cls-1" d="M492.1,49.8H461.71A1.76,1.76,0,0,0,460,51.55V113.2a1.75,1.75,0,0,0,1.75,1.75H492.1a1.75,1.75,0,0,0,1.75-1.75v-6a1.75,1.75,0,0,0-1.75-1.75H469.46V87h19.7a1.75,1.75,0,0,0,1.75-1.75v-6a1.75,1.75,0,0,0-1.75-1.75h-19.7V59.3H492.1a1.75,1.75,0,0,0,1.75-1.75v-6A1.75,1.75,0,0,0,492.1,49.8Z" /><path class="cls-1" d="M540,49.8H509.62a1.75,1.75,0,0,0-1.75,1.75V113.2a1.75,1.75,0,0,0,1.75,1.75H540a1.75,1.75,0,0,0,1.75-1.75v-6a1.75,1.75,0,0,0-1.75-1.75H517.37V87h19.76a1.75,1.75,0,0,0,1.75-1.75v-6a1.75,1.75,0,0,0-1.75-1.75H517.37V59.3H540a1.75,1.75,0,0,0,1.75-1.75v-6A1.75,1.75,0,0,0,540,49.8Z" /><path class="cls-1" d="M392.73,49.78h-6.57a1.25,1.25,0,0,0-1.22,1L374.81,94.4,364.5,50.75a1.25,1.25,0,0,0-1.22-1h-6.6a1.26,1.26,0,0,0-1.22,1l-10.32,43.6L335,50.75a1.25,1.25,0,0,0-1.22-1h-6.57a1.26,1.26,0,0,0-1,.48,1.25,1.25,0,0,0-.24,1.06L340.58,114a1.27,1.27,0,0,0,.26.58,1.25,1.25,0,0,0,1,.47h6.57a1.25,1.25,0,0,0,1.22-1L360,70.31l10.34,43.8a1.26,1.26,0,0,0,1.22,1h6.62a1.24,1.24,0,0,0,1.21-1L394,51.32a1.28,1.28,0,0,0-.24-1.06A1.26,1.26,0,0,0,392.73,49.78Z" /></g></g></svg> <span class="screen-reader-text">Flywheel</span>
</a>
<p class="bold-underline-links">
CSS-Tricks is hosted by <a href="https://share.getf.ly/k96n2f">Flywheel</a>, the best WordPress hosting in the business, with a local development tool to match.
</p>
</div>
</div>
<div class="footer-partner footer-partner-shoptalk">
<div>
<a href="https://shoptalkshow.com"><img class="shoptalk-img" src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1560364200/shoptalk_logo_e2defo.png" alt="ShopTalk Show"></a>
<p class="bold-underline-links">
<a href="https://shoptalkshow.com">ShopTalk</a> is a podcast all about front-end web design and development.
</p>
</div>
</div>
</footer>
<footer class="site-footer footer-subsites">
<div class="footer-subsite footer-subsite-conferences bold-underline-links">
<span class="presents"><strong>CSS-Tricks</strong> Presents</span>
📅 Upcoming <a href="https://conferences.css-tricks.com/">Front-End Conferences</a>
</div>
<div class="footer-subsite footer-subsite-serverless bold-underline-links">
<span class="presents"><strong>CSS-Tricks</strong> Presents</span>
<a href="https://serverless.css-tricks.com/">The Power of Serverless</a> for Front-End Developers
</div>
</footer>
<svg width="0" height="0" display="none" xmlns="http://www.w3.org/2000/svg">
<defs>
<clipPath id="clip0"><path fill="#fff" d="M0 0h40v40H0z" /></clipPath>
<clipPath id="a"><path fill="#fff" d="M0 0h40v40H0z" /></clipPath>
<clipPath id="a"><path fill="#fff" d="M0 0h40v40H0z" /></clipPath>
<clipPath id="clip0"><path fill="#fff" d="M0 0h40v40H0z" /></clipPath>
<clipPath id="clip0"><path fill="#fff" d="M0 0h40v40H0z" /></clipPath>
</defs>
<symbol id="half-circle" viewBox="0 0 106 57"><path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4" /></symbol>
<symbol id="icon-burger" viewBox="0 0 24 24"><rect y="2" width="24" height="2" rx="1" /><rect y="20" width="24" height="2" rx="1" /><rect y="8" width="24" height="2" rx="1" /><rect y="14" width="24" height="2" rx="1" /></symbol>
<symbol id="icon-close" viewBox="0 0 95.08 95.09"><path d="M58.31 47.47l34.58-34.58a7.63 7.63 0 000-10.69 7.63 7.63 0 00-10.69 0L47.62 36.78 13 2.19a7.63 7.63 0 00-10.69 0 7.63 7.63 0 000 10.69l34.6 34.6L2.33 82.07a7.29 7.29 0 000 10.69 7.63 7.63 0 0010.69 0l34.6-34.6 34.6 34.6a7.27 7.27 0 0010.68 0 7.63 7.63 0 000-10.69z" /></symbol>
<symbol id="icon-globe" viewBox="0 0 24 24"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zM2 12h20" /><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z" /></symbol>
<symbol id="icon-itunes" viewBox="0 0 171.75 171.75"><path d="M85.88 0a85.88 85.88 0 1085.87 85.88A85.88 85.88 0 0085.88 0zm38.52 24.27a3.64 3.64 0 013.67 2.81c.18.62.22 12 .18 45.45l-.07 44.61-.46 1.67a15.89 15.89 0 01-11 11.32c-3.88 1.16-9.57 1.6-12.36.94a12.2 12.2 0 01-6.26-3.61 12.82 12.82 0 01-4.14-9.6 12.4 12.4 0 011.37-5.81 12.67 12.67 0 016.53-6.44c2.64-1.32 5-2 11.88-3.44 4.52-1 5.62-1.35 6.5-2.4 1.21-1.44 1.19-.91 1.13-23.74-.06-19.83-.08-20.92-.44-21.47a2.86 2.86 0 00-2.83-1.07c-1.25.18-45.76 9.18-46.87 9.48a3.37 3.37 0 00-2.41 2.65c-.17.79-.24 9.55-.24 31.1 0 33.1 0 32.35-1.3 35.86a19.24 19.24 0 01-1.5 3.08 18.11 18.11 0 01-5 4.85c-4.06 2.4-12 3.64-16.25 2.53a13.17 13.17 0 01-9.35-8.56 16.44 16.44 0 01-.38-7.75 13.11 13.11 0 013.41-6.32c2.91-2.92 6.36-4.29 15.63-6.17 2-.41 4.07-.89 4.59-1.06a5.31 5.31 0 002.84-2.69c.35-.79.38-2.71.48-35.78l.1-34.95.49-1a5.88 5.88 0 013-2.73c.79-.3 47-9.72 54.86-11.18a37.21 37.21 0 014.2-.58z" /></symbol>
<symbol id="icon-link" viewBox="0 0 100 58.84"><path d="M78.47 48H49.21a10.66 10.66 0 01-9-4.91h10.58A21.57 21.57 0 0071.7 26.64h6.76a10.67 10.67 0 010 21.33zm-67.6-26.47a10.67 10.67 0 0110.67-10.66H50.8A10.59 10.59 0 0158.34 14a10.94 10.94 0 011.43 1.79H49.21a21.57 21.57 0 00-20.92 16.4h-6.76a10.67 10.67 0 01-10.66-10.66zm39.92 10.66H39.86a10.68 10.68 0 019.35-5.54h10.93a10.67 10.67 0 01-9.35 5.54zM100 37.31a21.53 21.53 0 00-21.53-21.53h-6.92A21.53 21.53 0 0050.8 0H21.54a21.53 21.53 0 000 43.06h6.83v-.31A21.41 21.41 0 0034 52.53a21.4 21.4 0 0015.2 6.31h29.26A21.56 21.56 0 00100 37.31z" /></symbol>
<symbol id="icon-logo-star" viewBox="0 0 362.62 388.52"><path d="M156.58 239l-88.3 64.75c-10.59 7.06-18.84 11.77-29.43 11.77-21.19 0-38.85-18.84-38.85-40 0-17.69 14.13-30.64 27.08-36.52l103.6-44.74-103.6-45.92C13 142.46 0 129.51 0 111.85 0 90.66 18.84 73 40 73c10.6 0 17.66 3.53 28.25 11.77l88.3 64.75-11.74-104.78C141.28 20 157.76 0 181.31 0s40 18.84 36.5 43.56L206 149.52l88.3-64.75C304.93 76.53 313.17 73 323.77 73a39.2 39.2 0 0138.85 38.85c0 18.84-12.95 30.61-27.08 36.5l-103.61 45.91L335.54 239c14.13 5.88 27.08 18.83 27.08 37.67 0 21.19-18.84 38.85-40 38.85-9.42 0-17.66-4.71-28.26-11.77L206 239l11.77 104.78c3.53 24.72-12.95 44.74-36.5 44.74s-40-18.84-36.5-43.56z" /></symbol>
<symbol id="icon-nav-almanac" viewBox="0 0 36 40"><path d="M31 39H9V1h22c2.2 0 4 1.8 4 4v30c0 2.2-1.8 4-4 4zM9 1H1v38h8V1zM2 10h7M2 14h7" /><path d="M28 16l-4-4-4 4V1h8v15z" /></symbol>
<symbol id="icon-nav-articles" viewBox="0 0 40 40"><path d="M24.9 6H9.1C7.9 6 7 6.9 7 8.1V16c0 1.2.9 2.1 2.1 2.1h15.8c1.2 0 2.1-.9 2.1-2.1V8.1c0-1.2-.9-2.1-2.1-2.1z" /><path d="M33.2 4H37c1.1 0 2 .9 2 2v29.2c0 2.1-1.7 3.8-3.8 3.8H4.8C2.7 39 1 37.3 1 35.2V4.8C1 2.7 2.7 1 4.8 1H29c2.2 0 4 1.8 4 4v28c0 1.7 1.3 3 3 3s3-1.3 3-3V9M7 23h20M7 28h20M7 33h20" /></symbol>
<symbol id="icon-nav-guides" viewBox="0 0 40 40"><g clip-path="url(#clip0)"><path d="M6.2 37.4L14 35V1L3.8 4.1C2.1 4.7 1 6.2 1 7.9v25.7c0 2.7 2.6 4.6 5.2 3.8zM26 39l10.2-3.1c1.7-.5 2.8-2.1 2.8-3.8V5c0-2.7-2.6-4.6-5.1-3.8L26 3.6V39zM14 1l12 3M14 35l12 4" /></g></symbol>
<symbol id="icon-nav-jobs" viewBox="0 0 40 40"><g clip-path="url(#a)"><path d="M39 23l-19 4-19-4V12c0-2.2 1.8-4 4-4h30c2.2 0 4 1.8 4 4v11z" /><path d="M38 24v11c0 2.2-1.8 4-4 4H6c-2.2 0-4-1.8-4-4V24M32 8H7V5c0-2.2 1.8-4 4-4h17c2.2 0 4 1.8 4 4v3z" /><path d="M15 27c0 2.75 2.25 5 5 5s5-2.25 5-5" /></g></symbol>
<symbol id="icon-nav-newsletter" viewBox="0 0 40 40"><g clip-path="url(#a)"><path d="M35 39H5c-2.2 0-4-1.8-4-4V19l19 9 19-9v16c0 2.2-1.8 4-4 4zM2 38l12-13M38 38L26 25M33.2 15l5.8 4M1 19l5.8-4" /><path d="M7 22V5c0-2.2 1.8-4 4-4h18c2.2 0 4 1.8 4 4v17" /><path d="M26 13c0 3.3-2.7 6-6 6s-6-2.7-6-6" /></g></symbol>
<symbol id="icon-nav-snippets" viewBox="0 0 40 40"><g clip-path="url(#clip0)"><path d="M17.2 37.8l-15-15c-1.6-1.6-1.6-4.1 0-5.7l15-15c1.6-1.6 4.1-1.6 5.7 0l15 15c1.6 1.6 1.6 4.1 0 5.7l-15 15c-1.6 1.6-4.2 1.6-5.7 0z" /><path d="M14 16l-4 4 4 4M26 24l4-4-4-4M21 16l-2 8" /></g></symbol>
<symbol id="icon-nav-videos" viewBox="0 0 40 40"><g clip-path="url(#clip0)"><path d="M20 39c10.493 0 19-8.507 19-19S30.493 1 20 1 1 9.507 1 20s8.507 19 19 19z" /><path d="M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13z" /><path d="M17.1 17v6.6c0 .8.8 1.2 1.5.9l6-3.3c.7-.4.7-1.4 0-1.7l-6-3.3c-.7-.4-1.5 0-1.5.8z" /></g></symbol>
<symbol id="icon-pin" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.727 2A4.727 4.727 0 004 6.727c0 1.826 1.198 3.65 2.59 5.12a18.357 18.357 0 002.137 1.917 18.36 18.36 0 002.138-1.918c1.392-1.469 2.59-3.293 2.59-5.119A4.727 4.727 0 008.726 2zm0 13l-.555.832-.002-.002-.005-.003-.016-.01a6.814 6.814 0 01-.253-.18 20.364 20.364 0 01-2.758-2.416C3.666 11.669 2 9.357 2 6.728a6.727 6.727 0 1113.454 0c0 2.63-1.665 4.941-3.137 6.495a20.366 20.366 0 01-2.956 2.556 6.845 6.845 0 01-.055.038l-.016.01-.005.004-.002.001s-.001.001-.556-.831zm0 0l.555.832a1 1 0 01-1.11 0L8.727 15z" /><path d="M8.727 8.637a1.91 1.91 0 100-3.819 1.91 1.91 0 000 3.819z" /></symbol>
<symbol id="icon-play" viewBox="0 0 32 32"><path fill-rule="evenodd" clip-rule="evenodd" d="M27.25 16c0 6.213-5.037 11.25-11.25 11.25S4.75 22.213 4.75 16 9.787 4.75 16 4.75 27.25 9.787 27.25 16zM16 31c8.284 0 15-6.716 15-15 0-8.284-6.716-15-15-15C7.716 1 1 7.716 1 16c0 8.284 6.716 15 15 15zm-1.657-19.744c-1.002-.668-2.343.05-2.343 1.253v7.63c0 1.204 1.341 1.922 2.343 1.254l5.722-3.815a1.507 1.507 0 000-2.508l-5.722-3.814z" /></symbol>
<symbol id="icon-search" viewBox="0 0 100 100"><path d="M80.65 66.78a33.55 33.55 0 01-47.44-47.44 33.55 33.55 0 1147.44 47.44zm6.73-54.16a43.06 43.06 0 00-65.32 55.71L2 88.39A6.8 6.8 0 0011.61 98l20.06-20.06a43.06 43.06 0 0055.71-65.32z" /></symbol>
<symbol id="icon-star" viewBox="0 0 100 95.52"><path d="M64.19 28.77a5.17 5.17 0 003.9 2.83s29.27-3 31.74 4.61-23 22.39-23 22.39a5.17 5.17 0 00-1.49 4.58s11.91 26.9 5.42 31.61S52.4 79.87 52.4 79.87a5.21 5.21 0 00-2.41-.6 5.14 5.14 0 00-2.41.6S25.68 99.5 19.2 94.79s5.42-31.61 5.42-31.61a5.18 5.18 0 00-1.49-4.58S-2.31 43.83.17 36.21s31.74-4.61 31.74-4.61a5.19 5.19 0 003.9-2.83S42 0 50 0s14.19 28.77 14.19 28.77z" /></symbol>
<symbol id="logo-facebook" viewBox="0 0 16 16"><path d="M5.667 16h3.2V7.933h2.266L11.4 5.2H8.867V3.667C8.867 3 9 2.8 9.6 2.8h1.733V0h-2.2c-2.4 0-3.466 1.067-3.466 3.067V5.2H4v2.733h1.667V16z" /></symbol>
<symbol id="logo-instagram" viewBox="0 0 256 256"><path d="M128 23.06c34.18 0 38.23.13 51.72.75 12.48.57 19.26 2.65 23.77 4.41a39.66 39.66 0 0114.72 9.57 39.66 39.66 0 019.57 14.72c1.76 4.51 3.84 11.29 4.41 23.77.62 13.49.75 17.54.75 51.72s-.13 38.23-.75 51.72c-.57 12.48-2.65 19.26-4.41 23.77a42.33 42.33 0 01-24.29 24.29c-4.51 1.76-11.29 3.84-23.77 4.41-13.49.62-17.54.75-51.72.75s-38.23-.13-51.72-.75c-12.48-.57-19.26-2.65-23.77-4.41a39.58 39.58 0 01-14.72-9.57 39.58 39.58 0 01-9.57-14.72c-1.76-4.51-3.84-11.29-4.41-23.77-.62-13.49-.75-17.54-.75-51.72s.13-38.23.75-51.72c.57-12.48 2.65-19.28 4.41-23.77a39.66 39.66 0 019.57-14.72 39.58 39.58 0 0114.72-9.57c4.49-1.76 11.29-3.84 23.77-4.41 13.49-.62 17.54-.75 51.72-.75M128 0C93.24 0 88.88.15 75.23.77S52.3 3.56 44.15 6.72a62.88 62.88 0 00-22.67 14.76A62.83 62.83 0 006.72 44.16C3.56 52.3 1.39 61.6.77 75.23S0 93.24 0 128s.15 39.12.77 52.77 2.79 22.93 5.95 31.08a62.88 62.88 0 0014.76 22.67 62.88 62.88 0 0022.67 14.76c8.15 3.16 17.45 5.33 31.08 5.95s18 .77 52.77.77 39.12-.15 52.77-.77 22.93-2.79 31.07-5.95a65.4 65.4 0 0037.44-37.43c3.16-8.15 5.33-17.45 5.95-31.08s.77-18 .77-52.77-.15-39.12-.77-52.77-2.79-22.93-5.95-31.07a62.83 62.83 0 00-14.76-22.68 62.83 62.83 0 00-22.68-14.76C203.7 3.56 194.4 1.39 180.77.77S162.76 0 128 0zm0 62.27A65.73 65.73 0 10193.73 128 65.73 65.73 0 00128 62.27zm0 108.4A42.67 42.67 0 11170.67 128 42.68 42.68 0 01128 170.67zm83.69-111a15.36 15.36 0 11-15.36-15.36 15.36 15.36 0 0115.36 15.36z" /></symbol>
<symbol id="logo-rss" viewBox="0 0 16 16"><path d="M0 0v3.2c3.4 0 6.6 1.333 9 3.733 2.4 2.4 3.733 5.6 3.733 9.067H16C16 7.2 8.8 0 0 0zM2.2 11.666c-1.2 0-2.2 1-2.2 2.2C0 15.066 1 16 2.2 16c1.2 0 2.2-1 2.2-2.2-.067-1.134-1.067-2.134-2.2-2.134z" /><path d="M0 5.467v3.2C4.067 8.733 7.333 12 7.333 16h3.2C10.533 10.2 5.8 5.533 0 5.467z" /></symbol>
<symbol id="logo-spectrum" viewBox="0 0 32 32"><path d="M6 14.5A1.5 1.5 0 007.5 16H9a7 7 0 017 7v1.5a1.5 1.5 0 001.5 1.5h7a1.5 1.5 0 001.5-1.5V23c0-9.389-7.611-17-17-17H7.5A1.5 1.5 0 006 7.5v7z" /></symbol>
<symbol id="logo-twitter" viewBox="0 0 16 16"><path d="M0 12.867a9.332 9.332 0 005 1.466c6.067 0 9.533-5.133 9.333-9.733.667-.466 1.2-1.066 1.667-1.666-.6.266-1.2.466-1.867.533a3.55 3.55 0 001.467-1.8c-.667.4-1.333.666-2.067.8-.666-.734-1.533-1.134-2.466-1.134-2.134 0-3.667 2-3.2 4-2.734-.133-5.134-1.4-6.734-3.4a3.299 3.299 0 001 4.4c-.533-.066-1.066-.2-1.466-.4C.6 7.468 1.733 8.867 3.267 9.2c-.467.134-1 .134-1.467.067a3.16 3.16 0 003.067 2.267A6.726 6.726 0 010 12.867z" /></symbol>
<symbol id="logo-youtube" viewBox="0 0 16 16"><path d="M15.667 4.4c-.2-.667-.734-1.267-1.4-1.4C13 2.667 8 2.667 8 2.667s-5 0-6.267.333c-.666.2-1.2.733-1.4 1.4C0 5.666 0 8.333 0 8.333s0 2.6.333 3.867c.2.667.734 1.267 1.4 1.4C3 13.933 8 13.933 8 13.933s5 0 6.267-.333c.666-.2 1.2-.733 1.4-1.4C16 10.933 16 8.333 16 8.333s0-2.667-.333-3.933zm-9.334 6.266V5.933l4.2 2.4-4.2 2.333z" /></symbol>
<symbol id="logo" viewBox="0 0 474.15 58.26"><path d="M46 42.57a4.5 4.5 0 00-3 1.13c-4.1 3.46-8.13 5.39-14.08 5.39-10.78 0-18.58-8.93-18.58-20V29c0-11 7.88-19.87 18.58-19.87a20.42 20.42 0 0113.48 5.03 4.95 4.95 0 007.88-3.86 4.94 4.94 0 00-1.93-3.94C43.44 2.57 37.73 0 29 0 12 0 0 13.12 0 29.13v.16c0 16.17 12.23 29 28.64 29 9.09 0 15.12-2.9 20.43-7.56a4.76 4.76 0 001.61-3.54A4.71 4.71 0 0046 42.57zm36.86-17.95C72 22 69.43 20.12 69.43 15.77v-.16c0-3.7 3.38-6.68 9.17-6.68 4.43 0 8.61 1.45 13 4.26a4.78 4.78 0 002.57.72 4.6 4.6 0 004.67-4.59 4.47 4.47 0 00-2.17-3.94A31 31 0 0078.76.16C67.58.16 59.53 6.84 59.53 16.5v.16c0 10.38 6.76 13.92 18.74 16.82C88.73 35.89 91 38.06 91 42.08v.16c0 4.18-3.86 7.08-10 7.08a24.42 24.42 0 01-15.77-5.79 4.79 4.79 0 00-7.56 3.7A4.64 4.64 0 0059.61 51a35.05 35.05 0 0021.16 7.1c11.83 0 20.11-6.28 20.11-16.82v-.16c0-9.34-6.11-13.6-18.02-16.5zm49.88 0c-10.86-2.57-13.43-4.51-13.43-8.85v-.16c0-3.7 3.38-6.68 9.17-6.68 4.42 0 8.61 1.45 13 4.26a4.78 4.78 0 002.57.72 4.6 4.6 0 004.67-4.59 4.47 4.47 0 00-2.17-3.94A31 31 0 00128.64.16c-11.18 0-19.23 6.68-19.23 16.33v.16c0 10.38 6.76 13.92 18.74 16.82 10.46 2.41 12.71 4.59 12.71 8.61v.16c0 4.18-3.86 7.08-10 7.08a24.42 24.42 0 01-15.77-5.79 4.79 4.79 0 00-7.56 3.7 4.64 4.64 0 001.96 3.77 35.05 35.05 0 0021.16 7.08c11.83 0 20.11-6.28 20.11-16.82v-.16c0-9.32-6.11-13.58-18.02-16.48zm45.62 3.22h-15.13a4.79 4.79 0 000 9.58h15.12a4.79 4.79 0 000-9.58zM224 1h-37.45a4.59 4.59 0 000 9.17h13.68v42.62a5 5 0 0010 0V10.14H224A4.59 4.59 0 00224 1zm38.86 0h-20.15a4.91 4.91 0 00-5 5v46.79a4.95 4.95 0 009.89 0V37.66h12.47l13.68 17.46a5.65 5.65 0 004.83 2.58 4.67 4.67 0 004.75-4.59 5.74 5.74 0 00-1.61-3.78l-10.78-13.6c7.56-2.33 12.79-7.81 12.79-16.82v-.16a17 17 0 00-4.66-12.15C275.45 3.06 269.9 1 262.82 1zm10.86 18.51c0 5.71-4.51 9.41-11.58 9.41h-14.53V10H262c7.32 0 11.67 3.3 11.67 9.33zm27-18.91a4.89 4.89 0 00-5 4.91v47.28a4.95 4.95 0 009.89 0V5.47a4.88 4.88 0 00-4.98-4.91zm62.67 42a4.5 4.5 0 00-3 1.13c-4.1 3.46-8.13 5.39-14.08 5.39-10.78 0-18.58-8.93-18.58-20V29c0-11 7.88-19.87 18.58-19.87a20.42 20.42 0 0113.44 5.07 4.95 4.95 0 007.88-3.86 4.94 4.94 0 00-1.93-3.94C360.72 2.57 355 0 346.32 0c-17.06 0-29 13.12-29 29.13v.16c0 16.17 12.23 29 28.64 29 9.09 0 15.12-2.9 20.43-7.56a4.76 4.76 0 001.61-3.58 4.71 4.71 0 00-4.7-4.58zm41-16.82l17.54-16.9a4.81 4.81 0 001.77-3.7A4.53 4.53 0 00419 .56a5.2 5.2 0 00-4.1 1.85l-26.66 26.88V5.47a4.95 4.95 0 00-9.9 0v47.32a4.95 4.95 0 009.9 0V41.12l9.17-8.85 18.1 23.09a5 5 0 004.18 2.33 4.83 4.83 0 005-4.83 5.36 5.36 0 00-1.37-3.54zm51.8-1.13c-10.92-2.65-13.49-4.53-13.49-8.88v-.16c0-3.7 3.38-6.68 9.17-6.68 4.42 0 8.61 1.45 13 4.26a4.78 4.78 0 002.57.72 4.6 4.6 0 004.67-4.59 4.47 4.47 0 00-2.17-3.94A31 31 0 00452 .16c-11.15 0-19.2 6.68-19.2 16.34v.16c0 10.38 6.76 13.92 18.74 16.82 10.46 2.41 12.71 4.59 12.71 8.61v.16c0 4.18-3.86 7.08-10 7.08a24.42 24.42 0 01-15.77-5.79 4.79 4.79 0 00-7.56 3.7 4.64 4.64 0 001.96 3.76A35.05 35.05 0 00454 58.1c11.83 0 20.11-6.28 20.11-16.82v-.16c.04-9.34-6.11-13.6-17.98-16.5z" /></symbol>
</svg>
<svg width="0" height="0" class="visually-hidden">
<defs>
<linearGradient id="orange-to-pink" x1="1" x2="0" y1="1" y2="0">
<stop offset="0%" stop-color="#DA1B60" />
<stop offset="100%" stop-color="#ff8a00" />
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
<div class="jetpack-instant-search__widget-area" style="display: none">
<div id="jetpack-search-filters-5" class="widget jetpack-filters widget_search"> <div id="jetpack-search-filters-5-wrapper" class="jetpack-instant-search-wrapper">
</div></div> </div>
<script type="3250e88898dc4b0d345158b0-text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, \'woocommerce-js\');
		document.body.className = c;
	</script>
<script src=\'https://css-tricks.com/wp-content/plugins/jetpack/_inc/build/photon/photon.min.js?ver=20191001\' type="3250e88898dc4b0d345158b0-text/javascript"></script>
<script type="3250e88898dc4b0d345158b0-text/javascript">
/* <![CDATA[ */
var antispampro_vars = {"code":"micuno","input_name_suffix":"luwele"};
/* ]]> */
</script>
<script src=\'https://css-tricks.com/wp-content/plugins/anti-spam-pro/js/anti-spam-pro-4.1.js\' type="3250e88898dc4b0d345158b0-text/javascript"></script>
<script type="3250e88898dc4b0d345158b0-text/javascript">
/* <![CDATA[ */
var pollsL10n = {"ajax_url":"https:\\/\\/css-tricks.com\\/wp-admin\\/admin-ajax.php","text_wait":"Your last request is still being processed. Please wait a while ...","text_valid":"Please choose a valid poll answer.","text_multiple":"Maximum number of choices allowed: ","show_loading":"0","show_fading":"1"};
/* ]]> */
</script>
<script src=\'https://css-tricks.com/wp-content/plugins/wp-polls/polls-js.js?ver=2.75.4\' type="3250e88898dc4b0d345158b0-text/javascript"></script>
<script type="3250e88898dc4b0d345158b0-text/javascript">
/* <![CDATA[ */
var markdownify = {"ajax_url":"\\/wp-admin\\/admin-ajax.php","nonce":"17a882b528"};
/* ]]> */
</script>
<script src=\'https://css-tricks.com/wp-content/plugins/jetpack-markdown-live-preview-comments/js/markdownify.js?ver=1\' type="3250e88898dc4b0d345158b0-text/javascript"></script>
<script src=\'https://css-tricks.com/wp-content/plugins/jetpack/_inc/build/instant-search/jp-search.bundle.js?ver=8.4.2\' type="3250e88898dc4b0d345158b0-text/javascript"></script>
<script type="3250e88898dc4b0d345158b0-text/javascript">
var JetpackInstantSearchOptions=JSON.parse(decodeURIComponent("%7B%22overlayOptions%22%3A%7B%22colorTheme%22%3A%22dark%22%2C%22enableInfScroll%22%3Afalse%2C%22highlightColor%22%3A%22%23f4af38%22%2C%22opacity%22%3A97%2C%22showPoweredBy%22%3Atrue%7D%2C%22homeUrl%22%3A%22https%3A%5C%2F%5C%2Fcss-tricks.com%22%2C%22locale%22%3A%22en-US%22%2C%22postsPerPage%22%3A%2210%22%2C%22siteId%22%3A45537868%2C%22postTypeFilters%22%3A%5B%22post%22%2C%22page%22%2C%22guides%22%2C%22newsletters%22%2C%22chapters%22%5D%2C%22postTypes%22%3A%7B%22post%22%3A%7B%22singular_name%22%3A%22Post%22%2C%22name%22%3A%22Posts%22%7D%2C%22page%22%3A%7B%22singular_name%22%3A%22Page%22%2C%22name%22%3A%22Pages%22%7D%2C%22attachment%22%3A%7B%22singular_name%22%3A%22Media%22%2C%22name%22%3A%22Media%22%7D%2C%22revision%22%3A%7B%22singular_name%22%3A%22Revision%22%2C%22name%22%3A%22Revisions%22%7D%2C%22nav_menu_item%22%3A%7B%22singular_name%22%3A%22Navigation%20Menu%20Item%22%2C%22name%22%3A%22Navigation%20Menu%20Items%22%7D%2C%22custom_css%22%3A%7B%22singular_name%22%3A%22Custom%20CSS%22%2C%22name%22%3A%22Custom%20CSS%22%7D%2C%22customize_changeset%22%3A%7B%22singular_name%22%3A%22Changeset%22%2C%22name%22%3A%22Changesets%22%7D%2C%22oembed_cache%22%3A%7B%22singular_name%22%3A%22oEmbed%20Response%22%2C%22name%22%3A%22oEmbed%20Responses%22%7D%2C%22user_request%22%3A%7B%22singular_name%22%3A%22User%20Request%22%2C%22name%22%3A%22User%20Requests%22%7D%2C%22wp_block%22%3A%7B%22singular_name%22%3A%22Block%22%2C%22name%22%3A%22Blocks%22%7D%2C%22payment_retry%22%3A%7B%22singular_name%22%3A%22Renewal%20Payment%20Retry%22%2C%22name%22%3A%22Renewal%20Payment%20Retries%22%7D%2C%22forum%22%3A%7B%22singular_name%22%3A%22Forum%22%2C%22name%22%3A%22Forums%22%7D%2C%22topic%22%3A%7B%22singular_name%22%3A%22Topic%22%2C%22name%22%3A%22Topics%22%7D%2C%22reply%22%3A%7B%22singular_name%22%3A%22Reply%22%2C%22name%22%3A%22Replies%22%7D%2C%22apto_sort%22%3A%7B%22singular_name%22%3A%22Post%22%2C%22name%22%3A%22Posts%22%7D%2C%22product%22%3A%7B%22singular_name%22%3A%22Product%22%2C%22name%22%3A%22Products%22%7D%2C%22product_variation%22%3A%7B%22singular_name%22%3A%22Variations%22%2C%22name%22%3A%22Variations%22%7D%2C%22shop_order%22%3A%7B%22singular_name%22%3A%22Order%22%2C%22name%22%3A%22Orders%22%7D%2C%22shop_order_refund%22%3A%7B%22singular_name%22%3A%22Refunds%22%2C%22name%22%3A%22Refunds%22%7D%2C%22shop_subscription%22%3A%7B%22singular_name%22%3A%22Subscription%22%2C%22name%22%3A%22Subscriptions%22%7D%2C%22screenshot%22%3A%7B%22singular_name%22%3A%22Screenshot%22%2C%22name%22%3A%22Screenshots%22%7D%2C%22guides%22%3A%7B%22singular_name%22%3A%22Guide%22%2C%22name%22%3A%22Guides%22%7D%2C%22newsletters%22%3A%7B%22singular_name%22%3A%22Newsletter%22%2C%22name%22%3A%22Newsletters%22%7D%2C%22chapters%22%3A%7B%22singular_name%22%3A%22Chapter%22%2C%22name%22%3A%22Chapters%22%7D%2C%22mc4wp-form%22%3A%7B%22singular_name%22%3A%22Sign-up%20Form%22%2C%22name%22%3A%22Mailchimp%20Sign-up%20Forms%22%7D%2C%22jp_mem_plan%22%3A%7B%22singular_name%22%3A%22Plan%22%2C%22name%22%3A%22Plan%22%7D%2C%22wc_membership_plan%22%3A%7B%22singular_name%22%3A%22Membership%20Plan%22%2C%22name%22%3A%22Membership%20Plans%22%7D%2C%22wc_user_membership%22%3A%7B%22singular_name%22%3A%22User%20Membership%22%2C%22name%22%3A%22Members%22%7D%2C%22jp_pay_order%22%3A%7B%22singular_name%22%3A%22Order%22%2C%22name%22%3A%22Order%22%7D%2C%22jp_pay_product%22%3A%7B%22singular_name%22%3A%22Product%22%2C%22name%22%3A%22Product%22%7D%7D%2C%22sort%22%3A%22relevance%7CDESC%22%2C%22widgets%22%3A%5B%7B%22filters%22%3A%5B%7B%22name%22%3A%22Post%20Types%22%2C%22type%22%3A%22post_type%22%2C%22count%22%3A5%2C%22widget_id%22%3A%22jetpack-search-filters-5%22%2C%22filter_id%22%3A%22post_type_1%22%7D%2C%7B%22name%22%3A%22Year%22%2C%22type%22%3A%22date_histogram%22%2C%22count%22%3A1%2C%22field%22%3A%22post_date%22%2C%22interval%22%3A%22year%22%2C%22widget_id%22%3A%22jetpack-search-filters-5%22%2C%22filter_id%22%3A%22date_histogram_2%22%7D%2C%7B%22name%22%3A%22Tags%22%2C%22type%22%3A%22taxonomy%22%2C%22taxonomy%22%3A%22post_tag%22%2C%22count%22%3A5%2C%22widget_id%22%3A%22jetpack-search-filters-5%22%2C%22filter_id%22%3A%22taxonomy_3%22%7D%2C%7B%22name%22%3A%22Categories%22%2C%22type%22%3A%22taxonomy%22%2C%22taxonomy%22%3A%22category%22%2C%22count%22%3A5%2C%22widget_id%22%3A%22jetpack-search-filters-5%22%2C%22filter_id%22%3A%22taxonomy_4%22%7D%5D%2C%22widget_id%22%3A%22jetpack-search-filters-5%22%7D%5D%2C%22widgetsOutsideOverlay%22%3A%5B%7B%22filters%22%3A%5B%7B%22name%22%3A%22Tags%22%2C%22type%22%3A%22taxonomy%22%2C%22taxonomy%22%3A%22post_tag%22%2C%22count%22%3A5%2C%22widget_id%22%3A%22jetpack-search-filters-3%22%2C%22filter_id%22%3A%22taxonomy_0%22%7D%5D%2C%22widget_id%22%3A%22jetpack-search-filters-3%22%7D%5D%7D"));
</script>
<script src=\'//stats.wp.com/w.js?ver=202016\' type="3250e88898dc4b0d345158b0-text/javascript"></script>
<script src=\'https://css-tricks.com/wp-content/themes/CSS-Tricks-17/js/min/comment-reply.min.js?ver=1.1\' type="3250e88898dc4b0d345158b0-text/javascript"></script>
<script src=\'https://css-tricks.com/wp-content/plugins/jetpack/_inc/build/lazy-images/js/lazy-images.min.js?ver=8.4.2\' type="3250e88898dc4b0d345158b0-text/javascript"></script>
<script async="async" src=\'https://css-tricks.com/wp-content/plugins/akismet/_inc/form.js?ver=4.1.4\' type="3250e88898dc4b0d345158b0-text/javascript"></script>
<script type="3250e88898dc4b0d345158b0-text/javascript" src=\'https://stats.wp.com/e-202016.js\' async=\'async\' defer=\'defer\'></script>
<script type="3250e88898dc4b0d345158b0-text/javascript">
	_stq = window._stq || [];
	_stq.push([ \'view\', {v:\'ext\',j:\'1:8.4.2\',blog:\'45537868\',post:\'306427\',tz:\'-7\',srv:\'css-tricks.com\'} ]);
	_stq.push([ \'clickTrackerInit\', \'45537868\', \'306427\' ]);
</script>
<script type="3250e88898dc4b0d345158b0-text/javascript">
    window.activeMember = false;
  </script>
<script src="https://css-tricks.com/wp-content/themes/CSS-Tricks-17/js/min/global-concat.min.js?cache_bust=1586180700160" type="3250e88898dc4b0d345158b0-text/javascript">
</script>
<script type="3250e88898dc4b0d345158b0-text/javascript">
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
<script async src="https://static.codepen.io/assets/embed/ei.js" type="3250e88898dc4b0d345158b0-text/javascript"></script>
<script src="//instant.page/3.0.0" type="3250e88898dc4b0d345158b0-module" defer integrity="sha384-OeDn4XE77tdHo8pGtE1apMPmAipjoxUQ++eeJa6EtJCfHlvijigWiJpD7VDPWXV1"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="3250e88898dc4b0d345158b0-|49" defer=""></script></body>
</html>
'
];
