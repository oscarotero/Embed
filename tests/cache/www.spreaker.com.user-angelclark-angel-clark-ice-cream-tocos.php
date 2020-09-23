<?php
declare(strict_types = 1);

return [
    'headers' => [
        'content-type' => [
            'text/html; charset=utf-8',
            'text/html; charset=utf-8'
        ],
        'transfer-encoding' => [
            'chunked'
        ],
        'connection' => [
            'keep-alive'
        ],
        'date' => [
            'Wed, 23 Sep 2020 21:47:56 GMT',
            'Wed, 23 Sep 2020 21:47:56 GMT'
        ],
        'server' => [
            'Spreaker Proxy Cache',
            'Spreaker Proxy Cache'
        ],
        'set-cookie' => [
            'spreaker=90ed84715b1947dc6170b418a01c97fa; path=/; domain=.spreaker.com; secure; HttpOnly',
            'spreaker=017589bfbe8570cf8ef467352b8bca93; path=/; domain=.spreaker.com; secure; HttpOnly'
        ],
        'expires' => [
            'Thu, 19 Nov 1981 08:52:00 GMT',
            'Thu, 19 Nov 1981 08:52:00 GMT'
        ],
        'pragma' => [
            'no-cache',
            'no-cache'
        ],
        'cache-control' => [
            'max-age=0, private, no-cache, no-store, must-revalidate, no-transform',
            'max-age=0, private, no-cache, no-store, must-revalidate, no-transform'
        ],
        'location' => [
            'https://www.spreaker.com/user/angelclark/angel-clark-ice-cream-tocos'
        ],
        'x-cache' => [
            'Miss from cloudfront',
            'Error from cloudfront'
        ],
        'via' => [
            '1.1 adaa7e69b304066aa4eaf0d2190ecfd7.cloudfront.net (CloudFront)',
            '1.1 fcb5d6664fcce90309288d9ff2cfb9a5.cloudfront.net (CloudFront)'
        ],
        'x-amz-cf-pop' => [
            'MAD50-C1',
            'MAD50-C1'
        ],
        'x-amz-cf-id' => [
            'U3DTM8E3CO3bpQpwYpatlCagRUZ35j3uWlo_v1-0Q14DH_1yHBlwsw==  HTTP/2 404',
            'P-MsDdQLNcdYFy_SzXLCB2Qtc95vH5sf6c4StItUOlxDOAz11SyDPg=='
        ],
        'vary' => [
            'Accept-Encoding'
        ],
        'x-frame-options' => [
            'SAMEORIGIN'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'Content-Location' => [
            'https://www.spreaker.com/user/angelclark/angel-clark-ice-cream-tocos'
        ],
        'X-Request-Time' => [
            '0.254 ms'
        ]
    ],
    'statusCode' => 404,
    'reasonPhrase' => 'Not Found',
    'body' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html
    xmlns="http://www.w3.org/1999/xhtml"
    xml:lang="en"
    lang="en"
    xmlns:sp="https://www.spreaker.com/namespaces/sp"
    xmlns:og="http://ogp.me/ns#">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">


    <meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Page not found</title>
<meta name="description" content="Listen in to popular podcasts and radio shows from around the world or start your own with Spreaker!" />
<meta name="referrer" content="origin-when-cross-origin" />
<meta name="apple-mobile-web-app-capable" content="yes" />
    <!--[if lte IE 9]>
<script>
if (!/IEMobile/.test(navigator.userAgent)) { window.location = "https:\\/\\/www.spreaker.com\\/your-browser-is-unsupported"; }
</script>
<![endif]-->
    <script>

                    try {
                // IFrame detection: don\'t allow opening Spreaker in an iframe
                if (self != top) {
                    top.location = self.location;
                }
            } catch(e){}
        
        // Ajax navigation
        var p    = (typeof history.pushState === \'function\' && true),
            l    = window.location,
            ajax = true;

        if (!p && l.pathname !== "/page") {
            if (l.hash.indexOf(\'#!\') !== -1) {
                window.location = "/page" + l.search + l.hash;
            } else if (ajax) {
                window.location = "/page#!" + l.pathname + l.search + l.hash;
            }
        } else if (p && l.pathname === "/page" && l.hash.indexOf(\'#!\') !== -1) {
            if ((new RegExp("^[^\\/]*(?:javascript|vbscript|data):", "i")).test(l.hash)) {
                window.location = "/";
            } else {
                window.location = l.hash.replace(/(?:\\\\(\\/)?|\\/(\\\\)?)+/g, "/").replace(/^\\#\\!/, "");
            }
        }

</script>


    
    <link rel="manifest" href="/manifest.webmanifest" />

    
<meta property="fb:app_id" content="215002133707" />
<meta property="og:site_name" content="Spreaker"/>
<meta property="og:type" content="article"/>
<meta property="og:title" content="Spreaker"/>
<meta property="og:description" content="Listen in to popular podcasts and radio shows from around the world or start your own with Spreaker!"/>
<meta property="og:image" content="https://d1sojsgu0jwtb7.cloudfront.net/images/facebook/default_logo_v2.png"/>





    

    
<meta name="twitter:site" content="@spreaker"/>
<meta name="twitter:app:id:iphone" content="388449677"/>
<meta name="twitter:app:name:iphone" content="Spreaker Podcast Player"/>
<meta name="twitter:app:id:ipad" content="388449677"/>
<meta name="twitter:app:name:ipad" content="Spreaker Podcast Player"/>
<meta name="twitter:app:name:googleplay" content="Spreaker Podcast Player"/>
<meta name="twitter:app:id:googleplay" content="com.spreaker.android"/>
    
    <meta name="theme-color" content="#212322" />

    <!-- Standard -->
<link rel="shortcut icon" href="https://d1sojsgu0jwtb7.cloudfront.net/images/favicons/favicon.ico" />
<link rel="icon" type="image/x-icon" href="https://d1sojsgu0jwtb7.cloudfront.net/images/favicons/favicon.ico" />
<link rel="icon" type="image/png" href="https://d1sojsgu0jwtb7.cloudfront.net/images/favicons/favicon_48.png" />

<!-- iPhone Retina -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://d1sojsgu0jwtb7.cloudfront.net/images/favicons/apple_touch_114.png" />

<!-- iPad -->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://d1sojsgu0jwtb7.cloudfront.net/images/favicons/apple_touch_72.png" />

<!-- iPhone Non Retina -->
<link rel="apple-touch-icon-precomposed" href="https://d1sojsgu0jwtb7.cloudfront.net/images/favicons/apple_touch_57.png" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://d1sojsgu0jwtb7.cloudfront.net/css/889e45ad7868ebc7fb08170a472c517c/frontend.min.gz.css" />
<link rel="stylesheet" type="text/css" media="screen" href="https://d1sojsgu0jwtb7.cloudfront.net/css/889e45ad7868ebc7fb08170a472c517c/removed_content.min.gz.css" />
    <script type="text/javascript" src="https://d1sojsgu0jwtb7.cloudfront.net/js-pack/base-frontend.en_US.576a7ab016365d47e2ffb05cd03e5d8e.js"></script>

    
<script type="text/javascript">

    // Global configuration
    SP.Config.addGlobalConfig({
        USER:                           null,
        USER_COUNTRY_EUROPEAN_UNION:    true,
        DOMAIN:                         "spreaker.com",
        API_URL:                        "https:\\/\\/api.spreaker.com",
        API_RECEIVER_URL:               "https:\\/\\/api.spreaker.com\\/receiver.html?v=50125671b1d61f3ef3468a4600540147",
        API_CULTURE:                    "en_US",
        SITE_URL:                       "https:\\/\\/www.spreaker.com",
        WIDGET_URL:                     "https:\\/\\/widget.spreaker.com",
        VALIDATION_URL:                 "\\/ajax\\/validate\\/form",
        SEARCH_URL:                     "https:\\/\\/search.spreaker.com",
        SEARCH_RECEIVER_URL:            "https:\\/\\/search.spreaker.com\\/receiver.html?v=50125671b1d61f3ef3468a4600540147",
        REDIRECT_URL:                   "\\/explore",
        AJAX_VERSION:                   "50125671b1d61f3ef3468a4600540147",
        AUTH_URL:                       "\\/connect",
        OAUTH_TOKEN:                    null,
        PUSHER_ENABLED:                 true,
        PUSHER_APP_KEY:                 "43f80ebf8fa8d7c1ebee",
        STRIPE_PREMIUM_PUBLISHABLE_KEY: "pk_0DkdqskXokGWhGzZZCwBbUPQ3owQq",
        STRIPE_STORE_PUBLISHABLE_KEY:   "pk_live_sbI2q15f2zAg8Rfqiw8xmh9q",
        IMAGES_BASE_PATH:               "\\/\\/d1sojsgu0jwtb7.cloudfront.net\\/images",
        PLAYER:                         {"station_url":null,"playlist_url":null,"autoplay":false,"referrer":"www.spreaker.com","auth_token_v2":null},
        CONNECT:                        {"fb_app_id":215002133707,"tw_connect_url":"https:\\/\\/www.spreaker.com\\/twitter\\/connect","go_connect_url":"https:\\/\\/www.spreaker.com\\/google\\/connect","sc_connect_url":"https:\\/\\/www.spreaker.com\\/soundcloud\\/connect","tb_connect_url":"https:\\/\\/www.spreaker.com\\/tumblr\\/connect","yt_connect_url":"https:\\/\\/www.spreaker.com\\/youtube\\/connect","ap_connect_url":"https:\\/\\/www.spreaker.com\\/apple\\/connect"}    });

    // Modules configuration
    SP.Config.addModuleConfig(\'ajax\', {"modules":{"page_header":{"persistent":true},"page_header_search":{"persistent":true},"compatibility":{"persistent":true},"ajax":{"persistent":true},"auth":{"persistent":true},"embed":{"persistent":true},"pusher":{"persistent":true},"follow":{"persistent":true},"like":{"persistent":true},"ban":{"persistent":true},"culture":{"persistent":true},"flash_message":{"persistent":true},"facebook_invite":{"persistent":true},"facebook_share":{"persistent":true},"notifications":{"persistent":true},"player_ui":{"persistent":true},"player_buttons":{"persistent":true},"mobile_ios":{"persistent":true},"performance_tracking":{"persistent":true}},"history_url":"https:\\/\\/www.spreaker.com\\/history.html","push_state":true});

    // Picture element HTML5 shiv
    document.createElement( "picture" );
</script>

    <!-- Tracking on head -->
        <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
            new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
        \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,\'script\',\'dataLayer\',\'GTM-PMD8LDV\');</script>
    <!-- End Google Tag Manager -->


<script>
    window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;

    // Helper
    var formatTimestampIso8601 = function(date) {
        var tzo = -date.getTimezoneOffset(),
            dif = tzo >= 0 ? \'+\' : \'-\';

        var pad = function(num) {
            var norm = Math.abs(Math.floor(num));
            return (norm < 10 ? \'0\' : \'\') + norm;
        };

        return date.getFullYear() +
            \'-\' + pad(date.getMonth()+1) +
            \'-\' + pad(date.getDate()) +
            \'T\' + pad(date.getHours()) +
            \':\' + pad(date.getMinutes()) +
            \':\' + pad(date.getSeconds()) +
            dif + pad(tzo / 60) +
            \':\' + pad(tzo % 60);
    };

    var getSessionId = function() {
        // NOTE: we\'re using a randomized string that is sent with each pageview.
        //       The string changes with each pageview, but this doesn\'t matter
        //       because we\'re sending it to a session-scoped dimension.
        return new Date().getTime() + \'-\' + Math.random().toString(36).substring(5);
    };

    // Create tracker
    ga(\'create\', {
        trackingId:     "UA-9526709-1",
        cookieDomain:   undefined,
        cookieExpires:  7200,
        userId:         undefined    });

    // Dimensions
            
        // User Type
        ga(\'set\', \'dimension3\', "not-logged");

        // Session ID
        ga(\'set\', \'dimension4\', getSessionId());
    
    // Anonymize IP
    ga(\'set\', \'anonymizeIp\', true);

    // Track pageviews
            try {
            ga(\'send\', \'pageview\', {
                page:       "\\/user\\/angelclark\\/angel-clark-ice-cream-tocos",
                dimension1: formatTimestampIso8601(new Date())
            });
        } catch(e) {
            console.error(\'Error while sending tracking to GA: \' + e.message);
        }

        try {
            Sp.util.TagManagerTracker.pageView("\\/user\\/angelclark\\/angel-clark-ice-cream-tocos");
        } catch(e) {
            console.error(\'Error while sending tracking to GTM: \' + e.message);
        }

    </script>

<script async src=\'//www.google-analytics.com/analytics.js\'></script>
    <!-- Amplitude Analytics -->
    <script type="text/javascript">
        (function(e,t){var n=e.amplitude||{_q:[],_iq:{}};var r=t.createElement("script")
        ;r.type="text/javascript"
        ;r.integrity="sha384-1Uab0ISe8Eql+1G2WVmlyKxlDhpsXnPVpvGHmUJQkag+IATRq3Da7OF5ql8TfpZ4"
        ;r.crossOrigin="anonymous";r.async=true
        ;r.src="https://cdn.amplitude.com/libs/amplitude-5.9.0-min.gz.js"
        ;r.onload=function(){if(!e.amplitude.runQueuedFunctions){
        console.log("[Amplitude] Error: could not load SDK")}}
        ;var i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)
        ;function s(e,t){e.prototype[t]=function(){
        this._q.push([t].concat(Array.prototype.slice.call(arguments,0)));return this}}
        var o=function(){this._q=[];return this}
        ;var a=["add","append","clearAll","prepend","set","setOnce","unset"]
        ;for(var u=0;u<a.length;u++){s(o,a[u])}n.Identify=o;var c=function(){this._q=[]
        ;return this}
        ;var l=["setProductId","setQuantity","setPrice","setRevenueType","setEventProperties"]
        ;for(var p=0;p<l.length;p++){s(c,l[p])}n.Revenue=c
        ;var d=["init","logEvent","logRevenue","setUserId","setUserProperties","setOptOut","setVersionName","setDomain","setDeviceId","setGlobalUserProperties","identify","clearUserProperties","setGroup","logRevenueV2","regenerateDeviceId","groupIdentify","onInit","logEventWithTimestamp","logEventWithGroups","setSessionId","resetSessionId"]
        ;function v(e){function t(t){e[t]=function(){
        e._q.push([t].concat(Array.prototype.slice.call(arguments,0)))}}
        for(var n=0;n<d.length;n++){t(d[n])}}v(n);n.getInstance=function(e){
        e=(!e||e.length===0?"$default_instance":e).toLowerCase()
        ;if(!n._iq.hasOwnProperty(e)){n._iq[e]={_q:[]};v(n._iq[e])}return n._iq[e]}
        ;e.amplitude=n})(window,document);

        Sp.util.Amplitude.init(\'10aa248c285498f5ee621903488bb9dc\');

                    Sp.util.Amplitude.setUserId(\'null\');
        
        // Check custom params in QS
                
        
    </script>
    <!-- End Amplitude Analytics -->


    <link type="application/opensearchdescription+xml" rel="search" href="https://www.spreaker.com/open_search.xml" />
</head>


<body  >



<!-- Header -->
    <div id="hd_wrapper">
        <div id="hd_fixed">
            <div id="hd_content">

                <!-- Logo -->
                <a class="hd_logo" title="Spreaker" onclick="SP.Ajax.onClick(this, arguments);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/">Spreaker</a>                <a class="hd_logo_mobile_link" onclick="SP.Ajax.onClick(this, arguments);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/">Spreaker</a>                <a id="hd_logo_playing" class="hd_logo_mobile_playing" href="#" onclick="return false"></a>


                <!-- Search -->
                                    <div id="hd_search">
                        <form id="hd_search_form" class="hd_search_form" method="get" action="/search" autocomplete="off">
                            <input id="hd_search_submit" type="submit" class="hd_search_submit" name="search" value="" />
                            <input id="hd_search_input"  type="text"   class="hd_search_input" name="query" placeholder="Search for podcasts or episodes" maxlength="50" />
                        </form>

                        <div id="hd_search_results" class="ta_results_box"></div>
                    </div>
                

                <!-- Navigation -->
                                    <ul id="hd_nav">
                        <li class="hd_nav_item" style="display: none;">
                            <a id="hd_nav_home_link" class="hd_nav_item_link " title="Spreaker" onclick="SP.Ajax.onClick(this, arguments);Sp.util.AnalyticsTracker.nav(&quot;Menu&quot;, &quot;Home&quot;);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/home"><span class="ffico ffico_home" data-icon="h"></span><span class="text">Home</span></a>                        </li>
                        <li class="hd_nav_item">
                            <a id="hd_nav_listen_link" class="hd_nav_item_link " title="Spreaker" onclick="SP.Ajax.onClick(this, arguments);Sp.util.AnalyticsTracker.nav(&quot;Menu&quot;, &quot;Explore&quot;);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/explore"><span class="ffico ffico_headphones" data-icon="*"></span><span class="text">Listen</span></a>                        </li>
                        <li class="hd_nav_item">
                            <a id="hd_nav_broadcast_link" class="hd_nav_item_link " title="Create a podcast" onclick="SP.Ajax.onClick(this, arguments);Sp.util.AnalyticsTracker.nav(&quot;Menu&quot;, &quot;Create&quot;);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/create-a-podcast"><span class="ffico ffico_mic" data-icon="8"></span><span class="text">Create</span></a>                        </li>
                                                    <li class="hd_nav_item">
                                <a id="hd_nav_plans_link" class="hd_nav_item_link " title="Plans and Pricing" onclick="SP.Ajax.onClick(this, arguments);Sp.util.AnalyticsTracker.nav(&quot;Menu&quot;, &quot;Plans&quot;);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/plans"><span class="ffico ffico_tag" data-icon="`"></span><span class="text">Plans &amp; Pricing</span></a>                            </li>
                                                                        <li class="hd_nav_item fea_mobile_search">
                            <a id="hd_nav_search_link" class="hd_nav_item_link " title="Search" onclick="SP.Ajax.onClick(this, arguments);Sp.util.AnalyticsTracker.nav(&quot;Menu&quot;, &quot;Search&quot;);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/search"><span class="ffico ffico_search" data-icon="9"></span><span class="text">Search</span></a>                        </li>
                                                    <li class="hd_nav_auth">
                                <a class="hd_nav_auth_login" title="Sign in" onclick="SP.Core.notify(\'auth.login.tab\'); return false;" rel="nofollow" href="https://www.spreaker.com/login">Login</a>
                                <a class="hd_nav_auth_signup btnn btnn_primary btnn_small" title="Sign in" onclick="SP.Core.notify(\'auth.signup.tab\'); return false;" rel="nofollow" href="https://www.spreaker.com/signup">Sign up</a>                            </li>
                                            </ul>
                            </div>
        </div>
    </div>


<!-- Notifications -->
<div id="ly_notifications_wrapper">
    <div id="ly_notifications_container"></div>
</div>


<!-- Content -->
<div id="ly_ajax_content_wrapper">

    <div id="ly_ajax_content_container">

        <!-- Flash message-->
        <div id="ly_flash_message"></div>

        <!-- Page content -->
        <div id="ly_ajax_content">
            

<div class="ly_page">
    <div class="row">
        <div class="offset2 col8">
            <h1 class="rmv_title">We&#039;re really sorry, but the page you&#039;re looking for can&#039;t be found</h1>

            <p class="rmv_message">
                                    <span class="rmv_message">You might have mis-typed the URL.</span><br/>
                                    <span class="rmv_message">Please check it again.</span><br/>
                            </p>
        </div>
    </div>
</div>
        </div>

    </div>
</div>


<!-- Footer -->
    
<div class="ft_wrapper">
    <div class="ft_wrapper_inner">

                    <!-- Links -->
            <div class="row ft_links_groups">

                <!-- About -->
                <div class="col4 ft_links_group about">
                    <h4 class="ft_links_title">Using Spreaker</h4>
                    <ul class="ft_links_items">
                        <li><a class="ft_links_item" title="Start Your Podcast" onclick="SP.Ajax.onClick(this, arguments);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/create-a-podcast">How to Create a Podcast</a></li>
                                                    <li><a class="ft_links_item" title="Plans and Pricing" onclick="SP.Ajax.onClick(this, arguments);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/plans">Plans and Pricing</a></li>
                                                <li><a class="ft_links_item" title="Start Your Podcast" onclick="SP.Ajax.onClick(this, arguments);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/create-a-podcast">Make a Podcast Free</a></li>
                        <li><a class="ft_links_item" title="Get Analytics on Your Audience" onclick="SP.Ajax.onClick(this, arguments);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/analytics-for-podcasts">Get Analytics on Your Audience</a></li>
                        <li><a class="ft_links_item" target="_blank" title="Help Center" rel="noopener" href="https://help.spreaker.com">Help Center</a></li>
                    </ul>
                </div>

                <!-- Apps -->
                <div class="col5 ft_links_group apps">
                                            <h4 class="ft_links_title">Software and Mobile Apps</h4>

                        <h5 class="ft_links_subtitle">For Podcasters:</h5>
                        <ul class="ft_links_items">
                            <li><a class="ft_links_item" rel="nofollow" title="Spreaker Studio for Desktop" onclick="SP.Ajax.onClick(this, arguments);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/download?ref=footer&amp;scroll=apps_studio_desktop">Spreaker Studio for Desktop</a></li>
                            <li><a class="ft_links_item" rel="nofollow" title="Spreaker Studio for Mobile" onclick="SP.Ajax.onClick(this, arguments);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/download?ref=footer&amp;scroll=apps_studio_mobile">Spreaker Studio for Mobile</a></li>
                        </ul>

                        <h5 class="ft_links_subtitle">For Listeners:</h5>
                        <ul class="ft_links_items">
                            <li><a class="ft_links_item" rel="nofollow" title="Spreaker Podcast Player for Mobile" onclick="SP.Ajax.onClick(this, arguments);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/download?ref=footer&amp;scroll=apps_radio_mobile">Spreaker Podcast Player for Mobile</a></li>
                        </ul>
                                    </div>

                <!-- Connect -->
                <div class="col3 ft_links_group connect">
                    <h4 class="ft_links_title">Connect With Us</h4>
                    <ul class="ft_links_items">
                        <li><a class="ft_links_item" target="_blank" title="Voxnest Website" rel="noopener" href="https://www.voxnest.com">Voxnest</a></li>
                        <li><a class="ft_links_item" target="_blank" title="Blog - Spreaker" rel="noopener" href="https://blog.spreaker.com">Blog</a></li>
                        <li><a class="ft_links_item" rel="noopener nofollow" title="Spreaker on Facebook" target="_blank" href="https://www.facebook.com/spreaker">Facebook</a>                        <li><a class="ft_links_item" rel="noopener nofollow" title="Spreaker on Twitter" target="_blank" href="https://twitter.com/spreaker/">Twitter</a>                        <li><a class="ft_links_item" rel="noopener nofollow" title="Spreaker on LinkedIn" target="_blank" href="https://www.linkedin.com/company/spreaker">LinkedIn</a>                        <li><a class="ft_links_item" rel="nofollow" title="Subscribe to Our Newsletter" href="/newsletter/subscription">Subscribe to Our Newsletter</a></li>
                    </ul>
                </div>

            </div>


            <!-- Languages -->
            <div class="ft_langs">
                <h4 class="ft_langs_title">Language</h4>

                <ul class="ft_langs_items">
                    
                                                                        <li class="ft_langs_item">
                                <a onclick="SP.I18n.onChangeCultureClick(\'en_US\', \'en_US\', arguments)" class="ft_langs_item_link" title="English - Spreaker" rel="nofollow" href="https://en_us.spreaker.com/user/angelclark/angel-clark-ice-cream-tocos">English</a>                            </li>
                                                                                                <li class="ft_langs_item">
                                <a onclick="SP.I18n.onChangeCultureClick(\'en_US\', \'it_IT\', arguments)" class="ft_langs_item_link" title="Italiano - Spreaker" rel="nofollow" href="https://it_it.spreaker.com/user/angelclark/angel-clark-ice-cream-tocos">Italiano</a>                            </li>
                                                                                                <li class="ft_langs_item">
                                <a onclick="SP.I18n.onChangeCultureClick(\'en_US\', \'es_ES\', arguments)" class="ft_langs_item_link" title="Español - Spreaker" rel="nofollow" href="https://es_es.spreaker.com/user/angelclark/angel-clark-ice-cream-tocos">Español</a>                            </li>
                                                                                                        </ul>
            </div>


            <!-- More -->
            <div>
                <ul class="ft_more">
                    <li class="ft_more_item">
                      <a class="ft_more_link" rel="nofollow" title="Spreaker" onclick="SP.Ajax.onClick(this, arguments);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/about">About</a>                    </li>
                    <li class="ft_more_item">
                      <a class="ft_more_link" rel="nofollow" title="Jobs" href="https://www.voxnest.com/join-us/">Careers</a>                    </li>
                    <li class="ft_more_item">
                      <a class="ft_more_link" rel="nofollow" title="Press Resources" onclick="SP.Ajax.onClick(this, arguments);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/press">Press</a>                    </li>
                    <li class="ft_more_item">
                      <a class="ft_more_link" rel="nofollow" title="Our Partners" onclick="SP.Ajax.onClick(this, arguments);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/partners">Partners</a>                    </li>
                    <li class="ft_more_item">
                      <a class="ft_more_link" rel="noopener nofollow" target="_blank" title="Developers / API" href="https://developers.spreaker.com">Developers</a>                    </li>
                    <li class="ft_more_item">
                      <a class="ft_more_link" rel="nofollow" title="Terms and Conditions" onclick="SP.Ajax.onClick(this, arguments);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/terms">Terms</a>                    </li>
                    <li class="ft_more_item">
                      <a class="ft_more_link" rel="noopener nofollow" target="_blank" title="System Status" href="https://status.spreaker.com">System Status</a>                    </li>
                    <li class="ft_more_item">
                      <a class="ft_more_link" rel="nofollow" title="Community Rules" onclick="SP.Ajax.onClick(this, arguments);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/community-rules">Community Rules</a>                    </li>
                    <li class="ft_more_item">
                      <a class="ft_more_link" rel="nofollow" title="Privacy Policy" onclick="SP.Ajax.onClick(this, arguments);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="/privacy">Privacy</a>                    </li>
                </ul>

                <div class="ft_iab">
                    <img alt="iAB member" srcset="https://d1sojsgu0jwtb7.cloudfront.net/images/ft_iab_member@2x.png 2x,https://d1sojsgu0jwtb7.cloudfront.net/images/ft_iab_member.png" />                </div>
             </div>

        

        <!-- Copyright -->
                    <div class="ft_copy">
                Copyright 2020 - Spreaker Inc. a <a class="ft_copy_link" target="_blank" title="Voxnest Website" rel="noopener" href="https://www.voxnest.com">Voxnest</a> Company - <a class="ft_copy_link" title="Be Heard" onclick="SP.Ajax.onClick(this, arguments);" ontouchstart="SP.Ajax.onTouchStart(this, arguments);" href="https://www.spreaker.com:443/create-a-podcast">Create a podcast</a> - New York, NY
            </div>
        
    </div>
</div>


<!-- Player -->
<div id="pl_player"></div>
<!-- Help -->
    <a id="ly_help_container" rel="noopener" target="_blank" href="https://help.spreaker.com"><span id="ly_help_text">Help</span></a>

<!-- Tracking on body -->

<div id="fb-root"></div>
<script>

    window.fbAsyncLoaded   = false;
    window.fbAsyncPending  = [];
    window.fbAsyncOnLoaded = function(callback) {
        if (window.fbAsyncLoaded) {
            callback();
        } else {
            window.fbAsyncPending.push(callback);
        }
    };

    // Register an event handler for Facebook init
    window.fbAsyncInit = function() {
        FB.init({
            version:    \'v8.0\',
            appId:      "215002133707",
            cookie:     true,
            status:     false,
            xfbml:      false
        });

        // Update state
        window.fbAsyncLoaded = true;

        // Execute pending calls
        for (var i = 0; i < window.fbAsyncPending.length; i++) {
            window.fbAsyncPending[i]();
        }

        window.fbAsyncPending = [];
    };

    // Trick: monitor the "beforeload" event to check if someone else default
    // prevented the loading of the facebook library
    window.fbLoadPrevented = false;

    function _checkFbPrevent(event) {
        if (event.url && event.url.match(\'facebook\')) {
            document.removeEventListener("beforeload", _checkFbPrevent);
            window.fbLoadPrevented = event.defaultPrevented;
        }
    }

    if (document.addEventListener) {
        document.addEventListener("beforeload", _checkFbPrevent, true);
    }

    // Load Facebook library
    (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, \'script\', \'facebook-jssdk\'));

</script>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PMD8LDV"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->


<script type="text/javascript">
    SP.Config.setModuleConfig(\'flash_message\', {
        enabled: false,
        message: {"name":"cookies_policy","can_close":true,"message":"Spreaker uses cookies. By using our services, you\\u0027re agreeing to our \\u003Cb\\u003E\\u003Ca onclick=\\u0022SP.Ajax.onClick(this, arguments);\\u0022 ontouchstart=\\u0022SP.Ajax.onTouchStart(this, arguments);\\u0022 href=\\u0022https:\\/\\/www.spreaker.com\\/cookies\\u0022\\u003ECookies Policy\\u003C\\/a\\u003E\\u003C\\/b\\u003E.\\u003Ca href=\\u0022#\\u0022 onclick=\\u0022SP.Core.notify(\\u0027flash_message.close\\u0027,{name:\\u0027cookies_policy\\u0027}); return false;\\u0022 class=\\u0022btnn btnn_small\\u0022\\u003EGot it\\u003C\\/a\\u003E","theme":"BLUE"}    });

    SP.Config.setModuleConfig(\'notifications\', {
        notifications: []    });

</script>




<!-- Preload templates -->


<script type="text/javascript">
Ext.onReady(function() {

    // Start javascript core
    SP.Core.init(SP.Config);
    SP.Core.start(["page_header","page_header_search","compatibility","ajax","auth","embed","pusher","follow","like","ban","culture","flash_message","facebook_invite","facebook_share","notifications","player_ui","player_buttons","mobile_ios","performance_tracking"]);

});
</script>

<!-- Facebook Pixel tracking -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version=\'2.0\';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,\'script\',\'https://connect.facebook.net/en_US/fbevents.js\');
fbq(\'init\', 618731118326781);
fbq(\'track\', \'PageView\');</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=618731118326781&ev=PageView&noscript=1"
/></noscript>


</body>
</html>
'
];
