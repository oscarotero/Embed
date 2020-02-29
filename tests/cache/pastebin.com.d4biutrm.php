<?php
declare(strict_types = 1);

return [
    'headers' => [
        'date' => [
            'Sun, 23 Feb 2020 00:01:22 GMT'
        ],
        'content-type' => [
            'text/html; charset=utf-8'
        ],
        'set-cookie' => [
            '__cfduid=d15a9b99db6777e8598966c48729a43fa1582416082; expires=Tue, 24-Mar-20 00:01:22 GMT; path=/; domain=.pastebin.com; HttpOnly; SameSite=Lax'
        ],
        'x-frame-options' => [
            'SAMEORIGIN'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'vary' => [
            'Accept-Encoding'
        ],
        'x-xss-protection' => [
            '1; mode=block'
        ],
        'cf-cache-status' => [
            'DYNAMIC'
        ],
        'expect-ct' => [
            'max-age=604800, report-uri="https://report-uri.cloudflare.com/cdn-cgi/beacon/expect-ct"'
        ],
        'server' => [
            'cloudflare'
        ],
        'cf-ray' => [
            '5694ecc1a8b5ff2c-MAD'
        ],
        'Content-Location' => [
            'https://pastebin.com/d4biUtRm'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '<!DOCTYPE HTML>
	<head>
    	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-58643-34"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(\'js\', new Date());

  gtag(\'config\', \'UA-58643-34\');
</script>
    

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>[Bash] Pushing new git submodule to Heroku - Pastebin.com</title>
		<link rel="shortcut icon" href="/favicon.ico" />
		<script src="/js/jquery.min.js"></script>
		<script src="/js/pastebin.min.v3.js"></script>
            
            
		<link href="/i/pastebin.min.v9.css?1575389335" rel="stylesheet" type="text/css" />
		<!--[if lt IE 10]>
			<link href="/i/pastebin.ie8.css" rel="stylesheet" type="text/css" />
		<![endif]-->


			<link href="/cache/css_lang/bash.css" rel="stylesheet" type="text/css" /> 
		<style>body{-webkit-text-size-adjust:none;}</style>
				<meta property="fb:app_id" content="231493360234820" />
		<meta property="og:title" content="[Bash] Pushing new git submodule to Heroku - Pastebin.com" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="https://pastebin.com/d4biUtRm" />
		<meta property="og:image" content="https://pastebin.com/i/facebook.png" />
		<meta property="og:site_name" content="Pastebin" />
		<meta name="google-site-verification" content="jkUAIOE8owUXu8UXIhRLB9oHJsWBfOgJbZzncqHoF4A" />
		<link rel="canonical" href="https://pastebin.com/d4biUtRm" />
				<meta name="viewport" content="width=device-width, initial-scale=0.75, maximum-scale=1.0, user-scalable=yes">
		<script type="text/javascript">
			if (top != self)
				top.location.href = location.href;
		</script>
        <!--script for Valueimpression  -->
        <script type="text/javascript" src="//services.vlitag.com/adv1/?q=3e5fa0617bf760cc31e1ac77c303927c" defer="" async=""></script><script> var vitag = vitag || {};</script>
	</head>
	<body>
	<div id="main_frame">
		<div id="jq-dropdown-1" class="jq-dropdown jq-dropdown-anchor-right jq-dropdown-scroll">
			<ul class="jq-dropdown-menu">
				
				<li class="lih_640">
					<form class="search_form_li" name="search_form_li" method="get" action="/search" id="cse-search-box-li">
						<input class="search_input_li" type="text" name="q" size="5" value="" placeholder="search..." />
					</form>

				</li>
				<li class="lih_div"></li>
				<li onclick="location.href=\'/signup\'" class="dd_su">Sign Up</li>
				<li onclick="location.href=\'/login\'" class="dd_lo">Login</li>
				<li class="lih_div"></li>
				<li onclick="location.href=\'/api\'" class="lih_640">API</li>
				<li onclick="location.href=\'/faq\'" class="lih_640">FAQ</li>
				<li onclick="location.href=\'/tools\'" class="lih_640">Tools</li>
				<li onclick="location.href=\'/archive\'" class="lih_640">Archive</li>			</ul>
		</div>
		<div id="header">
			<div id="header_wrap">
				<div id="header_top">
					<div id="header_logo" onclick="location.href=\'/\'">PASTEBIN</div>
                    <div id="header_links">
                                                    <a href="/pro" class="mmh">GO <img src="/i/t.gif" alt="" class="header_pro_btn"></a>
                        
                        <a href="/api" class="mmh">API</a>
                        <a href="/tools" class="mmh">TOOLS</a>
                        <a href="/faq" class="mmh">FAQ</a>
                        <a href="https://deals.pastebin.com" target="_blank" class="mmh">DEALS</a>
                    </div>
                    <div id="header_search">
                        <form class="search_form" name="search_form" method="get" action="/search" id="cse-search-box">
                            <input class="search_input" type="text" name="q" size="5" value="" placeholder="Search..." />
                        </form>
                    </div>
                    <div id="header_new_paste" class="new_paste_button" onclick="location.href=\'/\'">paste</div>
                    
			<div class="header_sign">
				<a href="/login" class="btn-sign sign-in">SIGN IN</a>
				<a href="/signup" class="btn-sign sign-up">SIGN UP</a>
			</div>				</div>
			</div>
		</div>
		<div id="super_frame">
			<div id="monster_frame">
				<div id="content_frame">
					<div id="content_right">						

	<div class="content_right_menu">
									<div class="content_right_title"><a href="/archive">Public Pastes</a></div>
									<div id="menu_2">
										<ul class="right_menu"><li><a href="/xYSLtPwr">Untitled</a><span>9 sec ago</span></li><li><a href="/rKERKd58">Untitled</a><span>18 sec ago</span></li><li><a href="/i0nSihkf">WHAT</a><span>JavaScript | 26 sec ago</span></li><li><a href="/F6ADj6Yj">NETANALYZER.2020-0...</a><span>JSON | 30 sec ago</span></li><li><a href="/hLMerHYT">OpenEuCalendar</a><span>44 sec ago</span></li><li><a href="/Er4uBMDm">Untitled</a><span>48 sec ago</span></li><li><a href="/PcqkmDFq">Untitled</a><span>1 min ago</span></li><li><a href="/LM42tgiS">Untitled</a><span>1 min ago</span></li></ul></div></div>	<div id="abrpm2"></div>
	<div style="padding: 0; width:160px;margin: 10px 0;clear:left;">
<ins class="675bfda0" data-key="29d5bc270b3c2684fd3d158f6ceb857c"></ins>
<script async defer src="https://aj2073.online/9ed1ba93.js"></script>
</div>
<div id="steadfast" title="Pastebin is proudly hosted by Steadfast.net" onclick="location.href=\'http://steadfast.net/?utm_source=pastebin.com&amp;utm_medium=referral&amp;utm_content=hosting_by_banner&amp;utm_campaign=referral_20140118_x_x_pastebin_partner&amp;source=referral_20140118_x_x_pastebin_partner\'"></div>
	</div>
	<div id="content_left"><div id="ie_msg"></div>
					
		
	<div class="paste_box_frame">
		<div class="tweet h_800">
			<div onclick="facebookpopup(\'/d4biUtRm\'); return false;" id="b_facebook2" title="Share on Facebook!"><span id="b_facebook">SHARE</span></div>
			<div onclick="twitpopup(\'/d4biUtRm\'); return false;" id="b_twitter2" title="Share on Twitter!"><span id="b_twitter">TWEET</span></div>
		</div>
		<div class="paste_box_icon">
			<a href="/u/wecsam"><img src="//pastebin.com/cache/img/6/1/12/300390.jpg" class="i_gb" alt="" /></a>
		</div>
		<div class="paste_box_info">
			<div class="paste_box_line1" title="Pushing new git submodule to Heroku"><h1>Pushing new git submodule to Heroku</h1></div>
			<div class="paste_box_line2">
				<img src="/i/t.gif" class="img_line t_us" alt="" style="margin-left:0"> <a href="/u/wecsam">wecsam</a>  <a href="/message_compose?to=wecsam"><img src="/i/t.gif" class="i_pm" title="Send a private message to: wecsam" alt="" /></a>
				<img src="/i/t.gif" class="img_line t_da" alt=""> <span title="Friday 5th of July 2013 01:57:35 AM CDT">Jul 5th, 2013</span>
				<img src="/i/t.gif" class="img_line t_vi" alt="" title="Unique visits to this paste"> 108
				<img src="/i/t.gif" class="img_line t_ex" alt="" title="When this paste gets automatically deleted"> Never
			</div>
		</div>
	</div>
	<div class="banner_728">
<ins class="675bfda0" data-key="26941916746eb874a2159e7dc0a54739"></ins>
<script async defer src="https://aj2073.online/9ed1ba93.js"></script>
</div>
			<div class="content_text no_padding">
				<div id="notice" style="margin: 0 0 10px 0">
					<b>Not a member of Pastebin yet?</b> <a href="/signup"><b><u>Sign Up</u></b></a>, it unlocks many cool features!
				</div>
			</div>
	<div id="code_frame2">
		<div id="code_frame">
			<div id="code_buttons">
				<span class="go_right">
					<a href="/raw/d4biUtRm" class="buttonsm">raw</a><a href="/dl/d4biUtRm" class="buttonsm">download</a><a href="/index/d4biUtRm" class="buttonsm buttonhide">clone</a><a href="/embed/d4biUtRm" class="buttonsm buttonhide">embed</a><a href="/report/d4biUtRm" class="buttonsm">report</a><a href="/print/d4biUtRm" class="buttonsm buttonhide">print</a>
				</span>
				<span class="h_640"><a href="/archive/bash" class="buttonsm" style="margin:0">Bash</a></span> 1.36 KB
			</div>
			<div id="selectable">
				<div class="bash"><ol><li class="li1"><div class="de1">$ <span class="kw2">git push</span> heroku</div></li>
<li class="li2"><div class="de2">Counting objects: <span class="nu0">32</span>, done.</div></li>
<li class="li1"><div class="de1">Delta compression using up to <span class="nu0">2</span> threads.</div></li>
<li class="li2"><div class="de2">Compressing objects: <span class="nu0">100</span><span class="sy0">%</span> <span class="br0">&#40;</span><span class="nu0">21</span><span class="sy0">/</span><span class="nu0">21</span><span class="br0">&#41;</span>, done.</div></li>
<li class="li1"><div class="de1">Writing objects: <span class="nu0">100</span><span class="sy0">%</span> <span class="br0">&#40;</span><span class="nu0">26</span><span class="sy0">/</span><span class="nu0">26</span><span class="br0">&#41;</span>, <span class="nu0">25.15</span> KiB, done.</div></li>
<li class="li2"><div class="de2">Total <span class="nu0">26</span> <span class="br0">&#40;</span>delta <span class="nu0">7</span><span class="br0">&#41;</span>, reused <span class="nu0">0</span> <span class="br0">&#40;</span>delta <span class="nu0">0</span><span class="br0">&#41;</span></div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">-----<span class="sy0">&gt;</span> Git submodules detected, installing</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp;Submodule <span class="st_h">\'lib/Gettext\'</span> <span class="br0">&#40;</span>https:<span class="sy0">//</span>github.com<span class="sy0">/</span>oscarotero<span class="sy0">/</span>Gettext<span class="br0">&#41;</span> registered <span class="kw1">for</span> path <span class="st_h">\'lib/Gettext\'</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp;Submodule <span class="st_h">\'sdk\'</span> <span class="br0">&#40;</span>https:<span class="sy0">//</span>github.com<span class="sy0">/</span>facebook<span class="sy0">/</span>facebook-php-sdk.git<span class="br0">&#41;</span> registered <span class="kw1">for</span> path <span class="st_h">\'sdk\'</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp;warning: templates not found <span class="sy0">/</span>app<span class="sy0">/</span>vendor<span class="sy0">/</span>share<span class="sy0">/</span>git-core<span class="sy0">/</span>templates</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp;Initialized empty Git repository <span class="kw1">in</span> <span class="sy0">/</span>tmp<span class="sy0">/</span>build_3qsptm4y0jv8u<span class="sy0">/</span>lib<span class="sy0">/</span>Gettext<span class="sy0">/</span>.git<span class="sy0">/</span></div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp;Submodule path <span class="st_h">\'lib/Gettext\'</span>: checked out <span class="st_h">\'6dada5d2293633509d01325dbd069bf8b38b7d3b\'</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp;warning: templates not found <span class="sy0">/</span>app<span class="sy0">/</span>vendor<span class="sy0">/</span>share<span class="sy0">/</span>git-core<span class="sy0">/</span>templates</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp;Initialized empty Git repository <span class="kw1">in</span> <span class="sy0">/</span>tmp<span class="sy0">/</span>build_3qsptm4y0jv8u<span class="sy0">/</span>sdk<span class="sy0">/</span>.git<span class="sy0">/</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp;Submodule path <span class="st_h">\'sdk\'</span>: checked out <span class="st_h">\'98f2be163c96a51166354e467b95dd38aa4b0a19\'</span></div></li>
<li class="li1"><div class="de1">-----<span class="sy0">&gt;</span> PHP app detected</div></li>
<li class="li2"><div class="de2">-----<span class="sy0">&gt;</span> Bundling Apache version 2.2.22</div></li>
<li class="li1"><div class="de1">-----<span class="sy0">&gt;</span> Bundling PHP version 5.3.10</div></li>
<li class="li2"><div class="de2">-----<span class="sy0">&gt;</span> Discovering process types</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp;Procfile declares types -<span class="sy0">&gt;</span> <span class="br0">&#40;</span>none<span class="br0">&#41;</span></div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp;Default types <span class="kw1">for</span> PHP &nbsp; -<span class="sy0">&gt;</span> web</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">-----<span class="sy0">&gt;</span> Compiled slug size: 9.7MB</div></li>
<li class="li1"><div class="de1">-----<span class="sy0">&gt;</span> Launching... <span class="kw1">done</span>, v7</div></li>
<li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp;http:<span class="sy0">//</span>project-drillwriter.herokuapp.com deployed to Heroku</div></li>
<li class="li1"><div class="de1">&nbsp;</div></li>
<li class="li2"><div class="de2">To <span class="kw2">git</span><span class="sy0">@</span>heroku.com:project-drillwriter.git</div></li>
<li class="li1"><div class="de1">&nbsp; &nbsp;e734d16..f3c4a09 &nbsp;master -<span class="sy0">&gt;</span> master</div></li>
</ol></div>
			</div>
		</div>
	</div><div class="banner_728" style="min-height:0">
<ins class="675bfda0" data-key="88faa010aecb2dd3439d1bd27584bf19"></ins>
<script async defer src="https://aj2073.online/9ed1ba93.js"></script>
</div>
	<div class="content_title no_border">RAW Paste Data<div id="bsa-footer"></div></div>
	<div class="textarea_border" style="margin-bottom:0">
		<textarea id="paste_code" class="paste_code" name="paste_code" onkeydown="return catchTab(this,event)">$ git push heroku
Counting objects: 32, done.
Delta compression using up to 2 threads.
Compressing objects: 100% (21/21), done.
Writing objects: 100% (26/26), 25.15 KiB, done.
Total 26 (delta 7), reused 0 (delta 0)

-----&gt; Git submodules detected, installing
       Submodule \'lib/Gettext\' (https://github.com/oscarotero/Gettext) registered for path \'lib/Gettext\'
       Submodule \'sdk\' (https://github.com/facebook/facebook-php-sdk.git) registered for path \'sdk\'
       warning: templates not found /app/vendor/share/git-core/templates
       Initialized empty Git repository in /tmp/build_3qsptm4y0jv8u/lib/Gettext/.git/
       Submodule path \'lib/Gettext\': checked out \'6dada5d2293633509d01325dbd069bf8b38b7d3b\'
       warning: templates not found /app/vendor/share/git-core/templates
       Initialized empty Git repository in /tmp/build_3qsptm4y0jv8u/sdk/.git/
       Submodule path \'sdk\': checked out \'98f2be163c96a51166354e467b95dd38aa4b0a19\'
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
	</div><div id="abrpm3"></div><div style="margin: 10px 0 0 0; clear:left;">
<ins class="675bfda0" data-key="02bf0377a2e2879c1fbbf23b9841aa10"></ins>
<script async defer src="https://aj2073.online/9ed1ba93.js"></script>
</div>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".close1").click(function(){return $("#float-box-1").hide(),createCookie("l2c_1",!0,90),!1});
		$(".cookie_button").click(function(){return $("#float-box-1").hide(),createCookie("l2c_1",!0,90),!1});		
		$(".close2").click(function(){return $("#float-box-2").hide(),createCookie("l2c_2",!0,14),!1});
		$(".close3").click(function(){return $("#float-box-3").hide(),createCookie("l2c_2",!0,14),!1});
		$(".close4").click(function(){return $("#float-box-4").hide(),createCookie("l2c_4",!0,7),!1});
	});	
	</script>
	<div id="float-box-frame">		
		<div id="float-box-1">
			We use cookies for various purposes including analytics. By continuing to use Pastebin, you agree to our use of cookies as described in the <a href="/doc_cookies_policy">Cookies Policy</a>. <span class="cookie_button">OK, I Understand</span>
		</div>
		<div id="float-box-3">
			<style>
				#pro_promo_text{color:#333;float:right;display:block;font-size:14px;font-weight:400;width:270px}					
				#pro_promo_img {background: #fff;width: 60px;height: 50px;float: left;}
			</style>			
			<div id="pro_promo_img"><a href="/signup"><img src="/i/hello.png" alt="" border="0" style="width:48px;height:48px;" /></a></div> 
			<div id="pro_promo_text">Not a member of Pastebin yet?<br /><a href="/signup" style="text-decoration: underline dotted"><b>Sign Up</b></a>, it unlocks many cool features!</div>
			<div class="close3" title="Close Me">&nbsp;</div>
		</div></div>						</div>
					</div>
				</div>
			</div>
			<div id="mid_footer">
				<a href="/tools#chrome" title="Google Chrome Extension"><img src="/i/t.gif" alt="" class="icon24 chrome" /></a>
				<a href="/tools#firefox" title="Firefox Extension"><img src="/i/t.gif" alt="" class="icon24 firefox" /></a>
				<a href="/tools#iphone" title="iPhone/iPad Application"><img src="/i/t.gif" alt="" class="icon24 iphone" /></a>
				<a href="/tools#windows" title="Windows Desktop Application"><img src="/i/t.gif" alt="" class="icon24 windows" /></a>
				<a href="/tools#android" title="Android Application"><img src="/i/t.gif" alt="" class="icon24 android" /></a>
				<a href="/tools#macos" title="MacOS X Widget"><img src="/i/t.gif" alt="" class="icon24 macos" /></a>
				<a href="/tools#opera" title="Opera Extension"><img src="/i/t.gif" alt="" class="icon24 opera" /></a>
				<a href="/tools#pastebincl" title="Linux Application"><img src="/i/t.gif" alt="" class="icon24 unix" /></a>
			</div> 
		</div>
		<div id="footer">
			<div id="footer_links">
				<a href="/">create new paste</a> &nbsp;/&nbsp; 
				<a href="https://deals.pastebin.com">deals</a><sup style="color:red">new!</sup> &nbsp;/&nbsp; 
				<a href="/languages">syntax languages</a> &nbsp;/&nbsp; 
				<a href="/archive">archive</a> &nbsp;/&nbsp; 
				<a href="/faq">faq</a> &nbsp;/&nbsp; 
				<a href="/tools">tools</a> &nbsp;/&nbsp; 
				<a href="/night_mode">night mode</a> &nbsp;/&nbsp; 
				<a href="/api">api</a> &nbsp;/&nbsp; 
				<a href="/doc_scraping_api">scraping api</a>		

				<br />
				<a href="/doc_privacy_statement">privacy statement</a> &nbsp;/&nbsp; 
				<a href="/doc_cookies_policy">cookies policy</a> &nbsp;/&nbsp; 
				<a href="/doc_terms_of_service">terms of service</a> &nbsp;/&nbsp; 
				<a href="/doc_security_disclosure">security disclosure</a> &nbsp;/&nbsp; 
				<a href="/dmca">dmca</a> &nbsp;/&nbsp; 
				<a href="/contact">contact</a>
				<br /><br />
				<span class="h_800">
					By using Pastebin.com you agree to our <a href="/doc_cookies_policy">cookies policy</a> to enhance your experience.
					<br />
					Site design &amp; logo &copy; 2020 Pastebin; user contributions (pastes) licensed under <a href="http://creativecommons.org/licenses/by-sa/3.0/" target="_blank" rel="nofollow">cc by-sa 3.0</a> -- <a href="https://favpng.com" title="Free Transparent PNG Images" target="_blank">FavPNG</a> --
				</span>
				<a href="http://steadfast.net/services/dedicated-servers.php?utm_source=pastebin.com&amp;utm_medium=referral&amp;utm_content=footer_link_dedicated_server_hosting_by&amp;utm_campaign=referral_20140118_x_x_pastebin_partner&amp;source=referral_20140118_x_x_pastebin_partner" rel="nofollow" target="_blank">Dedicated Server Hosting</a> by <a href="http://steadfast.net/?utm_source=pastebin.com&amp;utm_medium=referral&amp;utm_content=footer_link_steadfast&amp;utm_campaign=referral_20140118_x_x_pastebin_partner&amp;source=referral_20140118_x_x_pastebin_partner" rel="nofollow" target="_blank">Steadfast</a>
			</div>
			<div id="footer_right" class="h_1024">
			
				<a href="https://facebook.com/pastebin" rel="nofollow" title="Like us on Facebook" target="_blank"><img src="/i/t.gif" alt="" class="icon40 facebook_circle" /></a>
				<a href="https://twitter.com/pastebin" rel="nofollow" title="Follow us on Twitter" target="_blank"><img src="/i/t.gif" alt="" class="icon40 twitter_circle" /></a>
							</div>
		</div>
		<script type="text/javascript">
			function isIE(){var e=navigator.userAgent.toLowerCase();return-1!=e.indexOf("msie")?parseInt(e.split("msie")[1]):!1}if(isIE()&&isIE()<10){var div=document.getElementById("ie_msg");div.innerHTML=div.innerHTML+\'<div id="old_browser">Your browser is outdated and insecure! Pastebin does not offer support for your browser. <a href="http://outdatedbrowser.com/" target="_blank" rel="nofollow">Click here to update your browser</a>!</div>\'}
		</script>
		<div class="pub_300x250"></div><a href="#0" class="cd-top">Top</a>



	</body>
</html>'
];
