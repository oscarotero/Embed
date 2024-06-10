<?php
declare(strict_types = 1);

return [
    'headers' => [
        'server' => [
            'nginx',
            'nginx'
        ],
        'date' => [
            'Mon, 10 Jun 2024 15:59:21 GMT',
            'Mon, 10 Jun 2024 15:59:21 GMT'
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
            '3.mad _dca BYPASS',
            '3.mad _dca HIT'
        ],
        'alt-svc' => [
            'h3=":443"; ma=86400  HTTP/2 200',
            'h3=":443"; ma=86400'
        ],
        'strict-transport-security' => [
            'max-age=31536000',
            'max-age=31536000'
        ],
        'vary' => [
            'Accept-Encoding',
            'accept, content-type, cookie'
        ],
        'x-hacker' => [
            'Want root?  Visit join.a8c.com/hacker and mention this header.'
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
            'br'
        ],
        'Content-Location' => [
            'https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/'
        ],
        'X-Request-Time' => [
            '0.119 ms'
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
					+ \'//\' + window.location.hostname
					+ \'&postid=21728\'
					+ \'&is_singular=1\';
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
		+ "&time=1718035079";
	document.body.appendChild( iframe );
}, false );
</script>
<link rel=\'dns-prefetch\' href=\'//s0.wp.com\' />
<link rel=\'dns-prefetch\' href=\'//stats.wp.com\' />
<link rel=\'dns-prefetch\' href=\'//widgets.wp.com\' />
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
/* <![CDATA[ */
window._wpemojiSettings = {"baseUrl":"https:\\/\\/s0.wp.com\\/wp-content\\/mu-plugins\\/wpcom-smileys\\/twemoji\\/2\\/72x72\\/","ext":".png","svgUrl":"https:\\/\\/s0.wp.com\\/wp-content\\/mu-plugins\\/wpcom-smileys\\/twemoji\\/2\\/svg\\/","svgExt":".svg","source":{"concatemoji":"https:\\/\\/s0.wp.com\\/wp-includes\\/js\\/wp-emoji-release.min.js?m=1710334132i&ver=6.6-beta1-58352"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\\ud83c\\udff3\\ufe0f\\u200d\\u26a7\\ufe0f","\\ud83c\\udff3\\ufe0f\\u200b\\u26a7\\ufe0f")?!1:!n(e,"\\ud83c\\uddfa\\ud83c\\uddf3","\\ud83c\\uddfa\\u200b\\ud83c\\uddf3")&&!n(e,"\\ud83c\\udff4\\udb40\\udc67\\udb40\\udc62\\udb40\\udc65\\udb40\\udc6e\\udb40\\udc67\\udb40\\udc7f","\\ud83c\\udff4\\u200b\\udb40\\udc67\\u200b\\udb40\\udc62\\u200b\\udb40\\udc65\\u200b\\udb40\\udc6e\\u200b\\udb40\\udc67\\u200b\\udb40\\udc7f");case"emoji":return!n(e,"\\ud83d\\udc26\\u200d\\u2b1b","\\ud83d\\udc26\\u200b\\u2b1b")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
/* ]]> */
</script>
<link crossorigin=\'anonymous\' rel=\'stylesheet\' id=\'all-css-0-1\' href=\'https://s0.wp.com/wp-content/mu-plugins/likes/jetpack-likes.css?m=1717404074i&cssminify=yes\' type=\'text/css\' media=\'all\' />
<style id=\'wp-emoji-styles-inline-css\'>

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<link crossorigin=\'anonymous\' rel=\'stylesheet\' id=\'all-css-2-1\' href=\'https://s0.wp.com/wp-includes/css/dist/block-library/style.min.css?m=1717674478i&cssminify=yes\' type=\'text/css\' media=\'all\' />
<link crossorigin=\'anonymous\' rel=\'stylesheet\' id=\'all-css-4-1\' href=\'https://s0.wp.com/_static/??-eJzTLy/QzcxLzilNSS3WzyrWz01NyUxMzUnNTc0rQeEU5CRWphbp5qSmJyZX6uVm5uklFxfr6OPTDpRD5sM02efaGpoZmFkYGRuZGmQBAHPvL0Y=&cssminify=yes\' type=\'text/css\' media=\'all\' />
<style id=\'jetpack-sharing-buttons-style-inline-css\'>
.jetpack-sharing-buttons__services-list{display:flex;flex-direction:row;flex-wrap:wrap;gap:0;list-style-type:none;margin:5px;padding:0}.jetpack-sharing-buttons__services-list.has-small-icon-size{font-size:12px}.jetpack-sharing-buttons__services-list.has-normal-icon-size{font-size:16px}.jetpack-sharing-buttons__services-list.has-large-icon-size{font-size:24px}.jetpack-sharing-buttons__services-list.has-huge-icon-size{font-size:36px}@media print{.jetpack-sharing-buttons__services-list{display:none!important}}.editor-styles-wrapper .wp-block-jetpack-sharing-buttons{gap:0;padding-inline-start:0}ul.jetpack-sharing-buttons__services-list.has-background{padding:1.25em 2.375em}
</style>
<link crossorigin=\'anonymous\' rel=\'stylesheet\' id=\'all-css-6-1\' href=\'https://s0.wp.com/_static/??-eJyVzDEOgCAMQNELiQU1Jg7Gs2AlDYpAaInx9ro5O/7hfbiywhTFRYEcKvnIQPXN1RVSa0h4MOxOssVDBXunKoqK34DlDq5F5gb+LIoVH4k/vpyzGYe+03oyw/4AcmU1KQ==&cssminify=yes\' type=\'text/css\' media=\'all\' />
<style id=\'classic-theme-styles-inline-css\'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id=\'global-styles-inline-css\'>
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--font-family--albert-sans: \'Albert Sans\', sans-serif;--wp--preset--font-family--alegreya: Alegreya, serif;--wp--preset--font-family--arvo: Arvo, serif;--wp--preset--font-family--bodoni-moda: \'Bodoni Moda\', serif;--wp--preset--font-family--bricolage-grotesque: \'Bricolage Grotesque\', sans-serif;--wp--preset--font-family--cabin: Cabin, sans-serif;--wp--preset--font-family--chivo: Chivo, sans-serif;--wp--preset--font-family--commissioner: Commissioner, sans-serif;--wp--preset--font-family--cormorant: Cormorant, serif;--wp--preset--font-family--courier-prime: \'Courier Prime\', monospace;--wp--preset--font-family--crimson-pro: \'Crimson Pro\', serif;--wp--preset--font-family--dm-mono: \'DM Mono\', monospace;--wp--preset--font-family--dm-sans: \'DM Sans\', sans-serif;--wp--preset--font-family--dm-serif-display: \'DM Serif Display\', serif;--wp--preset--font-family--domine: Domine, serif;--wp--preset--font-family--eb-garamond: \'EB Garamond\', serif;--wp--preset--font-family--epilogue: Epilogue, sans-serif;--wp--preset--font-family--fahkwang: Fahkwang, sans-serif;--wp--preset--font-family--figtree: Figtree, sans-serif;--wp--preset--font-family--fira-sans: \'Fira Sans\', sans-serif;--wp--preset--font-family--fjalla-one: \'Fjalla One\', sans-serif;--wp--preset--font-family--fraunces: Fraunces, serif;--wp--preset--font-family--gabarito: Gabarito, system-ui;--wp--preset--font-family--ibm-plex-mono: \'IBM Plex Mono\', monospace;--wp--preset--font-family--ibm-plex-sans: \'IBM Plex Sans\', sans-serif;--wp--preset--font-family--ibarra-real-nova: \'Ibarra Real Nova\', serif;--wp--preset--font-family--instrument-serif: \'Instrument Serif\', serif;--wp--preset--font-family--inter: Inter, sans-serif;--wp--preset--font-family--josefin-sans: \'Josefin Sans\', sans-serif;--wp--preset--font-family--jost: Jost, sans-serif;--wp--preset--font-family--libre-baskerville: \'Libre Baskerville\', serif;--wp--preset--font-family--libre-franklin: \'Libre Franklin\', sans-serif;--wp--preset--font-family--literata: Literata, serif;--wp--preset--font-family--lora: Lora, serif;--wp--preset--font-family--merriweather: Merriweather, serif;--wp--preset--font-family--montserrat: Montserrat, sans-serif;--wp--preset--font-family--newsreader: Newsreader, serif;--wp--preset--font-family--noto-sans-mono: \'Noto Sans Mono\', sans-serif;--wp--preset--font-family--nunito: Nunito, sans-serif;--wp--preset--font-family--open-sans: \'Open Sans\', sans-serif;--wp--preset--font-family--overpass: Overpass, sans-serif;--wp--preset--font-family--pt-serif: \'PT Serif\', serif;--wp--preset--font-family--petrona: Petrona, serif;--wp--preset--font-family--piazzolla: Piazzolla, serif;--wp--preset--font-family--playfair-display: \'Playfair Display\', serif;--wp--preset--font-family--plus-jakarta-sans: \'Plus Jakarta Sans\', sans-serif;--wp--preset--font-family--poppins: Poppins, sans-serif;--wp--preset--font-family--raleway: Raleway, sans-serif;--wp--preset--font-family--roboto: Roboto, sans-serif;--wp--preset--font-family--roboto-slab: \'Roboto Slab\', serif;--wp--preset--font-family--rubik: Rubik, sans-serif;--wp--preset--font-family--rufina: Rufina, serif;--wp--preset--font-family--sora: Sora, sans-serif;--wp--preset--font-family--source-sans-3: \'Source Sans 3\', sans-serif;--wp--preset--font-family--source-serif-4: \'Source Serif 4\', serif;--wp--preset--font-family--space-mono: \'Space Mono\', monospace;--wp--preset--font-family--syne: Syne, sans-serif;--wp--preset--font-family--texturina: Texturina, serif;--wp--preset--font-family--urbanist: Urbanist, sans-serif;--wp--preset--font-family--work-sans: \'Work Sans\', sans-serif;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}.has-albert-sans-font-family{font-family: var(--wp--preset--font-family--albert-sans) !important;}.has-alegreya-font-family{font-family: var(--wp--preset--font-family--alegreya) !important;}.has-arvo-font-family{font-family: var(--wp--preset--font-family--arvo) !important;}.has-bodoni-moda-font-family{font-family: var(--wp--preset--font-family--bodoni-moda) !important;}.has-bricolage-grotesque-font-family{font-family: var(--wp--preset--font-family--bricolage-grotesque) !important;}.has-cabin-font-family{font-family: var(--wp--preset--font-family--cabin) !important;}.has-chivo-font-family{font-family: var(--wp--preset--font-family--chivo) !important;}.has-commissioner-font-family{font-family: var(--wp--preset--font-family--commissioner) !important;}.has-cormorant-font-family{font-family: var(--wp--preset--font-family--cormorant) !important;}.has-courier-prime-font-family{font-family: var(--wp--preset--font-family--courier-prime) !important;}.has-crimson-pro-font-family{font-family: var(--wp--preset--font-family--crimson-pro) !important;}.has-dm-mono-font-family{font-family: var(--wp--preset--font-family--dm-mono) !important;}.has-dm-sans-font-family{font-family: var(--wp--preset--font-family--dm-sans) !important;}.has-dm-serif-display-font-family{font-family: var(--wp--preset--font-family--dm-serif-display) !important;}.has-domine-font-family{font-family: var(--wp--preset--font-family--domine) !important;}.has-eb-garamond-font-family{font-family: var(--wp--preset--font-family--eb-garamond) !important;}.has-epilogue-font-family{font-family: var(--wp--preset--font-family--epilogue) !important;}.has-fahkwang-font-family{font-family: var(--wp--preset--font-family--fahkwang) !important;}.has-figtree-font-family{font-family: var(--wp--preset--font-family--figtree) !important;}.has-fira-sans-font-family{font-family: var(--wp--preset--font-family--fira-sans) !important;}.has-fjalla-one-font-family{font-family: var(--wp--preset--font-family--fjalla-one) !important;}.has-fraunces-font-family{font-family: var(--wp--preset--font-family--fraunces) !important;}.has-gabarito-font-family{font-family: var(--wp--preset--font-family--gabarito) !important;}.has-ibm-plex-mono-font-family{font-family: var(--wp--preset--font-family--ibm-plex-mono) !important;}.has-ibm-plex-sans-font-family{font-family: var(--wp--preset--font-family--ibm-plex-sans) !important;}.has-ibarra-real-nova-font-family{font-family: var(--wp--preset--font-family--ibarra-real-nova) !important;}.has-instrument-serif-font-family{font-family: var(--wp--preset--font-family--instrument-serif) !important;}.has-inter-font-family{font-family: var(--wp--preset--font-family--inter) !important;}.has-josefin-sans-font-family{font-family: var(--wp--preset--font-family--josefin-sans) !important;}.has-jost-font-family{font-family: var(--wp--preset--font-family--jost) !important;}.has-libre-baskerville-font-family{font-family: var(--wp--preset--font-family--libre-baskerville) !important;}.has-libre-franklin-font-family{font-family: var(--wp--preset--font-family--libre-franklin) !important;}.has-literata-font-family{font-family: var(--wp--preset--font-family--literata) !important;}.has-lora-font-family{font-family: var(--wp--preset--font-family--lora) !important;}.has-merriweather-font-family{font-family: var(--wp--preset--font-family--merriweather) !important;}.has-montserrat-font-family{font-family: var(--wp--preset--font-family--montserrat) !important;}.has-newsreader-font-family{font-family: var(--wp--preset--font-family--newsreader) !important;}.has-noto-sans-mono-font-family{font-family: var(--wp--preset--font-family--noto-sans-mono) !important;}.has-nunito-font-family{font-family: var(--wp--preset--font-family--nunito) !important;}.has-open-sans-font-family{font-family: var(--wp--preset--font-family--open-sans) !important;}.has-overpass-font-family{font-family: var(--wp--preset--font-family--overpass) !important;}.has-pt-serif-font-family{font-family: var(--wp--preset--font-family--pt-serif) !important;}.has-petrona-font-family{font-family: var(--wp--preset--font-family--petrona) !important;}.has-piazzolla-font-family{font-family: var(--wp--preset--font-family--piazzolla) !important;}.has-playfair-display-font-family{font-family: var(--wp--preset--font-family--playfair-display) !important;}.has-plus-jakarta-sans-font-family{font-family: var(--wp--preset--font-family--plus-jakarta-sans) !important;}.has-poppins-font-family{font-family: var(--wp--preset--font-family--poppins) !important;}.has-raleway-font-family{font-family: var(--wp--preset--font-family--raleway) !important;}.has-roboto-font-family{font-family: var(--wp--preset--font-family--roboto) !important;}.has-roboto-slab-font-family{font-family: var(--wp--preset--font-family--roboto-slab) !important;}.has-rubik-font-family{font-family: var(--wp--preset--font-family--rubik) !important;}.has-rufina-font-family{font-family: var(--wp--preset--font-family--rufina) !important;}.has-sora-font-family{font-family: var(--wp--preset--font-family--sora) !important;}.has-source-sans-3-font-family{font-family: var(--wp--preset--font-family--source-sans-3) !important;}.has-source-serif-4-font-family{font-family: var(--wp--preset--font-family--source-serif-4) !important;}.has-space-mono-font-family{font-family: var(--wp--preset--font-family--space-mono) !important;}.has-syne-font-family{font-family: var(--wp--preset--font-family--syne) !important;}.has-texturina-font-family{font-family: var(--wp--preset--font-family--texturina) !important;}.has-urbanist-font-family{font-family: var(--wp--preset--font-family--urbanist) !important;}.has-work-sans-font-family{font-family: var(--wp--preset--font-family--work-sans) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<link crossorigin=\'anonymous\' rel=\'stylesheet\' id=\'all-css-10-1\' href=\'https://s0.wp.com/_static/??-eJx9j0sOwjAMRC9EMBVChQXiLPlYJaVOotihHB9XFRtA3UT2eJ7HgbkYn5NgEqBmytSGmBh8rqg6FSugDsIQLU5Iatt75h38x+YYBhTF+VMbwdc2UjTGOFcqMht9KTYyctcs3uJGlGL9w6i0rlgHwC3BE1PIFWyTTFYk+h83cPXgWpyCmqvTRBWX3/F3v9xwo2vXHy7d8XjuT+MbYd5zrQ==&cssminify=yes\' type=\'text/css\' media=\'all\' />
<link rel=\'stylesheet\' id=\'verbum-gutenberg-css-css\' href=\'https://widgets.wp.com/verbum-block-editor/block-editor.css?ver=1717067639\' media=\'all\' />
<link crossorigin=\'anonymous\' rel=\'stylesheet\' id=\'all-css-12-1\' href=\'https://s0.wp.com/_static/??/wp-content/mu-plugins/comment-likes/css/comment-likes.css,/i/noticons/noticons.css,/wp-content/themes/a8c/wptv2/style.css?m=1587351373j&cssminify=yes\' type=\'text/css\' media=\'all\' />
<!--[if IE 6]>
<link rel=\'stylesheet\' id=\'wptv-ie-css\' href=\'https://s0.wp.com/wp-content/themes/a8c/wptv2/ie6.css?m=1412160810i&#038;ver=6.6-beta1-58352\' media=\'all\' />
<![endif]-->
<link crossorigin=\'anonymous\' rel=\'stylesheet\' id=\'all-css-14-1\' href=\'https://s0.wp.com/_static/??-eJzTLy/QTc7PK0nNK9HPLdUtyClNz8wr1k9PzdfNyU9OLMnMz0Ph6KblJGYW6SUXF+voY9dalJqUk58OZKbrA1UhcUGa7HNtDU1MLU1MLMwNTbIAmkQtqg==&cssminify=yes\' type=\'text/css\' media=\'all\' />
<style id=\'jetpack-global-styles-frontend-style-inline-css\'>
:root { --font-headings: unset; --font-base: unset; --font-headings-default: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif; --font-base-default: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;}
</style>
<link crossorigin=\'anonymous\' rel=\'stylesheet\' id=\'all-css-16-1\' href=\'https://s0.wp.com/_static/??-eJyNjcsKQjEMBX/ImlsQry7ET5GahrbXNCmmRfx7H7gRN+7OwGEGbs2hSifpUIdrPFIRg4V6C3j5MNgQqBoHk4HlcKUYYry/Z5G0RrMV/C06FUEwxRLYsSa1L/iR9Uz1mc0bSKznwK/DsR787Kd5P/ntbnkAuNBIYA==&cssminify=yes\' type=\'text/css\' media=\'all\' />
<script type="text/javascript" id="media-video-jwt-bridge-js-extra">
/* <![CDATA[ */
var videopressAjax = {"ajaxUrl":"https:\\/\\/wptv.wordpress.com\\/wp-admin\\/admin-ajax.php","bridgeUrl":"\\/wp-content\\/mu-plugins\\/jetpack-plugin\\/sun\\/jetpack_vendor\\/automattic\\/jetpack-videopress\\/build\\/lib\\/token-bridge.js","post_id":"21728"};
/* ]]> */
</script>
<script type="text/javascript" id="wpcom-actionbar-placeholder-js-extra">
/* <![CDATA[ */
var actionbardata = {"siteID":"5089392","postID":"21728","siteURL":"https:\\/\\/wordpress.tv","xhrURL":"https:\\/\\/wordpress.tv\\/wp-admin\\/admin-ajax.php","nonce":"fd399fd407","isLoggedIn":"","statusMessage":"","subsEmailDefault":"instantly","proxyScriptUrl":"https:\\/\\/s0.wp.com\\/wp-content\\/js\\/wpcom-proxy-request.js?ver=20211021","shortlink":"https:\\/\\/wp.me\\/pllYY-5Es","i18n":{"followedText":"New posts from this site will now appear in your <a href=\\"https:\\/\\/wordpress.com\\/read\\">Reader<\\/a>","foldBar":"Collapse this bar","unfoldBar":"Expand this bar"}};
/* ]]> */
</script>
<script crossorigin=\'anonymous\' type=\'text/javascript\'  src=\'https://s0.wp.com/_static/??-eJytjcFuwjAQRH8Is0RCaS6IT0FOvKSb2LuWdx3g70mrpmoP3DjOzNM8uGU3CBuywaSQpKeIrioWP66dI77KftId/OdKNJeL3B/bRjzEGlC/xkBq8Cky6z4RvySo6fgvsN2n6nKsI/GKomU/zD8ZtPJWXRbkIAV8NUnejIZf2KuiKfSVYviWuCg+YHm3Z6GAkgvq5orUg8mM7PpCYcRVeE6n5qM5dG177LrpCanAh94=\'></script>
<script type="text/javascript" id="rlt-proxy-js-after">
/* <![CDATA[ */
	window.addEventListener( \'DOMContentLoaded\', function() {
		rltInitialize( {"token":null,"iframeOrigins":["https:\\/\\/widgets.wp.com"]} );
	} );
/* ]]> */
</script>
<script type="text/javascript" id="wp-i18n-js-after">
/* <![CDATA[ */
wp.i18n.setLocaleData( { \'text direction\\u0004ltr\': [ \'ltr\' ] } );
/* ]]> */
</script>
<script type="text/javascript" id="wp-jp-i18n-loader-js-after">
/* <![CDATA[ */
wp.jpI18nLoader.state = {"baseUrl":"https://widgets.wp.com/languages/","locale":"en_US","domainMap":{"jetpack-admin-ui":"plugins/jetpack","jetpack-assets":"plugins/jetpack","jetpack-backup-pkg":"plugins/jetpack","jetpack-blaze":"plugins/jetpack","jetpack-boost-core":"plugins/jetpack","jetpack-boost-speed-score":"plugins/jetpack","jetpack-calypsoify":"plugins/jetpack","jetpack-classic-theme-helper":"plugins/jetpack","jetpack-compat":"plugins/jetpack","jetpack-config":"plugins/jetpack","jetpack-connection":"plugins/jetpack","jetpack-forms":"plugins/jetpack","jetpack-google-analytics":"plugins/jetpack","jetpack-google-fonts-provider":"plugins/jetpack","jetpack-image-cdn":"plugins/jetpack","jetpack-import":"plugins/jetpack","jetpack-ip":"plugins/jetpack","jetpack-jitm":"plugins/jetpack","jetpack-licensing":"plugins/jetpack","jetpack-masterbar":"plugins/jetpack","jetpack-my-jetpack":"plugins/jetpack","jetpack-password-checker":"plugins/jetpack","jetpack-plugins-installer":"plugins/jetpack","jetpack-post-list":"plugins/jetpack","jetpack-publicize-pkg":"plugins/jetpack","jetpack-search-pkg":"plugins/jetpack","jetpack-stats":"plugins/jetpack","jetpack-stats-admin":"plugins/jetpack","jetpack-sync":"plugins/jetpack","jetpack-videopress-pkg":"plugins/jetpack","jetpack-waf":"plugins/jetpack","jetpack-wordads":"plugins/jetpack","woocommerce-analytics":"plugins/jetpack"},"domainPaths":{"jetpack-admin-ui":"jetpack_vendor/automattic/jetpack-admin-ui/","jetpack-assets":"jetpack_vendor/automattic/jetpack-assets/","jetpack-backup-pkg":"jetpack_vendor/automattic/jetpack-backup/","jetpack-blaze":"jetpack_vendor/automattic/jetpack-blaze/","jetpack-boost-core":"jetpack_vendor/automattic/jetpack-boost-core/","jetpack-boost-speed-score":"jetpack_vendor/automattic/jetpack-boost-speed-score/","jetpack-calypsoify":"jetpack_vendor/automattic/jetpack-calypsoify/","jetpack-classic-theme-helper":"jetpack_vendor/automattic/jetpack-classic-theme-helper/","jetpack-compat":"jetpack_vendor/automattic/jetpack-compat/","jetpack-config":"jetpack_vendor/automattic/jetpack-config/","jetpack-connection":"jetpack_vendor/automattic/jetpack-connection/","jetpack-forms":"jetpack_vendor/automattic/jetpack-forms/","jetpack-google-analytics":"jetpack_vendor/automattic/jetpack-google-analytics/","jetpack-google-fonts-provider":"jetpack_vendor/automattic/jetpack-google-fonts-provider/","jetpack-image-cdn":"jetpack_vendor/automattic/jetpack-image-cdn/","jetpack-import":"jetpack_vendor/automattic/jetpack-import/","jetpack-ip":"jetpack_vendor/automattic/jetpack-ip/","jetpack-jitm":"jetpack_vendor/automattic/jetpack-jitm/","jetpack-licensing":"jetpack_vendor/automattic/jetpack-licensing/","jetpack-masterbar":"jetpack_vendor/automattic/jetpack-masterbar/","jetpack-my-jetpack":"jetpack_vendor/automattic/jetpack-my-jetpack/","jetpack-password-checker":"jetpack_vendor/automattic/jetpack-password-checker/","jetpack-plugins-installer":"jetpack_vendor/automattic/jetpack-plugins-installer/","jetpack-post-list":"jetpack_vendor/automattic/jetpack-post-list/","jetpack-publicize-pkg":"jetpack_vendor/automattic/jetpack-publicize/","jetpack-search-pkg":"jetpack_vendor/automattic/jetpack-search/","jetpack-stats":"jetpack_vendor/automattic/jetpack-stats/","jetpack-stats-admin":"jetpack_vendor/automattic/jetpack-stats-admin/","jetpack-sync":"jetpack_vendor/automattic/jetpack-sync/","jetpack-videopress-pkg":"jetpack_vendor/automattic/jetpack-videopress/","jetpack-waf":"jetpack_vendor/automattic/jetpack-waf/","jetpack-wordads":"jetpack_vendor/automattic/jetpack-wordads/","woocommerce-analytics":"jetpack_vendor/automattic/woocommerce-analytics/"}};
/* ]]> */
</script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://wptv.wordpress.com/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress.com" />
<link rel="canonical" href="https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/" />
<link rel=\'shortlink\' href=\'https://wp.me/pllYY-5Es\' />
	<style>
		@font-face {
			font-family: Recoleta;
			font-display: swap;
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
<meta property="og:image:alt" content="" />
<meta property="og:locale" content="en_US" />
<meta property="og:video:type" content="video/mp4" />
<meta property="og:video" content="https://wordpress.tv/wp-content/uploads/2013/08/optimize-image-files.mp4" />
<meta property="og:video:secure_url" content="https://wordpress.tv/wp-content/uploads/2013/08/optimize-image-files.mp4" />
<meta property="article:publisher" content="https://www.facebook.com/WordPresscom" />
<meta name="twitter:creator" content="@Nilovelez" />
<meta name="twitter:site" content="@Nilovelez" />
<meta name="twitter:text:title" content="Dave Ross: Optimize Image Files Like a&nbsp;Pro" />
<meta name="twitter:image" content="https://videos.files.wordpress.com/TqDCJmoq/optimize-image-files_scruberthumbnail_0.jpg?w=640" />
<meta name="twitter:card" content="player" />
<meta name="twitter:player" content="https://videopress.com/v/TqDCJmoq?autoplay=0" />
<meta name="twitter:player:width" content="560" />
<meta name="twitter:player:height" content="315" />
<meta name="twitter:player:stream" content="https://wordpress.tv/wp-content/uploads/2013/08/optimize-image-files.mp4" />
<meta name="twitter:player:stream:content_type" content="video/mp4" />

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
<meta name="application-name" content="WordPress.tv" /><meta name="msapplication-window" content="width=device-width;height=device-height" /><meta name="msapplication-tooltip" content="Engage Yourself with WordPress.tv" /><meta name="description" content="Images, even small ones, can be the biggest files that make up your site. Learn the tools, plugins, and theming techniques you’ll want to start using to shrink your page load times and save your mobile users a few bucks without sacrificing image quality. Presentation Slides &raquo;" />
			<link rel="stylesheet" id="custom-css-css" type="text/css" href="https://s0.wp.com/?custom-css=1&#038;csblog=llYY&#038;cscache=6&#038;csrev=9" />
			<!-- Your Google Analytics Plugin is missing the tracking ID -->
</head>

<body class="post-template-default single single-post postid-21728 single-format-standard jps-theme-a8c/wptv2 customizer-styles-applied jetpack-reblog-enabled">
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
<li id="menu-item-115905" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-115905"><a href="https://wordpress.tv/category/wordpress-meetup/">Meetups</a></li>
<li id="menu-item-115906" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-115906"><a href="https://wordpress.tv/category/keynote/">Keynotes</a></li>
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
			<iframe title=\'VideoPress Video Player\' aria-label=\'VideoPress Video Player\' width=\'940\' height=\'529\' src=\'https://video.wordpress.com/embed/TqDCJmoq?hd=1&amp;autoPlay=0&amp;permalink=1&amp;loop=0&amp;preloadContent=metadata&amp;muted=0&amp;playsinline=0&amp;controls=1&amp;cover=1\' frameborder=\'0\' allowfullscreen  allow=\'clipboard-write\' ></iframe><script src=\'https://v0.wordpress.com/js/next/videopress-iframe.js?m=1674852142\'></script>
<div id="jp-post-flair" class="sharedaddy sd-rating-enabled sd-like-enabled sd-sharing-enabled"><div class="sd-block sd-rating"><h3 class="sd-title">Rate this:</h3><div class="cs-rating pd-rating" id="pd_rating_holder_29399_post_21728"></div></div><div class="sharedaddy sd-sharing-enabled"><div class="robots-nocontent sd-block sd-social sd-social-icon-text sd-sharing"><div class="sd-content"><ul><li class="share-twitter"><a rel="nofollow noopener noreferrer" data-shared="sharing-twitter-21728" class="share-twitter sd-button share-icon" href="https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/?share=twitter" target="_blank" title="Click to share on Twitter" ><span>Twitter</span></a></li><li class="share-facebook"><a rel="nofollow noopener noreferrer" data-shared="sharing-facebook-21728" class="share-facebook sd-button share-icon" href="https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/?share=facebook" target="_blank" title="Click to share on Facebook" ><span>Facebook</span></a></li><li class="share-linkedin"><a rel="nofollow noopener noreferrer" data-shared="sharing-linkedin-21728" class="share-linkedin sd-button share-icon" href="https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/?share=linkedin" target="_blank" title="Click to share on LinkedIn" ><span>LinkedIn</span></a></li><li class="share-email"><a rel="nofollow noopener noreferrer" data-shared="" class="share-email sd-button share-icon" href="mailto:?subject=%5BShared%20Post%5D%20Dave%20Ross%3A%20Optimize%20Image%20Files%20Like%20a%20Pro&body=https%3A%2F%2Fwordpress.tv%2F2013%2F09%2F06%2Fdave-ross-optimize-image-files-like-a-pro%2F&share=email" target="_blank" title="Click to email a link to a friend" data-email-share-error-title="Do you have email set up?" data-email-share-error-text="If you&#039;re having problems sharing via email, you might not have email set up for your browser. You may need to create a new email yourself." data-email-share-nonce="f28ad7206b" data-email-share-track-url="https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/?share=email"><span>Email</span></a></li><li class="share-end"></li></ul></div></div></div><div class=\'sharedaddy sd-block sd-like jetpack-likes-widget-wrapper jetpack-likes-widget-unloaded\' id=\'like-post-wrapper-5089392-21728-666722877a3e1\' data-src=\'//widgets.wp.com/likes/index.html?ver=20240610#blog_id=5089392&amp;post_id=21728&amp;origin=wptv.wordpress.com&amp;obj_id=5089392-21728-666722877a3e1&amp;domain=wordpress.tv\' data-name=\'like-post-frame-5089392-21728-666722877a3e1\' data-title=\'Like or Reblog\'><div class=\'likes-widget-placeholder post-likes-widget-placeholder\' style=\'height: 55px;\'><span class=\'button\'><span>Like</span></span> <span class=\'loading\'>Loading...</span></div><span class=\'sd-text-color\'></span><a class=\'sd-link-color\'></a></div></div>		</div>

	</div><!-- .container -->
</div><!-- .wptv-hero -->

<div class="container">
	<div class="primary-content">
		<div id="content">
			<div id="comments">
					<h3 id="comments">
		One response on &ldquo;<span>Dave Ross: Optimize Image Files Like a&nbsp;Pro</span>&rdquo;	</h3>

	<ol class="commentlist">
				<li class="comment even thread-even depth-1" id="comment-207402">
			<cite class="authorinfo">
				<img alt=\'\' src=\'https://2.gravatar.com/avatar/2cc327cdb152d4e7afb861c2868b49fa7dbd275cb4868d8f9771d93082cffc0d?s=24&#038;d=https%3A%2F%2F2.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D24&#038;r=G\' srcset=\'https://2.gravatar.com/avatar/2cc327cdb152d4e7afb861c2868b49fa7dbd275cb4868d8f9771d93082cffc0d?s=24&#038;d=https%3A%2F%2F2.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D24&#038;r=G 1x, https://2.gravatar.com/avatar/2cc327cdb152d4e7afb861c2868b49fa7dbd275cb4868d8f9771d93082cffc0d?s=36&#038;d=https%3A%2F%2F2.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D36&#038;r=G 1.5x, https://2.gravatar.com/avatar/2cc327cdb152d4e7afb861c2868b49fa7dbd275cb4868d8f9771d93082cffc0d?s=48&#038;d=https%3A%2F%2F2.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D48&#038;r=G 2x, https://2.gravatar.com/avatar/2cc327cdb152d4e7afb861c2868b49fa7dbd275cb4868d8f9771d93082cffc0d?s=72&#038;d=https%3A%2F%2F2.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D72&#038;r=G 3x, https://2.gravatar.com/avatar/2cc327cdb152d4e7afb861c2868b49fa7dbd275cb4868d8f9771d93082cffc0d?s=96&#038;d=https%3A%2F%2F2.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D96&#038;r=G 4x\' class=\'avatar avatar-24\' height=\'24\' width=\'24\' loading=\'lazy\' decoding=\'async\' />				<a href="http://optimwise.com" class="url" rel="ugc external nofollow">Chad Warner</a>			</cite>

			<br/>

			
				<small class="commentmetadata">
					<a href="#comment-207402" title="">September 11, 2013 at 4:40 am</a>
					 | <a rel=\'nofollow\' class=\'comment-reply-link\' href=\'https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/?replytocom=207402#respond\' data-commentid="207402" data-postid="21728" data-belowelement="comment-207402" data-respondelement="respond" data-replyto="Reply to Chad Warner" aria-label=\'Reply to Chad Warner\'>Reply</a>				</small>

			
			<div class="commenttext">
				
				<p>Some of the tools Dave mentioned are Mac-only. Windows users, what are your favorite tools for image optimization?</p>
<p id="comment-like-207402" data-liked=comment-not-liked class="comment-likes comment-not-liked"><a href="https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/?like_comment=207402&#038;_wpnonce=e8e4b91bcd" class="comment-like-link needs-login" rel="nofollow" data-blog="5089392"><span>Like</span></a><span id="comment-like-count-207402" class="comment-like-feedback">Like</span></p>
			</div>
			<div class="clear"></div>
		</li>
	</li><!-- #comment-## -->
	</ol>
	<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">Continue the discussion <small><a rel="nofollow" id="cancel-comment-reply-link" href="/2013/09/06/dave-ross-optimize-image-files-like-a-pro/#respond" style="display:none;">Cancel reply</a></small></h3><form action="https://wordpress.tv/wp-comments-post.php" method="post" id="commentform" class="comment-form">


<div id="comment-form__verbum" class="transparent"></div><div class="verbum-form-meta"><input type=\'hidden\' name=\'comment_post_ID\' value=\'21728\' id=\'comment_post_ID\' />
<input type=\'hidden\' name=\'comment_parent\' id=\'comment_parent\' value=\'0\' />

			<input type="hidden" name="highlander_comment_nonce" id="highlander_comment_nonce" value="6f26d5bd13" />
			<input type="hidden" name="verbum_show_subscription_modal" value="" /></div><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="29d1701de0" /></p><p style="display: none !important;" class="akismet-fields-container" data-prefix="ak_"><label>&#916;<textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_1" name="ak_js" value="138"/><script>document.getElementById( "ak_js_1" ).setAttribute( "value", ( new Date() ).getTime() );</script></p></form>	</div><!-- #respond -->
				</div>
		</div><!-- #content -->
	</div><!-- .primary-content -->
	
<div class="secondary-content video-info">
	<h5>Published</h5>
			<p class="video-date">September 6, 2013</p>

							<div class="video-description"><p>Images, even small ones, can be the biggest files that make up your site. Learn the tools, plugins, and theming techniques you’ll want to start using to shrink your page load times and save your mobile users a few bucks without sacrificing image quality.</p>
<p><a href="http://slides.davidmichaelross.com/image_optimization/#/" target="_blank">Presentation Slides &raquo;</a></p>
<div class="sd-block sd-rating"><h3 class="sd-title">Rate this:</h3><div class="cs-rating pd-rating" id="pd_rating_holder_29399_post_21728"></div></div></div>
			<h5>Event</h5><p class="video-event"><a href="https://wordpress.tv/event/wordcamp-providence-2013/">WordCamp Providence 2013 <span class="tag-count">26</span></a></p><h5>Speakers</h5><p class="video-speakers"><a href="https://wordpress.tv/speakers/dave-ross/">Dave Ross <span class="tag-count">3</span></a></p><h5>Tags</h5><p class="video-tags"><a href="https://wordpress.tv/tag/images/">images <span class="tag-count">53</span></a></p><h5>Language</h5><p class="video-lang"><a href="https://wordpress.tv/language/english/">English <span class="tag-count">10586</span></a></p>			<h5>Download</h5>
			<div class="video-downloads">
MP4: <a href=\'https://videos.files.wordpress.com/TqDCJmoq/optimize-image-files_std.mp4\'>Low</a>, <a href=\'https://videos.files.wordpress.com/TqDCJmoq/optimize-image-files_dvd.mp4\'>Med</a>, <a href=\'https://videos.files.wordpress.com/TqDCJmoq/optimize-image-files_hd.mp4\'>High</a>, <a href=\'https://wordpress.tv/wp-content/uploads/2013/08/optimize-image-files.mp4\'>Original</a><br/>OGG: <a href=\'https://videos.files.wordpress.com/TqDCJmoq/optimize-image-files_fmt1.ogv\'>Low</a>			</div>
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
</ul></div>			<p class="automattic">An <a href="https://automattic.com/"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNy4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxvZ28iIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNDk0LjQgMzguMiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNDk0LjQgMzguMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8cGF0aCBmaWxsPSIjODg4ODg4IiBkPSJNMTc5LjMsMzguMmMtMTIuNiwwLTIwLjctOS4xLTIwLjctMTguNXYtMS4yYzAtOS42LDguMi0xOC41LDIwLjctMTguNWMxMi42LDAsMjAuOCw4LjksMjAuOCwxOC41djEuMg0KCUMyMDAuMSwyOS4xLDE5MS45LDM4LjIsMTc5LjMsMzguMnogTTE5My4zLDE4LjZjMC02LjktNS0xMy0xNC4xLTEzYy05LjEsMC0xNCw2LjEtMTQsMTN2MC45YzAsNi45LDUsMTMuMSwxNCwxMy4xDQoJYzkuMSwwLDE0LjEtNi4yLDE0LjEtMTMuMVYxOC42eiIvPg0KPHBhdGggZmlsbD0iIzg4ODg4OCIgZD0iTTM3LjEsMzYuOEwzMi40LDI4SDExLjZMNywzNi44SDBMMTkuMiwxLjNoNS41bDE5LjUsMzUuNUgzNy4xeiBNMjEuOCw4LjJsLTcuNywxNC45aDE1LjdMMjEuOCw4LjJ6Ii8+DQo8cGF0aCBmaWxsPSIjODg4ODg4IiBkPSJNNzQuNiwzOC4yYy0xMi43LDAtMTguNy02LjktMTguNy0xNi4yVjEuM2g2LjZ2MjAuOWMwLDYuNiw0LjMsMTAuNSwxMi41LDEwLjVjOC40LDAsMTEuOS0zLjksMTEuOS0xMC41VjEuMw0KCWg2LjdWMjJDOTMuNiwzMC44LDg3LjksMzguMiw3NC42LDM4LjJ6Ii8+DQo8cGF0aCBmaWxsPSIjODg4ODg4IiBkPSJNMTMwLjcsNi44djMwaC02Ljd2LTMwaC0xNS41VjEuM2gzNy43djUuNUgxMzAuN3oiLz4NCjxwYXRoIGZpbGw9IiM4ODg4ODgiIGQ9Ik0yNTkuNSwzNi44VjguN2wtMS44LDMuMWwtMTQuOSwyNWgtMy4zbC0xNC43LTI1bC0xLjgtMy4xdjI4LjFoLTYuNVYxLjNoOS4ybDE0LDI0LjRsMS43LDNsMS43LTNMMjU3LDEuMw0KCWg5LjF2MzUuNUgyNTkuNXoiLz4NCjxwYXRoIGZpbGw9IiM4ODg4ODgiIGQ9Ik0zMTYuNSwzNi44bC00LjctOC44SDI5MWwtNC41LDguOGgtN2wxOS4yLTM1LjVoNS41bDE5LjUsMzUuNUgzMTYuNXogTTMwMS4yLDguMmwtNy43LDE0LjloMTUuN0wzMDEuMiw4LjJ6DQoJIi8+DQo8cGF0aCBmaWxsPSIjODg4ODg4IiBkPSJNMzUwLjYsNi44djMwaC02Ljd2LTMwaC0xNS41VjEuM2gzNy43djUuNUgzNTAuNnoiLz4NCjxwYXRoIGZpbGw9IiM4ODg4ODgiIGQ9Ik0zOTkuNSw2Ljh2MzBoLTYuN3YtMzBoLTE1LjVWMS4zSDQxNXY1LjVIMzk5LjV6Ii8+DQo8cGF0aCBmaWxsPSIjODg4ODg4IiBkPSJNNDMxLjQsMzYuOFY0LjZjMi43LDAsMy43LTEuNCwzLjctMy40aDIuOHYzNS41SDQzMS40eiIvPg0KPHBhdGggZmlsbD0iIzg4ODg4OCIgZD0iTTQ5MC4yLDExLjNjLTMuMi0yLjktNy45LTUuNy0xNC4yLTUuN2MtOS41LDAtMTQuOCw2LjUtMTQuOCwxMy4zdjAuN2MwLDYuNyw1LjQsMTMsMTUuMywxMw0KCWM1LjksMCwxMC44LTIuOCwxMy45LTUuN2w0LDQuMmMtMy45LDMuOC0xMC41LDcuMS0xOC4zLDcuMWMtMTMuNCwwLTIxLjYtOC43LTIxLjYtMTguM3YtMS4yYzAtOS42LDguOS0xOC43LDIxLjktMTguNw0KCWM3LjUsMCwxNC4zLDMuMSwxOCw3LjFMNDkwLjIsMTEuM3oiLz4NCjxwYXRoIGZpbGw9IiM4ODg4ODgiIGQ9Ik0xODMuNiwxMi40YzEuMiwwLjgsMS41LDIuNCwwLjgsMy42bC02LjEsOS40Yy0wLjgsMS4yLTIuNCwxLjYtMy42LDAuOGwwLDBjLTEuMi0wLjgtMS41LTIuNC0wLjgtMy42DQoJbDYuMS05LjRDMTgwLjgsMTEuOSwxODIuNCwxMS42LDE4My42LDEyLjRMMTgzLjYsMTIuNHoiLz4NCjwvc3ZnPg0K" alt="Automattic" width="165" height="14" /></a> Joint</p>
		</div>
	</div><!-- #footer -->
</div><!-- #page -->

<!--  -->
		<div class="jetpack-instant-search__widget-area" style="display: none">
							<div id="jetpack-search-filters-3" class="widget jetpack-filters widget_search">			<div id="jetpack-search-filters-3-wrapper" class="jetpack-instant-search-wrapper">
		</div></div>					</div>
		<script type="text/javascript">if(jQuery.VideoPress){jQuery.VideoPress.video.flash.params.wmode="opaque";}</script><script type="text/javascript" src="//0.gravatar.com/js/hovercards/hovercards.min.js?ver=20242481ae853d32fb498c357385d15c97d96f68e9e5013db38b7dc99e4f39cb3b061e" id="grofiles-cards-js"></script>
<script type="text/javascript" id="wpgroho-js-extra">
/* <![CDATA[ */
var WPGroHo = {"my_hash":""};
/* ]]> */
</script>
<script crossorigin=\'anonymous\' type=\'text/javascript\'  src=\'https://s0.wp.com/wp-content/mu-plugins/gravatar-hovercards/wpgroho.js?m=1610363240i\'></script>

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
				Gravatar.init(
					\'body\',
					\'#wp-admin-bar-my-account\',
					{
						i18n: {
							\'Edit your profile\': \'Edit your profile\',
							\'View profile\': \'View profile\',
							\'Sorry, we are unable to load this Gravatar profile.\': \'Sorry, we are unable to load this Gravatar profile.\',
							\'Sorry, we are unable to load this Gravatar profile. Please check your internet connection.\': \'Sorry, we are unable to load this Gravatar profile. Please check your internet connection.\',
							\'Too Many Requests.\': \'Too Many Requests.\',
							\'Internal Server Error.\': \'Internal Server Error.\',
						},
					}
				);
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
	<div id="actionbar" style="display: none;"
			class="actnbr-a8c-wptv2 actnbr-has-follow">
		<ul>
								<li class="actnbr-btn actnbr-hidden">
						<a class="actnbr-action actnbr-actn-comment" href="https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/#comments">
							<svg class="gridicon gridicons-comment" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M12 16l-5 5v-5H5c-1.1 0-2-.9-2-2V5c0-1.1.9-2 2-2h14c1.1 0 2 .9 2 2v9c0 1.1-.9 2-2 2h-7z"/></g></svg>							<span>Comment						</span>
						</a>
					</li>
									<li class="actnbr-btn actnbr-hidden">
						<a class="actnbr-action actnbr-actn-reblog" href="">
							<svg class="gridicon gridicons-reblog" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M22.086 9.914L20 7.828V18c0 1.105-.895 2-2 2h-7v-2h7V7.828l-2.086 2.086L14.5 8.5 19 4l4.5 4.5-1.414 1.414zM6 16.172V6h7V4H6c-1.105 0-2 .895-2 2v10.172l-2.086-2.086L.5 15.5 5 20l4.5-4.5-1.414-1.414L6 16.172z"/></g></svg><span>Reblog</span>
						</a>
					</li>
									<li class="actnbr-btn actnbr-hidden">
								<a class="actnbr-action actnbr-actn-follow " href="">
			<svg class="gridicon" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path clip-rule="evenodd" d="m4 4.5h12v6.5h1.5v-6.5-1.5h-1.5-12-1.5v1.5 10.5c0 1.1046.89543 2 2 2h7v-1.5h-7c-.27614 0-.5-.2239-.5-.5zm10.5 2h-9v1.5h9zm-5 3h-4v1.5h4zm3.5 1.5h-1v1h1zm-1-1.5h-1.5v1.5 1 1.5h1.5 1 1.5v-1.5-1-1.5h-1.5zm-2.5 2.5h-4v1.5h4zm6.5 1.25h1.5v2.25h2.25v1.5h-2.25v2.25h-1.5v-2.25h-2.25v-1.5h2.25z"  fill-rule="evenodd"></path></svg>
			<span>Subscribe</span>
		</a>
		<a class="actnbr-action actnbr-actn-following  no-display" href="">
			<svg class="gridicon" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 4.5H4V15C4 15.2761 4.22386 15.5 4.5 15.5H11.5V17H4.5C3.39543 17 2.5 16.1046 2.5 15V4.5V3H4H16H17.5V4.5V12.5H16V4.5ZM5.5 6.5H14.5V8H5.5V6.5ZM5.5 9.5H9.5V11H5.5V9.5ZM12 11H13V12H12V11ZM10.5 9.5H12H13H14.5V11V12V13.5H13H12H10.5V12V11V9.5ZM5.5 12H9.5V13.5H5.5V12Z" fill="#008A20"></path><path class="following-icon-tick" d="M13.5 16L15.5 18L19 14.5" stroke="#008A20" stroke-width="1.5"></path></svg>
			<span>Subscribed</span>
		</a>
							<div class="actnbr-popover tip tip-top-left actnbr-notice" id="follow-bubble">
							<div class="tip-arrow"></div>
							<div class="tip-inner actnbr-follow-bubble">
															<ul>
											<li class="actnbr-sitename">
			<a href="https://wordpress.tv">
				<img alt=\'\' src=\'https://s0.wp.com/i/logo/wpcom-gray-white.png\' srcset=\'https://s0.wp.com/i/logo/wpcom-gray-white.png 1x\' class=\'avatar avatar-50\' height=\'50\' width=\'50\' />				WordPress.tv			</a>
		</li>
										<div class="actnbr-message no-display"></div>
									<form method="post" action="https://subscribe.wordpress.com" accept-charset="utf-8" style="display: none;">
																						<div class="actnbr-follow-count">Join 13,564 other subscribers</div>
																					<div>
										<input type="email" name="email" placeholder="Enter your email address" class="actnbr-email-field" aria-label="Enter your email address" />
										</div>
										<input type="hidden" name="action" value="subscribe" />
										<input type="hidden" name="blog_id" value="5089392" />
										<input type="hidden" name="source" value="https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/" />
										<input type="hidden" name="sub-type" value="actionbar-follow" />
										<input type="hidden" id="_wpnonce" name="_wpnonce" value="4cee80ef7b" />										<div class="actnbr-button-wrap">
											<button type="submit" value="Sign me up">
												Sign me up											</button>
										</div>
									</form>
									<li class="actnbr-login-nudge">
										<div>
											Already have a WordPress.com account? <a href="https://wordpress.com/log-in?redirect_to=https%3A%2F%2Fr-login.wordpress.com%2Fremote-login.php%3Faction%3Dlink%26back%3Dhttps%253A%252F%252Fwordpress.tv%252F2013%252F09%252F06%252Fdave-ross-optimize-image-files-like-a-pro%252F">Log in now.</a>										</div>
									</li>
								</ul>
															</div>
						</div>
					</li>
									<li class="actnbr-btn actnbr-hidden no-display" onclick="javascript:__tcfapi( \'showUi\' );">
						<a class="actnbr-action actnbr-actn-privacy" href="#">
							<svg class="gridicon gridicons-info-outline" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M13 9h-2V7h2v2zm0 2h-2v6h2v-6zm-1-7c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8m0-2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2z"/></g></svg>							<span>Privacy						</span>
						</a>
					</li>
							<li class="actnbr-ellipsis actnbr-hidden">
				<svg class="gridicon gridicons-ellipsis" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M7 12c0 1.104-.896 2-2 2s-2-.896-2-2 .896-2 2-2 2 .896 2 2zm12-2c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-7 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2z"/></g></svg>				<div class="actnbr-popover tip tip-top-left actnbr-more">
					<div class="tip-arrow"></div>
					<div class="tip-inner">
						<ul>
									<li class="actnbr-sitename">
			<a href="https://wordpress.tv">
				<img alt=\'\' src=\'https://s0.wp.com/i/logo/wpcom-gray-white.png\' srcset=\'https://s0.wp.com/i/logo/wpcom-gray-white.png 1x\' class=\'avatar avatar-50\' height=\'50\' width=\'50\' />				WordPress.tv			</a>
		</li>
								<li class="actnbr-folded-customize">
								<a href="https://wptv.wordpress.com/wp-admin/customize.php?url=https%3A%2F%2Fwptv.wordpress.com%2F2013%2F09%2F06%2Fdave-ross-optimize-image-files-like-a-pro%2F">
									<svg class="gridicon gridicons-customize" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M2 6c0-1.505.78-3.08 2-4 0 .845.69 2 2 2 1.657 0 3 1.343 3 3 0 .386-.08.752-.212 1.09.74.594 1.476 1.19 2.19 1.81L8.9 11.98c-.62-.716-1.214-1.454-1.807-2.192C6.753 9.92 6.387 10 6 10c-2.21 0-4-1.79-4-4zm12.152 6.848l1.34-1.34c.607.304 1.283.492 2.008.492 2.485 0 4.5-2.015 4.5-4.5 0-.725-.188-1.4-.493-2.007L18 9l-2-2 3.507-3.507C18.9 3.188 18.225 3 17.5 3 15.015 3 13 5.015 13 7.5c0 .725.188 1.4.493 2.007L3 20l2 2 6.848-6.848c1.885 1.928 3.874 3.753 5.977 5.45l1.425 1.148 1.5-1.5-1.15-1.425c-1.695-2.103-3.52-4.092-5.448-5.977z"/></g></svg>									<span>Customize</span>
								</a>
							</li>
																<li class="actnbr-folded-follow">
												<a class="actnbr-action actnbr-actn-follow " href="">
			<svg class="gridicon" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path clip-rule="evenodd" d="m4 4.5h12v6.5h1.5v-6.5-1.5h-1.5-12-1.5v1.5 10.5c0 1.1046.89543 2 2 2h7v-1.5h-7c-.27614 0-.5-.2239-.5-.5zm10.5 2h-9v1.5h9zm-5 3h-4v1.5h4zm3.5 1.5h-1v1h1zm-1-1.5h-1.5v1.5 1 1.5h1.5 1 1.5v-1.5-1-1.5h-1.5zm-2.5 2.5h-4v1.5h4zm6.5 1.25h1.5v2.25h2.25v1.5h-2.25v2.25h-1.5v-2.25h-2.25v-1.5h2.25z"  fill-rule="evenodd"></path></svg>
			<span>Subscribe</span>
		</a>
		<a class="actnbr-action actnbr-actn-following  no-display" href="">
			<svg class="gridicon" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 4.5H4V15C4 15.2761 4.22386 15.5 4.5 15.5H11.5V17H4.5C3.39543 17 2.5 16.1046 2.5 15V4.5V3H4H16H17.5V4.5V12.5H16V4.5ZM5.5 6.5H14.5V8H5.5V6.5ZM5.5 9.5H9.5V11H5.5V9.5ZM12 11H13V12H12V11ZM10.5 9.5H12H13H14.5V11V12V13.5H13H12H10.5V12V11V9.5ZM5.5 12H9.5V13.5H5.5V12Z" fill="#008A20"></path><path class="following-icon-tick" d="M13.5 16L15.5 18L19 14.5" stroke="#008A20" stroke-width="1.5"></path></svg>
			<span>Subscribed</span>
		</a>
										</li>
																	<li class="actnbr-signup"><a href="https://wordpress.com/start/">Sign up</a></li>
									<li class="actnbr-login"><a href="https://wordpress.com/log-in?redirect_to=https%3A%2F%2Fr-login.wordpress.com%2Fremote-login.php%3Faction%3Dlink%26back%3Dhttps%253A%252F%252Fwordpress.tv%252F2013%252F09%252F06%252Fdave-ross-optimize-image-files-like-a-pro%252F">Log in</a></li>
																	<li class="actnbr-shortlink"><a href="https://wp.me/pllYY-5Es">Copy shortlink</a></li>
																	<li class="flb-report">
										<a href="https://wordpress.com/abuse/?report_url=https://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/" target="_blank" rel="noopener noreferrer">
											Report this content										</a>
									</li>
																	<li class="actnbr-reader">
										<a href="https://wordpress.com/read/blogs/5089392/posts/21728">
											View post in Reader										</a>
									</li>
																	<li class="actnbr-subs">
										<a href="https://subscribe.wordpress.com/">Manage subscriptions</a>
									</li>
																		<li class="actnbr-fold"><a href="">Collapse this bar</a></li>
															</ul>
					</div>
				</div>
			</li>
		</ul>
	</div>
	
<script>
window.addEventListener( "load", function( event ) {
	var link = document.createElement( "link" );
	link.href = "https://s0.wp.com/wp-content/mu-plugins/actionbar/actionbar.css?v=20240115";
	link.type = "text/css";
	link.rel = "stylesheet";
	document.head.appendChild( link );

	var script = document.createElement( "script" );
	script.src = "https://s0.wp.com/wp-content/mu-plugins/actionbar/actionbar.js?v=20231122";
	script.defer = true;
	document.body.appendChild( script );
} );
</script>

	
	<script type="text/javascript">
		window.WPCOM_sharing_counts = {"https:\\/\\/wordpress.tv\\/2013\\/09\\/06\\/dave-ross-optimize-image-files-like-a-pro\\/":21728};
	</script>
				<script type="text/javascript" id="jetpack-instant-search-js-before">
/* <![CDATA[ */
var JetpackInstantSearchOptions=JSON.parse(decodeURIComponent("%7B%22overlayOptions%22%3A%7B%22colorTheme%22%3A%22light%22%2C%22enableInfScroll%22%3Atrue%2C%22enableFilteringOpensOverlay%22%3Atrue%2C%22enablePostDate%22%3Atrue%2C%22enableSort%22%3Atrue%2C%22highlightColor%22%3A%22%23ffffcc%22%2C%22overlayTrigger%22%3A%22submit%22%2C%22resultFormat%22%3A%22expanded%22%2C%22showPoweredBy%22%3Afalse%2C%22defaultSort%22%3A%22relevance%22%2C%22excludedPostTypes%22%3A%5B%22attachment%22%5D%7D%2C%22homeUrl%22%3A%22https%3A%5C%2F%5C%2Fwordpress.tv%22%2C%22locale%22%3A%22en%22%2C%22postsPerPage%22%3A12%2C%22siteId%22%3A5089392%2C%22postTypes%22%3A%7B%22post%22%3A%7B%22singular_name%22%3A%22Post%22%2C%22name%22%3A%22Posts%22%7D%2C%22page%22%3A%7B%22singular_name%22%3A%22Page%22%2C%22name%22%3A%22Pages%22%7D%2C%22attachment%22%3A%7B%22singular_name%22%3A%22Media%22%2C%22name%22%3A%22Media%22%7D%7D%2C%22webpackPublicPath%22%3A%22https%3A%5C%2F%5C%2Fs0.wp.com%5C%2Fwp-content%5C%2Fmu-plugins%5C%2Fjetpack-plugin%5C%2Fsun%5C%2Fjetpack_vendor%5C%2Fautomattic%5C%2Fjetpack-search%5C%2Fbuild%5C%2Finstant-search%5C%2F%22%2C%22isPhotonEnabled%22%3Atrue%2C%22isFreePlan%22%3Afalse%2C%22apiRoot%22%3A%22https%3A%5C%2F%5C%2Fwordpress.tv%5C%2Fwp-json%5C%2F%22%2C%22apiNonce%22%3A%226e5dc46983%22%2C%22isPrivateSite%22%3Afalse%2C%22isWpcom%22%3Atrue%2C%22hasOverlayWidgets%22%3Atrue%2C%22widgets%22%3A%5B%7B%22filters%22%3A%5B%7B%22name%22%3A%22Tags%22%2C%22type%22%3A%22taxonomy%22%2C%22taxonomy%22%3A%22post_tag%22%2C%22count%22%3A8%2C%22widget_id%22%3A%22jetpack-search-filters-3%22%2C%22filter_id%22%3A%22taxonomy_0%22%7D%2C%7B%22name%22%3A%22Year%22%2C%22type%22%3A%22date_histogram%22%2C%22count%22%3A15%2C%22field%22%3A%22post_date%22%2C%22interval%22%3A%22year%22%2C%22widget_id%22%3A%22jetpack-search-filters-3%22%2C%22filter_id%22%3A%22date_histogram_1%22%7D%2C%7B%22name%22%3A%22Language%22%2C%22type%22%3A%22taxonomy%22%2C%22taxonomy%22%3A%22language%22%2C%22count%22%3A8%2C%22widget_id%22%3A%22jetpack-search-filters-3%22%2C%22filter_id%22%3A%22taxonomy_2%22%7D%2C%7B%22name%22%3A%22Speakers%22%2C%22type%22%3A%22taxonomy%22%2C%22taxonomy%22%3A%22speakers%22%2C%22count%22%3A10%2C%22widget_id%22%3A%22jetpack-search-filters-3%22%2C%22filter_id%22%3A%22taxonomy_3%22%7D%5D%2C%22widget_id%22%3A%22jetpack-search-filters-3%22%7D%5D%2C%22widgetsOutsideOverlay%22%3A%5B%5D%2C%22hasNonSearchWidgets%22%3Afalse%2C%22preventTrackingCookiesReset%22%3Atrue%7D"));
/* ]]> */
</script>
<script crossorigin=\'anonymous\' type=\'text/javascript\'  src=\'https://s0.wp.com/_static/??-eJx1jdEKwjAMRX/IGQbD+iJ+itQ2unRtWtdE8e+tsAmCvuXec8iFR+lcZkEWSNqVqFfiCpEmrHBTVBwt+4jzNtQNNJnYRfUNhgqeqsAd2ef5jUqOzwvFuE3Ef3Wdv/iP7YBSrJuWDFV5rU7LllXJyYqQ+8gV7exGOCtFD+2LWJa1DGW52ugxHXrTm50ZBrMPL+BlXpw=\'></script>
<script type="text/javascript" crossorigin=\'anonymous\' crossorigin=\'anonymous\' src="//stats.wp.com/w.js?ver=202424" id="jp-tracks-js"></script>
<script type="text/javascript" id="comment-like-js-extra">
/* <![CDATA[ */
var comment_like_text = {"loading":"Loading...","swipeUrl":"https:\\/\\/s0.wp.com\\/wp-content\\/mu-plugins\\/comment-likes\\/js\\/lib\\/swipe.js?ver=20131008"};
/* ]]> */
</script>
<script type="text/javascript" id="verbum-settings-js-before">
/* <![CDATA[ */
window.VerbumComments = {"Log in or provide your name and email to leave a reply.":"Log in or provide your name and email to leave a reply.","Log in or provide your name and email to leave a comment.":"Log in or provide your name and email to leave a comment.","Receive web and mobile notifications for posts on this site.":"Receive web and mobile notifications for posts on this site.","Name":"Name","Email (address never made public)":"Email (address never made public)","Website (optional)":"Website (optional)","Leave a reply. (log in optional)":"Leave a reply. (log in optional)","Leave a comment. (log in optional)":"Leave a comment. (log in optional)","Log in to leave a reply.":"Log in to leave a reply.","Log in to leave a comment.":"Log in to leave a comment.","Logged in via %s":"Logged in via %s","Log out":"Log out","Email":"Email","(Address never made public)":"(Address never made public)","Instantly":"Instantly","Daily":"Daily","Reply":"Reply","Comment":"Comment","WordPress":"WordPress","Weekly":"Weekly","Notify me of new posts":"Notify me of new posts","Email me new posts":"Email me new posts","Email me new comments":"Email me new comments","Cancel":"Cancel","Write a comment...":"Write a comment...","Write a reply...":"Write a reply...","Website":"Website","Optional":"Optional","We\'ll keep you in the loop!":"We\'ll keep you in the loop!","Loading your comment...":"Loading your comment...","Discover more from":"Discover more from WordPress.tv","Subscribe now to keep reading and get access to the full archive.":"Subscribe now to keep reading and get access to the full archive.","Continue reading":"Continue reading","Never miss a beat!":"Never miss a beat!","Interested in getting blog post updates? Simply click the button below to stay in the loop!":"Interested in getting blog post updates? Simply click the button below to stay in the loop!","Enter your email address":"Enter your email address","Subscribe":"Subscribe","Comment sent successfully":"Comment sent successfully","Save my name, email, and website in this browser for the next time I comment.":"Save my name, email, and website in this browser for the next time I comment.","siteId":5089392,"postId":21728,"mustLogIn":false,"requireNameEmail":true,"commentRegistration":false,"connectURL":"https:\\/\\/wptv.wordpress.com\\/public.api\\/connect\\/?action=request&domain=wordpress.tv","logoutURL":"https:\\/\\/wptv.wordpress.com\\/wp-login.php?action=logout&_wpnonce=dccb1eb64a","homeURL":"https:\\/\\/wordpress.tv\\/","subscribeToBlog":true,"subscribeToComment":true,"isJetpackCommentsLoggedIn":false,"jetpackUsername":"","jetpackUserId":0,"jetpackSignature":"","jetpackAvatar":"https:\\/\\/0.gravatar.com\\/avatar\\/ad516503a11cd5ca435acc9bb6523536?s=96","enableBlocks":true,"enableSubscriptionModal":true,"currentLocale":"en","isJetpackComments":false,"allowedBlocks":["core\\/paragraph","core\\/list","core\\/code","core\\/list-item","core\\/quote","core\\/image","core\\/embed","core\\/quote","core\\/code"],"embedNonce":"ca6b258fbf","verbumBundleUrl":"https:\\/\\/s0.wp.com\\/wp-content\\/mu-plugins\\/jetpack-mu-wpcom-plugin\\/sun\\/vendor\\/automattic\\/jetpack-mu-wpcom\\/src\\/features\\/verbum-comments\\/dist\\/index.js","isRTL":false,"vbeCacheBuster":1717067639}
/* ]]> */
</script>
<script crossorigin=\'anonymous\' type=\'text/javascript\'  src=\'https://s0.wp.com/_static/??-eJx9jtsKwjAMhl/ILptDvRIfRbq2SrYmLT049vYGmYIHvAr8+f4DzFGZwMVxAaoq+npFzjC6ErWZlEhzNIHWB+TKcHNsQwJdSyBdCpovGnIyMFT0VuA0VJIKIqnIoHN2cuzCmtAoH7R1qRnzBn4PWY3K4+Rk1ofwNCIbX+07kFz0S0PIf9L1hJlcUX3TwllCXsIlPWAr3hMdu0O777aHrt+Nd/uUcQo=\'></script>
<script type="text/javascript" id="crowdsignal-rating-js-before">
/* <![CDATA[ */
<!--//--><![CDATA[//><!--
PDRTJS_settings_29399_post_21728={"id":29399,"unique_id":"wp-post-21728","title":"Dave%20Ross%3A%20Optimize%20Image%20Files%20Like%20a%26nbsp%3BPro","permalink":"https:\\/\\/wordpress.tv\\/2013\\/09\\/06\\/dave-ross-optimize-image-files-like-a-pro\\/","item_id":"_post_21728"}; if ( typeof PDRTJS_RATING !== \'undefined\' ){if ( typeof PDRTJS_29399_post_21728 == \'undefined\' ){PDRTJS_29399_post_21728 = new PDRTJS_RATING( PDRTJS_settings_29399_post_21728 );}}PDRTJS_settings_29399_post_21728={"id":29399,"unique_id":"wp-post-21728","title":"Dave%20Ross%3A%20Optimize%20Image%20Files%20Like%20a%26nbsp%3BPro","permalink":"https:\\/\\/wordpress.tv\\/2013\\/09\\/06\\/dave-ross-optimize-image-files-like-a-pro\\/","item_id":"_post_21728"}; if ( typeof PDRTJS_RATING !== \'undefined\' ){if ( typeof PDRTJS_29399_post_21728 == \'undefined\' ){PDRTJS_29399_post_21728 = new PDRTJS_RATING( PDRTJS_settings_29399_post_21728 );}}
//--><!]]]]><![CDATA[>
/* ]]> */
</script>
<script type="text/javascript" src="https://polldaddy.com/js/rating/rating.js?ver=13.6-a.0" id="crowdsignal-rating-js"></script>
<script type="text/javascript" id="sharing-js-js-extra">
/* <![CDATA[ */
var sharing_js_options = {"lang":"en","counts":"1","is_stats_active":"1"};
/* ]]> */
</script>
<script crossorigin=\'anonymous\' type=\'text/javascript\'  src=\'https://s0.wp.com/wp-content/mu-plugins/jetpack-plugin/sun/_inc/build/sharedaddy/sharing.min.js?m=1685112397i\'></script>
<script type="text/javascript" id="sharing-js-js-after">
/* <![CDATA[ */
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
/* ]]> */
</script>

	<script type="text/javascript">
		(function () {
			var wpcom_reblog = {
				source: \'toolbar\',

				toggle_reblog_box_flair: function (obj_id, post_id) {

					// Go to site selector. This will redirect to their blog if they only have one.
					const postEndpoint = `https://wordpress.com/post`;

					// Ideally we would use the permalink here, but fortunately this will be replaced with the 
					// post permalink in the editor.
					const originalURL = `${ document.location.href }?page_id=${ post_id }`; 
					
					const url =
						postEndpoint +
						\'?url=\' +
						encodeURIComponent( originalURL ) +
						\'&is_post_share=true\' +
						\'&v=5\';

					const redirect = function () {
						if (
							! window.open( url, \'_blank\' )
						) {
							location.href = url;
						}
					};

					if ( /Firefox/.test( navigator.userAgent ) ) {
						setTimeout( redirect, 0 );
					} else {
						redirect();
					}
				},
			};

			window.wpcom_reblog = wpcom_reblog;
		})();
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
</script>	<iframe src=\'https://widgets.wp.com/likes/master.html?ver=20240610#ver=20240610&amp;origin=https://wordpress.tv\' scrolling=\'no\' id=\'likes-master\' name=\'likes-master\' style=\'display:none;\'></iframe>
	<div id=\'likes-other-gravatars\' class=\'wpl-new-layout\' role="dialog" aria-hidden="true" tabindex="-1">
		<div class="likes-text">
			<span>%d</span>		</div>
		<ul class="wpl-avatars sd-like-gravatars"></ul>
	</div>

		<script src="//stats.wp.com/w.js?67" defer></script> <script type="text/javascript">
_tkq = window._tkq || [];
_stq = window._stq || [];
_tkq.push([\'storeContext\', {\'blog_id\':\'5089392\',\'blog_tz\':\'-7\',\'user_lang\':\'en\',\'blog_lang\':\'en\',\'user_id\':\'0\'}]);
_stq.push([\'view\', {\'blog\':\'5089392\',\'v\':\'wpcom\',\'tz\':\'-7\',\'user_id\':\'0\',\'post\':\'21728\',\'subd\':\'wptv\'}]);
		_stq.push([\'extra\', {\'crypt\':\'UE40eW5QN0p8M2Y/RE1lSiYrZXhzUkM5fD1uTDNLUGt6QzVbd3FKb3Q4aWxfXXI3YWo4Qz1ObnoxZ1dPWjRrdlQuMmdtYV8tL0tMLi9RSDFyaG1nZGVDVDZbd2RbSEhPUkpkMU9YOVRSbGhsSzNba1BbWjdGRC9sb0pTaVhpPWZ2M2IyL2FELmhfdExDTGlOcUVYSHhXZno3d21DUnRYczJVTDM0bU1ZfnVMJlpVWHksOEdWRFtBZD1ucUJMUlpUMURQW3ctXW4lUUldanRhLVVpbW82cFV1a2sxSzBlbXkyUDEyOS9YND9hZmlYcVQ1TFctdUNZbkxSLzdSTkZQeHMxcl1GdC0sWEcuNGFwLWJsVSVGa0JLVHVYRXQvcngzLHYzclcrUWhzUUVGcmF6LzRXbExyLnhkdGFHMDdIfCw=\'}]);
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
</script>
<script>
(function() {
	\'use strict\';

	const fetches = {};
	const promises = {};
	const urls = {
		\'verbum\': \'https://s0.wp.com/wp-content/mu-plugins/jetpack-mu-wpcom-plugin/sun/vendor/automattic/jetpack-mu-wpcom/src/build/verbum-comments/verbum-comments.js?m=1715879380i&minify=false&ver=3e346647ec4ff2cd65bd\'
	};
	const loaders = {
		\'verbum\': () => {
			fetchExternalScript(\'verbum\');
			promises[\'verbum\'] = promises[\'verbum\'] || loadWPScript(\'verbum\');
			return promises[\'verbum\'];
		},
		
	};
	const scriptExtras = {
		
	};

	window.WP_Enqueue_Dynamic_Script = {
		loadScript: (handle) => {
			if (!loaders[handle]) {
				console.error(\'WP_Enqueue_Dynamic_Script: unregistered script `\' + handle + \'`.\');
			}
			return loaders[handle]();
		}
	};

	function fetchExternalScript(handle) {
		if (!urls[handle]) {
			return Promise.resolve();
		}

		fetches[handle] = fetches[handle] || fetch(urls[handle], { mode: \'no-cors\' });
		return fetches[handle];
	}

	function runExtraScript(handle, type, index) {
		const id = \'wp-enqueue-dynamic-script:\' + handle + \':\' + type + \':\' + (index + 1);
		const template = document.getElementById(id);
		if (!template) {
			return Promise.reject();
		}

		const script = document.createElement( \'script\' );
		script.innerHTML = template.innerHTML;
		document.body.appendChild( script );
		return Promise.resolve();
	}

	function loadExternalScript(handle) {
		if (!urls[handle]) {
			return Promise.resolve();
		}

		return fetches[handle].then(() => {
			return new Promise((resolve, reject) => {
				const script = document.createElement(\'script\');
				script.onload = () => resolve();
				script.onerror = (e) => reject(e);
				script.src = urls[handle];
				document.body.appendChild(script);
			});
		});
	}

	function loadExtra(handle, pos) {
		const count = (scriptExtras[handle] && scriptExtras[handle][pos]) || 0;
		let promise = Promise.resolve();

		for (let i = 0; i < count; i++) {
			promise = promise.then(() => runExtraScript(handle, pos, i));
		}

		return promise;
	}

	function loadWPScript(handle) {
		// Core loads scripts in this order. See: https://github.com/WordPress/WordPress/blob/a59eb9d39c4fcba834b70c9e8dfd64feeec10ba6/wp-includes/class-wp-scripts.php#L428.
		return loadExtra(handle, \'translations\')
			.then(() => loadExtra(handle, \'before\'))
			.then(() => loadExternalScript(handle))
			.then(() => loadExtra(handle, \'after\'));
	}
} )();
</script>
</body>
</html>
'
];
