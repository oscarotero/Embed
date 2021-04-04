<?php
declare(strict_types = 1);

return [
    'headers' => [
        'server' => [
            'nginx',
            'nginx'
        ],
        'date' => [
            'Sun, 04 Apr 2021 15:20:40 GMT',
            'Sun, 04 Apr 2021 15:20:40 GMT'
        ],
        'content-type' => [
            'text/html',
            'text/html; charset=UTF-8'
        ],
        'content-length' => [
            '162'
        ],
        'connection' => [
            'keep-alive'
        ],
        'location' => [
            'https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/'
        ],
        'x-ac' => [
            '3.mad  HTTP/2 200',
            '3.mad _dca'
        ],
        'vary' => [
            'Accept-Encoding',
            'Cookie'
        ],
        'x-hacker' => [
            'If you\'re reading this, you should visit automattic.com/jobs and apply to join the fun, mention this header.'
        ],
        'host-header' => [
            'WordPress.com'
        ],
        'x-frame-options' => [
            'SAMEORIGIN'
        ],
        'link' => [
            '<https://wp.me/pllYY-5Es>; rel=shortlink'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'strict-transport-security' => [
            'max-age=31536000'
        ],
        'Content-Location' => [
            'https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/'
        ],
        'X-Request-Time' => [
            '0.500 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '<!DOCTYPE html>
<!--[if IE 6]>    <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->

<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
	new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
	\'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,\'script\',\'dataLayer\',\'GTM-P24PF4B\');</script>

	<link rel="alternate" type="application/rss+xml" title="WordPress.tv RSS Feed" href="https://wordpress.tv/feed/" />
	<link rel="alternate" type="application/rss+xml" title="WordPress.tv Blog RSS Feed" href="https://blog.wordpress.tv/feed/" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="https://wordpress.tv/xmlrpc.php" />

	<script type="text/javascript" src="https://use.typekit.com/mgi6udv.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<title>Dave Ross: Optimize Image Files Like a Pro &#8211; WordPress.tv</title>
<meta name=\'robots\' content=\'max-image-preview:large\' />

<!-- Async WordPress.com Remote Login -->
<script id="wpcom_remote_login_js">
var wpcom_remote_login_extra_auth = \'\';
function wpcom_remote_login_remove_dom_node_id( element_id ) {
	var dom_node = document.getElementById( element_id );
	if ( dom_node ) { dom_node.parentNode.removeChild( dom_node ); }
}
function wpcom_remote_login_remove_dom_node_classes( class_name ) {
	var dom_nodes = document.querySelectorAll( \'.\' + class_name );
	for ( var i = 0; i < dom_nodes.length; i++ ) {
		dom_nodes[ i ].parentNode.removeChild( dom_nodes[ i ] );
	}
}
function wpcom_remote_login_final_cleanup() {
	wpcom_remote_login_remove_dom_node_classes( "wpcom_remote_login_msg" );
	wpcom_remote_login_remove_dom_node_id( "wpcom_remote_login_key" );
	wpcom_remote_login_remove_dom_node_id( "wpcom_remote_login_validate" );
	wpcom_remote_login_remove_dom_node_id( "wpcom_remote_login_js" );
	wpcom_remote_login_remove_dom_node_id( "wpcom_request_access_iframe" );
	wpcom_remote_login_remove_dom_node_id( "wpcom_request_access_styles" );
}

// Watch for messages back from the remote login
window.addEventListener( "message", function( e ) {
	if ( e.origin === "https://r-login.wordpress.com" ) {
		var data = {};
		try {
			data = JSON.parse( e.data );
		} catch( e ) {
			wpcom_remote_login_final_cleanup();
			return;
		}

		if ( data.msg === \'LOGIN\' ) {
			// Clean up the login check iframe
			wpcom_remote_login_remove_dom_node_id( "wpcom_remote_login_key" );

			var id_regex = new RegExp( /^[0-9]+$/ );
			var token_regex = new RegExp( /^.*|.*|.*$/ );
			if (
				token_regex.test( data.token )
				&& id_regex.test( data.wpcomid )
			) {
				// We have everything we need to ask for a login
				var script = document.createElement( "script" );
				script.setAttribute( "id", "wpcom_remote_login_validate" );
				script.src = \'/remote-login.php?wpcom_remote_login=validate\'
					+ \'&wpcomid=\' + data.wpcomid
					+ \'&token=\' + encodeURIComponent( data.token )
					+ \'&host=\' + window.location.protocol
						+ \'//\' + window.location.hostname;
				document.body.appendChild( script );
			}

			return;
		}

		// Safari ITP, not logged in, so redirect
		if ( data.msg === \'LOGIN-REDIRECT\' ) {
			window.location = \'https://wordpress.com/log-in?redirect_to=\' + window.location.href;
			return;
		}

		// Safari ITP, storage access failed, remove the request
		if ( data.msg === \'LOGIN-REMOVE\' ) {
			var css_zap = \'html { -webkit-transition: margin-top 1s; transition: margin-top 1s; } /* 9001 */ html { margin-top: 0 !important; } * html body { margin-top: 0 !important; } @media screen and ( max-width: 782px ) { html { margin-top: 0 !important; } * html body { margin-top: 0 !important; } }\';
			var style_zap = document.createElement( \'style\' );
			style_zap.type = \'text/css\';
			style_zap.appendChild( document.createTextNode( css_zap ) );
			document.body.appendChild( style_zap );

			var e = document.getElementById( \'wpcom_request_access_iframe\' );
			e.parentNode.removeChild( e );

			document.cookie = \'wordpress_com_login_access=denied; path=/; max-age=31536000\';

			return;
		}

		// Safari ITP
		if ( data.msg === \'REQUEST_ACCESS\' ) {
			console.log( \'request access: safari\' );

			// Check ITP iframe enable/disable knob
			if ( wpcom_remote_login_extra_auth !== \'safari_itp_iframe\' ) {
				return;
			}

			// If we are in a "private window" there is no ITP.
			var private_window = false;
			try {
				var opendb = window.openDatabase( null, null, null, null );
			} catch( e ) {
				private_window = true;
			}

			if ( private_window ) {
				console.log( \'private window\' );
				return;
			}

			var iframe = document.createElement( \'iframe\' );
			iframe.id = \'wpcom_request_access_iframe\';
			iframe.setAttribute( \'scrolling\', \'no\' );
			iframe.setAttribute( \'sandbox\', \'allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-top-navigation-by-user-activation\' );
			iframe.src = \'https://r-login.wordpress.com/remote-login.php?wpcom_remote_login=request_access&origin=\' + encodeURIComponent( data.origin ) + \'&wpcomid=\' + encodeURIComponent( data.wpcomid );

			var css = \'html { -webkit-transition: margin-top 1s; transition: margin-top 1s; } /* 9001 */ html { margin-top: 46px !important; } * html body { margin-top: 46px !important; } @media screen and ( max-width: 660px ) { html { margin-top: 71px !important; } * html body { margin-top: 71px !important; } #wpcom_request_access_iframe { display: block; height: 71px !important; } } #wpcom_request_access_iframe { border: 0px; height: 46px; position: fixed; top: 0; left: 0; width: 100%; min-width: 100%; z-index: 99999; background: #23282d; } \';

			var style = document.createElement( \'style\' );
			style.type = \'text/css\';
			style.id = \'wpcom_request_access_styles\';
			style.appendChild( document.createTextNode( css ) );
			document.body.appendChild( style );

			document.body.appendChild( iframe );
		}

		if ( data.msg === \'DONE\' ) {
			wpcom_remote_login_final_cleanup();
		}
	}
}, false );

// Inject the remote login iframe after the page has had a chance to load
// more critical resources
window.addEventListener( "DOMContentLoaded", function( e ) {
	var iframe = document.createElement( "iframe" );
	iframe.style.display = "none";
	iframe.setAttribute( "scrolling", "no" );
	iframe.setAttribute( "id", "wpcom_remote_login_key" );
	iframe.src = "https://r-login.wordpress.com/remote-login.php"
		+ "?wpcom_remote_login=key"
		+ "&origin=aHR0cHM6Ly93b3JkcHJlc3MudHY%3D"
		+ "&wpcomid=5089392"
		+ "&time=1617549640";
	document.body.appendChild( iframe );
}, false );
</script>
<link rel=\'dns-prefetch\' href=\'//s0.wp.com\' />
<link rel=\'dns-prefetch\' href=\'//wptv.wordpress.com\' />
<link rel=\'dns-prefetch\' href=\'//wordpress.com\' />
<link rel="alternate" type="application/rss+xml" title="WordPress.tv &raquo; Dave Ross: Optimize Image Files Like a&nbsp;Pro Comments Feed" href="https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/feed/" />
	<script type="text/javascript">
		/* <![CDATA[ */
		function addLoadEvent(func) {
			var oldonload = window.onload;
			if (typeof window.onload != \'function\') {
				window.onload = func;
			} else {
				window.onload = function () {
					oldonload();
					func();
				}
			}
		}
		/* ]]> */
	</script>
			<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\\/\\/s0.wp.com\\/wp-content\\/mu-plugins\\/wpcom-smileys\\/twemoji\\/2\\/72x72\\/","ext":".png","svgUrl":"https:\\/\\/s0.wp.com\\/wp-content\\/mu-plugins\\/wpcom-smileys\\/twemoji\\/2\\/svg\\/","svgExt":".svg","source":{"concatemoji":"https:\\/\\/s0.wp.com\\/wp-includes\\/js\\/wp-emoji-release.min.js?m=1612197847h&ver=5.7.1-alpha-50603"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel=\'stylesheet\' id=\'all-css-0-1\' href=\'https://s0.wp.com/_static/??-eJyVUdtSAyEM/SEptlZnXxy/hUsG03IbElz376VQa7W6M74wyeFcSJBzFiZFhsgyVJF9dRhJztmkICigh+VHtzFEd/J3mccjkDwAZ2WOoncXOkbjq23XDZAWiaX2qbN0UWWRxIuHTcB4E/Dp7mprNRQnuvIqSC2psnAF7dnm3xZFMUZHf8ivRjSpQMNDVnxiBLCowENotDXZjNYBj+FHLRje1yV961rnAkSinQFrEPzaslY/oalOrxnr74HfkCFFGRNjU9OluPEcUVJNpqH8tvtazkt43j5tHx+m/f1uOnwA/WbawQ==?cssminify=yes\' type=\'text/css\' media=\'all\' />
<!--[if IE 6]>
<link rel=\'stylesheet\' id=\'wptv-ie-css\'  href=\'https://s0.wp.com/wp-content/themes/a8c/wptv2/ie6.css?m=1412160810h&#038;ver=5.7.1-alpha-50603\' media=\'all\' />
<![endif]-->
<link rel=\'stylesheet\' id=\'all-css-2-1\' href=\'https://s0.wp.com/_static/??-eJzTLy/QTc7PK0nNK9HPLdUtyClNz8wr1k9PzdfNyU9OLMnMz0Ph6KblJGYW6SUXF+voY9dalJqUk58OZKbrA1UhcUGa7HNtDU1MLU1MLMwNTbIAmkQtqg==?cssminify=yes\' type=\'text/css\' media=\'all\' />
<style id=\'jetpack-global-styles-frontend-style-inline-css\'>
:root { --font-headings: unset; --font-base: unset; --font-headings-default: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif; --font-base-default: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;}
</style>
<link rel=\'stylesheet\' id=\'all-css-4-1\' href=\'https://s0.wp.com/_static/??-eJxti0EKgCAQAD+ULUaJl+gtJqbG6opr9P3o0CHqNAzMwFmEpdxcbpAOUfDwMTMU4iY2NLECB1Nj9g97y9zB/8Vko0GB5Oktn6kFlxxDGMEjrQbvYEmzVHIclNZy2i9lFDfR?cssminify=yes\' type=\'text/css\' media=\'all\' />
<script id=\'wpcom-actionbar-placeholder-js-extra\'>
var actionbardata = {"siteID":"5089392","siteName":"WordPress.tv","siteURL":"https:\\/\\/wordpress.tv","icon":"<img alt=\'\' src=\'https:\\/\\/s0.wp.com\\/i\\/logo\\/wpcom-gray-white.png\' class=\'avatar avatar-50\' height=\'50\' width=\'50\' \\/>","canManageOptions":"","canCustomizeSite":"","isFollowing":"","themeSlug":"a8c\\/wptv2","signupURL":"https:\\/\\/wordpress.com\\/start\\/","loginURL":"https:\\/\\/wordpress.com\\/log-in?redirect_to=https%3A%2F%2Fwordpress.tv%2F2013%2F09%2F06%2Fdave-ross-optimize-image-files-like-a-pro%2F&signup_flow=account&domain=wordpress.tv","themeURL":"","xhrURL":"https:\\/\\/wordpress.tv\\/wp-admin\\/admin-ajax.php","nonce":"7b596771a2","isSingular":"1","isFolded":"","isLoggedIn":"","isMobile":"","subscribeNonce":"<input type=\\"hidden\\" id=\\"_wpnonce\\" name=\\"_wpnonce\\" value=\\"7e93b3bd24\\" \\/>","referer":"https:\\/\\/wordpress.tv\\/2013\\/09\\/06\\/dave-ross-optimize-image-files-like-a-pro\\/","canFollow":"1","feedID":"34277","statusMessage":"","customizeLink":"https:\\/\\/wptv.wordpress.com\\/wp-admin\\/customize.php?url=https%3A%2F%2Fwptv.wordpress.com%2F2013%2F09%2F06%2Fdave-ross-optimize-image-files-like-a-pro%2F","postID":"21728","shortlink":"https:\\/\\/wp.me\\/pllYY-5Es","canEditPost":"","editLink":"https:\\/\\/wordpress.com\\/post\\/wordpress.tv\\/21728","statsLink":"https:\\/\\/wordpress.com\\/stats\\/post\\/21728\\/wordpress.tv","i18n":{"view":"View site","follow":"Follow","following":"Following","edit":"Edit","login":"Log in","signup":"Sign up","customize":"Customize","report":"Report this content","themeInfo":"Get theme: WordPress.tv v2","shortlink":"Copy shortlink","copied":"Copied","followedText":"New posts from this site will now appear in your <a href=\\"https:\\/\\/wordpress.com\\/read\\">Reader<\\/a>","foldBar":"Collapse this bar","unfoldBar":"Expand this bar","editSubs":"Manage subscriptions","viewReader":"View site in Reader","viewReadPost":"View post in Reader","subscribe":"Sign me up","enterEmail":"Enter your email address","followers":"Join 25,349 other followers","alreadyUser":"Already have a WordPress.com account? <a href=\\"https:\\/\\/wordpress.com\\/log-in?redirect_to=https%3A%2F%2Fwordpress.tv%2F2013%2F09%2F06%2Fdave-ross-optimize-image-files-like-a-pro%2F&signup_flow=account&domain=wordpress.tv\\">Log in now.<\\/a>","stats":"Stats"}};
</script>
<script type=\'text/javascript\' src=\'https://s0.wp.com/_static/??-eJyFjUEKwyAQRS9UIxJI6KL0LMZMZEQd62iT3L42dBFKoavhf977I9ckDMUCsUjHMtCEHkRlyNq2TmBcqHN8kY3DaHydgd+ge1TI++d0AeNfSAS0WRc4w6fP2ReRMm37ryFeF5ocmPItJl8tRpZPnIGkZoZyCEdOGZibcQ83NaixV/0wXt0LLwRZkQ==\'></script>
<script type=\'text/javascript\'>
	window.addEventListener( \'DOMContentLoaded\', function() {
		rltInitialize( {"token":null,"iframeOrigins":["https:\\/\\/widgets.wp.com"]} );
	} );
</script>
<link rel=\'stylesheet\' id=\'all-css-0-2\' href=\'https://s0.wp.com/wp-content/mu-plugins/highlander-comments/style.css?m=1530132353h&cssminify=yes\' type=\'text/css\' media=\'all\' />
<!--[if lt IE 8]>
<link rel=\'stylesheet\' id=\'highlander-comments-ie7-css\'  href=\'https://s0.wp.com/wp-content/mu-plugins/highlander-comments/style-ie7.css?m=1351637563h&#038;ver=20110606\' media=\'all\' />
<![endif]-->
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://wptv.wordpress.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://s0.wp.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress.com" />
<link rel="canonical" href="https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/" />
<link rel=\'shortlink\' href=\'https://wp.me/pllYY-5Es\' />
	<style>
		@font-face {
			font-family: Recoleta;
			src: url(\'https://s1.wp.com/i/fonts/recoleta/400.woff2\')
		}
	</style>
	<link rel="alternate" type="application/json+oembed" href="https://public-api.wordpress.com/oembed/?format=json&amp;url=https%3A%2F%2Fwordpress.tv%2F2013%2F09%2F06%2Fdave-ross-optimize-image-files-like-a-pro%2F&amp;for=wpcom-auto-discovery" /><link rel="alternate" type="application/xml+oembed" href="https://public-api.wordpress.com/oembed/?format=xml&amp;url=https%3A%2F%2Fwordpress.tv%2F2013%2F09%2F06%2Fdave-ross-optimize-image-files-like-a-pro%2F&amp;for=wpcom-auto-discovery" />
<!-- Jetpack Open Graph Tags -->
<meta property="og:type" content="article" />
<meta property="og:title" content="Dave Ross: Optimize Image Files Like a&nbsp;Pro" />
<meta property="og:url" content="https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/" />
<meta property="og:description" content="Images, even small ones, can be the biggest files that make up your site. Learn the tools, plugins, and theming techniques you’ll want to start using to shrink your page load times and save your mo…" />
<meta property="article:published_time" content="2013-09-06T10:43:21+00:00" />
<meta property="article:modified_time" content="2013-09-01T19:48:05+00:00" />
<meta property="og:site_name" content="WordPress.tv" />
<meta property="og:image" content="https://videos.files.wordpress.com/TqDCJmoq/optimize-image-files_scruberthumbnail_0.jpg" />
<meta property="og:image:secure_url" content="https://videos.files.wordpress.com/TqDCJmoq/optimize-image-files_scruberthumbnail_0.jpg" />
<meta property="og:locale" content="en_US" />
<meta property="og:video:type" content="video/mp4" />
<meta property="og:video" content="https://wptv.files.wordpress.com/2013/08/optimize-image-files.mp4" />
<meta property="og:video:secure_url" content="https://wptv.files.wordpress.com/2013/08/optimize-image-files.mp4" />
<meta name="twitter:creator" content="@WordPressTV" />
<meta name="twitter:site" content="@WordPressTV" />
<meta name="twitter:text:title" content="Dave Ross: Optimize Image Files Like a&nbsp;Pro" />
<meta name="twitter:image" content="https://videos.files.wordpress.com/TqDCJmoq/optimize-image-files_scruberthumbnail_0.jpg?w=640" />
<meta name="twitter:card" content="player" />
<meta property="article:publisher" content="https://www.facebook.com/WordPresscom" />
<meta name="twitter:player" content="https://videopress.com/v/TqDCJmoq?autoplay=0" />
<meta name="twitter:player:width" content="560" />
<meta name="twitter:player:height" content="315" />
<meta name="twitter:player:stream" content="https://wptv.files.wordpress.com/2013/08/optimize-image-files.mp4" />
<meta name="twitter:player:stream:content_type" content="video/mp4" />
<meta name="twitter:app:name:iphone" content="WordPress" />
<meta name="twitter:app:id:iphone" content="335703880" />
<meta name="twitter:app:name:ipad" content="WordPress" />
<meta name="twitter:app:id:ipad" content="335703880" />
<meta name="twitter:app:name:googleplay" content="WordPress" />
<meta name="twitter:app:id:googleplay" content="org.wordpress.android" />
<meta name="twitter:app:url:iphone" content="wordpress://viewpost?blogId=5089392&amp;postId=21728" />
<meta name="twitter:app:url:ipad" content="wordpress://viewpost?blogId=5089392&amp;postId=21728" />
<meta name="twitter:app:url:googleplay" content="wordpress://viewpost?blogId=5089392&amp;postId=21728" />

<!-- End Jetpack Open Graph Tags -->
<link rel="shortcut icon" type="image/x-icon" href="https://s0.wp.com/i/favicon.ico" sizes="16x16 24x24 32x32 48x48" />
<link rel="icon" type="image/x-icon" href="https://s0.wp.com/i/favicon.ico" sizes="16x16 24x24 32x32 48x48" />
<link rel="apple-touch-icon" href="https://s0.wp.com/i/webclip.png" />
<link rel=\'openid.server\' href=\'https://wordpress.tv/?openidserver=1\' />
<link rel=\'openid.delegate\' href=\'https://wordpress.tv/\' />
<link rel="search" type="application/opensearchdescription+xml" href="https://wordpress.tv/osd.xml" title="WordPress.tv" />
<link rel="search" type="application/opensearchdescription+xml" href="https://s1.wp.com/opensearch.xml" title="WordPress.com" />

<script type="application/ld+json">{
    "@context": "https:\\/\\/schema.org",
    "@graph": [
        {
            "@type": "VideoObject",
            "actor": [
                {
                    "@type": "Person",
                    "name": "Dave Ross",
                    "url": "https:\\/\\/wordpress.tv\\/speakers\\/dave-ross\\/"
                }
            ],
            "name": "Dave Ross: Optimize Image Files Like a&nbsp;Pro",
            "url": "https:\\/\\/wordpress.tv\\/2013\\/09\\/06\\/dave-ross-optimize-image-files-like-a-pro\\/",
            "contentUrl": [
                "https:\\/\\/videos.files.wordpress.com\\/TqDCJmoq\\/optimize-image-files_hd.mp4",
                "https:\\/\\/videos.files.wordpress.com\\/TqDCJmoq\\/optimize-image-files_dvd.mp4",
                "https:\\/\\/videos.files.wordpress.com\\/TqDCJmoq\\/optimize-image-files_std.mp4"
            ],
            "description": "Images, even small ones, can be the biggest files that make up your site. Learn the tools, plugins, and theming techniques you\\u2019ll want to start using to shrink your page load times and save your mobile users a few bucks without sacrificing image quality.\\r\\n\\r\\n<a href=\\"http:\\/\\/slides.davidmichaelross.com\\/image_optimization\\/#\\/\\" target=\\"_blank\\">Presentation Slides &raquo;<\\/a>",
            "duration": "P0DT00H29M20S",
            "height": "1080",
            "inLanguage": "en",
            "isFamilyFriendly": true,
            "thumbnailUrl": "https:\\/\\/videos.files.wordpress.com\\/TqDCJmoq\\/optimize-image-files_scruberthumbnail_0.jpg",
            "uploadDate": "2013-09-06",
            "width": "1920"
        }
    ]
}</script>
<link rel="alternate" type="application/json+oembed" href="https://wordpress.tv/oembed/?url=https%3A%2F%2Fwordpress.tv%2F2013%2F09%2F06%2Fdave-ross-optimize-image-files-like-a-pro%2F&#038;format=json" title="Dave Ross: Optimize Image Files Like a&nbsp;Pro" />
<link rel="alternate" type="text/xml+oembed" href="https://wordpress.tv/oembed/?url=https%3A%2F%2Fwordpress.tv%2F2013%2F09%2F06%2Fdave-ross-optimize-image-files-like-a-pro%2F&#038;format=xml" title="Dave Ross: Optimize Image Files Like a&nbsp;Pro" />
<meta name="application-name" content="WordPress.tv" /><meta name="msapplication-window" content="width=device-width;height=device-height" /><meta name="msapplication-tooltip" content="Engage Yourself with WordPress.tv" /><meta name="msapplication-task" content="name=Subscribe;action-uri=https://wordpress.tv/feed/;icon-uri=https://s0.wp.com/i/favicon.ico" /><meta name="msapplication-task" content="name=Sign up for a free blog;action-uri=http://wordpress.com/signup/;icon-uri=https://s0.wp.com/i/favicon.ico" /><meta name="msapplication-task" content="name=WordPress.com Support;action-uri=http://support.wordpress.com/;icon-uri=https://s0.wp.com/i/favicon.ico" /><meta name="msapplication-task" content="name=WordPress.com Forums;action-uri=http://forums.wordpress.com/;icon-uri=https://s0.wp.com/i/favicon.ico" /><meta name="description" content="Images, even small ones, can be the biggest files that make up your site. Learn the tools, plugins, and theming techniques you’ll want to start using to shrink your page load times and save your mobile users a few bucks without sacrificing image quality. Presentation Slides &raquo;" />
<link rel="amphtml" href="https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/amp/">		<link rel="stylesheet" id="custom-css-css" type="text/css" href="https://s0.wp.com/?custom-css=1&#038;csblog=llYY&#038;cscache=6&#038;csrev=3" />
		<!-- Your Google Analytics Plugin is missing the tracking ID -->
</head>

<body class="post-template-default single single-post postid-21728 single-format-standard customizer-styles-applied highlander-enabled highlander-light">
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P24PF4B" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div id="page">
	<div id="header">
		<div class="sleeve">

			<h1><a rel="home" href="https://wordpress.tv/"><img src="https://s0.wp.com/wp-content/themes/a8c/wptv2/i/wptv-2x.png" alt="WordPress.tv" height="40" width="210" /></a></h1>

			<form id="searchform" name="searchform" method="get" action="https://wordpress.tv/">
				<label for="searchbox" class="screen-reader-text">Search WordPress.tv</label>
				<input type="search" placeholder="Search WordPress.tv" id="searchbox" name="s" value=""  />
				<input type="submit" value="Search" />
			</form>

			<div id="menu">
				<div class="menu-primary-container"><ul id="menu-primary" class="menu"><li id="menu-item-10486" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-10486"><a href="https://wordpress.tv/category/wordcamptv/">WordCamps</a></li>
<li id="menu-item-43586" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-43586"><a href="https://wordpress.tv/category/wordpress-related-events/">Related Events</a></li>
<li id="menu-item-10487" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10487"><a href="https://wordpress.tv/category/how-to/">How To</a></li>
<li id="menu-item-39536" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39536"><a href="https://wordpress.tv/get-involved/">Get Involved</a></li>
</ul></div>			</div>

		</div><!-- .sleeve -->
	</div><!-- #header -->
<div class="wptv-hero group">
	<div class="container">

		<div class="breadcrumb">
	<a href="https://wordpress.tv">Home</a>
	<span class="arrow">&raquo;</span> <a href="https://wordpress.tv/category/wordcamptv/">WordCampTV</a><span class="arrow">&raquo;</span><a href="https://wordpress.tv/event/wordcamp-providence-2013/">WordCamp Providence 2013</a></div>
		<h2 class="video-title">Dave Ross: Optimize Image Files Like a&nbsp;Pro</h2>

		<div class="the-video">
			<iframe width=\'940\' height=\'530\' src=\'https://video.wordpress.com/embed/TqDCJmoq?hd=1&amp;autoPlay=0&amp;permalink=0&amp;loop=0\' frameborder=\'0\' allowfullscreen></iframe><script src=\'https://v0.wordpress.com/js/next/videopress-iframe.js?m=1435166243\'></script>
<div id="jp-post-flair" class="sharedaddy sd-rating-enabled sd-like-enabled sd-sharing-enabled"><div class="sd-block sd-rating"><h3 class="sd-title">Rate this:</h3><div class="cs-rating pd-rating" id="pd_rating_holder_29399_post_21728"></div></div><div class="sharedaddy sd-sharing-enabled"><div class="robots-nocontent sd-block sd-social sd-social-icon-text sd-sharing"><div class="sd-content"><ul><li class="share-twitter"><a rel="nofollow noopener noreferrer" data-shared="sharing-twitter-21728" class="share-twitter sd-button share-icon" href="https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/?share=twitter" target="_blank" title="Click to share on Twitter"><span>Twitter</span></a></li><li class="share-facebook"><a rel="nofollow noopener noreferrer" data-shared="sharing-facebook-21728" class="share-facebook sd-button share-icon" href="https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/?share=facebook" target="_blank" title="Click to share on Facebook"><span>Facebook</span></a></li><li class="share-linkedin"><a rel="nofollow noopener noreferrer" data-shared="sharing-linkedin-21728" class="share-linkedin sd-button share-icon" href="https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/?share=linkedin" target="_blank" title="Click to share on LinkedIn"><span>LinkedIn</span></a></li><li class="share-pocket"><a rel="nofollow noopener noreferrer" data-shared="" class="share-pocket sd-button share-icon" href="https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/?share=pocket" target="_blank" title="Click to share on Pocket"><span>Pocket</span></a></li><li class="share-email"><a rel="nofollow noopener noreferrer" data-shared="" class="share-email sd-button share-icon" href="https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/?share=email" target="_blank" title="Click to email this to a friend"><span>Email</span></a></li><li class="share-end"></li></ul></div></div></div><div class=\'sharedaddy sd-block sd-like jetpack-likes-widget-wrapper jetpack-likes-widget-unloaded\' id=\'like-post-wrapper-5089392-21728-6069d948a1238\' data-src=\'//widgets.wp.com/likes/index.html?ver=20210317#blog_id=5089392&amp;post_id=21728&amp;origin=wptv.wordpress.com&amp;obj_id=5089392-21728-6069d948a1238&amp;domain=wordpress.tv\' data-name=\'like-post-frame-5089392-21728-6069d948a1238\'><h3 class=\'sd-title\'>Like this:</h3><div class=\'likes-widget-placeholder post-likes-widget-placeholder\' style=\'height: 55px;\'><span class=\'button\'><span>Like</span></span> <span class="loading">Loading...</span></div><span class=\'sd-text-color\'></span><a class=\'sd-link-color\'></a></div></div>		</div>

	</div><!-- .container -->
</div><!-- .wptv-hero -->

<div class="container">
	<div class="primary-content">
		<div id="content">
			<div id="comments">
					<h3 id="comments">
		One response on &ldquo;<span>Dave Ross: Optimize Image Files Like a&nbsp;Pro</span>&rdquo;	</h3>

	<ol class="commentlist">
				<li class="comment even thread-even depth-1 highlander-comment" id="comment-207402">
			<cite class="authorinfo">
				<img alt=\'\' src=\'https://1.gravatar.com/avatar/d50b88f026bbac00217ca2858a30d630?s=24&#038;d=https%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D24&#038;r=G\' class=\'avatar avatar-24\' height=\'24\' width=\'24\' />				<a href=\'http://optimwise.com\' rel=\'external nofollow ugc\' class=\'url\'>Chad Warner</a>			</cite>

			<br/>

			
				<small class="commentmetadata">
					<a href="#comment-207402" title="">September 11, 2013 at 4:40 am</a>
					 | <a rel=\'nofollow\' class=\'comment-reply-link\' href=\'https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/?replytocom=207402#respond\' data-commentid="207402" data-postid="21728" data-belowelement="comment-207402" data-respondelement="respond" data-replyto="Reply to Chad Warner" aria-label=\'Reply to Chad Warner\'>Reply</a>				</small>

			
			<div class="commenttext">
				
				<p>Some of the tools Dave mentioned are Mac-only. Windows users, what are your favorite tools for image optimization?</p>
<p id="comment-like-207402" data-liked=comment-not-liked class="comment-likes comment-not-liked"><a href="https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/?like_comment=207402&#038;_wpnonce=91286f8fd4" class="comment-like-link needs-login" rel="nofollow" data-blog="5089392"><span>Like</span></a><span id="comment-like-count-207402" class="comment-like-feedback">Like</span></p>
			</div>
			<div class="clear"></div>
		</li>
	</li><!-- #comment-## -->
	</ol>
	<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">Continue the discussion <small><a rel="nofollow" id="cancel-comment-reply-link" href="/2013/09/06/dave-ross-optimize-image-files-like-a-pro/#respond" style="display:none;">Cancel reply</a></small></h3><form action="https://wordpress.tv/wp-comments-post.php" method="post" id="commentform" class="comment-form"><input type="hidden" id="highlander_comment_nonce" name="highlander_comment_nonce" value="81d7790bc0" /><input type="hidden" name="_wp_http_referer" value="/2013/09/06/dave-ross-optimize-image-files-like-a-pro/" />
<input type="hidden" name="hc_post_as" id="hc_post_as" value="guest" />

<div class="comment-form-field comment-textarea">
	<label for="comment">Enter your comment here...</label>
	<div id="comment-form-comment"><textarea id="comment" name="comment" title="Enter your comment here..."></textarea></div>
</div>

<div id="comment-form-identity">
	<div id="comment-form-nascar">
		<p>Fill in your details below or click an icon to log in:</p>
		<ul>
			<li class="selected" style="display:none;">
				<a href="#comment-form-guest" id="postas-guest" class="nascar-signin-link"
                   title="Login via Guest">
									</a>
			</li>
			<li>
				<a href="#comment-form-load-service:WordPress.com" id="postas-wordpress" class="nascar-signin-link"
                   title="Login via WordPress.com">
					<svg xmlns="http://www.w3.org/2000/svg" role="presentation" viewBox="0 0 24 24" ><rect x="0" fill="none" width="24" height="24"/><g><path fill="#0087be" d="M12.158 12.786l-2.698 7.84c.806.236 1.657.365 2.54.365 1.047 0 2.05-.18 2.986-.51-.024-.037-.046-.078-.065-.123l-2.762-7.57zM3.008 12c0 3.56 2.07 6.634 5.068 8.092L3.788 8.342c-.5 1.117-.78 2.354-.78 3.658zm15.06-.454c0-1.112-.398-1.88-.74-2.48-.456-.74-.883-1.368-.883-2.11 0-.825.627-1.595 1.51-1.595.04 0 .078.006.116.008-1.598-1.464-3.73-2.36-6.07-2.36-3.14 0-5.904 1.613-7.512 4.053.21.008.41.012.58.012.94 0 2.395-.114 2.395-.114.484-.028.54.684.057.74 0 0-.487.058-1.03.086l3.275 9.74 1.968-5.902-1.4-3.838c-.485-.028-.944-.085-.944-.085-.486-.03-.43-.77.056-.742 0 0 1.484.114 2.368.114.94 0 2.397-.114 2.397-.114.486-.028.543.684.058.74 0 0-.488.058-1.03.086l3.25 9.665.897-2.997c.456-1.17.684-2.137.684-2.907zm1.82-3.86c.04.286.06.593.06.924 0 .912-.17 1.938-.683 3.22l-2.746 7.94c2.672-1.558 4.47-4.454 4.47-7.77 0-1.564-.4-3.033-1.1-4.314zM12 22C6.486 22 2 17.514 2 12S6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/></g></svg>				</a>
			</li>
			<li>
				<a href="#comment-form-load-service:Twitter" id="postas-twitter" class="nascar-signin-link"
                   title="Login via Twitter">
					<svg xmlns="http://www.w3.org/2000/svg" role="presentation" viewBox="0 0 24 24" ><rect x="0" fill="none" width="24" height="24"/><g><path fill="#1DA1F2" d="M22.23 5.924c-.736.326-1.527.547-2.357.646.847-.508 1.498-1.312 1.804-2.27-.793.47-1.67.812-2.606.996C18.325 4.498 17.258 4 16.078 4c-2.266 0-4.103 1.837-4.103 4.103 0 .322.036.635.106.935-3.41-.17-6.433-1.804-8.457-4.287-.353.607-.556 1.312-.556 2.064 0 1.424.724 2.68 1.825 3.415-.673-.022-1.305-.207-1.86-.514v.052c0 1.988 1.415 3.647 3.293 4.023-.344.095-.707.145-1.08.145-.265 0-.522-.026-.773-.074.522 1.63 2.038 2.817 3.833 2.85-1.404 1.1-3.174 1.757-5.096 1.757-.332 0-.66-.02-.98-.057 1.816 1.164 3.973 1.843 6.29 1.843 7.547 0 11.675-6.252 11.675-11.675 0-.178-.004-.355-.012-.53.802-.578 1.497-1.3 2.047-2.124z"/></g></svg>				</a>
			</li>
			<li>
				<a href="#comment-form-load-service:Facebook" id="postas-facebook" class="nascar-signin-link"
                   title="Login via Facebook">
					<svg xmlns="http://www.w3.org/2000/svg" role="presentation" viewBox="0 0 24 24" ><rect x="0" fill="none" width="24" height="24"/><g><path fill="#3B5998" d="M20.007 3H3.993C3.445 3 3 3.445 3 3.993v16.013c0 .55.445.994.993.994h8.62v-6.97H10.27V11.31h2.346V9.31c0-2.325 1.42-3.59 3.494-3.59.993 0 1.847.073 2.096.106v2.43h-1.438c-1.128 0-1.346.537-1.346 1.324v1.734h2.69l-.35 2.717h-2.34V21h4.587c.548 0 .993-.445.993-.993V3.993c0-.548-.445-.993-.993-.993z"/></g></svg>				</a>
			</li>
		</ul>
	</div>

	<div id="comment-form-guest" class="comment-form-service selected">
		<div class="comment-form-padder">
			<div class="comment-form-avatar">
<a href="https://gravatar.com/site/signup/" target="_blank">				<img src="https://1.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=25" alt="Gravatar" width="25" class="no-grav" />
</a>			</div>

				<div class="comment-form-fields">
				<div class="comment-form-field comment-form-email">
					<label for="email">Email <span class="required">(required)</span> <span class="nopublish">(Address never made public)</span></label>
					<div class="comment-form-input"><input id="email" name="email" type="email" value="" /></div>
				</div>
				<div class="comment-form-field comment-form-author">
					<label for="author">Name <span class="required">(required)</span></label>
					<div class="comment-form-input"><input id="author" name="author" type="text" value="" /></div>
				</div>
				<div class="comment-form-field comment-form-url">
					<label for="url">Website</label>
					<div class="comment-form-input"><input id="url" name="url" type="url" value="" /></div>
				</div>
			</div>
			
		</div>
	</div>

	<div id="comment-form-wordpress" class="comment-form-service">
		<div class="comment-form-padder">
			<div class="comment-form-avatar">
				<img src="https://1.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=25" alt="WordPress.com Logo" width="25" class="no-grav" />
			</div>

				<div class="comment-form-fields">
				<input type="hidden" name="wp_avatar" id="wordpress-avatar" class="comment-meta-wordpress" value="" />
				<input type="hidden" name="wp_user_id" id="wordpress-user_id" class="comment-meta-wordpress" value="" />
				<input type="hidden" name="wp_access_token" id="wordpress-access_token" class="comment-meta-wordpress" value="" />
						<p class="comment-form-posting-as pa-wordpress">
			<strong></strong>
			You are commenting using your WordPress.com account.			<span class="comment-form-log-out">
				(&nbsp;<a href="javascript:HighlanderComments.doExternalLogout( \'wordpress\' );">Log&nbsp;Out</a>&nbsp;/&nbsp;
				<a href="#" onclick="javascript:HighlanderComments.switchAccount();return false;">Change</a>&nbsp;)
			</span>
			<span class="pa-icon"><svg xmlns="http://www.w3.org/2000/svg" role="presentation" viewBox="0 0 24 24" ><rect x="0" fill="none" width="24" height="24"/><g><path fill="#0087be" d="M12.158 12.786l-2.698 7.84c.806.236 1.657.365 2.54.365 1.047 0 2.05-.18 2.986-.51-.024-.037-.046-.078-.065-.123l-2.762-7.57zM3.008 12c0 3.56 2.07 6.634 5.068 8.092L3.788 8.342c-.5 1.117-.78 2.354-.78 3.658zm15.06-.454c0-1.112-.398-1.88-.74-2.48-.456-.74-.883-1.368-.883-2.11 0-.825.627-1.595 1.51-1.595.04 0 .078.006.116.008-1.598-1.464-3.73-2.36-6.07-2.36-3.14 0-5.904 1.613-7.512 4.053.21.008.41.012.58.012.94 0 2.395-.114 2.395-.114.484-.028.54.684.057.74 0 0-.487.058-1.03.086l3.275 9.74 1.968-5.902-1.4-3.838c-.485-.028-.944-.085-.944-.085-.486-.03-.43-.77.056-.742 0 0 1.484.114 2.368.114.94 0 2.397-.114 2.397-.114.486-.028.543.684.058.74 0 0-.488.058-1.03.086l3.25 9.665.897-2.997c.456-1.17.684-2.137.684-2.907zm1.82-3.86c.04.286.06.593.06.924 0 .912-.17 1.938-.683 3.22l-2.746 7.94c2.672-1.558 4.47-4.454 4.47-7.77 0-1.564-.4-3.033-1.1-4.314zM12 22C6.486 22 2 17.514 2 12S6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/></g></svg></span>
		</p>
					</div>
	
		</div>
	</div>

	<div id="comment-form-googleplus" class="comment-form-service">
		<div class="comment-form-padder">
			<div class="comment-form-avatar">
				<img src="https://1.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=25" alt="Google photo" width="25" class="no-grav" />
			</div>

				<div class="comment-form-fields">
				<input type="hidden" name="googleplus_avatar" id="googleplus-avatar" class="comment-meta-googleplus" value="" />
				<input type="hidden" name="googleplus_user_id" id="googleplus-user_id" class="comment-meta-googleplus" value="" />
				<input type="hidden" name="googleplus_access_token" id="googleplus-access_token" class="comment-meta-googleplus" value="" />
						<p class="comment-form-posting-as pa-googleplus">
			<strong></strong>
			You are commenting using your Google account.			<span class="comment-form-log-out">
				(&nbsp;<a href="javascript:HighlanderComments.doExternalLogout( \'googleplus\' );">Log&nbsp;Out</a>&nbsp;/&nbsp;
				<a href="#" onclick="javascript:HighlanderComments.switchAccount();return false;">Change</a>&nbsp;)
			</span>
			<span class="pa-icon"><svg xmlns="http://www.w3.org/2000/svg" role="presentation" x="0px" y="0px" viewBox="0 0 60 60" ><path fill="#519bf7" d="M56.3,30c0,-1.6 -0.2,-3.4 -0.6,-5h-3.1H42.2H30v10.6h14.8C44,39.3 42,42 39.1,43.9l8.8,6.8C53,46 56.3,39 56.3,30z" /><path fill="#3db366" d="M30,57.5c6.7,0 13.1,-2.4 17.9,-6.8l-8.8,-6.8c-2.5,1.6 -5.6,2.4 -9.1,2.4c-7.2,0 -13.3,-4.7 -15.4,-11.2l-9.3,7.1C9.8,51.3 19.1,57.5 30,57.5z" /><path fill="#fdc600" d="M5.3,42.2l9.3,-7.1c-0.5,-1.6 -0.8,-3.3 -0.8,-5.1s0.3,-3.5 0.8,-5.1l-9.3,-7.1C3.5,21.5 2.5,25.6 2.5,30S3.5,38.5 5.3,42.2z" /><path fill="#f15b44" d="M40.1,17.4l8,-8C43.3,5.1 37,2.5 30,2.5C19.1,2.5 9.8,8.7 5.3,17.8l9.3,7.1c2.1,-6.5 8.2,-11.1 15.4,-11.1C33.9,13.7 37.4,15.1 40.1,17.4z" /></svg></span>
		</p>
					</div>
	
		</div>
	</div>

	<div id="comment-form-twitter" class="comment-form-service">
		<div class="comment-form-padder">
			<div class="comment-form-avatar">
				<img src="https://1.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=25" alt="Twitter picture" width="25" class="no-grav" />
			</div>

				<div class="comment-form-fields">
				<input type="hidden" name="twitter_avatar" id="twitter-avatar" class="comment-meta-twitter" value="" />
				<input type="hidden" name="twitter_user_id" id="twitter-user_id" class="comment-meta-twitter" value="" />
				<input type="hidden" name="twitter_access_token" id="twitter-access_token" class="comment-meta-twitter" value="" />
						<p class="comment-form-posting-as pa-twitter">
			<strong></strong>
			You are commenting using your Twitter account.			<span class="comment-form-log-out">
				(&nbsp;<a href="javascript:HighlanderComments.doExternalLogout( \'twitter\' );">Log&nbsp;Out</a>&nbsp;/&nbsp;
				<a href="#" onclick="javascript:HighlanderComments.switchAccount();return false;">Change</a>&nbsp;)
			</span>
			<span class="pa-icon"><svg xmlns="http://www.w3.org/2000/svg" role="presentation" viewBox="0 0 24 24" ><rect x="0" fill="none" width="24" height="24"/><g><path fill="#1DA1F2" d="M22.23 5.924c-.736.326-1.527.547-2.357.646.847-.508 1.498-1.312 1.804-2.27-.793.47-1.67.812-2.606.996C18.325 4.498 17.258 4 16.078 4c-2.266 0-4.103 1.837-4.103 4.103 0 .322.036.635.106.935-3.41-.17-6.433-1.804-8.457-4.287-.353.607-.556 1.312-.556 2.064 0 1.424.724 2.68 1.825 3.415-.673-.022-1.305-.207-1.86-.514v.052c0 1.988 1.415 3.647 3.293 4.023-.344.095-.707.145-1.08.145-.265 0-.522-.026-.773-.074.522 1.63 2.038 2.817 3.833 2.85-1.404 1.1-3.174 1.757-5.096 1.757-.332 0-.66-.02-.98-.057 1.816 1.164 3.973 1.843 6.29 1.843 7.547 0 11.675-6.252 11.675-11.675 0-.178-.004-.355-.012-.53.802-.578 1.497-1.3 2.047-2.124z"/></g></svg></span>
		</p>
					</div>
	
		</div>
	</div>

	<div id="comment-form-facebook" class="comment-form-service">
		<div class="comment-form-padder">
			<div class="comment-form-avatar">
				<img src="https://1.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=25" alt="Facebook photo" width="25" class="no-grav" />
			</div>

				<div class="comment-form-fields">
				<input type="hidden" name="fb_avatar" id="facebook-avatar" class="comment-meta-facebook" value="" />
				<input type="hidden" name="fb_user_id" id="facebook-user_id" class="comment-meta-facebook" value="" />
				<input type="hidden" name="fb_access_token" id="facebook-access_token" class="comment-meta-facebook" value="" />
						<p class="comment-form-posting-as pa-facebook">
			<strong></strong>
			You are commenting using your Facebook account.			<span class="comment-form-log-out">
				(&nbsp;<a href="javascript:HighlanderComments.doExternalLogout( \'facebook\' );">Log&nbsp;Out</a>&nbsp;/&nbsp;
				<a href="#" onclick="javascript:HighlanderComments.switchAccount();return false;">Change</a>&nbsp;)
			</span>
			<span class="pa-icon"><svg xmlns="http://www.w3.org/2000/svg" role="presentation" viewBox="0 0 24 24" ><rect x="0" fill="none" width="24" height="24"/><g><path fill="#3B5998" d="M20.007 3H3.993C3.445 3 3 3.445 3 3.993v16.013c0 .55.445.994.993.994h8.62v-6.97H10.27V11.31h2.346V9.31c0-2.325 1.42-3.59 3.494-3.59.993 0 1.847.073 2.096.106v2.43h-1.438c-1.128 0-1.346.537-1.346 1.324v1.734h2.69l-.35 2.717h-2.34V21h4.587c.548 0 .993-.445.993-.993V3.993c0-.548-.445-.993-.993-.993z"/></g></svg></span>
		</p>
					</div>
	
		</div>
	</div>


	<div id="comment-form-load-service" class="comment-form-service">
		<div class="comment-form-posting-as-cancel"><a href="javascript:HighlanderComments.cancelExternalWindow();">Cancel</a></div>
		<p>Connecting to %s</p>
	</div>

</div>

<script type="text/javascript">
var highlander_expando_javascript = function () {

	function hide( sel ) {
		var el = document.querySelector( sel );
		if ( el ) {
			el.style.setProperty( \'display\', \'none\' );
		}
	}

	function show( sel ) {
		var el = document.querySelector( sel );
		if ( el ) {
			el.style.removeProperty( \'display\' );
		}
	}

	var input = document.createElement( \'input\' );
	var comment = document.querySelector( \'#comment\' );

	if ( input && comment && \'placeholder\' in input ) {
		var label = document.querySelector( \'.comment-textarea label\' );
		if ( label ) {
			var text = label.textContent;
			label.parentNode.removeChild( label );
			comment.setAttribute( \'placeholder\', text );
		}
	}

	// Expando Mode: start small, then auto-resize on first click + text length
	hide( \'#comment-form-identity\' );
	hide( \'#comment-form-subscribe\' );
	hide( \'#commentform .form-submit\' );

	if ( comment ) {
		comment.style.height = \'10px\';

		var handler = function () {
			comment.style.height = HighlanderComments.initialHeight + \'px\';
			show( \'#comment-form-identity\' );
			show( \'#comment-form-subscribe\' );
			show( \'#commentform .form-submit\' );
			HighlanderComments.resizeCallback();

			comment.removeEventListener( \'focus\', handler );
		};

		comment.addEventListener( \'focus\', handler );
	}
}

if ( document.readyState !== \'loading\' ) {
	highlander_expando_javascript();
} else {
	if ( typeof window.jQuery === \'function\' ) {
		// Use jQuery\'s `ready` if available.
		// This solves some scheduling issues between this script and the main highlander script.
		jQuery( document ).ready( highlander_expando_javascript );
	} else {
		// If not available, add a vanilla event listener.
		document.addEventListener( \'DOMContentLoaded\', highlander_expando_javascript );
	}
}

</script>

<div id="comment-form-subscribe">
	<p class="comment-subscription-form"><input type="checkbox" name="subscribe" id="subscribe" value="subscribe" style="width: auto;"/> <label class="subscribe-label" id="subscribe-label" for="subscribe" style="display: inline;">Notify me of new comments via email.</label></p><p class="post-subscription-form"><input type="checkbox" name="subscribe_blog" id="subscribe_blog" value="subscribe" style="width: auto;"/> <label class="subscribe-label" id="subscribe-blog-label" for="subscribe_blog"  style="display: inline;">Notify me of new posts via email.</label></p></div>




<p class="form-submit"><input name="submit" type="submit" id="comment-submit" class="submit" value="Post Comment" /> <input type=\'hidden\' name=\'comment_post_ID\' value=\'21728\' id=\'comment_post_ID\' />
<input type=\'hidden\' name=\'comment_parent\' id=\'comment_parent\' value=\'0\' />
</p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="b90c503df5" /></p>
<input type="hidden" name="genseq" value="1617549640" />
<input type="hidden" id="ak_js" name="ak_js" value="184"/><textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100" style="display: none !important;"></textarea></form>	</div><!-- #respond -->
	<div style="clear: both"></div>			</div>
		</div><!-- #content -->
	</div><!-- .primary-content -->
	
<div class="secondary-content video-info">
	<h5>Published</h5>
			<p class="video-date">September 6, 2013</p>

							<div class="video-description"><p>Images, even small ones, can be the biggest files that make up your site. Learn the tools, plugins, and theming techniques you’ll want to start using to shrink your page load times and save your mobile users a few bucks without sacrificing image quality.</p>
<p><a href="http://slides.davidmichaelross.com/image_optimization/#/" target="_blank">Presentation Slides &raquo;</a></p>
<div class="sd-block sd-rating"><h3 class="sd-title">Rate this:</h3><div class="cs-rating pd-rating" id="pd_rating_holder_29399_post_21728"></div></div></div>
			<h5>Event</h5><p class="video-event"><a href="https://wordpress.tv/event/wordcamp-providence-2013/">WordCamp Providence 2013 <span class="tag-count">26</span></a></p><h5>Speakers</h5><p class="video-speakers"><a href="https://wordpress.tv/speakers/dave-ross/">Dave Ross <span class="tag-count">3</span></a></p><h5>Tags</h5><p class="video-tags"><a href="https://wordpress.tv/tag/images/">images <span class="tag-count">50</span></a></p><h5>Language</h5><p class="video-lang"><a href="https://wordpress.tv/language/english/">English <span class="tag-count">9183</span></a></p>			<h5>Download</h5>
			<div class="video-downloads">
MP4: <a href=\'https://videos.files.wordpress.com/TqDCJmoq/optimize-image-files_std.mp4\'>Low</a>, <a href=\'https://videos.files.wordpress.com/TqDCJmoq/optimize-image-files_dvd.mp4\'>Med</a>, <a href=\'https://videos.files.wordpress.com/TqDCJmoq/optimize-image-files_hd.mp4\'>High</a><br/>OGG: <a href=\'https://videos.files.wordpress.com/TqDCJmoq/optimize-image-files_fmt1.ogv\'>Low</a>			</div>
<h5>Subtitles</h5><a href="https://wordpress.tv/subtitle/?video=21744">Subtitle this video &rarr;</a>
							<h5>Producer</h5>

				<div class="video-producer">
					
						<a href="https://wordpress.tv/producer/tom-beach/">
							Tom Beach						</a>

									</div>
			
	<div class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><p></p><a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0;" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.</div></div></div><!-- .secondary-content -->
</div><!-- .container -->

	<div id="footer">
		<div class="container">
			<div class="menu-footer-container"><ul id="menu-footer" class="menu"><li id="menu-item-39309" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39309"><a href="https://wordpress.com/?ref=footer_blog" rel="nofollow">Blog at WordPress.com.</a></li>
<li id="menu-item-39312" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39312"><a href="https://wordpress.tv/get-involved/">Get Involved</a></li>
<li id="menu-item-81780" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81780"><a href="https://wordpress.org/about/privacy/">Privacy</a></li>
<li id="menu-item-39310" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39310"><a href="http://videopress.com/">Powered by VideoPress</a></li>
</ul></div>			<p class="automattic">An <a href="https://automattic.com/"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNy4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxvZ28iIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNDk0LjQgMzguMiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNDk0LjQgMzguMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8cGF0aCBmaWxsPSIjODg4ODg4IiBkPSJNMTc5LjMsMzguMmMtMTIuNiwwLTIwLjctOS4xLTIwLjctMTguNXYtMS4yYzAtOS42LDguMi0xOC41LDIwLjctMTguNWMxMi42LDAsMjAuOCw4LjksMjAuOCwxOC41djEuMg0KCUMyMDAuMSwyOS4xLDE5MS45LDM4LjIsMTc5LjMsMzguMnogTTE5My4zLDE4LjZjMC02LjktNS0xMy0xNC4xLTEzYy05LjEsMC0xNCw2LjEtMTQsMTN2MC45YzAsNi45LDUsMTMuMSwxNCwxMy4xDQoJYzkuMSwwLDE0LjEtNi4yLDE0LjEtMTMuMVYxOC42eiIvPg0KPHBhdGggZmlsbD0iIzg4ODg4OCIgZD0iTTM3LjEsMzYuOEwzMi40LDI4SDExLjZMNywzNi44SDBMMTkuMiwxLjNoNS41bDE5LjUsMzUuNUgzNy4xeiBNMjEuOCw4LjJsLTcuNywxNC45aDE1LjdMMjEuOCw4LjJ6Ii8+DQo8cGF0aCBmaWxsPSIjODg4ODg4IiBkPSJNNzQuNiwzOC4yYy0xMi43LDAtMTguNy02LjktMTguNy0xNi4yVjEuM2g2LjZ2MjAuOWMwLDYuNiw0LjMsMTAuNSwxMi41LDEwLjVjOC40LDAsMTEuOS0zLjksMTEuOS0xMC41VjEuMw0KCWg2LjdWMjJDOTMuNiwzMC44LDg3LjksMzguMiw3NC42LDM4LjJ6Ii8+DQo8cGF0aCBmaWxsPSIjODg4ODg4IiBkPSJNMTMwLjcsNi44djMwaC02Ljd2LTMwaC0xNS41VjEuM2gzNy43djUuNUgxMzAuN3oiLz4NCjxwYXRoIGZpbGw9IiM4ODg4ODgiIGQ9Ik0yNTkuNSwzNi44VjguN2wtMS44LDMuMWwtMTQuOSwyNWgtMy4zbC0xNC43LTI1bC0xLjgtMy4xdjI4LjFoLTYuNVYxLjNoOS4ybDE0LDI0LjRsMS43LDNsMS43LTNMMjU3LDEuMw0KCWg5LjF2MzUuNUgyNTkuNXoiLz4NCjxwYXRoIGZpbGw9IiM4ODg4ODgiIGQ9Ik0zMTYuNSwzNi44bC00LjctOC44SDI5MWwtNC41LDguOGgtN2wxOS4yLTM1LjVoNS41bDE5LjUsMzUuNUgzMTYuNXogTTMwMS4yLDguMmwtNy43LDE0LjloMTUuN0wzMDEuMiw4LjJ6DQoJIi8+DQo8cGF0aCBmaWxsPSIjODg4ODg4IiBkPSJNMzUwLjYsNi44djMwaC02Ljd2LTMwaC0xNS41VjEuM2gzNy43djUuNUgzNTAuNnoiLz4NCjxwYXRoIGZpbGw9IiM4ODg4ODgiIGQ9Ik0zOTkuNSw2Ljh2MzBoLTYuN3YtMzBoLTE1LjVWMS4zSDQxNXY1LjVIMzk5LjV6Ii8+DQo8cGF0aCBmaWxsPSIjODg4ODg4IiBkPSJNNDMxLjQsMzYuOFY0LjZjMi43LDAsMy43LTEuNCwzLjctMy40aDIuOHYzNS41SDQzMS40eiIvPg0KPHBhdGggZmlsbD0iIzg4ODg4OCIgZD0iTTQ5MC4yLDExLjNjLTMuMi0yLjktNy45LTUuNy0xNC4yLTUuN2MtOS41LDAtMTQuOCw2LjUtMTQuOCwxMy4zdjAuN2MwLDYuNyw1LjQsMTMsMTUuMywxMw0KCWM1LjksMCwxMC44LTIuOCwxMy45LTUuN2w0LDQuMmMtMy45LDMuOC0xMC41LDcuMS0xOC4zLDcuMWMtMTMuNCwwLTIxLjYtOC43LTIxLjYtMTguM3YtMS4yYzAtOS42LDguOS0xOC43LDIxLjktMTguNw0KCWM3LjUsMCwxNC4zLDMuMSwxOCw3LjFMNDkwLjIsMTEuM3oiLz4NCjxwYXRoIGZpbGw9IiM4ODg4ODgiIGQ9Ik0xODMuNiwxMi40YzEuMiwwLjgsMS41LDIuNCwwLjgsMy42bC02LjEsOS40Yy0wLjgsMS4yLTIuNCwxLjYtMy42LDAuOGwwLDBjLTEuMi0wLjgtMS41LTIuNC0wLjgtMy42DQoJbDYuMS05LjRDMTgwLjgsMTEuOSwxODIuNCwxMS42LDE4My42LDEyLjRMMTgzLjYsMTIuNHoiLz4NCjwvc3ZnPg0K" alt="Automattic" width="165" height="14" /></a> Experiment</p>
		</div>
	</div><!-- #footer -->
</div><!-- #page -->

<!--  -->
<script type="text/javascript">if(jQuery.VideoPress){jQuery.VideoPress.video.flash.params.wmode="opaque";}</script><script src=\'//0.gravatar.com/js/gprofiles.js?ver=202113y\' id=\'grofiles-cards-js\'></script>
<script id=\'wpgroho-js-extra\'>
var WPGroHo = {"my_hash":""};
</script>
<script type=\'text/javascript\' src=\'https://s0.wp.com/wp-content/mu-plugins/gravatar-hovercards/wpgroho.js?m=1610363240h\'></script>

	<script>
		// Initialize and attach hovercards to all gravatars
		( function() {
			function init() {
				if ( typeof Gravatar === \'undefined\' ) {
					return;
				}

				if ( typeof Gravatar.init !== \'function\' ) {
					return;
				}

				Gravatar.profile_cb = function ( hash, id ) {
					WPGroHo.syncProfileData( hash, id );
				};

				Gravatar.my_hash = WPGroHo.my_hash;
				Gravatar.init( \'body\', \'#wp-admin-bar-my-account\' );
			}

			if ( document.readyState !== \'loading\' ) {
				init();
			} else {
				document.addEventListener( \'DOMContentLoaded\', init );
			}
		} )();
	</script>

		<div style="display:none">
	<div class="grofile-hash-map-d50b88f026bbac00217ca2858a30d630">
	</div>
	</div>
<script id=\'highlander-comments-js-extra\'>
var HighlanderComments = {"loggingInText":"Logging In\\u2026","submittingText":"Posting Comment\\u2026","postCommentText":"Post Comment","connectingToText":"Connecting to %s","commentingAsText":"%1$s: You are commenting using your %2$s account.","logoutText":"Log Out","loginText":"Log In","connectURL":"https:\\/\\/wptv.wordpress.com\\/public.api\\/connect\\/?action=request&domain=wordpress.tv","logoutURL":"https:\\/\\/wptv.wordpress.com\\/wp-login.php?action=logout&_wpnonce=30f6aeebb5","homeURL":"https:\\/\\/wordpress.tv\\/","postID":"21728","gravDefault":"mystery","enterACommentError":"Please enter a comment","enterEmailError":"Please enter your email address here","invalidEmailError":"Invalid email address","enterAuthorError":"Please enter your name here","gravatarFromEmail":"This picture will show whenever you leave a comment. Click to customize it.","logInToExternalAccount":"Log in to use details from one of these accounts.","change":"Change","changeAccount":"Change Account","comment_registration":"","userIsLoggedIn":"","isJetpack":"","text_direction":"ltr"};
</script>
<script type=\'text/javascript\' src=\'https://s0.wp.com/_static/??/wp-content/js/jquery/jquery.autoresize.js,/wp-content/mu-plugins/highlander-comments/script.js?m=1573483029j\'></script>

<script>
window.addEventListener( "load", function( event ) {
	var link = document.createElement( "link" );
	link.href = "https://s0.wp.com/wp-content/mu-plugins/actionbar/actionbar.css?v=20201002";
	link.type = "text/css";
	link.rel = "stylesheet";
	document.head.appendChild( link );

	var script = document.createElement( "script" );
	script.src = "https://s0.wp.com/wp-content/mu-plugins/actionbar/actionbar.js?v=20201002";
	script.defer = true;
	document.body.appendChild( script );
} );
</script>

	
	<script type="text/javascript">
		window.WPCOM_sharing_counts = {"https:\\/\\/wordpress.tv\\/2013\\/09\\/06\\/dave-ross-optimize-image-files-like-a-pro\\/":21728};
	</script>
					<div id="sharing_email" style="display: none;">
		<form action="/2013/09/06/dave-ross-optimize-image-files-like-a-pro/" method="post">
			<label for="target_email">Send to Email Address</label>
			<input type="email" name="target_email" id="target_email" value="" />

			
				<label for="source_name">Your Name</label>
				<input type="text" name="source_name" id="source_name" value="" />

				<label for="source_email">Your Email Address</label>
				<input type="email" name="source_email" id="source_email" value="" />

						<input type="text" id="jetpack-source_f_name" name="source_f_name" class="input" value="" size="25" autocomplete="off" title="This field is for validation and should not be changed" />
			
			<div
				class="g-recaptcha"
				data-sitekey="6LcmyE0UAAAAALID28yVNg7pFCodGaArJzHitez_"
				data-theme="light"
				data-type="image"
				data-tabindex="0"
				data-lazy="true"
				data-url="https://www.google.com/recaptcha/api.js?hl=en"></div>
			
			<img style="float: right; display: none" class="loading" src="https://s0.wp.com/wp-content/mu-plugins/post-flair/sharing/images/loading.gif" alt="loading" width="16" height="16" />
			<input type="submit" value="Send Email" class="sharing_send" />
			<a rel="nofollow" href="#cancel" class="sharing_cancel" role="button">Cancel</a>

			<div class="errors errors-1" style="display: none;">
				Post was not sent - check your email addresses!			</div>

			<div class="errors errors-2" style="display: none;">
				Email check failed, please try again			</div>

			<div class="errors errors-3" style="display: none;">
				Sorry, your blog cannot share posts by email.			</div>
		</form>
	</div>
<script id=\'comment-like-js-extra\'>
var comment_like_text = {"loading":"Loading..."};
</script>
<script type=\'text/javascript\' src=\'https://s0.wp.com/_static/??-eJyFj02OwjAMhS80qalGGmCBOApKEwNO4zTECR04PUHAogKVlX/e+55lGKMyQ8gYMjgBi2cyGP8bJz8wleIgmVFEH/CD6k4F0+VZGgpnwvGrzWGO2vQqodD1LZWLir4cKAh46lGgQgWPOliPacZsBua6Ug/I3ekOZKQ4d+ENmixeIAXji50aEkZ/aZjCTLq2VVedTsBaMqbaqZzq6x+T64jcof0W2pMwZvXbLGBXedgPiat/y5v2r12261W7WLobBUWyiw==\'></script>
<script id=\'crowdsignal-rating-js-before\'>
<!--//--><![CDATA[//><!--
PDRTJS_settings_29399_post_21728={"id":29399,"unique_id":"wp-post-21728","title":"Dave%20Ross%3A%20Optimize%20Image%20Files%20Like%20a%26nbsp%3BPro","permalink":"https:\\/\\/wordpress.tv\\/2013\\/09\\/06\\/dave-ross-optimize-image-files-like-a-pro\\/","item_id":"_post_21728"}; if ( typeof PDRTJS_RATING !== \'undefined\' ){if ( typeof PDRTJS_29399_post_21728 == \'undefined\' ){PDRTJS_29399_post_21728 = new PDRTJS_RATING( PDRTJS_settings_29399_post_21728 );}}PDRTJS_settings_29399_post_21728={"id":29399,"unique_id":"wp-post-21728","title":"Dave%20Ross%3A%20Optimize%20Image%20Files%20Like%20a%26nbsp%3BPro","permalink":"https:\\/\\/wordpress.tv\\/2013\\/09\\/06\\/dave-ross-optimize-image-files-like-a-pro\\/","item_id":"_post_21728"}; if ( typeof PDRTJS_RATING !== \'undefined\' ){if ( typeof PDRTJS_29399_post_21728 == \'undefined\' ){PDRTJS_29399_post_21728 = new PDRTJS_RATING( PDRTJS_settings_29399_post_21728 );}}
//--><!]]>
</script>
<script src=\'https://polldaddy.com/js/rating/rating.js?ver=wpcom\' id=\'crowdsignal-rating-js\'></script>
<script id=\'sharing-js-js-extra\'>
var sharing_js_options = {"lang":"en","counts":"1","is_stats_active":"1"};
</script>
<script type=\'text/javascript\' src=\'https://s0.wp.com/wp-content/mu-plugins/post-flair/sharing/sharing.js?m=1611055338h\'></script>
<script type=\'text/javascript\'>
var windowOpen;
			( function () {
				function matches( el, sel ) {
					return !! (
						el.matches && el.matches( sel ) ||
						el.msMatchesSelector && el.msMatchesSelector( sel )
					);
				}

				document.body.addEventListener( \'click\', function ( event ) {
					if ( ! event.target ) {
						return;
					}

					var el;
					if ( matches( event.target, \'a.share-twitter\' ) ) {
						el = event.target;
					} else if ( event.target.parentNode && matches( event.target.parentNode, \'a.share-twitter\' ) ) {
						el = event.target.parentNode;
					}

					if ( el ) {
						event.preventDefault();

						// If there\'s another sharing window open, close it.
						if ( typeof windowOpen !== \'undefined\' ) {
							windowOpen.close();
						}
						windowOpen = window.open( el.getAttribute( \'href\' ), \'wpcomtwitter\', \'menubar=1,resizable=1,width=600,height=350\' );
						return false;
					}
				} );
			} )();
var windowOpen;
			( function () {
				function matches( el, sel ) {
					return !! (
						el.matches && el.matches( sel ) ||
						el.msMatchesSelector && el.msMatchesSelector( sel )
					);
				}

				document.body.addEventListener( \'click\', function ( event ) {
					if ( ! event.target ) {
						return;
					}

					var el;
					if ( matches( event.target, \'a.share-facebook\' ) ) {
						el = event.target;
					} else if ( event.target.parentNode && matches( event.target.parentNode, \'a.share-facebook\' ) ) {
						el = event.target.parentNode;
					}

					if ( el ) {
						event.preventDefault();

						// If there\'s another sharing window open, close it.
						if ( typeof windowOpen !== \'undefined\' ) {
							windowOpen.close();
						}
						windowOpen = window.open( el.getAttribute( \'href\' ), \'wpcomfacebook\', \'menubar=1,resizable=1,width=600,height=400\' );
						return false;
					}
				} );
			} )();
var windowOpen;
			( function () {
				function matches( el, sel ) {
					return !! (
						el.matches && el.matches( sel ) ||
						el.msMatchesSelector && el.msMatchesSelector( sel )
					);
				}

				document.body.addEventListener( \'click\', function ( event ) {
					if ( ! event.target ) {
						return;
					}

					var el;
					if ( matches( event.target, \'a.share-linkedin\' ) ) {
						el = event.target;
					} else if ( event.target.parentNode && matches( event.target.parentNode, \'a.share-linkedin\' ) ) {
						el = event.target.parentNode;
					}

					if ( el ) {
						event.preventDefault();

						// If there\'s another sharing window open, close it.
						if ( typeof windowOpen !== \'undefined\' ) {
							windowOpen.close();
						}
						windowOpen = window.open( el.getAttribute( \'href\' ), \'wpcomlinkedin\', \'menubar=1,resizable=1,width=580,height=450\' );
						return false;
					}
				} );
			} )();
var windowOpen;
			( function () {
				function matches( el, sel ) {
					return !! (
						el.matches && el.matches( sel ) ||
						el.msMatchesSelector && el.msMatchesSelector( sel )
					);
				}

				document.body.addEventListener( \'click\', function ( event ) {
					if ( ! event.target ) {
						return;
					}

					var el;
					if ( matches( event.target, \'a.share-pocket\' ) ) {
						el = event.target;
					} else if ( event.target.parentNode && matches( event.target.parentNode, \'a.share-pocket\' ) ) {
						el = event.target.parentNode;
					}

					if ( el ) {
						event.preventDefault();

						// If there\'s another sharing window open, close it.
						if ( typeof windowOpen !== \'undefined\' ) {
							windowOpen.close();
						}
						windowOpen = window.open( el.getAttribute( \'href\' ), \'wpcompocket\', \'menubar=1,resizable=1,width=450,height=450\' );
						return false;
					}
				} );
			} )();
</script>
<script type="text/javascript">
// <![CDATA[
(function() {
try{
  if ( window.external &&\'msIsSiteMode\' in window.external) {
    if (window.external.msIsSiteMode()) {
      var jl = document.createElement(\'script\');
      jl.type=\'text/javascript\';
      jl.async=true;
      jl.src=\'/wp-content/plugins/ie-sitemode/custom-jumplist.php\';
      var s = document.getElementsByTagName(\'script\')[0];
      s.parentNode.insertBefore(jl, s);
    }
  }
}catch(e){}
})();
// ]]>
</script>		<iframe src=\'https://widgets.wp.com/likes/master.html?ver=20210317#ver=20210317&amp;origin=https://wordpress.tv\' scrolling=\'no\' id=\'likes-master\' name=\'likes-master\' style=\'display:none;\'></iframe>
		<div id=\'likes-other-gravatars\'><div class="likes-text"><span>%d</span> bloggers like this:</div><ul class="wpl-avatars sd-like-gravatars"></ul></div>
<script src="//stats.wp.com/w.js?61" defer></script> <script type="text/javascript">
_tkq = window._tkq || [];
_stq = window._stq || [];
_tkq.push([\'storeContext\', {\'blog_id\':\'5089392\',\'blog_tz\':\'-7\',\'user_lang\':\'en\',\'blog_lang\':\'en\',\'user_id\':\'0\'}]);
_stq.push([\'view\', {\'blog\':\'5089392\',\'v\':\'wpcom\',\'tz\':\'-7\',\'user_id\':\'0\',\'post\':\'21728\',\'subd\':\'wptv\'}]);
_stq.push([\'extra\', {\'crypt\':\'UE40eW5QN0p8M2Y/RE1lSiYrZXhzUkM5fD1uTDNLUGt6QzVbd3FKb3Q4aWxFU0VMK3ppSU9RRkVyRmw/bFF4N29ZdnF3Lnxoc0xRaWorQ09SJS14UzNlbj9xNTEsMWpEXUoyZUtHeW9sd01OTS5sZ3BdU3ExbTM4d3gyLlotQzJSXyVyR2xtdWYrVnM/dFBVV244fmx1bTlUaD9BOWldNEpmLGdzTVZCPSxjZ2d0dlFxNSVpXWxrJnd8dU5pdk5fQyZ0WUhSUkdaLWJvbTMldVZOakF+Z3E4fC4laGl4UFRIX1UlP35PdGJXLyx2a3V+WXJkSHlCLy5LPXYxdlolWUh4aVQwJXVnZWpXRSZ0RXIvLWEuWEJLXXhQW2s4OXpWMTJnV2lWdU9ULVJmdXo2JVN+Rll4RGY=\'}]);
_stq.push([ \'clickTrackerInit\', \'5089392\', \'21728\' ]);
	</script>
<noscript><img src="https://pixel.wp.com/b.gif?v=noscript" style="height:1px;width:1px;overflow:hidden;position:absolute;bottom:1px;" alt="" /></noscript>
<script>
if ( \'object\' === typeof wpcom_mobile_user_agent_info ) {

	wpcom_mobile_user_agent_info.init();
	var mobileStatsQueryString = "";
	
	if( false !== wpcom_mobile_user_agent_info.matchedPlatformName )
		mobileStatsQueryString += "&x_" + \'mobile_platforms\' + \'=\' + wpcom_mobile_user_agent_info.matchedPlatformName;
	
	if( false !== wpcom_mobile_user_agent_info.matchedUserAgentName )
		mobileStatsQueryString += "&x_" + \'mobile_devices\' + \'=\' + wpcom_mobile_user_agent_info.matchedUserAgentName;
	
	if( wpcom_mobile_user_agent_info.isIPad() )
		mobileStatsQueryString += "&x_" + \'ipad_views\' + \'=\' + \'views\';

	if( "" != mobileStatsQueryString ) {
		new Image().src = document.location.protocol + \'//pixel.wp.com/g.gif?v=wpcom-no-pv\' + mobileStatsQueryString + \'&baba=\' + Math.random();
	}
	
}
</script></body>
</html>
'
];
