<?php
declare(strict_types = 1);

return [
    'headers' => [
        'date' => [
            'Sun, 23 Feb 2020 00:00:36 GMT',
            'Sun, 23 Feb 2020 00:00:37 GMT',
            'Sun, 23 Feb 2020 00:00:38 GMT'
        ],
        'content-type' => [
            'text/html; charset=iso-8859-1',
            'text/html; charset=iso-8859-1',
            'text/html'
        ],
        'transfer-encoding' => [
            'chunked'
        ],
        'connection' => [
            'keep-alive'
        ],
        'set-cookie' => [
            '__cfduid=d1a30f10c970ad24182488a9aee3ade5a1582416036; expires=Tue, 24-Mar-20 00:00:36 GMT; path=/; domain=.amcharts.com; HttpOnly; SameSite=Lax'
        ],
        'location' => [
            'https://live.amcharts.com/czNjJ',
            'https://live.amcharts.com/czNjJ/'
        ],
        'vary' => [
            'Accept-Encoding',
            'Accept-Encoding',
            'Accept-Encoding,User-Agent'
        ],
        'x-powered-by' => [
            'PleskLin',
            'PleskLin',
            'PleskLin'
        ],
        'cf-cache-status' => [
            'DYNAMIC',
            'DYNAMIC',
            'DYNAMIC'
        ],
        'alt-svc' => [
            'h2=":443"; ma=60'
        ],
        'server' => [
            'cloudflare',
            'cloudflare',
            'cloudflare'
        ],
        'cf-ray' => [
            '5694eba3293c5d1f-LIS  HTTP/2 301',
            '5694eba5ccc15d47-LIS  HTTP/2 200',
            '5694ebaddc415d47-LIS'
        ],
        'expect-ct' => [
            'max-age=604800, report-uri="https://report-uri.cloudflare.com/cdn-cgi/beacon/expect-ct"',
            'max-age=604800, report-uri="https://report-uri.cloudflare.com/cdn-cgi/beacon/expect-ct"'
        ],
        'content-encoding' => [
            'br'
        ],
        'Content-Location' => [
            'https://live.amcharts.com/czNjJ/'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
<meta name="viewport" content="width=600, initial-scale=0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={licenseKey:"2b927c5092",applicationID:"5849300"};window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var i=n[t]={exports:{}};e[t][0].call(i.exports,function(n){var i=e[t][1][n];return r(i||n)},i,i.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<t.length;i++)r(t[i]);return r}({1:[function(e,n,t){function r(){}function i(e,n,t){return function(){return o(e,[u.now()].concat(f(arguments)),n?null:this,t),n?void 0:this}}var o=e("handle"),a=e(4),f=e(5),c=e("ee").get("tracer"),u=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",d=l+"ixn-";a(p,function(e,n){s[n]=i(l+n,!0,"api")}),s.addPageAction=i(l+"addPageAction",!0),s.setCurrentRouteName=i(l+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,i="function"==typeof n;return o(d+"tracer",[u.now(),e,t],r),function(){if(c.emit((i?"":"no-")+"fn-start",[u.now(),r,i],t),i)try{return n.apply(this,arguments)}catch(e){throw c.emit("fn-err",[arguments,this,e],t),e}finally{c.emit("fn-end",[u.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=i(d+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),o("err",[e,u.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){var t=e.getEntries();t.forEach(function(e){"first-paint"===e.name?c("timing",["fp",Math.floor(e.startTime)]):"first-contentful-paint"===e.name&&c("timing",["fcp",Math.floor(e.startTime)])})}function i(e,n){var t=e.getEntries();t.length>0&&c("lcp",[t[t.length-1]])}function o(e){if(e instanceof s&&!l){var n,t=Math.round(e.timeStamp);n=t>1e12?Date.now()-t:u.now()-t,l=!0,c("timing",["fi",t,{type:e.type,fid:n}])}}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var a,f,c=e("handle"),u=e("loader"),s=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){a=new PerformanceObserver(r),f=new PerformanceObserver(i);try{a.observe({entryTypes:["paint"]}),f.observe({entryTypes:["largest-contentful-paint"]})}catch(p){}}if("addEventListener"in document){var l=!1,d=["click","keydown","mousedown","pointerdown","touchstart"];d.forEach(function(e){document.addEventListener(e,o,!1)})}}},{}],3:[function(e,n,t){function r(e,n){if(!i)return!1;if(e!==i)return!1;if(!n)return!0;if(!o)return!1;for(var t=o.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var i=null,o=null,a=/Version\\/(\\S+)\\s+Safari/;if(navigator.userAgent){var f=navigator.userAgent,c=f.match(a);c&&f.indexOf("Chrome")===-1&&f.indexOf("Chromium")===-1&&(i="Safari",o=c[1])}n.exports={agent:i,version:o,match:r}},{}],4:[function(e,n,t){function r(e,n){var t=[],r="",o=0;for(r in e)i.call(e,r)&&(t[o]=n(r,e[r]),o+=1);return t}var i=Object.prototype.hasOwnProperty;n.exports=r},{}],5:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,i=t-n||0,o=Array(i<0?0:i);++r<i;)o[r]=e[n+r];return o}n.exports=r},{}],6:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function i(e){function n(e){return e&&e instanceof r?e:e?c(e,f,o):o()}function t(t,r,i,o){if(!l.aborted||o){e&&e(t,r,i);for(var a=n(i),f=v(t),c=f.length,u=0;u<c;u++)f[u].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function d(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||i(t)}function w(e,n){u(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:d,addEventListener:d,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function o(){return new r}function a(){(s.api||s.feature)&&(l.aborted=!0,s=l.backlog={})}var f="nr@context",c=e("gos"),u=e(4),s={},p={},l=n.exports=i();l.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(i.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return e[n]=r,r}var i=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){i.buffer([e],r),i.emit(e,n,t)}var i=e("ee").get("handle");n.exports=r,r.ee=i},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,o,function(){return i++})}var i=1,o="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=E.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();u(y,function(n,t){e[n]||(e[n]=t)}),c("mark",["onload",a()+E.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function i(){"complete"===d.readyState&&o()}function o(){c("mark",["domContent",a()+E.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(f=Math.max((new Date).getTime(),f))-E.offset}var f=(new Date).getTime(),c=e("handle"),u=e(4),s=e("ee"),p=e(3),l=window,d=l.document,m="addEventListener",v="attachEvent",g=l.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:l.setImmediate,CT:clearTimeout,XHR:g,REQ:l.Request,EV:l.Event,PR:l.Promise,MO:l.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1167.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),E=n.exports={offset:f,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),e(2),d[m]?(d[m]("DOMContentLoaded",o,!1),l[m]("load",r,!1)):(d[v]("onreadystatechange",i),l[v]("onload",r)),c("mark",["firstbyte",f],null,"api");var x=0,O=e(6)},{}],"wrap-function":[function(e,n,t){function r(e){return!(e&&e instanceof Function&&e.apply&&!e[a])}var i=e("ee"),o=e(5),a="nr@original",f=Object.prototype.hasOwnProperty,c=!1;n.exports=function(e,n){function t(e,n,t,i){function nrWrapper(){var r,a,f,c;try{a=this,r=o(arguments),f="function"==typeof t?t(r,a):t||{}}catch(u){l([u,"",[r,a,i],f])}s(n+"start",[r,a,i],f);try{return c=e.apply(a,r)}catch(p){throw s(n+"err",[r,a,p],f),p}finally{s(n+"end",[r,a,c],f)}}return r(e)?e:(n||(n=""),nrWrapper[a]=e,p(e,nrWrapper),nrWrapper)}function u(e,n,i,o){i||(i="");var a,f,c,u="-"===i.charAt(0);for(c=0;c<n.length;c++)f=n[c],a=e[f],r(a)||(e[f]=t(a,u?f+i:i,o,f))}function s(t,r,i){if(!c||n){var o=c;c=!0;try{e.emit(t,r,i,n)}catch(a){l([a,t,r,i])}c=o}}function p(e,n){if(Object.defineProperty&&Object.keys)try{var t=Object.keys(e);return t.forEach(function(t){Object.defineProperty(n,t,{get:function(){return e[t]},set:function(n){return e[t]=n,n}})}),n}catch(r){l([r])}for(var i in e)f.call(e,i)&&(n[i]=e[i]);return n}function l(n){try{e.emit("internal-error",n)}catch(t){}}return e||(e=i),t.inPlace=u,t.flag=a,t}},{}]},{},["loader"]);</script>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="shortcut icon" type="image/x-icon" href="//live.amcharts.com/static/img/page/favicon.png">
<title>World Cup History | amCharts</title>
<meta name="description" content="Let\\\'s see how the history of the winner of 2014 World Cup - Germany - compares to the two runners-up: Argentina and The Netherlands." />
<link rel="alternate" type="application/json+oembed" href="" title="World Cup History" />
<link rel="alternate" type="text/xml+oembed" href="" title="World Cup History" />
<link rel="image_src" href="http:" />
<link rel="publisher" href="http://plus.google.com/+amcharts/" />
<link rel="canonical" href="http://live.amcharts.com/czNjJ/" />
<meta name="twitter:card" content="photo" />
<meta name="twitter:site" content="@amCharts" />
<meta name="twitter:image" content="http:" />
<meta property="og:title" content="World Cup History" />
<meta property="og:site_name" content="amCharts" />
<meta property="og:url" content="http://live.amcharts.com/czNjJ/" />
<meta property="og:description" content="Let\\\'s see how the history of the winner of 2014 World Cup - Germany - compares to the two runners-up: Argentina and The Netherlands." />
<meta property="og:type" content="article" />
<meta property="og:image" content="http://generated.amcharts.com/cz/czNjJ-full.png" />
<meta property="fb:app_id" content="563198717101351" />


<link rel="stylesheet" href="//live.amcharts.com/vendor/jquery/css/ui-amcharts/jquery-ui-1.10.4.custom.css?20191009-01">
<link rel="stylesheet" href="//live.amcharts.com/vendor/jquery/plugins/chosen/jquery.chosen.css?20191009-01">
<link rel="stylesheet" href="//live.amcharts.com/vendor/jquery/plugins/spectrum/jquery.spectrum.css?20191009-01">
<link rel="stylesheet" href="//live.amcharts.com/vendor/bootstrap/css/bootstrap.css?20191009-01">
<link rel="stylesheet" href="//live.amcharts.com/vendor/font-awesome/css/font-awesome.css?20191009-01">

<link href=\'//fonts.googleapis.com/css?family=Covered+By+Your+Grace\' rel=\'stylesheet\' type=\'text/css\'>

<link rel="stylesheet" href="//live.amcharts.com/dist/css/ameditor.core.css?20191009-01">
<link rel="stylesheet" href="//live.amcharts.com/dist/css/ameditor.icons.css?20191009-01">
<link rel="stylesheet" href="//live.amcharts.com/dist/css/ameditor.share.css?20191009-01">

<script type="text/javascript" src="//live.amcharts.com/vendor/amcharts/amcharts.js?20191009-01"></script>
<script type="text/javascript" src="//live.amcharts.com/vendor/amcharts/funnel.js?20191009-01"></script>
<script type="text/javascript" src="//live.amcharts.com/vendor/amcharts/gauge.js?20191009-01"></script>
<script type="text/javascript" src="//live.amcharts.com/vendor/amcharts/pie.js?20191009-01"></script>
<script type="text/javascript" src="//live.amcharts.com/vendor/amcharts/radar.js?20191009-01"></script>
<script type="text/javascript" src="//live.amcharts.com/vendor/amcharts/serial.js?20191009-01"></script>
<script type="text/javascript" src="//live.amcharts.com/vendor/amcharts/xy.js?20191009-01"></script>

<script type="text/javascript" src="//live.amcharts.com/vendor/amcharts/themes/default.js?20191009-01"></script>

<script src="//live.amcharts.com/vendor/jquery/jquery-1.10.2.js?20191009-01"></script>
<script src="//live.amcharts.com/vendor/jquery/jquery-ui-1.10.4.js?20191009-01"></script>
<script src="//live.amcharts.com/vendor/jquery/plugins/chosen/jquery.chosen.js?20191009-01"></script>
<script src="//live.amcharts.com/vendor/jquery/plugins/spectrum/jquery.spectrum.js?20191009-01"></script>
<script src="//live.amcharts.com/vendor/clipboard/clipboard.js?20191009-01"></script>

<script type="text/javascript" src="//live.amcharts.com/dist/ameditor.core.js?20191009-01"></script>
<script type="text/javascript">
			AmCharts.Editor.CONSTANT.URL_AMCHARTS		= \'//www.amcharts.com/\';
			AmCharts.Editor.CONSTANT.URL_BASE			= \'//live.amcharts.com/\';
			AmCharts.Editor.CONSTANT.URL_CDN			= \'//live.amcharts.com/\';
			AmCharts.Editor.CONSTANT.URL_CDN_AMCHARTS	= \'//www.amcharts.com/\';
			AmCharts.Editor.CONSTANT.URL_API			= \'//www.amcharts.com/wp-admin/admin-ajax.php\';
			AmCharts.Editor.CONSTANT.URL_PATH			= \'/\';
			AmCharts.Editor.CONSTANT.RND_KEY			= \'20191009-01\';
			AmCharts.Editor.CONSTANT.CHARTS_CREATED		= 128128;
		</script>
<script type="text/javascript" src="//live.amcharts.com/dist/ameditor.handler.js?20191009-01"></script>
<script type="text/javascript" src="//live.amcharts.com/dist/section/ameditor.share.js?20191009-01"></script>
<script type="text/javascript" src="//live.amcharts.com/dist/lang/ameditor.en-US.js?20191009-01"></script>
<script type="text/javascript">
			(function() {
				// PREPROCESS
				var config = "{\\"type\\":\\"serial\\",\\"pathToImages\\":\\"http://cdn.amcharts.com/lib/3/images/\\",\\"categoryField\\":\\"year\\",\\"columnSpacing\\":0,\\"startDuration\\":0.5,\\"theme\\":\\"default\\",\\"categoryAxis\\":{\\"gridPosition\\":\\"start\\",\\"position\\":\\"top\\",\\"autoGridCount\\":false,\\"axisAlpha\\":0,\\"gridAlpha\\":0.1,\\"gridCount\\":19,\\"labelRotation\\":55},\\"chartCursor\\":{\\"cursorAlpha\\":0,\\"cursorPosition\\":\\"mouse\\",\\"zoomable\\":false},\\"trendLines\\":[],\\"graphs\\":[{\\"balloonText\\":\\"Place taken by [[title]] in [[category]]: [[germanyPlace]]\\",\\"bullet\\":\\"custom\\",\\"bulletOffset\\":12,\\"bulletSize\\":16,\\"color\\":\\"#ffffff\\",\\"customBulletField\\":\\"germanyMedal\\",\\"fillAlphas\\":1,\\"fillColors\\":[\\"#fece00\\",\\"#dc0000\\",\\"#000000\\"],\\"id\\":\\"AmGraph-1\\",\\"labelPosition\\":\\"inside\\",\\"labelText\\":\\"[[germanyPlace]]\\",\\"lineAlpha\\":0,\\"title\\":\\"Germany\\",\\"type\\":\\"column\\",\\"valueField\\":\\"germany\\"},{\\"balloonText\\":\\"Place taken by [[title]] in [[category]]: [[argentinaPlace]]\\",\\"bullet\\":\\"custom\\",\\"bulletOffset\\":12,\\"bulletSize\\":16,\\"color\\":\\"#000000\\",\\"customBulletField\\":\\"argentinaMedal\\",\\"fillAlphas\\":1,\\"fillColors\\":[\\"#75c5f0\\",\\"#ffffff\\",\\"#75c5f0\\"],\\"hidden\\":true,\\"id\\":\\"AmGraph-2\\",\\"labelPosition\\":\\"inside\\",\\"labelText\\":\\"[[argentinaPlace]]\\",\\"lineAlpha\\":0,\\"title\\":\\"Argentina\\",\\"type\\":\\"column\\",\\"valueField\\":\\"argentina\\"},{\\"balloonText\\":\\"Place taken by [[title]] in [[category]]: [[netherlandsPlace]]\\",\\"bullet\\":\\"custom\\",\\"bulletOffset\\":12,\\"bulletSize\\":16,\\"color\\":\\"#ffffff\\",\\"customBulletField\\":\\"netherlandsMedal\\",\\"fillAlphas\\":1,\\"fillColors\\":[\\"#21468b\\",\\"#ffffff\\",\\"#ae1c28\\"],\\"hidden\\":true,\\"id\\":\\"AmGraph-3\\",\\"labelPosition\\":\\"inside\\",\\"labelText\\":\\"[[netherlandsPlace]]\\",\\"lineAlpha\\":0,\\"title\\":\\"The Netherlands\\",\\"type\\":\\"column\\",\\"valueField\\":\\"netherlands\\"}],\\"guides\\":[{\\"id\\":\\"Guide-1\\",\\"label\\":\\"Top 16\\",\\"lineAlpha\\":1,\\"value\\":7.5},{\\"id\\":\\"Guide-2\\",\\"label\\":\\"Quarterfinals\\",\\"lineAlpha\\":1,\\"value\\":15.5},{\\"id\\":\\"Guide-3\\",\\"label\\":\\"Semifinals\\",\\"lineAlpha\\":1,\\"value\\":19.5},{\\"id\\":\\"Guide-4\\",\\"label\\":\\"Final\\",\\"lineAlpha\\":1,\\"value\\":21.5}],\\"valueAxes\\":[{\\"id\\":\\"ValueAxis-1\\",\\"integersOnly\\":true,\\"axisAlpha\\":0,\\"dashLength\\":5,\\"gridCount\\":10,\\"labelsEnabled\\":false,\\"title\\":\\"Place taken\\"}],\\"allLabels\\":[],\\"balloon\\":{},\\"legend\\":{\\"align\\":\\"center\\",\\"equalWidths\\":false,\\"useGraphSettings\\":true,\\"valueText\\":\\"\\"},\\"titles\\":[],\\"dataProvider\\":[{\\"year\\":1930,\\"argentina\\":22,\\"argentinaPlace\\":2},{\\"year\\":1934,\\"germany\\":21,\\"argentina\\":15,\\"netherlands\\":15,\\"germanyPlace\\":3,\\"argentinaPlace\\":9,\\"netherlandsPlace\\":9},{\\"year\\":1938,\\"germany\\":14,\\"netherlands\\":10,\\"germanyPlace\\":10,\\"netherlandsPlace\\":14},{\\"year\\":1950},{\\"year\\":1954,\\"germany\\":23,\\"germanyPlace\\":1,\\"germanyMedal\\":\\"http://extra.amcharts.com/images/gold.png\\"},{\\"year\\":1958,\\"germany\\":20,\\"argentina\\":11,\\"germanyPlace\\":4,\\"argentinaPlace\\":13},{\\"year\\":1962,\\"germany\\":17,\\"argentina\\":14,\\"germanyPlace\\":7,\\"argentinaPlace\\":10},{\\"year\\":1966,\\"germany\\":22,\\"argentina\\":19,\\"germanyPlace\\":2,\\"argentinaPlace\\":5},{\\"year\\":1970,\\"germany\\":21,\\"germanyPlace\\":3},{\\"year\\":1974,\\"germany\\":23,\\"argentina\\":16,\\"netherlands\\":22,\\"germanyPlace\\":1,\\"germanyMedal\\":\\"http://extra.amcharts.com/images/gold.png\\",\\"argentinaPlace\\":8,\\"netherlandsPlace\\":2},{\\"year\\":1978,\\"germany\\":18,\\"argentina\\":23,\\"netherlands\\":22,\\"germanyPlace\\":6,\\"argentinaPlace\\":1,\\"argentinaMedal\\":\\"http://extra.amcharts.com/images/gold.png\\",\\"netherlandsPlace\\":2},{\\"year\\":1982,\\"germany\\":22,\\"argentina\\":13,\\"germanyPlace\\":2,\\"argentinaPlace\\":11},{\\"year\\":1986,\\"germany\\":22,\\"argentina\\":23,\\"germanyPlace\\":2,\\"argentinaPlace\\":1,\\"argentinaMedal\\":\\"http://extra.amcharts.com/images/gold.png\\"},{\\"year\\":1990,\\"germany\\":23,\\"argentina\\":22,\\"netherlands\\":9,\\"germanyPlace\\":1,\\"germanyMedal\\":\\"http://extra.amcharts.com/images/gold.png\\",\\"argentinaPlace\\":2,\\"netherlandsPlace\\":15},{\\"year\\":1994,\\"germany\\":19,\\"argentina\\":14,\\"netherlands\\":17,\\"germanyPlace\\":5,\\"argentinaPlace\\":10,\\"netherlandsPlace\\":7},{\\"year\\":1998,\\"germany\\":17,\\"argentina\\":18,\\"netherlands\\":20,\\"germanyPlace\\":7,\\"argentinaPlace\\":6,\\"netherlandsPlace\\":4},{\\"year\\":2002,\\"germany\\":22,\\"argentina\\":6,\\"germanyPlace\\":2,\\"argentinaPlace\\":18},{\\"year\\":2006,\\"germany\\":21,\\"argentina\\":18,\\"netherlands\\":13,\\"germanyPlace\\":3,\\"argentinaPlace\\":6,\\"netherlandsPlace\\":11},{\\"year\\":2010,\\"germany\\":21,\\"argentina\\":19,\\"netherlands\\":22,\\"germanyPlace\\":3,\\"argentinaPlace\\":5,\\"netherlandsPlace\\":2},{\\"year\\":2014,\\"germany\\":23,\\"argentina\\":22,\\"netherlands\\":21,\\"germanyPlace\\":1,\\"germanyMedal\\":\\"http://extra.amcharts.com/images/gold.png\\",\\"argentinaPlace\\":2,\\"netherlandsPlace\\":3}]}";
				config = JSON.parse( config, function( k, v ) {
					if ( v == "Not set" ) {
						v = undefined;
					} else if (
							k == "accessibleTitle" ||
							k == "classNamePrefix"
					) {
						v = v.replace(/[^\\w\\s_.-]*/g,"");
					}
					return v;
				} );

				// MERGE SETTINGS
				jQuery.extend(true,AmCharts.Editor.current,{
					section: \'publish\',
					chart: {
						chart_id: \'czNjJ\'
					},
					cfg: config,
					css: AmCharts.Editor.parseJSON("{\\"width\\":75.2,\\"height\\":77.6,\\"boxShadow\\":true,\\"padding\\":15,\\"borderRadius\\":4,\\"backgroundImage\\":\\"//cdn.live.amcharts.com/static/img/share/bg/84391214384.jpg\\",\\"backgroundImageShow\\":true,\\"backgroundAlpha\\":80,\\"backgroundColor\\":\\"#FFFFFF\\",\\"backgroundRGBA\\":{\\"r\\":255,\\"g\\":255,\\"b\\":255,\\"a\\":1}}")
				});

				
				AmCharts.Editor.current.cfg.path = location.protocol + AmCharts.Editor.CONSTANT.URL_CDN_AMCHARTS + "lib/3/";

				try {
					var RGB = AmCharts.Editor.current.css.backgroundRGBA;
					AmCharts.Editor.current.cfg["export"].defaults.fabric.backgroundColor = "rgb(" + [RGB.r,RGB.g,RGB.b].join(",") + ")";
				} catch(err) {}

				// CREATE CHART
				// IGNORE BACKGROUNDALPHA ON CREATION
				var tmpAlpha = AmCharts.Editor.current.cfg.backgroundAlpha;
				AmCharts.Editor.current.cfg.backgroundAlpha = 0;
				AmCharts.Editor.chart = AmCharts.makeChart(\'am-share-chart\',AmCharts.Editor.current.cfg);
				AmCharts.Editor.current.cfg.backgroundAlpha = tmpAlpha;

				// TRIGGER SECTION
				jQuery(document).ready(function () {
					jQuery(window).trigger(\'changed.am.section\');
				});
			})();
		</script>
</head>
<body>
<div class="app">
<section class="app-section app-section-share">
<header class="app-header app-header-dark">
<nav class="app-nav navbar navbar-amcharts" role="navigation">
<a class="btn btn-flat navbar-toggle collapsed pull-left">
<i class="fa fa-bars"></i>
</a>
<ul class="nav navbar-nav navbar-left">
<li class="am-menu-new">
<a href="/new/"><span>Create new Chart</span><i class="am am-new"></i></a>
</li>
<li class="am-menu-edit">
<a href="./edit/"><span>Edit this Chart</span><i class="am am-edit"></i></a>
</li>
</ul>
<a class="navbar-header navbar-header-brand" href="https://www.amcharts.com/" title="JavaScript charts and maps">
<img src="//live.amcharts.com/static/img/page/logo_dark.png" alt="" />
</a>
</nav>
</header>
<div class="app-body">
<div class="app-menu app-menu-light fx-all-250">
<ul class="nav nav-stacked">
<li class="menu-group menu-group-publish">
<a href="#" class="menu-group-title background-fade-white fx-all-250">
<i class="am am-publish"></i><span>Share &amp; Publish</span>
</a>
<div>
<ul class="menu-group-items nav navbar-stacked navbar-share-customize">
<li class="menu-item menu-item-stacked clearfix">
<div class="menu-item-name">
<span>Social Networks:</span>
</div>
<div class="menu-item-control">
<span class=\'btn btn-share btn-default btn-lg btn-twitter\' data-type=\'twitter\'>
<i class=\'fa fa-twitter\'></i>
</span>
<span class=\'btn btn-share btn-default btn-lg btn-facebook\' data-type=\'facebook\'>
<i class=\'fa fa-facebook\'></i>
</span>
<span class=\'btn btn-share btn-default btn-lg btn-google-plus\' data-type=\'google\'>
<i class=\'fa fa-google-plus\'></i>
</span>
<span class=\'btn btn-share btn-default btn-lg btn-tumblr\' data-type=\'tumblr\'>
<i class=\'fa fa-tumblr\'></i>
</span>
<span class=\'btn btn-share btn-default btn-lg btn-linkedin\' data-type=\'linkedin\'>
<i class=\'fa fa-linkedin\'></i>
</span>
<span class=\'btn btn-share btn-default btn-lg btn-pinterest\' data-type=\'pinterest\'>
<i class=\'fa fa-pinterest\'></i>
</span>
<span class=\'btn btn-share btn-default btn-lg btn-reddit\' data-type=\'reddit\'>
<i class=\'fa fa-reddit\'></i>
</span>
</div>
</li>
<li class="menu-item menu-item-stacked">
<div class="menu-item-name">
<span>Link</span>
</div>
<div class="menu-item-control">
<div class="ui-control ui-control-text">
<span class="copyCat cssTooltipRight" data-clipboard-target="#am-share-link"><i class="fa fa-copy"></i></span>
<input type="text" class="am-share-link" id="am-share-link" readonly />
</div>
</div>
</li>
<li class="menu-item menu-item-stacked">
<div class="menu-item-name">
<span>Embed</span>
</div>
<div class="menu-item-control">
<div class="ui-control ui-control-textarea">
<span class="copyCat cssTooltipRight" data-clipboard-target="#am-share-embed"><i class="fa fa-copy"></i></span>
<textarea class="am-share-embed" id="am-share-embed" rows="3" readonly></textarea>
</div>
</div>
</li>
<li class="menu-item menu-item-stacked hidden">
<div class="menu-item-name">
<span>Email</span>
</div>
<div class="menu-item-control clearfix">
<fieldset>
<div class="ui-control ui-control-text" style="float: left; width: 70%;">
<input type="email" id="am-share-email" placeholder="Type e-mail adress here" />
</div>
<button type="submit" class="btn btn-primary btn-send-email" style="margin: 0 5px 0 70%; left: 5px; position: absolute;overflow: hidden;line-height: 14px;width: 30%;">Send</button>
</fieldset>
</div>
</li>
</ul>
</div>
</li>
</ul>
</div>
<div class="app-modal am-share-modal modal fade in">
<div class="modal-dialog">
<div class="modal-content" style="width: 60%; height: 60%; background-color: rgba(255, 255, 255, 0.8);">
<div class="am-share-chart" id="am-share-chart"></div>
</div>
</div>
</div>
</div>
</section>
</div>
<script type="text/javascript">
		  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

		  ga(\'create\', \'UA-22221037-2\', \'amcharts.com\');
		  ga(\'send\', \'pageview\');
		</script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"2b927c5092","applicationID":"5849300","transactionName":"NABbZxNUWRAEWhcKWA1KbEEIGkcLFRYTFlUPDEpbBFEZEw1J","queueTime":0,"applicationTime":7,"atts":"GEdYEVtOSh4=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
'
];
