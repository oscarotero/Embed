<?php
declare(strict_types = 1);

return [
    'headers' => [
        'content-type' => [
            'text/html; charset=utf-8'
        ],
        'server' => [
            'CloudFront'
        ],
        'cache-control' => [
            'no-cache, no-store, pre-check=0, post-check=0'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'content-security-policy' => [
            'default-src \'self\' https:; base-uri \'self\'; block-all-mixed-content; child-src \'self\' https: blob:; connect-src \'self\' wss: https: blob:; font-src \'self\' data: https:; form-action \'self\' forms.hsforms.com www.facebook.com; frame-ancestors \'self\' app.optimizely.com *.eventbrite.com video214.com animoto.com; img-src \'self\' data: https: blob: android-webview-video-poster:; manifest-src \'self\'; media-src \'self\' https: data: blob:; object-src \'self\' www.paypalobjects.com d150hyw1dtprld.cloudfront.net; prefetch-src \'self\' https:; script-src \'self\' https: data: \'unsafe-inline\' \'unsafe-eval\'; style-src \'self\' https: \'unsafe-inline\'; upgrade-insecure-requests; worker-src \'self\' blob:; report-uri https://sentry.io/api/1401029/security/?sentry_key=b94ac67e5c014425a0fe8cb868528601'
        ],
        'date' => [
            'Wed, 20 May 2020 17:53:08 GMT'
        ],
        'expires' => [
            'Fri, 01 Jan 1990 00:00:00 GMT'
        ],
        'last-modified' => [
            'Wed, 20 May 2020 17:53:08 GMT'
        ],
        'pragma' => [
            'no-cache'
        ],
        'referrer-policy' => [
            'origin-when-cross-origin'
        ],
        'strict-transport-security' => [
            'max-age=2592000'
        ],
        'vary' => [
            'Accept-Encoding'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'x-download-options' => [
            'noopen'
        ],
        'x-envoy-decorator-operation' => [
            'web2-http.production.svc.cluster.local:8000/*'
        ],
        'x-envoy-upstream-service-time' => [
            '209'
        ],
        'x-frame-options' => [
            'ALLOW-FROM https://app.optimizely.com'
        ],
        'x-permitted-cross-domain-policies' => [
            'none'
        ],
        'x-request-id' => [
            '5371a69ff160a1578d4712eed0aa2abc'
        ],
        'x-runtime' => [
            '0.207890'
        ],
        'x-served-by' => [
            'nginx-ingress-controller-68b4bf9c-fhz7r'
        ],
        'x-xss-protection' => [
            '1; mode=block'
        ],
        'set-cookie' => [
            'countryCode=ES; Path=/'
        ],
        'x-cache' => [
            'Miss from cloudfront'
        ],
        'via' => [
            '1.1 b797234d27f385a39f8a380c54637a5b.cloudfront.net (CloudFront)'
        ],
        'x-amz-cf-pop' => [
            'MAD51-C1'
        ],
        'x-amz-cf-id' => [
            '9c-KXlVWNRwto4D21g_9hMWJNrU1f-Tk3jvRomTm1YnR-alrESF4dA=='
        ],
        'Content-Location' => [
            'https://animoto.com/play/GjsJ1gu0WDRfr4pGw12xZQ'
        ],
        'X-Request-Time' => [
            '0.428 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js "> <!--<![endif]-->
  <head  prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# video: http://ogp.me/ns/video#">
    <link rel="preload" href="https://cdn.optimizely.com/js/42806793.js" as="script">
  <link rel="preload" href="https://d14pr3cu5atb0x.cloudfront.net/pkg/css/chimera-10d0ace63b.css" as="style">
  <link rel="preload" href="https://d14pr3cu5atb0x.cloudfront.net/pkg/css/icons-e2a0d0ca19.css" as="style">
  <link rel="preload" href="https://d14pr3cu5atb0x.cloudfront.net/pkg/css/marketing-33288a1c07.css" as="style">
  <link rel="preload" href="https://d14pr3cu5atb0x.cloudfront.net/pkg/css/webfont-e33486f62a.css" as="style">

    <link rel="dns-prefetch" href="https://d14pr3cu5atb0x.cloudfront.net" />
<link rel="dns-prefetch" href="https://d2r6q1p754p9pi.cloudfront.net" />
<link rel="dns-prefetch" href="https://d2yc83ilop69kq.cloudfront.net" />

    <script>
      (function() {
  var html = document.documentElement,
      wf,
      s;

  if (sessionStorage.fontsLoaded === \'true\') {
    html.classList.add(\'fonts-loaded\');
    return;
  }

  wf = document.createElement(\'script\');
  wf.src = "https://d14pr3cu5atb0x.cloudfront.net/pkg/js/font_face_observer-4fe126cbdc.js";
  wf.type = \'text/javascript\';
  wf.async = \'true\';
  s = document.getElementsByTagName(\'script\')[0];
  s.parentNode.insertBefore(wf, s);

  html.classList.add(\'fonts-loading\');

  wf.onload = wf.onreadystatechange = function() {
    var proximaNova = new FontFaceObserver(\'ProximaNova\'),
        proximaNovaBold = new FontFaceObserver(\'ProximaNova-Bold\', {
          weight: \'bold\'
        }),
        playfairBold = new FontFaceObserver(\'PlayfairDisplay-Bold\', {
          weight: \'bold\'
        });

    proximaNova.load().then(function () {
      return proximaNovaBold.load().then(function() {
        return playfairBold.load().then(function () {
          sessionStorage.fontsLoaded = true;
          html.classList.remove(\'fonts-loading\');
          html.classList.add(\'fonts-loaded\');
        })
      });
    }).catch(function () {
      sessionStorage.fontsLoaded = false;
      html.classList.remove(\'fonts-loading\');
      html.classList.add(\'fonts-failed\');
    });
  }
})();

      var AS_SETTINGS = {
  project_with_assets_map_header: {
    \'Accept\': \'application/vnd.animoto.project_with_assets_map-v4+json\'
  }
};

var AS_HEADERS = {
  \'Content-Type\': \'application/vnd.animoto-v4+json\',
  \'Accept\'      : \'application/vnd.animoto-v4+json\'
};

      var optimizelySettings = {"fbExporting":false,"isOwner":false};
        var optimizelyRedirect = function(url) {
        if(!url) {
          return;
        }

        var referrer = document.referrer;

        if(referrer && window.localStorage) {
          window.localStorage.referrer = referrer;
        }

        var redirectTo  = document.createElement("a"),
            queryParams = window.location.search;

        redirectTo.href = url;
        if(queryParams) {
          // Check if we are in the optimizely editor
          if(queryParams.search(\'optimizely_editor=true\') > -1) {
            return;
          }
          redirectTo.search = redirectTo.search ? [queryParams, redirectTo.search.slice(1)].join(\'&\') : queryParams;
        }

        window.location.replace(redirectTo.href);
      },
      optimizelyCreateCookie = function(key, val) {
        document.cookie = key + \'=\' + val + \'; path=/\';
      },
      getCookieSetByOptimizely = function(optyCookie) {
        var d = document,
            cookieValue = null,
            i,
            cookies,
            cookie;

        if (d.cookie && d.cookie !== \'\') {
          cookies = d.cookie.split(\';\');
          for (i = 0; i < cookies.length; i++) {
            cookie = cookies[i].replace(/^\\s\\s*/, \'\').replace(/\\s\\s*$/, \'\');
            if (cookie.substring(0, optyCookie.length + 1) === (optyCookie + \'=\')) {
              cookieValue = decodeURIComponent(cookie.substring(optyCookie.length + 1));
              break;
            }
          }
        }

        return cookieValue;
      },
      optimizelyTrackScrolling = function() {
        var scroll25 = true,
            scroll50 = true,
            scroll75 = true,
            scroll100 = true,
            getDocumentHeight = function() {
              return Math.max(
                  document.body.scrollHeight, document.documentElement.scrollHeight,
                  document.body.offsetHeight, document.documentElement.offsetHeight,
                  document.body.clientHeight, document.documentElement.clientHeight
              )
            };

        // Conditional code we\'ll use to fire events based on scrollPercentage.
        var pushScrollPositionEvents = function() {

          var windowHeight= window.innerHeight || (document.documentElement || document.body).clientHeight,
              documentHeight = getDocumentHeight(),
              scrollTop = window.pageYOffset || (document.documentElement || document.body.parentNode || document.body).scrollTop,
              trackLength = documentHeight - windowHeight,
              scrollPercent = Math.floor(scrollTop/trackLength * 100);

          if (scrollPercent >= 25 && scroll25) {
            animoto.util.analytics.trackGoal(\'scroll_25\');
            scroll25 = false;
          }

          if (scrollPercent >= 50 && scroll50) {
            animoto.util.analytics.trackGoal(\'scroll_50\');
            scroll50 = false;
          }

          if (scrollPercent >= 75 && scroll75) {
            animoto.util.analytics.trackGoal(\'scroll_75\');
            scroll75 = false;
          }

          if (scrollPercent >= 100 && scroll100) {
            animoto.util.analytics.trackGoal(\'scroll_100\');
            scroll100 = false;
          }
        };
        window.addEventListener(\'scroll\', _.throttle(pushScrollPositionEvents, 100));
      };
  utm = [];
  dataLayer = window.dataLayer || [];
  dataLayer.push({
    cookie_domain    : \'.animoto.com\',
    customerSegment  : \'visitor\',
    event            : \'snowplowTrackingReady\',
    is_bot           : false,
    user_country     : \'ES\',
    user_plan        : \'visitor\',
    user_segment     : \'Unknown\',
    user_id          : \'\',
    user_name        : \'\',
    user_email       : \'\',
    user_had_a_trial : false,
    project_id       : \'32bti9fZwtzJye2TkO2kmQ\',
    ua_profile       : \'UA-1450253-19\',
    classic_profile  : \'UA-1450253-1\',
    dimension1       : \'visitor:none:none:\' + parseFloat(window.devicePixelRatio).toFixed(2) + \'x\',
    dimension2       : \'XX\', // NB: \'XX\' replaces legacy/invalid data that used to be the combination of gender and age. See https://animoto.atlassian.net/browse/WC-279
    dimension4       : \'x:x\',
    // snowplow data tracking
    env              : \'production\'
    , project : {
        schema : \'iglu:com.animoto/project/jsonschema/1-0-0\',
        data   : {
          id          : \'32bti9fZwtzJye2TkO2kmQ\',
          projectType : \'maker\'
        }
    }
    , video : {
      schema : \'iglu:com.animoto/video/jsonschema/1-0-0\',
      data   : {
        original_render_okey : \'GjsJ1gu0WDRfr4pGw12xZQ\',
        current_render_okey  : \'GjsJ1gu0WDRfr4pGw12xZQ\'
      }
    }
  });


  if(window.localStorage && window.localStorage.referrer) {
    dataLayer.push({
      referrer_override: window.localStorage.referrer
    });
    delete window.localStorage.referrer;
  }
      dataLayer.push({\'ga_path\': \'/play\'});
  window.optimizely = window.optimizely || [];
  window.optimizely.push([\'setCookieDomain\', \'animoto.com\'])
  window.optimizely.push([\'customTag\', {\'customer_type\': \'visitor\'}]);
  window.optimizely.push([\'setDimensionValue\', \'customer_type\', \'visitor\']);
  window.optimizely.push([\'customTag\', {\'user_segment\': \'Unknown\'}]);
  window.optimizely.push([\'setDimensionValue\', \'user_segment\', \'Unknown\']);

  var optimizelySettings = optimizelySettings || {};
  var optimizelyUserAttributes = {
    country_code  : \'ES\'
  }



  optimizelySettings.user = {
    new_user              : false,
    logged_in             : false,
    is_logged_in          : false,
    is_first_purchase     : false,
    has_vault_account     : false,
    vault_account_country : \'\',
    has_facebook_profile  : false
  }

  if (optimizelySettings.user.new_user) {
    if (true) {
      optimizelyUserAttributes.registered_in_no_video_homepage_test = true;
    }
    if (true) {
      optimizelyUserAttributes.new_user_first_session_kvids_nav = true;
    }
    if (false) {
      optimizelyUserAttributes.new_user_first_session_create_redirect = true;
    }
  }

  if (optimizelySettings.user.is_first_purchase) {
    window.optimizely.push([\'trackEvent\', \'subscribed\']);
  }

  window.optimizely.push({
    type       : \'user\',
    attributes : optimizelyUserAttributes
  });

      
    </script>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="shortcut icon" href="https://d14pr3cu5atb0x.cloudfront.net/images/icons/favicon-fbb19e53d0.ico" />
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://d14pr3cu5atb0x.cloudfront.net/images/icons/touchicon-144-4a42d97241.png" />
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://d14pr3cu5atb0x.cloudfront.net/images/icons/touchicon-114-fb592c00d7.png" />
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://d14pr3cu5atb0x.cloudfront.net/images/icons/touchicon-72-d0854f51a6.png" />
      <link rel="apple-touch-icon-precomposed" href="https://d14pr3cu5atb0x.cloudfront.net/images/icons/touchicon-57-40d80126a6.png" />
      <meta name="robots" content="noindex, follow" />
      <meta name="description" content="Animoto&#39;s video maker turns your photos and video clips into professional videos in minutes. Fast and shockingly simple - we make video creation easy." />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>taco bell - Animoto</title>
        <link rel="stylesheet" media="screen" href="https://d14pr3cu5atb0x.cloudfront.net/pkg/css/chimera-10d0ace63b.css" />
        <link rel="stylesheet" media="screen" href="https://d14pr3cu5atb0x.cloudfront.net/pkg/css/icons-e2a0d0ca19.css" />
        <link rel="stylesheet" media="screen" href="https://d14pr3cu5atb0x.cloudfront.net/pkg/css/marketing-33288a1c07.css" />
        <link rel="stylesheet" media="screen" href="https://d14pr3cu5atb0x.cloudfront.net/pkg/css/webfont-e33486f62a.css" />

      <link rel="stylesheet" media="screen" href="https://d14pr3cu5atb0x.cloudfront.net/pkg/css/play-516bffb6f6.css" />
        <link rel="alternate" type="text/xml+oembed" title="Animoto Video: taco bell" href="https://animoto.com/oembeds/create.xml?automated=true&amp;options=start_hq&amp;url=https%3A%2F%2Fanimoto.com%2Fplay%2FGjsJ1gu0WDRfr4pGw12xZQ" />
  <link rel="alternate" type="application/json+oembed" title="Animoto Video: taco bell" href="https://animoto.com/oembeds/create.json?automated=true&amp;options=start_hq&amp;url=https%3A%2F%2Fanimoto.com%2Fplay%2FGjsJ1gu0WDRfr4pGw12xZQ" />

  
<link rel="image_src" href="http://d2m23yiuv18ohn.cloudfront.net/Video/GjsJ1gu0WDRfr4pGw12xZQ/cover_648x360.jpg" />
<meta name="title" content="taco bell" />

<meta property="og:description" content=""/>
<meta property="og:site_name" content="Animoto"/>
<meta property="og:title" content="taco bell"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="https://animoto.com/play/GjsJ1gu0WDRfr4pGw12xZQ"/>
<meta property="og:image" content="http://d2m23yiuv18ohn.cloudfront.net/Video/GjsJ1gu0WDRfr4pGw12xZQ/cover_648x360.jpg"/>

<meta name="twitter:app:id:googleplay" content="com.animoto.android.videoslideshow"/>
<meta name="twitter:app:id:ipad" content="459248037"/>
<meta name="twitter:app:id:iphone" content="459248037"/>
<meta name="twitter:app:name:googleplay" content="Get the Animoto app"/>
<meta name="twitter:app:name:ipad" content="Get the Animoto app"/>
<meta name="twitter:app:url:ipad" content="animoto://" />
<meta name="twitter:app:name:iphone" content="Get the Animoto app"/>
<meta name="twitter:app:url:iphone" content="animoto://" />
<meta name="twitter:card" content="player">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="http://d2m23yiuv18ohn.cloudfront.net/Video/GjsJ1gu0WDRfr4pGw12xZQ/cover_648x360.jpg">

<meta name="twitter:site" content="@animoto">
<meta name="twitter:title" content="taco bell">
<meta name="twitter:url" content="https://animoto.com/play/GjsJ1gu0WDRfr4pGw12xZQ">

  <meta name="twitter:player" content="https://s3.amazonaws.com/embed.animoto.com/play.html?w=swf/production/vp1&amp;e=1589997188&amp;f=GjsJ1gu0WDRfr4pGw12xZQ&amp;d=0&amp;m=p&amp;r=360p&amp;i=m&amp;asset_domain=s3-p.animoto.com&amp;animoto_domain=animoto.com&amp;options=">
  <meta name="twitter:player:width" content="640">
  <meta name="twitter:player:height" content="360">

<meta name="twitter:player:stream" content="https://d2m23yiuv18ohn.cloudfront.net/Video/GjsJ1gu0WDRfr4pGw12xZQ/360p.mp4">
<meta name="twitter:player:stream:content_type" content="video/mp4">


        <link href="https://animoto.com/play/GjsJ1gu0WDRfr4pGw12xZQ" rel="canonical" />
    <meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="aWuBWt0tUnPEnDNQnPrOLlo5jYqJrtEHAIkSKGFmTYGzeJxUDkN1BCuGCfDVOYvcFcBj5Xt7f5bYmF6/yJ4/SA==" />
    <script>
//<![CDATA[
var AUTH_TOKEN = "Y29TPc3D9xyN7zxRSvhtkZDrrA6lmY/9b4j9Pb/Q+Gq5fE4zHq3Qa2L1BvEDOyhj3xJCYVdMIWy3mbGqFiiKow==";
//]]>
</script>
    <script src="https://cdn.optimizely.com/js/42806793.js"></script>
    <meta content="{&quot;builder-v2&quot;:false,&quot;emailTemplate&quot;:false,&quot;email_shares&quot;:true,&quot;facebook-export&quot;:true,&quot;google_tag_manager&quot;:true,&quot;hubspot-export&quot;:true,&quot;linkedin-export&quot;:false,&quot;optimizely&quot;:true,&quot;smugmug-export&quot;:true,&quot;twitter-export&quot;:true,&quot;vimeo-export&quot;:true,&quot;vzaar-export&quot;:true,&quot;wistia-export&quot;:true,&quot;youtube-export&quot;:true}" id="ld-bootstrap">
  </head>
  <body class="page fb-no-session play-page white-background" id="video-player-page">
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-RZK8" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\': new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=\'//www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);})(window,document,\'script\',\'dataLayer\',\'GTM-RZK8\');</script>

      <div class="js-gdpr-logged-out-banner grey-background">
    <div class="container">
      <div class="gdpr-banner display-flex vertical-center-flex-container justify-content-space-between">
          <div class="gdpr-text h6 margin-top-2 margin-bottom-2">We use tracking to help us understand how you interact with our website, which helps us improve the Animoto experience. Your information is safe with us. Read our <a target="_blank" class="legal-link" href="/legal/privacy_policy">privacy policy</a> for more details.</div>
          <div>
            <button class="js-gdpr-logged-out-accept button button-small button-child">OK</button>
          </div>
      </div>
    </div>
  </div>

      <div id="js-global-header" class="global-header">
  <div class="gh-wrapper">
    <div class="container gh-container">
      <div class="row">
        <div class="gh-logo">
          <a href="/" class="logo logo-color logo-text gh-logo-img track-nav-logo-loggedout"><span>Animoto</span></a>
        </div>
        <div class="gh-nav">
          <!--  desktop/landscape tablet nav -->
          <div class="desktop-nav">
            <ul class="body-text-sm label list-style-none gh-list">
                <li class="gh-list-item"><a class="gh-link grey-link track-nav-business-desktop" href="/business">Business</a></li>
                <li class="gh-list-item"><a class="gh-link grey-link track-nav-photography_businessphotography-desktop" href="/business/photography">Photography</a></li>
                <li class="gh-list-item"><a class="gh-link grey-link track-nav-family_personal-desktop" href="/personal">Family</a></li>
                <li class="gh-list-item"><a class="gh-link grey-link track-nav-pricing-desktop" href="/pricing">Pricing</a></li>
              <!-- login button -->
                <li class="gh-list-item o-site-header-to-hide"><a class="gh-link grey-link track-nav-signup-desktop" href="/sign_up">sign up</a></li>
                <li class="gh-list-item o-site-header-hidden"><span class="gh-link gh-vertical-separator"></span></li>
                <li class="gh-list-item"><a class="gh-link grey-link track-nav-login-desktop" href="/log_in">log in</a></li>
            </ul>
          </div>
        </div>
        <div class="gh-mobile-buttons-wrap">
            <a class="cta-button-secondary cta-button-small track-nav-signup-mobile o-site-header-hidden" href="/sign_up">Sign up</a>
          <!-- hamburger nav icon to open mobile nav -->
          <a href="#" class="js-dropdownControl hamburger gh-hamburger hide-text pull-right track-nav-hamburger-mobile">menu</a>
        </div>
      </div>
    </div>
  </div>
  <!-- mobile nav -->
  <div class="gh-mobile row">
    <div class="js-dropdownContent gh-menu-content">
      <ul class="list-style-none">
        <li class="gh-list-item">
          <a href="/business" class="label js-dropdownSubControl gh-mobile-menu-link gh-menu-sub-control caret-wrapper gh-link grey-link track-nav-business_submenu-mobile">business<span class="o-site-header-caret caret"></span><span class="caret gh-mobile-caret pull-right"></span></a>
          <ul class="list-style-none js-dropdownSubContent body-text-md gh-menu-sub-content">
            <li class="gh-list-item"><a href="/business" class="gh-link grey-link gh-deep-links track-nav-overview-business_submenu-mobile">overview</a></li>
            <li class="gh-list-item"><a href="/success-stories" class="gh-link grey-link gh-deep-links track-nav-successstories-business_submenu-mobile">success stories</a></li>
            <li class="gh-list-item"><a href="/pricing" class="gh-link grey-link gh-deep-links track-nav-pricing-business_submenu-mobile">pricing</a></li>
          </ul>
        </li>
        <li class="gh-list-item">
          <a href="/business/photography" class="label js-dropdownSubControl gh-mobile-menu-link gh-menu-sub-control caret-wrapper gh-link grey-link track-nav-photography_submenu-mobile">photography<span class="o-site-header-caret caret"></span><span class="caret gh-mobile-caret pull-right"></span></a>
          <ul class="list-style-none js-dropdownSubContent gh-menu-sub-content body-text-md">
            <li class="gh-list-item"><a href="/business/photography" class="gh-link grey-link gh-deep-links track-nav-overview-photography_submenu-mobile">overview</a></li>
            <li class="gh-list-item"><a href="/success-stories" class="gh-link grey-link gh-deep-links track-nav-successstories-photography_submenu-mobile">success stories</a></li>
          </ul>
        </li>
        <li class="gh-list-item"><a href="/personal" class="label gh-link gh-mobile-menu-link grey-link track-nav-family_personal-mobile">family</a></li>
        <li class="gh-list-item"><a href="/pricing" class="gh-link gh-mobile-menu-link grey-link label track-nav-pricing-mobile">pricing</a></li>

        <li class="gh-list-item o-site-header-to-hide">
          <a href="/apps/online-video-maker" class="label track-homepage-mobile-nav-download gh-link grey-link track-nav-downloadapp_apps-other_mobile">download app</a>
        </li>
        <li class="gh-list-item o-site-header-to-hide">
          <a href="/sign_up" class="js-mobile-nav-sign-up label gh-link grey-link track-nav-starttrial-mobile">
            Start trial
          </a>
        </li>
        <li class="gh-list-item o-site-header-to-hide"><a href="/log_in" class="label gh-link grey-link track-nav-login_textlink-mobile">log in</a></li>
      </ul>
        <a href="/log_in" class="label gh-mobile-login-cta cta-button-secondary track-nav-login_button-mobile o-site-header-hidden">log in</a>
    </div>
  </div>
</div>

    <div id="notifications" class="notifications">
</div>

      




<div id="js-Main" class="pp-main-wrapper is-landscape">
  <div class="pp-player-wrapper black-background">
    <div class="pp-video-detail">
      <div class="js-player-container pp-landscape-player-wrapper align-center">
        <div id="player-object" class="js-player-object pp-player-loading"></div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="col-sm-12 col-md-12 col-lg-offset-1 col-lg-10">
      <div class="row">
        <div class="col-sm-12">
          <div class="js-progress-container display-table margin-bottom-3 is-hidden"></div>
        </div>
      </div>
      <div class="row">
        <div class="s-header-ribbon col-sm-12 margin-bottom-2 center-when-small col-md-8 col-lg-9">
          <h1 id="js-project-title-header" title="taco bell" data-title="taco bell" itemprop="name" class="no-padding-top no-margin-bottom h2 text-overflow-ellipsis pp-project-title">taco bell</h1>
        </div>
        <div class="col-sm-12  margin-bottom-4 center-when-small text-right js-disabled-tooltip col-md-4 col-lg-3">
        </div>
      </div>
      <div class="js-tabs-container col-sm-12 col-md-12"></div>
    </div>
  </div>
</div>
<div id="js-upsell-modal"></div>





        <div class="footer">
    <div class="container">
      <div class="row">
        <ul class="f-list grey-links col-md-2 margin-bottom-3">
          <li class="label body-text margin-bottom-1">Uses</li>
          <li class="margin-bottom-1"><a href="/business">Marketing video</a></li>
          <li class="margin-bottom-1"><a href="/make/video-ads">Video ad</a></li>
          <li class="margin-bottom-1"><a href="/make/tutorial-videos">How-to video</a></li>
          <li class="margin-bottom-1"><a href="/make/slideshow-video">Slideshow video</a></li>
          <li class="margin-bottom-1"><a href="/social-media">Social media</a></li>
          <li class="margin-bottom-1"><a href="/business/promo-video">Promo video</a></li>
          <li class="margin-bottom-1"><a href="/make/happy-birthday-videos">Birthday video</a></li>
        </ul>
        <ul class="f-list grey-links col-md-2 margin-bottom-3">
          <li class="label body-text margin-bottom-1">Animoto For</li>
          <li class="margin-bottom-1"><a href="/business">Business</a></li>
          <li class="margin-bottom-1"><a href="/business/photography">Photography</a></li>
          <li class="margin-bottom-1"><a href="/business/real-estate-videos">Real estate</a></li>
          <li class="margin-bottom-1"><a href="/business/non-profit">Non-profit</a></li>
          <li class="margin-bottom-1"><a href="/business/education/classroom">Education</a></li>
          <li class="margin-bottom-1"><a href="/business/ecommerce-video-marketing">Ecommerce</a></li>
          <li class="margin-bottom-1"><a href="/business/fitness">Fitness</a></li>
        </ul>
        <ul class="f-list grey-links col-md-2 margin-bottom-3">
          <li class="label body-text margin-bottom-1">Features</li>
          <li class="margin-bottom-1"><a href="/features/photo-video-maker">Photo video maker</a></li>
          <li class="margin-bottom-1"><a href="/features/add-music-to-video">Music library</a></li>
          <li class="margin-bottom-1"><a href="/apps/online-video-maker">Online video editor</a></li>
          <li class="margin-bottom-1"><a href="/builder/templates/all">Templates</a></li>
          <li class="margin-bottom-1"><a href="/features/crop-and-trim-video">Video trimming</a></li>
          <li class="margin-bottom-1"><a href="/features/video-maker-with-stock-library">Stock library</a></li>
          <li class="margin-bottom-1"><a href="</apps/mobile/ios>">iOS</a></li>
        </ul>
        <ul class="f-list grey-links col-md-2 margin-bottom-3">
          <li class="label body-text margin-bottom-1">Company</li>
          <li class="margin-bottom-1"><a href="https://help.animoto.com/hc/en-us">Support</a></li>
          <li class="margin-bottom-1"><a href="/blog">Blog</a></li>
          <li class="margin-bottom-1"><a href="/careers">Careers</a></li>
          <li class="margin-bottom-1"><a href="/press">Press</a></li>
          <li class="margin-bottom-1"><a href="/affiliates">Affiliates</a></li>
          <li class="margin-bottom-1"><a href="/legal/privacy_policy">Privacy policy</a></li>
          <li class="margin-bottom-1"><a href="/legal/terms">Terms of use</a></li>
        </ul>
        <ul class="f-list col-md-4">
          <li class="label body-text margin-bottom-1">Connect</li>
          <li>
            <ul class="list-style-none f-social margin-bottom-3">
              <li class="f-link"><a href="https://www.facebook.com/Animoto" class="social-icon-facebook-color icon-large"></a></li>
              <li class="f-link"><a href="https://www.youtube.com/channel/UCeqtYy6WpYkZ3Q_EUnY0fVQ" class="social-icon-youtube-color icon-large"></a></li>
              <li class="f-link"><a href="https://twitter.com/Animoto" class="social-icon-twitter-color icon-large"></a></li>
              <li class="f-link"><a href="https://www.instagram.com/animoto/" class="social-icon-instagram-color icon-large"></a></li>
              <li class="f-link"><a href="https://www.linkedin.com/company/animoto" class="social-icon-linkedin-color icon-large"></a></li>
            </ul>
          </li>
          <li>
            <ul class="f-social marketing-partners list-style-none">
              <li class="margin-bottom-1"><a class="mp-facebook" href="https://www.facebook.com/business/solutions-explorer/campaign_management/144864402752633/Animoto"></a></li>
              <li class="margin-bottom-1"><a class="mp-instagram" href="https://www.facebook.com/business/solutions-explorer/campaign_management/144864402752633/Animoto"></a></li>
              <li><a class="mp-youtube" href="https://support.google.com/youtube/answer/6145904"></a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="f-legal">
      <div class="logo logo-outline disable-hover"></div>
      <p class="f-legal-copy">&copy; 2020 Animoto Inc. All Rights Reserved.</p>
    </div>
  </div>

    <div id="fb-root"></div>
    <div id=\'js-react-pass-reset\'></div>
    
    <script src="https://d14pr3cu5atb0x.cloudfront.net/pkg/js/modernizr-9b073aa6db.js" crossorigin="anonymous"></script>
      <script src="https://d14pr3cu5atb0x.cloudfront.net/pkg/js/vendor-638ea576b1.js" crossorigin="anonymous"></script>
    <script src="https://d14pr3cu5atb0x.cloudfront.net/pkg/js/core-411f6a479a.js" crossorigin="anonymous"></script>
    <script src="https://d14pr3cu5atb0x.cloudfront.net/pkg/js/util-ad4dc0b5cd.js" crossorigin="anonymous"></script>
    <script>
  var ravenOptions = {
    release : \'a41654b5da4c032a89cb4a355c9e837707c2637e\',

    whitelistUrls : [\'animoto.com\',\'d14pr3cu5atb0x.cloudfront.net\',\'d2r6q1p754p9pi.cloudfront.net\',\'d2yc83ilop69kq.cloudfront.net\',\'d150hyw1dtprld.cloudfront.net\'],

    tags: {
      environment : \'production\',
    },

    maxMessageLength : 1000,

    // Will cause a deprecation warning, but the demise of `ignoreErrors` is still under discussion.
    // See: https://github.com/getsentry/raven-js/issues/73
    ignoreErrors : [
      // Random plugins/extensions
      \'top.GLOBALS\',
      // See: http://blog.errorception.com/2012/03/tale-of-unfindable-js-error.html
      \'originalCreateNotification\',
      \'canvas.contentDocument\',
      \'MyApp_RemoveAllHighlights\',
      \'http://tt.epicplay.com\',
      \'Can\\\'t find variable: ZiteReader\',
      \'jigsaw is not defined\',
      \'ComboSearch is not defined\',
      \'http://loading.retry.widdit.com/\',
      \'atomicFindClose\',
      // Facebook borked
      \'fb_xd_fragment\',
      // ISP "optimizing" proxy - `Cache-Control: no-transform` seems to reduce this. (thanks @acdha)
      // See http://stackoverflow.com/questions/4113268/how-to-stop-javascript-injection-from-vodafone-proxy
      \'bmi_SafeAddOnload\',
      \'EBCallBackMessageReceived\',
      // See http://toolbar.conduit.com/Developer/HtmlAndGadget/Methods/JSInjection.aspx
      \'conduitPage\',
      // Weird errors that are happening in moxie due to coming in and out of uploader needs
      \'Cannot read property \\\'style\\\' of null\',
      \'null is not an object (evaluating \\\'u.style\\\')\',
      // Generic error code from errors outside the security sandbox
      // You can delete this if using raven.js > 1.0, which ignores these automatically.
      \'Script error.\',
      \'Blocked a frame with origin "https://animoto.com" from accessing a cross-origin frame.\',
      \'SimilarDeals.ui.fdUi\',
      \'This Engine has been disposed\'
    ],

    ignoreUrls : [
      // Facebook flakiness
      /graph\\.facebook\\.com/i,
      // Facebook blocked
      /connect\\.facebook\\.net\\/en_US\\/all\\.js/i,
      // Woopra flakiness
      /eatdifferent\\.com\\.woopra-ns\\.com/i,
      /static\\.woopra\\.com\\/js\\/woopra\\.js/i,
      // Chrome extensions
      /extensions\\//i,
      /^chrome:\\/\\//i,
      // Other plugins
      /127\\.0\\.0\\.1:4001\\/isrunning/i,  // Cacaoweb
      /webappstoolbarba\\.texthelp\\.com\\//i,
      /metrics\\.itunes\\.apple\\.com\\.edgesuite\\.net\\//i,
      /affs/i
    ],

    shouldSendCallback : function(data) {
      var queryParams = window.location.search;
      if(queryParams) {
        // Check if we are in the optimizely editor
        if(queryParams.search(\'optimizely_editor=true\') > -1) {
          return false;
        }
      }

      return true;
    },

    autoBreadcrumbs: {
      \'xhr\'      : false,
      \'console\'  : false,
      \'dom\'      : true,
      \'location\' : false
    },

    sampleRate: 0.6
  };
  if (window.Raven) {

    Raven.config(\'https://c143d5448ec14841bd674a8c312949ff@app.getsentry.com/34788\', ravenOptions).install();
  }
</script>

    <script>
  var user = {
    key            : \'D58Jcx6tewSF+7O5PKdUut1wWB2h8gZThDUcsh4Od2A=\',
    custom : {
      browserName    : \'Firefox\',
      browserVersion : 73
    }
  };
  window.ldclient = LDClient.initialize(\'59f205faa3862f0accd10655\', user, {
    bootstrap : {"a-3-dynamic-block-preview":false,"a-3-medium-engine-renders":false,"a-3-song-trimming":true,"a3-existing-user-onboarding":true,"a3-new-user-onboarding":false,"a3-song-search":true,"a3ABBeta":"default","aa-test-2019":"variation","apple-sign-in":true,"b2-highres-preview":false,"builder-2-migration-flows":false,"builder-engine-debug":false,"builder-v2":false,"builder-engine-version":"production","builder-project-version":"1.0.0","builder-v2-themes":false,"days-remaining-on-my-videos":false,"dropbox_retrievals":true,"emailTemplate":false,"email_shares":true,"engine-verbose":false,"facebook-export":true,"facebook_retrievals":true,"fit-frame-variation":true,"flickr_retrievals":true,"rebranded-pricing":true,"free-plus-two":true,"free-plus-two-test":"variation","getty_stock":true,"google-sign-in":true,"google-auth-ab-test":"default","google-auth-desktop-ab-test":"default","google-auth-reg":false,"google_tag_manager":true,"homepage-test":true,"hubspot-export":true,"image-burst-variations":true,"instagram_retrievals":true,"shot-builder-web-v2":true,"instant-preview-web":false,"internal-only-storyboards":false,"international-price-testing":34,"lightroom_retrievals":true,"linkedin-export":false,"mobile-image-burst-variants":{"variants":[1]},"mobile-square":false,"mute_videos":false,"one-field-per-step-signup":"default","optimizely":true,"over-time-blocks":true,"phase-3-ab-test":"variation","play-page-share-test":"original","pref-takeover":false,"preferences-api":false,"rebranded-signup":"variation","sentry":60,"showBuilderMobileProjects":false,"site-announcements":"default","smugmug-export":true,"smugmug_retrievals":false,"tos-version":"1.3","twitter-export":true,"uppy-uploader":false,"user-tracking":true,"vimeo-export":true,"vzaar-export":true,"wistia-export":true,"youtube-export":true}
  });
</script>

    
      <script src="https://d14pr3cu5atb0x.cloudfront.net/pkg/js/play_page-22a6ee1fd0.js" crossorigin="anonymous" defer="defer"></script>
  <script src="https://d14pr3cu5atb0x.cloudfront.net/pkg/js/shares-5220943f87.js" crossorigin="anonymous" defer="defer"></script>
  <script src="https://d14pr3cu5atb0x.cloudfront.net/pkg/js/download_upres-febab70eb1.js" crossorigin="anonymous" defer="defer"></script>
  <script src="//d150hyw1dtprld.cloudfront.net/player/2154e3173a59b5188e2201903324e9867b6cf194/player-bundle.js" crossorigin="anonymous"></script>

    <script src="https://d14pr3cu5atb0x.cloudfront.net/bundles/react/manifest-10d693d5.js" crossorigin="anonymous" defer="defer"></script>
  <script src="https://d14pr3cu5atb0x.cloudfront.net/bundles/react/base-75f9b9b2.js" crossorigin="anonymous" defer="defer"></script>
  <script src="https://d14pr3cu5atb0x.cloudfront.net/bundles/react/vendor-978bc76c.js" crossorigin="anonymous" defer="defer"></script>
  <script src="https://d14pr3cu5atb0x.cloudfront.net/bundles/react/polyfill-527f4994.js" crossorigin="anonymous" defer="defer"></script>



    <script>
        
window.fbAsyncInit = function() {
  if (animoto && animoto.fb) {
    animoto.fb.init.initialize({
      appID : \'2415716319\'
    });

    animoto.fb.user.setID(\'\');
    animoto.fb.user.setASUid(null);

    FB.Event.subscribe(\'auth.authResponseChange\', animoto.fb.auth.responseChange);

    FB.Event.subscribe(\'xfbml.render\', function(response) {
      while (func = animoto.fb.util.fbAsyncInitFuncs.shift()) {
        if (typeof func == "function") {
          func.call();
        }
      }
    });

    FB.animoto = {
      retries: 0,
      fb_user: null,
      fb_session: null,
      logging_in: false
    };
  }
};

(function(d, s, id) {
  if (animoto && animoto.util && animoto.util.browser) {
    animoto.util.browser.loggedIn = false;
  }
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));

        (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//apis.google.com/js/platform.js?onload=googleApiLoaded";
    js.async = true;
    js.defer = true;
    fjs.parentNode.insertBefore(js, fjs);

    window.googleApiPromise = new Promise(function(resolve) {
      window.googleApiLoaded = function() {
        if (animoto && animoto.util.googleAuth) {
          animoto.util.googleAuth.loadGoogleAuth(\'543840363133.apps.googleusercontent.com\').then(resolve);
        }
      };
    });
  }(document, \'script\', \'google-jssdk\'));

        jQuery(document).ready(function() {
});

      
if (Cookies.get(\'consent\') !== \'given\') {
  $(document).ready(function() {
    $(\'.js-gdpr-logged-out-accept\').click(function() {
      $(\'.js-gdpr-logged-out-banner\').slideUp(150);
      Cookies.set(\'consent\', \'given\');
      dataLayer.push({ event : \'tracking_accepted\' });
    });
  });
}


      var shareTrigger = function() {
  animoto.dispatcher.trigger(\'captcha:loaded\');
}

var PlayerEvents = {
  trackingUrl: function(event, playerType, extraParams){
    var url = \'//d2jy3ctxtc2iu2.cloudfront.net/trail.gif\';
    url += "?s="  + "player" + // scope
            "&e="  + event + // event
            "&sid=" + "811fda48de32c993461c8cb0c33e30d1" + // request/session id
            "&src=" + "play-page" + // source
            "&own=" + "false" + // is this event for the render owner
            "&pt=" + playerType + //player type
            "&bi=" + "14fddb584882b23d1d99b2bf4dab49c8" + // browser id
            "&vi=" + "" + // vanity id
            "&ri=" + "GjsJ1gu0WDRfr4pGw12xZQ" + // render id
            "&rl=" + "0" + // render length
            "&rt=" + "taco+bell" + // render title
            "&rc=" + "2014" + // render created at
            "&ui=" + ""  + // user id
            "&uc=" + "" + // user created at
            "&us=" + "" + // user sub
            "&oi=" + "psigundc" + // owner id
            "&oc=" + "1396617565" + // owner created at
            "&os=" + "freemium_v1" + // owner sub
            "&stn=" + "party" + // style name
            "&r="  + "" + // http referer
            "&ep="  + encodeURIComponent(window.location) + // http referer
            "&t="  + Math.round((new Date()).getTime() / 1000); // time of event

    if (extraParams) {
      $.each(extraParams, function(k,v) {
        url += "&" + encodeURIComponent(k) + "=" + encodeURIComponent(v);
      });
    }
    return url;
  }
};

var renderData                     = {"creator_client":"web","title":"taco bell","description":"","producer":null,"style":"party","event_time":"2014-04-17T13:35:29Z","favorite":false,"length":30.03,"video_formats":[{"resolution":"360p","framerate":15,"format":"h264","created_at":"2014-04-17T13:31:56Z","purpose":"final","size":3706334,"height":360,"width":640,"links":{"file":"https:\\/\\/d2m23yiuv18ohn.cloudfront.net\\/Video\\/GjsJ1gu0WDRfr4pGw12xZQ\\/360p.mp4"}}],"links":{"self":"https:\\/\\/animoto.com\\/appservice\\/videos\\/GjsJ1gu0WDRfr4pGw12xZQ","current_render":"https:\\/\\/animoto.com\\/appservice\\/videos\\/GjsJ1gu0WDRfr4pGw12xZQ","export_jobs":"https:\\/\\/animoto.com\\/appservice\\/jobs\\/exporting?video_url=https%3A%2F%2Fanimoto.com%2Fappservice%2Fvideos%2FGjsJ1gu0WDRfr4pGw12xZQ","play_page":"https:\\/\\/animoto.com\\/play\\/GjsJ1gu0WDRfr4pGw12xZQ","thumbnail_image":"https:\\/\\/d2m23yiuv18ohn.cloudfront.net\\/Video\\/GjsJ1gu0WDRfr4pGw12xZQ\\/cover_224x126.jpg","covers":{"126p":"https:\\/\\/d2m23yiuv18ohn.cloudfront.net\\/Video\\/GjsJ1gu0WDRfr4pGw12xZQ\\/cover_224x126.jpg","224x126":"https:\\/\\/d2m23yiuv18ohn.cloudfront.net\\/Video\\/GjsJ1gu0WDRfr4pGw12xZQ\\/cover_224x126.jpg","240p":"https:\\/\\/d2m23yiuv18ohn.cloudfront.net\\/Video\\/GjsJ1gu0WDRfr4pGw12xZQ\\/cover_432x240.jpg","360p":"https:\\/\\/d2m23yiuv18ohn.cloudfront.net\\/Video\\/GjsJ1gu0WDRfr4pGw12xZQ\\/cover_648x360.jpg","432x240":"https:\\/\\/d2m23yiuv18ohn.cloudfront.net\\/Video\\/GjsJ1gu0WDRfr4pGw12xZQ\\/cover_432x240.jpg","640x360":"https:\\/\\/d2m23yiuv18ohn.cloudfront.net\\/Video\\/GjsJ1gu0WDRfr4pGw12xZQ\\/cover_648x360.jpg","648x360":"https:\\/\\/d2m23yiuv18ohn.cloudfront.net\\/Video\\/GjsJ1gu0WDRfr4pGw12xZQ\\/cover_648x360.jpg","1080p":"https:\\/\\/d2m23yiuv18ohn.cloudfront.net\\/Video\\/GjsJ1gu0WDRfr4pGw12xZQ\\/cover_1920x1080.jpg","1920x1080":"https:\\/\\/d2m23yiuv18ohn.cloudfront.net\\/Video\\/GjsJ1gu0WDRfr4pGw12xZQ\\/cover_1920x1080.jpg"},"cover_image":"https:\\/\\/d2m23yiuv18ohn.cloudfront.net\\/Video\\/GjsJ1gu0WDRfr4pGw12xZQ\\/cover_1920x1080.jpg","user":"https:\\/\\/animoto.com\\/appservice\\/users\\/10288572","project":"https:\\/\\/animoto.com\\/appservice\\/projects\\/32bti9fZwtzJye2TkO2kmQ"},"sharing":{},"forced_watermark":false,"project_type":"video_slideshow","project_version":null,"jobs":[{"state":"completed","resolution":"360p","format":"h264","framerate":15,"height":360,"width":640,"length":30.03,"purpose":"final","links":{"self":"https:\\/\\/animoto.com\\/appservice\\/jobs\\/rendering\\/GjsJ1gu0WDRfr4pGw12xZQ-98004986","project":"https:\\/\\/animoto.com\\/appservice\\/projects\\/32bti9fZwtzJye2TkO2kmQ","video":"https:\\/\\/d2m23yiuv18ohn.cloudfront.net\\/Video\\/GjsJ1gu0WDRfr4pGw12xZQ\\/360p.mp4"}}],"deprecated":false},
    ownerData                      = {"entitlements":["builder","configure_comments","configure_sharing","download_videos","favorite_songs","getty_stock","hide_logo","hide_share_links","iso_r480p","mp4_r480p","mp4_r720p","plus_themes","pro_project_title","producer_name","recent_songs","referrals","render_stats","share","share_notification","special_blocks","maker","no_watermark"],"facebook_profile":null},
    isLoggedIn                     = false,
    isOwner                        = false,
    isFBUser                       = false,
    App                            = null,
    tags                           = [],
    inPlayPageShareTestVariation   = false,
    videoSettings,



  Config = {
    EXCLUDED_PLAYER_RESOLUTIONS    : ["1080p","1080x1080"],
    CLIENT_ID                      : "web",
    previewPollingInterval         : 3500,
    brandedShareHost               : \'animoto.com\',
    unbrandedShareHost             : \'video214.com\',
    PLAYER_QOS_URL                 : \'animoto.com/trail.gif\',
    ANNUAL_SPLIT_MONTHLY_PRICE     : \'\',
    ANNUAL_PRICE                   : \'\'
  };

  videoSettings = {
    height                : 360,
    width                 : 640,
    okey                  : \'GjsJ1gu0WDRfr4pGw12xZQ\',
    coverImage            : \'https://d2m23yiuv18ohn.cloudfront.net/Video/GjsJ1gu0WDRfr4pGw12xZQ/cover_648x360.jpg\',
    controlBar            : \'autohide\',
    start_hq              : true,
    is_animoto            : true,
    styleName             : \'party\',
    asset_domain          : \'s3-p.animoto.com\',
    animoto_domain        : \'animoto.com\',
    autostart             : false,
    duration              : 30030,
    ctaText               : \'\',
    ctaHTMLDisplayText    : "",
    ctaPanel              : null,
    ctaURL                : \'\',
    html5TrackingFunction : PlayerEvents.html5Event,
    responsive            : true,
    gaCampaign            : null,
    qosReporting          : true,
    flashVideoUrl         : "https://d150hyw1dtprld.cloudfront.net/swf/w.swf?w=swf/production/vp1&amp;e=1589997188&amp;f=GjsJ1gu0WDRfr4pGw12xZQ&amp;d=0&amp;m=p&amp;r=360p&amp;i=m&amp;asset_domain=s3-p.animoto.com&amp;animoto_domain=animoto.com&amp;options=".replace(/amp;/g, \'\')
  };

  _.extend(renderData, {\'playConfig\' : {"id":565733,"okey":"GjsJ1gu0WDRfr4pGw12xZQ","sharing":true,"commenting":true,"created_at":"2014-04-17T13:37:20.000Z","updated_at":"2014-04-17T13:37:20.000Z","start_resolution":""}, \'call_to_action\': {"display":false,"title":"","url":""}});

  document.addEventListener(\'DOMContentLoaded\', function() {
    _.extend(animoto.urls, {
      appservice_project    : window.location.protocol + "//" + window.location.hostname +"/appservice/projects",
      pricing               : \'/pricing\',
      login                 : \'/log_in\',
      signup                : \'/sign_up\',
      pro_purchase          : \'/account/purchase/pro_v2?post_purchase_path=\' + window.location.pathname,
      user_hints            : \'/w/users/user_hints\',
      pricing_post_purchase : "/pricing?post_purchase_path=https%3A%2F%2Fanimoto.com%2Fplay%2FGjsJ1gu0WDRfr4pGw12xZQ",
      google_play           : "https://play.google.com/store/apps/details?id=com.animoto.android.videoslideshow&amp;hl=en",
      app_store             : "https://itunes.apple.com/app/apple-store/id1309697613",
      reactShareScript      : "https://d14pr3cu5atb0x.cloudfront.net/bundles/react/reactShareOptions-f5ede43f.js",
      purchase              : \'/account/purchase/professional\'
    });

    window.VideoModelConfigs = {
      renderStatsEntitlement : _.includes(ownerData.entitlements, \'render_stats\'),
      wistiaToken            : ownerData.tokens ? ownerData.tokens.wistia : \'\',
      renderLink             : renderData.links.self,
      pollJobs               : true
    };

    var vid = Render.Models.Video.create(renderData, {
      analytics                  : false,
      projectWithAssetsMapHeader : AS_SETTINGS.project_with_assets_map_header,
      brandedShareHost           : Config.brandedShareHost,
      unbrandedShareHost         : Config.unbrandedShareHost,
      excludedPlayerResolutions  : Config.EXCLUDED_PLAYER_RESOLUTIONS,
      isOwner                    : isOwner,
      defaultShareImage          : "https://d14pr3cu5atb0x.cloudfront.net/images/play/default-cover-360p-24afcdf4d3.png",
      defaultCover               : "https://d14pr3cu5atb0x.cloudfront.net/images/play/default-cover-15d65a6678.png"
    });

    window.App = new PlayPage.Views.PlayerView({
      model       : vid,
      currentUser : new ClientService.Models.User({"anonymous":true,"id":-1,"entitlements":[],"plan_category":"none","limits":{"max_footage_length_in_seconds":5,"max_video_length_in_seconds":30,"max_visuals_per_project":300,"max_share_emails_per_month":1000}})
    });
    window.App.render({
      hasSharing           : true,
      hasComments          : true,
      analytics            : false,
      producerName         : "Bailey Duhaime",
      displayDate          : "April 17, 2014",
      viewCount            : "1579 Page Views"
    });

    var params = $.deparam.querystring();

    (function() {
  var e = document.createElement(\'script\');
  e.type = \'text/javascript\';
  e.async = false;
  e.src = \'https://platform.linkedin.com/in.js?async=true\';
  e.onload = e.onreadystatechange = function(){
    if (window.IN) {
      IN.init({
        api_key: \'77zrc8ieqyt5la\'
      });
    }
  };
  var s = document.getElementsByTagName(\'script\')[0];
  s.parentNode.insertBefore(e, s);
}());
  });


    </script>

    <script src="https://d14pr3cu5atb0x.cloudfront.net/pkg/js/set_user_local_storage-45402a54a1.js" crossorigin="anonymous"></script>
  </body>
</html>
'
];
