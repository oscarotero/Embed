<?php
declare(strict_types = 1);

return [
    'headers' => [
        'date' => [
            'Sun, 04 Apr 2021 15:27:31 GMT'
        ],
        'content-type' => [
            'text/html; charset=UTF-8'
        ],
        'set-cookie' => [
            '__cfduid=d8045b98da5c45be74386a5667862ef291617550051; expires=Tue, 04-May-21 15:27:31 GMT; path=/; domain=.pastebin.com; HttpOnly; SameSite=Lax; Secure',
            '_csrf-frontend=d13649ab2c2ffd1430465d6aaef0ee821a32d838236fe370e2f0f18627d1279ca%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22yCmfgRTblRcsY25RaI2BFt7ZNqeszDex%22%3B%7D; path=/; HttpOnly'
        ],
        'x-frame-options' => [
            'DENY'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'x-xss-protection' => [
            '1;mode=block'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'cf-cache-status' => [
            'DYNAMIC'
        ],
        'cf-request-id' => [
            '093f181fc900001131622b0000000001'
        ],
        'expect-ct' => [
            'max-age=604800, report-uri="https://report-uri.cloudflare.com/cdn-cgi/beacon/expect-ct"'
        ],
        'server' => [
            'cloudflare'
        ],
        'cf-ray' => [
            '63ab8fac79e41131-MAD'
        ],
        'Content-Location' => [
            'https://pastebin.com/d4biUtRm'
        ],
        'X-Request-Time' => [
            '0.713 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '<!DOCTYPE html>
<html lang="en">
<head>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-58643-34"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag(\'js\', new Date());
      gtag(\'config\', "UA-58643-34");
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Pushing new git submodule to Heroku - Pastebin.com</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta name="description" content="Pastebin.com is the number one paste tool since 2002. Pastebin is a website where you can store text online for a set period of time." />
    <meta property="og:description" content="Pastebin.com is the number one paste tool since 2002. Pastebin is a website where you can store text online for a set period of time." />
            <meta property="fb:app_id" content="231493360234820" />
    <meta property="og:title" content="Pushing new git submodule to Heroku - Pastebin.com" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://pastebin.com/d4biUtRm" />
    <meta property="og:image" content="https://pastebin.com/i/facebook.png" />
    <meta property="og:site_name" content="Pastebin" />
    <meta name="google-site-verification" content="jkUAIOE8owUXu8UXIhRLB9oHJsWBfOgJbZzncqHoF4A" />
    <link rel="canonical" href="https://pastebin.com/d4biUtRm" />
    <meta name="viewport" content="width=device-width, initial-scale=0.75, maximum-scale=1.0, user-scalable=yes">
        <meta name="csrf-param" content="_csrf-frontend">
<meta name="csrf-token" content="utGgCjzugce138vW7aqpfcQqcPJpjAMbqv2lU6F956LDks1sW7zVpdmNqKW0mJwvpWNCsC_4NEHkjMAg2zmC2g==">

<link href="/assets/c80611c4/css/bootstrap.min.css" rel="stylesheet">        
<link href="/themes/pastebin/css/vendors.bundle.css?92579aa911bacc5e7d3e" rel="stylesheet">
<link href="/themes/pastebin/css/app.bundle.css?92579aa911bacc5e7d3e" rel="stylesheet">
    
<!-- 0-MzCZRcex -->
<script type="text/javascript" src="//services.vlitag.com/adv1/?q=adf050ece17b957604b4bbfc1829059f" defer="" async=""></script><script> var vitag = vitag || {};</script>
<!-- End Valueimpression Head Script -->
</head>
<body class="night-auto " data-pr="MzCZRcex" data-pa="" data-sar="1" data-abd="1">



<div class="wrap">

        
        
<div class="header">
    <div class="container">
        <div class="header__container">

                        <div class="header__left">
                <a class="header__logo" href="/">
                    Pastebin                </a>

                <div class="header__links h_1024">
                    
                    <a href="/doc_api">API</a>
                    <a href="/tools">tools</a>
                    <a href="/faq">faq</a>
                                    </div>

                
                <a class="header__btn" href="/">
                    paste                </a>
            </div>

                        <div class="header__right">

                                    <div class="header_sign">
                        <a href="/login" class="btn-sign sign-in">Login</a>
                        <a href="/signup" class="btn-sign sign-up">Sign up</a>
                    </div>
                
            </div>

        </div>
    </div>

</div>
        

    <div class="container">
        <div class="content">

                        
<!-- 0-MzCZRcex -->
<div style="padding-bottom:10px;">
<div class="adsbyvli" data-ad-slot="vi_1282550010"></div><script>(vitag.Init = window.vitag.Init || []).push(function(){viAPItag.display("vi_1282550010")})</script>
</div>

                                    
            
            
<link href="/themes/pastebin/css/geshi/light/bash.css?694707f98000ed24d865" rel="stylesheet">

<div class="post-view">

    
    <div class="details">
                    <div class="share h_800">
                <div data-url="https://pastebin.com/d4biUtRm" class="share-btn facebook js-facebook-share" title="Share on Facebook!"><span>SHARE</span></div>
                <div data-url="https://pastebin.com/d4biUtRm" class="share-btn twitter js-twitter-share" title="Share on Twitter!"><span>TWEET</span></div>
            </div>
                <div class="user-icon">
                            <img src="/cache/img/6/1/12/300390.jpg" alt="wecsam">                    </div>
        <div class="info-bar">
            <div class="info-top">

                
                
                <h1>Pushing new git submodule to Heroku</h1>
            </div>
            <div class="info-bottom">

                                    <div class="username">
                                                    <a href="/u/wecsam">wecsam</a>
                                            </div>

                    
                                             <a href="/message/compose?to=wecsam" class="message" title="Send a private message to: wecsam"></a>
                                    
                <div class="date">
                    <span title="Friday 5th of July 2013 01:57:35 AM CDT">Jul 5th, 2013</span>

                                    </div>

                <div class="visits" title="Unique visits to this paste">
                    183                </div>

                <div class="expire" title="When this paste gets automatically deleted">
                    Never                </div>
            </div>
        </div>
    </div>

                        <div class="page">
                <div class="content__text -no-padding">
                    <div class="notice -post-view">
                        <b>Not a member of Pastebin yet?</b>
                        <a href="/signup"><b><u>Sign Up</u></b></a>,
                        it unlocks many cool features!                    </div>
                </div>
            </div>
        
    
    <div class="highlighted-code">
        <div class="top-buttons">
            <div class="left">
                <a href="/archive/bash" class="btn -small h_800">Bash</a> 1.36 KB            </div>

            <div class="right">
                                    <a href="/raw/d4biUtRm" class="btn -small">raw</a>
                    <a href="/dl/d4biUtRm" class="btn -small">download</a>
                    <a href="/clone/d4biUtRm" class="btn -small h_800">clone</a>
                    <a href="/embed/d4biUtRm" class="btn -small h_800">embed</a>
                    <a href="/print/d4biUtRm" class="btn -small h_800">print</a>
                
                                    <a href="/report/d4biUtRm" class="btn -small">report</a>
                
                
                            </div>
        </div>
        <div class="source" style=" ">
            <ol class="bash"><li class="li1"><div class="de1">$ <span class="kw2">git push</span> heroku</div></li>
<li class="li1"><div class="de1">Counting objects: <span class="nu0">32</span>, done.</div></li>
<li class="li1"><div class="de1">Delta compression using up to <span class="nu0">2</span> threads.</div></li>
<li class="li1"><div class="de1">Compressing objects: <span class="nu0">100</span><span class="sy0">%</span> <span class="br0">&#40;</span><span class="nu0">21</span><span class="sy0">/</span><span class="nu0">21</span><span class="br0">&#41;</span>, done.</div></li>
<li class="li1"><div class="de1">Writing objects: <span class="nu0">100</span><span class="sy0">%</span> <span class="br0">&#40;</span><span class="nu0">26</span><span class="sy0">/</span><span class="nu0">26</span><span class="br0">&#41;</span>, <span class="nu0">25.15</span> KiB, done.</div></li>
<li class="li1"><div class="de1">Total <span class="nu0">26</span> <span class="br0">&#40;</span>delta <span class="nu0">7</span><span class="br0">&#41;</span>, reused <span class="nu0">0</span> <span class="br0">&#40;</span>delta <span class="nu0">0</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">-----<span class="sy0">&gt;</span> Git submodules detected, installing</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp;Submodule <span class="st_h">\'lib/Gettext\'</span> <span class="br0">&#40;</span>https:<span class="sy0">//</span>github.com<span class="sy0">/</span>oscarotero<span class="sy0">/</span>Gettext<span class="br0">&#41;</span> registered <span class="kw1">for</span> path <span class="st_h">\'lib/Gettext\'</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp;Submodule <span class="st_h">\'sdk\'</span> <span class="br0">&#40;</span>https:<span class="sy0">//</span>github.com<span class="sy0">/</span>facebook<span class="sy0">/</span>facebook-php-sdk.git<span class="br0">&#41;</span> registered <span class="kw1">for</span> path <span class="st_h">\'sdk\'</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp;warning: templates not found <span class="sy0">/</span>app<span class="sy0">/</span>vendor<span class="sy0">/</span>share<span class="sy0">/</span>git-core<span class="sy0">/</span>templates</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp;Initialized empty Git repository <span class="kw1">in</span> <span class="sy0">/</span>tmp<span class="sy0">/</span>build_3qsptm4y0jv8u<span class="sy0">/</span>lib<span class="sy0">/</span>Gettext<span class="sy0">/</span>.git<span class="sy0">/</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp;Submodule path <span class="st_h">\'lib/Gettext\'</span>: checked out <span class="st_h">\'6dada5d2293633509d01325dbd069bf8b38b7d3b\'</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp;warning: templates not found <span class="sy0">/</span>app<span class="sy0">/</span>vendor<span class="sy0">/</span>share<span class="sy0">/</span>git-core<span class="sy0">/</span>templates</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp;Initialized empty Git repository <span class="kw1">in</span> <span class="sy0">/</span>tmp<span class="sy0">/</span>build_3qsptm4y0jv8u<span class="sy0">/</span>sdk<span class="sy0">/</span>.git<span class="sy0">/</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp;Submodule path <span class="st_h">\'sdk\'</span>: checked out <span class="st_h">\'98f2be163c96a51166354e467b95dd38aa4b0a19\'</span></div></li>
<li class="li1"><div class="de1">-----<span class="sy0">&gt;</span> PHP app detected</div></li>
<li class="li1"><div class="de1">-----<span class="sy0">&gt;</span> Bundling Apache version 2.2.22</div></li>
<li class="li1"><div class="de1">-----<span class="sy0">&gt;</span> Bundling PHP version 5.3.10</div></li>
<li class="li1"><div class="de1">-----<span class="sy0">&gt;</span> Discovering process types</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp;Procfile declares types -<span class="sy0">&gt;</span> <span class="br0">&#40;</span>none<span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp;Default types <span class="kw1">for</span> PHP &nbsp; -<span class="sy0">&gt;</span> web</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">-----<span class="sy0">&gt;</span> Compiled slug size: 9.7MB</div></li>
<li class="li1"><div class="de1">-----<span class="sy0">&gt;</span> Launching... <span class="kw1">done</span>, v7</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp;http:<span class="sy0">//</span>project-drillwriter.herokuapp.com deployed to Heroku</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li1"><div class="de1">To <span class="kw2">git</span><span class="sy0">@</span>heroku.com:project-drillwriter.git</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp;e734d16..f3c4a09 &nbsp;master -<span class="sy0">&gt;</span> master</div></li>
</ol>        </div>
    </div>

    
                
<!-- 0-MzCZRcex -->
<div style="padding-bottom:10px;">
<div class="adsbyvli" data-ad-slot="vi_1282550010"></div><script>(vitag.Init = window.vitag.Init || []).push(function(){viAPItag.display("vi_1282550010")})</script>
</div>

        <div class="content__title -no-border">
            RAW Paste Data        </div>

        <textarea class="textarea">$ git push heroku
Counting objects: 32, done.
Delta compression using up to 2 threads.
Compressing objects: 100% (21/21), done.
Writing objects: 100% (26/26), 25.15 KiB, done.
Total 26 (delta 7), reused 0 (delta 0)

-----&gt; Git submodules detected, installing
       Submodule &#039;lib/Gettext&#039; (https://github.com/oscarotero/Gettext) registered for path &#039;lib/Gettext&#039;
       Submodule &#039;sdk&#039; (https://github.com/facebook/facebook-php-sdk.git) registered for path &#039;sdk&#039;
       warning: templates not found /app/vendor/share/git-core/templates
       Initialized empty Git repository in /tmp/build_3qsptm4y0jv8u/lib/Gettext/.git/
       Submodule path &#039;lib/Gettext&#039;: checked out &#039;6dada5d2293633509d01325dbd069bf8b38b7d3b&#039;
       warning: templates not found /app/vendor/share/git-core/templates
       Initialized empty Git repository in /tmp/build_3qsptm4y0jv8u/sdk/.git/
       Submodule path &#039;sdk&#039;: checked out &#039;98f2be163c96a51166354e467b95dd38aa4b0a19&#039;
-----&gt; PHP app detected
-----&gt; Bundling Apache version 2.2.22
-----&gt; Bundling PHP version 5.3.10
-----&gt; Discovering process types
       Procfile declares types -&gt; (none)
       Default types for PHP   -&gt; web

-----&gt; Compiled slug size: 9.7MB
-----&gt; Launching... done, v7
       http://project-drillwriter.herokuapp.com deployed to Heroku

To git@heroku.com:project-drillwriter.git
   e734d16..f3c4a09  master -&gt; master</textarea>
    
        
</div>            <div style="clear: both;"></div>

                                </div>

        <div class="sidebar h_1024">
            



                
    <div class="sidebar__title">
        <a href="/archive">Public Pastes</a>
    </div>
    <ul class="sidebar__menu">

                    <li>
                <a href="/895ebNz5">TTGO IMU Starfield...</a>
                <div class="details">
                                            Arduino |
                    
                    43 sec ago                </div>
            </li>
                    <li>
                <a href="/gviRmZLt">RJ322108 むすんで、ひらいて...</a>
                <div class="details">
                                            C |
                    
                    3 min ago                </div>
            </li>
                    <li>
                <a href="/fmgZph8E">Untitled</a>
                <div class="details">
                                            C# |
                    
                    8 min ago                </div>
            </li>
                    <li>
                <a href="/iNXtPxxp">RJ322096 おカタい委員長、実...</a>
                <div class="details">
                                            C |
                    
                    11 min ago                </div>
            </li>
                    <li>
                <a href="/mCHSS14r">RJ322083 ふたなり彼女 ひみ...</a>
                <div class="details">
                                            C |
                    
                    19 min ago                </div>
            </li>
                    <li>
                <a href="/WS5iCyzr">autoscan config</a>
                <div class="details">
                                            YAML |
                    
                    20 min ago                </div>
            </li>
                    <li>
                <a href="/kxz3b9xX">summer</a>
                <div class="details">
                                            C# |
                    
                    26 min ago                </div>
            </li>
                    <li>
                <a href="/e8bXAeXc">RJ322079 あらぶる～SEX総...</a>
                <div class="details">
                                            C |
                    
                    27 min ago                </div>
            </li>
        
    </ul>
            



    <div class="sidebar__sticky">
                
<!-- 0-MzCZRcex -->
<div style="padding-top:10px;">
<div class="adsbyvli" data-ad-slot="vi_1282550008"></div><script>(vitag.Init = window.vitag.Init || []).push(function(){viAPItag.display("vi_1282550008")})</script>
</div>
    </div>
        </div>
    </div>
</div>


    
<div class="top-footer">
    <a class="icon-link -size-24-24 -chrome" href="/tools#chrome" title="Google Chrome Extension"></a>
    <a class="icon-link -size-24-24 -firefox" href="/tools#firefox" title="Firefox Extension"></a>
    <a class="icon-link -size-24-24 -iphone" href="/tools#iphone" title="iPhone/iPad Application"></a>
    <a class="icon-link -size-24-24 -windows" href="/tools#windows" title="Windows Desktop Application"></a>
    <a class="icon-link -size-24-24 -android" href="/tools#android" title="Android Application"></a>
    <a class="icon-link -size-24-24 -macos" href="/tools#macos" title="MacOS X Widget"></a>
    <a class="icon-link -size-24-24 -opera" href="/tools#opera" title="Opera Extension"></a>
    <a class="icon-link -size-24-24 -unix" href="/tools#pastebincl" title="Linux Application"></a>
</div>

<footer class="footer">
    <div class="container">
        <div class="footer__container">

            <div class="footer__left">
                <a href="/">create new paste</a> <span class="footer__devider">&nbsp;/&nbsp;</span>
                                <a href="/languages">syntax languages</a> <span class="footer__devider">&nbsp;/&nbsp;</span>
                <a href="/archive">archive</a> <span class="footer__devider">&nbsp;/&nbsp;</span>
                <a href="/faq">faq</a> <span class="footer__devider">&nbsp;/&nbsp;</span>
                <a href="/tools">tools</a> <span class="footer__devider">&nbsp;/&nbsp;</span>
                <a href="/night_mode">night mode</a> <span class="footer__devider">&nbsp;/&nbsp;</span>
                <a href="/doc_api">api</a> <span class="footer__devider">&nbsp;/&nbsp;</span>
                <a href="/doc_scraping_api">scraping api</a>
                                    &nbsp;<span class="footer__devider">&nbsp;/&nbsp;</span>
                    <a href="/pro" class="pro">pro</a>
                
                <br>
                <a href="/doc_privacy_statement">privacy statement</a> <span class="footer__devider">&nbsp;/&nbsp;</span>
                <a href="/doc_cookies_policy">cookies policy</a> <span class="footer__devider">&nbsp;/&nbsp;</span>
                <a href="/doc_terms_of_service">terms of service</a><sup style="color:#999">updated</sup> <span class="footer__devider">&nbsp;/&nbsp;</span>
                <a href="/doc_security_disclosure">security disclosure</a> <span class="footer__devider">&nbsp;/&nbsp;</span>
                <a href="/dmca">dmca</a> <span class="footer__devider">&nbsp;/&nbsp;</span>
                <a href="/report-abuse">report abuse</a> <span class="footer__devider">&nbsp;/&nbsp;</span>
                <a href="/contact">contact</a>

                <br>

                                
                <br>

                
<span class="footer__bottom h_800">
    By using Pastebin.com you agree to our <a href="/doc_cookies_policy">cookies policy</a> to enhance your experience.
    <br>
    Site design &amp; logo &copy; 2021 Pastebin</span>
            </div>

            <div class="footer__right h_1024">
                                    <a class="icon-link -size-40-40 -facebook-circle" href="https://facebook.com/pastebin" rel="nofollow" title="Like us on Facebook" target="_blank"></a>
                    <a class="icon-link -size-40-40 -twitter-circle" href="https://twitter.com/pastebin" rel="nofollow" title="Follow us on Twitter" target="_blank"></a>
                            </div>

        </div>
    </div>
</footer>
    


    
<div class="popup-container">

                <div class="popup-box -cookies" data-name="l2c_1">
            We use cookies for various purposes including analytics. By continuing to use Pastebin, you agree to our use of cookies as described in the <a href="/doc_cookies_policy">Cookies Policy</a>.            &nbsp;<span class="cookie-button js-close-cookies">OK, I Understand</span>
        </div>
    
                <div class="popup-box -pro" data-name="l2c_2_pg">
            <div class="pro-promo-img">
                <a href="/signup">
                    <img src="/themes/pastebin/img/hello.png" alt=""/>
                </a>
            </div>
            <div class="pro-promo-text">
                Not a member of Pastebin yet?<br/>
                <a href="/signup"><b>Sign Up</b></a>, it unlocks many cool features!            </div>
            <div class="close js-close-pro-guest" title="Close Me">&nbsp;</div>
        </div>
    
    
    
</div>
    

<span class="cd-top"></span>

<script src="/assets/9ce1885/jquery.min.js"></script>
<script src="/assets/f04f76b8/yii.js"></script>
<script>
    const POST_EXPIRATION_NEVER = \'N\';
    const POST_EXPIRATION_BURN = \'B\';
    const POST_STATUS_PUBLIC = \'0\';
    const POST_STATUS_UNLISTED = \'1\';
</script>
<script src="/themes/pastebin/js/vendors.bundle.js?92579aa911bacc5e7d3e"></script>
<script src="/themes/pastebin/js/app.bundle.js?92579aa911bacc5e7d3e"></script>


<!-- 0-MzCZRcex -->
<style> #__vliadb83{ display: none; position: fixed; background: rgb(221, 221, 221); z-index: 9999999; opacity: 1; visibility: visible; top: 100px; right: 0px; left: 0px; max-width: 640px; margin-right: auto; margin-left: auto; box-shadow: rgba(0, 0, 0, 0.25) 0px 3px 5px 2px; font-family: Arial, Helvetica, sans-serif; } #__vliadb83 .__vliadb83-content{ padding: 30px 30px 15px; } #__vliadb83 #__vliadb83-cls{ display: inline-block; position: absolute; top: 15px; right: 15px; width: 30px; height: 30px; color: #bbb; font-size: 32px; font-weight: 700; line-height: 30px; text-align: center; cursor: pointer; -webkit-transition: 0.3s; transition: 0.3s; } #__vliadb83 #__vliadb83-cls:hover{color: #5f5e5e;} #__vliadb83-bg{ display: none; position: fixed; z-index: 999999; background: rgba(0, 0, 0, 0.8); top: 0px; left: 0px; width: 100%; height: 100%;} </style> <div id="__vliadb83"> <div class="__vliadb83-content"> <h1 style="margin-bottom: 15px; padding: 0 30px; color: #252b37; font-size: 28px; line-height: 1.25; text-align: center;">Adblocker detected! Please consider disabling it...</h1> <p style="text-align: left;"> We\'ve detected <b>AdBlock Plus</b> or some other <b>adblocking</b> software preventing Pastebin.com from fully loading. </p> <p style="text-align: left;"> We don\'t have any obnoxious sound, or popup ads, we actively block these annoying types of ads!</p> <p style="text-align: left;"> <strong>Please add <a href="https://pastebin.com" target="_blank" rel="noopener">Pastebin.com</a> to your ad blocker whitelist or disable your adblocking software.</strong> </p> </div> <a id="__vliadb83-cls">×</a> </div> <div id="__vliadb83-bg"></div> <script src="//cdn.jsdelivr.net/gh/vli-platform/adb-analytics@77bebb/v1.0.min.js"></script> <script> (function () { (window.adblockDetector = window.adblockDetector || []).push(function () { window.adbDetector.init({ id: \'adf050ece17b957604b4bbfc1829059f\', debug: true, cookieExpire: 0, found: function () { window.adbDetector.alert({ hiddenCloseButton: false, clickBackgroundToClose: false }); } }); }) }()); </script>
</body>
</html>
'
];
