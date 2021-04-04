<?php
declare(strict_types = 1);

return [
    'headers' => [
        'server' => [
            'nginx'
        ],
        'content-type' => [
            'text/html; charset=utf-8'
        ],
        'x-frame-options' => [
            'SAMEORIGIN'
        ],
        'x-xss-protection' => [
            '1; mode=block'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'etag' => [
            'W/"f0d828317f257c4492514548024e228c"'
        ],
        'cache-control' => [
            'max-age=0, private, must-revalidate'
        ],
        'set-cookie' => [
            'vis=5071cdb5a8a44a62-1b3aff00842edf29-a56d63b74d1de30cv1; path=/; expires=Thu, 04 Apr 2041 15:27:27 GMT; secure',
            'lang=en; path=/; secure',
            'last_page=https%3A%2F%2Fwww.kickstarter.com%2Fprojects%2F1452363698%2Fgood-seed-craft-veggie-burgers; path=/; expires=Sun, 04 Apr 2021 15:57:27 GMT; HttpOnly; secure',
            'optimizely_current_variations=%7B%7D; path=/; secure',
            '_ksr_session=aWNzRXZqNGVIRzB2QmlyTGozNE9QU2tTazhFbGJBQ0l6SGFxWFYwdVZXMXowc25nNUl3eHpVekxCK2plQ3JmV1pPRGYyNFBVVm9pdjZlY3ZuWlJJZ09wcW0zc3dlOFZvL213WENHWVlOaDg0OHkrVkpPaGJZT0xiRkNxc0Y5NEgzMjNBanhwc1JMYzBaT3Vhc1pIVk53PT0tLXVhSkhXQ2V6YUdMTnRwZWdXQnRRR3c9PQ%3D%3D--5c17e0b5b2f2e0d6b3b20c687e0b0570178a72ba; path=/; secure; HttpOnly',
            'request_time=Sun%2C+04+Apr+2021+15%3A27%3A28+-0000; path=/; secure',
            '_pxhd=d94c40904eb0b48ce6294a1f6e846a46307d8ff4d6763431c61a813b81a9a12d:43774fa0-955a-11eb-9b8d-4d3c58d8c7b8; Expires=Mon, 04 Apr 2022 15:27:29 GMT; path=/;'
        ],
        'x-request-id' => [
            '4e353b28-b18b-4497-b428-649efdac06c6'
        ],
        'x-runtime' => [
            '1.265294'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'fastly-restarts' => [
            '1'
        ],
        'accept-ranges' => [
            'bytes'
        ],
        'date' => [
            'Sun, 04 Apr 2021 15:27:29 GMT'
        ],
        'via' => [
            '1.1 varnish'
        ],
        'x-served-by' => [
            'cache-mad22050-MAD'
        ],
        'x-cache' => [
            'MISS'
        ],
        'x-cache-hits' => [
            '0'
        ],
        'strict-transport-security' => [
            'max-age=31557600'
        ],
        'Content-Location' => [
            'https://www.kickstarter.com/projects/1452363698/good-seed-craft-veggie-burgers'
        ],
        'X-Request-Time' => [
            '1.791 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '<!DOCTYPE html>
<html class="projects_show fontface no-js" data-request-id="4e353b28-b18b-4497-b428-649efdac06c6" lang="en">
<script>
  docElement = this.document.documentElement;
  docElement.className=docElement.className.replace(/\\bno-js\\b/,\'\') + \'js\';
</script>
<script>
  (function(){
      window._pxAppId = \'PXUy3R669N\';
      // Custom parameters
      // window._pxParam1 = "<param1>";
      var p = document.getElementsByTagName(\'script\')[0],
          s = document.createElement(\'script\');
      s.async = 1;
      s.src = \'/Uy3R669N/init.js\';
      p.parentNode.insertBefore(s,p);
  }());
</script>
<script>
  !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on","addSourceMiddleware","addIntegrationMiddleware","setAnonymousId","addDestinationMiddleware"];analytics.factory=function(e){return function(){var t=Array.prototype.slice.call(arguments);t.unshift(e);analytics.push(t);return analytics}};for(var e=0;e<analytics.methods.length;e++){var key=analytics.methods[e];analytics[key]=analytics.factory(key)}analytics.load=function(key,e){var t=document.createElement("script");t.type="text/javascript";t.async=!0;t.src="https://cdn.segment.com/analytics.js/v1/" + key + "/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(t,n);analytics._loadOptions=e};analytics.SNIPPET_VERSION="4.13.1";
  analytics.load(\'whtTAcIwM5UX4i8IQO7VCLA6YnLJOynL\');
  var get_cookie = (cookieName) => document.cookie.match(\'(^|;)\\\\s*\' + cookieName + \'\\\\s*=\\\\s*([^;]+)\')?.pop() || \'\'
  var vis = get_cookie(\'vis\')
  analytics.setAnonymousId(vis);
  var hasUserIdBeenSet = () => {
    if (get_cookie(\'ajs_user_id\')) { return true; }
    var localId = localStorage.getItem("ajs_user_id")
    // :( segment can set "null" in this key
    if (localId !== null && localId !== "null") { return true; }
    return false;
  }
  if (false){
    if (false && !hasUserIdBeenSet()) {
      var traits = JSON.parse(`{}`);
      analytics.identify("", traits);
    }
    if (false) {
      var properties = JSON.parse(`null`);
      properties[\'session_apple_pay_capable\'] = !!window.ApplePaySession;
  
      if (false) {
        context = JSON.parse(`null`);
        properties = { ...properties, ...context };
      }
      analytics.track("Page Viewed", {context_page: "", ...properties})
    }
  }
  }}();
</script><title>Good Seed Craft Veggie Burgers by Oliver Ponce and Erin Shotwell &mdash; Kickstarter</title><meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta name="title" content="Kickstarter &gt;&gt; Good Seed Craft Veggie Burgers by Oliver Ponce and Erin Shotwell"/>
<meta name="description" content="Oliver Ponce and Erin Shotwell is raising funds for Good Seed Craft Veggie Burgers on Kickstarter! 

 Nutrient-dense Real Food! Good Seed hemp patties transform the veggie burger with bold flavor blends &amp; sprouted superfood ingredients."/>
<meta name="robots" content="noindex, nofollow, noarchive, nosnippet"/>
<meta property="og:title" content="Good Seed Craft Veggie Burgers"/>
<meta property="og:type" content="kickstarter:project"/>
<meta property="og:url" content="https://www.kickstarter.com/projects/1452363698/good-seed-craft-veggie-burgers"/>
<meta property="og:image" content="https://ksr-ugc.imgix.net/assets/011/647/643/9e80f11b5b125b5b50d1694cbf7f0ba0_original.jpg?ixlib=rb-2.1.0&amp;crop=faces&amp;w=1552&amp;h=873&amp;fit=crop&amp;v=1463686200&amp;auto=format&amp;frame=1&amp;q=92&amp;s=8121611e6ad724f65e52d4cc47b46745"/>
<meta property="og:image:width" content="1536"/>
<meta property="og:image:height" content="1152"/>
<meta property="twitter:image" content="https://ksr-ugc.imgix.net/assets/011/647/643/9e80f11b5b125b5b50d1694cbf7f0ba0_original.jpg?ixlib=rb-2.1.0&amp;crop=faces&amp;w=1024&amp;h=576&amp;fit=crop&amp;v=1463686200&amp;auto=format&amp;frame=1&amp;q=92&amp;s=eab19fa2f547416189fec062421898ba"/>
<meta property="og:site_name" content="Kickstarter"/>
<meta property="fb:app_id" content="69103156693"/>
<meta property="og:description" content="Nutrient-dense Real Food! Good Seed hemp patties transform the veggie burger with bold flavor blends &amp; sprouted superfood ingredients."/>
<meta property="og:locale" content="en_US"/>
<meta property="og:locale:alternate" content="en_US"/>
<meta property="og:locale:alternate" content="de_DE"/>
<meta property="og:locale:alternate" content="es_ES"/>
<meta property="og:locale:alternate" content="fr_FR"/>
<meta property="og:locale:alternate" content="it_IT"/>
<meta property="og:locale:alternate" content="ja_JP"/>
<meta property="og:locale:alternate" content="zh_HK"/>
<meta property="kickstarter:creator" content="https://www.kickstarter.com/profile/1452363698"/>
<meta property="twitter:card" content="summary_large_image"/>
<meta property="twitter:site" content="@kickstarter"/>
<meta property="twitter:site:id" content=""/>
<meta property="twitter:title" content="Good Seed Craft Veggie Burgers"/>
<meta property="twitter:description" content="Nutrient-dense Real Food! Good Seed hemp patties transform the veggie burger with bold flavor blends &amp; sprouted superfood ingredients."/>
<meta property="twitter:url" content="https://www.kickstarter.com/projects/1452363698/good-seed-craft-veggie-burgers"/>
<meta property="twitter:app:id:iphone" content="596961532"/>
<meta property="twitter:app:name:iphone" content="Kickstarter"/>
<meta property="twitter:app:url:iphone" content="ksr://www.kickstarter.com/projects/1452363698/1508881112?app_banner=1"/>
<meta property="twitter:maxage" content="60"/>
<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="M4oUrdtu0ImZ000PBUY/nJ8aUieprG5CTGuTrDHYszQmlO864D08t0c6F07njOil4pjv4mT9OkPJnxuNx8SwPw==" />
<link rel="stylesheet" media="screen" href="https://a.kickstarter.com/assets/packages/mobile_web-8734e948feefa61b3cf546cdf5faad19ed4ac4fc9f0ee3f44057a446bfc48553.css" />
<script id="schwamm_formatting_options">
//<![CDATA[
(function(){window.formatters = window.formatters || {}; var formatting_options = {"distance_date_intervals":[{"min":5,"i18n_key":"schwamm.just_now"},{"min":29,"i18n_key":"schwamm.less_than_a_minute_ago"},{"min":2640,"i18n_key":"schwamm.m_minutes_ago","count_key":"m"},{"min":82800,"i18n_key":"schwamm.about_h_hours_ago","count_key":"h"},{"min":604800,"i18n_key":"schwamm.d_days_ago","count_key":"d"},{"min":15778476,"i18n_key":"schwamm.on_datetime","count_key":"t"},{"min":0,"i18n_key":"schwamm.on_year","count_key":"y"}],"currency_symbol_mappings":{"AED":"AED","AFN":"؋","ALL":"Lek","AMD":"AMD","AOA":"AOA","ARS":"$","EUR":"€","AUD":"AU$ ","AWG":"ƒ","AZN":"ман","BAM":"KM","BBD":"$","BDT":"BDT","BGN":"лв","BHD":"BHD","BIF":"BIF","BMD":"$","BND":"$","BOB":"$b","BRL":"R$","BSD":"$","BTN":"BTN","BWP":"P","BYR":"p.","BZD":"BZ$","CAD":"CA$ ","CDF":"CDF","CHF":"CHF ","CLP":"$","CNY":"¥","COP":"$","CRC":"₡","CUP":"₱","CVE":"CVE","CZK":"Kč","DJF":"DJF","DKK":"DKK ","DOP":"RD$","DZD":"DZD","EGP":"£","ERN":"ERN","ETB":"ETB","FJD":"$","FKP":"£","GBP":"£","GEL":"GEL","GHS":"GHS","GIP":"£","GMD":"GMD","GNF":"GNF","GTQ":"Q","GYD":"$","HKD":"HK$ ","HNL":"L","HRK":"kn","HTG":"HTG","HUF":"Ft","IDR":"Rp","ILS":"₪","INR":"INR","IQD":"IQD","IRR":"﷼","ISK":"kr","JMD":"J$","JOD":"JOD","JPY":"¥","KES":"KES","KGS":"лв","KHR":"៛","KMF":"KMF","KPW":"₩","KRW":"₩","KWD":"KWD","KYD":"$","KZT":"лв","LAK":"₭","LBP":"£","LKR":"₨","LRD":"$","LSL":"LSL","LTL":"Lt","LVL":"Ls","LYD":"LYD","MAD":"MAD","MDL":"MDL","MGA":"MGA","MKD":"ден","MMK":"MMK","MNT":"₮","MOP":"MOP","MRO":"MRO","MUR":"₨","MVR":"MVR","MWK":"MWK","MXN":"MX$ ","MYR":"RM","MZN":"MT","NAD":"$","NGN":"₦","NIO":"C$","NOK":"NOK ","NPR":"₨","NZD":"NZ$ ","OMR":"﷼","PAB":"B/.","PEN":"S/.","PGK":"PGK","PHP":"₱","PKR":"₨","PLN":"PLN ","PYG":"Gs","QAR":"﷼","RON":"lei","RSD":"Дин.","RUB":"руб","RWF":"RWF","SAR":"﷼","SBD":"$","SCR":"₨","SDG":"SDG","SEK":"SEK ","SGD":"S$ ","SHP":"£","SLL":"SLL","SOS":"S","SRD":"$","SSP":"SSP","STD":"STD","SVC":"$","SYP":"£","SZL":"SZL","THB":"฿","TJS":"TJS","TMT":"TMT","TND":"TND","TOP":"TOP","TRY":"TL","TTD":"TT$","TWD":"NT$","TZS":"TZS","UAH":"₴","UGX":"UGX","USD":"$","UYU":"$U","UZS":"лв","VEF":"Bs","VND":"₫","VUV":"VUV","WST":"WST","YER":"﷼","ZAR":"R","ZMK":"ZMK","ZWL":"ZWL"}}; for (key in formatting_options) {window.formatters[key] = formatting_options[key]};}());
//]]>
</script>
<script>
  window.current_ip = \'89.6.157.99\';
  window.current_ip_datacenter = \'false\';
  window.enabled_features = {"show_posts_feed":true,"mobile_project_collection_optimizations":true,"ios_crashlytics":true,"ios_koala":true,"ios_i18n":true,"ios_tappable_category_location":true,"ios_favorite_categories":true,"ios_qualtrics":true,"ios_native_checkout":true,"ios_native_checkout_pledge_view":true,"ios_live_stream_chat":true,"ios_backer_dashboard":true,"android_native_checkout":true,"new_project_feedback":true,"new_project_preview":true,"new_build_header":true,"message_spam":true,"emoji_locale":true,"default_to_campaign_on_mobile":true,"pinned_posts_on_feed":true,"accounts_upgrade":true,"project_build_claims_detection":true,"project_build_rewards_explorer":true,"project_build_zendesk":true,"user_menu_draft_project":true,"make_100_2020":true,"funding_build":true,"funding_sheet":true,"budget_module":true,"drip_sunset_pledging":true,"qualtrics":true,"profile_projects_react":true,"go_rewardless":true,"lazysizes":true,"budget_viz_fashion":true,"budget_viz_arts":true,"project_update_requests":true,"project_header_media_carousel_hero":true,"PL":true,"GR":true,"SI":true,"addons_in_build":true,"allowed_addons_list":true,"IBAN_flexibility":true,"inside_voices_footer":true,"ch_currency_selector":true,"dk_currency_selector":true,"no_currency_selector":true,"se_currency_selector":true,"projects_on_project_page":true,"recs_on_no_results_page":true,"june_2020_privacy_policy":true,"creator_demographics_survey":true,"uk_shipping_rule_tip":true};
  window.fb_app_id = \'69103156693\';
  window.recaptcha_v2_site_key = \'6LcvXZ4UAAAAAHG33vLYekJNAfdFwkLh6Zk0dQJe\';
  window.recaptcha_v3_site_key = \'6Ldnq5UUAAAAAIyJ4W5iCRZDxgU7e3r2THPHaCQ-\';
  
  window.I18n = window.I18n || {};
  window.apple_pay_countries = ["US", "GB", "CA", "AU", "FR", "CH", "SG", "HK", "ES", "NZ", "JP", "SE", "DK", "IE", "IT", "DE"];
  I18n.enabled = true;
  I18n.locale = \'en\';
  I18n.defaultLocale = \'en\';
  I18n.default_locale = I18n.defaultLocale;
  I18n.browser_language = \'\';
  I18n.chosen_language = \'\';
  I18n.calculated_language = \'\';
  I18n.display_language = \'en\';
  I18n.available_locales = [["English","en"],["Deutsch","de"],["Español","es"],["Français","fr"],["Italiano","it"],["日本語","ja"],["繁體中文","zh"]]
  
  window.current_currency = \'USD\'
  
  var _sf_startpt=(new Date()).getTime();
  
  window.current_project = "{&quot;id&quot;:1508881112,&quot;photo&quot;:{&quot;key&quot;:&quot;assets/011/647/643/9e80f11b5b125b5b50d1694cbf7f0ba0_original.jpg&quot;,&quot;full&quot;:&quot;https://ksr-ugc.imgix.net/assets/011/647/643/9e80f11b5b125b5b50d1694cbf7f0ba0_original.jpg?ixlib=rb-2.1.0&amp;crop=faces&amp;w=560&amp;h=315&amp;fit=crop&amp;v=1463686200&amp;auto=format&amp;frame=1&amp;q=92&amp;s=551e5f9430e497f3954a21ab81b30c6a&quot;,&quot;ed&quot;:&quot;https://ksr-ugc.imgix.net/assets/011/647/643/9e80f11b5b125b5b50d1694cbf7f0ba0_original.jpg?ixlib=rb-2.1.0&amp;crop=faces&amp;w=352&amp;h=198&amp;fit=crop&amp;v=1463686200&amp;auto=format&amp;frame=1&amp;q=92&amp;s=198ba037795c61355956c7b2174076f6&quot;,&quot;med&quot;:&quot;https://ksr-ugc.imgix.net/assets/011/647/643/9e80f11b5b125b5b50d1694cbf7f0ba0_original.jpg?ixlib=rb-2.1.0&amp;crop=faces&amp;w=272&amp;h=153&amp;fit=crop&amp;v=1463686200&amp;auto=format&amp;frame=1&amp;q=92&amp;s=5e1afca8c74677f524d228fa5273a329&quot;,&quot;little&quot;:&quot;https://ksr-ugc.imgix.net/assets/011/647/643/9e80f11b5b125b5b50d1694cbf7f0ba0_original.jpg?ixlib=rb-2.1.0&amp;crop=faces&amp;w=208&amp;h=117&amp;fit=crop&amp;v=1463686200&amp;auto=format&amp;frame=1&amp;q=92&amp;s=47fc824052a69cfbbecb65e96584037a&quot;,&quot;small&quot;:&quot;https://ksr-ugc.imgix.net/assets/011/647/643/9e80f11b5b125b5b50d1694cbf7f0ba0_original.jpg?ixlib=rb-2.1.0&amp;crop=faces&amp;w=160&amp;h=90&amp;fit=crop&amp;v=1463686200&amp;auto=format&amp;frame=1&amp;q=92&amp;s=586f08b9f058535065ba19e797e119cb&quot;,&quot;thumb&quot;:&quot;https://ksr-ugc.imgix.net/assets/011/647/643/9e80f11b5b125b5b50d1694cbf7f0ba0_original.jpg?ixlib=rb-2.1.0&amp;crop=faces&amp;w=48&amp;h=27&amp;fit=crop&amp;v=1463686200&amp;auto=format&amp;frame=1&amp;q=92&amp;s=fab87dd6bf220f5d5687a13d9df5cf76&quot;,&quot;1024x576&quot;:&quot;https://ksr-ugc.imgix.net/assets/011/647/643/9e80f11b5b125b5b50d1694cbf7f0ba0_original.jpg?ixlib=rb-2.1.0&amp;crop=faces&amp;w=1024&amp;h=576&amp;fit=crop&amp;v=1463686200&amp;auto=format&amp;frame=1&amp;q=92&amp;s=eab19fa2f547416189fec062421898ba&quot;,&quot;1536x864&quot;:&quot;https://ksr-ugc.imgix.net/assets/011/647/643/9e80f11b5b125b5b50d1694cbf7f0ba0_original.jpg?ixlib=rb-2.1.0&amp;crop=faces&amp;w=1552&amp;h=873&amp;fit=crop&amp;v=1463686200&amp;auto=format&amp;frame=1&amp;q=92&amp;s=8121611e6ad724f65e52d4cc47b46745&quot;},&quot;name&quot;:&quot;Good Seed Craft Veggie Burgers&quot;,&quot;blurb&quot;:&quot;Nutrient-dense Real Food! Good Seed hemp patties transform the veggie burger with bold flavor blends &amp; sprouted superfood ingredients.&quot;,&quot;goal&quot;:20000.0,&quot;pledged&quot;:3422.0,&quot;state&quot;:&quot;failed&quot;,&quot;slug&quot;:&quot;good-seed-craft-veggie-burgers&quot;,&quot;disable_communication&quot;:false,&quot;country&quot;:&quot;US&quot;,&quot;country_displayable_name&quot;:&quot;the United States&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;currency_symbol&quot;:&quot;$&quot;,&quot;currency_trailing_code&quot;:true,&quot;deadline&quot;:1404913719,&quot;state_changed_at&quot;:1404913721,&quot;created_at&quot;:1391702070,&quot;launched_at&quot;:1402062519,&quot;staff_pick&quot;:true,&quot;is_starrable&quot;:false,&quot;backers_count&quot;:78,&quot;static_usd_rate&quot;:1.0,&quot;usd_pledged&quot;:&quot;3422.0&quot;,&quot;converted_pledged_amount&quot;:3422,&quot;fx_rate&quot;:1.0,&quot;current_currency&quot;:&quot;USD&quot;,&quot;usd_type&quot;:&quot;international&quot;,&quot;creator&quot;:{&quot;id&quot;:1452363698,&quot;name&quot;:&quot;Oliver Ponce and Erin Shotwell&quot;,&quot;is_registered&quot;:null,&quot;is_email_verified&quot;:null,&quot;chosen_currency&quot;:null,&quot;is_superbacker&quot;:null,&quot;avatar&quot;:{&quot;thumb&quot;:&quot;https://ksr-ugc.imgix.net/assets/008/391/164/a84c71f0a2cb7eae03353906c439edb7_original.jpg?ixlib=rb-2.1.0&amp;w=40&amp;h=40&amp;fit=crop&amp;v=1461521275&amp;auto=format&amp;frame=1&amp;q=92&amp;s=3700be3af76fe6f00df96be761343f39&quot;,&quot;small&quot;:&quot;https://ksr-ugc.imgix.net/assets/008/391/164/a84c71f0a2cb7eae03353906c439edb7_original.jpg?ixlib=rb-2.1.0&amp;w=80&amp;h=80&amp;fit=crop&amp;v=1461521275&amp;auto=format&amp;frame=1&amp;q=92&amp;s=1e3d5d1a5c0592fc3d12a1ac6a2ba93b&quot;,&quot;medium&quot;:&quot;https://ksr-ugc.imgix.net/assets/008/391/164/a84c71f0a2cb7eae03353906c439edb7_original.jpg?ixlib=rb-2.1.0&amp;w=160&amp;h=160&amp;fit=crop&amp;v=1461521275&amp;auto=format&amp;frame=1&amp;q=92&amp;s=9f6ae363cac4fb4dfdf4f1c4ae1824a9&quot;},&quot;urls&quot;:{&quot;web&quot;:{&quot;user&quot;:&quot;https://www.kickstarter.com/profile/1452363698&quot;},&quot;api&quot;:{&quot;user&quot;:&quot;https://api.kickstarter.com/v1/users/1452363698?signature=1617636448.44a4db0d08c67619f87e022449461be5499b0ca0&quot;}}},&quot;location&quot;:{&quot;id&quot;:2357536,&quot;name&quot;:&quot;Austin&quot;,&quot;slug&quot;:&quot;austin-tx&quot;,&quot;short_name&quot;:&quot;Austin, TX&quot;,&quot;displayable_name&quot;:&quot;Austin, TX&quot;,&quot;localized_name&quot;:&quot;Austin&quot;,&quot;country&quot;:&quot;US&quot;,&quot;state&quot;:&quot;TX&quot;,&quot;type&quot;:&quot;Town&quot;,&quot;is_root&quot;:false,&quot;expanded_country&quot;:&quot;United States&quot;,&quot;urls&quot;:{&quot;web&quot;:{&quot;discover&quot;:&quot;https://www.kickstarter.com/discover/places/austin-tx&quot;,&quot;location&quot;:&quot;https://www.kickstarter.com/locations/austin-tx&quot;},&quot;api&quot;:{&quot;nearby_projects&quot;:&quot;https://api.kickstarter.com/v1/discover?signature=1617628641.4e8fa21f8411b9c4600cf62c78484523e9680179&amp;woe_id=2357536&quot;}}},&quot;category&quot;:{&quot;id&quot;:315,&quot;name&quot;:&quot;Vegan&quot;,&quot;slug&quot;:&quot;food/vegan&quot;,&quot;position&quot;:12,&quot;parent_id&quot;:10,&quot;parent_name&quot;:&quot;Food&quot;,&quot;color&quot;:16725570,&quot;urls&quot;:{&quot;web&quot;:{&quot;discover&quot;:&quot;http://www.kickstarter.com/discover/categories/food/vegan&quot;}}},&quot;profile&quot;:{&quot;id&quot;:879621,&quot;project_id&quot;:879621,&quot;state&quot;:&quot;inactive&quot;,&quot;state_changed_at&quot;:1425915848,&quot;name&quot;:null,&quot;blurb&quot;:null,&quot;background_color&quot;:null,&quot;text_color&quot;:null,&quot;link_background_color&quot;:null,&quot;link_text_color&quot;:null,&quot;link_text&quot;:null,&quot;link_url&quot;:null,&quot;show_feature_image&quot;:false,&quot;background_image_opacity&quot;:0.8,&quot;should_show_feature_image_section&quot;:true,&quot;feature_image_attributes&quot;:{&quot;image_urls&quot;:{&quot;default&quot;:&quot;https://ksr-ugc.imgix.net/assets/011/647/643/9e80f11b5b125b5b50d1694cbf7f0ba0_original.jpg?ixlib=rb-2.1.0&amp;crop=faces&amp;w=1552&amp;h=873&amp;fit=crop&amp;v=1463686200&amp;auto=format&amp;frame=1&amp;q=92&amp;s=8121611e6ad724f65e52d4cc47b46745&quot;,&quot;baseball_card&quot;:&quot;https://ksr-ugc.imgix.net/assets/011/647/643/9e80f11b5b125b5b50d1694cbf7f0ba0_original.jpg?ixlib=rb-2.1.0&amp;crop=faces&amp;w=560&amp;h=315&amp;fit=crop&amp;v=1463686200&amp;auto=format&amp;frame=1&amp;q=92&amp;s=551e5f9430e497f3954a21ab81b30c6a&quot;}}},&quot;spotlight&quot;:false,&quot;urls&quot;:{&quot;web&quot;:{&quot;project&quot;:&quot;https://www.kickstarter.com/projects/1452363698/good-seed-craft-veggie-burgers&quot;,&quot;rewards&quot;:&quot;https://www.kickstarter.com/projects/1452363698/good-seed-craft-veggie-burgers/rewards&quot;,&quot;project_short&quot;:&quot;http://kck.st/1i8Ct6M&quot;,&quot;updates&quot;:&quot;https://www.kickstarter.com/projects/1452363698/good-seed-craft-veggie-burgers/posts&quot;},&quot;api&quot;:{&quot;project&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112?signature=1617636448.dc5391378b637be959596cf14171d3c62d33bad5&quot;,&quot;comments&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112/comments?signature=1617636448.22e1403bbb2aa12d1abafdeacf5e5b55c12f78cd&quot;,&quot;updates&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112/updates?signature=1617636448.85a4daafd93e4d28c94918a4d89f31b7a9d36af5&quot;}},&quot;updated_at&quot;:1463686200,&quot;failed_at&quot;:1404913721,&quot;video&quot;:{&quot;id&quot;:392537,&quot;status&quot;:&quot;successful&quot;,&quot;hls&quot;:null,&quot;high&quot;:&quot;https://v.kickstarter.com/1617722848_a3f33b4f46b570fbc23bdc73c82cba369dbe6d1a/projects/859806/video-392537-h264_high.mp4&quot;,&quot;base&quot;:&quot;https://v.kickstarter.com/1617722848_a3f33b4f46b570fbc23bdc73c82cba369dbe6d1a/projects/859806/video-392537-h264_base.mp4&quot;,&quot;width&quot;:640,&quot;height&quot;:360,&quot;frame&quot;:&quot;https://d15chbti7ht62o.cloudfront.net/projects/859806/video-392537-h264_high.jpg?2014&quot;},&quot;comments_count&quot;:4,&quot;updates_count&quot;:3,&quot;tags&quot;:[],&quot;rewards&quot;:[{&quot;id&quot;:0,&quot;description&quot;:&quot;No Reward&quot;,&quot;minimum&quot;:1,&quot;reward&quot;:&quot;No Reward&quot;,&quot;converted_minimum&quot;:1.0},{&quot;id&quot;:2535705,&quot;minimum&quot;:10.0,&quot;converted_minimum&quot;:10.0,&quot;reward&quot;:&quot;STICKER + BUTTONS + THANK YOU\\\\t\\\\t\\\\t\\\\t\\\\r\\\\nYou will receive a Good Seed sticker, buttons, and \\\\t\\\\t\\\\t\\\\t\\\\r\\\\na hand written thank you card for your generous support.&quot;,&quot;description&quot;:&quot;STICKER + BUTTONS + THANK YOU\\\\t\\\\t\\\\t\\\\t\\\\r\\\\nYou will receive a Good Seed sticker, buttons, and \\\\t\\\\t\\\\t\\\\t\\\\r\\\\na hand written thank you card for your generous support.&quot;,&quot;title_for_backing_tier&quot;:&quot;$10 reward&quot;,&quot;shipping_enabled&quot;:true,&quot;shipping_preference&quot;:&quot;restricted&quot;,&quot;shipping_summary&quot;:&quot;Only United States&quot;,&quot;shipping_type&quot;:&quot;single_location&quot;,&quot;shipping_single_location&quot;:{&quot;id&quot;:23424977,&quot;name&quot;:&quot;United States&quot;,&quot;slug&quot;:null,&quot;short_name&quot;:&quot;United States&quot;,&quot;displayable_name&quot;:&quot;United States&quot;,&quot;localized_name&quot;:&quot;United States&quot;,&quot;country&quot;:&quot;US&quot;,&quot;state&quot;:null,&quot;type&quot;:&quot;Country&quot;,&quot;is_root&quot;:false,&quot;expanded_country&quot;:&quot;United States&quot;,&quot;urls&quot;:{&quot;web&quot;:{&quot;discover&quot;:&quot;https://www.kickstarter.com/discover/places/23424977&quot;,&quot;location&quot;:&quot;https://www.kickstarter.com/locations/23424977&quot;},&quot;api&quot;:{&quot;nearby_projects&quot;:&quot;https://api.kickstarter.com/v1/discover?signature=1617636448.99b0f2c42ebbc9f1f9830af9613e3039abfde239&amp;woe_id=23424977&quot;}},&quot;projects_count&quot;:0},&quot;estimated_delivery_on&quot;:1406851200,&quot;has_addons&quot;:false,&quot;reward_type&quot;:&quot;base&quot;,&quot;project_id&quot;:1508881112,&quot;available&quot;:true,&quot;backers_count&quot;:6,&quot;updated_at&quot;:1486286637,&quot;rewards_items&quot;:[],&quot;urls&quot;:{&quot;api&quot;:{&quot;reward&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112/rewards/2535705?signature=1617636448.53af5b65c727c84e46581575de555df830464a8d&quot;}}},{&quot;id&quot;:2603560,&quot;minimum&quot;:25.0,&quot;converted_minimum&quot;:25.0,&quot;reward&quot;:&quot;BURGERS!! Get two boxes of each flavor for a total of 4 boxes. Please add the proper shipping cost when completing your pledge. Local Austin residents can pick up on one of our pick up dates.  We will be in touch about pick up dates.  We know shipping is high, but our product is frozen and requires 2 day air.  Residents of AZ, UT, WY, MT, ND, SD, MN, IA, WI, MI, IN, OH, KY, WV, VA, NC, SC, GA, FL, CO,IL add $36 for shipping.  Residents of WA, OR, NV, CA, NY, CT, RI, MA, ME, VT, HI, AL  add $48.  All other states add $13.&quot;,&quot;description&quot;:&quot;BURGERS!! Get two boxes of each flavor for a total of 4 boxes. Please add the proper shipping cost when completing your pledge. Local Austin residents can pick up on one of our pick up dates.  We will be in touch about pick up dates.  We know shipping is high, but our product is frozen and requires 2 day air.  Residents of AZ, UT, WY, MT, ND, SD, MN, IA, WI, MI, IN, OH, KY, WV, VA, NC, SC, GA, FL, CO,IL add $36 for shipping.  Residents of WA, OR, NV, CA, NY, CT, RI, MA, ME, VT, HI, AL  add $48.  All other states add $13.&quot;,&quot;title_for_backing_tier&quot;:&quot;$25 reward&quot;,&quot;shipping_enabled&quot;:true,&quot;shipping_preference&quot;:&quot;restricted&quot;,&quot;shipping_summary&quot;:&quot;Only United States&quot;,&quot;shipping_type&quot;:&quot;single_location&quot;,&quot;shipping_single_location&quot;:{&quot;id&quot;:23424977,&quot;name&quot;:&quot;United States&quot;,&quot;slug&quot;:null,&quot;short_name&quot;:&quot;United States&quot;,&quot;displayable_name&quot;:&quot;United States&quot;,&quot;localized_name&quot;:&quot;United States&quot;,&quot;country&quot;:&quot;US&quot;,&quot;state&quot;:null,&quot;type&quot;:&quot;Country&quot;,&quot;is_root&quot;:false,&quot;expanded_country&quot;:&quot;United States&quot;,&quot;urls&quot;:{&quot;web&quot;:{&quot;discover&quot;:&quot;https://www.kickstarter.com/discover/places/23424977&quot;,&quot;location&quot;:&quot;https://www.kickstarter.com/locations/23424977&quot;},&quot;api&quot;:{&quot;nearby_projects&quot;:&quot;https://api.kickstarter.com/v1/discover?signature=1617636448.99b0f2c42ebbc9f1f9830af9613e3039abfde239&amp;woe_id=23424977&quot;}},&quot;projects_count&quot;:0},&quot;estimated_delivery_on&quot;:1406851200,&quot;has_addons&quot;:false,&quot;reward_type&quot;:&quot;base&quot;,&quot;project_id&quot;:1508881112,&quot;available&quot;:true,&quot;backers_count&quot;:20,&quot;updated_at&quot;:1486303947,&quot;rewards_items&quot;:[],&quot;urls&quot;:{&quot;api&quot;:{&quot;reward&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112/rewards/2603560?signature=1617636448.22cc1dbfae15c367d3732890b0346b966a2aefb4&quot;}}},{&quot;id&quot;:2535706,&quot;minimum&quot;:30.0,&quot;converted_minimum&quot;:30.0,&quot;reward&quot;:&quot;GOOD SEED PINT GLASS + STICKERS + BUTTONS\\\\r\\\\nYou will get a stainless steel Good Seed pint glass, Good Seed\\\\t\\\\t\\\\t\\\\t\\\\r\\\\nstickers, and buttons.&quot;,&quot;description&quot;:&quot;GOOD SEED PINT GLASS + STICKERS + BUTTONS\\\\r\\\\nYou will get a stainless steel Good Seed pint glass, Good Seed\\\\t\\\\t\\\\t\\\\t\\\\r\\\\nstickers, and buttons.&quot;,&quot;title_for_backing_tier&quot;:&quot;$30 reward&quot;,&quot;shipping_enabled&quot;:true,&quot;shipping_preference&quot;:&quot;restricted&quot;,&quot;shipping_summary&quot;:&quot;Only United States&quot;,&quot;shipping_type&quot;:&quot;single_location&quot;,&quot;shipping_single_location&quot;:{&quot;id&quot;:23424977,&quot;name&quot;:&quot;United States&quot;,&quot;slug&quot;:null,&quot;short_name&quot;:&quot;United States&quot;,&quot;displayable_name&quot;:&quot;United States&quot;,&quot;localized_name&quot;:&quot;United States&quot;,&quot;country&quot;:&quot;US&quot;,&quot;state&quot;:null,&quot;type&quot;:&quot;Country&quot;,&quot;is_root&quot;:false,&quot;expanded_country&quot;:&quot;United States&quot;,&quot;urls&quot;:{&quot;web&quot;:{&quot;discover&quot;:&quot;https://www.kickstarter.com/discover/places/23424977&quot;,&quot;location&quot;:&quot;https://www.kickstarter.com/locations/23424977&quot;},&quot;api&quot;:{&quot;nearby_projects&quot;:&quot;https://api.kickstarter.com/v1/discover?signature=1617636448.99b0f2c42ebbc9f1f9830af9613e3039abfde239&amp;woe_id=23424977&quot;}},&quot;projects_count&quot;:0},&quot;estimated_delivery_on&quot;:1406851200,&quot;has_addons&quot;:false,&quot;reward_type&quot;:&quot;base&quot;,&quot;project_id&quot;:1508881112,&quot;available&quot;:true,&quot;backers_count&quot;:4,&quot;updated_at&quot;:1486283007,&quot;rewards_items&quot;:[],&quot;urls&quot;:{&quot;api&quot;:{&quot;reward&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112/rewards/2535706?signature=1617636448.205bfe2dd02eabc8f779a89b3a8384b2a4d6f786&quot;}}},{&quot;id&quot;:2538326,&quot;minimum&quot;:30.0,&quot;converted_minimum&quot;:30.0,&quot;reward&quot;:&quot;GOOD SEED HEMP TOTE\\\\r\\\\nYou will receive a tote bag made of hemp with the good seed logo, stickers, and buttons.&quot;,&quot;description&quot;:&quot;GOOD SEED HEMP TOTE\\\\r\\\\nYou will receive a tote bag made of hemp with the good seed logo, stickers, and buttons.&quot;,&quot;title_for_backing_tier&quot;:&quot;$30 reward&quot;,&quot;shipping_enabled&quot;:true,&quot;shipping_preference&quot;:&quot;restricted&quot;,&quot;shipping_summary&quot;:&quot;Only United States&quot;,&quot;shipping_type&quot;:&quot;single_location&quot;,&quot;shipping_single_location&quot;:{&quot;id&quot;:23424977,&quot;name&quot;:&quot;United States&quot;,&quot;slug&quot;:null,&quot;short_name&quot;:&quot;United States&quot;,&quot;displayable_name&quot;:&quot;United States&quot;,&quot;localized_name&quot;:&quot;United States&quot;,&quot;country&quot;:&quot;US&quot;,&quot;state&quot;:null,&quot;type&quot;:&quot;Country&quot;,&quot;is_root&quot;:false,&quot;expanded_country&quot;:&quot;United States&quot;,&quot;urls&quot;:{&quot;web&quot;:{&quot;discover&quot;:&quot;https://www.kickstarter.com/discover/places/23424977&quot;,&quot;location&quot;:&quot;https://www.kickstarter.com/locations/23424977&quot;},&quot;api&quot;:{&quot;nearby_projects&quot;:&quot;https://api.kickstarter.com/v1/discover?signature=1617636448.99b0f2c42ebbc9f1f9830af9613e3039abfde239&amp;woe_id=23424977&quot;}},&quot;projects_count&quot;:0},&quot;estimated_delivery_on&quot;:1406851200,&quot;has_addons&quot;:false,&quot;reward_type&quot;:&quot;base&quot;,&quot;project_id&quot;:1508881112,&quot;available&quot;:true,&quot;backers_count&quot;:3,&quot;updated_at&quot;:1486303308,&quot;rewards_items&quot;:[],&quot;urls&quot;:{&quot;api&quot;:{&quot;reward&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112/rewards/2538326?signature=1617636448.d3fe863100ec5076bcfb2267015ee350397d486b&quot;}}},{&quot;id&quot;:2535707,&quot;minimum&quot;:35.0,&quot;converted_minimum&quot;:35.0,&quot;reward&quot;:&quot;GOOD SEED T-SHIRT\\\\r\\\\nA men&#39;s or women&#39;s t-shirt, Good Seed stickers and buttons.  We will be in touch for size and color options.&quot;,&quot;description&quot;:&quot;GOOD SEED T-SHIRT\\\\r\\\\nA men&#39;s or women&#39;s t-shirt, Good Seed stickers and buttons.  We will be in touch for size and color options.&quot;,&quot;title_for_backing_tier&quot;:&quot;$35 reward&quot;,&quot;shipping_enabled&quot;:true,&quot;shipping_preference&quot;:&quot;restricted&quot;,&quot;shipping_summary&quot;:&quot;Only United States&quot;,&quot;shipping_type&quot;:&quot;single_location&quot;,&quot;shipping_single_location&quot;:{&quot;id&quot;:23424977,&quot;name&quot;:&quot;United States&quot;,&quot;slug&quot;:null,&quot;short_name&quot;:&quot;United States&quot;,&quot;displayable_name&quot;:&quot;United States&quot;,&quot;localized_name&quot;:&quot;United States&quot;,&quot;country&quot;:&quot;US&quot;,&quot;state&quot;:null,&quot;type&quot;:&quot;Country&quot;,&quot;is_root&quot;:false,&quot;expanded_country&quot;:&quot;United States&quot;,&quot;urls&quot;:{&quot;web&quot;:{&quot;discover&quot;:&quot;https://www.kickstarter.com/discover/places/23424977&quot;,&quot;location&quot;:&quot;https://www.kickstarter.com/locations/23424977&quot;},&quot;api&quot;:{&quot;nearby_projects&quot;:&quot;https://api.kickstarter.com/v1/discover?signature=1617636448.99b0f2c42ebbc9f1f9830af9613e3039abfde239&amp;woe_id=23424977&quot;}},&quot;projects_count&quot;:0},&quot;estimated_delivery_on&quot;:1409529600,&quot;has_addons&quot;:false,&quot;reward_type&quot;:&quot;base&quot;,&quot;project_id&quot;:1508881112,&quot;available&quot;:true,&quot;backers_count&quot;:3,&quot;updated_at&quot;:1486270483,&quot;rewards_items&quot;:[],&quot;urls&quot;:{&quot;api&quot;:{&quot;reward&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112/rewards/2535707?signature=1617636448.5f76c78944346c56326d154000793ab63e234a83&quot;}}},{&quot;id&quot;:2538334,&quot;minimum&quot;:55.0,&quot;converted_minimum&quot;:55.0,&quot;reward&quot;:&quot;GOOD WATER + GOOD FOOD PACK\\\\r\\\\nYou get a stainless steel Kleen Kanteen branded Good Seed water bottle, 1 pack of local Zap! Ayurverdic herbal drink packets and 2 boxes of Good Seed burgers.  Please add the proper shipping cost when completing your pledge.  Local Austin residents can pick up on one of our pick up dates.  We will be in touch about pick up dates.  We know shipping is high, but our product is frozen so they must be sent by 2 day air.  Residents of AZ, UT, WY, MT, ND, SD, MN, IA, WI, MI, IN, OH, KY, WV, VA, NC, SC, GA, FL, CO,IL add $36 for shipping.  Residents of WA, OR, NV, CA, NY, CT, RI, MA, ME, VT, HI, AL  add $48.  All other states add $13.&quot;,&quot;description&quot;:&quot;GOOD WATER + GOOD FOOD PACK\\\\r\\\\nYou get a stainless steel Kleen Kanteen branded Good Seed water bottle, 1 pack of local Zap! Ayurverdic herbal drink packets and 2 boxes of Good Seed burgers.  Please add the proper shipping cost when completing your pledge.  Local Austin residents can pick up on one of our pick up dates.  We will be in touch about pick up dates.  We know shipping is high, but our product is frozen so they must be sent by 2 day air.  Residents of AZ, UT, WY, MT, ND, SD, MN, IA, WI, MI, IN, OH, KY, WV, VA, NC, SC, GA, FL, CO,IL add $36 for shipping.  Residents of WA, OR, NV, CA, NY, CT, RI, MA, ME, VT, HI, AL  add $48.  All other states add $13.&quot;,&quot;title_for_backing_tier&quot;:&quot;$55 reward&quot;,&quot;shipping_enabled&quot;:true,&quot;shipping_preference&quot;:&quot;restricted&quot;,&quot;shipping_summary&quot;:&quot;Only United States&quot;,&quot;shipping_type&quot;:&quot;single_location&quot;,&quot;shipping_single_location&quot;:{&quot;id&quot;:23424977,&quot;name&quot;:&quot;United States&quot;,&quot;slug&quot;:null,&quot;short_name&quot;:&quot;United States&quot;,&quot;displayable_name&quot;:&quot;United States&quot;,&quot;localized_name&quot;:&quot;United States&quot;,&quot;country&quot;:&quot;US&quot;,&quot;state&quot;:null,&quot;type&quot;:&quot;Country&quot;,&quot;is_root&quot;:false,&quot;expanded_country&quot;:&quot;United States&quot;,&quot;urls&quot;:{&quot;web&quot;:{&quot;discover&quot;:&quot;https://www.kickstarter.com/discover/places/23424977&quot;,&quot;location&quot;:&quot;https://www.kickstarter.com/locations/23424977&quot;},&quot;api&quot;:{&quot;nearby_projects&quot;:&quot;https://api.kickstarter.com/v1/discover?signature=1617636448.99b0f2c42ebbc9f1f9830af9613e3039abfde239&amp;woe_id=23424977&quot;}},&quot;projects_count&quot;:0},&quot;estimated_delivery_on&quot;:1406851200,&quot;has_addons&quot;:false,&quot;reward_type&quot;:&quot;base&quot;,&quot;project_id&quot;:1508881112,&quot;available&quot;:true,&quot;backers_count&quot;:4,&quot;updated_at&quot;:1486285365,&quot;rewards_items&quot;:[],&quot;urls&quot;:{&quot;api&quot;:{&quot;reward&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112/rewards/2538334?signature=1617636448.f711b43943699377e9c14bf242921f226fc90d96&quot;}}},{&quot;id&quot;:2538616,&quot;minimum&quot;:60.0,&quot;converted_minimum&quot;:60.0,&quot;reward&quot;:&quot;GOOD SEED HOODIE\\\\t\\\\t\\\\t\\\\t\\\\r\\\\nSport a Good Seed hoodie with our burger emblem on the front and logo on the back.&quot;,&quot;description&quot;:&quot;GOOD SEED HOODIE\\\\t\\\\t\\\\t\\\\t\\\\r\\\\nSport a Good Seed hoodie with our burger emblem on the front and logo on the back.&quot;,&quot;limit&quot;:50,&quot;title_for_backing_tier&quot;:&quot;$60 reward&quot;,&quot;shipping_enabled&quot;:true,&quot;shipping_preference&quot;:&quot;restricted&quot;,&quot;shipping_summary&quot;:&quot;Only United States&quot;,&quot;shipping_type&quot;:&quot;single_location&quot;,&quot;shipping_single_location&quot;:{&quot;id&quot;:23424977,&quot;name&quot;:&quot;United States&quot;,&quot;slug&quot;:null,&quot;short_name&quot;:&quot;United States&quot;,&quot;displayable_name&quot;:&quot;United States&quot;,&quot;localized_name&quot;:&quot;United States&quot;,&quot;country&quot;:&quot;US&quot;,&quot;state&quot;:null,&quot;type&quot;:&quot;Country&quot;,&quot;is_root&quot;:false,&quot;expanded_country&quot;:&quot;United States&quot;,&quot;urls&quot;:{&quot;web&quot;:{&quot;discover&quot;:&quot;https://www.kickstarter.com/discover/places/23424977&quot;,&quot;location&quot;:&quot;https://www.kickstarter.com/locations/23424977&quot;},&quot;api&quot;:{&quot;nearby_projects&quot;:&quot;https://api.kickstarter.com/v1/discover?signature=1617636448.99b0f2c42ebbc9f1f9830af9613e3039abfde239&amp;woe_id=23424977&quot;}},&quot;projects_count&quot;:0},&quot;estimated_delivery_on&quot;:1409529600,&quot;has_addons&quot;:false,&quot;reward_type&quot;:&quot;base&quot;,&quot;project_id&quot;:1508881112,&quot;remaining&quot;:47,&quot;available&quot;:true,&quot;backers_count&quot;:3,&quot;updated_at&quot;:1486271647,&quot;rewards_items&quot;:[],&quot;urls&quot;:{&quot;api&quot;:{&quot;reward&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112/rewards/2538616?signature=1617636448.de1e117d0c36b519264b1adc7bc171a4c132a613&quot;}}},{&quot;id&quot;:2538615,&quot;minimum&quot;:65.0,&quot;converted_minimum&quot;:65.0,&quot;reward&quot;:&quot;CRAFT BURGER PACK  2 boxes of each flavor plus local artisan condiments from Dai Due, Oh Khimchi, and Grandma&#39;s Hummus. Just add fresh veggies of your choice! Delivered to your door from Farmhouse Delivery. Available in Austin and Houston. Vegan options available.&quot;,&quot;description&quot;:&quot;CRAFT BURGER PACK  2 boxes of each flavor plus local artisan condiments from Dai Due, Oh Khimchi, and Grandma&#39;s Hummus. Just add fresh veggies of your choice! Delivered to your door from Farmhouse Delivery. Available in Austin and Houston. Vegan options available.&quot;,&quot;title_for_backing_tier&quot;:&quot;$65 reward&quot;,&quot;shipping_enabled&quot;:false,&quot;shipping_type&quot;:&quot;no_shipping&quot;,&quot;estimated_delivery_on&quot;:1406851200,&quot;has_addons&quot;:false,&quot;reward_type&quot;:&quot;base&quot;,&quot;project_id&quot;:1508881112,&quot;available&quot;:true,&quot;backers_count&quot;:0,&quot;updated_at&quot;:1413870130,&quot;rewards_items&quot;:[],&quot;urls&quot;:{&quot;api&quot;:{&quot;reward&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112/rewards/2538615?signature=1617636448.f872aee9d837919154c336e9c9581db0bd04aa79&quot;}}},{&quot;id&quot;:2644269,&quot;minimum&quot;:65.0,&quot;converted_minimum&quot;:65.0,&quot;reward&quot;:&quot;LOCAL BREAKFAST PACK\\\\r\\\\nTwo boxes of our spicy Italian sausage patties,  Salt &amp; Rosemary\\\\r\\\\nRockstar Bagels, Vital Farms eggs, Confituras seasonal jelly, and  Full Quiver seasonal Cheese spread delivered to your door from Greenling Organic. Available in Austin and Houston. Vegan options available.&quot;,&quot;description&quot;:&quot;LOCAL BREAKFAST PACK\\\\r\\\\nTwo boxes of our spicy Italian sausage patties,  Salt &amp; Rosemary\\\\r\\\\nRockstar Bagels, Vital Farms eggs, Confituras seasonal jelly, and  Full Quiver seasonal Cheese spread delivered to your door from Greenling Organic. Available in Austin and Houston. Vegan options available.&quot;,&quot;title_for_backing_tier&quot;:&quot;$65 reward&quot;,&quot;shipping_enabled&quot;:false,&quot;shipping_type&quot;:&quot;no_shipping&quot;,&quot;estimated_delivery_on&quot;:1406851200,&quot;has_addons&quot;:false,&quot;reward_type&quot;:&quot;base&quot;,&quot;project_id&quot;:1508881112,&quot;available&quot;:true,&quot;backers_count&quot;:1,&quot;updated_at&quot;:1486266886,&quot;rewards_items&quot;:[],&quot;urls&quot;:{&quot;api&quot;:{&quot;reward&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112/rewards/2644269?signature=1617636448.6cb980acc6c6e1f7dbad3db608359306b3a06d2f&quot;}}},{&quot;id&quot;:2538618,&quot;minimum&quot;:75.0,&quot;converted_minimum&quot;:75.0,&quot;reward&quot;:&quot;BURGER STASH &amp; T-SHIRT\\\\r\\\\nEight boxes of Good Seed Burgers (flavor of your choice) plus a t-shirt.\\\\r\\\\nPlease add the proper shipping costs when completing your pledge.\\\\r\\\\nWe know shipping is high but our product requires 2 day air because it is frozen.  Local Austin residents can pick up at set pick up times.  Residents of AZ, UT, WY, MT, ND, SD, MN, IA, WI, MI, IN, OH, KY, WV, VA, NC, SC, GA, FL, CO,IL add $55 for shipping     Residents of WA, OR, NV, CA, NY, CT, RI, MA, ME, VT, HI, AL  add $78.  All other states add $14.&quot;,&quot;description&quot;:&quot;BURGER STASH &amp; T-SHIRT\\\\r\\\\nEight boxes of Good Seed Burgers (flavor of your choice) plus a t-shirt.\\\\r\\\\nPlease add the proper shipping costs when completing your pledge.\\\\r\\\\nWe know shipping is high but our product requires 2 day air because it is frozen.  Local Austin residents can pick up at set pick up times.  Residents of AZ, UT, WY, MT, ND, SD, MN, IA, WI, MI, IN, OH, KY, WV, VA, NC, SC, GA, FL, CO,IL add $55 for shipping     Residents of WA, OR, NV, CA, NY, CT, RI, MA, ME, VT, HI, AL  add $78.  All other states add $14.&quot;,&quot;title_for_backing_tier&quot;:&quot;$75 reward&quot;,&quot;shipping_enabled&quot;:true,&quot;shipping_preference&quot;:&quot;restricted&quot;,&quot;shipping_summary&quot;:&quot;Only United States&quot;,&quot;shipping_type&quot;:&quot;single_location&quot;,&quot;shipping_single_location&quot;:{&quot;id&quot;:23424977,&quot;name&quot;:&quot;United States&quot;,&quot;slug&quot;:null,&quot;short_name&quot;:&quot;United States&quot;,&quot;displayable_name&quot;:&quot;United States&quot;,&quot;localized_name&quot;:&quot;United States&quot;,&quot;country&quot;:&quot;US&quot;,&quot;state&quot;:null,&quot;type&quot;:&quot;Country&quot;,&quot;is_root&quot;:false,&quot;expanded_country&quot;:&quot;United States&quot;,&quot;urls&quot;:{&quot;web&quot;:{&quot;discover&quot;:&quot;https://www.kickstarter.com/discover/places/23424977&quot;,&quot;location&quot;:&quot;https://www.kickstarter.com/locations/23424977&quot;},&quot;api&quot;:{&quot;nearby_projects&quot;:&quot;https://api.kickstarter.com/v1/discover?signature=1617636448.99b0f2c42ebbc9f1f9830af9613e3039abfde239&amp;woe_id=23424977&quot;}},&quot;projects_count&quot;:0},&quot;estimated_delivery_on&quot;:1406851200,&quot;has_addons&quot;:false,&quot;reward_type&quot;:&quot;base&quot;,&quot;project_id&quot;:1508881112,&quot;available&quot;:true,&quot;backers_count&quot;:3,&quot;updated_at&quot;:1486303898,&quot;rewards_items&quot;:[],&quot;urls&quot;:{&quot;api&quot;:{&quot;reward&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112/rewards/2538618?signature=1617636448.382b2f674accdd8c2d7bb3e740469fd667bbb8f8&quot;}}},{&quot;id&quot;:2542641,&quot;minimum&quot;:100.0,&quot;converted_minimum&quot;:100.0,&quot;reward&quot;:&quot;TASTE OF AUSTIN SUPERFOOD PACK\\\\r\\\\nEnjoy the superfood tastes of Austin with this pack of products and stickers from health conscious Austin artisans packed in a Good Seed tote bag!  Includes two boxes of Good Seed burgers, Love Bean raw chocolate spread, Bearded Brothers Energy Bars, Happy Hemp seeds, Rhythm Superfoods Kale Chips, and Thunderbird Energetica Bars!\\\\r\\\\nPlease add the proper shipping costs when completing your pledge.\\\\r\\\\nLocal Austin residents get pick up or free delivery.  Shipping requires 2 day air because our product is frozen.  Residents of AZ, UT, WY, MT, ND, SD, MN, IA, WI, MI, IN, OH, KY, WV, VA, NC, SC, GA, FL, CO,IL add $48 for shipping     Residents of WA, OR, NV, CA, NY, CT, RI, MA, ME, VT, HI, AL  add $56.  All other states add $12.&quot;,&quot;description&quot;:&quot;TASTE OF AUSTIN SUPERFOOD PACK\\\\r\\\\nEnjoy the superfood tastes of Austin with this pack of products and stickers from health conscious Austin artisans packed in a Good Seed tote bag!  Includes two boxes of Good Seed burgers, Love Bean raw chocolate spread, Bearded Brothers Energy Bars, Happy Hemp seeds, Rhythm Superfoods Kale Chips, and Thunderbird Energetica Bars!\\\\r\\\\nPlease add the proper shipping costs when completing your pledge.\\\\r\\\\nLocal Austin residents get pick up or free delivery.  Shipping requires 2 day air because our product is frozen.  Residents of AZ, UT, WY, MT, ND, SD, MN, IA, WI, MI, IN, OH, KY, WV, VA, NC, SC, GA, FL, CO,IL add $48 for shipping     Residents of WA, OR, NV, CA, NY, CT, RI, MA, ME, VT, HI, AL  add $56.  All other states add $12.&quot;,&quot;limit&quot;:75,&quot;title_for_backing_tier&quot;:&quot;$100 reward&quot;,&quot;shipping_enabled&quot;:true,&quot;shipping_preference&quot;:&quot;restricted&quot;,&quot;shipping_summary&quot;:&quot;Only United States&quot;,&quot;shipping_type&quot;:&quot;single_location&quot;,&quot;shipping_single_location&quot;:{&quot;id&quot;:23424977,&quot;name&quot;:&quot;United States&quot;,&quot;slug&quot;:null,&quot;short_name&quot;:&quot;United States&quot;,&quot;displayable_name&quot;:&quot;United States&quot;,&quot;localized_name&quot;:&quot;United States&quot;,&quot;country&quot;:&quot;US&quot;,&quot;state&quot;:null,&quot;type&quot;:&quot;Country&quot;,&quot;is_root&quot;:false,&quot;expanded_country&quot;:&quot;United States&quot;,&quot;urls&quot;:{&quot;web&quot;:{&quot;discover&quot;:&quot;https://www.kickstarter.com/discover/places/23424977&quot;,&quot;location&quot;:&quot;https://www.kickstarter.com/locations/23424977&quot;},&quot;api&quot;:{&quot;nearby_projects&quot;:&quot;https://api.kickstarter.com/v1/discover?signature=1617636448.99b0f2c42ebbc9f1f9830af9613e3039abfde239&amp;woe_id=23424977&quot;}},&quot;projects_count&quot;:0},&quot;estimated_delivery_on&quot;:1406851200,&quot;has_addons&quot;:false,&quot;reward_type&quot;:&quot;base&quot;,&quot;project_id&quot;:1508881112,&quot;remaining&quot;:72,&quot;available&quot;:true,&quot;backers_count&quot;:3,&quot;updated_at&quot;:1486288841,&quot;rewards_items&quot;:[],&quot;urls&quot;:{&quot;api&quot;:{&quot;reward&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112/rewards/2542641?signature=1617636448.3e5803717689f7a8a15d6212585ff1851f3f7c08&quot;}}},{&quot;id&quot;:2563846,&quot;minimum&quot;:150.0,&quot;converted_minimum&quot;:150.0,&quot;reward&quot;:&quot;SEED TO PLATE FARMHOUSE DINNER\\\\t\\\\t\\\\t\\\\t\\\\t\\\\r\\\\nJoin us for a 5 course farmhouse dinner at the local Springdale farm prepared by Good Seed and talented Austin chef Gabe Erales.  Gabe has worked at some of the best restaurants in town including Odd Duck, Barley Swine, and La Condesa.  We will work with Gabe to create an unforgettable dining experience sourced from local farms and food artisans.&quot;,&quot;description&quot;:&quot;SEED TO PLATE FARMHOUSE DINNER\\\\t\\\\t\\\\t\\\\t\\\\t\\\\r\\\\nJoin us for a 5 course farmhouse dinner at the local Springdale farm prepared by Good Seed and talented Austin chef Gabe Erales.  Gabe has worked at some of the best restaurants in town including Odd Duck, Barley Swine, and La Condesa.  We will work with Gabe to create an unforgettable dining experience sourced from local farms and food artisans.&quot;,&quot;limit&quot;:40,&quot;title_for_backing_tier&quot;:&quot;$150 reward&quot;,&quot;shipping_enabled&quot;:false,&quot;shipping_type&quot;:&quot;no_shipping&quot;,&quot;estimated_delivery_on&quot;:1412121600,&quot;has_addons&quot;:false,&quot;reward_type&quot;:&quot;base&quot;,&quot;project_id&quot;:1508881112,&quot;remaining&quot;:37,&quot;available&quot;:true,&quot;backers_count&quot;:3,&quot;updated_at&quot;:1486303027,&quot;rewards_items&quot;:[],&quot;urls&quot;:{&quot;api&quot;:{&quot;reward&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112/rewards/2563846?signature=1617636448.1c3ab83e02c2519dea9a7db31ce1022fbfbd19b3&quot;}}},{&quot;id&quot;:2542894,&quot;minimum&quot;:200.0,&quot;converted_minimum&quot;:200.0,&quot;reward&quot;:&quot;TASTE OF AUSTIN SUPERFOOD + SWAG PACK\\\\r\\\\nAustin Superfood Pack plus one of all swag: t-shirt, hoodie, stainless steel water bottle, and Good Seed tote bag.  Please add the proper shipping cost when completing your pledge. \\\\r\\\\nShipping requires 2 day air because our burgers are frozen.  Local Austin residents get pick up or free delivery.  Residents of AZ, UT, WY, MT, ND, SD, MN, IA, WI, MI, IN, OH, KY, WV, VA, NC, SC, GA, FL, CO,IL add $54 for shipping     Residents of WA, OR, NV, CA, NY, CT, RI, MA, ME, VT, HI, AL  add $60.  All other states add $12.&quot;,&quot;description&quot;:&quot;TASTE OF AUSTIN SUPERFOOD + SWAG PACK\\\\r\\\\nAustin Superfood Pack plus one of all swag: t-shirt, hoodie, stainless steel water bottle, and Good Seed tote bag.  Please add the proper shipping cost when completing your pledge. \\\\r\\\\nShipping requires 2 day air because our burgers are frozen.  Local Austin residents get pick up or free delivery.  Residents of AZ, UT, WY, MT, ND, SD, MN, IA, WI, MI, IN, OH, KY, WV, VA, NC, SC, GA, FL, CO,IL add $54 for shipping     Residents of WA, OR, NV, CA, NY, CT, RI, MA, ME, VT, HI, AL  add $60.  All other states add $12.&quot;,&quot;title_for_backing_tier&quot;:&quot;$200 reward&quot;,&quot;shipping_enabled&quot;:true,&quot;shipping_preference&quot;:&quot;restricted&quot;,&quot;shipping_summary&quot;:&quot;Only United States&quot;,&quot;shipping_type&quot;:&quot;single_location&quot;,&quot;shipping_single_location&quot;:{&quot;id&quot;:23424977,&quot;name&quot;:&quot;United States&quot;,&quot;slug&quot;:null,&quot;short_name&quot;:&quot;United States&quot;,&quot;displayable_name&quot;:&quot;United States&quot;,&quot;localized_name&quot;:&quot;United States&quot;,&quot;country&quot;:&quot;US&quot;,&quot;state&quot;:null,&quot;type&quot;:&quot;Country&quot;,&quot;is_root&quot;:false,&quot;expanded_country&quot;:&quot;United States&quot;,&quot;urls&quot;:{&quot;web&quot;:{&quot;discover&quot;:&quot;https://www.kickstarter.com/discover/places/23424977&quot;,&quot;location&quot;:&quot;https://www.kickstarter.com/locations/23424977&quot;},&quot;api&quot;:{&quot;nearby_projects&quot;:&quot;https://api.kickstarter.com/v1/discover?signature=1617636448.99b0f2c42ebbc9f1f9830af9613e3039abfde239&amp;woe_id=23424977&quot;}},&quot;projects_count&quot;:0},&quot;estimated_delivery_on&quot;:1406851200,&quot;has_addons&quot;:false,&quot;reward_type&quot;:&quot;base&quot;,&quot;project_id&quot;:1508881112,&quot;available&quot;:true,&quot;backers_count&quot;:0,&quot;updated_at&quot;:1413870190,&quot;rewards_items&quot;:[],&quot;urls&quot;:{&quot;api&quot;:{&quot;reward&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112/rewards/2542894?signature=1617636448.e3531c6014df325ae71597184e592ebc39c2b439&quot;}}},{&quot;id&quot;:2542895,&quot;minimum&quot;:260.0,&quot;converted_minimum&quot;:260.0,&quot;reward&quot;:&quot;512 BREWERY TOUR + BURGER PARTY \\\\r\\\\nYou and a guest are invited to enjoy a tour and burger party at 512 Brewing.  If you are a fan of craft burgers and local artisinal foods, you will not want to miss this!   We will provide cheese selections from Antoinele&#39;s Cheese Shop.  Each person will receive a Good Seed gift basket including 512 and Good Seed pint glasses, Good Seed tote, and t-shirts (value $80).&quot;,&quot;description&quot;:&quot;512 BREWERY TOUR + BURGER PARTY \\\\r\\\\nYou and a guest are invited to enjoy a tour and burger party at 512 Brewing.  If you are a fan of craft burgers and local artisinal foods, you will not want to miss this!   We will provide cheese selections from Antoinele&#39;s Cheese Shop.  Each person will receive a Good Seed gift basket including 512 and Good Seed pint glasses, Good Seed tote, and t-shirts (value $80).&quot;,&quot;limit&quot;:35,&quot;title_for_backing_tier&quot;:&quot;$260 reward&quot;,&quot;shipping_enabled&quot;:false,&quot;shipping_type&quot;:&quot;no_shipping&quot;,&quot;estimated_delivery_on&quot;:1412121600,&quot;has_addons&quot;:false,&quot;reward_type&quot;:&quot;base&quot;,&quot;project_id&quot;:1508881112,&quot;remaining&quot;:34,&quot;available&quot;:true,&quot;backers_count&quot;:1,&quot;updated_at&quot;:1486270470,&quot;rewards_items&quot;:[],&quot;urls&quot;:{&quot;api&quot;:{&quot;reward&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112/rewards/2542895?signature=1617636448.98c34b4575c5222f4b1e0ce9e99a1442101f4589&quot;}}},{&quot;id&quot;:2563844,&quot;minimum&quot;:500.0,&quot;converted_minimum&quot;:500.0,&quot;reward&quot;:&quot;PIZZA PARTY!! \\\\t\\\\t\\\\t\\\\t\\\\r\\\\nYou and 15-20 friends will enjoy a pizza party with some of the best pizza in town, loaded with Good Seed sausage and other locally sourced fresh toppings!\\\\t The party will be held at The ABGB (Austin Beer Garden Brewery) a popular \\\\tAustin brewpub in your own reserved party area.  Gluten free and vegan options available. Good Seed pint cups included. Pick your date and stick around for some great live music!&quot;,&quot;description&quot;:&quot;PIZZA PARTY!! \\\\t\\\\t\\\\t\\\\t\\\\r\\\\nYou and 15-20 friends will enjoy a pizza party with some of the best pizza in town, loaded with Good Seed sausage and other locally sourced fresh toppings!\\\\t The party will be held at The ABGB (Austin Beer Garden Brewery) a popular \\\\tAustin brewpub in your own reserved party area.  Gluten free and vegan options available. Good Seed pint cups included. Pick your date and stick around for some great live music!&quot;,&quot;limit&quot;:5,&quot;title_for_backing_tier&quot;:&quot;$500 reward&quot;,&quot;shipping_enabled&quot;:false,&quot;shipping_type&quot;:&quot;no_shipping&quot;,&quot;estimated_delivery_on&quot;:1406851200,&quot;has_addons&quot;:false,&quot;reward_type&quot;:&quot;base&quot;,&quot;project_id&quot;:1508881112,&quot;remaining&quot;:5,&quot;available&quot;:true,&quot;backers_count&quot;:0,&quot;updated_at&quot;:1413870497,&quot;rewards_items&quot;:[],&quot;urls&quot;:{&quot;api&quot;:{&quot;reward&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112/rewards/2563844?signature=1617636448.b664d986e61aa94670b165fe49c0ff1b5724fd92&quot;}}},{&quot;id&quot;:2661506,&quot;minimum&quot;:1300.0,&quot;converted_minimum&quot;:1300.0,&quot;reward&quot;:&quot;ONE OF EVERYTHING\\\\r\\\\nYou get one of every reward including an 8 pack of Good Seed burgers, all Good Seed swag and all local products offered in our prize packs.  You are also invited to attend the brewery tour, come to our 5 course farmhouse dinner, and get your own ABGB pizza party.&quot;,&quot;description&quot;:&quot;ONE OF EVERYTHING\\\\r\\\\nYou get one of every reward including an 8 pack of Good Seed burgers, all Good Seed swag and all local products offered in our prize packs.  You are also invited to attend the brewery tour, come to our 5 course farmhouse dinner, and get your own ABGB pizza party.&quot;,&quot;limit&quot;:5,&quot;title_for_backing_tier&quot;:&quot;$1,300 reward&quot;,&quot;shipping_enabled&quot;:true,&quot;shipping_preference&quot;:&quot;restricted&quot;,&quot;shipping_summary&quot;:&quot;Only United States&quot;,&quot;shipping_type&quot;:&quot;single_location&quot;,&quot;shipping_single_location&quot;:{&quot;id&quot;:23424977,&quot;name&quot;:&quot;United States&quot;,&quot;slug&quot;:null,&quot;short_name&quot;:&quot;United States&quot;,&quot;displayable_name&quot;:&quot;United States&quot;,&quot;localized_name&quot;:&quot;United States&quot;,&quot;country&quot;:&quot;US&quot;,&quot;state&quot;:null,&quot;type&quot;:&quot;Country&quot;,&quot;is_root&quot;:false,&quot;expanded_country&quot;:&quot;United States&quot;,&quot;urls&quot;:{&quot;web&quot;:{&quot;discover&quot;:&quot;https://www.kickstarter.com/discover/places/23424977&quot;,&quot;location&quot;:&quot;https://www.kickstarter.com/locations/23424977&quot;},&quot;api&quot;:{&quot;nearby_projects&quot;:&quot;https://api.kickstarter.com/v1/discover?signature=1617636448.99b0f2c42ebbc9f1f9830af9613e3039abfde239&amp;woe_id=23424977&quot;}},&quot;projects_count&quot;:0},&quot;estimated_delivery_on&quot;:1406851200,&quot;has_addons&quot;:false,&quot;reward_type&quot;:&quot;base&quot;,&quot;project_id&quot;:1508881112,&quot;remaining&quot;:5,&quot;available&quot;:true,&quot;backers_count&quot;:0,&quot;updated_at&quot;:1413871926,&quot;rewards_items&quot;:[],&quot;urls&quot;:{&quot;api&quot;:{&quot;reward&quot;:&quot;https://api.kickstarter.com/v1/projects/1508881112/rewards/2661506?signature=1617636448.e17e950706cd4edc33fa7b6f14c841b4bce2cbee&quot;}}}],&quot;add_ons&quot;:[],&quot;items&quot;:[],&quot;prelaunch_activated&quot;:false,&quot;display_prelaunch&quot;:false,&quot;available_card_types&quot;:[&quot;VISA&quot;,&quot;MASTERCARD&quot;,&quot;AMEX&quot;,&quot;DISCOVER&quot;,&quot;JCB&quot;,&quot;DINERS&quot;,&quot;UNION_PAY&quot;],&quot;supports_addons&quot;:false,&quot;addons_pledge_url&quot;:&quot;https://www.kickstarter.com/projects/1452363698/good-seed-craft-veggie-burgers/pledge/new?clicked_reward=false&quot;}";
  
  
  
  
  
  
  
  window.datalake_properties = {}
  
  window.ksr_track_properties = {}
  
  window.timeRemaining = function timeRemaining(epochTime){
  
    var diff = epochTime - ((new Date()).getTime() / 1000);
    var num_unit = (diff < 60 && [Math.max(diff, 0), \'seconds\']) ||
      ((diff/=60) < 60 && [diff, \'minutes\']) ||
      ((diff/=60) < 72 && [diff, \'hours\']) ||
      [diff/=24, \'days\'];
  
    // Round down
    num_unit[0] = Math.floor(num_unit[0]);
    // Singularize unit
    if (num_unit[0] == 1) { num_unit[1] = num_unit[1].replace(/s$/,""); }
  
    return num_unit;
  };
</script>
<script>
  window.current_variants = ["react_backer_rewards_public_release[control]"];
</script>
<script>
  window.device_attributes = {
    browserName: "Firefox",
    browserVersion: "73.0",
    deviceName: "",
    isBot: false,
    osName: "Mac",
    osVersion: "10.15"
  };
</script>
<script>
  window.static_routes = {
    login: "/login",
    contact: "/contact"
  };
</script>

<script src="https://www.kickstarter.com/locale/en.js"></script>

<script>
  window.flash = "{}";
</script>
<link href="https://www.kickstarter.com/projects/1452363698/good-seed-craft-veggie-burgers" rel="canonical">
<link href="http://kck.st/1i8Ct6M" rel="shorturl">
<script>
  if (typeof window.current_checkout === \'undefined\') {
    window.current_checkout = "{&quot;id&quot;:0,&quot;location_id&quot;:null,&quot;amount&quot;:0.0,&quot;shipping_amount&quot;:0.0,&quot;net_amount&quot;:0.0,&quot;usd_amount_in_cents&quot;:0,&quot;reward&quot;:{&quot;id&quot;:0,&quot;description&quot;:&quot;No Reward&quot;,&quot;minimum&quot;:1,&quot;reward&quot;:&quot;No Reward&quot;},&quot;addons_count&quot;:0,&quot;updated_at&quot;:0,&quot;created_at&quot;:0}";
  }
</script>


<body class="project projects maison-book not-mobile not-phone not-mobile-safari not-chrome-ios not-forces-video-controls not-tablet not-ipad not-iphone not-ios not-android not-touchable not-native-app-request not-apple-pay-capable not-android-pay-capable responsive is-logged-out " id="projects_show">

<div class="NS_layouts__notifications">
</div>

<div class="relative" data-start-project-path="/learn" id="global-header">
<div><section class="section_global-nav js-site-nav-container bg-white flex flex-wrap flex-nowrap-md border-bottom border-grey-400 justify-between w100p" data-reactroot=""><div class="w100p py4 py2-md h7-md h5 flex items-center justify-center"><a class="keyboard-focusable mb0 w30" href="/?ref=nav"><svg class="valign-middle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 598 70" width="100%" height="100%"><title>Kickstarter</title><g class="fill-ksr10-green" fill-rule="nonzero"><path d="M523,15.9 L523,47.3 C523,54.8 529.046512,61 536.403101,61 C542.449612,61 547.186047,57.3 548.899225,52 L550.310078,54.5 C552.829457,58.7 557.263566,61 561.79845,61 C569.155039,61 575,55.2 575,47.8 C575,45.3 574.395349,42.9 572.984496,40.7 L567.744186,32.4 C571.573643,29.5 573.891473,24.9 573.891473,19.3 C573.891473,9 565.627907,1 555.046512,1 L537.612403,1 C528.139535,1 523,6.1 523,15.9"></path><path d="M519,49.5030231 C519,43.7552636 515.323467,39.4192345 510.255814,38.4108557 C512.541226,36.8982874 513.932347,34.3773402 513.932347,31.04969 C513.932347,27.7220398 512.640592,25.2010926 510.255814,23.6885243 C515.422833,22.6801455 519,18.4449543 519,12.5963569 C519,6.14273218 513.832981,1 507.572939,1 L486.706131,1 C477.167019,1 472,6.14273218 472,15.9240071 L472,46.074535 C472,55.9566478 477.167019,60.9985421 486.706131,60.9985421 L507.572939,60.9985421 C513.832981,61.09938 519,55.9566478 519,49.5030231"></path><path d="M455.8,47.5 L455.8,26.8 C462.5,26.5 468,20.9 468,13.9 C468,6.7 462.2,1 455.1,1 L427.9,1 C420.8,1 415,6.6 415,13.9 C415,20.9 420.5,26.4 427.2,26.8 L427.2,47.5 C427.2,54.9 433.5,61 441.3,61 C449.6,61 455.8,54.9 455.8,47.5"></path><path d="M362,15.9 L362,47.3 C362,54.8 368.046512,61 375.403101,61 C381.449612,61 386.186047,57.3 387.899225,52 L389.310078,54.5 C391.829457,58.7 396.263566,61 400.79845,61 C408.155039,61 414,55.2 414,47.8 C414,45.3 413.395349,42.9 411.984496,40.7 L406.744186,32.4 C410.573643,29.5 412.891473,24.9 412.891473,19.3 C412.891473,9 404.627907,1 394.046512,1 L376.612403,1 C367.24031,1 362,6.1 362,15.9"></path><path d="M328.919678,49.5695364 C332.331325,56.6225166 337.147767,60 343.067976,60 C353.704285,60 361.229976,50.3642384 356.614219,39.5364238 L344.272087,10.9271523 C341.261811,3.87417219 336.746396,0 329.020021,0 C321.393988,0 316.878574,3.87417219 313.767955,10.9271523 L301.425823,39.5364238 C296.709724,50.3642384 304.335757,60 314.871723,60 C320.69159,60 325.508032,56.6225166 328.919678,49.5695364"></path><path d="M293.776938,47.5 L293.776938,26.8 C300.489603,26.5 306,20.9 306,13.9 C306,6.7 300.189036,1 293.075614,1 L265.924386,1 C258.810964,1 253,6.6 253,13.9 C253,20.9 258.510397,26.4 265.223062,26.8 L265.223062,47.5 C265.223062,54.9 271.534972,61 279.349716,61 C287.465028,61 293.776938,54.9 293.776938,47.5"></path><path d="M253,41.5361842 C253,35.5164474 249.993737,31.3026316 245.484342,27.2894737 L241.776618,23.9786184 C247.187891,23.1759868 250.795407,19.5641447 250.795407,14.2467105 C250.795407,5.31743421 243.680585,0 228.649269,0 C213.91858,0 205.300626,7.42434211 205.300626,19.1628289 C205.300626,25.1825658 208.407098,29.2960526 212.916493,33.4095395 L216.524008,36.7203947 L216.4238,36.7203947 C209.709812,36.7203947 205,40.6332237 205,46.7532895 C205,55.5822368 212.415449,61 228.248434,61 C243.780793,61 253,53.4753289 253,41.5361842" id="Shape-Copy-7"></path><path d="M202,46.5662429 C202,43.7802283 201.192523,41.0937143 199.476636,38.7057019 L193.016822,29.8501557 L199.476636,20.9946095 C201.192523,18.7060976 202,15.920083 202,13.1340685 C202,5.7710301 195.842991,0.0995005189 188.575701,0.0995005189 C184.336449,0.0995005189 180.097196,2.18901142 177.472897,5.7710301 L174.343925,10.1490529 C173.13271,4.27852231 167.985047,0 161.424299,0 C153.854206,0 148,5.97003114 148,13.3330695 L148,46.6657434 C148,54.0287818 153.95514,59.9988129 161.424299,59.9988129 C167.884112,59.9988129 172.930841,56.0187922 174.242991,50.2477621 L177.069159,54.2277828 C179.693458,58.0088025 184.033645,59.9988129 188.272897,59.9988129 C195.842991,60.0983134 202,53.9292813 202,46.5662429"></path><path d="M143,43.5099338 C143,37.1523179 139.818713,32.6821192 133.45614,30 C139.818713,27.3178808 143,22.9470199 143,16.4900662 C143,6.85430464 134.947368,0 122.023392,0 C104.725146,0 92,12.8145695 92,30 C92,47.1854305 104.725146,60 122.023392,60 C134.947368,60 143,53.1456954 143,43.5099338"></path><path d="M72.5499366,0 C64.4666385,0 58,6.57807309 58,14.3521595 L58,45.6478405 C58,53.5215947 64.4666385,60 72.4488953,60 C80.6332346,60 86.9988319,53.4219269 86.9988319,45.6478405 L86.9988319,14.3521595 C87.0998731,6.57807309 80.6332346,0 72.5499366,0"></path><path d="M54,46.5662429 C54,43.7802283 53.1940299,41.0937143 51.4813433,38.7057019 L45.0335821,29.8501557 L51.4813433,20.9946095 C53.1940299,18.7060976 54,15.920083 54,13.1340685 C54,5.7710301 47.8544776,0.0995005189 40.6007463,0.0995005189 C36.369403,0.0995005189 32.1380597,2.18901142 29.5186567,5.7710301 L26.2947761,10.1490529 C25.0858209,4.27852231 19.9477612,0 13.3992537,0 C5.84328358,0 0,5.97003114 0,13.3330695 L0,46.6657434 C0,54.0287818 5.94402985,59.9988129 13.3992537,59.9988129 C19.8470149,59.9988129 24.8843284,56.0187922 26.1940299,50.2477621 L29.0149254,54.2277828 C31.6343284,58.0088025 35.9664179,59.9988129 40.1977612,59.9988129 C47.8544776,60.0983134 54,53.9292813 54,46.5662429"></path></g></svg></a></div></section>
</div>
</div>
<script>
  window.client_type = "web"
</script>

<main>

<div class="Campaign-state-failed" id="main_content">

<div id="content-wrap">
<div class="bg-grey-100" data-initial="{&quot;project&quot;:{&quot;id&quot;:&quot;UHJvamVjdC0xNTA4ODgxMTEy&quot;,&quot;pid&quot;:1508881112,&quot;name&quot;:&quot;Good Seed Craft Veggie Burgers&quot;,&quot;imageUrl&quot;:&quot;https://ksr-ugc.imgix.net/assets/011/647/643/9e80f11b5b125b5b50d1694cbf7f0ba0_original.jpg?ixlib=rb-2.1.0&amp;crop=faces&amp;w=1024&amp;h=576&amp;fit=crop&amp;v=1463686200&amp;auto=format&amp;frame=1&amp;q=92&amp;s=eab19fa2f547416189fec062421898ba&quot;,&quot;verifiedIdentity&quot;:null,&quot;currency&quot;:&quot;USD&quot;,&quot;creator&quot;:{&quot;id&quot;:&quot;VXNlci0xNDUyMzYzNjk4&quot;,&quot;name&quot;:&quot;Oliver Ponce and Erin Shotwell&quot;,&quot;imageUrl&quot;:&quot;https://ksr-ugc.imgix.net/assets/008/391/164/a84c71f0a2cb7eae03353906c439edb7_original.jpg?ixlib=rb-2.1.0&amp;w=160&amp;h=160&amp;fit=crop&amp;v=1461521275&amp;auto=format&amp;frame=1&amp;q=92&amp;s=9f6ae363cac4fb4dfdf4f1c4ae1824a9&quot;,&quot;url&quot;:&quot;https://www.kickstarter.com/profile/1452363698&quot;,&quot;lastLogin&quot;:1547007145,&quot;biography&quot;:&quot;Erin&#39;s background is in Interior Design project management, consumer product goods financial management, and sales. She managed the bookkeeping for 512 Brewing and opened the food truck Good Seed Organic. \\r\\n\\r\\nOliver has over 12 years in the grocery and natural foods industry. He studied healing foods at the Natural Epicurean School of Culinary Arts. He has managed natural grocery, been a private chef, and managed Casa De Luz, a macrobiotic community center and restaurant.  He opened one of the first food trucks in Austin, Good Seed Organic.&quot;,&quot;isFacebookConnected&quot;:true,&quot;allowsFollows&quot;:true,&quot;backingsCount&quot;:5,&quot;location&quot;:{&quot;displayableName&quot;:&quot;Austin, TX&quot;},&quot;launchedProjects&quot;:{&quot;totalCount&quot;:1},&quot;websites&quot;:[{&quot;url&quot;:&quot;http://www.goodseedburger.com&quot;,&quot;domain&quot;:&quot;goodseedburger.com&quot;}]},&quot;description&quot;:&quot;Nutrient-dense Real Food! Good Seed hemp patties transform the veggie burger with bold flavor blends &amp; sprouted superfood ingredients.&quot;,&quot;video&quot;:{&quot;videoSources&quot;:{&quot;hls&quot;:null,&quot;high&quot;:{&quot;src&quot;:&quot;https://v.kickstarter.com/1617722847_4720b9663174678cfcac250a4d6048519ae4b3b6/projects/859806/video-392537-h264_high.mp4&quot;,&quot;type&quot;:&quot;video/mp4; codecs=\\&quot;avc1.64001E, mp4a.40.2\\&quot;&quot;},&quot;base&quot;:{&quot;src&quot;:&quot;https://v.kickstarter.com/1617722847_4720b9663174678cfcac250a4d6048519ae4b3b6/projects/859806/video-392537-h264_base.mp4&quot;,&quot;type&quot;:&quot;video/mp4; codecs=\\&quot;avc1.42E01E, mp4a.40.2\\&quot;&quot;}},&quot;previewImageUrl&quot;:&quot;https://d15chbti7ht62o.cloudfront.net/projects/859806/video-392537-h264_high.jpg?2014&quot;,&quot;tracks&quot;:{&quot;nodes&quot;:[]}},&quot;isProjectWeLove&quot;:true,&quot;category&quot;:{&quot;name&quot;:&quot;Vegan&quot;,&quot;url&quot;:&quot;https://www.kickstarter.com/discover/categories/food/vegan&quot;,&quot;parentCategory&quot;:{&quot;id&quot;:&quot;Q2F0ZWdvcnktMTA=&quot;,&quot;name&quot;:&quot;Food&quot;}},&quot;location&quot;:{&quot;displayableName&quot;:&quot;Austin, TX&quot;,&quot;discoverUrl&quot;:&quot;https://www.kickstarter.com/discover/places/austin-tx&quot;},&quot;curatedCollection&quot;:{},&quot;isSharingProjectBudget&quot;:false,&quot;backersCount&quot;:78,&quot;percentFunded&quot;:17,&quot;goal&quot;:{&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;amount&quot;:&quot;20000.0&quot;},&quot;pledged&quot;:{&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;amount&quot;:&quot;3422.0&quot;},&quot;deadlineAt&quot;:1404913719,&quot;duration&quot;:33,&quot;url&quot;:&quot;https://www.kickstarter.com/projects/1452363698/good-seed-craft-veggie-burgers&quot;,&quot;stateChangedAt&quot;:1404913721,&quot;statsInterval&quot;:5000,&quot;commentsCount&quot;:4,&quot;state&quot;:&quot;FAILED&quot;,&quot;canceledAt&quot;:null,&quot;slug&quot;:&quot;1452363698/good-seed-craft-veggie-burgers&quot;,&quot;isLaunched&quot;:true,&quot;isWatchable&quot;:false,&quot;isWatched&quot;:false,&quot;projectShortLink&quot;:&quot;http://kck.st/1i8Ct6M&quot;,&quot;emailShortLink&quot;:&quot;http://kck.st/1i8Ct6M&quot;,&quot;collaborators&quot;:{&quot;edges&quot;:[]},&quot;showCtaToLiveProjects&quot;:false,&quot;showBackerTrustModule&quot;:false,&quot;timeline&quot;:{&quot;edges&quot;:[{&quot;node&quot;:{&quot;type&quot;:&quot;failure&quot;,&quot;timestamp&quot;:1404913722,&quot;data&quot;:{}}}]}},&quot;projectModal&quot;:{&quot;opened&quot;:false,&quot;modalType&quot;:null},&quot;watching&quot;:{&quot;projectIsLaunched&quot;:true,&quot;projectCanRemind&quot;:false,&quot;projectId&quot;:&quot;UHJvamVjdC0xNTA4ODgxMTEy&quot;},&quot;currentUser&quot;:{}}" data-photo_assets="[]" data-project_pid="1508881112" id="react-project-header">
<div><div class="grid-container flex flex-column"><div class="grid-row grid-row mb5-lg mb0-md order1-md order2-lg"><div class="grid-col-12 grid-col-8-lg"><div class="mx-4 mx-12-md mx0-lg relative clip"><div class="aspect-ratio aspect-ratio--16x9 w100p ksr-video-player bg-black"><div class="aspect-ratio--object flex z4"><button class="m-auto w20p h20p w15p-md h15p-md p1 p2-md bg-green-700 border border-white border2px"><svg class="svg-icon__icon--play icon-20 fill-white" aria-hidden="true"><use xlink:href="#icon--play"></use></svg></button></div><img class="aspect-ratio--object bg-black z3" src="https://ksr-ugc.imgix.net/assets/011/647/643/9e80f11b5b125b5b50d1694cbf7f0ba0_original.jpg?ixlib=rb-2.1.0&amp;crop=faces&amp;w=1024&amp;h=576&amp;fit=crop&amp;v=1463686200&amp;auto=format&amp;frame=1&amp;q=92&amp;s=eab19fa2f547416189fec062421898ba" alt="Project image"/><video class="aspect-ratio--object z1 hide" preload="none"><source src="https://v.kickstarter.com/1617722847_4720b9663174678cfcac250a4d6048519ae4b3b6/projects/859806/video-392537-h264_high.mp4" type="video/mp4; codecs=&quot;avc1.64001E, mp4a.40.2&quot;"/><source src="https://v.kickstarter.com/1617722847_4720b9663174678cfcac250a4d6048519ae4b3b6/projects/859806/video-392537-h264_base.mp4" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;"/>You&#x27;ll need an HTML5 capable browser to see this content.</video><div class="aspect-ratio--object flex items-end justify-center p4"><div class="h7 w100p max-w200 bg-black flex items-center transition-all relative z2 o100p"><button class="hover-bg-green-700 transition-all transition-150 h100p p0 w10 keyboard-focusable bg-green-700"><svg class="svg-icon__icon--play icon-small fill-white" aria-hidden="true"><use xlink:href="#icon--play"></use></svg></button><div class="flex flex-auto items-center mx2"><time class="white type-14 mr2 basis5">0:00</time><div class="ksr-progress-slider ksr-progress-slider--video-player"><progress class="ksr-progress-slider__buffer" value="0" max="0"></progress><progress class="ksr-progress-slider__progress-bar" value="0" max="0"></progress><input type="range" title="Video Progress" class="ksr-progress-slider__slider" min="0" max="0" value="0" step="0" aria-hidden="false"/></div><time class="white type-14 ml2 basis5">0:00</time></div><button class="p0 bg-transparent flex h100p mx2 keyboard-focusable"><svg class="svg-icon__icon--sound-hi icon-20 fill-white m-auto" aria-hidden="true"><use xlink:href="#icon--sound-hi"></use></svg></button><div class="basis15p mr2 flex"><div class="ksr-progress-slider ksr-progress-slider--video-player"><progress class="ksr-progress-slider__progress-bar" value="1" max="1"></progress><input type="range" title="Video Progress" class="ksr-progress-slider__slider" min="0" max="1" value="1" step="0.001" aria-hidden="true"/></div></div><button class="p0 bg-transparent flex h100p mx2 keyboard-focusable"><svg class="svg-icon__icon--expand icon-20 fill-white m-auto" aria-hidden="true"><use xlink:href="#icon--expand"></use></svg></button></div></div>)}</div></div><div class="hide block-lg"><div class="border-top border-bottom border-top-none-md border-none-lg nested-full-width-xs nested-full-width-sm nested-full-width-md mb4 mb5-sm mb0-md"><div class="grid-row"><div class="grid-col-12"><div class="py2 py3-lg flex items-center auto-scroll-x"><a class="nowrap navy-700 flex items-center medium mr3 type-12 keyboard-focusable" href="/discover/pwl?ref=project_pwl_badge"><div class="radius100p bg-ksr-green-700 inline-block h4 w4 flex items-center justify-center"><svg class="svg-icon__icon--small-k icon-14 fill-white" aria-hidden="true"><use xlink:href="#icon--small-k"></use></svg></div><span class="ml1"><span>Project We Love</span></span></a><a class="nowrap navy-700 flex items-center medium mr3 type-12 keyboard-focusable" href="https://www.kickstarter.com/discover/categories/food/vegan?ref=project_category_badge"><svg class="svg-icon__icon--compass icon-20 fill-soft-black" aria-hidden="true"><use xlink:href="#icon--compass"></use></svg><span class="ml1"><span>Vegan</span></span></a><a class="nowrap navy-700 flex items-center medium mr3 type-12 keyboard-focusable" href="https://www.kickstarter.com/discover/places/austin-tx?ref=project_location_badge"><svg class="svg-icon__map-pin icon-20 fill-soft-black" aria-hidden="true"><use xlink:href="#map-pin"></use></svg><span class="ml1">Austin, TX</span></a></div></div></div></div></div></div><div class="grid-col-12 grid-col-4-md hide block-lg"><div class="bg-grey-400 w100p mb3" role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"><div class="bg-soft-black h1 " style="width:17%"></div></div><div class="flex flex-column-lg mb4 mb5-sm"><div class="mb4-lg"><div class="num nowrap"></div><div class="flex items-center"><span class="ksr-green-700 inline-block bold type-16 type-28-md"><span class="soft-black"></span></span></div><span class="block dark-grey-500 type-12 type-14-md lh3-lg"><span class="inline-block hide-sm">pledged of <span class="money">$20,000</span></span><span class="inline-block-sm hide">pledged of <span class="money">$20,000</span> goal</span></span></div><div class="ml5 ml0-lg mb4-lg"><div class="block type-16 type-28-md bold dark-grey-500"><span></span></div><span class="block dark-grey-500 type-12 type-14-md lh3-lg">backers</span></div><div class="ml5 ml0-lg"><div><div></div></div></div></div><div class="border p3 soft-black border-grey-500 bg-grey-300"><div data-test-id="project-state-title" class="normal type-18">Funding Unsuccessful</div><div class="type-14 pt1">The project&#x27;s funding goal was not reached on Wed, July 9 2014 1:48 PM UTC +00:00</div></div><div class="flex items-center mt4"><svg class="svg-icon__icon--calendar icon-16 mr1" aria-hidden="true"><use xlink:href="#icon--calendar"></use></svg><span class="bold">Last updated <a class="soft-black normal text-underline" href="/projects/1452363698/good-seed-craft-veggie-burgers/posts">July 9, 2014</a></span></div></div></div><div class="grid-row pt7-lg mt3 mt0-lg mb6-lg order2-md order1-lg"><div class="grid-col-12"><div class="grid-row hide-md flex flex-column flex-row-md relative"><div class="grid-col-12"><h2 class="type-28 type-24-md soft-black mb1 project-name">Good Seed Craft Veggie Burgers</h2></div><div class="grid-col-12 grid-col-2-md flex items-center mb3"></div><div class="grid-col-12"><p class="type-14 type-18-md soft-black project-description mb1">Nutrient-dense Real Food! Good Seed hemp patties transform the veggie burger with bold flavor blends &amp; sprouted superfood ingredients.</p></div><div class="grid-col-12"><div class="block hide-md border-top border-bottom border-grey-500 nested-full-width-xs nested-full-width-sm my2 mb5"><button class="type-14 flex w100p"><div class="my2 flex justify-between w100p"><div class="flex"><img class="border-box radius100p bg-grey-400 w7 h7 shrink0 mr2" src="https://ksr-ugc.imgix.net/assets/008/391/164/a84c71f0a2cb7eae03353906c439edb7_original.jpg?ixlib=rb-2.1.0&amp;w=160&amp;h=160&amp;fit=crop&amp;v=1461521275&amp;auto=format&amp;frame=1&amp;q=92&amp;s=9f6ae363cac4fb4dfdf4f1c4ae1824a9" alt="Oliver Ponce and Erin Shotwell"/><div class="mr2 text-left w50p text-nowrap"><div class="type-14 bold clip ellipsis">Oliver Ponce and Erin Shotwell</div><div class="mr2">First created<span class="divider"> · </span>5 backed</div></div><div class="border border-grey-500 bg-white p2 type-16 align-right flex items-center">More</div></div></div></button></div></div></div><div class="grid-row hide flex-md flex-column flex-row-md relative"><div class="grid-col-10 grid-col-10-lg grid-col-offset-1-md block-md order2-md type-center"><h2 class="type-28 type-24-md soft-black mb1 project-name">Good Seed Craft Veggie Burgers</h2><p class="type-14 type-18-md soft-black project-description mb1">Nutrient-dense Real Food! Good Seed hemp patties transform the veggie burger with bold flavor blends &amp; sprouted superfood ingredients.</p></div></div></div></div><div class="grid-row order2-md hide-lg"><div class="grid-col-12 grid-col-10-md grid-col-offset-1-md"><div class="bg-grey-400 w100p mb3" role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"><div class="bg-soft-black h1 " style="width:17%"></div></div><div class="flex flex-column-lg mb4 mb5-sm"><div class="mb4-lg"><div class="num nowrap"></div><div class="flex items-center"><span class="ksr-green-700 inline-block bold type-16 type-28-md"><span class="soft-black"></span></span></div><span class="block dark-grey-500 type-12 type-14-md lh3-lg"><span class="inline-block hide-sm">pledged of <span class="money">$20,000</span></span><span class="inline-block-sm hide">pledged of <span class="money">$20,000</span> goal</span></span></div><div class="ml5 ml0-lg mb4-lg"><div class="block type-16 type-28-md bold dark-grey-500"><span></span></div><span class="block dark-grey-500 type-12 type-14-md lh3-lg">backers</span></div><div class="ml5 ml0-lg"><div><div></div></div></div></div></div></div><div class="order1-md hide-lg border-top border-bottom border-top-none-md border-none-lg nested-full-width-xs nested-full-width-sm nested-full-width-md mb4 mb5-sm mb0-md"><div class="grid-row"><div class="grid-col-12"><div class="py2 py3-lg flex items-center auto-scroll-x"><a class="nowrap navy-700 flex items-center medium mr3 type-12 keyboard-focusable" href="/discover/pwl?ref=project_pwl_badge"><div class="radius100p bg-ksr-green-700 inline-block h4 w4 flex items-center justify-center"><svg class="svg-icon__icon--small-k icon-14 fill-white" aria-hidden="true"><use xlink:href="#icon--small-k"></use></svg></div><span class="ml1"><span>Project We Love</span></span></a><a class="nowrap navy-700 flex items-center medium mr3 type-12 keyboard-focusable" href="https://www.kickstarter.com/discover/categories/food/vegan?ref=project_category_badge"><svg class="svg-icon__icon--compass icon-20 fill-soft-black" aria-hidden="true"><use xlink:href="#icon--compass"></use></svg><span class="ml1"><span>Vegan</span></span></a><a class="nowrap navy-700 flex items-center medium mr3 type-12 keyboard-focusable" href="https://www.kickstarter.com/discover/places/austin-tx?ref=project_location_badge"><svg class="svg-icon__map-pin icon-20 fill-soft-black" aria-hidden="true"><use xlink:href="#map-pin"></use></svg><span class="ml1">Austin, TX</span></a></div></div></div></div><div class="grid-row order2-md hide-lg mb3-md"><div class="grid-col-12 grid-col-10-md grid-col-offset-1-md"><div class="border p3 soft-black border-grey-500 bg-grey-300"><div data-test-id="project-state-title" class="normal type-18">Funding Unsuccessful</div><div class="type-14 pt1">The project&#x27;s funding goal was not reached on Wed, July 9 2014 1:48 PM UTC +00:00</div></div><div class="flex items-center mt4"><svg class="svg-icon__icon--calendar icon-16 mr1" aria-hidden="true"><use xlink:href="#icon--calendar"></use></svg><span class="bold">Last updated <a class="soft-black normal text-underline" href="/projects/1452363698/good-seed-craft-veggie-burgers/posts">July 9, 2014</a></span></div></div></div><div class="grid-row mb5 hide-md"><div class="grid-col-12 grid-col-offset-1-md"></div></div><div class="grid-row"><div class="grid-col-12"></div></div></div></div>
</div>

<div class="NS_projects__content">
<!-- / spanish translations are noticeably longer; -->
<!-- / decrease font size and tab margins to avoid unnecessary overflow. -->
<script>
  window.showNewCampaignNav = true
</script>
<div data-campaign="{&quot;slug&quot;:&quot;1452363698/good-seed-craft-veggie-burgers&quot;,&quot;projectHasSkills&quot;:false,&quot;projectHasCommunity&quot;:true,&quot;projectFAQsCount&quot;:0,&quot;updateCount&quot;:3,&quot;currentSection&quot;:&quot;description&quot;,&quot;commentsCount&quot;:4,&quot;manageYourPledge&quot;:null,&quot;shareThisProject&quot;:false,&quot;backThisProject&quot;:false,&quot;watchingProjectData&quot;:&quot;{\\&quot;user_is_watching\\&quot;:null,\\&quot;project_is_launched\\&quot;:true,\\&quot;project_can_remind\\&quot;:false,\\&quot;project_pid\\&quot;:1508881112,\\&quot;project_id\\&quot;:\\&quot;UHJvamVjdC0xNTA4ODgxMTEy\\&quot;,\\&quot;user_id\\&quot;:null,\\&quot;show_modal\\&quot;:true}&quot;,&quot;projectPid&quot;:1508881112}" id="react-campaign-nav"></div>
<div class="NS_projects__project_nav js-project-nav stick-lg t0 z9" id="project-nav">
<div class="grid-container js-project-nav-scroll">
<div class="row">
<div class="campaign-side-nav project-nav__links">
<a class="is-active js-analytics-section js-load-project-content js-load-project-description mx3 project-nav__link--campaign tabbed-nav__link type-14" data-analytics="campaign" data-content="description" href="/projects/1452363698/good-seed-craft-veggie-burgers/description" id="campaign-emoji">
Campaign
</a>
<a class="js-analytics-section js-load-project-content js-load-project-rewards mx3 project-nav__link--rewards tabbed-nav__link type-14" data-analytics="rewards" data-content="rewards" href="/projects/1452363698/good-seed-craft-veggie-burgers/rewards" id="rewards-emoji">
Rewards
</a>
<a class="js-analytics-section js-load-project-content js-load-project-faqs mx3 project-nav__link--faqs tabbed-nav__link type-14" data-analytics="faq" data-content="faqs" emoji-data="0" href="/projects/1452363698/good-seed-craft-veggie-burgers/faqs" id="faq-emoji">
FAQ
</a>
<a class="js-analytics-section js-load-project-content js-load-project-updates mx3 project-nav__link--updates tabbed-nav__link type-14" data-analytics="updates" data-content="updates" emoji-data="3" href="/projects/1452363698/good-seed-craft-veggie-burgers/posts" id="updates-emoji">
Updates
<span class="count">3</span>
</a>
<a class="js-analytics-section js-load-project-comments js-load-project-content mx3 project-nav__link--comments tabbed-nav__link type-14" data-analytics="comments" data-comments-count="4" data-content="comments" emoji-data="&amp;lt;data class=&amp;quot;Project1508881112&amp;quot; data-format=&amp;quot;number&amp;quot; data-value=&amp;quot;4&amp;quot; itemprop=&amp;quot;Project[comments_count]&amp;quot;&amp;gt;4&amp;lt;/data&amp;gt;" href="/projects/1452363698/good-seed-craft-veggie-burgers/comments" id="comments-emoji">
Comments
<span class="count"><data class="Project1508881112" data-format="number" data-value="4" itemprop="Project[comments_count]">4</data></span>
</a>
<a class="js-analytics-section js-load-project-community js-load-project-content mx3 project-nav__link--community tabbed-nav__link type-14" data-analytics="community" data-content="community" href="/projects/1452363698/good-seed-craft-veggie-burgers/community" id="community-emoji">
Community
</a>
</div>
<div class="campaign-side-nav project-nav__buttons" data-400="bottom: -70px;" data-500="bottom: 0px;">
<div class="watch-project-button"></div>
</div>
</div>
</div>
</div>

<section class="js-project-content js-project-description-content project-content" data-project-state="failed">
<div class="NS_projects__description_section m-auto">
<div class="bg-white grid-container pr3-sm py8">
<div class="row">
<div class="col col-8 description-container">
<div class="px3">
<div data-slug="1452363698/good-seed-craft-veggie-burgers" id="react-campaign">
&nbsp;
</div>

</div>
</div>
<div class="col col-4 js-rewards-column max-w62 sticky-rewards">
<div class="mb3 mb10-sm">
<div data-slug="1452363698/good-seed-craft-veggie-burgers" id="experimental-creator-bio"></div>
<div class="mobile-hide">
<div class="NS_projects__rewards_list js-project-rewards">
<h3 class="normal mb3 mb7-sm mobile-hide">Support</h3>
<ol>
<li class="hover-group pledge--inactive pledge-selectable-sidebar" data-reward-id="2535705">
<div class="pledge__hover hover-zoomout">
<div class="pledge__hover-content">
<p>Select this reward</p>
</div>
</div>
<div class="pledge__info">
<h2 class="pledge__amount">
Pledge <span class="money">US$ 10</span> or more
<span class="pledge__currency-conversion">
About <span>US$ 10</span>
</span>
</h2>
<div class="pledge__reward-description pledge__reward-description--expanded">
<p>STICKER + BUTTONS + THANK YOU				
<br />You will receive a Good Seed sticker, buttons, and 				
<br />a hand written thank you card for your generous support.</p>

<a class="pledge__reward-description-toggle js-desc-toggle hide" href="#" role="button">
<span>Less</span>
</a>
</div>
<div class="pledge__extra-info">
<div class="pledge__detail">
<span class="pledge__detail-label">Estimated delivery</span>
<span class="pledge__detail-info"><time datetime="2014-08-01" data-format="MMM YYYY" class="invisible-if-js js-adjust-time">Aug 2014</time></span>
</div>
<div class="pledge__detail">
<span class="pledge__detail-label">Ships to</span>
<span class="pledge__detail-info">Only United States</span>
</div>
</div>
<div class="pledge__backer-stats">
<div class="flex flex-wrap">
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-support-100">
6 backers
</div>

</div>
</div>
</div>

</div>

<form class="NS_pledges__shipping_select js-form-wrapper new-form new-form--block pledge__checkout pledge__checkout--with-shipping" action="/projects/1452363698/good-seed-craft-veggie-burgers/pledge" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="pledge__checkout-form">
<div class="form-group" id="shipping-select-4441911">
<label for="backing_location_id">Shipping destination</label>
<div class="ksr-select js-ksr-select" role="button" tabindex="-1">
<div class="title"></div>
<select name="backing[location_id]" id="backing_location_id" class="select"><option value="">Select a country:</option><option data-name="Afghanistan" value="23424739">Afghanistan</option>
<option data-name="Aland Islands" value="12577865">Aland Islands</option>
<option data-name="Albania" value="23424742">Albania</option>
<option data-name="Algeria" value="23424740">Algeria</option>
<option data-name="American Samoa" value="23424746">American Samoa</option>
<option data-name="Andorra" value="23424744">Andorra</option>
<option data-name="Angola" value="23424745">Angola</option>
<option data-name="Anguilla" value="23424751">Anguilla</option>
<option data-name="Antarctica" value="28289409">Antarctica</option>
<option data-name="Antigua and Barbuda" value="23424737">Antigua and Barbuda</option>
<option data-name="Argentina" value="23424747">Argentina</option>
<option data-name="Armenia" value="23424743">Armenia</option>
<option data-name="Aruba" value="23424736">Aruba</option>
<option data-name="Australia" value="23424748">Australia</option>
<option data-name="Austria" value="23424750">Austria</option>
<option data-name="Azerbaijan" value="23424741">Azerbaijan</option>
<option data-name="Bahrain" value="23424753">Bahrain</option>
<option data-name="Bangladesh" value="23424759">Bangladesh</option>
<option data-name="Barbados" value="23424754">Barbados</option>
<option data-name="Belarus" value="23424765">Belarus</option>
<option data-name="Belgium" value="23424757">Belgium</option>
<option data-name="Belize" value="23424760">Belize</option>
<option data-name="Benin" value="23424764">Benin</option>
<option data-name="Bermuda" value="23424756">Bermuda</option>
<option data-name="Bhutan" value="23424770">Bhutan</option>
<option data-name="Bolivia" value="23424762">Bolivia</option>
<option data-name="Bosnia and Herzegovina" value="23424761">Bosnia and Herzegovina</option>
<option data-name="Botswana" value="23424755">Botswana</option>
<option data-name="Bouvet Island" value="28289410">Bouvet Island</option>
<option data-name="Brazil" value="23424768">Brazil</option>
<option data-name="British Indian Ocean Territory" value="23424849">British Indian Ocean Territory</option>
<option data-name="British Virgin Islands" value="23424983">British Virgin Islands</option>
<option data-name="Brunei" value="23424773">Brunei</option>
<option data-name="Bulgaria" value="23424771">Bulgaria</option>
<option data-name="Burkina Faso" value="23424978">Burkina Faso</option>
<option data-name="Burundi" value="23424774">Burundi</option>
<option data-name="Cambodia" value="23424776">Cambodia</option>
<option data-name="Cameroon" value="23424785">Cameroon</option>
<option data-name="Canada" value="23424775">Canada</option>
<option data-name="Cape Verde" value="23424794">Cape Verde</option>
<option data-name="Caribbean Netherlands" value="56558056">Caribbean Netherlands</option>
<option data-name="Cayman Islands" value="23424783">Cayman Islands</option>
<option data-name="Central African Republic" value="23424792">Central African Republic</option>
<option data-name="Chad" value="23424777">Chad</option>
<option data-name="Chile" value="23424782">Chile</option>
<option data-name="China" value="23424781">China</option>
<option data-name="Christmas Island" value="23424869">Christmas Island</option>
<option data-name="Cocos (Keeling) Islands" value="23424784">Cocos (Keeling) Islands</option>
<option data-name="Colombia" value="23424787">Colombia</option>
<option data-name="Comoros" value="23424786">Comoros</option>
<option data-name="Congo" value="23424779">Congo</option>
<option data-name="Cook Islands" value="23424795">Cook Islands</option>
<option data-name="Costa Rica" value="23424791">Costa Rica</option>
<option data-name="Croatia" value="23424843">Croatia</option>
<option data-name="Curaçao" value="56558057">Curaçao</option>
<option data-name="Cyprus" value="26812346">Cyprus</option>
<option data-name="Czech Republic" value="23424810">Czech Republic</option>
<option data-name="Democratic Republic of Congo" value="23424780">Democratic Republic of Congo</option>
<option data-name="Denmark" value="23424796">Denmark</option>
<option data-name="Disputed Territory" value="23424928">Disputed Territory</option>
<option data-name="Djibouti" value="23424797">Djibouti</option>
<option data-name="Dominica" value="23424798">Dominica</option>
<option data-name="Dominican Republic" value="23424800">Dominican Republic</option>
<option data-name="East Timor" value="23424968">East Timor</option>
<option data-name="Ecuador" value="23424801">Ecuador</option>
<option data-name="Egypt" value="23424802">Egypt</option>
<option data-name="El Salvador" value="23424807">El Salvador</option>
<option data-name="Equatorial Guinea" value="23424804">Equatorial Guinea</option>
<option data-name="Eritrea" value="23424806">Eritrea</option>
<option data-name="Estonia" value="23424805">Estonia</option>
<option data-name="Ethiopia" value="23424808">Ethiopia</option>
<option data-name="Falkland Islands" value="23424814">Falkland Islands</option>
<option data-name="Faroe Islands" value="23424816">Faroe Islands</option>
<option data-name="Federated States of Micronesia" value="23424815">Federated States of Micronesia</option>
<option data-name="Fiji" value="23424813">Fiji</option>
<option data-name="Finland" value="23424812">Finland</option>
<option data-name="France" value="23424819">France</option>
<option data-name="French Guiana" value="23424811">French Guiana</option>
<option data-name="French Polynesia" value="23424817">French Polynesia</option>
<option data-name="French Southern Territories" value="28289406">French Southern Territories</option>
<option data-name="Gabon" value="23424822">Gabon</option>
<option data-name="Gambia" value="23424821">Gambia</option>
<option data-name="Georgia" value="23424823">Georgia</option>
<option data-name="Germany" value="23424829">Germany</option>
<option data-name="Ghana" value="23424824">Ghana</option>
<option data-name="Gibraltar" value="23424825">Gibraltar</option>
<option data-name="Greece" value="23424833">Greece</option>
<option data-name="Greenland" value="23424828">Greenland</option>
<option data-name="Grenada" value="23424826">Grenada</option>
<option data-name="Guadeloupe" value="23424831">Guadeloupe</option>
<option data-name="Guam" value="23424832">Guam</option>
<option data-name="Guatemala" value="23424834">Guatemala</option>
<option data-name="Guinea" value="23424835">Guinea</option>
<option data-name="Guinea-Bissau" value="23424929">Guinea-Bissau</option>
<option data-name="Guyana" value="23424836">Guyana</option>
<option data-name="Haiti" value="23424839">Haiti</option>
<option data-name="Heard Island and McDonald Islands" value="28289411">Heard Island and McDonald Islands</option>
<option data-name="Holy See (Vatican City State)" value="23424986">Holy See (Vatican City State)</option>
<option data-name="Honduras" value="23424841">Honduras</option>
<option data-name="Hong Kong" value="24865698">Hong Kong</option>
<option data-name="Hungary" value="23424844">Hungary</option>
<option data-name="Iceland" value="23424845">Iceland</option>
<option data-name="India" value="23424848">India</option>
<option data-name="Indonesia" value="23424846">Indonesia</option>
<option data-name="Iraq" value="23424855">Iraq</option>
<option data-name="Iraq-Saudi Arabia Neutral Zone" value="23424998">Iraq-Saudi Arabia Neutral Zone</option>
<option data-name="Ireland" value="23424803">Ireland</option>
<option data-name="Israel" value="23424852">Israel</option>
<option data-name="Italy" value="23424853">Italy</option>
<option data-name="Ivory Coast" value="23424854">Ivory Coast</option>
<option data-name="Jamaica" value="23424858">Jamaica</option>
<option data-name="Japan" value="23424856">Japan</option>
<option data-name="Jordan" value="23424860">Jordan</option>
<option data-name="Kazakhstan" value="23424871">Kazakhstan</option>
<option data-name="Kenya" value="23424863">Kenya</option>
<option data-name="Kiribati" value="23424867">Kiribati</option>
<option data-name="Kosovo" value="29389201">Kosovo</option>
<option data-name="Kuwait" value="23424870">Kuwait</option>
<option data-name="Kyrgyzstan" value="23424864">Kyrgyzstan</option>
<option data-name="Laos" value="23424872">Laos</option>
<option data-name="Latvia" value="23424874">Latvia</option>
<option data-name="Lebanon" value="23424873">Lebanon</option>
<option data-name="Lesotho" value="23424880">Lesotho</option>
<option data-name="Liberia" value="23424876">Liberia</option>
<option data-name="Libya" value="23424882">Libya</option>
<option data-name="Liechtenstein" value="23424879">Liechtenstein</option>
<option data-name="Lithuania" value="23424875">Lithuania</option>
<option data-name="Luxembourg" value="23424881">Luxembourg</option>
<option data-name="Macao" value="20070017">Macao</option>
<option data-name="Macedonia" value="23424890">Macedonia</option>
<option data-name="Madagascar" value="23424883">Madagascar</option>
<option data-name="Malawi" value="23424889">Malawi</option>
<option data-name="Malaysia" value="23424901">Malaysia</option>
<option data-name="Maldives" value="23424899">Maldives</option>
<option data-name="Mali" value="23424891">Mali</option>
<option data-name="Malta" value="23424897">Malta</option>
<option data-name="Marshall Islands" value="23424932">Marshall Islands</option>
<option data-name="Martinique" value="23424884">Martinique</option>
<option data-name="Mauritania" value="23424896">Mauritania</option>
<option data-name="Mauritius" value="23424894">Mauritius</option>
<option data-name="Mayotte" value="23424886">Mayotte</option>
<option data-name="Mexico" value="23424900">Mexico</option>
<option data-name="Moldova" value="23424885">Moldova</option>
<option data-name="Monaco" value="23424892">Monaco</option>
<option data-name="Mongolia" value="23424887">Mongolia</option>
<option data-name="Montenegro" value="20069817">Montenegro</option>
<option data-name="Montserrat" value="23424888">Montserrat</option>
<option data-name="Morocco" value="23424893">Morocco</option>
<option data-name="Mozambique" value="23424902">Mozambique</option>
<option data-name="Myanmar" value="23424763">Myanmar</option>
<option data-name="Namibia" value="23424987">Namibia</option>
<option data-name="Nauru" value="23424912">Nauru</option>
<option data-name="Nepal" value="23424911">Nepal</option>
<option data-name="Netherlands" value="23424909">Netherlands</option>
<option data-name="New Caledonia" value="23424903">New Caledonia</option>
<option data-name="New Zealand" value="23424916">New Zealand</option>
<option data-name="Nicaragua" value="23424915">Nicaragua</option>
<option data-name="Niger" value="23424906">Niger</option>
<option data-name="Nigeria" value="23424908">Nigeria</option>
<option data-name="Niue" value="23424904">Niue</option>
<option data-name="Norfolk Island" value="23424905">Norfolk Island</option>
<option data-name="Northern Mariana Islands" value="23424788">Northern Mariana Islands</option>
<option data-name="Norway" value="23424910">Norway</option>
<option data-name="Oman" value="23424898">Oman</option>
<option data-name="Pakistan" value="23424922">Pakistan</option>
<option data-name="Palau" value="23424927">Palau</option>
<option data-name="Palestine" value="28289408">Palestine</option>
<option data-name="Panama" value="23424924">Panama</option>
<option data-name="Papua New Guinea" value="23424926">Papua New Guinea</option>
<option data-name="Paraguay" value="23424917">Paraguay</option>
<option data-name="Peru" value="23424919">Peru</option>
<option data-name="Philippines" value="23424934">Philippines</option>
<option data-name="Pitcairn Islands" value="23424918">Pitcairn Islands</option>
<option data-name="Poland" value="23424923">Poland</option>
<option data-name="Portugal" value="23424925">Portugal</option>
<option data-name="Puerto Rico" value="23424935">Puerto Rico</option>
<option data-name="Qatar" value="23424930">Qatar</option>
<option data-name="Romania" value="23424933">Romania</option>
<option data-name="Russia" value="23424936">Russia</option>
<option data-name="Rwanda" value="23424937">Rwanda</option>
<option data-name="Réunion" value="23424931">Réunion</option>
<option data-name="Saint Barthélemy" value="56042304">Saint Barthélemy</option>
<option data-name="Saint Helena, Ascension and Tristan da Cunha" value="23424944">Saint Helena, Ascension and Tristan da Cunha</option>
<option data-name="Saint Kitts and Nevis" value="23424940">Saint Kitts and Nevis</option>
<option data-name="Saint Lucia" value="23424951">Saint Lucia</option>
<option data-name="Saint Martin (French part)" value="56042305">Saint Martin (French part)</option>
<option data-name="Saint Pierre and Miquelon" value="23424939">Saint Pierre and Miquelon</option>
<option data-name="Saint Vincent and the Grenadines" value="23424981">Saint Vincent and the Grenadines</option>
<option data-name="Samoa" value="23424992">Samoa</option>
<option data-name="San Marino" value="23424947">San Marino</option>
<option data-name="Sao Tome and Principe" value="23424966">Sao Tome and Principe</option>
<option data-name="Saudi Arabia" value="23424938">Saudi Arabia</option>
<option data-name="Senegal" value="23424943">Senegal</option>
<option data-name="Serbia" value="20069818">Serbia</option>
<option data-name="Seychelles" value="23424941">Seychelles</option>
<option data-name="Sierra Leone" value="23424946">Sierra Leone</option>
<option data-name="Singapore" value="23424948">Singapore</option>
<option data-name="Sint Maarten (Dutch part)" value="56558058">Sint Maarten (Dutch part)</option>
<option data-name="Slovakia" value="23424877">Slovakia</option>
<option data-name="Slovenia" value="23424945">Slovenia</option>
<option data-name="Solomon Islands" value="23424766">Solomon Islands</option>
<option data-name="Somalia" value="23424949">Somalia</option>
<option data-name="South Africa" value="23424942">South Africa</option>
<option data-name="South Georgia and the South Sandwich Islands" value="23424955">South Georgia and the South Sandwich Islands</option>
<option data-name="South Korea" value="23424868">South Korea</option>
<option data-name="Spain" value="23424950">Spain</option>
<option data-name="Spratly Islands" value="23424921">Spratly Islands</option>
<option data-name="Sri Lanka" value="23424778">Sri Lanka</option>
<option data-name="Sudan" value="23424952">Sudan</option>
<option data-name="Suriname" value="23424913">Suriname</option>
<option data-name="Svalbard and Jan Mayen" value="28289413">Svalbard and Jan Mayen</option>
<option data-name="Swaziland" value="23424993">Swaziland</option>
<option data-name="Sweden" value="23424954">Sweden</option>
<option data-name="Switzerland" value="23424957">Switzerland</option>
<option data-name="Taiwan" value="23424971">Taiwan</option>
<option data-name="Tajikistan" value="23424961">Tajikistan</option>
<option data-name="Tanzania, United Republic of" value="23424973">Tanzania, United Republic of</option>
<option data-name="Thailand" value="23424960">Thailand</option>
<option data-name="The Bahamas" value="23424758">The Bahamas</option>
<option data-name="Togo" value="23424965">Togo</option>
<option data-name="Tokelau" value="23424963">Tokelau</option>
<option data-name="Tonga" value="23424964">Tonga</option>
<option data-name="Trinidad and Tobago" value="23424958">Trinidad and Tobago</option>
<option data-name="Tunisia" value="23424967">Tunisia</option>
<option data-name="Turkey" value="23424969">Turkey</option>
<option data-name="Turkmenistan" value="23424972">Turkmenistan</option>
<option data-name="Turks and Caicos Islands" value="23424962">Turks and Caicos Islands</option>
<option data-name="Tuvalu" value="23424970">Tuvalu</option>
<option data-name="Uganda" value="23424974">Uganda</option>
<option data-name="Ukraine" value="23424976">Ukraine</option>
<option data-name="United Arab Emirates" value="23424738">United Arab Emirates</option>
<option data-name="United Kingdom" value="23424975">United Kingdom</option>
<option data-name="United Nations Neutral Zone" value="23424997">United Nations Neutral Zone</option>
<option data-name="United States" value="23424977">United States</option>
<option data-name="United States Minor Outlying Islands" value="28289407">United States Minor Outlying Islands</option>
<option data-name="Uruguay" value="23424979">Uruguay</option>
<option data-name="Uzbekistan" value="23424980">Uzbekistan</option>
<option data-name="Vanuatu" value="23424907">Vanuatu</option>
<option data-name="Venezuela" value="23424982">Venezuela</option>
<option data-name="Vietnam" value="23424984">Vietnam</option>
<option data-name="Virgin Islands, U.S." value="23424985">Virgin Islands, U.S.</option>
<option data-name="Wallis and Futuna" value="23424989">Wallis and Futuna</option>
<option data-name="Western Sahara" value="23424990">Western Sahara</option>
<option data-name="Yemen" value="23425002">Yemen</option>
<option data-name="Zambia" value="23425003">Zambia</option>
<option data-name="Zimbabwe" value="23425004">Zimbabwe</option></select>

<svg class="svg-icon__delta-down icon-14" aria-hidden="true"><use xlink:href="#delta-down"></use></svg>
</div>
</div>
<div class="form-group">
<label>Pledge amount</label>
<div id="multiple-reward-pledge-amount-2535705">
<div class="new-form__amount new-form__amount--symbol"><input class="new-form__input--numbers form-control js-form-input text" value="10" type="text" name="backing[amount]" id="backing_amount" /><div class="new-form__currency-box"><span class="new-form__currency-box__text">$</span></div></div>
</div>
<input name="backing[backer_reward_id]" type="hidden" value="2535705">
<input name="clicked_reward" type="hidden" value="true">
</div>
<div class="pledge__continue js-continue">
<button class="bttn bttn-primary theme--create bttn-medium w100p pledge__button">
<span class="btn-text">
Continue
</span>
</button>
</div>
<div class="pledge__applepay js-applepay">
<button class="btn btn--applepay btn--block js-applepay-button" role="button" tabindex="1">
<span class="btn-text"></span>
<div class="loader-dots">
<svg version="1.1" viewBox="0 0 56 16" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
<g>
<circle class="loader-dot-1" cx="8" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-2" cx="28" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.33s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-3" cx="48" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.66s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
</g>
</svg>
</div>

</button>
<button class="btn btn--another-payment-method btn--like-text btn--block mt1" role="button" tabindex="2">
<span class="btn-text">
Other payment options
<svg class="svg-icon__arrow-right" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
</span>
</button>
<p class="f6 center p0 m0">
By pledging you agree to Kickstarter\'s <a class="popup" target="_blank" href="/terms-of-use">Terms of Use</a>, <a class="popup" target="_blank" href="/privacy">Privacy Policy</a>, and <a class="popup" target="_blank" href="/cookies">Cookie Policy</a>.

</p>
</div>
</div>
<div class="pledge__accountability js-pledge__accountability">
<h6 class="f6">
Kickstarter is not a store.
</h6>
<p class="f6 normal">
It\'s a way to bring creative projects to life.
</p>
<a class="f6 normal mb0" href="/trust?ref=project_reward">Learn more about accountability.</a>
</div>
</form>



</li>
<li class="hover-group pledge--inactive pledge-selectable-sidebar" data-reward-id="2603560">
<div class="pledge__hover hover-zoomout">
<div class="pledge__hover-content">
<p>Select this reward</p>
</div>
</div>
<div class="pledge__info">
<h2 class="pledge__amount">
Pledge <span class="money">US$ 25</span> or more
<span class="pledge__currency-conversion">
About <span>US$ 25</span>
</span>
</h2>
<div class="pledge__reward-description pledge__reward-description--expanded">
<p>BURGERS!! Get two boxes of each flavor for a total of 4 boxes. Please add the proper shipping cost when completing your pledge. Local Austin residents can pick up on one of our pick up dates.  We will be in touch about pick up dates.  We know shipping is high, but our product is frozen and requires 2 day air.  Residents of AZ, UT, WY, MT, ND, SD, MN, IA, WI, MI, IN, OH, KY, WV, VA, NC, SC, GA, FL, CO,IL add $36 for shipping.  Residents of WA, OR, NV, CA, NY, CT, RI, MA, ME, VT, HI, AL  add $48.  All other states add $13.</p>

<a class="pledge__reward-description-toggle js-desc-toggle hide" href="#" role="button">
<span>Less</span>
</a>
</div>
<div class="pledge__extra-info">
<div class="pledge__detail">
<span class="pledge__detail-label">Estimated delivery</span>
<span class="pledge__detail-info"><time datetime="2014-08-01" data-format="MMM YYYY" class="invisible-if-js js-adjust-time">Aug 2014</time></span>
</div>
<div class="pledge__detail">
<span class="pledge__detail-label">Ships to</span>
<span class="pledge__detail-info">Only United States</span>
</div>
</div>
<div class="pledge__backer-stats">
<div class="flex flex-wrap">
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-support-100">
20 backers
</div>

</div>
</div>
</div>

</div>

<form class="NS_pledges__shipping_select js-form-wrapper new-form new-form--block pledge__checkout pledge__checkout--with-shipping" action="/projects/1452363698/good-seed-craft-veggie-burgers/pledge" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="pledge__checkout-form">
<div class="form-group" id="shipping-select-4441911">
<label for="backing_location_id">Shipping destination</label>
<div class="ksr-select js-ksr-select" role="button" tabindex="-1">
<div class="title"></div>
<select name="backing[location_id]" id="backing_location_id" class="select"><option value="">Select a country:</option><option data-name="Afghanistan" value="23424739">Afghanistan</option>
<option data-name="Aland Islands" value="12577865">Aland Islands</option>
<option data-name="Albania" value="23424742">Albania</option>
<option data-name="Algeria" value="23424740">Algeria</option>
<option data-name="American Samoa" value="23424746">American Samoa</option>
<option data-name="Andorra" value="23424744">Andorra</option>
<option data-name="Angola" value="23424745">Angola</option>
<option data-name="Anguilla" value="23424751">Anguilla</option>
<option data-name="Antarctica" value="28289409">Antarctica</option>
<option data-name="Antigua and Barbuda" value="23424737">Antigua and Barbuda</option>
<option data-name="Argentina" value="23424747">Argentina</option>
<option data-name="Armenia" value="23424743">Armenia</option>
<option data-name="Aruba" value="23424736">Aruba</option>
<option data-name="Australia" value="23424748">Australia</option>
<option data-name="Austria" value="23424750">Austria</option>
<option data-name="Azerbaijan" value="23424741">Azerbaijan</option>
<option data-name="Bahrain" value="23424753">Bahrain</option>
<option data-name="Bangladesh" value="23424759">Bangladesh</option>
<option data-name="Barbados" value="23424754">Barbados</option>
<option data-name="Belarus" value="23424765">Belarus</option>
<option data-name="Belgium" value="23424757">Belgium</option>
<option data-name="Belize" value="23424760">Belize</option>
<option data-name="Benin" value="23424764">Benin</option>
<option data-name="Bermuda" value="23424756">Bermuda</option>
<option data-name="Bhutan" value="23424770">Bhutan</option>
<option data-name="Bolivia" value="23424762">Bolivia</option>
<option data-name="Bosnia and Herzegovina" value="23424761">Bosnia and Herzegovina</option>
<option data-name="Botswana" value="23424755">Botswana</option>
<option data-name="Bouvet Island" value="28289410">Bouvet Island</option>
<option data-name="Brazil" value="23424768">Brazil</option>
<option data-name="British Indian Ocean Territory" value="23424849">British Indian Ocean Territory</option>
<option data-name="British Virgin Islands" value="23424983">British Virgin Islands</option>
<option data-name="Brunei" value="23424773">Brunei</option>
<option data-name="Bulgaria" value="23424771">Bulgaria</option>
<option data-name="Burkina Faso" value="23424978">Burkina Faso</option>
<option data-name="Burundi" value="23424774">Burundi</option>
<option data-name="Cambodia" value="23424776">Cambodia</option>
<option data-name="Cameroon" value="23424785">Cameroon</option>
<option data-name="Canada" value="23424775">Canada</option>
<option data-name="Cape Verde" value="23424794">Cape Verde</option>
<option data-name="Caribbean Netherlands" value="56558056">Caribbean Netherlands</option>
<option data-name="Cayman Islands" value="23424783">Cayman Islands</option>
<option data-name="Central African Republic" value="23424792">Central African Republic</option>
<option data-name="Chad" value="23424777">Chad</option>
<option data-name="Chile" value="23424782">Chile</option>
<option data-name="China" value="23424781">China</option>
<option data-name="Christmas Island" value="23424869">Christmas Island</option>
<option data-name="Cocos (Keeling) Islands" value="23424784">Cocos (Keeling) Islands</option>
<option data-name="Colombia" value="23424787">Colombia</option>
<option data-name="Comoros" value="23424786">Comoros</option>
<option data-name="Congo" value="23424779">Congo</option>
<option data-name="Cook Islands" value="23424795">Cook Islands</option>
<option data-name="Costa Rica" value="23424791">Costa Rica</option>
<option data-name="Croatia" value="23424843">Croatia</option>
<option data-name="Curaçao" value="56558057">Curaçao</option>
<option data-name="Cyprus" value="26812346">Cyprus</option>
<option data-name="Czech Republic" value="23424810">Czech Republic</option>
<option data-name="Democratic Republic of Congo" value="23424780">Democratic Republic of Congo</option>
<option data-name="Denmark" value="23424796">Denmark</option>
<option data-name="Disputed Territory" value="23424928">Disputed Territory</option>
<option data-name="Djibouti" value="23424797">Djibouti</option>
<option data-name="Dominica" value="23424798">Dominica</option>
<option data-name="Dominican Republic" value="23424800">Dominican Republic</option>
<option data-name="East Timor" value="23424968">East Timor</option>
<option data-name="Ecuador" value="23424801">Ecuador</option>
<option data-name="Egypt" value="23424802">Egypt</option>
<option data-name="El Salvador" value="23424807">El Salvador</option>
<option data-name="Equatorial Guinea" value="23424804">Equatorial Guinea</option>
<option data-name="Eritrea" value="23424806">Eritrea</option>
<option data-name="Estonia" value="23424805">Estonia</option>
<option data-name="Ethiopia" value="23424808">Ethiopia</option>
<option data-name="Falkland Islands" value="23424814">Falkland Islands</option>
<option data-name="Faroe Islands" value="23424816">Faroe Islands</option>
<option data-name="Federated States of Micronesia" value="23424815">Federated States of Micronesia</option>
<option data-name="Fiji" value="23424813">Fiji</option>
<option data-name="Finland" value="23424812">Finland</option>
<option data-name="France" value="23424819">France</option>
<option data-name="French Guiana" value="23424811">French Guiana</option>
<option data-name="French Polynesia" value="23424817">French Polynesia</option>
<option data-name="French Southern Territories" value="28289406">French Southern Territories</option>
<option data-name="Gabon" value="23424822">Gabon</option>
<option data-name="Gambia" value="23424821">Gambia</option>
<option data-name="Georgia" value="23424823">Georgia</option>
<option data-name="Germany" value="23424829">Germany</option>
<option data-name="Ghana" value="23424824">Ghana</option>
<option data-name="Gibraltar" value="23424825">Gibraltar</option>
<option data-name="Greece" value="23424833">Greece</option>
<option data-name="Greenland" value="23424828">Greenland</option>
<option data-name="Grenada" value="23424826">Grenada</option>
<option data-name="Guadeloupe" value="23424831">Guadeloupe</option>
<option data-name="Guam" value="23424832">Guam</option>
<option data-name="Guatemala" value="23424834">Guatemala</option>
<option data-name="Guinea" value="23424835">Guinea</option>
<option data-name="Guinea-Bissau" value="23424929">Guinea-Bissau</option>
<option data-name="Guyana" value="23424836">Guyana</option>
<option data-name="Haiti" value="23424839">Haiti</option>
<option data-name="Heard Island and McDonald Islands" value="28289411">Heard Island and McDonald Islands</option>
<option data-name="Holy See (Vatican City State)" value="23424986">Holy See (Vatican City State)</option>
<option data-name="Honduras" value="23424841">Honduras</option>
<option data-name="Hong Kong" value="24865698">Hong Kong</option>
<option data-name="Hungary" value="23424844">Hungary</option>
<option data-name="Iceland" value="23424845">Iceland</option>
<option data-name="India" value="23424848">India</option>
<option data-name="Indonesia" value="23424846">Indonesia</option>
<option data-name="Iraq" value="23424855">Iraq</option>
<option data-name="Iraq-Saudi Arabia Neutral Zone" value="23424998">Iraq-Saudi Arabia Neutral Zone</option>
<option data-name="Ireland" value="23424803">Ireland</option>
<option data-name="Israel" value="23424852">Israel</option>
<option data-name="Italy" value="23424853">Italy</option>
<option data-name="Ivory Coast" value="23424854">Ivory Coast</option>
<option data-name="Jamaica" value="23424858">Jamaica</option>
<option data-name="Japan" value="23424856">Japan</option>
<option data-name="Jordan" value="23424860">Jordan</option>
<option data-name="Kazakhstan" value="23424871">Kazakhstan</option>
<option data-name="Kenya" value="23424863">Kenya</option>
<option data-name="Kiribati" value="23424867">Kiribati</option>
<option data-name="Kosovo" value="29389201">Kosovo</option>
<option data-name="Kuwait" value="23424870">Kuwait</option>
<option data-name="Kyrgyzstan" value="23424864">Kyrgyzstan</option>
<option data-name="Laos" value="23424872">Laos</option>
<option data-name="Latvia" value="23424874">Latvia</option>
<option data-name="Lebanon" value="23424873">Lebanon</option>
<option data-name="Lesotho" value="23424880">Lesotho</option>
<option data-name="Liberia" value="23424876">Liberia</option>
<option data-name="Libya" value="23424882">Libya</option>
<option data-name="Liechtenstein" value="23424879">Liechtenstein</option>
<option data-name="Lithuania" value="23424875">Lithuania</option>
<option data-name="Luxembourg" value="23424881">Luxembourg</option>
<option data-name="Macao" value="20070017">Macao</option>
<option data-name="Macedonia" value="23424890">Macedonia</option>
<option data-name="Madagascar" value="23424883">Madagascar</option>
<option data-name="Malawi" value="23424889">Malawi</option>
<option data-name="Malaysia" value="23424901">Malaysia</option>
<option data-name="Maldives" value="23424899">Maldives</option>
<option data-name="Mali" value="23424891">Mali</option>
<option data-name="Malta" value="23424897">Malta</option>
<option data-name="Marshall Islands" value="23424932">Marshall Islands</option>
<option data-name="Martinique" value="23424884">Martinique</option>
<option data-name="Mauritania" value="23424896">Mauritania</option>
<option data-name="Mauritius" value="23424894">Mauritius</option>
<option data-name="Mayotte" value="23424886">Mayotte</option>
<option data-name="Mexico" value="23424900">Mexico</option>
<option data-name="Moldova" value="23424885">Moldova</option>
<option data-name="Monaco" value="23424892">Monaco</option>
<option data-name="Mongolia" value="23424887">Mongolia</option>
<option data-name="Montenegro" value="20069817">Montenegro</option>
<option data-name="Montserrat" value="23424888">Montserrat</option>
<option data-name="Morocco" value="23424893">Morocco</option>
<option data-name="Mozambique" value="23424902">Mozambique</option>
<option data-name="Myanmar" value="23424763">Myanmar</option>
<option data-name="Namibia" value="23424987">Namibia</option>
<option data-name="Nauru" value="23424912">Nauru</option>
<option data-name="Nepal" value="23424911">Nepal</option>
<option data-name="Netherlands" value="23424909">Netherlands</option>
<option data-name="New Caledonia" value="23424903">New Caledonia</option>
<option data-name="New Zealand" value="23424916">New Zealand</option>
<option data-name="Nicaragua" value="23424915">Nicaragua</option>
<option data-name="Niger" value="23424906">Niger</option>
<option data-name="Nigeria" value="23424908">Nigeria</option>
<option data-name="Niue" value="23424904">Niue</option>
<option data-name="Norfolk Island" value="23424905">Norfolk Island</option>
<option data-name="Northern Mariana Islands" value="23424788">Northern Mariana Islands</option>
<option data-name="Norway" value="23424910">Norway</option>
<option data-name="Oman" value="23424898">Oman</option>
<option data-name="Pakistan" value="23424922">Pakistan</option>
<option data-name="Palau" value="23424927">Palau</option>
<option data-name="Palestine" value="28289408">Palestine</option>
<option data-name="Panama" value="23424924">Panama</option>
<option data-name="Papua New Guinea" value="23424926">Papua New Guinea</option>
<option data-name="Paraguay" value="23424917">Paraguay</option>
<option data-name="Peru" value="23424919">Peru</option>
<option data-name="Philippines" value="23424934">Philippines</option>
<option data-name="Pitcairn Islands" value="23424918">Pitcairn Islands</option>
<option data-name="Poland" value="23424923">Poland</option>
<option data-name="Portugal" value="23424925">Portugal</option>
<option data-name="Puerto Rico" value="23424935">Puerto Rico</option>
<option data-name="Qatar" value="23424930">Qatar</option>
<option data-name="Romania" value="23424933">Romania</option>
<option data-name="Russia" value="23424936">Russia</option>
<option data-name="Rwanda" value="23424937">Rwanda</option>
<option data-name="Réunion" value="23424931">Réunion</option>
<option data-name="Saint Barthélemy" value="56042304">Saint Barthélemy</option>
<option data-name="Saint Helena, Ascension and Tristan da Cunha" value="23424944">Saint Helena, Ascension and Tristan da Cunha</option>
<option data-name="Saint Kitts and Nevis" value="23424940">Saint Kitts and Nevis</option>
<option data-name="Saint Lucia" value="23424951">Saint Lucia</option>
<option data-name="Saint Martin (French part)" value="56042305">Saint Martin (French part)</option>
<option data-name="Saint Pierre and Miquelon" value="23424939">Saint Pierre and Miquelon</option>
<option data-name="Saint Vincent and the Grenadines" value="23424981">Saint Vincent and the Grenadines</option>
<option data-name="Samoa" value="23424992">Samoa</option>
<option data-name="San Marino" value="23424947">San Marino</option>
<option data-name="Sao Tome and Principe" value="23424966">Sao Tome and Principe</option>
<option data-name="Saudi Arabia" value="23424938">Saudi Arabia</option>
<option data-name="Senegal" value="23424943">Senegal</option>
<option data-name="Serbia" value="20069818">Serbia</option>
<option data-name="Seychelles" value="23424941">Seychelles</option>
<option data-name="Sierra Leone" value="23424946">Sierra Leone</option>
<option data-name="Singapore" value="23424948">Singapore</option>
<option data-name="Sint Maarten (Dutch part)" value="56558058">Sint Maarten (Dutch part)</option>
<option data-name="Slovakia" value="23424877">Slovakia</option>
<option data-name="Slovenia" value="23424945">Slovenia</option>
<option data-name="Solomon Islands" value="23424766">Solomon Islands</option>
<option data-name="Somalia" value="23424949">Somalia</option>
<option data-name="South Africa" value="23424942">South Africa</option>
<option data-name="South Georgia and the South Sandwich Islands" value="23424955">South Georgia and the South Sandwich Islands</option>
<option data-name="South Korea" value="23424868">South Korea</option>
<option data-name="Spain" value="23424950">Spain</option>
<option data-name="Spratly Islands" value="23424921">Spratly Islands</option>
<option data-name="Sri Lanka" value="23424778">Sri Lanka</option>
<option data-name="Sudan" value="23424952">Sudan</option>
<option data-name="Suriname" value="23424913">Suriname</option>
<option data-name="Svalbard and Jan Mayen" value="28289413">Svalbard and Jan Mayen</option>
<option data-name="Swaziland" value="23424993">Swaziland</option>
<option data-name="Sweden" value="23424954">Sweden</option>
<option data-name="Switzerland" value="23424957">Switzerland</option>
<option data-name="Taiwan" value="23424971">Taiwan</option>
<option data-name="Tajikistan" value="23424961">Tajikistan</option>
<option data-name="Tanzania, United Republic of" value="23424973">Tanzania, United Republic of</option>
<option data-name="Thailand" value="23424960">Thailand</option>
<option data-name="The Bahamas" value="23424758">The Bahamas</option>
<option data-name="Togo" value="23424965">Togo</option>
<option data-name="Tokelau" value="23424963">Tokelau</option>
<option data-name="Tonga" value="23424964">Tonga</option>
<option data-name="Trinidad and Tobago" value="23424958">Trinidad and Tobago</option>
<option data-name="Tunisia" value="23424967">Tunisia</option>
<option data-name="Turkey" value="23424969">Turkey</option>
<option data-name="Turkmenistan" value="23424972">Turkmenistan</option>
<option data-name="Turks and Caicos Islands" value="23424962">Turks and Caicos Islands</option>
<option data-name="Tuvalu" value="23424970">Tuvalu</option>
<option data-name="Uganda" value="23424974">Uganda</option>
<option data-name="Ukraine" value="23424976">Ukraine</option>
<option data-name="United Arab Emirates" value="23424738">United Arab Emirates</option>
<option data-name="United Kingdom" value="23424975">United Kingdom</option>
<option data-name="United Nations Neutral Zone" value="23424997">United Nations Neutral Zone</option>
<option data-name="United States" value="23424977">United States</option>
<option data-name="United States Minor Outlying Islands" value="28289407">United States Minor Outlying Islands</option>
<option data-name="Uruguay" value="23424979">Uruguay</option>
<option data-name="Uzbekistan" value="23424980">Uzbekistan</option>
<option data-name="Vanuatu" value="23424907">Vanuatu</option>
<option data-name="Venezuela" value="23424982">Venezuela</option>
<option data-name="Vietnam" value="23424984">Vietnam</option>
<option data-name="Virgin Islands, U.S." value="23424985">Virgin Islands, U.S.</option>
<option data-name="Wallis and Futuna" value="23424989">Wallis and Futuna</option>
<option data-name="Western Sahara" value="23424990">Western Sahara</option>
<option data-name="Yemen" value="23425002">Yemen</option>
<option data-name="Zambia" value="23425003">Zambia</option>
<option data-name="Zimbabwe" value="23425004">Zimbabwe</option></select>

<svg class="svg-icon__delta-down icon-14" aria-hidden="true"><use xlink:href="#delta-down"></use></svg>
</div>
</div>
<div class="form-group">
<label>Pledge amount</label>
<div id="multiple-reward-pledge-amount-2603560">
<div class="new-form__amount new-form__amount--symbol"><input class="new-form__input--numbers form-control js-form-input text" value="25" type="text" name="backing[amount]" id="backing_amount" /><div class="new-form__currency-box"><span class="new-form__currency-box__text">$</span></div></div>
</div>
<input name="backing[backer_reward_id]" type="hidden" value="2603560">
<input name="clicked_reward" type="hidden" value="true">
</div>
<div class="pledge__continue js-continue">
<button class="bttn bttn-primary theme--create bttn-medium w100p pledge__button">
<span class="btn-text">
Continue
</span>
</button>
</div>
<div class="pledge__applepay js-applepay">
<button class="btn btn--applepay btn--block js-applepay-button" role="button" tabindex="1">
<span class="btn-text"></span>
<div class="loader-dots">
<svg version="1.1" viewBox="0 0 56 16" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
<g>
<circle class="loader-dot-1" cx="8" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-2" cx="28" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.33s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-3" cx="48" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.66s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
</g>
</svg>
</div>

</button>
<button class="btn btn--another-payment-method btn--like-text btn--block mt1" role="button" tabindex="2">
<span class="btn-text">
Other payment options
<svg class="svg-icon__arrow-right" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
</span>
</button>
<p class="f6 center p0 m0">
By pledging you agree to Kickstarter\'s <a class="popup" target="_blank" href="/terms-of-use">Terms of Use</a>, <a class="popup" target="_blank" href="/privacy">Privacy Policy</a>, and <a class="popup" target="_blank" href="/cookies">Cookie Policy</a>.

</p>
</div>
</div>
<div class="pledge__accountability js-pledge__accountability">
<h6 class="f6">
Kickstarter is not a store.
</h6>
<p class="f6 normal">
It\'s a way to bring creative projects to life.
</p>
<a class="f6 normal mb0" href="/trust?ref=project_reward">Learn more about accountability.</a>
</div>
</form>



</li>
<li class="hover-group pledge--inactive pledge-selectable-sidebar" data-reward-id="2535706">
<div class="pledge__hover hover-zoomout">
<div class="pledge__hover-content">
<p>Select this reward</p>
</div>
</div>
<div class="pledge__info">
<h2 class="pledge__amount">
Pledge <span class="money">US$ 30</span> or more
<span class="pledge__currency-conversion">
About <span>US$ 30</span>
</span>
</h2>
<div class="pledge__reward-description pledge__reward-description--expanded">
<p>GOOD SEED PINT GLASS + STICKERS + BUTTONS
<br />You will get a stainless steel Good Seed pint glass, Good Seed				
<br />stickers, and buttons.</p>

<a class="pledge__reward-description-toggle js-desc-toggle hide" href="#" role="button">
<span>Less</span>
</a>
</div>
<div class="pledge__extra-info">
<div class="pledge__detail">
<span class="pledge__detail-label">Estimated delivery</span>
<span class="pledge__detail-info"><time datetime="2014-08-01" data-format="MMM YYYY" class="invisible-if-js js-adjust-time">Aug 2014</time></span>
</div>
<div class="pledge__detail">
<span class="pledge__detail-label">Ships to</span>
<span class="pledge__detail-info">Only United States</span>
</div>
</div>
<div class="pledge__backer-stats">
<div class="flex flex-wrap">
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-support-100">
4 backers
</div>

</div>
</div>
</div>

</div>

<form class="NS_pledges__shipping_select js-form-wrapper new-form new-form--block pledge__checkout pledge__checkout--with-shipping" action="/projects/1452363698/good-seed-craft-veggie-burgers/pledge" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="pledge__checkout-form">
<div class="form-group" id="shipping-select-4441911">
<label for="backing_location_id">Shipping destination</label>
<div class="ksr-select js-ksr-select" role="button" tabindex="-1">
<div class="title"></div>
<select name="backing[location_id]" id="backing_location_id" class="select"><option value="">Select a country:</option><option data-name="Afghanistan" value="23424739">Afghanistan</option>
<option data-name="Aland Islands" value="12577865">Aland Islands</option>
<option data-name="Albania" value="23424742">Albania</option>
<option data-name="Algeria" value="23424740">Algeria</option>
<option data-name="American Samoa" value="23424746">American Samoa</option>
<option data-name="Andorra" value="23424744">Andorra</option>
<option data-name="Angola" value="23424745">Angola</option>
<option data-name="Anguilla" value="23424751">Anguilla</option>
<option data-name="Antarctica" value="28289409">Antarctica</option>
<option data-name="Antigua and Barbuda" value="23424737">Antigua and Barbuda</option>
<option data-name="Argentina" value="23424747">Argentina</option>
<option data-name="Armenia" value="23424743">Armenia</option>
<option data-name="Aruba" value="23424736">Aruba</option>
<option data-name="Australia" value="23424748">Australia</option>
<option data-name="Austria" value="23424750">Austria</option>
<option data-name="Azerbaijan" value="23424741">Azerbaijan</option>
<option data-name="Bahrain" value="23424753">Bahrain</option>
<option data-name="Bangladesh" value="23424759">Bangladesh</option>
<option data-name="Barbados" value="23424754">Barbados</option>
<option data-name="Belarus" value="23424765">Belarus</option>
<option data-name="Belgium" value="23424757">Belgium</option>
<option data-name="Belize" value="23424760">Belize</option>
<option data-name="Benin" value="23424764">Benin</option>
<option data-name="Bermuda" value="23424756">Bermuda</option>
<option data-name="Bhutan" value="23424770">Bhutan</option>
<option data-name="Bolivia" value="23424762">Bolivia</option>
<option data-name="Bosnia and Herzegovina" value="23424761">Bosnia and Herzegovina</option>
<option data-name="Botswana" value="23424755">Botswana</option>
<option data-name="Bouvet Island" value="28289410">Bouvet Island</option>
<option data-name="Brazil" value="23424768">Brazil</option>
<option data-name="British Indian Ocean Territory" value="23424849">British Indian Ocean Territory</option>
<option data-name="British Virgin Islands" value="23424983">British Virgin Islands</option>
<option data-name="Brunei" value="23424773">Brunei</option>
<option data-name="Bulgaria" value="23424771">Bulgaria</option>
<option data-name="Burkina Faso" value="23424978">Burkina Faso</option>
<option data-name="Burundi" value="23424774">Burundi</option>
<option data-name="Cambodia" value="23424776">Cambodia</option>
<option data-name="Cameroon" value="23424785">Cameroon</option>
<option data-name="Canada" value="23424775">Canada</option>
<option data-name="Cape Verde" value="23424794">Cape Verde</option>
<option data-name="Caribbean Netherlands" value="56558056">Caribbean Netherlands</option>
<option data-name="Cayman Islands" value="23424783">Cayman Islands</option>
<option data-name="Central African Republic" value="23424792">Central African Republic</option>
<option data-name="Chad" value="23424777">Chad</option>
<option data-name="Chile" value="23424782">Chile</option>
<option data-name="China" value="23424781">China</option>
<option data-name="Christmas Island" value="23424869">Christmas Island</option>
<option data-name="Cocos (Keeling) Islands" value="23424784">Cocos (Keeling) Islands</option>
<option data-name="Colombia" value="23424787">Colombia</option>
<option data-name="Comoros" value="23424786">Comoros</option>
<option data-name="Congo" value="23424779">Congo</option>
<option data-name="Cook Islands" value="23424795">Cook Islands</option>
<option data-name="Costa Rica" value="23424791">Costa Rica</option>
<option data-name="Croatia" value="23424843">Croatia</option>
<option data-name="Curaçao" value="56558057">Curaçao</option>
<option data-name="Cyprus" value="26812346">Cyprus</option>
<option data-name="Czech Republic" value="23424810">Czech Republic</option>
<option data-name="Democratic Republic of Congo" value="23424780">Democratic Republic of Congo</option>
<option data-name="Denmark" value="23424796">Denmark</option>
<option data-name="Disputed Territory" value="23424928">Disputed Territory</option>
<option data-name="Djibouti" value="23424797">Djibouti</option>
<option data-name="Dominica" value="23424798">Dominica</option>
<option data-name="Dominican Republic" value="23424800">Dominican Republic</option>
<option data-name="East Timor" value="23424968">East Timor</option>
<option data-name="Ecuador" value="23424801">Ecuador</option>
<option data-name="Egypt" value="23424802">Egypt</option>
<option data-name="El Salvador" value="23424807">El Salvador</option>
<option data-name="Equatorial Guinea" value="23424804">Equatorial Guinea</option>
<option data-name="Eritrea" value="23424806">Eritrea</option>
<option data-name="Estonia" value="23424805">Estonia</option>
<option data-name="Ethiopia" value="23424808">Ethiopia</option>
<option data-name="Falkland Islands" value="23424814">Falkland Islands</option>
<option data-name="Faroe Islands" value="23424816">Faroe Islands</option>
<option data-name="Federated States of Micronesia" value="23424815">Federated States of Micronesia</option>
<option data-name="Fiji" value="23424813">Fiji</option>
<option data-name="Finland" value="23424812">Finland</option>
<option data-name="France" value="23424819">France</option>
<option data-name="French Guiana" value="23424811">French Guiana</option>
<option data-name="French Polynesia" value="23424817">French Polynesia</option>
<option data-name="French Southern Territories" value="28289406">French Southern Territories</option>
<option data-name="Gabon" value="23424822">Gabon</option>
<option data-name="Gambia" value="23424821">Gambia</option>
<option data-name="Georgia" value="23424823">Georgia</option>
<option data-name="Germany" value="23424829">Germany</option>
<option data-name="Ghana" value="23424824">Ghana</option>
<option data-name="Gibraltar" value="23424825">Gibraltar</option>
<option data-name="Greece" value="23424833">Greece</option>
<option data-name="Greenland" value="23424828">Greenland</option>
<option data-name="Grenada" value="23424826">Grenada</option>
<option data-name="Guadeloupe" value="23424831">Guadeloupe</option>
<option data-name="Guam" value="23424832">Guam</option>
<option data-name="Guatemala" value="23424834">Guatemala</option>
<option data-name="Guinea" value="23424835">Guinea</option>
<option data-name="Guinea-Bissau" value="23424929">Guinea-Bissau</option>
<option data-name="Guyana" value="23424836">Guyana</option>
<option data-name="Haiti" value="23424839">Haiti</option>
<option data-name="Heard Island and McDonald Islands" value="28289411">Heard Island and McDonald Islands</option>
<option data-name="Holy See (Vatican City State)" value="23424986">Holy See (Vatican City State)</option>
<option data-name="Honduras" value="23424841">Honduras</option>
<option data-name="Hong Kong" value="24865698">Hong Kong</option>
<option data-name="Hungary" value="23424844">Hungary</option>
<option data-name="Iceland" value="23424845">Iceland</option>
<option data-name="India" value="23424848">India</option>
<option data-name="Indonesia" value="23424846">Indonesia</option>
<option data-name="Iraq" value="23424855">Iraq</option>
<option data-name="Iraq-Saudi Arabia Neutral Zone" value="23424998">Iraq-Saudi Arabia Neutral Zone</option>
<option data-name="Ireland" value="23424803">Ireland</option>
<option data-name="Israel" value="23424852">Israel</option>
<option data-name="Italy" value="23424853">Italy</option>
<option data-name="Ivory Coast" value="23424854">Ivory Coast</option>
<option data-name="Jamaica" value="23424858">Jamaica</option>
<option data-name="Japan" value="23424856">Japan</option>
<option data-name="Jordan" value="23424860">Jordan</option>
<option data-name="Kazakhstan" value="23424871">Kazakhstan</option>
<option data-name="Kenya" value="23424863">Kenya</option>
<option data-name="Kiribati" value="23424867">Kiribati</option>
<option data-name="Kosovo" value="29389201">Kosovo</option>
<option data-name="Kuwait" value="23424870">Kuwait</option>
<option data-name="Kyrgyzstan" value="23424864">Kyrgyzstan</option>
<option data-name="Laos" value="23424872">Laos</option>
<option data-name="Latvia" value="23424874">Latvia</option>
<option data-name="Lebanon" value="23424873">Lebanon</option>
<option data-name="Lesotho" value="23424880">Lesotho</option>
<option data-name="Liberia" value="23424876">Liberia</option>
<option data-name="Libya" value="23424882">Libya</option>
<option data-name="Liechtenstein" value="23424879">Liechtenstein</option>
<option data-name="Lithuania" value="23424875">Lithuania</option>
<option data-name="Luxembourg" value="23424881">Luxembourg</option>
<option data-name="Macao" value="20070017">Macao</option>
<option data-name="Macedonia" value="23424890">Macedonia</option>
<option data-name="Madagascar" value="23424883">Madagascar</option>
<option data-name="Malawi" value="23424889">Malawi</option>
<option data-name="Malaysia" value="23424901">Malaysia</option>
<option data-name="Maldives" value="23424899">Maldives</option>
<option data-name="Mali" value="23424891">Mali</option>
<option data-name="Malta" value="23424897">Malta</option>
<option data-name="Marshall Islands" value="23424932">Marshall Islands</option>
<option data-name="Martinique" value="23424884">Martinique</option>
<option data-name="Mauritania" value="23424896">Mauritania</option>
<option data-name="Mauritius" value="23424894">Mauritius</option>
<option data-name="Mayotte" value="23424886">Mayotte</option>
<option data-name="Mexico" value="23424900">Mexico</option>
<option data-name="Moldova" value="23424885">Moldova</option>
<option data-name="Monaco" value="23424892">Monaco</option>
<option data-name="Mongolia" value="23424887">Mongolia</option>
<option data-name="Montenegro" value="20069817">Montenegro</option>
<option data-name="Montserrat" value="23424888">Montserrat</option>
<option data-name="Morocco" value="23424893">Morocco</option>
<option data-name="Mozambique" value="23424902">Mozambique</option>
<option data-name="Myanmar" value="23424763">Myanmar</option>
<option data-name="Namibia" value="23424987">Namibia</option>
<option data-name="Nauru" value="23424912">Nauru</option>
<option data-name="Nepal" value="23424911">Nepal</option>
<option data-name="Netherlands" value="23424909">Netherlands</option>
<option data-name="New Caledonia" value="23424903">New Caledonia</option>
<option data-name="New Zealand" value="23424916">New Zealand</option>
<option data-name="Nicaragua" value="23424915">Nicaragua</option>
<option data-name="Niger" value="23424906">Niger</option>
<option data-name="Nigeria" value="23424908">Nigeria</option>
<option data-name="Niue" value="23424904">Niue</option>
<option data-name="Norfolk Island" value="23424905">Norfolk Island</option>
<option data-name="Northern Mariana Islands" value="23424788">Northern Mariana Islands</option>
<option data-name="Norway" value="23424910">Norway</option>
<option data-name="Oman" value="23424898">Oman</option>
<option data-name="Pakistan" value="23424922">Pakistan</option>
<option data-name="Palau" value="23424927">Palau</option>
<option data-name="Palestine" value="28289408">Palestine</option>
<option data-name="Panama" value="23424924">Panama</option>
<option data-name="Papua New Guinea" value="23424926">Papua New Guinea</option>
<option data-name="Paraguay" value="23424917">Paraguay</option>
<option data-name="Peru" value="23424919">Peru</option>
<option data-name="Philippines" value="23424934">Philippines</option>
<option data-name="Pitcairn Islands" value="23424918">Pitcairn Islands</option>
<option data-name="Poland" value="23424923">Poland</option>
<option data-name="Portugal" value="23424925">Portugal</option>
<option data-name="Puerto Rico" value="23424935">Puerto Rico</option>
<option data-name="Qatar" value="23424930">Qatar</option>
<option data-name="Romania" value="23424933">Romania</option>
<option data-name="Russia" value="23424936">Russia</option>
<option data-name="Rwanda" value="23424937">Rwanda</option>
<option data-name="Réunion" value="23424931">Réunion</option>
<option data-name="Saint Barthélemy" value="56042304">Saint Barthélemy</option>
<option data-name="Saint Helena, Ascension and Tristan da Cunha" value="23424944">Saint Helena, Ascension and Tristan da Cunha</option>
<option data-name="Saint Kitts and Nevis" value="23424940">Saint Kitts and Nevis</option>
<option data-name="Saint Lucia" value="23424951">Saint Lucia</option>
<option data-name="Saint Martin (French part)" value="56042305">Saint Martin (French part)</option>
<option data-name="Saint Pierre and Miquelon" value="23424939">Saint Pierre and Miquelon</option>
<option data-name="Saint Vincent and the Grenadines" value="23424981">Saint Vincent and the Grenadines</option>
<option data-name="Samoa" value="23424992">Samoa</option>
<option data-name="San Marino" value="23424947">San Marino</option>
<option data-name="Sao Tome and Principe" value="23424966">Sao Tome and Principe</option>
<option data-name="Saudi Arabia" value="23424938">Saudi Arabia</option>
<option data-name="Senegal" value="23424943">Senegal</option>
<option data-name="Serbia" value="20069818">Serbia</option>
<option data-name="Seychelles" value="23424941">Seychelles</option>
<option data-name="Sierra Leone" value="23424946">Sierra Leone</option>
<option data-name="Singapore" value="23424948">Singapore</option>
<option data-name="Sint Maarten (Dutch part)" value="56558058">Sint Maarten (Dutch part)</option>
<option data-name="Slovakia" value="23424877">Slovakia</option>
<option data-name="Slovenia" value="23424945">Slovenia</option>
<option data-name="Solomon Islands" value="23424766">Solomon Islands</option>
<option data-name="Somalia" value="23424949">Somalia</option>
<option data-name="South Africa" value="23424942">South Africa</option>
<option data-name="South Georgia and the South Sandwich Islands" value="23424955">South Georgia and the South Sandwich Islands</option>
<option data-name="South Korea" value="23424868">South Korea</option>
<option data-name="Spain" value="23424950">Spain</option>
<option data-name="Spratly Islands" value="23424921">Spratly Islands</option>
<option data-name="Sri Lanka" value="23424778">Sri Lanka</option>
<option data-name="Sudan" value="23424952">Sudan</option>
<option data-name="Suriname" value="23424913">Suriname</option>
<option data-name="Svalbard and Jan Mayen" value="28289413">Svalbard and Jan Mayen</option>
<option data-name="Swaziland" value="23424993">Swaziland</option>
<option data-name="Sweden" value="23424954">Sweden</option>
<option data-name="Switzerland" value="23424957">Switzerland</option>
<option data-name="Taiwan" value="23424971">Taiwan</option>
<option data-name="Tajikistan" value="23424961">Tajikistan</option>
<option data-name="Tanzania, United Republic of" value="23424973">Tanzania, United Republic of</option>
<option data-name="Thailand" value="23424960">Thailand</option>
<option data-name="The Bahamas" value="23424758">The Bahamas</option>
<option data-name="Togo" value="23424965">Togo</option>
<option data-name="Tokelau" value="23424963">Tokelau</option>
<option data-name="Tonga" value="23424964">Tonga</option>
<option data-name="Trinidad and Tobago" value="23424958">Trinidad and Tobago</option>
<option data-name="Tunisia" value="23424967">Tunisia</option>
<option data-name="Turkey" value="23424969">Turkey</option>
<option data-name="Turkmenistan" value="23424972">Turkmenistan</option>
<option data-name="Turks and Caicos Islands" value="23424962">Turks and Caicos Islands</option>
<option data-name="Tuvalu" value="23424970">Tuvalu</option>
<option data-name="Uganda" value="23424974">Uganda</option>
<option data-name="Ukraine" value="23424976">Ukraine</option>
<option data-name="United Arab Emirates" value="23424738">United Arab Emirates</option>
<option data-name="United Kingdom" value="23424975">United Kingdom</option>
<option data-name="United Nations Neutral Zone" value="23424997">United Nations Neutral Zone</option>
<option data-name="United States" value="23424977">United States</option>
<option data-name="United States Minor Outlying Islands" value="28289407">United States Minor Outlying Islands</option>
<option data-name="Uruguay" value="23424979">Uruguay</option>
<option data-name="Uzbekistan" value="23424980">Uzbekistan</option>
<option data-name="Vanuatu" value="23424907">Vanuatu</option>
<option data-name="Venezuela" value="23424982">Venezuela</option>
<option data-name="Vietnam" value="23424984">Vietnam</option>
<option data-name="Virgin Islands, U.S." value="23424985">Virgin Islands, U.S.</option>
<option data-name="Wallis and Futuna" value="23424989">Wallis and Futuna</option>
<option data-name="Western Sahara" value="23424990">Western Sahara</option>
<option data-name="Yemen" value="23425002">Yemen</option>
<option data-name="Zambia" value="23425003">Zambia</option>
<option data-name="Zimbabwe" value="23425004">Zimbabwe</option></select>

<svg class="svg-icon__delta-down icon-14" aria-hidden="true"><use xlink:href="#delta-down"></use></svg>
</div>
</div>
<div class="form-group">
<label>Pledge amount</label>
<div id="multiple-reward-pledge-amount-2535706">
<div class="new-form__amount new-form__amount--symbol"><input class="new-form__input--numbers form-control js-form-input text" value="30" type="text" name="backing[amount]" id="backing_amount" /><div class="new-form__currency-box"><span class="new-form__currency-box__text">$</span></div></div>
</div>
<input name="backing[backer_reward_id]" type="hidden" value="2535706">
<input name="clicked_reward" type="hidden" value="true">
</div>
<div class="pledge__continue js-continue">
<button class="bttn bttn-primary theme--create bttn-medium w100p pledge__button">
<span class="btn-text">
Continue
</span>
</button>
</div>
<div class="pledge__applepay js-applepay">
<button class="btn btn--applepay btn--block js-applepay-button" role="button" tabindex="1">
<span class="btn-text"></span>
<div class="loader-dots">
<svg version="1.1" viewBox="0 0 56 16" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
<g>
<circle class="loader-dot-1" cx="8" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-2" cx="28" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.33s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-3" cx="48" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.66s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
</g>
</svg>
</div>

</button>
<button class="btn btn--another-payment-method btn--like-text btn--block mt1" role="button" tabindex="2">
<span class="btn-text">
Other payment options
<svg class="svg-icon__arrow-right" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
</span>
</button>
<p class="f6 center p0 m0">
By pledging you agree to Kickstarter\'s <a class="popup" target="_blank" href="/terms-of-use">Terms of Use</a>, <a class="popup" target="_blank" href="/privacy">Privacy Policy</a>, and <a class="popup" target="_blank" href="/cookies">Cookie Policy</a>.

</p>
</div>
</div>
<div class="pledge__accountability js-pledge__accountability">
<h6 class="f6">
Kickstarter is not a store.
</h6>
<p class="f6 normal">
It\'s a way to bring creative projects to life.
</p>
<a class="f6 normal mb0" href="/trust?ref=project_reward">Learn more about accountability.</a>
</div>
</form>



</li>
<li class="hover-group pledge--inactive pledge-selectable-sidebar" data-reward-id="2538326">
<div class="pledge__hover hover-zoomout">
<div class="pledge__hover-content">
<p>Select this reward</p>
</div>
</div>
<div class="pledge__info">
<h2 class="pledge__amount">
Pledge <span class="money">US$ 30</span> or more
<span class="pledge__currency-conversion">
About <span>US$ 30</span>
</span>
</h2>
<div class="pledge__reward-description pledge__reward-description--expanded">
<p>GOOD SEED HEMP TOTE
<br />You will receive a tote bag made of hemp with the good seed logo, stickers, and buttons.</p>

<a class="pledge__reward-description-toggle js-desc-toggle hide" href="#" role="button">
<span>Less</span>
</a>
</div>
<div class="pledge__extra-info">
<div class="pledge__detail">
<span class="pledge__detail-label">Estimated delivery</span>
<span class="pledge__detail-info"><time datetime="2014-08-01" data-format="MMM YYYY" class="invisible-if-js js-adjust-time">Aug 2014</time></span>
</div>
<div class="pledge__detail">
<span class="pledge__detail-label">Ships to</span>
<span class="pledge__detail-info">Only United States</span>
</div>
</div>
<div class="pledge__backer-stats">
<div class="flex flex-wrap">
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-support-100">
3 backers
</div>

</div>
</div>
</div>

</div>

<form class="NS_pledges__shipping_select js-form-wrapper new-form new-form--block pledge__checkout pledge__checkout--with-shipping" action="/projects/1452363698/good-seed-craft-veggie-burgers/pledge" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="pledge__checkout-form">
<div class="form-group" id="shipping-select-4441911">
<label for="backing_location_id">Shipping destination</label>
<div class="ksr-select js-ksr-select" role="button" tabindex="-1">
<div class="title"></div>
<select name="backing[location_id]" id="backing_location_id" class="select"><option value="">Select a country:</option><option data-name="Afghanistan" value="23424739">Afghanistan</option>
<option data-name="Aland Islands" value="12577865">Aland Islands</option>
<option data-name="Albania" value="23424742">Albania</option>
<option data-name="Algeria" value="23424740">Algeria</option>
<option data-name="American Samoa" value="23424746">American Samoa</option>
<option data-name="Andorra" value="23424744">Andorra</option>
<option data-name="Angola" value="23424745">Angola</option>
<option data-name="Anguilla" value="23424751">Anguilla</option>
<option data-name="Antarctica" value="28289409">Antarctica</option>
<option data-name="Antigua and Barbuda" value="23424737">Antigua and Barbuda</option>
<option data-name="Argentina" value="23424747">Argentina</option>
<option data-name="Armenia" value="23424743">Armenia</option>
<option data-name="Aruba" value="23424736">Aruba</option>
<option data-name="Australia" value="23424748">Australia</option>
<option data-name="Austria" value="23424750">Austria</option>
<option data-name="Azerbaijan" value="23424741">Azerbaijan</option>
<option data-name="Bahrain" value="23424753">Bahrain</option>
<option data-name="Bangladesh" value="23424759">Bangladesh</option>
<option data-name="Barbados" value="23424754">Barbados</option>
<option data-name="Belarus" value="23424765">Belarus</option>
<option data-name="Belgium" value="23424757">Belgium</option>
<option data-name="Belize" value="23424760">Belize</option>
<option data-name="Benin" value="23424764">Benin</option>
<option data-name="Bermuda" value="23424756">Bermuda</option>
<option data-name="Bhutan" value="23424770">Bhutan</option>
<option data-name="Bolivia" value="23424762">Bolivia</option>
<option data-name="Bosnia and Herzegovina" value="23424761">Bosnia and Herzegovina</option>
<option data-name="Botswana" value="23424755">Botswana</option>
<option data-name="Bouvet Island" value="28289410">Bouvet Island</option>
<option data-name="Brazil" value="23424768">Brazil</option>
<option data-name="British Indian Ocean Territory" value="23424849">British Indian Ocean Territory</option>
<option data-name="British Virgin Islands" value="23424983">British Virgin Islands</option>
<option data-name="Brunei" value="23424773">Brunei</option>
<option data-name="Bulgaria" value="23424771">Bulgaria</option>
<option data-name="Burkina Faso" value="23424978">Burkina Faso</option>
<option data-name="Burundi" value="23424774">Burundi</option>
<option data-name="Cambodia" value="23424776">Cambodia</option>
<option data-name="Cameroon" value="23424785">Cameroon</option>
<option data-name="Canada" value="23424775">Canada</option>
<option data-name="Cape Verde" value="23424794">Cape Verde</option>
<option data-name="Caribbean Netherlands" value="56558056">Caribbean Netherlands</option>
<option data-name="Cayman Islands" value="23424783">Cayman Islands</option>
<option data-name="Central African Republic" value="23424792">Central African Republic</option>
<option data-name="Chad" value="23424777">Chad</option>
<option data-name="Chile" value="23424782">Chile</option>
<option data-name="China" value="23424781">China</option>
<option data-name="Christmas Island" value="23424869">Christmas Island</option>
<option data-name="Cocos (Keeling) Islands" value="23424784">Cocos (Keeling) Islands</option>
<option data-name="Colombia" value="23424787">Colombia</option>
<option data-name="Comoros" value="23424786">Comoros</option>
<option data-name="Congo" value="23424779">Congo</option>
<option data-name="Cook Islands" value="23424795">Cook Islands</option>
<option data-name="Costa Rica" value="23424791">Costa Rica</option>
<option data-name="Croatia" value="23424843">Croatia</option>
<option data-name="Curaçao" value="56558057">Curaçao</option>
<option data-name="Cyprus" value="26812346">Cyprus</option>
<option data-name="Czech Republic" value="23424810">Czech Republic</option>
<option data-name="Democratic Republic of Congo" value="23424780">Democratic Republic of Congo</option>
<option data-name="Denmark" value="23424796">Denmark</option>
<option data-name="Disputed Territory" value="23424928">Disputed Territory</option>
<option data-name="Djibouti" value="23424797">Djibouti</option>
<option data-name="Dominica" value="23424798">Dominica</option>
<option data-name="Dominican Republic" value="23424800">Dominican Republic</option>
<option data-name="East Timor" value="23424968">East Timor</option>
<option data-name="Ecuador" value="23424801">Ecuador</option>
<option data-name="Egypt" value="23424802">Egypt</option>
<option data-name="El Salvador" value="23424807">El Salvador</option>
<option data-name="Equatorial Guinea" value="23424804">Equatorial Guinea</option>
<option data-name="Eritrea" value="23424806">Eritrea</option>
<option data-name="Estonia" value="23424805">Estonia</option>
<option data-name="Ethiopia" value="23424808">Ethiopia</option>
<option data-name="Falkland Islands" value="23424814">Falkland Islands</option>
<option data-name="Faroe Islands" value="23424816">Faroe Islands</option>
<option data-name="Federated States of Micronesia" value="23424815">Federated States of Micronesia</option>
<option data-name="Fiji" value="23424813">Fiji</option>
<option data-name="Finland" value="23424812">Finland</option>
<option data-name="France" value="23424819">France</option>
<option data-name="French Guiana" value="23424811">French Guiana</option>
<option data-name="French Polynesia" value="23424817">French Polynesia</option>
<option data-name="French Southern Territories" value="28289406">French Southern Territories</option>
<option data-name="Gabon" value="23424822">Gabon</option>
<option data-name="Gambia" value="23424821">Gambia</option>
<option data-name="Georgia" value="23424823">Georgia</option>
<option data-name="Germany" value="23424829">Germany</option>
<option data-name="Ghana" value="23424824">Ghana</option>
<option data-name="Gibraltar" value="23424825">Gibraltar</option>
<option data-name="Greece" value="23424833">Greece</option>
<option data-name="Greenland" value="23424828">Greenland</option>
<option data-name="Grenada" value="23424826">Grenada</option>
<option data-name="Guadeloupe" value="23424831">Guadeloupe</option>
<option data-name="Guam" value="23424832">Guam</option>
<option data-name="Guatemala" value="23424834">Guatemala</option>
<option data-name="Guinea" value="23424835">Guinea</option>
<option data-name="Guinea-Bissau" value="23424929">Guinea-Bissau</option>
<option data-name="Guyana" value="23424836">Guyana</option>
<option data-name="Haiti" value="23424839">Haiti</option>
<option data-name="Heard Island and McDonald Islands" value="28289411">Heard Island and McDonald Islands</option>
<option data-name="Holy See (Vatican City State)" value="23424986">Holy See (Vatican City State)</option>
<option data-name="Honduras" value="23424841">Honduras</option>
<option data-name="Hong Kong" value="24865698">Hong Kong</option>
<option data-name="Hungary" value="23424844">Hungary</option>
<option data-name="Iceland" value="23424845">Iceland</option>
<option data-name="India" value="23424848">India</option>
<option data-name="Indonesia" value="23424846">Indonesia</option>
<option data-name="Iraq" value="23424855">Iraq</option>
<option data-name="Iraq-Saudi Arabia Neutral Zone" value="23424998">Iraq-Saudi Arabia Neutral Zone</option>
<option data-name="Ireland" value="23424803">Ireland</option>
<option data-name="Israel" value="23424852">Israel</option>
<option data-name="Italy" value="23424853">Italy</option>
<option data-name="Ivory Coast" value="23424854">Ivory Coast</option>
<option data-name="Jamaica" value="23424858">Jamaica</option>
<option data-name="Japan" value="23424856">Japan</option>
<option data-name="Jordan" value="23424860">Jordan</option>
<option data-name="Kazakhstan" value="23424871">Kazakhstan</option>
<option data-name="Kenya" value="23424863">Kenya</option>
<option data-name="Kiribati" value="23424867">Kiribati</option>
<option data-name="Kosovo" value="29389201">Kosovo</option>
<option data-name="Kuwait" value="23424870">Kuwait</option>
<option data-name="Kyrgyzstan" value="23424864">Kyrgyzstan</option>
<option data-name="Laos" value="23424872">Laos</option>
<option data-name="Latvia" value="23424874">Latvia</option>
<option data-name="Lebanon" value="23424873">Lebanon</option>
<option data-name="Lesotho" value="23424880">Lesotho</option>
<option data-name="Liberia" value="23424876">Liberia</option>
<option data-name="Libya" value="23424882">Libya</option>
<option data-name="Liechtenstein" value="23424879">Liechtenstein</option>
<option data-name="Lithuania" value="23424875">Lithuania</option>
<option data-name="Luxembourg" value="23424881">Luxembourg</option>
<option data-name="Macao" value="20070017">Macao</option>
<option data-name="Macedonia" value="23424890">Macedonia</option>
<option data-name="Madagascar" value="23424883">Madagascar</option>
<option data-name="Malawi" value="23424889">Malawi</option>
<option data-name="Malaysia" value="23424901">Malaysia</option>
<option data-name="Maldives" value="23424899">Maldives</option>
<option data-name="Mali" value="23424891">Mali</option>
<option data-name="Malta" value="23424897">Malta</option>
<option data-name="Marshall Islands" value="23424932">Marshall Islands</option>
<option data-name="Martinique" value="23424884">Martinique</option>
<option data-name="Mauritania" value="23424896">Mauritania</option>
<option data-name="Mauritius" value="23424894">Mauritius</option>
<option data-name="Mayotte" value="23424886">Mayotte</option>
<option data-name="Mexico" value="23424900">Mexico</option>
<option data-name="Moldova" value="23424885">Moldova</option>
<option data-name="Monaco" value="23424892">Monaco</option>
<option data-name="Mongolia" value="23424887">Mongolia</option>
<option data-name="Montenegro" value="20069817">Montenegro</option>
<option data-name="Montserrat" value="23424888">Montserrat</option>
<option data-name="Morocco" value="23424893">Morocco</option>
<option data-name="Mozambique" value="23424902">Mozambique</option>
<option data-name="Myanmar" value="23424763">Myanmar</option>
<option data-name="Namibia" value="23424987">Namibia</option>
<option data-name="Nauru" value="23424912">Nauru</option>
<option data-name="Nepal" value="23424911">Nepal</option>
<option data-name="Netherlands" value="23424909">Netherlands</option>
<option data-name="New Caledonia" value="23424903">New Caledonia</option>
<option data-name="New Zealand" value="23424916">New Zealand</option>
<option data-name="Nicaragua" value="23424915">Nicaragua</option>
<option data-name="Niger" value="23424906">Niger</option>
<option data-name="Nigeria" value="23424908">Nigeria</option>
<option data-name="Niue" value="23424904">Niue</option>
<option data-name="Norfolk Island" value="23424905">Norfolk Island</option>
<option data-name="Northern Mariana Islands" value="23424788">Northern Mariana Islands</option>
<option data-name="Norway" value="23424910">Norway</option>
<option data-name="Oman" value="23424898">Oman</option>
<option data-name="Pakistan" value="23424922">Pakistan</option>
<option data-name="Palau" value="23424927">Palau</option>
<option data-name="Palestine" value="28289408">Palestine</option>
<option data-name="Panama" value="23424924">Panama</option>
<option data-name="Papua New Guinea" value="23424926">Papua New Guinea</option>
<option data-name="Paraguay" value="23424917">Paraguay</option>
<option data-name="Peru" value="23424919">Peru</option>
<option data-name="Philippines" value="23424934">Philippines</option>
<option data-name="Pitcairn Islands" value="23424918">Pitcairn Islands</option>
<option data-name="Poland" value="23424923">Poland</option>
<option data-name="Portugal" value="23424925">Portugal</option>
<option data-name="Puerto Rico" value="23424935">Puerto Rico</option>
<option data-name="Qatar" value="23424930">Qatar</option>
<option data-name="Romania" value="23424933">Romania</option>
<option data-name="Russia" value="23424936">Russia</option>
<option data-name="Rwanda" value="23424937">Rwanda</option>
<option data-name="Réunion" value="23424931">Réunion</option>
<option data-name="Saint Barthélemy" value="56042304">Saint Barthélemy</option>
<option data-name="Saint Helena, Ascension and Tristan da Cunha" value="23424944">Saint Helena, Ascension and Tristan da Cunha</option>
<option data-name="Saint Kitts and Nevis" value="23424940">Saint Kitts and Nevis</option>
<option data-name="Saint Lucia" value="23424951">Saint Lucia</option>
<option data-name="Saint Martin (French part)" value="56042305">Saint Martin (French part)</option>
<option data-name="Saint Pierre and Miquelon" value="23424939">Saint Pierre and Miquelon</option>
<option data-name="Saint Vincent and the Grenadines" value="23424981">Saint Vincent and the Grenadines</option>
<option data-name="Samoa" value="23424992">Samoa</option>
<option data-name="San Marino" value="23424947">San Marino</option>
<option data-name="Sao Tome and Principe" value="23424966">Sao Tome and Principe</option>
<option data-name="Saudi Arabia" value="23424938">Saudi Arabia</option>
<option data-name="Senegal" value="23424943">Senegal</option>
<option data-name="Serbia" value="20069818">Serbia</option>
<option data-name="Seychelles" value="23424941">Seychelles</option>
<option data-name="Sierra Leone" value="23424946">Sierra Leone</option>
<option data-name="Singapore" value="23424948">Singapore</option>
<option data-name="Sint Maarten (Dutch part)" value="56558058">Sint Maarten (Dutch part)</option>
<option data-name="Slovakia" value="23424877">Slovakia</option>
<option data-name="Slovenia" value="23424945">Slovenia</option>
<option data-name="Solomon Islands" value="23424766">Solomon Islands</option>
<option data-name="Somalia" value="23424949">Somalia</option>
<option data-name="South Africa" value="23424942">South Africa</option>
<option data-name="South Georgia and the South Sandwich Islands" value="23424955">South Georgia and the South Sandwich Islands</option>
<option data-name="South Korea" value="23424868">South Korea</option>
<option data-name="Spain" value="23424950">Spain</option>
<option data-name="Spratly Islands" value="23424921">Spratly Islands</option>
<option data-name="Sri Lanka" value="23424778">Sri Lanka</option>
<option data-name="Sudan" value="23424952">Sudan</option>
<option data-name="Suriname" value="23424913">Suriname</option>
<option data-name="Svalbard and Jan Mayen" value="28289413">Svalbard and Jan Mayen</option>
<option data-name="Swaziland" value="23424993">Swaziland</option>
<option data-name="Sweden" value="23424954">Sweden</option>
<option data-name="Switzerland" value="23424957">Switzerland</option>
<option data-name="Taiwan" value="23424971">Taiwan</option>
<option data-name="Tajikistan" value="23424961">Tajikistan</option>
<option data-name="Tanzania, United Republic of" value="23424973">Tanzania, United Republic of</option>
<option data-name="Thailand" value="23424960">Thailand</option>
<option data-name="The Bahamas" value="23424758">The Bahamas</option>
<option data-name="Togo" value="23424965">Togo</option>
<option data-name="Tokelau" value="23424963">Tokelau</option>
<option data-name="Tonga" value="23424964">Tonga</option>
<option data-name="Trinidad and Tobago" value="23424958">Trinidad and Tobago</option>
<option data-name="Tunisia" value="23424967">Tunisia</option>
<option data-name="Turkey" value="23424969">Turkey</option>
<option data-name="Turkmenistan" value="23424972">Turkmenistan</option>
<option data-name="Turks and Caicos Islands" value="23424962">Turks and Caicos Islands</option>
<option data-name="Tuvalu" value="23424970">Tuvalu</option>
<option data-name="Uganda" value="23424974">Uganda</option>
<option data-name="Ukraine" value="23424976">Ukraine</option>
<option data-name="United Arab Emirates" value="23424738">United Arab Emirates</option>
<option data-name="United Kingdom" value="23424975">United Kingdom</option>
<option data-name="United Nations Neutral Zone" value="23424997">United Nations Neutral Zone</option>
<option data-name="United States" value="23424977">United States</option>
<option data-name="United States Minor Outlying Islands" value="28289407">United States Minor Outlying Islands</option>
<option data-name="Uruguay" value="23424979">Uruguay</option>
<option data-name="Uzbekistan" value="23424980">Uzbekistan</option>
<option data-name="Vanuatu" value="23424907">Vanuatu</option>
<option data-name="Venezuela" value="23424982">Venezuela</option>
<option data-name="Vietnam" value="23424984">Vietnam</option>
<option data-name="Virgin Islands, U.S." value="23424985">Virgin Islands, U.S.</option>
<option data-name="Wallis and Futuna" value="23424989">Wallis and Futuna</option>
<option data-name="Western Sahara" value="23424990">Western Sahara</option>
<option data-name="Yemen" value="23425002">Yemen</option>
<option data-name="Zambia" value="23425003">Zambia</option>
<option data-name="Zimbabwe" value="23425004">Zimbabwe</option></select>

<svg class="svg-icon__delta-down icon-14" aria-hidden="true"><use xlink:href="#delta-down"></use></svg>
</div>
</div>
<div class="form-group">
<label>Pledge amount</label>
<div id="multiple-reward-pledge-amount-2538326">
<div class="new-form__amount new-form__amount--symbol"><input class="new-form__input--numbers form-control js-form-input text" value="30" type="text" name="backing[amount]" id="backing_amount" /><div class="new-form__currency-box"><span class="new-form__currency-box__text">$</span></div></div>
</div>
<input name="backing[backer_reward_id]" type="hidden" value="2538326">
<input name="clicked_reward" type="hidden" value="true">
</div>
<div class="pledge__continue js-continue">
<button class="bttn bttn-primary theme--create bttn-medium w100p pledge__button">
<span class="btn-text">
Continue
</span>
</button>
</div>
<div class="pledge__applepay js-applepay">
<button class="btn btn--applepay btn--block js-applepay-button" role="button" tabindex="1">
<span class="btn-text"></span>
<div class="loader-dots">
<svg version="1.1" viewBox="0 0 56 16" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
<g>
<circle class="loader-dot-1" cx="8" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-2" cx="28" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.33s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-3" cx="48" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.66s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
</g>
</svg>
</div>

</button>
<button class="btn btn--another-payment-method btn--like-text btn--block mt1" role="button" tabindex="2">
<span class="btn-text">
Other payment options
<svg class="svg-icon__arrow-right" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
</span>
</button>
<p class="f6 center p0 m0">
By pledging you agree to Kickstarter\'s <a class="popup" target="_blank" href="/terms-of-use">Terms of Use</a>, <a class="popup" target="_blank" href="/privacy">Privacy Policy</a>, and <a class="popup" target="_blank" href="/cookies">Cookie Policy</a>.

</p>
</div>
</div>
<div class="pledge__accountability js-pledge__accountability">
<h6 class="f6">
Kickstarter is not a store.
</h6>
<p class="f6 normal">
It\'s a way to bring creative projects to life.
</p>
<a class="f6 normal mb0" href="/trust?ref=project_reward">Learn more about accountability.</a>
</div>
</form>



</li>
<li class="hover-group pledge--inactive pledge-selectable-sidebar" data-reward-id="2535707">
<div class="pledge__hover hover-zoomout">
<div class="pledge__hover-content">
<p>Select this reward</p>
</div>
</div>
<div class="pledge__info">
<h2 class="pledge__amount">
Pledge <span class="money">US$ 35</span> or more
<span class="pledge__currency-conversion">
About <span>US$ 35</span>
</span>
</h2>
<div class="pledge__reward-description pledge__reward-description--expanded">
<p>GOOD SEED T-SHIRT
<br />A men&#39;s or women&#39;s t-shirt, Good Seed stickers and buttons.  We will be in touch for size and color options.</p>

<a class="pledge__reward-description-toggle js-desc-toggle hide" href="#" role="button">
<span>Less</span>
</a>
</div>
<div class="pledge__extra-info">
<div class="pledge__detail">
<span class="pledge__detail-label">Estimated delivery</span>
<span class="pledge__detail-info"><time datetime="2014-09-01" data-format="MMM YYYY" class="invisible-if-js js-adjust-time">Sep 2014</time></span>
</div>
<div class="pledge__detail">
<span class="pledge__detail-label">Ships to</span>
<span class="pledge__detail-info">Only United States</span>
</div>
</div>
<div class="pledge__backer-stats">
<div class="flex flex-wrap">
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-support-100">
3 backers
</div>

</div>
</div>
</div>

</div>

<form class="NS_pledges__shipping_select js-form-wrapper new-form new-form--block pledge__checkout pledge__checkout--with-shipping" action="/projects/1452363698/good-seed-craft-veggie-burgers/pledge" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="pledge__checkout-form">
<div class="form-group" id="shipping-select-4441911">
<label for="backing_location_id">Shipping destination</label>
<div class="ksr-select js-ksr-select" role="button" tabindex="-1">
<div class="title"></div>
<select name="backing[location_id]" id="backing_location_id" class="select"><option value="">Select a country:</option><option data-name="Afghanistan" value="23424739">Afghanistan</option>
<option data-name="Aland Islands" value="12577865">Aland Islands</option>
<option data-name="Albania" value="23424742">Albania</option>
<option data-name="Algeria" value="23424740">Algeria</option>
<option data-name="American Samoa" value="23424746">American Samoa</option>
<option data-name="Andorra" value="23424744">Andorra</option>
<option data-name="Angola" value="23424745">Angola</option>
<option data-name="Anguilla" value="23424751">Anguilla</option>
<option data-name="Antarctica" value="28289409">Antarctica</option>
<option data-name="Antigua and Barbuda" value="23424737">Antigua and Barbuda</option>
<option data-name="Argentina" value="23424747">Argentina</option>
<option data-name="Armenia" value="23424743">Armenia</option>
<option data-name="Aruba" value="23424736">Aruba</option>
<option data-name="Australia" value="23424748">Australia</option>
<option data-name="Austria" value="23424750">Austria</option>
<option data-name="Azerbaijan" value="23424741">Azerbaijan</option>
<option data-name="Bahrain" value="23424753">Bahrain</option>
<option data-name="Bangladesh" value="23424759">Bangladesh</option>
<option data-name="Barbados" value="23424754">Barbados</option>
<option data-name="Belarus" value="23424765">Belarus</option>
<option data-name="Belgium" value="23424757">Belgium</option>
<option data-name="Belize" value="23424760">Belize</option>
<option data-name="Benin" value="23424764">Benin</option>
<option data-name="Bermuda" value="23424756">Bermuda</option>
<option data-name="Bhutan" value="23424770">Bhutan</option>
<option data-name="Bolivia" value="23424762">Bolivia</option>
<option data-name="Bosnia and Herzegovina" value="23424761">Bosnia and Herzegovina</option>
<option data-name="Botswana" value="23424755">Botswana</option>
<option data-name="Bouvet Island" value="28289410">Bouvet Island</option>
<option data-name="Brazil" value="23424768">Brazil</option>
<option data-name="British Indian Ocean Territory" value="23424849">British Indian Ocean Territory</option>
<option data-name="British Virgin Islands" value="23424983">British Virgin Islands</option>
<option data-name="Brunei" value="23424773">Brunei</option>
<option data-name="Bulgaria" value="23424771">Bulgaria</option>
<option data-name="Burkina Faso" value="23424978">Burkina Faso</option>
<option data-name="Burundi" value="23424774">Burundi</option>
<option data-name="Cambodia" value="23424776">Cambodia</option>
<option data-name="Cameroon" value="23424785">Cameroon</option>
<option data-name="Canada" value="23424775">Canada</option>
<option data-name="Cape Verde" value="23424794">Cape Verde</option>
<option data-name="Caribbean Netherlands" value="56558056">Caribbean Netherlands</option>
<option data-name="Cayman Islands" value="23424783">Cayman Islands</option>
<option data-name="Central African Republic" value="23424792">Central African Republic</option>
<option data-name="Chad" value="23424777">Chad</option>
<option data-name="Chile" value="23424782">Chile</option>
<option data-name="China" value="23424781">China</option>
<option data-name="Christmas Island" value="23424869">Christmas Island</option>
<option data-name="Cocos (Keeling) Islands" value="23424784">Cocos (Keeling) Islands</option>
<option data-name="Colombia" value="23424787">Colombia</option>
<option data-name="Comoros" value="23424786">Comoros</option>
<option data-name="Congo" value="23424779">Congo</option>
<option data-name="Cook Islands" value="23424795">Cook Islands</option>
<option data-name="Costa Rica" value="23424791">Costa Rica</option>
<option data-name="Croatia" value="23424843">Croatia</option>
<option data-name="Curaçao" value="56558057">Curaçao</option>
<option data-name="Cyprus" value="26812346">Cyprus</option>
<option data-name="Czech Republic" value="23424810">Czech Republic</option>
<option data-name="Democratic Republic of Congo" value="23424780">Democratic Republic of Congo</option>
<option data-name="Denmark" value="23424796">Denmark</option>
<option data-name="Disputed Territory" value="23424928">Disputed Territory</option>
<option data-name="Djibouti" value="23424797">Djibouti</option>
<option data-name="Dominica" value="23424798">Dominica</option>
<option data-name="Dominican Republic" value="23424800">Dominican Republic</option>
<option data-name="East Timor" value="23424968">East Timor</option>
<option data-name="Ecuador" value="23424801">Ecuador</option>
<option data-name="Egypt" value="23424802">Egypt</option>
<option data-name="El Salvador" value="23424807">El Salvador</option>
<option data-name="Equatorial Guinea" value="23424804">Equatorial Guinea</option>
<option data-name="Eritrea" value="23424806">Eritrea</option>
<option data-name="Estonia" value="23424805">Estonia</option>
<option data-name="Ethiopia" value="23424808">Ethiopia</option>
<option data-name="Falkland Islands" value="23424814">Falkland Islands</option>
<option data-name="Faroe Islands" value="23424816">Faroe Islands</option>
<option data-name="Federated States of Micronesia" value="23424815">Federated States of Micronesia</option>
<option data-name="Fiji" value="23424813">Fiji</option>
<option data-name="Finland" value="23424812">Finland</option>
<option data-name="France" value="23424819">France</option>
<option data-name="French Guiana" value="23424811">French Guiana</option>
<option data-name="French Polynesia" value="23424817">French Polynesia</option>
<option data-name="French Southern Territories" value="28289406">French Southern Territories</option>
<option data-name="Gabon" value="23424822">Gabon</option>
<option data-name="Gambia" value="23424821">Gambia</option>
<option data-name="Georgia" value="23424823">Georgia</option>
<option data-name="Germany" value="23424829">Germany</option>
<option data-name="Ghana" value="23424824">Ghana</option>
<option data-name="Gibraltar" value="23424825">Gibraltar</option>
<option data-name="Greece" value="23424833">Greece</option>
<option data-name="Greenland" value="23424828">Greenland</option>
<option data-name="Grenada" value="23424826">Grenada</option>
<option data-name="Guadeloupe" value="23424831">Guadeloupe</option>
<option data-name="Guam" value="23424832">Guam</option>
<option data-name="Guatemala" value="23424834">Guatemala</option>
<option data-name="Guinea" value="23424835">Guinea</option>
<option data-name="Guinea-Bissau" value="23424929">Guinea-Bissau</option>
<option data-name="Guyana" value="23424836">Guyana</option>
<option data-name="Haiti" value="23424839">Haiti</option>
<option data-name="Heard Island and McDonald Islands" value="28289411">Heard Island and McDonald Islands</option>
<option data-name="Holy See (Vatican City State)" value="23424986">Holy See (Vatican City State)</option>
<option data-name="Honduras" value="23424841">Honduras</option>
<option data-name="Hong Kong" value="24865698">Hong Kong</option>
<option data-name="Hungary" value="23424844">Hungary</option>
<option data-name="Iceland" value="23424845">Iceland</option>
<option data-name="India" value="23424848">India</option>
<option data-name="Indonesia" value="23424846">Indonesia</option>
<option data-name="Iraq" value="23424855">Iraq</option>
<option data-name="Iraq-Saudi Arabia Neutral Zone" value="23424998">Iraq-Saudi Arabia Neutral Zone</option>
<option data-name="Ireland" value="23424803">Ireland</option>
<option data-name="Israel" value="23424852">Israel</option>
<option data-name="Italy" value="23424853">Italy</option>
<option data-name="Ivory Coast" value="23424854">Ivory Coast</option>
<option data-name="Jamaica" value="23424858">Jamaica</option>
<option data-name="Japan" value="23424856">Japan</option>
<option data-name="Jordan" value="23424860">Jordan</option>
<option data-name="Kazakhstan" value="23424871">Kazakhstan</option>
<option data-name="Kenya" value="23424863">Kenya</option>
<option data-name="Kiribati" value="23424867">Kiribati</option>
<option data-name="Kosovo" value="29389201">Kosovo</option>
<option data-name="Kuwait" value="23424870">Kuwait</option>
<option data-name="Kyrgyzstan" value="23424864">Kyrgyzstan</option>
<option data-name="Laos" value="23424872">Laos</option>
<option data-name="Latvia" value="23424874">Latvia</option>
<option data-name="Lebanon" value="23424873">Lebanon</option>
<option data-name="Lesotho" value="23424880">Lesotho</option>
<option data-name="Liberia" value="23424876">Liberia</option>
<option data-name="Libya" value="23424882">Libya</option>
<option data-name="Liechtenstein" value="23424879">Liechtenstein</option>
<option data-name="Lithuania" value="23424875">Lithuania</option>
<option data-name="Luxembourg" value="23424881">Luxembourg</option>
<option data-name="Macao" value="20070017">Macao</option>
<option data-name="Macedonia" value="23424890">Macedonia</option>
<option data-name="Madagascar" value="23424883">Madagascar</option>
<option data-name="Malawi" value="23424889">Malawi</option>
<option data-name="Malaysia" value="23424901">Malaysia</option>
<option data-name="Maldives" value="23424899">Maldives</option>
<option data-name="Mali" value="23424891">Mali</option>
<option data-name="Malta" value="23424897">Malta</option>
<option data-name="Marshall Islands" value="23424932">Marshall Islands</option>
<option data-name="Martinique" value="23424884">Martinique</option>
<option data-name="Mauritania" value="23424896">Mauritania</option>
<option data-name="Mauritius" value="23424894">Mauritius</option>
<option data-name="Mayotte" value="23424886">Mayotte</option>
<option data-name="Mexico" value="23424900">Mexico</option>
<option data-name="Moldova" value="23424885">Moldova</option>
<option data-name="Monaco" value="23424892">Monaco</option>
<option data-name="Mongolia" value="23424887">Mongolia</option>
<option data-name="Montenegro" value="20069817">Montenegro</option>
<option data-name="Montserrat" value="23424888">Montserrat</option>
<option data-name="Morocco" value="23424893">Morocco</option>
<option data-name="Mozambique" value="23424902">Mozambique</option>
<option data-name="Myanmar" value="23424763">Myanmar</option>
<option data-name="Namibia" value="23424987">Namibia</option>
<option data-name="Nauru" value="23424912">Nauru</option>
<option data-name="Nepal" value="23424911">Nepal</option>
<option data-name="Netherlands" value="23424909">Netherlands</option>
<option data-name="New Caledonia" value="23424903">New Caledonia</option>
<option data-name="New Zealand" value="23424916">New Zealand</option>
<option data-name="Nicaragua" value="23424915">Nicaragua</option>
<option data-name="Niger" value="23424906">Niger</option>
<option data-name="Nigeria" value="23424908">Nigeria</option>
<option data-name="Niue" value="23424904">Niue</option>
<option data-name="Norfolk Island" value="23424905">Norfolk Island</option>
<option data-name="Northern Mariana Islands" value="23424788">Northern Mariana Islands</option>
<option data-name="Norway" value="23424910">Norway</option>
<option data-name="Oman" value="23424898">Oman</option>
<option data-name="Pakistan" value="23424922">Pakistan</option>
<option data-name="Palau" value="23424927">Palau</option>
<option data-name="Palestine" value="28289408">Palestine</option>
<option data-name="Panama" value="23424924">Panama</option>
<option data-name="Papua New Guinea" value="23424926">Papua New Guinea</option>
<option data-name="Paraguay" value="23424917">Paraguay</option>
<option data-name="Peru" value="23424919">Peru</option>
<option data-name="Philippines" value="23424934">Philippines</option>
<option data-name="Pitcairn Islands" value="23424918">Pitcairn Islands</option>
<option data-name="Poland" value="23424923">Poland</option>
<option data-name="Portugal" value="23424925">Portugal</option>
<option data-name="Puerto Rico" value="23424935">Puerto Rico</option>
<option data-name="Qatar" value="23424930">Qatar</option>
<option data-name="Romania" value="23424933">Romania</option>
<option data-name="Russia" value="23424936">Russia</option>
<option data-name="Rwanda" value="23424937">Rwanda</option>
<option data-name="Réunion" value="23424931">Réunion</option>
<option data-name="Saint Barthélemy" value="56042304">Saint Barthélemy</option>
<option data-name="Saint Helena, Ascension and Tristan da Cunha" value="23424944">Saint Helena, Ascension and Tristan da Cunha</option>
<option data-name="Saint Kitts and Nevis" value="23424940">Saint Kitts and Nevis</option>
<option data-name="Saint Lucia" value="23424951">Saint Lucia</option>
<option data-name="Saint Martin (French part)" value="56042305">Saint Martin (French part)</option>
<option data-name="Saint Pierre and Miquelon" value="23424939">Saint Pierre and Miquelon</option>
<option data-name="Saint Vincent and the Grenadines" value="23424981">Saint Vincent and the Grenadines</option>
<option data-name="Samoa" value="23424992">Samoa</option>
<option data-name="San Marino" value="23424947">San Marino</option>
<option data-name="Sao Tome and Principe" value="23424966">Sao Tome and Principe</option>
<option data-name="Saudi Arabia" value="23424938">Saudi Arabia</option>
<option data-name="Senegal" value="23424943">Senegal</option>
<option data-name="Serbia" value="20069818">Serbia</option>
<option data-name="Seychelles" value="23424941">Seychelles</option>
<option data-name="Sierra Leone" value="23424946">Sierra Leone</option>
<option data-name="Singapore" value="23424948">Singapore</option>
<option data-name="Sint Maarten (Dutch part)" value="56558058">Sint Maarten (Dutch part)</option>
<option data-name="Slovakia" value="23424877">Slovakia</option>
<option data-name="Slovenia" value="23424945">Slovenia</option>
<option data-name="Solomon Islands" value="23424766">Solomon Islands</option>
<option data-name="Somalia" value="23424949">Somalia</option>
<option data-name="South Africa" value="23424942">South Africa</option>
<option data-name="South Georgia and the South Sandwich Islands" value="23424955">South Georgia and the South Sandwich Islands</option>
<option data-name="South Korea" value="23424868">South Korea</option>
<option data-name="Spain" value="23424950">Spain</option>
<option data-name="Spratly Islands" value="23424921">Spratly Islands</option>
<option data-name="Sri Lanka" value="23424778">Sri Lanka</option>
<option data-name="Sudan" value="23424952">Sudan</option>
<option data-name="Suriname" value="23424913">Suriname</option>
<option data-name="Svalbard and Jan Mayen" value="28289413">Svalbard and Jan Mayen</option>
<option data-name="Swaziland" value="23424993">Swaziland</option>
<option data-name="Sweden" value="23424954">Sweden</option>
<option data-name="Switzerland" value="23424957">Switzerland</option>
<option data-name="Taiwan" value="23424971">Taiwan</option>
<option data-name="Tajikistan" value="23424961">Tajikistan</option>
<option data-name="Tanzania, United Republic of" value="23424973">Tanzania, United Republic of</option>
<option data-name="Thailand" value="23424960">Thailand</option>
<option data-name="The Bahamas" value="23424758">The Bahamas</option>
<option data-name="Togo" value="23424965">Togo</option>
<option data-name="Tokelau" value="23424963">Tokelau</option>
<option data-name="Tonga" value="23424964">Tonga</option>
<option data-name="Trinidad and Tobago" value="23424958">Trinidad and Tobago</option>
<option data-name="Tunisia" value="23424967">Tunisia</option>
<option data-name="Turkey" value="23424969">Turkey</option>
<option data-name="Turkmenistan" value="23424972">Turkmenistan</option>
<option data-name="Turks and Caicos Islands" value="23424962">Turks and Caicos Islands</option>
<option data-name="Tuvalu" value="23424970">Tuvalu</option>
<option data-name="Uganda" value="23424974">Uganda</option>
<option data-name="Ukraine" value="23424976">Ukraine</option>
<option data-name="United Arab Emirates" value="23424738">United Arab Emirates</option>
<option data-name="United Kingdom" value="23424975">United Kingdom</option>
<option data-name="United Nations Neutral Zone" value="23424997">United Nations Neutral Zone</option>
<option data-name="United States" value="23424977">United States</option>
<option data-name="United States Minor Outlying Islands" value="28289407">United States Minor Outlying Islands</option>
<option data-name="Uruguay" value="23424979">Uruguay</option>
<option data-name="Uzbekistan" value="23424980">Uzbekistan</option>
<option data-name="Vanuatu" value="23424907">Vanuatu</option>
<option data-name="Venezuela" value="23424982">Venezuela</option>
<option data-name="Vietnam" value="23424984">Vietnam</option>
<option data-name="Virgin Islands, U.S." value="23424985">Virgin Islands, U.S.</option>
<option data-name="Wallis and Futuna" value="23424989">Wallis and Futuna</option>
<option data-name="Western Sahara" value="23424990">Western Sahara</option>
<option data-name="Yemen" value="23425002">Yemen</option>
<option data-name="Zambia" value="23425003">Zambia</option>
<option data-name="Zimbabwe" value="23425004">Zimbabwe</option></select>

<svg class="svg-icon__delta-down icon-14" aria-hidden="true"><use xlink:href="#delta-down"></use></svg>
</div>
</div>
<div class="form-group">
<label>Pledge amount</label>
<div id="multiple-reward-pledge-amount-2535707">
<div class="new-form__amount new-form__amount--symbol"><input class="new-form__input--numbers form-control js-form-input text" value="35" type="text" name="backing[amount]" id="backing_amount" /><div class="new-form__currency-box"><span class="new-form__currency-box__text">$</span></div></div>
</div>
<input name="backing[backer_reward_id]" type="hidden" value="2535707">
<input name="clicked_reward" type="hidden" value="true">
</div>
<div class="pledge__continue js-continue">
<button class="bttn bttn-primary theme--create bttn-medium w100p pledge__button">
<span class="btn-text">
Continue
</span>
</button>
</div>
<div class="pledge__applepay js-applepay">
<button class="btn btn--applepay btn--block js-applepay-button" role="button" tabindex="1">
<span class="btn-text"></span>
<div class="loader-dots">
<svg version="1.1" viewBox="0 0 56 16" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
<g>
<circle class="loader-dot-1" cx="8" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-2" cx="28" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.33s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-3" cx="48" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.66s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
</g>
</svg>
</div>

</button>
<button class="btn btn--another-payment-method btn--like-text btn--block mt1" role="button" tabindex="2">
<span class="btn-text">
Other payment options
<svg class="svg-icon__arrow-right" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
</span>
</button>
<p class="f6 center p0 m0">
By pledging you agree to Kickstarter\'s <a class="popup" target="_blank" href="/terms-of-use">Terms of Use</a>, <a class="popup" target="_blank" href="/privacy">Privacy Policy</a>, and <a class="popup" target="_blank" href="/cookies">Cookie Policy</a>.

</p>
</div>
</div>
<div class="pledge__accountability js-pledge__accountability">
<h6 class="f6">
Kickstarter is not a store.
</h6>
<p class="f6 normal">
It\'s a way to bring creative projects to life.
</p>
<a class="f6 normal mb0" href="/trust?ref=project_reward">Learn more about accountability.</a>
</div>
</form>



</li>
<li class="hover-group pledge--inactive pledge-selectable-sidebar" data-reward-id="2538334">
<div class="pledge__hover hover-zoomout">
<div class="pledge__hover-content">
<p>Select this reward</p>
</div>
</div>
<div class="pledge__info">
<h2 class="pledge__amount">
Pledge <span class="money">US$ 55</span> or more
<span class="pledge__currency-conversion">
About <span>US$ 55</span>
</span>
</h2>
<div class="pledge__reward-description pledge__reward-description--expanded">
<p>GOOD WATER + GOOD FOOD PACK
<br />You get a stainless steel Kleen Kanteen branded Good Seed water bottle, 1 pack of local Zap! Ayurverdic herbal drink packets and 2 boxes of Good Seed burgers.  Please add the proper shipping cost when completing your pledge.  Local Austin residents can pick up on one of our pick up dates.  We will be in touch about pick up dates.  We know shipping is high, but our product is frozen so they must be sent by 2 day air.  Residents of AZ, UT, WY, MT, ND, SD, MN, IA, WI, MI, IN, OH, KY, WV, VA, NC, SC, GA, FL, CO,IL add $36 for shipping.  Residents of WA, OR, NV, CA, NY, CT, RI, MA, ME, VT, HI, AL  add $48.  All other states add $13.</p>

<a class="pledge__reward-description-toggle js-desc-toggle hide" href="#" role="button">
<span>Less</span>
</a>
</div>
<div class="pledge__extra-info">
<div class="pledge__detail">
<span class="pledge__detail-label">Estimated delivery</span>
<span class="pledge__detail-info"><time datetime="2014-08-01" data-format="MMM YYYY" class="invisible-if-js js-adjust-time">Aug 2014</time></span>
</div>
<div class="pledge__detail">
<span class="pledge__detail-label">Ships to</span>
<span class="pledge__detail-info">Only United States</span>
</div>
</div>
<div class="pledge__backer-stats">
<div class="flex flex-wrap">
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-support-100">
4 backers
</div>

</div>
</div>
</div>

</div>

<form class="NS_pledges__shipping_select js-form-wrapper new-form new-form--block pledge__checkout pledge__checkout--with-shipping" action="/projects/1452363698/good-seed-craft-veggie-burgers/pledge" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="pledge__checkout-form">
<div class="form-group" id="shipping-select-4441911">
<label for="backing_location_id">Shipping destination</label>
<div class="ksr-select js-ksr-select" role="button" tabindex="-1">
<div class="title"></div>
<select name="backing[location_id]" id="backing_location_id" class="select"><option value="">Select a country:</option><option data-name="Afghanistan" value="23424739">Afghanistan</option>
<option data-name="Aland Islands" value="12577865">Aland Islands</option>
<option data-name="Albania" value="23424742">Albania</option>
<option data-name="Algeria" value="23424740">Algeria</option>
<option data-name="American Samoa" value="23424746">American Samoa</option>
<option data-name="Andorra" value="23424744">Andorra</option>
<option data-name="Angola" value="23424745">Angola</option>
<option data-name="Anguilla" value="23424751">Anguilla</option>
<option data-name="Antarctica" value="28289409">Antarctica</option>
<option data-name="Antigua and Barbuda" value="23424737">Antigua and Barbuda</option>
<option data-name="Argentina" value="23424747">Argentina</option>
<option data-name="Armenia" value="23424743">Armenia</option>
<option data-name="Aruba" value="23424736">Aruba</option>
<option data-name="Australia" value="23424748">Australia</option>
<option data-name="Austria" value="23424750">Austria</option>
<option data-name="Azerbaijan" value="23424741">Azerbaijan</option>
<option data-name="Bahrain" value="23424753">Bahrain</option>
<option data-name="Bangladesh" value="23424759">Bangladesh</option>
<option data-name="Barbados" value="23424754">Barbados</option>
<option data-name="Belarus" value="23424765">Belarus</option>
<option data-name="Belgium" value="23424757">Belgium</option>
<option data-name="Belize" value="23424760">Belize</option>
<option data-name="Benin" value="23424764">Benin</option>
<option data-name="Bermuda" value="23424756">Bermuda</option>
<option data-name="Bhutan" value="23424770">Bhutan</option>
<option data-name="Bolivia" value="23424762">Bolivia</option>
<option data-name="Bosnia and Herzegovina" value="23424761">Bosnia and Herzegovina</option>
<option data-name="Botswana" value="23424755">Botswana</option>
<option data-name="Bouvet Island" value="28289410">Bouvet Island</option>
<option data-name="Brazil" value="23424768">Brazil</option>
<option data-name="British Indian Ocean Territory" value="23424849">British Indian Ocean Territory</option>
<option data-name="British Virgin Islands" value="23424983">British Virgin Islands</option>
<option data-name="Brunei" value="23424773">Brunei</option>
<option data-name="Bulgaria" value="23424771">Bulgaria</option>
<option data-name="Burkina Faso" value="23424978">Burkina Faso</option>
<option data-name="Burundi" value="23424774">Burundi</option>
<option data-name="Cambodia" value="23424776">Cambodia</option>
<option data-name="Cameroon" value="23424785">Cameroon</option>
<option data-name="Canada" value="23424775">Canada</option>
<option data-name="Cape Verde" value="23424794">Cape Verde</option>
<option data-name="Caribbean Netherlands" value="56558056">Caribbean Netherlands</option>
<option data-name="Cayman Islands" value="23424783">Cayman Islands</option>
<option data-name="Central African Republic" value="23424792">Central African Republic</option>
<option data-name="Chad" value="23424777">Chad</option>
<option data-name="Chile" value="23424782">Chile</option>
<option data-name="China" value="23424781">China</option>
<option data-name="Christmas Island" value="23424869">Christmas Island</option>
<option data-name="Cocos (Keeling) Islands" value="23424784">Cocos (Keeling) Islands</option>
<option data-name="Colombia" value="23424787">Colombia</option>
<option data-name="Comoros" value="23424786">Comoros</option>
<option data-name="Congo" value="23424779">Congo</option>
<option data-name="Cook Islands" value="23424795">Cook Islands</option>
<option data-name="Costa Rica" value="23424791">Costa Rica</option>
<option data-name="Croatia" value="23424843">Croatia</option>
<option data-name="Curaçao" value="56558057">Curaçao</option>
<option data-name="Cyprus" value="26812346">Cyprus</option>
<option data-name="Czech Republic" value="23424810">Czech Republic</option>
<option data-name="Democratic Republic of Congo" value="23424780">Democratic Republic of Congo</option>
<option data-name="Denmark" value="23424796">Denmark</option>
<option data-name="Disputed Territory" value="23424928">Disputed Territory</option>
<option data-name="Djibouti" value="23424797">Djibouti</option>
<option data-name="Dominica" value="23424798">Dominica</option>
<option data-name="Dominican Republic" value="23424800">Dominican Republic</option>
<option data-name="East Timor" value="23424968">East Timor</option>
<option data-name="Ecuador" value="23424801">Ecuador</option>
<option data-name="Egypt" value="23424802">Egypt</option>
<option data-name="El Salvador" value="23424807">El Salvador</option>
<option data-name="Equatorial Guinea" value="23424804">Equatorial Guinea</option>
<option data-name="Eritrea" value="23424806">Eritrea</option>
<option data-name="Estonia" value="23424805">Estonia</option>
<option data-name="Ethiopia" value="23424808">Ethiopia</option>
<option data-name="Falkland Islands" value="23424814">Falkland Islands</option>
<option data-name="Faroe Islands" value="23424816">Faroe Islands</option>
<option data-name="Federated States of Micronesia" value="23424815">Federated States of Micronesia</option>
<option data-name="Fiji" value="23424813">Fiji</option>
<option data-name="Finland" value="23424812">Finland</option>
<option data-name="France" value="23424819">France</option>
<option data-name="French Guiana" value="23424811">French Guiana</option>
<option data-name="French Polynesia" value="23424817">French Polynesia</option>
<option data-name="French Southern Territories" value="28289406">French Southern Territories</option>
<option data-name="Gabon" value="23424822">Gabon</option>
<option data-name="Gambia" value="23424821">Gambia</option>
<option data-name="Georgia" value="23424823">Georgia</option>
<option data-name="Germany" value="23424829">Germany</option>
<option data-name="Ghana" value="23424824">Ghana</option>
<option data-name="Gibraltar" value="23424825">Gibraltar</option>
<option data-name="Greece" value="23424833">Greece</option>
<option data-name="Greenland" value="23424828">Greenland</option>
<option data-name="Grenada" value="23424826">Grenada</option>
<option data-name="Guadeloupe" value="23424831">Guadeloupe</option>
<option data-name="Guam" value="23424832">Guam</option>
<option data-name="Guatemala" value="23424834">Guatemala</option>
<option data-name="Guinea" value="23424835">Guinea</option>
<option data-name="Guinea-Bissau" value="23424929">Guinea-Bissau</option>
<option data-name="Guyana" value="23424836">Guyana</option>
<option data-name="Haiti" value="23424839">Haiti</option>
<option data-name="Heard Island and McDonald Islands" value="28289411">Heard Island and McDonald Islands</option>
<option data-name="Holy See (Vatican City State)" value="23424986">Holy See (Vatican City State)</option>
<option data-name="Honduras" value="23424841">Honduras</option>
<option data-name="Hong Kong" value="24865698">Hong Kong</option>
<option data-name="Hungary" value="23424844">Hungary</option>
<option data-name="Iceland" value="23424845">Iceland</option>
<option data-name="India" value="23424848">India</option>
<option data-name="Indonesia" value="23424846">Indonesia</option>
<option data-name="Iraq" value="23424855">Iraq</option>
<option data-name="Iraq-Saudi Arabia Neutral Zone" value="23424998">Iraq-Saudi Arabia Neutral Zone</option>
<option data-name="Ireland" value="23424803">Ireland</option>
<option data-name="Israel" value="23424852">Israel</option>
<option data-name="Italy" value="23424853">Italy</option>
<option data-name="Ivory Coast" value="23424854">Ivory Coast</option>
<option data-name="Jamaica" value="23424858">Jamaica</option>
<option data-name="Japan" value="23424856">Japan</option>
<option data-name="Jordan" value="23424860">Jordan</option>
<option data-name="Kazakhstan" value="23424871">Kazakhstan</option>
<option data-name="Kenya" value="23424863">Kenya</option>
<option data-name="Kiribati" value="23424867">Kiribati</option>
<option data-name="Kosovo" value="29389201">Kosovo</option>
<option data-name="Kuwait" value="23424870">Kuwait</option>
<option data-name="Kyrgyzstan" value="23424864">Kyrgyzstan</option>
<option data-name="Laos" value="23424872">Laos</option>
<option data-name="Latvia" value="23424874">Latvia</option>
<option data-name="Lebanon" value="23424873">Lebanon</option>
<option data-name="Lesotho" value="23424880">Lesotho</option>
<option data-name="Liberia" value="23424876">Liberia</option>
<option data-name="Libya" value="23424882">Libya</option>
<option data-name="Liechtenstein" value="23424879">Liechtenstein</option>
<option data-name="Lithuania" value="23424875">Lithuania</option>
<option data-name="Luxembourg" value="23424881">Luxembourg</option>
<option data-name="Macao" value="20070017">Macao</option>
<option data-name="Macedonia" value="23424890">Macedonia</option>
<option data-name="Madagascar" value="23424883">Madagascar</option>
<option data-name="Malawi" value="23424889">Malawi</option>
<option data-name="Malaysia" value="23424901">Malaysia</option>
<option data-name="Maldives" value="23424899">Maldives</option>
<option data-name="Mali" value="23424891">Mali</option>
<option data-name="Malta" value="23424897">Malta</option>
<option data-name="Marshall Islands" value="23424932">Marshall Islands</option>
<option data-name="Martinique" value="23424884">Martinique</option>
<option data-name="Mauritania" value="23424896">Mauritania</option>
<option data-name="Mauritius" value="23424894">Mauritius</option>
<option data-name="Mayotte" value="23424886">Mayotte</option>
<option data-name="Mexico" value="23424900">Mexico</option>
<option data-name="Moldova" value="23424885">Moldova</option>
<option data-name="Monaco" value="23424892">Monaco</option>
<option data-name="Mongolia" value="23424887">Mongolia</option>
<option data-name="Montenegro" value="20069817">Montenegro</option>
<option data-name="Montserrat" value="23424888">Montserrat</option>
<option data-name="Morocco" value="23424893">Morocco</option>
<option data-name="Mozambique" value="23424902">Mozambique</option>
<option data-name="Myanmar" value="23424763">Myanmar</option>
<option data-name="Namibia" value="23424987">Namibia</option>
<option data-name="Nauru" value="23424912">Nauru</option>
<option data-name="Nepal" value="23424911">Nepal</option>
<option data-name="Netherlands" value="23424909">Netherlands</option>
<option data-name="New Caledonia" value="23424903">New Caledonia</option>
<option data-name="New Zealand" value="23424916">New Zealand</option>
<option data-name="Nicaragua" value="23424915">Nicaragua</option>
<option data-name="Niger" value="23424906">Niger</option>
<option data-name="Nigeria" value="23424908">Nigeria</option>
<option data-name="Niue" value="23424904">Niue</option>
<option data-name="Norfolk Island" value="23424905">Norfolk Island</option>
<option data-name="Northern Mariana Islands" value="23424788">Northern Mariana Islands</option>
<option data-name="Norway" value="23424910">Norway</option>
<option data-name="Oman" value="23424898">Oman</option>
<option data-name="Pakistan" value="23424922">Pakistan</option>
<option data-name="Palau" value="23424927">Palau</option>
<option data-name="Palestine" value="28289408">Palestine</option>
<option data-name="Panama" value="23424924">Panama</option>
<option data-name="Papua New Guinea" value="23424926">Papua New Guinea</option>
<option data-name="Paraguay" value="23424917">Paraguay</option>
<option data-name="Peru" value="23424919">Peru</option>
<option data-name="Philippines" value="23424934">Philippines</option>
<option data-name="Pitcairn Islands" value="23424918">Pitcairn Islands</option>
<option data-name="Poland" value="23424923">Poland</option>
<option data-name="Portugal" value="23424925">Portugal</option>
<option data-name="Puerto Rico" value="23424935">Puerto Rico</option>
<option data-name="Qatar" value="23424930">Qatar</option>
<option data-name="Romania" value="23424933">Romania</option>
<option data-name="Russia" value="23424936">Russia</option>
<option data-name="Rwanda" value="23424937">Rwanda</option>
<option data-name="Réunion" value="23424931">Réunion</option>
<option data-name="Saint Barthélemy" value="56042304">Saint Barthélemy</option>
<option data-name="Saint Helena, Ascension and Tristan da Cunha" value="23424944">Saint Helena, Ascension and Tristan da Cunha</option>
<option data-name="Saint Kitts and Nevis" value="23424940">Saint Kitts and Nevis</option>
<option data-name="Saint Lucia" value="23424951">Saint Lucia</option>
<option data-name="Saint Martin (French part)" value="56042305">Saint Martin (French part)</option>
<option data-name="Saint Pierre and Miquelon" value="23424939">Saint Pierre and Miquelon</option>
<option data-name="Saint Vincent and the Grenadines" value="23424981">Saint Vincent and the Grenadines</option>
<option data-name="Samoa" value="23424992">Samoa</option>
<option data-name="San Marino" value="23424947">San Marino</option>
<option data-name="Sao Tome and Principe" value="23424966">Sao Tome and Principe</option>
<option data-name="Saudi Arabia" value="23424938">Saudi Arabia</option>
<option data-name="Senegal" value="23424943">Senegal</option>
<option data-name="Serbia" value="20069818">Serbia</option>
<option data-name="Seychelles" value="23424941">Seychelles</option>
<option data-name="Sierra Leone" value="23424946">Sierra Leone</option>
<option data-name="Singapore" value="23424948">Singapore</option>
<option data-name="Sint Maarten (Dutch part)" value="56558058">Sint Maarten (Dutch part)</option>
<option data-name="Slovakia" value="23424877">Slovakia</option>
<option data-name="Slovenia" value="23424945">Slovenia</option>
<option data-name="Solomon Islands" value="23424766">Solomon Islands</option>
<option data-name="Somalia" value="23424949">Somalia</option>
<option data-name="South Africa" value="23424942">South Africa</option>
<option data-name="South Georgia and the South Sandwich Islands" value="23424955">South Georgia and the South Sandwich Islands</option>
<option data-name="South Korea" value="23424868">South Korea</option>
<option data-name="Spain" value="23424950">Spain</option>
<option data-name="Spratly Islands" value="23424921">Spratly Islands</option>
<option data-name="Sri Lanka" value="23424778">Sri Lanka</option>
<option data-name="Sudan" value="23424952">Sudan</option>
<option data-name="Suriname" value="23424913">Suriname</option>
<option data-name="Svalbard and Jan Mayen" value="28289413">Svalbard and Jan Mayen</option>
<option data-name="Swaziland" value="23424993">Swaziland</option>
<option data-name="Sweden" value="23424954">Sweden</option>
<option data-name="Switzerland" value="23424957">Switzerland</option>
<option data-name="Taiwan" value="23424971">Taiwan</option>
<option data-name="Tajikistan" value="23424961">Tajikistan</option>
<option data-name="Tanzania, United Republic of" value="23424973">Tanzania, United Republic of</option>
<option data-name="Thailand" value="23424960">Thailand</option>
<option data-name="The Bahamas" value="23424758">The Bahamas</option>
<option data-name="Togo" value="23424965">Togo</option>
<option data-name="Tokelau" value="23424963">Tokelau</option>
<option data-name="Tonga" value="23424964">Tonga</option>
<option data-name="Trinidad and Tobago" value="23424958">Trinidad and Tobago</option>
<option data-name="Tunisia" value="23424967">Tunisia</option>
<option data-name="Turkey" value="23424969">Turkey</option>
<option data-name="Turkmenistan" value="23424972">Turkmenistan</option>
<option data-name="Turks and Caicos Islands" value="23424962">Turks and Caicos Islands</option>
<option data-name="Tuvalu" value="23424970">Tuvalu</option>
<option data-name="Uganda" value="23424974">Uganda</option>
<option data-name="Ukraine" value="23424976">Ukraine</option>
<option data-name="United Arab Emirates" value="23424738">United Arab Emirates</option>
<option data-name="United Kingdom" value="23424975">United Kingdom</option>
<option data-name="United Nations Neutral Zone" value="23424997">United Nations Neutral Zone</option>
<option data-name="United States" value="23424977">United States</option>
<option data-name="United States Minor Outlying Islands" value="28289407">United States Minor Outlying Islands</option>
<option data-name="Uruguay" value="23424979">Uruguay</option>
<option data-name="Uzbekistan" value="23424980">Uzbekistan</option>
<option data-name="Vanuatu" value="23424907">Vanuatu</option>
<option data-name="Venezuela" value="23424982">Venezuela</option>
<option data-name="Vietnam" value="23424984">Vietnam</option>
<option data-name="Virgin Islands, U.S." value="23424985">Virgin Islands, U.S.</option>
<option data-name="Wallis and Futuna" value="23424989">Wallis and Futuna</option>
<option data-name="Western Sahara" value="23424990">Western Sahara</option>
<option data-name="Yemen" value="23425002">Yemen</option>
<option data-name="Zambia" value="23425003">Zambia</option>
<option data-name="Zimbabwe" value="23425004">Zimbabwe</option></select>

<svg class="svg-icon__delta-down icon-14" aria-hidden="true"><use xlink:href="#delta-down"></use></svg>
</div>
</div>
<div class="form-group">
<label>Pledge amount</label>
<div id="multiple-reward-pledge-amount-2538334">
<div class="new-form__amount new-form__amount--symbol"><input class="new-form__input--numbers form-control js-form-input text" value="55" type="text" name="backing[amount]" id="backing_amount" /><div class="new-form__currency-box"><span class="new-form__currency-box__text">$</span></div></div>
</div>
<input name="backing[backer_reward_id]" type="hidden" value="2538334">
<input name="clicked_reward" type="hidden" value="true">
</div>
<div class="pledge__continue js-continue">
<button class="bttn bttn-primary theme--create bttn-medium w100p pledge__button">
<span class="btn-text">
Continue
</span>
</button>
</div>
<div class="pledge__applepay js-applepay">
<button class="btn btn--applepay btn--block js-applepay-button" role="button" tabindex="1">
<span class="btn-text"></span>
<div class="loader-dots">
<svg version="1.1" viewBox="0 0 56 16" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
<g>
<circle class="loader-dot-1" cx="8" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-2" cx="28" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.33s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-3" cx="48" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.66s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
</g>
</svg>
</div>

</button>
<button class="btn btn--another-payment-method btn--like-text btn--block mt1" role="button" tabindex="2">
<span class="btn-text">
Other payment options
<svg class="svg-icon__arrow-right" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
</span>
</button>
<p class="f6 center p0 m0">
By pledging you agree to Kickstarter\'s <a class="popup" target="_blank" href="/terms-of-use">Terms of Use</a>, <a class="popup" target="_blank" href="/privacy">Privacy Policy</a>, and <a class="popup" target="_blank" href="/cookies">Cookie Policy</a>.

</p>
</div>
</div>
<div class="pledge__accountability js-pledge__accountability">
<h6 class="f6">
Kickstarter is not a store.
</h6>
<p class="f6 normal">
It\'s a way to bring creative projects to life.
</p>
<a class="f6 normal mb0" href="/trust?ref=project_reward">Learn more about accountability.</a>
</div>
</form>



</li>
<li class="hover-group pledge--inactive pledge-selectable-sidebar" data-reward-id="2538616">
<div class="pledge__hover hover-zoomout">
<div class="pledge__hover-content">
<p>Select this reward</p>
</div>
</div>
<div class="pledge__info">
<h2 class="pledge__amount">
Pledge <span class="money">US$ 60</span> or more
<span class="pledge__currency-conversion">
About <span>US$ 60</span>
</span>
</h2>
<div class="pledge__reward-description pledge__reward-description--expanded">
<p>GOOD SEED HOODIE				
<br />Sport a Good Seed hoodie with our burger emblem on the front and logo on the back.</p>

<a class="pledge__reward-description-toggle js-desc-toggle hide" href="#" role="button">
<span>Less</span>
</a>
</div>
<div class="pledge__extra-info">
<div class="pledge__detail">
<span class="pledge__detail-label">Estimated delivery</span>
<span class="pledge__detail-info"><time datetime="2014-09-01" data-format="MMM YYYY" class="invisible-if-js js-adjust-time">Sep 2014</time></span>
</div>
<div class="pledge__detail">
<span class="pledge__detail-label">Ships to</span>
<span class="pledge__detail-info">Only United States</span>
</div>
</div>
<div class="pledge__backer-stats">
<div class="flex flex-wrap">
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-support-100">
3 backers
</div>

</div>
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-celebrate-100">
Limited (47 left of 50)
</div>

</div>
</div>
</div>

</div>

<form class="NS_pledges__shipping_select js-form-wrapper new-form new-form--block pledge__checkout pledge__checkout--with-shipping" action="/projects/1452363698/good-seed-craft-veggie-burgers/pledge" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="pledge__checkout-form">
<div class="form-group" id="shipping-select-4441911">
<label for="backing_location_id">Shipping destination</label>
<div class="ksr-select js-ksr-select" role="button" tabindex="-1">
<div class="title"></div>
<select name="backing[location_id]" id="backing_location_id" class="select"><option value="">Select a country:</option><option data-name="Afghanistan" value="23424739">Afghanistan</option>
<option data-name="Aland Islands" value="12577865">Aland Islands</option>
<option data-name="Albania" value="23424742">Albania</option>
<option data-name="Algeria" value="23424740">Algeria</option>
<option data-name="American Samoa" value="23424746">American Samoa</option>
<option data-name="Andorra" value="23424744">Andorra</option>
<option data-name="Angola" value="23424745">Angola</option>
<option data-name="Anguilla" value="23424751">Anguilla</option>
<option data-name="Antarctica" value="28289409">Antarctica</option>
<option data-name="Antigua and Barbuda" value="23424737">Antigua and Barbuda</option>
<option data-name="Argentina" value="23424747">Argentina</option>
<option data-name="Armenia" value="23424743">Armenia</option>
<option data-name="Aruba" value="23424736">Aruba</option>
<option data-name="Australia" value="23424748">Australia</option>
<option data-name="Austria" value="23424750">Austria</option>
<option data-name="Azerbaijan" value="23424741">Azerbaijan</option>
<option data-name="Bahrain" value="23424753">Bahrain</option>
<option data-name="Bangladesh" value="23424759">Bangladesh</option>
<option data-name="Barbados" value="23424754">Barbados</option>
<option data-name="Belarus" value="23424765">Belarus</option>
<option data-name="Belgium" value="23424757">Belgium</option>
<option data-name="Belize" value="23424760">Belize</option>
<option data-name="Benin" value="23424764">Benin</option>
<option data-name="Bermuda" value="23424756">Bermuda</option>
<option data-name="Bhutan" value="23424770">Bhutan</option>
<option data-name="Bolivia" value="23424762">Bolivia</option>
<option data-name="Bosnia and Herzegovina" value="23424761">Bosnia and Herzegovina</option>
<option data-name="Botswana" value="23424755">Botswana</option>
<option data-name="Bouvet Island" value="28289410">Bouvet Island</option>
<option data-name="Brazil" value="23424768">Brazil</option>
<option data-name="British Indian Ocean Territory" value="23424849">British Indian Ocean Territory</option>
<option data-name="British Virgin Islands" value="23424983">British Virgin Islands</option>
<option data-name="Brunei" value="23424773">Brunei</option>
<option data-name="Bulgaria" value="23424771">Bulgaria</option>
<option data-name="Burkina Faso" value="23424978">Burkina Faso</option>
<option data-name="Burundi" value="23424774">Burundi</option>
<option data-name="Cambodia" value="23424776">Cambodia</option>
<option data-name="Cameroon" value="23424785">Cameroon</option>
<option data-name="Canada" value="23424775">Canada</option>
<option data-name="Cape Verde" value="23424794">Cape Verde</option>
<option data-name="Caribbean Netherlands" value="56558056">Caribbean Netherlands</option>
<option data-name="Cayman Islands" value="23424783">Cayman Islands</option>
<option data-name="Central African Republic" value="23424792">Central African Republic</option>
<option data-name="Chad" value="23424777">Chad</option>
<option data-name="Chile" value="23424782">Chile</option>
<option data-name="China" value="23424781">China</option>
<option data-name="Christmas Island" value="23424869">Christmas Island</option>
<option data-name="Cocos (Keeling) Islands" value="23424784">Cocos (Keeling) Islands</option>
<option data-name="Colombia" value="23424787">Colombia</option>
<option data-name="Comoros" value="23424786">Comoros</option>
<option data-name="Congo" value="23424779">Congo</option>
<option data-name="Cook Islands" value="23424795">Cook Islands</option>
<option data-name="Costa Rica" value="23424791">Costa Rica</option>
<option data-name="Croatia" value="23424843">Croatia</option>
<option data-name="Curaçao" value="56558057">Curaçao</option>
<option data-name="Cyprus" value="26812346">Cyprus</option>
<option data-name="Czech Republic" value="23424810">Czech Republic</option>
<option data-name="Democratic Republic of Congo" value="23424780">Democratic Republic of Congo</option>
<option data-name="Denmark" value="23424796">Denmark</option>
<option data-name="Disputed Territory" value="23424928">Disputed Territory</option>
<option data-name="Djibouti" value="23424797">Djibouti</option>
<option data-name="Dominica" value="23424798">Dominica</option>
<option data-name="Dominican Republic" value="23424800">Dominican Republic</option>
<option data-name="East Timor" value="23424968">East Timor</option>
<option data-name="Ecuador" value="23424801">Ecuador</option>
<option data-name="Egypt" value="23424802">Egypt</option>
<option data-name="El Salvador" value="23424807">El Salvador</option>
<option data-name="Equatorial Guinea" value="23424804">Equatorial Guinea</option>
<option data-name="Eritrea" value="23424806">Eritrea</option>
<option data-name="Estonia" value="23424805">Estonia</option>
<option data-name="Ethiopia" value="23424808">Ethiopia</option>
<option data-name="Falkland Islands" value="23424814">Falkland Islands</option>
<option data-name="Faroe Islands" value="23424816">Faroe Islands</option>
<option data-name="Federated States of Micronesia" value="23424815">Federated States of Micronesia</option>
<option data-name="Fiji" value="23424813">Fiji</option>
<option data-name="Finland" value="23424812">Finland</option>
<option data-name="France" value="23424819">France</option>
<option data-name="French Guiana" value="23424811">French Guiana</option>
<option data-name="French Polynesia" value="23424817">French Polynesia</option>
<option data-name="French Southern Territories" value="28289406">French Southern Territories</option>
<option data-name="Gabon" value="23424822">Gabon</option>
<option data-name="Gambia" value="23424821">Gambia</option>
<option data-name="Georgia" value="23424823">Georgia</option>
<option data-name="Germany" value="23424829">Germany</option>
<option data-name="Ghana" value="23424824">Ghana</option>
<option data-name="Gibraltar" value="23424825">Gibraltar</option>
<option data-name="Greece" value="23424833">Greece</option>
<option data-name="Greenland" value="23424828">Greenland</option>
<option data-name="Grenada" value="23424826">Grenada</option>
<option data-name="Guadeloupe" value="23424831">Guadeloupe</option>
<option data-name="Guam" value="23424832">Guam</option>
<option data-name="Guatemala" value="23424834">Guatemala</option>
<option data-name="Guinea" value="23424835">Guinea</option>
<option data-name="Guinea-Bissau" value="23424929">Guinea-Bissau</option>
<option data-name="Guyana" value="23424836">Guyana</option>
<option data-name="Haiti" value="23424839">Haiti</option>
<option data-name="Heard Island and McDonald Islands" value="28289411">Heard Island and McDonald Islands</option>
<option data-name="Holy See (Vatican City State)" value="23424986">Holy See (Vatican City State)</option>
<option data-name="Honduras" value="23424841">Honduras</option>
<option data-name="Hong Kong" value="24865698">Hong Kong</option>
<option data-name="Hungary" value="23424844">Hungary</option>
<option data-name="Iceland" value="23424845">Iceland</option>
<option data-name="India" value="23424848">India</option>
<option data-name="Indonesia" value="23424846">Indonesia</option>
<option data-name="Iraq" value="23424855">Iraq</option>
<option data-name="Iraq-Saudi Arabia Neutral Zone" value="23424998">Iraq-Saudi Arabia Neutral Zone</option>
<option data-name="Ireland" value="23424803">Ireland</option>
<option data-name="Israel" value="23424852">Israel</option>
<option data-name="Italy" value="23424853">Italy</option>
<option data-name="Ivory Coast" value="23424854">Ivory Coast</option>
<option data-name="Jamaica" value="23424858">Jamaica</option>
<option data-name="Japan" value="23424856">Japan</option>
<option data-name="Jordan" value="23424860">Jordan</option>
<option data-name="Kazakhstan" value="23424871">Kazakhstan</option>
<option data-name="Kenya" value="23424863">Kenya</option>
<option data-name="Kiribati" value="23424867">Kiribati</option>
<option data-name="Kosovo" value="29389201">Kosovo</option>
<option data-name="Kuwait" value="23424870">Kuwait</option>
<option data-name="Kyrgyzstan" value="23424864">Kyrgyzstan</option>
<option data-name="Laos" value="23424872">Laos</option>
<option data-name="Latvia" value="23424874">Latvia</option>
<option data-name="Lebanon" value="23424873">Lebanon</option>
<option data-name="Lesotho" value="23424880">Lesotho</option>
<option data-name="Liberia" value="23424876">Liberia</option>
<option data-name="Libya" value="23424882">Libya</option>
<option data-name="Liechtenstein" value="23424879">Liechtenstein</option>
<option data-name="Lithuania" value="23424875">Lithuania</option>
<option data-name="Luxembourg" value="23424881">Luxembourg</option>
<option data-name="Macao" value="20070017">Macao</option>
<option data-name="Macedonia" value="23424890">Macedonia</option>
<option data-name="Madagascar" value="23424883">Madagascar</option>
<option data-name="Malawi" value="23424889">Malawi</option>
<option data-name="Malaysia" value="23424901">Malaysia</option>
<option data-name="Maldives" value="23424899">Maldives</option>
<option data-name="Mali" value="23424891">Mali</option>
<option data-name="Malta" value="23424897">Malta</option>
<option data-name="Marshall Islands" value="23424932">Marshall Islands</option>
<option data-name="Martinique" value="23424884">Martinique</option>
<option data-name="Mauritania" value="23424896">Mauritania</option>
<option data-name="Mauritius" value="23424894">Mauritius</option>
<option data-name="Mayotte" value="23424886">Mayotte</option>
<option data-name="Mexico" value="23424900">Mexico</option>
<option data-name="Moldova" value="23424885">Moldova</option>
<option data-name="Monaco" value="23424892">Monaco</option>
<option data-name="Mongolia" value="23424887">Mongolia</option>
<option data-name="Montenegro" value="20069817">Montenegro</option>
<option data-name="Montserrat" value="23424888">Montserrat</option>
<option data-name="Morocco" value="23424893">Morocco</option>
<option data-name="Mozambique" value="23424902">Mozambique</option>
<option data-name="Myanmar" value="23424763">Myanmar</option>
<option data-name="Namibia" value="23424987">Namibia</option>
<option data-name="Nauru" value="23424912">Nauru</option>
<option data-name="Nepal" value="23424911">Nepal</option>
<option data-name="Netherlands" value="23424909">Netherlands</option>
<option data-name="New Caledonia" value="23424903">New Caledonia</option>
<option data-name="New Zealand" value="23424916">New Zealand</option>
<option data-name="Nicaragua" value="23424915">Nicaragua</option>
<option data-name="Niger" value="23424906">Niger</option>
<option data-name="Nigeria" value="23424908">Nigeria</option>
<option data-name="Niue" value="23424904">Niue</option>
<option data-name="Norfolk Island" value="23424905">Norfolk Island</option>
<option data-name="Northern Mariana Islands" value="23424788">Northern Mariana Islands</option>
<option data-name="Norway" value="23424910">Norway</option>
<option data-name="Oman" value="23424898">Oman</option>
<option data-name="Pakistan" value="23424922">Pakistan</option>
<option data-name="Palau" value="23424927">Palau</option>
<option data-name="Palestine" value="28289408">Palestine</option>
<option data-name="Panama" value="23424924">Panama</option>
<option data-name="Papua New Guinea" value="23424926">Papua New Guinea</option>
<option data-name="Paraguay" value="23424917">Paraguay</option>
<option data-name="Peru" value="23424919">Peru</option>
<option data-name="Philippines" value="23424934">Philippines</option>
<option data-name="Pitcairn Islands" value="23424918">Pitcairn Islands</option>
<option data-name="Poland" value="23424923">Poland</option>
<option data-name="Portugal" value="23424925">Portugal</option>
<option data-name="Puerto Rico" value="23424935">Puerto Rico</option>
<option data-name="Qatar" value="23424930">Qatar</option>
<option data-name="Romania" value="23424933">Romania</option>
<option data-name="Russia" value="23424936">Russia</option>
<option data-name="Rwanda" value="23424937">Rwanda</option>
<option data-name="Réunion" value="23424931">Réunion</option>
<option data-name="Saint Barthélemy" value="56042304">Saint Barthélemy</option>
<option data-name="Saint Helena, Ascension and Tristan da Cunha" value="23424944">Saint Helena, Ascension and Tristan da Cunha</option>
<option data-name="Saint Kitts and Nevis" value="23424940">Saint Kitts and Nevis</option>
<option data-name="Saint Lucia" value="23424951">Saint Lucia</option>
<option data-name="Saint Martin (French part)" value="56042305">Saint Martin (French part)</option>
<option data-name="Saint Pierre and Miquelon" value="23424939">Saint Pierre and Miquelon</option>
<option data-name="Saint Vincent and the Grenadines" value="23424981">Saint Vincent and the Grenadines</option>
<option data-name="Samoa" value="23424992">Samoa</option>
<option data-name="San Marino" value="23424947">San Marino</option>
<option data-name="Sao Tome and Principe" value="23424966">Sao Tome and Principe</option>
<option data-name="Saudi Arabia" value="23424938">Saudi Arabia</option>
<option data-name="Senegal" value="23424943">Senegal</option>
<option data-name="Serbia" value="20069818">Serbia</option>
<option data-name="Seychelles" value="23424941">Seychelles</option>
<option data-name="Sierra Leone" value="23424946">Sierra Leone</option>
<option data-name="Singapore" value="23424948">Singapore</option>
<option data-name="Sint Maarten (Dutch part)" value="56558058">Sint Maarten (Dutch part)</option>
<option data-name="Slovakia" value="23424877">Slovakia</option>
<option data-name="Slovenia" value="23424945">Slovenia</option>
<option data-name="Solomon Islands" value="23424766">Solomon Islands</option>
<option data-name="Somalia" value="23424949">Somalia</option>
<option data-name="South Africa" value="23424942">South Africa</option>
<option data-name="South Georgia and the South Sandwich Islands" value="23424955">South Georgia and the South Sandwich Islands</option>
<option data-name="South Korea" value="23424868">South Korea</option>
<option data-name="Spain" value="23424950">Spain</option>
<option data-name="Spratly Islands" value="23424921">Spratly Islands</option>
<option data-name="Sri Lanka" value="23424778">Sri Lanka</option>
<option data-name="Sudan" value="23424952">Sudan</option>
<option data-name="Suriname" value="23424913">Suriname</option>
<option data-name="Svalbard and Jan Mayen" value="28289413">Svalbard and Jan Mayen</option>
<option data-name="Swaziland" value="23424993">Swaziland</option>
<option data-name="Sweden" value="23424954">Sweden</option>
<option data-name="Switzerland" value="23424957">Switzerland</option>
<option data-name="Taiwan" value="23424971">Taiwan</option>
<option data-name="Tajikistan" value="23424961">Tajikistan</option>
<option data-name="Tanzania, United Republic of" value="23424973">Tanzania, United Republic of</option>
<option data-name="Thailand" value="23424960">Thailand</option>
<option data-name="The Bahamas" value="23424758">The Bahamas</option>
<option data-name="Togo" value="23424965">Togo</option>
<option data-name="Tokelau" value="23424963">Tokelau</option>
<option data-name="Tonga" value="23424964">Tonga</option>
<option data-name="Trinidad and Tobago" value="23424958">Trinidad and Tobago</option>
<option data-name="Tunisia" value="23424967">Tunisia</option>
<option data-name="Turkey" value="23424969">Turkey</option>
<option data-name="Turkmenistan" value="23424972">Turkmenistan</option>
<option data-name="Turks and Caicos Islands" value="23424962">Turks and Caicos Islands</option>
<option data-name="Tuvalu" value="23424970">Tuvalu</option>
<option data-name="Uganda" value="23424974">Uganda</option>
<option data-name="Ukraine" value="23424976">Ukraine</option>
<option data-name="United Arab Emirates" value="23424738">United Arab Emirates</option>
<option data-name="United Kingdom" value="23424975">United Kingdom</option>
<option data-name="United Nations Neutral Zone" value="23424997">United Nations Neutral Zone</option>
<option data-name="United States" value="23424977">United States</option>
<option data-name="United States Minor Outlying Islands" value="28289407">United States Minor Outlying Islands</option>
<option data-name="Uruguay" value="23424979">Uruguay</option>
<option data-name="Uzbekistan" value="23424980">Uzbekistan</option>
<option data-name="Vanuatu" value="23424907">Vanuatu</option>
<option data-name="Venezuela" value="23424982">Venezuela</option>
<option data-name="Vietnam" value="23424984">Vietnam</option>
<option data-name="Virgin Islands, U.S." value="23424985">Virgin Islands, U.S.</option>
<option data-name="Wallis and Futuna" value="23424989">Wallis and Futuna</option>
<option data-name="Western Sahara" value="23424990">Western Sahara</option>
<option data-name="Yemen" value="23425002">Yemen</option>
<option data-name="Zambia" value="23425003">Zambia</option>
<option data-name="Zimbabwe" value="23425004">Zimbabwe</option></select>

<svg class="svg-icon__delta-down icon-14" aria-hidden="true"><use xlink:href="#delta-down"></use></svg>
</div>
</div>
<div class="form-group">
<label>Pledge amount</label>
<div id="multiple-reward-pledge-amount-2538616">
<div class="new-form__amount new-form__amount--symbol"><input class="new-form__input--numbers form-control js-form-input text" value="60" type="text" name="backing[amount]" id="backing_amount" /><div class="new-form__currency-box"><span class="new-form__currency-box__text">$</span></div></div>
</div>
<input name="backing[backer_reward_id]" type="hidden" value="2538616">
<input name="clicked_reward" type="hidden" value="true">
</div>
<div class="pledge__continue js-continue">
<button class="bttn bttn-primary theme--create bttn-medium w100p pledge__button">
<span class="btn-text">
Continue
</span>
</button>
</div>
<div class="pledge__applepay js-applepay">
<button class="btn btn--applepay btn--block js-applepay-button" role="button" tabindex="1">
<span class="btn-text"></span>
<div class="loader-dots">
<svg version="1.1" viewBox="0 0 56 16" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
<g>
<circle class="loader-dot-1" cx="8" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-2" cx="28" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.33s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-3" cx="48" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.66s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
</g>
</svg>
</div>

</button>
<button class="btn btn--another-payment-method btn--like-text btn--block mt1" role="button" tabindex="2">
<span class="btn-text">
Other payment options
<svg class="svg-icon__arrow-right" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
</span>
</button>
<p class="f6 center p0 m0">
By pledging you agree to Kickstarter\'s <a class="popup" target="_blank" href="/terms-of-use">Terms of Use</a>, <a class="popup" target="_blank" href="/privacy">Privacy Policy</a>, and <a class="popup" target="_blank" href="/cookies">Cookie Policy</a>.

</p>
</div>
</div>
<div class="pledge__accountability js-pledge__accountability">
<h6 class="f6">
Kickstarter is not a store.
</h6>
<p class="f6 normal">
It\'s a way to bring creative projects to life.
</p>
<a class="f6 normal mb0" href="/trust?ref=project_reward">Learn more about accountability.</a>
</div>
</form>



</li>
<li class="hover-group pledge--inactive pledge-selectable-sidebar" data-reward-id="2538615">
<div class="pledge__hover hover-zoomout">
<div class="pledge__hover-content">
<p>Select this reward</p>
</div>
</div>
<div class="pledge__info">
<h2 class="pledge__amount">
Pledge <span class="money">US$ 65</span> or more
<span class="pledge__currency-conversion">
About <span>US$ 65</span>
</span>
</h2>
<div class="pledge__reward-description pledge__reward-description--expanded">
<p>CRAFT BURGER PACK  2 boxes of each flavor plus local artisan condiments from Dai Due, Oh Khimchi, and Grandma&#39;s Hummus. Just add fresh veggies of your choice! Delivered to your door from Farmhouse Delivery. Available in Austin and Houston. Vegan options available.</p>

<a class="pledge__reward-description-toggle js-desc-toggle hide" href="#" role="button">
<span>Less</span>
</a>
</div>
<div class="pledge__extra-info">
<div class="pledge__detail">
<span class="pledge__detail-label">Estimated delivery</span>
<span class="pledge__detail-info"><time datetime="2014-08-01" data-format="MMM YYYY" class="invisible-if-js js-adjust-time">Aug 2014</time></span>
</div>
</div>
<div class="pledge__backer-stats">
<div class="flex flex-wrap">
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-support-100">
0 backers
</div>

</div>
</div>
</div>

</div>

<form class="NS_pledges__shipping_select js-form-wrapper new-form new-form--block pledge__checkout " action="/projects/1452363698/good-seed-craft-veggie-burgers/pledge" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="pledge__checkout-form">
<div class="form-group">
<label>Pledge amount</label>
<div id="multiple-reward-pledge-amount-2538615">
<div class="new-form__amount new-form__amount--symbol"><input class="new-form__input--numbers form-control js-form-input text" value="65" type="text" name="backing[amount]" id="backing_amount" /><div class="new-form__currency-box"><span class="new-form__currency-box__text">$</span></div></div>
</div>
<input name="backing[backer_reward_id]" type="hidden" value="2538615">
<input name="clicked_reward" type="hidden" value="true">
</div>
<div class="pledge__continue js-continue">
<button class="bttn bttn-primary theme--create bttn-medium w100p pledge__button">
<span class="btn-text">
Continue
</span>
</button>
</div>
<div class="pledge__applepay js-applepay">
<button class="btn btn--applepay btn--block js-applepay-button" role="button" tabindex="1">
<span class="btn-text"></span>
<div class="loader-dots">
<svg version="1.1" viewBox="0 0 56 16" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
<g>
<circle class="loader-dot-1" cx="8" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-2" cx="28" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.33s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-3" cx="48" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.66s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
</g>
</svg>
</div>

</button>
<button class="btn btn--another-payment-method btn--like-text btn--block mt1" role="button" tabindex="2">
<span class="btn-text">
Other payment options
<svg class="svg-icon__arrow-right" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
</span>
</button>
<p class="f6 center p0 m0">
By pledging you agree to Kickstarter\'s <a class="popup" target="_blank" href="/terms-of-use">Terms of Use</a>, <a class="popup" target="_blank" href="/privacy">Privacy Policy</a>, and <a class="popup" target="_blank" href="/cookies">Cookie Policy</a>.

</p>
</div>
</div>
<div class="pledge__accountability js-pledge__accountability">
<h6 class="f6">
Kickstarter is not a store.
</h6>
<p class="f6 normal">
It\'s a way to bring creative projects to life.
</p>
<a class="f6 normal mb0" href="/trust?ref=project_reward">Learn more about accountability.</a>
</div>
</form>



</li>
<li class="hover-group pledge--inactive pledge-selectable-sidebar" data-reward-id="2644269">
<div class="pledge__hover hover-zoomout">
<div class="pledge__hover-content">
<p>Select this reward</p>
</div>
</div>
<div class="pledge__info">
<h2 class="pledge__amount">
Pledge <span class="money">US$ 65</span> or more
<span class="pledge__currency-conversion">
About <span>US$ 65</span>
</span>
</h2>
<div class="pledge__reward-description pledge__reward-description--expanded">
<p>LOCAL BREAKFAST PACK
<br />Two boxes of our spicy Italian sausage patties,  Salt &amp; Rosemary
<br />Rockstar Bagels, Vital Farms eggs, Confituras seasonal jelly, and  Full Quiver seasonal Cheese spread delivered to your door from Greenling Organic. Available in Austin and Houston. Vegan options available.</p>

<a class="pledge__reward-description-toggle js-desc-toggle hide" href="#" role="button">
<span>Less</span>
</a>
</div>
<div class="pledge__extra-info">
<div class="pledge__detail">
<span class="pledge__detail-label">Estimated delivery</span>
<span class="pledge__detail-info"><time datetime="2014-08-01" data-format="MMM YYYY" class="invisible-if-js js-adjust-time">Aug 2014</time></span>
</div>
</div>
<div class="pledge__backer-stats">
<div class="flex flex-wrap">
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-support-100">
1 backer
</div>

</div>
</div>
</div>

</div>

<form class="NS_pledges__shipping_select js-form-wrapper new-form new-form--block pledge__checkout " action="/projects/1452363698/good-seed-craft-veggie-burgers/pledge" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="pledge__checkout-form">
<div class="form-group">
<label>Pledge amount</label>
<div id="multiple-reward-pledge-amount-2644269">
<div class="new-form__amount new-form__amount--symbol"><input class="new-form__input--numbers form-control js-form-input text" value="65" type="text" name="backing[amount]" id="backing_amount" /><div class="new-form__currency-box"><span class="new-form__currency-box__text">$</span></div></div>
</div>
<input name="backing[backer_reward_id]" type="hidden" value="2644269">
<input name="clicked_reward" type="hidden" value="true">
</div>
<div class="pledge__continue js-continue">
<button class="bttn bttn-primary theme--create bttn-medium w100p pledge__button">
<span class="btn-text">
Continue
</span>
</button>
</div>
<div class="pledge__applepay js-applepay">
<button class="btn btn--applepay btn--block js-applepay-button" role="button" tabindex="1">
<span class="btn-text"></span>
<div class="loader-dots">
<svg version="1.1" viewBox="0 0 56 16" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
<g>
<circle class="loader-dot-1" cx="8" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-2" cx="28" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.33s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-3" cx="48" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.66s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
</g>
</svg>
</div>

</button>
<button class="btn btn--another-payment-method btn--like-text btn--block mt1" role="button" tabindex="2">
<span class="btn-text">
Other payment options
<svg class="svg-icon__arrow-right" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
</span>
</button>
<p class="f6 center p0 m0">
By pledging you agree to Kickstarter\'s <a class="popup" target="_blank" href="/terms-of-use">Terms of Use</a>, <a class="popup" target="_blank" href="/privacy">Privacy Policy</a>, and <a class="popup" target="_blank" href="/cookies">Cookie Policy</a>.

</p>
</div>
</div>
<div class="pledge__accountability js-pledge__accountability">
<h6 class="f6">
Kickstarter is not a store.
</h6>
<p class="f6 normal">
It\'s a way to bring creative projects to life.
</p>
<a class="f6 normal mb0" href="/trust?ref=project_reward">Learn more about accountability.</a>
</div>
</form>



</li>
<li class="hover-group pledge--inactive pledge-selectable-sidebar" data-reward-id="2538618">
<div class="pledge__hover hover-zoomout">
<div class="pledge__hover-content">
<p>Select this reward</p>
</div>
</div>
<div class="pledge__info">
<h2 class="pledge__amount">
Pledge <span class="money">US$ 75</span> or more
<span class="pledge__currency-conversion">
About <span>US$ 75</span>
</span>
</h2>
<div class="pledge__reward-description pledge__reward-description--expanded">
<p>BURGER STASH &amp; T-SHIRT
<br />Eight boxes of Good Seed Burgers (flavor of your choice) plus a t-shirt.
<br />Please add the proper shipping costs when completing your pledge.
<br />We know shipping is high but our product requires 2 day air because it is frozen.  Local Austin residents can pick up at set pick up times.  Residents of AZ, UT, WY, MT, ND, SD, MN, IA, WI, MI, IN, OH, KY, WV, VA, NC, SC, GA, FL, CO,IL add $55 for shipping     Residents of WA, OR, NV, CA, NY, CT, RI, MA, ME, VT, HI, AL  add $78.  All other states add $14.</p>

<a class="pledge__reward-description-toggle js-desc-toggle hide" href="#" role="button">
<span>Less</span>
</a>
</div>
<div class="pledge__extra-info">
<div class="pledge__detail">
<span class="pledge__detail-label">Estimated delivery</span>
<span class="pledge__detail-info"><time datetime="2014-08-01" data-format="MMM YYYY" class="invisible-if-js js-adjust-time">Aug 2014</time></span>
</div>
<div class="pledge__detail">
<span class="pledge__detail-label">Ships to</span>
<span class="pledge__detail-info">Only United States</span>
</div>
</div>
<div class="pledge__backer-stats">
<div class="flex flex-wrap">
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-support-100">
3 backers
</div>

</div>
</div>
</div>

</div>

<form class="NS_pledges__shipping_select js-form-wrapper new-form new-form--block pledge__checkout pledge__checkout--with-shipping" action="/projects/1452363698/good-seed-craft-veggie-burgers/pledge" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="pledge__checkout-form">
<div class="form-group" id="shipping-select-4441911">
<label for="backing_location_id">Shipping destination</label>
<div class="ksr-select js-ksr-select" role="button" tabindex="-1">
<div class="title"></div>
<select name="backing[location_id]" id="backing_location_id" class="select"><option value="">Select a country:</option><option data-name="Afghanistan" value="23424739">Afghanistan</option>
<option data-name="Aland Islands" value="12577865">Aland Islands</option>
<option data-name="Albania" value="23424742">Albania</option>
<option data-name="Algeria" value="23424740">Algeria</option>
<option data-name="American Samoa" value="23424746">American Samoa</option>
<option data-name="Andorra" value="23424744">Andorra</option>
<option data-name="Angola" value="23424745">Angola</option>
<option data-name="Anguilla" value="23424751">Anguilla</option>
<option data-name="Antarctica" value="28289409">Antarctica</option>
<option data-name="Antigua and Barbuda" value="23424737">Antigua and Barbuda</option>
<option data-name="Argentina" value="23424747">Argentina</option>
<option data-name="Armenia" value="23424743">Armenia</option>
<option data-name="Aruba" value="23424736">Aruba</option>
<option data-name="Australia" value="23424748">Australia</option>
<option data-name="Austria" value="23424750">Austria</option>
<option data-name="Azerbaijan" value="23424741">Azerbaijan</option>
<option data-name="Bahrain" value="23424753">Bahrain</option>
<option data-name="Bangladesh" value="23424759">Bangladesh</option>
<option data-name="Barbados" value="23424754">Barbados</option>
<option data-name="Belarus" value="23424765">Belarus</option>
<option data-name="Belgium" value="23424757">Belgium</option>
<option data-name="Belize" value="23424760">Belize</option>
<option data-name="Benin" value="23424764">Benin</option>
<option data-name="Bermuda" value="23424756">Bermuda</option>
<option data-name="Bhutan" value="23424770">Bhutan</option>
<option data-name="Bolivia" value="23424762">Bolivia</option>
<option data-name="Bosnia and Herzegovina" value="23424761">Bosnia and Herzegovina</option>
<option data-name="Botswana" value="23424755">Botswana</option>
<option data-name="Bouvet Island" value="28289410">Bouvet Island</option>
<option data-name="Brazil" value="23424768">Brazil</option>
<option data-name="British Indian Ocean Territory" value="23424849">British Indian Ocean Territory</option>
<option data-name="British Virgin Islands" value="23424983">British Virgin Islands</option>
<option data-name="Brunei" value="23424773">Brunei</option>
<option data-name="Bulgaria" value="23424771">Bulgaria</option>
<option data-name="Burkina Faso" value="23424978">Burkina Faso</option>
<option data-name="Burundi" value="23424774">Burundi</option>
<option data-name="Cambodia" value="23424776">Cambodia</option>
<option data-name="Cameroon" value="23424785">Cameroon</option>
<option data-name="Canada" value="23424775">Canada</option>
<option data-name="Cape Verde" value="23424794">Cape Verde</option>
<option data-name="Caribbean Netherlands" value="56558056">Caribbean Netherlands</option>
<option data-name="Cayman Islands" value="23424783">Cayman Islands</option>
<option data-name="Central African Republic" value="23424792">Central African Republic</option>
<option data-name="Chad" value="23424777">Chad</option>
<option data-name="Chile" value="23424782">Chile</option>
<option data-name="China" value="23424781">China</option>
<option data-name="Christmas Island" value="23424869">Christmas Island</option>
<option data-name="Cocos (Keeling) Islands" value="23424784">Cocos (Keeling) Islands</option>
<option data-name="Colombia" value="23424787">Colombia</option>
<option data-name="Comoros" value="23424786">Comoros</option>
<option data-name="Congo" value="23424779">Congo</option>
<option data-name="Cook Islands" value="23424795">Cook Islands</option>
<option data-name="Costa Rica" value="23424791">Costa Rica</option>
<option data-name="Croatia" value="23424843">Croatia</option>
<option data-name="Curaçao" value="56558057">Curaçao</option>
<option data-name="Cyprus" value="26812346">Cyprus</option>
<option data-name="Czech Republic" value="23424810">Czech Republic</option>
<option data-name="Democratic Republic of Congo" value="23424780">Democratic Republic of Congo</option>
<option data-name="Denmark" value="23424796">Denmark</option>
<option data-name="Disputed Territory" value="23424928">Disputed Territory</option>
<option data-name="Djibouti" value="23424797">Djibouti</option>
<option data-name="Dominica" value="23424798">Dominica</option>
<option data-name="Dominican Republic" value="23424800">Dominican Republic</option>
<option data-name="East Timor" value="23424968">East Timor</option>
<option data-name="Ecuador" value="23424801">Ecuador</option>
<option data-name="Egypt" value="23424802">Egypt</option>
<option data-name="El Salvador" value="23424807">El Salvador</option>
<option data-name="Equatorial Guinea" value="23424804">Equatorial Guinea</option>
<option data-name="Eritrea" value="23424806">Eritrea</option>
<option data-name="Estonia" value="23424805">Estonia</option>
<option data-name="Ethiopia" value="23424808">Ethiopia</option>
<option data-name="Falkland Islands" value="23424814">Falkland Islands</option>
<option data-name="Faroe Islands" value="23424816">Faroe Islands</option>
<option data-name="Federated States of Micronesia" value="23424815">Federated States of Micronesia</option>
<option data-name="Fiji" value="23424813">Fiji</option>
<option data-name="Finland" value="23424812">Finland</option>
<option data-name="France" value="23424819">France</option>
<option data-name="French Guiana" value="23424811">French Guiana</option>
<option data-name="French Polynesia" value="23424817">French Polynesia</option>
<option data-name="French Southern Territories" value="28289406">French Southern Territories</option>
<option data-name="Gabon" value="23424822">Gabon</option>
<option data-name="Gambia" value="23424821">Gambia</option>
<option data-name="Georgia" value="23424823">Georgia</option>
<option data-name="Germany" value="23424829">Germany</option>
<option data-name="Ghana" value="23424824">Ghana</option>
<option data-name="Gibraltar" value="23424825">Gibraltar</option>
<option data-name="Greece" value="23424833">Greece</option>
<option data-name="Greenland" value="23424828">Greenland</option>
<option data-name="Grenada" value="23424826">Grenada</option>
<option data-name="Guadeloupe" value="23424831">Guadeloupe</option>
<option data-name="Guam" value="23424832">Guam</option>
<option data-name="Guatemala" value="23424834">Guatemala</option>
<option data-name="Guinea" value="23424835">Guinea</option>
<option data-name="Guinea-Bissau" value="23424929">Guinea-Bissau</option>
<option data-name="Guyana" value="23424836">Guyana</option>
<option data-name="Haiti" value="23424839">Haiti</option>
<option data-name="Heard Island and McDonald Islands" value="28289411">Heard Island and McDonald Islands</option>
<option data-name="Holy See (Vatican City State)" value="23424986">Holy See (Vatican City State)</option>
<option data-name="Honduras" value="23424841">Honduras</option>
<option data-name="Hong Kong" value="24865698">Hong Kong</option>
<option data-name="Hungary" value="23424844">Hungary</option>
<option data-name="Iceland" value="23424845">Iceland</option>
<option data-name="India" value="23424848">India</option>
<option data-name="Indonesia" value="23424846">Indonesia</option>
<option data-name="Iraq" value="23424855">Iraq</option>
<option data-name="Iraq-Saudi Arabia Neutral Zone" value="23424998">Iraq-Saudi Arabia Neutral Zone</option>
<option data-name="Ireland" value="23424803">Ireland</option>
<option data-name="Israel" value="23424852">Israel</option>
<option data-name="Italy" value="23424853">Italy</option>
<option data-name="Ivory Coast" value="23424854">Ivory Coast</option>
<option data-name="Jamaica" value="23424858">Jamaica</option>
<option data-name="Japan" value="23424856">Japan</option>
<option data-name="Jordan" value="23424860">Jordan</option>
<option data-name="Kazakhstan" value="23424871">Kazakhstan</option>
<option data-name="Kenya" value="23424863">Kenya</option>
<option data-name="Kiribati" value="23424867">Kiribati</option>
<option data-name="Kosovo" value="29389201">Kosovo</option>
<option data-name="Kuwait" value="23424870">Kuwait</option>
<option data-name="Kyrgyzstan" value="23424864">Kyrgyzstan</option>
<option data-name="Laos" value="23424872">Laos</option>
<option data-name="Latvia" value="23424874">Latvia</option>
<option data-name="Lebanon" value="23424873">Lebanon</option>
<option data-name="Lesotho" value="23424880">Lesotho</option>
<option data-name="Liberia" value="23424876">Liberia</option>
<option data-name="Libya" value="23424882">Libya</option>
<option data-name="Liechtenstein" value="23424879">Liechtenstein</option>
<option data-name="Lithuania" value="23424875">Lithuania</option>
<option data-name="Luxembourg" value="23424881">Luxembourg</option>
<option data-name="Macao" value="20070017">Macao</option>
<option data-name="Macedonia" value="23424890">Macedonia</option>
<option data-name="Madagascar" value="23424883">Madagascar</option>
<option data-name="Malawi" value="23424889">Malawi</option>
<option data-name="Malaysia" value="23424901">Malaysia</option>
<option data-name="Maldives" value="23424899">Maldives</option>
<option data-name="Mali" value="23424891">Mali</option>
<option data-name="Malta" value="23424897">Malta</option>
<option data-name="Marshall Islands" value="23424932">Marshall Islands</option>
<option data-name="Martinique" value="23424884">Martinique</option>
<option data-name="Mauritania" value="23424896">Mauritania</option>
<option data-name="Mauritius" value="23424894">Mauritius</option>
<option data-name="Mayotte" value="23424886">Mayotte</option>
<option data-name="Mexico" value="23424900">Mexico</option>
<option data-name="Moldova" value="23424885">Moldova</option>
<option data-name="Monaco" value="23424892">Monaco</option>
<option data-name="Mongolia" value="23424887">Mongolia</option>
<option data-name="Montenegro" value="20069817">Montenegro</option>
<option data-name="Montserrat" value="23424888">Montserrat</option>
<option data-name="Morocco" value="23424893">Morocco</option>
<option data-name="Mozambique" value="23424902">Mozambique</option>
<option data-name="Myanmar" value="23424763">Myanmar</option>
<option data-name="Namibia" value="23424987">Namibia</option>
<option data-name="Nauru" value="23424912">Nauru</option>
<option data-name="Nepal" value="23424911">Nepal</option>
<option data-name="Netherlands" value="23424909">Netherlands</option>
<option data-name="New Caledonia" value="23424903">New Caledonia</option>
<option data-name="New Zealand" value="23424916">New Zealand</option>
<option data-name="Nicaragua" value="23424915">Nicaragua</option>
<option data-name="Niger" value="23424906">Niger</option>
<option data-name="Nigeria" value="23424908">Nigeria</option>
<option data-name="Niue" value="23424904">Niue</option>
<option data-name="Norfolk Island" value="23424905">Norfolk Island</option>
<option data-name="Northern Mariana Islands" value="23424788">Northern Mariana Islands</option>
<option data-name="Norway" value="23424910">Norway</option>
<option data-name="Oman" value="23424898">Oman</option>
<option data-name="Pakistan" value="23424922">Pakistan</option>
<option data-name="Palau" value="23424927">Palau</option>
<option data-name="Palestine" value="28289408">Palestine</option>
<option data-name="Panama" value="23424924">Panama</option>
<option data-name="Papua New Guinea" value="23424926">Papua New Guinea</option>
<option data-name="Paraguay" value="23424917">Paraguay</option>
<option data-name="Peru" value="23424919">Peru</option>
<option data-name="Philippines" value="23424934">Philippines</option>
<option data-name="Pitcairn Islands" value="23424918">Pitcairn Islands</option>
<option data-name="Poland" value="23424923">Poland</option>
<option data-name="Portugal" value="23424925">Portugal</option>
<option data-name="Puerto Rico" value="23424935">Puerto Rico</option>
<option data-name="Qatar" value="23424930">Qatar</option>
<option data-name="Romania" value="23424933">Romania</option>
<option data-name="Russia" value="23424936">Russia</option>
<option data-name="Rwanda" value="23424937">Rwanda</option>
<option data-name="Réunion" value="23424931">Réunion</option>
<option data-name="Saint Barthélemy" value="56042304">Saint Barthélemy</option>
<option data-name="Saint Helena, Ascension and Tristan da Cunha" value="23424944">Saint Helena, Ascension and Tristan da Cunha</option>
<option data-name="Saint Kitts and Nevis" value="23424940">Saint Kitts and Nevis</option>
<option data-name="Saint Lucia" value="23424951">Saint Lucia</option>
<option data-name="Saint Martin (French part)" value="56042305">Saint Martin (French part)</option>
<option data-name="Saint Pierre and Miquelon" value="23424939">Saint Pierre and Miquelon</option>
<option data-name="Saint Vincent and the Grenadines" value="23424981">Saint Vincent and the Grenadines</option>
<option data-name="Samoa" value="23424992">Samoa</option>
<option data-name="San Marino" value="23424947">San Marino</option>
<option data-name="Sao Tome and Principe" value="23424966">Sao Tome and Principe</option>
<option data-name="Saudi Arabia" value="23424938">Saudi Arabia</option>
<option data-name="Senegal" value="23424943">Senegal</option>
<option data-name="Serbia" value="20069818">Serbia</option>
<option data-name="Seychelles" value="23424941">Seychelles</option>
<option data-name="Sierra Leone" value="23424946">Sierra Leone</option>
<option data-name="Singapore" value="23424948">Singapore</option>
<option data-name="Sint Maarten (Dutch part)" value="56558058">Sint Maarten (Dutch part)</option>
<option data-name="Slovakia" value="23424877">Slovakia</option>
<option data-name="Slovenia" value="23424945">Slovenia</option>
<option data-name="Solomon Islands" value="23424766">Solomon Islands</option>
<option data-name="Somalia" value="23424949">Somalia</option>
<option data-name="South Africa" value="23424942">South Africa</option>
<option data-name="South Georgia and the South Sandwich Islands" value="23424955">South Georgia and the South Sandwich Islands</option>
<option data-name="South Korea" value="23424868">South Korea</option>
<option data-name="Spain" value="23424950">Spain</option>
<option data-name="Spratly Islands" value="23424921">Spratly Islands</option>
<option data-name="Sri Lanka" value="23424778">Sri Lanka</option>
<option data-name="Sudan" value="23424952">Sudan</option>
<option data-name="Suriname" value="23424913">Suriname</option>
<option data-name="Svalbard and Jan Mayen" value="28289413">Svalbard and Jan Mayen</option>
<option data-name="Swaziland" value="23424993">Swaziland</option>
<option data-name="Sweden" value="23424954">Sweden</option>
<option data-name="Switzerland" value="23424957">Switzerland</option>
<option data-name="Taiwan" value="23424971">Taiwan</option>
<option data-name="Tajikistan" value="23424961">Tajikistan</option>
<option data-name="Tanzania, United Republic of" value="23424973">Tanzania, United Republic of</option>
<option data-name="Thailand" value="23424960">Thailand</option>
<option data-name="The Bahamas" value="23424758">The Bahamas</option>
<option data-name="Togo" value="23424965">Togo</option>
<option data-name="Tokelau" value="23424963">Tokelau</option>
<option data-name="Tonga" value="23424964">Tonga</option>
<option data-name="Trinidad and Tobago" value="23424958">Trinidad and Tobago</option>
<option data-name="Tunisia" value="23424967">Tunisia</option>
<option data-name="Turkey" value="23424969">Turkey</option>
<option data-name="Turkmenistan" value="23424972">Turkmenistan</option>
<option data-name="Turks and Caicos Islands" value="23424962">Turks and Caicos Islands</option>
<option data-name="Tuvalu" value="23424970">Tuvalu</option>
<option data-name="Uganda" value="23424974">Uganda</option>
<option data-name="Ukraine" value="23424976">Ukraine</option>
<option data-name="United Arab Emirates" value="23424738">United Arab Emirates</option>
<option data-name="United Kingdom" value="23424975">United Kingdom</option>
<option data-name="United Nations Neutral Zone" value="23424997">United Nations Neutral Zone</option>
<option data-name="United States" value="23424977">United States</option>
<option data-name="United States Minor Outlying Islands" value="28289407">United States Minor Outlying Islands</option>
<option data-name="Uruguay" value="23424979">Uruguay</option>
<option data-name="Uzbekistan" value="23424980">Uzbekistan</option>
<option data-name="Vanuatu" value="23424907">Vanuatu</option>
<option data-name="Venezuela" value="23424982">Venezuela</option>
<option data-name="Vietnam" value="23424984">Vietnam</option>
<option data-name="Virgin Islands, U.S." value="23424985">Virgin Islands, U.S.</option>
<option data-name="Wallis and Futuna" value="23424989">Wallis and Futuna</option>
<option data-name="Western Sahara" value="23424990">Western Sahara</option>
<option data-name="Yemen" value="23425002">Yemen</option>
<option data-name="Zambia" value="23425003">Zambia</option>
<option data-name="Zimbabwe" value="23425004">Zimbabwe</option></select>

<svg class="svg-icon__delta-down icon-14" aria-hidden="true"><use xlink:href="#delta-down"></use></svg>
</div>
</div>
<div class="form-group">
<label>Pledge amount</label>
<div id="multiple-reward-pledge-amount-2538618">
<div class="new-form__amount new-form__amount--symbol"><input class="new-form__input--numbers form-control js-form-input text" value="75" type="text" name="backing[amount]" id="backing_amount" /><div class="new-form__currency-box"><span class="new-form__currency-box__text">$</span></div></div>
</div>
<input name="backing[backer_reward_id]" type="hidden" value="2538618">
<input name="clicked_reward" type="hidden" value="true">
</div>
<div class="pledge__continue js-continue">
<button class="bttn bttn-primary theme--create bttn-medium w100p pledge__button">
<span class="btn-text">
Continue
</span>
</button>
</div>
<div class="pledge__applepay js-applepay">
<button class="btn btn--applepay btn--block js-applepay-button" role="button" tabindex="1">
<span class="btn-text"></span>
<div class="loader-dots">
<svg version="1.1" viewBox="0 0 56 16" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
<g>
<circle class="loader-dot-1" cx="8" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-2" cx="28" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.33s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-3" cx="48" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.66s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
</g>
</svg>
</div>

</button>
<button class="btn btn--another-payment-method btn--like-text btn--block mt1" role="button" tabindex="2">
<span class="btn-text">
Other payment options
<svg class="svg-icon__arrow-right" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
</span>
</button>
<p class="f6 center p0 m0">
By pledging you agree to Kickstarter\'s <a class="popup" target="_blank" href="/terms-of-use">Terms of Use</a>, <a class="popup" target="_blank" href="/privacy">Privacy Policy</a>, and <a class="popup" target="_blank" href="/cookies">Cookie Policy</a>.

</p>
</div>
</div>
<div class="pledge__accountability js-pledge__accountability">
<h6 class="f6">
Kickstarter is not a store.
</h6>
<p class="f6 normal">
It\'s a way to bring creative projects to life.
</p>
<a class="f6 normal mb0" href="/trust?ref=project_reward">Learn more about accountability.</a>
</div>
</form>



</li>
<li class="hover-group pledge--inactive pledge-selectable-sidebar" data-reward-id="2542641">
<div class="pledge__hover hover-zoomout">
<div class="pledge__hover-content">
<p>Select this reward</p>
</div>
</div>
<div class="pledge__info">
<h2 class="pledge__amount">
Pledge <span class="money">US$ 100</span> or more
<span class="pledge__currency-conversion">
About <span>US$ 100</span>
</span>
</h2>
<div class="pledge__reward-description pledge__reward-description--expanded">
<p>TASTE OF AUSTIN SUPERFOOD PACK
<br />Enjoy the superfood tastes of Austin with this pack of products and stickers from health conscious Austin artisans packed in a Good Seed tote bag!  Includes two boxes of Good Seed burgers, Love Bean raw chocolate spread, Bearded Brothers Energy Bars, Happy Hemp seeds, Rhythm Superfoods Kale Chips, and Thunderbird Energetica Bars!
<br />Please add the proper shipping costs when completing your pledge.
<br />Local Austin residents get pick up or free delivery.  Shipping requires 2 day air because our product is frozen.  Residents of AZ, UT, WY, MT, ND, SD, MN, IA, WI, MI, IN, OH, KY, WV, VA, NC, SC, GA, FL, CO,IL add $48 for shipping     Residents of WA, OR, NV, CA, NY, CT, RI, MA, ME, VT, HI, AL  add $56.  All other states add $12.</p>

<a class="pledge__reward-description-toggle js-desc-toggle hide" href="#" role="button">
<span>Less</span>
</a>
</div>
<div class="pledge__extra-info">
<div class="pledge__detail">
<span class="pledge__detail-label">Estimated delivery</span>
<span class="pledge__detail-info"><time datetime="2014-08-01" data-format="MMM YYYY" class="invisible-if-js js-adjust-time">Aug 2014</time></span>
</div>
<div class="pledge__detail">
<span class="pledge__detail-label">Ships to</span>
<span class="pledge__detail-info">Only United States</span>
</div>
</div>
<div class="pledge__backer-stats">
<div class="flex flex-wrap">
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-support-100">
3 backers
</div>

</div>
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-celebrate-100">
Limited (72 left of 75)
</div>

</div>
</div>
</div>

</div>

<form class="NS_pledges__shipping_select js-form-wrapper new-form new-form--block pledge__checkout pledge__checkout--with-shipping" action="/projects/1452363698/good-seed-craft-veggie-burgers/pledge" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="pledge__checkout-form">
<div class="form-group" id="shipping-select-4441911">
<label for="backing_location_id">Shipping destination</label>
<div class="ksr-select js-ksr-select" role="button" tabindex="-1">
<div class="title"></div>
<select name="backing[location_id]" id="backing_location_id" class="select"><option value="">Select a country:</option><option data-name="Afghanistan" value="23424739">Afghanistan</option>
<option data-name="Aland Islands" value="12577865">Aland Islands</option>
<option data-name="Albania" value="23424742">Albania</option>
<option data-name="Algeria" value="23424740">Algeria</option>
<option data-name="American Samoa" value="23424746">American Samoa</option>
<option data-name="Andorra" value="23424744">Andorra</option>
<option data-name="Angola" value="23424745">Angola</option>
<option data-name="Anguilla" value="23424751">Anguilla</option>
<option data-name="Antarctica" value="28289409">Antarctica</option>
<option data-name="Antigua and Barbuda" value="23424737">Antigua and Barbuda</option>
<option data-name="Argentina" value="23424747">Argentina</option>
<option data-name="Armenia" value="23424743">Armenia</option>
<option data-name="Aruba" value="23424736">Aruba</option>
<option data-name="Australia" value="23424748">Australia</option>
<option data-name="Austria" value="23424750">Austria</option>
<option data-name="Azerbaijan" value="23424741">Azerbaijan</option>
<option data-name="Bahrain" value="23424753">Bahrain</option>
<option data-name="Bangladesh" value="23424759">Bangladesh</option>
<option data-name="Barbados" value="23424754">Barbados</option>
<option data-name="Belarus" value="23424765">Belarus</option>
<option data-name="Belgium" value="23424757">Belgium</option>
<option data-name="Belize" value="23424760">Belize</option>
<option data-name="Benin" value="23424764">Benin</option>
<option data-name="Bermuda" value="23424756">Bermuda</option>
<option data-name="Bhutan" value="23424770">Bhutan</option>
<option data-name="Bolivia" value="23424762">Bolivia</option>
<option data-name="Bosnia and Herzegovina" value="23424761">Bosnia and Herzegovina</option>
<option data-name="Botswana" value="23424755">Botswana</option>
<option data-name="Bouvet Island" value="28289410">Bouvet Island</option>
<option data-name="Brazil" value="23424768">Brazil</option>
<option data-name="British Indian Ocean Territory" value="23424849">British Indian Ocean Territory</option>
<option data-name="British Virgin Islands" value="23424983">British Virgin Islands</option>
<option data-name="Brunei" value="23424773">Brunei</option>
<option data-name="Bulgaria" value="23424771">Bulgaria</option>
<option data-name="Burkina Faso" value="23424978">Burkina Faso</option>
<option data-name="Burundi" value="23424774">Burundi</option>
<option data-name="Cambodia" value="23424776">Cambodia</option>
<option data-name="Cameroon" value="23424785">Cameroon</option>
<option data-name="Canada" value="23424775">Canada</option>
<option data-name="Cape Verde" value="23424794">Cape Verde</option>
<option data-name="Caribbean Netherlands" value="56558056">Caribbean Netherlands</option>
<option data-name="Cayman Islands" value="23424783">Cayman Islands</option>
<option data-name="Central African Republic" value="23424792">Central African Republic</option>
<option data-name="Chad" value="23424777">Chad</option>
<option data-name="Chile" value="23424782">Chile</option>
<option data-name="China" value="23424781">China</option>
<option data-name="Christmas Island" value="23424869">Christmas Island</option>
<option data-name="Cocos (Keeling) Islands" value="23424784">Cocos (Keeling) Islands</option>
<option data-name="Colombia" value="23424787">Colombia</option>
<option data-name="Comoros" value="23424786">Comoros</option>
<option data-name="Congo" value="23424779">Congo</option>
<option data-name="Cook Islands" value="23424795">Cook Islands</option>
<option data-name="Costa Rica" value="23424791">Costa Rica</option>
<option data-name="Croatia" value="23424843">Croatia</option>
<option data-name="Curaçao" value="56558057">Curaçao</option>
<option data-name="Cyprus" value="26812346">Cyprus</option>
<option data-name="Czech Republic" value="23424810">Czech Republic</option>
<option data-name="Democratic Republic of Congo" value="23424780">Democratic Republic of Congo</option>
<option data-name="Denmark" value="23424796">Denmark</option>
<option data-name="Disputed Territory" value="23424928">Disputed Territory</option>
<option data-name="Djibouti" value="23424797">Djibouti</option>
<option data-name="Dominica" value="23424798">Dominica</option>
<option data-name="Dominican Republic" value="23424800">Dominican Republic</option>
<option data-name="East Timor" value="23424968">East Timor</option>
<option data-name="Ecuador" value="23424801">Ecuador</option>
<option data-name="Egypt" value="23424802">Egypt</option>
<option data-name="El Salvador" value="23424807">El Salvador</option>
<option data-name="Equatorial Guinea" value="23424804">Equatorial Guinea</option>
<option data-name="Eritrea" value="23424806">Eritrea</option>
<option data-name="Estonia" value="23424805">Estonia</option>
<option data-name="Ethiopia" value="23424808">Ethiopia</option>
<option data-name="Falkland Islands" value="23424814">Falkland Islands</option>
<option data-name="Faroe Islands" value="23424816">Faroe Islands</option>
<option data-name="Federated States of Micronesia" value="23424815">Federated States of Micronesia</option>
<option data-name="Fiji" value="23424813">Fiji</option>
<option data-name="Finland" value="23424812">Finland</option>
<option data-name="France" value="23424819">France</option>
<option data-name="French Guiana" value="23424811">French Guiana</option>
<option data-name="French Polynesia" value="23424817">French Polynesia</option>
<option data-name="French Southern Territories" value="28289406">French Southern Territories</option>
<option data-name="Gabon" value="23424822">Gabon</option>
<option data-name="Gambia" value="23424821">Gambia</option>
<option data-name="Georgia" value="23424823">Georgia</option>
<option data-name="Germany" value="23424829">Germany</option>
<option data-name="Ghana" value="23424824">Ghana</option>
<option data-name="Gibraltar" value="23424825">Gibraltar</option>
<option data-name="Greece" value="23424833">Greece</option>
<option data-name="Greenland" value="23424828">Greenland</option>
<option data-name="Grenada" value="23424826">Grenada</option>
<option data-name="Guadeloupe" value="23424831">Guadeloupe</option>
<option data-name="Guam" value="23424832">Guam</option>
<option data-name="Guatemala" value="23424834">Guatemala</option>
<option data-name="Guinea" value="23424835">Guinea</option>
<option data-name="Guinea-Bissau" value="23424929">Guinea-Bissau</option>
<option data-name="Guyana" value="23424836">Guyana</option>
<option data-name="Haiti" value="23424839">Haiti</option>
<option data-name="Heard Island and McDonald Islands" value="28289411">Heard Island and McDonald Islands</option>
<option data-name="Holy See (Vatican City State)" value="23424986">Holy See (Vatican City State)</option>
<option data-name="Honduras" value="23424841">Honduras</option>
<option data-name="Hong Kong" value="24865698">Hong Kong</option>
<option data-name="Hungary" value="23424844">Hungary</option>
<option data-name="Iceland" value="23424845">Iceland</option>
<option data-name="India" value="23424848">India</option>
<option data-name="Indonesia" value="23424846">Indonesia</option>
<option data-name="Iraq" value="23424855">Iraq</option>
<option data-name="Iraq-Saudi Arabia Neutral Zone" value="23424998">Iraq-Saudi Arabia Neutral Zone</option>
<option data-name="Ireland" value="23424803">Ireland</option>
<option data-name="Israel" value="23424852">Israel</option>
<option data-name="Italy" value="23424853">Italy</option>
<option data-name="Ivory Coast" value="23424854">Ivory Coast</option>
<option data-name="Jamaica" value="23424858">Jamaica</option>
<option data-name="Japan" value="23424856">Japan</option>
<option data-name="Jordan" value="23424860">Jordan</option>
<option data-name="Kazakhstan" value="23424871">Kazakhstan</option>
<option data-name="Kenya" value="23424863">Kenya</option>
<option data-name="Kiribati" value="23424867">Kiribati</option>
<option data-name="Kosovo" value="29389201">Kosovo</option>
<option data-name="Kuwait" value="23424870">Kuwait</option>
<option data-name="Kyrgyzstan" value="23424864">Kyrgyzstan</option>
<option data-name="Laos" value="23424872">Laos</option>
<option data-name="Latvia" value="23424874">Latvia</option>
<option data-name="Lebanon" value="23424873">Lebanon</option>
<option data-name="Lesotho" value="23424880">Lesotho</option>
<option data-name="Liberia" value="23424876">Liberia</option>
<option data-name="Libya" value="23424882">Libya</option>
<option data-name="Liechtenstein" value="23424879">Liechtenstein</option>
<option data-name="Lithuania" value="23424875">Lithuania</option>
<option data-name="Luxembourg" value="23424881">Luxembourg</option>
<option data-name="Macao" value="20070017">Macao</option>
<option data-name="Macedonia" value="23424890">Macedonia</option>
<option data-name="Madagascar" value="23424883">Madagascar</option>
<option data-name="Malawi" value="23424889">Malawi</option>
<option data-name="Malaysia" value="23424901">Malaysia</option>
<option data-name="Maldives" value="23424899">Maldives</option>
<option data-name="Mali" value="23424891">Mali</option>
<option data-name="Malta" value="23424897">Malta</option>
<option data-name="Marshall Islands" value="23424932">Marshall Islands</option>
<option data-name="Martinique" value="23424884">Martinique</option>
<option data-name="Mauritania" value="23424896">Mauritania</option>
<option data-name="Mauritius" value="23424894">Mauritius</option>
<option data-name="Mayotte" value="23424886">Mayotte</option>
<option data-name="Mexico" value="23424900">Mexico</option>
<option data-name="Moldova" value="23424885">Moldova</option>
<option data-name="Monaco" value="23424892">Monaco</option>
<option data-name="Mongolia" value="23424887">Mongolia</option>
<option data-name="Montenegro" value="20069817">Montenegro</option>
<option data-name="Montserrat" value="23424888">Montserrat</option>
<option data-name="Morocco" value="23424893">Morocco</option>
<option data-name="Mozambique" value="23424902">Mozambique</option>
<option data-name="Myanmar" value="23424763">Myanmar</option>
<option data-name="Namibia" value="23424987">Namibia</option>
<option data-name="Nauru" value="23424912">Nauru</option>
<option data-name="Nepal" value="23424911">Nepal</option>
<option data-name="Netherlands" value="23424909">Netherlands</option>
<option data-name="New Caledonia" value="23424903">New Caledonia</option>
<option data-name="New Zealand" value="23424916">New Zealand</option>
<option data-name="Nicaragua" value="23424915">Nicaragua</option>
<option data-name="Niger" value="23424906">Niger</option>
<option data-name="Nigeria" value="23424908">Nigeria</option>
<option data-name="Niue" value="23424904">Niue</option>
<option data-name="Norfolk Island" value="23424905">Norfolk Island</option>
<option data-name="Northern Mariana Islands" value="23424788">Northern Mariana Islands</option>
<option data-name="Norway" value="23424910">Norway</option>
<option data-name="Oman" value="23424898">Oman</option>
<option data-name="Pakistan" value="23424922">Pakistan</option>
<option data-name="Palau" value="23424927">Palau</option>
<option data-name="Palestine" value="28289408">Palestine</option>
<option data-name="Panama" value="23424924">Panama</option>
<option data-name="Papua New Guinea" value="23424926">Papua New Guinea</option>
<option data-name="Paraguay" value="23424917">Paraguay</option>
<option data-name="Peru" value="23424919">Peru</option>
<option data-name="Philippines" value="23424934">Philippines</option>
<option data-name="Pitcairn Islands" value="23424918">Pitcairn Islands</option>
<option data-name="Poland" value="23424923">Poland</option>
<option data-name="Portugal" value="23424925">Portugal</option>
<option data-name="Puerto Rico" value="23424935">Puerto Rico</option>
<option data-name="Qatar" value="23424930">Qatar</option>
<option data-name="Romania" value="23424933">Romania</option>
<option data-name="Russia" value="23424936">Russia</option>
<option data-name="Rwanda" value="23424937">Rwanda</option>
<option data-name="Réunion" value="23424931">Réunion</option>
<option data-name="Saint Barthélemy" value="56042304">Saint Barthélemy</option>
<option data-name="Saint Helena, Ascension and Tristan da Cunha" value="23424944">Saint Helena, Ascension and Tristan da Cunha</option>
<option data-name="Saint Kitts and Nevis" value="23424940">Saint Kitts and Nevis</option>
<option data-name="Saint Lucia" value="23424951">Saint Lucia</option>
<option data-name="Saint Martin (French part)" value="56042305">Saint Martin (French part)</option>
<option data-name="Saint Pierre and Miquelon" value="23424939">Saint Pierre and Miquelon</option>
<option data-name="Saint Vincent and the Grenadines" value="23424981">Saint Vincent and the Grenadines</option>
<option data-name="Samoa" value="23424992">Samoa</option>
<option data-name="San Marino" value="23424947">San Marino</option>
<option data-name="Sao Tome and Principe" value="23424966">Sao Tome and Principe</option>
<option data-name="Saudi Arabia" value="23424938">Saudi Arabia</option>
<option data-name="Senegal" value="23424943">Senegal</option>
<option data-name="Serbia" value="20069818">Serbia</option>
<option data-name="Seychelles" value="23424941">Seychelles</option>
<option data-name="Sierra Leone" value="23424946">Sierra Leone</option>
<option data-name="Singapore" value="23424948">Singapore</option>
<option data-name="Sint Maarten (Dutch part)" value="56558058">Sint Maarten (Dutch part)</option>
<option data-name="Slovakia" value="23424877">Slovakia</option>
<option data-name="Slovenia" value="23424945">Slovenia</option>
<option data-name="Solomon Islands" value="23424766">Solomon Islands</option>
<option data-name="Somalia" value="23424949">Somalia</option>
<option data-name="South Africa" value="23424942">South Africa</option>
<option data-name="South Georgia and the South Sandwich Islands" value="23424955">South Georgia and the South Sandwich Islands</option>
<option data-name="South Korea" value="23424868">South Korea</option>
<option data-name="Spain" value="23424950">Spain</option>
<option data-name="Spratly Islands" value="23424921">Spratly Islands</option>
<option data-name="Sri Lanka" value="23424778">Sri Lanka</option>
<option data-name="Sudan" value="23424952">Sudan</option>
<option data-name="Suriname" value="23424913">Suriname</option>
<option data-name="Svalbard and Jan Mayen" value="28289413">Svalbard and Jan Mayen</option>
<option data-name="Swaziland" value="23424993">Swaziland</option>
<option data-name="Sweden" value="23424954">Sweden</option>
<option data-name="Switzerland" value="23424957">Switzerland</option>
<option data-name="Taiwan" value="23424971">Taiwan</option>
<option data-name="Tajikistan" value="23424961">Tajikistan</option>
<option data-name="Tanzania, United Republic of" value="23424973">Tanzania, United Republic of</option>
<option data-name="Thailand" value="23424960">Thailand</option>
<option data-name="The Bahamas" value="23424758">The Bahamas</option>
<option data-name="Togo" value="23424965">Togo</option>
<option data-name="Tokelau" value="23424963">Tokelau</option>
<option data-name="Tonga" value="23424964">Tonga</option>
<option data-name="Trinidad and Tobago" value="23424958">Trinidad and Tobago</option>
<option data-name="Tunisia" value="23424967">Tunisia</option>
<option data-name="Turkey" value="23424969">Turkey</option>
<option data-name="Turkmenistan" value="23424972">Turkmenistan</option>
<option data-name="Turks and Caicos Islands" value="23424962">Turks and Caicos Islands</option>
<option data-name="Tuvalu" value="23424970">Tuvalu</option>
<option data-name="Uganda" value="23424974">Uganda</option>
<option data-name="Ukraine" value="23424976">Ukraine</option>
<option data-name="United Arab Emirates" value="23424738">United Arab Emirates</option>
<option data-name="United Kingdom" value="23424975">United Kingdom</option>
<option data-name="United Nations Neutral Zone" value="23424997">United Nations Neutral Zone</option>
<option data-name="United States" value="23424977">United States</option>
<option data-name="United States Minor Outlying Islands" value="28289407">United States Minor Outlying Islands</option>
<option data-name="Uruguay" value="23424979">Uruguay</option>
<option data-name="Uzbekistan" value="23424980">Uzbekistan</option>
<option data-name="Vanuatu" value="23424907">Vanuatu</option>
<option data-name="Venezuela" value="23424982">Venezuela</option>
<option data-name="Vietnam" value="23424984">Vietnam</option>
<option data-name="Virgin Islands, U.S." value="23424985">Virgin Islands, U.S.</option>
<option data-name="Wallis and Futuna" value="23424989">Wallis and Futuna</option>
<option data-name="Western Sahara" value="23424990">Western Sahara</option>
<option data-name="Yemen" value="23425002">Yemen</option>
<option data-name="Zambia" value="23425003">Zambia</option>
<option data-name="Zimbabwe" value="23425004">Zimbabwe</option></select>

<svg class="svg-icon__delta-down icon-14" aria-hidden="true"><use xlink:href="#delta-down"></use></svg>
</div>
</div>
<div class="form-group">
<label>Pledge amount</label>
<div id="multiple-reward-pledge-amount-2542641">
<div class="new-form__amount new-form__amount--symbol"><input class="new-form__input--numbers form-control js-form-input text" value="100" type="text" name="backing[amount]" id="backing_amount" /><div class="new-form__currency-box"><span class="new-form__currency-box__text">$</span></div></div>
</div>
<input name="backing[backer_reward_id]" type="hidden" value="2542641">
<input name="clicked_reward" type="hidden" value="true">
</div>
<div class="pledge__continue js-continue">
<button class="bttn bttn-primary theme--create bttn-medium w100p pledge__button">
<span class="btn-text">
Continue
</span>
</button>
</div>
<div class="pledge__applepay js-applepay">
<button class="btn btn--applepay btn--block js-applepay-button" role="button" tabindex="1">
<span class="btn-text"></span>
<div class="loader-dots">
<svg version="1.1" viewBox="0 0 56 16" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
<g>
<circle class="loader-dot-1" cx="8" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-2" cx="28" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.33s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-3" cx="48" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.66s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
</g>
</svg>
</div>

</button>
<button class="btn btn--another-payment-method btn--like-text btn--block mt1" role="button" tabindex="2">
<span class="btn-text">
Other payment options
<svg class="svg-icon__arrow-right" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
</span>
</button>
<p class="f6 center p0 m0">
By pledging you agree to Kickstarter\'s <a class="popup" target="_blank" href="/terms-of-use">Terms of Use</a>, <a class="popup" target="_blank" href="/privacy">Privacy Policy</a>, and <a class="popup" target="_blank" href="/cookies">Cookie Policy</a>.

</p>
</div>
</div>
<div class="pledge__accountability js-pledge__accountability">
<h6 class="f6">
Kickstarter is not a store.
</h6>
<p class="f6 normal">
It\'s a way to bring creative projects to life.
</p>
<a class="f6 normal mb0" href="/trust?ref=project_reward">Learn more about accountability.</a>
</div>
</form>



</li>
<li class="hover-group pledge--inactive pledge-selectable-sidebar" data-reward-id="2563846">
<div class="pledge__hover hover-zoomout">
<div class="pledge__hover-content">
<p>Select this reward</p>
</div>
</div>
<div class="pledge__info">
<h2 class="pledge__amount">
Pledge <span class="money">US$ 150</span> or more
<span class="pledge__currency-conversion">
About <span>US$ 150</span>
</span>
</h2>
<div class="pledge__reward-description pledge__reward-description--expanded">
<p>SEED TO PLATE FARMHOUSE DINNER					
<br />Join us for a 5 course farmhouse dinner at the local Springdale farm prepared by Good Seed and talented Austin chef Gabe Erales.  Gabe has worked at some of the best restaurants in town including Odd Duck, Barley Swine, and La Condesa.  We will work with Gabe to create an unforgettable dining experience sourced from local farms and food artisans.</p>

<a class="pledge__reward-description-toggle js-desc-toggle hide" href="#" role="button">
<span>Less</span>
</a>
</div>
<div class="pledge__extra-info">
<div class="pledge__detail">
<span class="pledge__detail-label">Estimated delivery</span>
<span class="pledge__detail-info"><time datetime="2014-10-01" data-format="MMM YYYY" class="invisible-if-js js-adjust-time">Oct 2014</time></span>
</div>
</div>
<div class="pledge__backer-stats">
<div class="flex flex-wrap">
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-support-100">
3 backers
</div>

</div>
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-celebrate-100">
Limited (37 left of 40)
</div>

</div>
</div>
</div>

</div>

<form class="NS_pledges__shipping_select js-form-wrapper new-form new-form--block pledge__checkout " action="/projects/1452363698/good-seed-craft-veggie-burgers/pledge" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="pledge__checkout-form">
<div class="form-group">
<label>Pledge amount</label>
<div id="multiple-reward-pledge-amount-2563846">
<div class="new-form__amount new-form__amount--symbol"><input class="new-form__input--numbers form-control js-form-input text" value="150" type="text" name="backing[amount]" id="backing_amount" /><div class="new-form__currency-box"><span class="new-form__currency-box__text">$</span></div></div>
</div>
<input name="backing[backer_reward_id]" type="hidden" value="2563846">
<input name="clicked_reward" type="hidden" value="true">
</div>
<div class="pledge__continue js-continue">
<button class="bttn bttn-primary theme--create bttn-medium w100p pledge__button">
<span class="btn-text">
Continue
</span>
</button>
</div>
<div class="pledge__applepay js-applepay">
<button class="btn btn--applepay btn--block js-applepay-button" role="button" tabindex="1">
<span class="btn-text"></span>
<div class="loader-dots">
<svg version="1.1" viewBox="0 0 56 16" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
<g>
<circle class="loader-dot-1" cx="8" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-2" cx="28" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.33s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-3" cx="48" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.66s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
</g>
</svg>
</div>

</button>
<button class="btn btn--another-payment-method btn--like-text btn--block mt1" role="button" tabindex="2">
<span class="btn-text">
Other payment options
<svg class="svg-icon__arrow-right" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
</span>
</button>
<p class="f6 center p0 m0">
By pledging you agree to Kickstarter\'s <a class="popup" target="_blank" href="/terms-of-use">Terms of Use</a>, <a class="popup" target="_blank" href="/privacy">Privacy Policy</a>, and <a class="popup" target="_blank" href="/cookies">Cookie Policy</a>.

</p>
</div>
</div>
<div class="pledge__accountability js-pledge__accountability">
<h6 class="f6">
Kickstarter is not a store.
</h6>
<p class="f6 normal">
It\'s a way to bring creative projects to life.
</p>
<a class="f6 normal mb0" href="/trust?ref=project_reward">Learn more about accountability.</a>
</div>
</form>



</li>
<li class="hover-group pledge--inactive pledge-selectable-sidebar" data-reward-id="2542894">
<div class="pledge__hover hover-zoomout">
<div class="pledge__hover-content">
<p>Select this reward</p>
</div>
</div>
<div class="pledge__info">
<h2 class="pledge__amount">
Pledge <span class="money">US$ 200</span> or more
<span class="pledge__currency-conversion">
About <span>US$ 200</span>
</span>
</h2>
<div class="pledge__reward-description pledge__reward-description--expanded">
<p>TASTE OF AUSTIN SUPERFOOD + SWAG PACK
<br />Austin Superfood Pack plus one of all swag: t-shirt, hoodie, stainless steel water bottle, and Good Seed tote bag.  Please add the proper shipping cost when completing your pledge. 
<br />Shipping requires 2 day air because our burgers are frozen.  Local Austin residents get pick up or free delivery.  Residents of AZ, UT, WY, MT, ND, SD, MN, IA, WI, MI, IN, OH, KY, WV, VA, NC, SC, GA, FL, CO,IL add $54 for shipping     Residents of WA, OR, NV, CA, NY, CT, RI, MA, ME, VT, HI, AL  add $60.  All other states add $12.</p>

<a class="pledge__reward-description-toggle js-desc-toggle hide" href="#" role="button">
<span>Less</span>
</a>
</div>
<div class="pledge__extra-info">
<div class="pledge__detail">
<span class="pledge__detail-label">Estimated delivery</span>
<span class="pledge__detail-info"><time datetime="2014-08-01" data-format="MMM YYYY" class="invisible-if-js js-adjust-time">Aug 2014</time></span>
</div>
<div class="pledge__detail">
<span class="pledge__detail-label">Ships to</span>
<span class="pledge__detail-info">Only United States</span>
</div>
</div>
<div class="pledge__backer-stats">
<div class="flex flex-wrap">
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-support-100">
0 backers
</div>

</div>
</div>
</div>

</div>

<form class="NS_pledges__shipping_select js-form-wrapper new-form new-form--block pledge__checkout pledge__checkout--with-shipping" action="/projects/1452363698/good-seed-craft-veggie-burgers/pledge" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="pledge__checkout-form">
<div class="form-group" id="shipping-select-4441911">
<label for="backing_location_id">Shipping destination</label>
<div class="ksr-select js-ksr-select" role="button" tabindex="-1">
<div class="title"></div>
<select name="backing[location_id]" id="backing_location_id" class="select"><option value="">Select a country:</option><option data-name="Afghanistan" value="23424739">Afghanistan</option>
<option data-name="Aland Islands" value="12577865">Aland Islands</option>
<option data-name="Albania" value="23424742">Albania</option>
<option data-name="Algeria" value="23424740">Algeria</option>
<option data-name="American Samoa" value="23424746">American Samoa</option>
<option data-name="Andorra" value="23424744">Andorra</option>
<option data-name="Angola" value="23424745">Angola</option>
<option data-name="Anguilla" value="23424751">Anguilla</option>
<option data-name="Antarctica" value="28289409">Antarctica</option>
<option data-name="Antigua and Barbuda" value="23424737">Antigua and Barbuda</option>
<option data-name="Argentina" value="23424747">Argentina</option>
<option data-name="Armenia" value="23424743">Armenia</option>
<option data-name="Aruba" value="23424736">Aruba</option>
<option data-name="Australia" value="23424748">Australia</option>
<option data-name="Austria" value="23424750">Austria</option>
<option data-name="Azerbaijan" value="23424741">Azerbaijan</option>
<option data-name="Bahrain" value="23424753">Bahrain</option>
<option data-name="Bangladesh" value="23424759">Bangladesh</option>
<option data-name="Barbados" value="23424754">Barbados</option>
<option data-name="Belarus" value="23424765">Belarus</option>
<option data-name="Belgium" value="23424757">Belgium</option>
<option data-name="Belize" value="23424760">Belize</option>
<option data-name="Benin" value="23424764">Benin</option>
<option data-name="Bermuda" value="23424756">Bermuda</option>
<option data-name="Bhutan" value="23424770">Bhutan</option>
<option data-name="Bolivia" value="23424762">Bolivia</option>
<option data-name="Bosnia and Herzegovina" value="23424761">Bosnia and Herzegovina</option>
<option data-name="Botswana" value="23424755">Botswana</option>
<option data-name="Bouvet Island" value="28289410">Bouvet Island</option>
<option data-name="Brazil" value="23424768">Brazil</option>
<option data-name="British Indian Ocean Territory" value="23424849">British Indian Ocean Territory</option>
<option data-name="British Virgin Islands" value="23424983">British Virgin Islands</option>
<option data-name="Brunei" value="23424773">Brunei</option>
<option data-name="Bulgaria" value="23424771">Bulgaria</option>
<option data-name="Burkina Faso" value="23424978">Burkina Faso</option>
<option data-name="Burundi" value="23424774">Burundi</option>
<option data-name="Cambodia" value="23424776">Cambodia</option>
<option data-name="Cameroon" value="23424785">Cameroon</option>
<option data-name="Canada" value="23424775">Canada</option>
<option data-name="Cape Verde" value="23424794">Cape Verde</option>
<option data-name="Caribbean Netherlands" value="56558056">Caribbean Netherlands</option>
<option data-name="Cayman Islands" value="23424783">Cayman Islands</option>
<option data-name="Central African Republic" value="23424792">Central African Republic</option>
<option data-name="Chad" value="23424777">Chad</option>
<option data-name="Chile" value="23424782">Chile</option>
<option data-name="China" value="23424781">China</option>
<option data-name="Christmas Island" value="23424869">Christmas Island</option>
<option data-name="Cocos (Keeling) Islands" value="23424784">Cocos (Keeling) Islands</option>
<option data-name="Colombia" value="23424787">Colombia</option>
<option data-name="Comoros" value="23424786">Comoros</option>
<option data-name="Congo" value="23424779">Congo</option>
<option data-name="Cook Islands" value="23424795">Cook Islands</option>
<option data-name="Costa Rica" value="23424791">Costa Rica</option>
<option data-name="Croatia" value="23424843">Croatia</option>
<option data-name="Curaçao" value="56558057">Curaçao</option>
<option data-name="Cyprus" value="26812346">Cyprus</option>
<option data-name="Czech Republic" value="23424810">Czech Republic</option>
<option data-name="Democratic Republic of Congo" value="23424780">Democratic Republic of Congo</option>
<option data-name="Denmark" value="23424796">Denmark</option>
<option data-name="Disputed Territory" value="23424928">Disputed Territory</option>
<option data-name="Djibouti" value="23424797">Djibouti</option>
<option data-name="Dominica" value="23424798">Dominica</option>
<option data-name="Dominican Republic" value="23424800">Dominican Republic</option>
<option data-name="East Timor" value="23424968">East Timor</option>
<option data-name="Ecuador" value="23424801">Ecuador</option>
<option data-name="Egypt" value="23424802">Egypt</option>
<option data-name="El Salvador" value="23424807">El Salvador</option>
<option data-name="Equatorial Guinea" value="23424804">Equatorial Guinea</option>
<option data-name="Eritrea" value="23424806">Eritrea</option>
<option data-name="Estonia" value="23424805">Estonia</option>
<option data-name="Ethiopia" value="23424808">Ethiopia</option>
<option data-name="Falkland Islands" value="23424814">Falkland Islands</option>
<option data-name="Faroe Islands" value="23424816">Faroe Islands</option>
<option data-name="Federated States of Micronesia" value="23424815">Federated States of Micronesia</option>
<option data-name="Fiji" value="23424813">Fiji</option>
<option data-name="Finland" value="23424812">Finland</option>
<option data-name="France" value="23424819">France</option>
<option data-name="French Guiana" value="23424811">French Guiana</option>
<option data-name="French Polynesia" value="23424817">French Polynesia</option>
<option data-name="French Southern Territories" value="28289406">French Southern Territories</option>
<option data-name="Gabon" value="23424822">Gabon</option>
<option data-name="Gambia" value="23424821">Gambia</option>
<option data-name="Georgia" value="23424823">Georgia</option>
<option data-name="Germany" value="23424829">Germany</option>
<option data-name="Ghana" value="23424824">Ghana</option>
<option data-name="Gibraltar" value="23424825">Gibraltar</option>
<option data-name="Greece" value="23424833">Greece</option>
<option data-name="Greenland" value="23424828">Greenland</option>
<option data-name="Grenada" value="23424826">Grenada</option>
<option data-name="Guadeloupe" value="23424831">Guadeloupe</option>
<option data-name="Guam" value="23424832">Guam</option>
<option data-name="Guatemala" value="23424834">Guatemala</option>
<option data-name="Guinea" value="23424835">Guinea</option>
<option data-name="Guinea-Bissau" value="23424929">Guinea-Bissau</option>
<option data-name="Guyana" value="23424836">Guyana</option>
<option data-name="Haiti" value="23424839">Haiti</option>
<option data-name="Heard Island and McDonald Islands" value="28289411">Heard Island and McDonald Islands</option>
<option data-name="Holy See (Vatican City State)" value="23424986">Holy See (Vatican City State)</option>
<option data-name="Honduras" value="23424841">Honduras</option>
<option data-name="Hong Kong" value="24865698">Hong Kong</option>
<option data-name="Hungary" value="23424844">Hungary</option>
<option data-name="Iceland" value="23424845">Iceland</option>
<option data-name="India" value="23424848">India</option>
<option data-name="Indonesia" value="23424846">Indonesia</option>
<option data-name="Iraq" value="23424855">Iraq</option>
<option data-name="Iraq-Saudi Arabia Neutral Zone" value="23424998">Iraq-Saudi Arabia Neutral Zone</option>
<option data-name="Ireland" value="23424803">Ireland</option>
<option data-name="Israel" value="23424852">Israel</option>
<option data-name="Italy" value="23424853">Italy</option>
<option data-name="Ivory Coast" value="23424854">Ivory Coast</option>
<option data-name="Jamaica" value="23424858">Jamaica</option>
<option data-name="Japan" value="23424856">Japan</option>
<option data-name="Jordan" value="23424860">Jordan</option>
<option data-name="Kazakhstan" value="23424871">Kazakhstan</option>
<option data-name="Kenya" value="23424863">Kenya</option>
<option data-name="Kiribati" value="23424867">Kiribati</option>
<option data-name="Kosovo" value="29389201">Kosovo</option>
<option data-name="Kuwait" value="23424870">Kuwait</option>
<option data-name="Kyrgyzstan" value="23424864">Kyrgyzstan</option>
<option data-name="Laos" value="23424872">Laos</option>
<option data-name="Latvia" value="23424874">Latvia</option>
<option data-name="Lebanon" value="23424873">Lebanon</option>
<option data-name="Lesotho" value="23424880">Lesotho</option>
<option data-name="Liberia" value="23424876">Liberia</option>
<option data-name="Libya" value="23424882">Libya</option>
<option data-name="Liechtenstein" value="23424879">Liechtenstein</option>
<option data-name="Lithuania" value="23424875">Lithuania</option>
<option data-name="Luxembourg" value="23424881">Luxembourg</option>
<option data-name="Macao" value="20070017">Macao</option>
<option data-name="Macedonia" value="23424890">Macedonia</option>
<option data-name="Madagascar" value="23424883">Madagascar</option>
<option data-name="Malawi" value="23424889">Malawi</option>
<option data-name="Malaysia" value="23424901">Malaysia</option>
<option data-name="Maldives" value="23424899">Maldives</option>
<option data-name="Mali" value="23424891">Mali</option>
<option data-name="Malta" value="23424897">Malta</option>
<option data-name="Marshall Islands" value="23424932">Marshall Islands</option>
<option data-name="Martinique" value="23424884">Martinique</option>
<option data-name="Mauritania" value="23424896">Mauritania</option>
<option data-name="Mauritius" value="23424894">Mauritius</option>
<option data-name="Mayotte" value="23424886">Mayotte</option>
<option data-name="Mexico" value="23424900">Mexico</option>
<option data-name="Moldova" value="23424885">Moldova</option>
<option data-name="Monaco" value="23424892">Monaco</option>
<option data-name="Mongolia" value="23424887">Mongolia</option>
<option data-name="Montenegro" value="20069817">Montenegro</option>
<option data-name="Montserrat" value="23424888">Montserrat</option>
<option data-name="Morocco" value="23424893">Morocco</option>
<option data-name="Mozambique" value="23424902">Mozambique</option>
<option data-name="Myanmar" value="23424763">Myanmar</option>
<option data-name="Namibia" value="23424987">Namibia</option>
<option data-name="Nauru" value="23424912">Nauru</option>
<option data-name="Nepal" value="23424911">Nepal</option>
<option data-name="Netherlands" value="23424909">Netherlands</option>
<option data-name="New Caledonia" value="23424903">New Caledonia</option>
<option data-name="New Zealand" value="23424916">New Zealand</option>
<option data-name="Nicaragua" value="23424915">Nicaragua</option>
<option data-name="Niger" value="23424906">Niger</option>
<option data-name="Nigeria" value="23424908">Nigeria</option>
<option data-name="Niue" value="23424904">Niue</option>
<option data-name="Norfolk Island" value="23424905">Norfolk Island</option>
<option data-name="Northern Mariana Islands" value="23424788">Northern Mariana Islands</option>
<option data-name="Norway" value="23424910">Norway</option>
<option data-name="Oman" value="23424898">Oman</option>
<option data-name="Pakistan" value="23424922">Pakistan</option>
<option data-name="Palau" value="23424927">Palau</option>
<option data-name="Palestine" value="28289408">Palestine</option>
<option data-name="Panama" value="23424924">Panama</option>
<option data-name="Papua New Guinea" value="23424926">Papua New Guinea</option>
<option data-name="Paraguay" value="23424917">Paraguay</option>
<option data-name="Peru" value="23424919">Peru</option>
<option data-name="Philippines" value="23424934">Philippines</option>
<option data-name="Pitcairn Islands" value="23424918">Pitcairn Islands</option>
<option data-name="Poland" value="23424923">Poland</option>
<option data-name="Portugal" value="23424925">Portugal</option>
<option data-name="Puerto Rico" value="23424935">Puerto Rico</option>
<option data-name="Qatar" value="23424930">Qatar</option>
<option data-name="Romania" value="23424933">Romania</option>
<option data-name="Russia" value="23424936">Russia</option>
<option data-name="Rwanda" value="23424937">Rwanda</option>
<option data-name="Réunion" value="23424931">Réunion</option>
<option data-name="Saint Barthélemy" value="56042304">Saint Barthélemy</option>
<option data-name="Saint Helena, Ascension and Tristan da Cunha" value="23424944">Saint Helena, Ascension and Tristan da Cunha</option>
<option data-name="Saint Kitts and Nevis" value="23424940">Saint Kitts and Nevis</option>
<option data-name="Saint Lucia" value="23424951">Saint Lucia</option>
<option data-name="Saint Martin (French part)" value="56042305">Saint Martin (French part)</option>
<option data-name="Saint Pierre and Miquelon" value="23424939">Saint Pierre and Miquelon</option>
<option data-name="Saint Vincent and the Grenadines" value="23424981">Saint Vincent and the Grenadines</option>
<option data-name="Samoa" value="23424992">Samoa</option>
<option data-name="San Marino" value="23424947">San Marino</option>
<option data-name="Sao Tome and Principe" value="23424966">Sao Tome and Principe</option>
<option data-name="Saudi Arabia" value="23424938">Saudi Arabia</option>
<option data-name="Senegal" value="23424943">Senegal</option>
<option data-name="Serbia" value="20069818">Serbia</option>
<option data-name="Seychelles" value="23424941">Seychelles</option>
<option data-name="Sierra Leone" value="23424946">Sierra Leone</option>
<option data-name="Singapore" value="23424948">Singapore</option>
<option data-name="Sint Maarten (Dutch part)" value="56558058">Sint Maarten (Dutch part)</option>
<option data-name="Slovakia" value="23424877">Slovakia</option>
<option data-name="Slovenia" value="23424945">Slovenia</option>
<option data-name="Solomon Islands" value="23424766">Solomon Islands</option>
<option data-name="Somalia" value="23424949">Somalia</option>
<option data-name="South Africa" value="23424942">South Africa</option>
<option data-name="South Georgia and the South Sandwich Islands" value="23424955">South Georgia and the South Sandwich Islands</option>
<option data-name="South Korea" value="23424868">South Korea</option>
<option data-name="Spain" value="23424950">Spain</option>
<option data-name="Spratly Islands" value="23424921">Spratly Islands</option>
<option data-name="Sri Lanka" value="23424778">Sri Lanka</option>
<option data-name="Sudan" value="23424952">Sudan</option>
<option data-name="Suriname" value="23424913">Suriname</option>
<option data-name="Svalbard and Jan Mayen" value="28289413">Svalbard and Jan Mayen</option>
<option data-name="Swaziland" value="23424993">Swaziland</option>
<option data-name="Sweden" value="23424954">Sweden</option>
<option data-name="Switzerland" value="23424957">Switzerland</option>
<option data-name="Taiwan" value="23424971">Taiwan</option>
<option data-name="Tajikistan" value="23424961">Tajikistan</option>
<option data-name="Tanzania, United Republic of" value="23424973">Tanzania, United Republic of</option>
<option data-name="Thailand" value="23424960">Thailand</option>
<option data-name="The Bahamas" value="23424758">The Bahamas</option>
<option data-name="Togo" value="23424965">Togo</option>
<option data-name="Tokelau" value="23424963">Tokelau</option>
<option data-name="Tonga" value="23424964">Tonga</option>
<option data-name="Trinidad and Tobago" value="23424958">Trinidad and Tobago</option>
<option data-name="Tunisia" value="23424967">Tunisia</option>
<option data-name="Turkey" value="23424969">Turkey</option>
<option data-name="Turkmenistan" value="23424972">Turkmenistan</option>
<option data-name="Turks and Caicos Islands" value="23424962">Turks and Caicos Islands</option>
<option data-name="Tuvalu" value="23424970">Tuvalu</option>
<option data-name="Uganda" value="23424974">Uganda</option>
<option data-name="Ukraine" value="23424976">Ukraine</option>
<option data-name="United Arab Emirates" value="23424738">United Arab Emirates</option>
<option data-name="United Kingdom" value="23424975">United Kingdom</option>
<option data-name="United Nations Neutral Zone" value="23424997">United Nations Neutral Zone</option>
<option data-name="United States" value="23424977">United States</option>
<option data-name="United States Minor Outlying Islands" value="28289407">United States Minor Outlying Islands</option>
<option data-name="Uruguay" value="23424979">Uruguay</option>
<option data-name="Uzbekistan" value="23424980">Uzbekistan</option>
<option data-name="Vanuatu" value="23424907">Vanuatu</option>
<option data-name="Venezuela" value="23424982">Venezuela</option>
<option data-name="Vietnam" value="23424984">Vietnam</option>
<option data-name="Virgin Islands, U.S." value="23424985">Virgin Islands, U.S.</option>
<option data-name="Wallis and Futuna" value="23424989">Wallis and Futuna</option>
<option data-name="Western Sahara" value="23424990">Western Sahara</option>
<option data-name="Yemen" value="23425002">Yemen</option>
<option data-name="Zambia" value="23425003">Zambia</option>
<option data-name="Zimbabwe" value="23425004">Zimbabwe</option></select>

<svg class="svg-icon__delta-down icon-14" aria-hidden="true"><use xlink:href="#delta-down"></use></svg>
</div>
</div>
<div class="form-group">
<label>Pledge amount</label>
<div id="multiple-reward-pledge-amount-2542894">
<div class="new-form__amount new-form__amount--symbol"><input class="new-form__input--numbers form-control js-form-input text" value="200" type="text" name="backing[amount]" id="backing_amount" /><div class="new-form__currency-box"><span class="new-form__currency-box__text">$</span></div></div>
</div>
<input name="backing[backer_reward_id]" type="hidden" value="2542894">
<input name="clicked_reward" type="hidden" value="true">
</div>
<div class="pledge__continue js-continue">
<button class="bttn bttn-primary theme--create bttn-medium w100p pledge__button">
<span class="btn-text">
Continue
</span>
</button>
</div>
<div class="pledge__applepay js-applepay">
<button class="btn btn--applepay btn--block js-applepay-button" role="button" tabindex="1">
<span class="btn-text"></span>
<div class="loader-dots">
<svg version="1.1" viewBox="0 0 56 16" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
<g>
<circle class="loader-dot-1" cx="8" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-2" cx="28" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.33s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-3" cx="48" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.66s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
</g>
</svg>
</div>

</button>
<button class="btn btn--another-payment-method btn--like-text btn--block mt1" role="button" tabindex="2">
<span class="btn-text">
Other payment options
<svg class="svg-icon__arrow-right" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
</span>
</button>
<p class="f6 center p0 m0">
By pledging you agree to Kickstarter\'s <a class="popup" target="_blank" href="/terms-of-use">Terms of Use</a>, <a class="popup" target="_blank" href="/privacy">Privacy Policy</a>, and <a class="popup" target="_blank" href="/cookies">Cookie Policy</a>.

</p>
</div>
</div>
<div class="pledge__accountability js-pledge__accountability">
<h6 class="f6">
Kickstarter is not a store.
</h6>
<p class="f6 normal">
It\'s a way to bring creative projects to life.
</p>
<a class="f6 normal mb0" href="/trust?ref=project_reward">Learn more about accountability.</a>
</div>
</form>



</li>
<li class="hover-group pledge--inactive pledge-selectable-sidebar" data-reward-id="2542895">
<div class="pledge__hover hover-zoomout">
<div class="pledge__hover-content">
<p>Select this reward</p>
</div>
</div>
<div class="pledge__info">
<h2 class="pledge__amount">
Pledge <span class="money">US$ 260</span> or more
<span class="pledge__currency-conversion">
About <span>US$ 260</span>
</span>
</h2>
<div class="pledge__reward-description pledge__reward-description--expanded">
<p>512 BREWERY TOUR + BURGER PARTY 
<br />You and a guest are invited to enjoy a tour and burger party at 512 Brewing.  If you are a fan of craft burgers and local artisinal foods, you will not want to miss this!   We will provide cheese selections from Antoinele&#39;s Cheese Shop.  Each person will receive a Good Seed gift basket including 512 and Good Seed pint glasses, Good Seed tote, and t-shirts (value $80).</p>

<a class="pledge__reward-description-toggle js-desc-toggle hide" href="#" role="button">
<span>Less</span>
</a>
</div>
<div class="pledge__extra-info">
<div class="pledge__detail">
<span class="pledge__detail-label">Estimated delivery</span>
<span class="pledge__detail-info"><time datetime="2014-10-01" data-format="MMM YYYY" class="invisible-if-js js-adjust-time">Oct 2014</time></span>
</div>
</div>
<div class="pledge__backer-stats">
<div class="flex flex-wrap">
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-support-100">
1 backer
</div>

</div>
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-celebrate-100">
Limited (34 left of 35)
</div>

</div>
</div>
</div>

</div>

<form class="NS_pledges__shipping_select js-form-wrapper new-form new-form--block pledge__checkout " action="/projects/1452363698/good-seed-craft-veggie-burgers/pledge" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="pledge__checkout-form">
<div class="form-group">
<label>Pledge amount</label>
<div id="multiple-reward-pledge-amount-2542895">
<div class="new-form__amount new-form__amount--symbol"><input class="new-form__input--numbers form-control js-form-input text" value="260" type="text" name="backing[amount]" id="backing_amount" /><div class="new-form__currency-box"><span class="new-form__currency-box__text">$</span></div></div>
</div>
<input name="backing[backer_reward_id]" type="hidden" value="2542895">
<input name="clicked_reward" type="hidden" value="true">
</div>
<div class="pledge__continue js-continue">
<button class="bttn bttn-primary theme--create bttn-medium w100p pledge__button">
<span class="btn-text">
Continue
</span>
</button>
</div>
<div class="pledge__applepay js-applepay">
<button class="btn btn--applepay btn--block js-applepay-button" role="button" tabindex="1">
<span class="btn-text"></span>
<div class="loader-dots">
<svg version="1.1" viewBox="0 0 56 16" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
<g>
<circle class="loader-dot-1" cx="8" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-2" cx="28" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.33s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-3" cx="48" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.66s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
</g>
</svg>
</div>

</button>
<button class="btn btn--another-payment-method btn--like-text btn--block mt1" role="button" tabindex="2">
<span class="btn-text">
Other payment options
<svg class="svg-icon__arrow-right" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
</span>
</button>
<p class="f6 center p0 m0">
By pledging you agree to Kickstarter\'s <a class="popup" target="_blank" href="/terms-of-use">Terms of Use</a>, <a class="popup" target="_blank" href="/privacy">Privacy Policy</a>, and <a class="popup" target="_blank" href="/cookies">Cookie Policy</a>.

</p>
</div>
</div>
<div class="pledge__accountability js-pledge__accountability">
<h6 class="f6">
Kickstarter is not a store.
</h6>
<p class="f6 normal">
It\'s a way to bring creative projects to life.
</p>
<a class="f6 normal mb0" href="/trust?ref=project_reward">Learn more about accountability.</a>
</div>
</form>



</li>
<li class="hover-group pledge--inactive pledge-selectable-sidebar" data-reward-id="2563844">
<div class="pledge__hover hover-zoomout">
<div class="pledge__hover-content">
<p>Select this reward</p>
</div>
</div>
<div class="pledge__info">
<h2 class="pledge__amount">
Pledge <span class="money">US$ 500</span> or more
<span class="pledge__currency-conversion">
About <span>US$ 500</span>
</span>
</h2>
<div class="pledge__reward-description pledge__reward-description--expanded">
<p>PIZZA PARTY!! 				
<br />You and 15-20 friends will enjoy a pizza party with some of the best pizza in town, loaded with Good Seed sausage and other locally sourced fresh toppings!	 The party will be held at The ABGB (Austin Beer Garden Brewery) a popular 	Austin brewpub in your own reserved party area.  Gluten free and vegan options available. Good Seed pint cups included. Pick your date and stick around for some great live music!</p>

<a class="pledge__reward-description-toggle js-desc-toggle hide" href="#" role="button">
<span>Less</span>
</a>
</div>
<div class="pledge__extra-info">
<div class="pledge__detail">
<span class="pledge__detail-label">Estimated delivery</span>
<span class="pledge__detail-info"><time datetime="2014-08-01" data-format="MMM YYYY" class="invisible-if-js js-adjust-time">Aug 2014</time></span>
</div>
</div>
<div class="pledge__backer-stats">
<div class="flex flex-wrap">
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-support-100">
0 backers
</div>

</div>
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-celebrate-100">
Limited (5 left of 5)
</div>

</div>
</div>
</div>

</div>

<form class="NS_pledges__shipping_select js-form-wrapper new-form new-form--block pledge__checkout " action="/projects/1452363698/good-seed-craft-veggie-burgers/pledge" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="pledge__checkout-form">
<div class="form-group">
<label>Pledge amount</label>
<div id="multiple-reward-pledge-amount-2563844">
<div class="new-form__amount new-form__amount--symbol"><input class="new-form__input--numbers form-control js-form-input text" value="500" type="text" name="backing[amount]" id="backing_amount" /><div class="new-form__currency-box"><span class="new-form__currency-box__text">$</span></div></div>
</div>
<input name="backing[backer_reward_id]" type="hidden" value="2563844">
<input name="clicked_reward" type="hidden" value="true">
</div>
<div class="pledge__continue js-continue">
<button class="bttn bttn-primary theme--create bttn-medium w100p pledge__button">
<span class="btn-text">
Continue
</span>
</button>
</div>
<div class="pledge__applepay js-applepay">
<button class="btn btn--applepay btn--block js-applepay-button" role="button" tabindex="1">
<span class="btn-text"></span>
<div class="loader-dots">
<svg version="1.1" viewBox="0 0 56 16" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
<g>
<circle class="loader-dot-1" cx="8" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-2" cx="28" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.33s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-3" cx="48" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.66s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
</g>
</svg>
</div>

</button>
<button class="btn btn--another-payment-method btn--like-text btn--block mt1" role="button" tabindex="2">
<span class="btn-text">
Other payment options
<svg class="svg-icon__arrow-right" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
</span>
</button>
<p class="f6 center p0 m0">
By pledging you agree to Kickstarter\'s <a class="popup" target="_blank" href="/terms-of-use">Terms of Use</a>, <a class="popup" target="_blank" href="/privacy">Privacy Policy</a>, and <a class="popup" target="_blank" href="/cookies">Cookie Policy</a>.

</p>
</div>
</div>
<div class="pledge__accountability js-pledge__accountability">
<h6 class="f6">
Kickstarter is not a store.
</h6>
<p class="f6 normal">
It\'s a way to bring creative projects to life.
</p>
<a class="f6 normal mb0" href="/trust?ref=project_reward">Learn more about accountability.</a>
</div>
</form>



</li>
<li class="hover-group pledge--inactive pledge-selectable-sidebar" data-reward-id="2661506">
<div class="pledge__hover hover-zoomout">
<div class="pledge__hover-content">
<p>Select this reward</p>
</div>
</div>
<div class="pledge__info">
<h2 class="pledge__amount">
Pledge <span class="money">US$ 1,300</span> or more
<span class="pledge__currency-conversion">
About <span>US$ 1,300</span>
</span>
</h2>
<div class="pledge__reward-description pledge__reward-description--expanded">
<p>ONE OF EVERYTHING
<br />You get one of every reward including an 8 pack of Good Seed burgers, all Good Seed swag and all local products offered in our prize packs.  You are also invited to attend the brewery tour, come to our 5 course farmhouse dinner, and get your own ABGB pizza party.</p>

<a class="pledge__reward-description-toggle js-desc-toggle hide" href="#" role="button">
<span>Less</span>
</a>
</div>
<div class="pledge__extra-info">
<div class="pledge__detail">
<span class="pledge__detail-label">Estimated delivery</span>
<span class="pledge__detail-info"><time datetime="2014-08-01" data-format="MMM YYYY" class="invisible-if-js js-adjust-time">Aug 2014</time></span>
</div>
<div class="pledge__detail">
<span class="pledge__detail-label">Ships to</span>
<span class="pledge__detail-info">Only United States</span>
</div>
</div>
<div class="pledge__backer-stats">
<div class="flex flex-wrap">
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-support-100">
0 backers
</div>

</div>
<div class="mr1 mb1">
<div class="text-nowrap type-12 support-500 radius6px px2 py4px bg-celebrate-100">
Limited (5 left of 5)
</div>

</div>
</div>
</div>

</div>

<form class="NS_pledges__shipping_select js-form-wrapper new-form new-form--block pledge__checkout pledge__checkout--with-shipping" action="/projects/1452363698/good-seed-craft-veggie-burgers/pledge" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="pledge__checkout-form">
<div class="form-group" id="shipping-select-4441911">
<label for="backing_location_id">Shipping destination</label>
<div class="ksr-select js-ksr-select" role="button" tabindex="-1">
<div class="title"></div>
<select name="backing[location_id]" id="backing_location_id" class="select"><option value="">Select a country:</option><option data-name="Afghanistan" value="23424739">Afghanistan</option>
<option data-name="Aland Islands" value="12577865">Aland Islands</option>
<option data-name="Albania" value="23424742">Albania</option>
<option data-name="Algeria" value="23424740">Algeria</option>
<option data-name="American Samoa" value="23424746">American Samoa</option>
<option data-name="Andorra" value="23424744">Andorra</option>
<option data-name="Angola" value="23424745">Angola</option>
<option data-name="Anguilla" value="23424751">Anguilla</option>
<option data-name="Antarctica" value="28289409">Antarctica</option>
<option data-name="Antigua and Barbuda" value="23424737">Antigua and Barbuda</option>
<option data-name="Argentina" value="23424747">Argentina</option>
<option data-name="Armenia" value="23424743">Armenia</option>
<option data-name="Aruba" value="23424736">Aruba</option>
<option data-name="Australia" value="23424748">Australia</option>
<option data-name="Austria" value="23424750">Austria</option>
<option data-name="Azerbaijan" value="23424741">Azerbaijan</option>
<option data-name="Bahrain" value="23424753">Bahrain</option>
<option data-name="Bangladesh" value="23424759">Bangladesh</option>
<option data-name="Barbados" value="23424754">Barbados</option>
<option data-name="Belarus" value="23424765">Belarus</option>
<option data-name="Belgium" value="23424757">Belgium</option>
<option data-name="Belize" value="23424760">Belize</option>
<option data-name="Benin" value="23424764">Benin</option>
<option data-name="Bermuda" value="23424756">Bermuda</option>
<option data-name="Bhutan" value="23424770">Bhutan</option>
<option data-name="Bolivia" value="23424762">Bolivia</option>
<option data-name="Bosnia and Herzegovina" value="23424761">Bosnia and Herzegovina</option>
<option data-name="Botswana" value="23424755">Botswana</option>
<option data-name="Bouvet Island" value="28289410">Bouvet Island</option>
<option data-name="Brazil" value="23424768">Brazil</option>
<option data-name="British Indian Ocean Territory" value="23424849">British Indian Ocean Territory</option>
<option data-name="British Virgin Islands" value="23424983">British Virgin Islands</option>
<option data-name="Brunei" value="23424773">Brunei</option>
<option data-name="Bulgaria" value="23424771">Bulgaria</option>
<option data-name="Burkina Faso" value="23424978">Burkina Faso</option>
<option data-name="Burundi" value="23424774">Burundi</option>
<option data-name="Cambodia" value="23424776">Cambodia</option>
<option data-name="Cameroon" value="23424785">Cameroon</option>
<option data-name="Canada" value="23424775">Canada</option>
<option data-name="Cape Verde" value="23424794">Cape Verde</option>
<option data-name="Caribbean Netherlands" value="56558056">Caribbean Netherlands</option>
<option data-name="Cayman Islands" value="23424783">Cayman Islands</option>
<option data-name="Central African Republic" value="23424792">Central African Republic</option>
<option data-name="Chad" value="23424777">Chad</option>
<option data-name="Chile" value="23424782">Chile</option>
<option data-name="China" value="23424781">China</option>
<option data-name="Christmas Island" value="23424869">Christmas Island</option>
<option data-name="Cocos (Keeling) Islands" value="23424784">Cocos (Keeling) Islands</option>
<option data-name="Colombia" value="23424787">Colombia</option>
<option data-name="Comoros" value="23424786">Comoros</option>
<option data-name="Congo" value="23424779">Congo</option>
<option data-name="Cook Islands" value="23424795">Cook Islands</option>
<option data-name="Costa Rica" value="23424791">Costa Rica</option>
<option data-name="Croatia" value="23424843">Croatia</option>
<option data-name="Curaçao" value="56558057">Curaçao</option>
<option data-name="Cyprus" value="26812346">Cyprus</option>
<option data-name="Czech Republic" value="23424810">Czech Republic</option>
<option data-name="Democratic Republic of Congo" value="23424780">Democratic Republic of Congo</option>
<option data-name="Denmark" value="23424796">Denmark</option>
<option data-name="Disputed Territory" value="23424928">Disputed Territory</option>
<option data-name="Djibouti" value="23424797">Djibouti</option>
<option data-name="Dominica" value="23424798">Dominica</option>
<option data-name="Dominican Republic" value="23424800">Dominican Republic</option>
<option data-name="East Timor" value="23424968">East Timor</option>
<option data-name="Ecuador" value="23424801">Ecuador</option>
<option data-name="Egypt" value="23424802">Egypt</option>
<option data-name="El Salvador" value="23424807">El Salvador</option>
<option data-name="Equatorial Guinea" value="23424804">Equatorial Guinea</option>
<option data-name="Eritrea" value="23424806">Eritrea</option>
<option data-name="Estonia" value="23424805">Estonia</option>
<option data-name="Ethiopia" value="23424808">Ethiopia</option>
<option data-name="Falkland Islands" value="23424814">Falkland Islands</option>
<option data-name="Faroe Islands" value="23424816">Faroe Islands</option>
<option data-name="Federated States of Micronesia" value="23424815">Federated States of Micronesia</option>
<option data-name="Fiji" value="23424813">Fiji</option>
<option data-name="Finland" value="23424812">Finland</option>
<option data-name="France" value="23424819">France</option>
<option data-name="French Guiana" value="23424811">French Guiana</option>
<option data-name="French Polynesia" value="23424817">French Polynesia</option>
<option data-name="French Southern Territories" value="28289406">French Southern Territories</option>
<option data-name="Gabon" value="23424822">Gabon</option>
<option data-name="Gambia" value="23424821">Gambia</option>
<option data-name="Georgia" value="23424823">Georgia</option>
<option data-name="Germany" value="23424829">Germany</option>
<option data-name="Ghana" value="23424824">Ghana</option>
<option data-name="Gibraltar" value="23424825">Gibraltar</option>
<option data-name="Greece" value="23424833">Greece</option>
<option data-name="Greenland" value="23424828">Greenland</option>
<option data-name="Grenada" value="23424826">Grenada</option>
<option data-name="Guadeloupe" value="23424831">Guadeloupe</option>
<option data-name="Guam" value="23424832">Guam</option>
<option data-name="Guatemala" value="23424834">Guatemala</option>
<option data-name="Guinea" value="23424835">Guinea</option>
<option data-name="Guinea-Bissau" value="23424929">Guinea-Bissau</option>
<option data-name="Guyana" value="23424836">Guyana</option>
<option data-name="Haiti" value="23424839">Haiti</option>
<option data-name="Heard Island and McDonald Islands" value="28289411">Heard Island and McDonald Islands</option>
<option data-name="Holy See (Vatican City State)" value="23424986">Holy See (Vatican City State)</option>
<option data-name="Honduras" value="23424841">Honduras</option>
<option data-name="Hong Kong" value="24865698">Hong Kong</option>
<option data-name="Hungary" value="23424844">Hungary</option>
<option data-name="Iceland" value="23424845">Iceland</option>
<option data-name="India" value="23424848">India</option>
<option data-name="Indonesia" value="23424846">Indonesia</option>
<option data-name="Iraq" value="23424855">Iraq</option>
<option data-name="Iraq-Saudi Arabia Neutral Zone" value="23424998">Iraq-Saudi Arabia Neutral Zone</option>
<option data-name="Ireland" value="23424803">Ireland</option>
<option data-name="Israel" value="23424852">Israel</option>
<option data-name="Italy" value="23424853">Italy</option>
<option data-name="Ivory Coast" value="23424854">Ivory Coast</option>
<option data-name="Jamaica" value="23424858">Jamaica</option>
<option data-name="Japan" value="23424856">Japan</option>
<option data-name="Jordan" value="23424860">Jordan</option>
<option data-name="Kazakhstan" value="23424871">Kazakhstan</option>
<option data-name="Kenya" value="23424863">Kenya</option>
<option data-name="Kiribati" value="23424867">Kiribati</option>
<option data-name="Kosovo" value="29389201">Kosovo</option>
<option data-name="Kuwait" value="23424870">Kuwait</option>
<option data-name="Kyrgyzstan" value="23424864">Kyrgyzstan</option>
<option data-name="Laos" value="23424872">Laos</option>
<option data-name="Latvia" value="23424874">Latvia</option>
<option data-name="Lebanon" value="23424873">Lebanon</option>
<option data-name="Lesotho" value="23424880">Lesotho</option>
<option data-name="Liberia" value="23424876">Liberia</option>
<option data-name="Libya" value="23424882">Libya</option>
<option data-name="Liechtenstein" value="23424879">Liechtenstein</option>
<option data-name="Lithuania" value="23424875">Lithuania</option>
<option data-name="Luxembourg" value="23424881">Luxembourg</option>
<option data-name="Macao" value="20070017">Macao</option>
<option data-name="Macedonia" value="23424890">Macedonia</option>
<option data-name="Madagascar" value="23424883">Madagascar</option>
<option data-name="Malawi" value="23424889">Malawi</option>
<option data-name="Malaysia" value="23424901">Malaysia</option>
<option data-name="Maldives" value="23424899">Maldives</option>
<option data-name="Mali" value="23424891">Mali</option>
<option data-name="Malta" value="23424897">Malta</option>
<option data-name="Marshall Islands" value="23424932">Marshall Islands</option>
<option data-name="Martinique" value="23424884">Martinique</option>
<option data-name="Mauritania" value="23424896">Mauritania</option>
<option data-name="Mauritius" value="23424894">Mauritius</option>
<option data-name="Mayotte" value="23424886">Mayotte</option>
<option data-name="Mexico" value="23424900">Mexico</option>
<option data-name="Moldova" value="23424885">Moldova</option>
<option data-name="Monaco" value="23424892">Monaco</option>
<option data-name="Mongolia" value="23424887">Mongolia</option>
<option data-name="Montenegro" value="20069817">Montenegro</option>
<option data-name="Montserrat" value="23424888">Montserrat</option>
<option data-name="Morocco" value="23424893">Morocco</option>
<option data-name="Mozambique" value="23424902">Mozambique</option>
<option data-name="Myanmar" value="23424763">Myanmar</option>
<option data-name="Namibia" value="23424987">Namibia</option>
<option data-name="Nauru" value="23424912">Nauru</option>
<option data-name="Nepal" value="23424911">Nepal</option>
<option data-name="Netherlands" value="23424909">Netherlands</option>
<option data-name="New Caledonia" value="23424903">New Caledonia</option>
<option data-name="New Zealand" value="23424916">New Zealand</option>
<option data-name="Nicaragua" value="23424915">Nicaragua</option>
<option data-name="Niger" value="23424906">Niger</option>
<option data-name="Nigeria" value="23424908">Nigeria</option>
<option data-name="Niue" value="23424904">Niue</option>
<option data-name="Norfolk Island" value="23424905">Norfolk Island</option>
<option data-name="Northern Mariana Islands" value="23424788">Northern Mariana Islands</option>
<option data-name="Norway" value="23424910">Norway</option>
<option data-name="Oman" value="23424898">Oman</option>
<option data-name="Pakistan" value="23424922">Pakistan</option>
<option data-name="Palau" value="23424927">Palau</option>
<option data-name="Palestine" value="28289408">Palestine</option>
<option data-name="Panama" value="23424924">Panama</option>
<option data-name="Papua New Guinea" value="23424926">Papua New Guinea</option>
<option data-name="Paraguay" value="23424917">Paraguay</option>
<option data-name="Peru" value="23424919">Peru</option>
<option data-name="Philippines" value="23424934">Philippines</option>
<option data-name="Pitcairn Islands" value="23424918">Pitcairn Islands</option>
<option data-name="Poland" value="23424923">Poland</option>
<option data-name="Portugal" value="23424925">Portugal</option>
<option data-name="Puerto Rico" value="23424935">Puerto Rico</option>
<option data-name="Qatar" value="23424930">Qatar</option>
<option data-name="Romania" value="23424933">Romania</option>
<option data-name="Russia" value="23424936">Russia</option>
<option data-name="Rwanda" value="23424937">Rwanda</option>
<option data-name="Réunion" value="23424931">Réunion</option>
<option data-name="Saint Barthélemy" value="56042304">Saint Barthélemy</option>
<option data-name="Saint Helena, Ascension and Tristan da Cunha" value="23424944">Saint Helena, Ascension and Tristan da Cunha</option>
<option data-name="Saint Kitts and Nevis" value="23424940">Saint Kitts and Nevis</option>
<option data-name="Saint Lucia" value="23424951">Saint Lucia</option>
<option data-name="Saint Martin (French part)" value="56042305">Saint Martin (French part)</option>
<option data-name="Saint Pierre and Miquelon" value="23424939">Saint Pierre and Miquelon</option>
<option data-name="Saint Vincent and the Grenadines" value="23424981">Saint Vincent and the Grenadines</option>
<option data-name="Samoa" value="23424992">Samoa</option>
<option data-name="San Marino" value="23424947">San Marino</option>
<option data-name="Sao Tome and Principe" value="23424966">Sao Tome and Principe</option>
<option data-name="Saudi Arabia" value="23424938">Saudi Arabia</option>
<option data-name="Senegal" value="23424943">Senegal</option>
<option data-name="Serbia" value="20069818">Serbia</option>
<option data-name="Seychelles" value="23424941">Seychelles</option>
<option data-name="Sierra Leone" value="23424946">Sierra Leone</option>
<option data-name="Singapore" value="23424948">Singapore</option>
<option data-name="Sint Maarten (Dutch part)" value="56558058">Sint Maarten (Dutch part)</option>
<option data-name="Slovakia" value="23424877">Slovakia</option>
<option data-name="Slovenia" value="23424945">Slovenia</option>
<option data-name="Solomon Islands" value="23424766">Solomon Islands</option>
<option data-name="Somalia" value="23424949">Somalia</option>
<option data-name="South Africa" value="23424942">South Africa</option>
<option data-name="South Georgia and the South Sandwich Islands" value="23424955">South Georgia and the South Sandwich Islands</option>
<option data-name="South Korea" value="23424868">South Korea</option>
<option data-name="Spain" value="23424950">Spain</option>
<option data-name="Spratly Islands" value="23424921">Spratly Islands</option>
<option data-name="Sri Lanka" value="23424778">Sri Lanka</option>
<option data-name="Sudan" value="23424952">Sudan</option>
<option data-name="Suriname" value="23424913">Suriname</option>
<option data-name="Svalbard and Jan Mayen" value="28289413">Svalbard and Jan Mayen</option>
<option data-name="Swaziland" value="23424993">Swaziland</option>
<option data-name="Sweden" value="23424954">Sweden</option>
<option data-name="Switzerland" value="23424957">Switzerland</option>
<option data-name="Taiwan" value="23424971">Taiwan</option>
<option data-name="Tajikistan" value="23424961">Tajikistan</option>
<option data-name="Tanzania, United Republic of" value="23424973">Tanzania, United Republic of</option>
<option data-name="Thailand" value="23424960">Thailand</option>
<option data-name="The Bahamas" value="23424758">The Bahamas</option>
<option data-name="Togo" value="23424965">Togo</option>
<option data-name="Tokelau" value="23424963">Tokelau</option>
<option data-name="Tonga" value="23424964">Tonga</option>
<option data-name="Trinidad and Tobago" value="23424958">Trinidad and Tobago</option>
<option data-name="Tunisia" value="23424967">Tunisia</option>
<option data-name="Turkey" value="23424969">Turkey</option>
<option data-name="Turkmenistan" value="23424972">Turkmenistan</option>
<option data-name="Turks and Caicos Islands" value="23424962">Turks and Caicos Islands</option>
<option data-name="Tuvalu" value="23424970">Tuvalu</option>
<option data-name="Uganda" value="23424974">Uganda</option>
<option data-name="Ukraine" value="23424976">Ukraine</option>
<option data-name="United Arab Emirates" value="23424738">United Arab Emirates</option>
<option data-name="United Kingdom" value="23424975">United Kingdom</option>
<option data-name="United Nations Neutral Zone" value="23424997">United Nations Neutral Zone</option>
<option data-name="United States" value="23424977">United States</option>
<option data-name="United States Minor Outlying Islands" value="28289407">United States Minor Outlying Islands</option>
<option data-name="Uruguay" value="23424979">Uruguay</option>
<option data-name="Uzbekistan" value="23424980">Uzbekistan</option>
<option data-name="Vanuatu" value="23424907">Vanuatu</option>
<option data-name="Venezuela" value="23424982">Venezuela</option>
<option data-name="Vietnam" value="23424984">Vietnam</option>
<option data-name="Virgin Islands, U.S." value="23424985">Virgin Islands, U.S.</option>
<option data-name="Wallis and Futuna" value="23424989">Wallis and Futuna</option>
<option data-name="Western Sahara" value="23424990">Western Sahara</option>
<option data-name="Yemen" value="23425002">Yemen</option>
<option data-name="Zambia" value="23425003">Zambia</option>
<option data-name="Zimbabwe" value="23425004">Zimbabwe</option></select>

<svg class="svg-icon__delta-down icon-14" aria-hidden="true"><use xlink:href="#delta-down"></use></svg>
</div>
</div>
<div class="form-group">
<label>Pledge amount</label>
<div id="multiple-reward-pledge-amount-2661506">
<div class="new-form__amount new-form__amount--symbol"><input class="new-form__input--numbers form-control js-form-input text" value="1300" type="text" name="backing[amount]" id="backing_amount" /><div class="new-form__currency-box"><span class="new-form__currency-box__text">$</span></div></div>
</div>
<input name="backing[backer_reward_id]" type="hidden" value="2661506">
<input name="clicked_reward" type="hidden" value="true">
</div>
<div class="pledge__continue js-continue">
<button class="bttn bttn-primary theme--create bttn-medium w100p pledge__button">
<span class="btn-text">
Continue
</span>
</button>
</div>
<div class="pledge__applepay js-applepay">
<button class="btn btn--applepay btn--block js-applepay-button" role="button" tabindex="1">
<span class="btn-text"></span>
<div class="loader-dots">
<svg version="1.1" viewBox="0 0 56 16" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
<g>
<circle class="loader-dot-1" cx="8" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-2" cx="28" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.33s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
<circle class="loader-dot-3" cx="48" cy="8" r="8">
<animate attributeName="opacity" attributeType="XML" begin="0.66s" dur="1s" repeatCount="indefinite" values="1; .3; .3; .3;"></animate>
</circle>
</g>
</svg>
</div>

</button>
<button class="btn btn--another-payment-method btn--like-text btn--block mt1" role="button" tabindex="2">
<span class="btn-text">
Other payment options
<svg class="svg-icon__arrow-right" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
</span>
</button>
<p class="f6 center p0 m0">
By pledging you agree to Kickstarter\'s <a class="popup" target="_blank" href="/terms-of-use">Terms of Use</a>, <a class="popup" target="_blank" href="/privacy">Privacy Policy</a>, and <a class="popup" target="_blank" href="/cookies">Cookie Policy</a>.

</p>
</div>
</div>
<div class="pledge__accountability js-pledge__accountability">
<h6 class="f6">
Kickstarter is not a store.
</h6>
<p class="f6 normal">
It\'s a way to bring creative projects to life.
</p>
<a class="f6 normal mb0" href="/trust?ref=project_reward">Learn more about accountability.</a>
</div>
</form>



</li>
</ol>
</div>

</div>
<div class="NS_projects__blog_mentions">
</div>

<div class="NS_campaigns__funding_period">
<h3 class="normal mt4">Funding period</h3>
<p class="f5">
<time datetime="2014-06-06T09:48:39-04:00" data-format="ll" class="invisible-if-js js-adjust-time">Jun 6, 2014</time> - <time datetime="2014-07-09T09:48:39-04:00" data-format="ll" class="invisible-if-js js-adjust-time">Jul 9, 2014</time>
(33 days)
</p>
</div>

</div>
</div>
<div id="creator-bio-modal-portal"></div>
</div>
</div>
</div>

</section>
<section class="hide js-project-content js-project-faqs-content project-content">
</section>
<section class="hide js-project-content js-project-rewards-content project-content" data-path="/projects/1452363698/good-seed-craft-veggie-burgers/posts">
</section>
<section class="hide js-project-content js-project-updates-content project-content" data-project-state="failed">
</section>
<section class="hide js-could-have-post-media js-project-content js-project-posts-content project-content" data-path="/projects/1452363698/good-seed-craft-veggie-burgers/posts">
</section>
<section class="hide js-project-content js-project-post-content project-content">
</section>
<section class="hide js-could-have-comments js-project-comments-content js-project-content project-content">
</section>
<section class="hide js-project-community-content js-project-content project-content">
</section>
</div>

<div data-watch_project="{&quot;user_is_watching&quot;:null,&quot;project_is_launched&quot;:true,&quot;project_can_remind&quot;:false,&quot;project_pid&quot;:1508881112,&quot;project_id&quot;:&quot;UHJvamVjdC0xNTA4ODgxMTEy&quot;,&quot;user_id&quot;:null,&quot;show_modal&quot;:true}" id="watch-project-modal"></div>
<div id="project-cant-remind-modal"></div>
<div id="watch-project-user-form"></div>


</div>

</div>
</main>
<div data="{&quot;sections&quot;:[{&quot;name&quot;:&quot;Arts&quot;,&quot;path&quot;:&quot;/arts&quot;},{&quot;name&quot;:&quot;Comics &amp; Illustration&quot;,&quot;path&quot;:&quot;/comics-illustration&quot;},{&quot;name&quot;:&quot;Design &amp; Tech&quot;,&quot;path&quot;:&quot;/design-tech&quot;},{&quot;name&quot;:&quot;Film&quot;,&quot;path&quot;:&quot;/film&quot;},{&quot;name&quot;:&quot;Food &amp; Craft&quot;,&quot;path&quot;:&quot;/food-craft&quot;},{&quot;name&quot;:&quot;Games&quot;,&quot;path&quot;:&quot;/games&quot;},{&quot;name&quot;:&quot;Music&quot;,&quot;path&quot;:&quot;/music&quot;},{&quot;name&quot;:&quot;Publishing&quot;,&quot;path&quot;:&quot;/publishing&quot;}],&quot;currencies&quot;:[[&quot;€  Euro   (EUR)&quot;,&quot;EUR&quot;],[&quot;$  Australian Dollar   (AUD)&quot;,&quot;AUD&quot;],[&quot;$  Canadian Dollar   (CAD)&quot;,&quot;CAD&quot;],[&quot;Fr   Swiss Franc   (CHF)&quot;,&quot;CHF&quot;],[&quot;kr  Danish Krone   (DKK)&quot;,&quot;DKK&quot;],[&quot;£  Pound Sterling   (GBP)&quot;,&quot;GBP&quot;],[&quot;$  Hong Kong Dollar   (HKD)&quot;,&quot;HKD&quot;],[&quot;¥  Japanese Yen   (JPY)&quot;,&quot;JPY&quot;],[&quot;$  Mexican Peso   (MXN)&quot;,&quot;MXN&quot;],[&quot;kr  Norwegian Krone   (NOK)&quot;,&quot;NOK&quot;],[&quot;$  New Zealand Dollar   (NZD)&quot;,&quot;NZD&quot;],[&quot;zł  Zloty   (PLN)&quot;,&quot;PLN&quot;],[&quot;kr  Swedish Krona   (SEK)&quot;,&quot;SEK&quot;],[&quot;$  Singapore Dollar   (SGD)&quot;,&quot;SGD&quot;],[&quot;$  US Dollar   (USD)&quot;,&quot;USD&quot;]],&quot;current_currency&quot;:&quot;USD&quot;}" id="global-footer"></div>
<script>
  try{(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');}catch(e){}
  
  var analytics_vars = {
    google_analytics_id : "UA-7621056-1",
    logged_in : "false",
    social_user: "false"
  }
</script>

<script>
  window.koala_endpoint = \'https://ev.kck.st/web/track\';
  window.koala_debug = false;
</script>

<script>
  window.tracking_events_stream = \'dl-events\'
  window.tracking_events_url = \'https://st.ksr.io\'
</script>




<script>
  window.koala_endpoint = \'https://ev.kck.st/web/track\';
  window.koala_debug = false;
</script>

<script>
  window.tracking_events_stream = \'dl-events\'
  window.tracking_events_url = \'https://st.ksr.io\'
</script>

<script src="https://js.stripe.com/v2/"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="https://a.kickstarter.com/assets/modules/core.131351b820a994bde93eae3c5213978a28195ddc93ad4f1600dc210187968990.js"></script>
<script src="https://a.kickstarter.com/assets/modules/mobile_web.4646d59084f4eebae852bec166b70c99061c29cf39093ab525efc6ad02ba8c25.js"></script>
<script>
  window.STRIPE_PUBLISHABLE_KEY = \'pk_live_zjuK52lEUYcvBhIXEUnOEJzk\';
  window.IDENTITY_DOC_UPLOAD_URL = \'https://uploads.stripe.com/v1/files\';
</script>
<script src="https://a.kickstarter.com/assets/modules/runtime.3dc153c2677f39946f40d04a798a00fd221e43790429f210df4a9027e8f5977f.js"></script>
<script src="https://a.kickstarter.com/assets/modules/vendor.d0056220cd73d00a844f44b6c9c616acf606cd401848dd8b2dfecaf406a989b0.js"></script>
<script src="https://a.kickstarter.com/assets/modules/project-header.ab16438de54320e31e3dbf17e5af044ba3a659e1cef38331ffea5d6080cf54ac.js"></script>
<script src="https://a.kickstarter.com/assets/modules/flagging.f2649a14f2d99f33bdd58a96e997b0e57ac17e8f50dd99ce09be5d00b422d827.js"></script>
<script src="https://a.kickstarter.com/assets/modules/project-page.af508a0e9563ee5f2f4f38d7d5175aecd10745c5b0d52bd661ddda541a723197.js"></script>
<script src="https://a.kickstarter.com/assets/modules/project-post-interface.99e5ddf90cb5f79c62dff03577691590777b55347d029a85ab375ab894176dd7.js"></script>
<script src="https://a.kickstarter.com/assets/modules/videoplayer.7d4f0c7cc56d8eacabb311f71eb714e0e4d9624cc51fb7b07bf7fdb094ad0a36.js"></script>
<script src="https://a.kickstarter.com/assets/modules/watching.e0f038e56e436d0043d2e4f59673157dd55523b7b1eaeb06df996380e7de637b.js"></script>


<div id="growl_section" class="center jGrowl"></div>
<div id="fb-root"></div>
<script>
  var channelUrl = window.location.protocol + "//" + window.location.host + "/channel.html",
    needs_autologin = true && !$(\'body\').is(\'.skip_autologin\'),
    needs_refresh = true && false;
  
  window.fbAsyncInit = function() {
    FB.init({
      appId: window.fb_app_id,
      channelUrl: channelUrl,
      status: true,    // check login status
      cookie: true,    // enable cookies to allow the server to access the session
      xfbml: true,     // parse XFBML
      logging: false,  // turn off logging,
      version: \'v3.3\'
    });
  
    FB.getLoginStatus(function (response) {
      if (response.status === \'connected\') {
        if (read_cookie("logout_from_fb")) {
          FB.logout();
          destroy_cookie("logout_from_fb");
        } else if (needs_autologin) {
          $.get("/fb/autologin.js", {\'fbsr\': response.authResponse.signedRequest});
        } else if (needs_refresh && 0 == response.authResponse.userID) {
          $.get("/fb/refresh.js", {\'fbsr\': response.authResponse.signedRequest});
        }
      } else {
        if (read_cookie("logout_from_fb")) {
          destroy_cookie("logout_from_fb");
        }
      }
    })
  
    FB.Event.subscribe(\'edge.create\', function() {
      if (typeof ga !== \'undefined\') {
        ga(\'send\', \'event\', \'Sharing\', \'Facebook Like\');
      }
    });
  };
  
  
  // Load the SDK Asynchronously
  (function(d){
    var js, id = \'facebook-jssdk\'; if (d.getElementById(id)) {return;}
    js = d.createElement(\'script\'); js.id = id; js.async = true;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    d.getElementsByTagName(\'head\')[0].appendChild(js);
  }(document));
</script>


<!-- / embedded svg icon system -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="Line" viewBox="0 0 640 640">
      <title>Line icon</title>
      <path fill-rule="evenodd" d="M617.046 75.508l26.277-26.277L590.77-3.322 564.49 22.954 22.954 564.492-3.323 590.77l52.554 52.553 26.278-26.277"/>
    </symbol>
    <symbol id="alert" viewBox="0 0 725 725">
      <title>alert icon</title>
      <title>Artboard Copy 8</title><path d="M.087 652.96c-.59-13.098 1.83-25.43 7.257-36.993L294.44 42.127c6.61-12.98 15.99-23.247 28.144-30.8C334.74 3.778 348.014 0 362.41 0s27.612 3.776 39.648 11.328c12.036 7.552 21.24 17.818 27.613 30.798l286.744 573.84c5.9 11.565 8.614 23.896 8.142 36.994-.472 13.098-4.012 25.075-10.62 35.932-7.08 11.328-16.343 20.178-27.79 26.55-11.446 6.372-23.66 9.558-36.64 9.558H75.314c-12.98 0-25.194-3.186-36.64-9.558-11.446-6.372-20.71-15.222-27.79-26.55C4.277 678.035.678 666.058.088 652.96zm301.788-63.898c0 16.757 5.9 31.035 17.7 42.835 11.8 11.8 26.078 17.7 42.835 17.7 16.756 0 31.034-5.9 42.834-17.7 11.8-11.8 17.7-26.078 17.7-42.835 0-16.756-5.9-31.034-17.7-42.834-11.8-11.8-26.078-17.7-42.834-17.7-16.757 0-31.035 5.9-42.835 17.7-11.8 11.8-17.7 26.078-17.7 42.835zm15.222-135.937h90.625V196.472h-90.625v256.653z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="arrow-down" viewBox="0 0 729 437">
      <title>arrow-down icon</title>
      <title>arrow-down</title><path d="M364.42 437.406L728.405 73.42 655.608.62l-291.19 290.682L73.204.594.406 73.392" fill-rule="evenodd"/>
    </symbol>
    <symbol id="arrow-left" viewBox="0 0 437 728">
      <title>arrow-left icon</title>
      <title>arrow-left</title><path d="M0 364.014L363.986 728l72.797-72.797L146.1 364.013 436.81 72.798 364.015 0" fill-rule="evenodd"/>
    </symbol>
    <symbol id="arrow-point-left" viewBox="0 0 15 8">
      <title>arrow-point-left icon</title>
      <title>Fill 1 Copy 5</title><path d="M3.93 7.936c.136.136.368.04.368-.152V5h10.436c.097 0 .175-.08.175-.175v-1.65c0-.097-.08-.175-.176-.175H4.298V.215c0-.19-.232-.287-.368-.152L.063 3.847c-.084.085-.084.22 0 .305L3.93 7.936z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="arrow-point-right" viewBox="0 0 15 8">
      <title>arrow-point-right icon</title>
      <title>Fill 1</title><path d="M10.98.064c-.137-.136-.37-.04-.37.152V3H.176C.078 3 0 3.08 0 3.175v1.65C0 4.922.078 5 .175 5H10.61v2.785c0 .19.233.287.37.152l3.866-3.784c.084-.085.084-.22 0-.305L10.98.064z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="arrow-right" viewBox="0 0 437 728">
      <title>arrow-right icon</title>
      <title>arrow-right</title><path d="M436.81 363.986L72.826 0 .028 72.797l290.682 291.19L0 655.202 72.797 728" fill-rule="evenodd"/>
    </symbol>
    <symbol id="arrow-up-right" viewBox="0 0 48 48">
      <title>arrow-up-right icon</title>
      <title>icon--arrow-up-right copy</title><g fill-rule="evenodd"><path d="M-6-6h60v60H-6z"/><path d="M47.03 0H30.97c-.863 0-1.295 1.042-.685 1.652l5.91 5.91-35.61 35.61c-.39.39-.39 1.024 0 1.414l2.828 2.828c.392.39 1.024.39 1.414 0l35.61-35.61 5.91 5.91c.61.61 1.652.178 1.652-.684V.968C48 .434 47.566 0 47.03 0"/></g>
    </symbol>
    <symbol id="banner" viewBox="0 0 702 843">
      <title>banner icon</title>
      <title>Rectangle 2</title><path d="M0 0h702v843L360.558 608.833 0 843" fill-rule="evenodd"/>
    </symbol>
    <symbol id="bar-chart" viewBox="0 0 714 714">
      <title>bar-chart icon</title>
      <title>Artboard Copy 6</title><path d="M0 699.01V371.99c0-4.182 1.453-7.727 4.358-10.632C7.263 358.453 10.808 357 14.99 357h148.52c4.182 0 7.727 1.453 10.632 4.358 2.905 2.905 4.358 6.45 4.358 10.633v327.02c0 4.182-1.453 7.727-4.358 10.632-2.905 2.905-6.45 4.358-10.633 4.358H14.99c-4.182 0-7.727-1.453-10.632-4.358C1.453 706.737 0 703.192 0 699.01zm267.75 0V14.99c0-4.182 1.453-7.727 4.358-10.632C275.013 1.453 278.558 0 282.74 0h148.52c4.182 0 7.727 1.453 10.632 4.358 2.905 2.905 4.358 6.45 4.358 10.633v684.02c0 4.182-1.453 7.727-4.358 10.632-2.905 2.905-6.45 4.358-10.633 4.358H282.74c-4.182 0-7.727-1.453-10.632-4.358-2.905-2.905-4.358-6.45-4.358-10.633zm267.75 0V193.49c0-4.182 1.453-7.727 4.358-10.632 2.905-2.905 6.45-4.358 10.633-4.358h148.52c4.182 0 7.727 1.453 10.632 4.358 2.905 2.905 4.358 6.45 4.358 10.633v505.52c0 4.182-1.453 7.727-4.358 10.632-2.905 2.905-6.45 4.358-10.633 4.358H550.49c-4.182 0-7.727-1.453-10.632-4.358-2.905-2.905-4.358-6.45-4.358-10.633z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="bell" viewBox="0 0 14 16">
      <title>bell icon</title>
      <title>Combined Shape Copy 5</title><path d="M6.686 16c1.058 0 1.92-.796 2.047-1.82H4.638c.127 1.024.99 1.82 2.048 1.82zm6.045-4.53c-.907-1.205-1.097-2.435-1.327-4.145L11.1 5.06C10.813 2.91 9.325 1.25 7.47.88c.002-.028.015-.052.015-.08 0-.44-.357-.8-.798-.8-.442 0-.8.36-.8.8 0 .028.013.052.016.08-1.858.37-3.343 2.028-3.632 4.18L1.746 9c-.185.88-.46 1.65-1.002 2.395C.287 11.907 0 12.573 0 13.312c0 .037.032.068.068.068h13.236c.037 0 .067-.03.067-.068v-.073c0-.676-.245-1.285-.64-1.77z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="book" viewBox="0 0 655 715">
      <title>book icon</title>
      <title>Artboard Copy 3</title><path d="M654.804 119.53L595.47 60.195v595.47H118.666c-30.023 0-59.332-15.01-59.332-59.33H536.14V.147H89.355C0 .148 0 .148 0 89.505V595.62C0 684.976 74.345 715 148.69 715h506.114V119.53z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="bookmark" viewBox="0 0 12 16">
      <title>bookmark icon</title>
      <title>Fill 1</title><path d="M.704 0h10.592c.39 0 .704.315.704.704v14.464c0 .34-.39.533-.66.327l-5.148-3.94-5.54 3.978c-.273.195-.652 0-.652-.334V.703C0 .314.315 0 .704 0" fill-rule="evenodd"/>
    </symbol>
    <symbol id="brand-assets" viewBox="0 0 826 689">
      <title>brand-assets icon</title>
      <title>Artboard Copy 13</title><g fill-rule="evenodd"><path d="M141.436 641.7h-94.59V146.27h23.433l-2.25-16.08c-1.457-10.296-1.04-20.546.946-30.44h-24.66c-24.303 0-44 19.694-44 43.993v500.48c0 24.3 19.697 43.993 44 43.993h133.04c-16.502-11.04-29.452-27.183-35.92-46.52M613.652 688.218c24.303 0 44-19.693 44-43.992v-.077l-313.694 44.068h269.694M825.386 534.504L755.718 38.89C752.32 14.84 730.08-1.92 706.01 1.46L142.227 80.68c-24.055 3.38-40.82 25.617-37.44 49.683l69.67 495.612c3.38 24.05 25.62 40.83 49.69 37.433L787.932 584.2c24.072-3.38 40.837-25.63 37.456-49.696zm-605.208 82.493l-68.97-490.604L709.98 47.87l68.97 490.62-558.772 78.507z"/><path d="M634.48 261.267l-71.668 84.447-222.064-84.943-104.363 137.31 23.388 166.382 466.632-65.576-29.98-213.26-61.944-24.36M549.69 252.29c20.49-2.87 34.773-21.82 31.904-42.318-2.885-20.5-21.837-34.78-42.34-31.896-20.504 2.884-34.79 21.832-31.904 42.332 2.885 20.484 21.837 34.765 42.34 31.88"/></g>
    </symbol>
    <symbol id="cart" viewBox="0 0 950 736">
      <title>cart icon</title>
      <title>Artboard Copy 4</title><path d="M41.16.077C25.704.782 11.81 9.717 4.75 23.49-2.31 37.266-1.45 53.768 7 66.733c8.453 12.966 23.202 20.408 38.65 19.502h145.34l20.635 76.288c.22 1.503.52 2.993.896 4.464.34 2.742.942 5.445 1.798 8.072.48 1.835 1.08 3.635 1.796 5.39l92.408 351.805 8.076 32.308H832.47l8.075-32.307 95.1-358.984L950 118.524H288.785l-22.43-86.162L258.282.06H45.652c-1.494-.08-2.992-.08-4.487 0l-.002.017zm401.036 605.79c-36.038 0-64.596 29.465-64.596 65.516 0 36.05 28.558 64.617 64.596 64.617 36.038 0 65.494-28.566 65.494-64.617 0-36.05-29.456-65.515-65.494-65.515zm248.516 0c-36.037 0-65.493 29.465-65.493 65.516 0 36.05 29.455 64.617 65.492 64.617 36.038 0 65.494-28.566 65.494-64.617 0-36.05-29.456-65.515-65.494-65.515zM434.417 414.546l85.12-85.148-85.12-85.15c-1.19-1.515-1.787-3.195-1.787-5.036 0-1.733.596-3.358 1.787-4.874l49.058-49.074c1.516-1.192 3.14-1.788 4.874-1.788 1.84 0 3.518.596 5.034 1.788l85.12 85.148 85.122-85.148c1.517-1.192 3.195-1.788 5.036-1.788 1.733 0 3.357.596 4.874 1.788l49.058 49.074c1.19 1.516 1.787 3.14 1.787 4.875 0 1.842-.595 3.522-1.786 5.038l-85.12 85.15 85.12 85.147c1.19 1.517 1.787 3.196 1.787 5.038 0 1.733-.595 3.358-1.786 4.874l-49.058 49.075c-1.517 1.19-3.14 1.787-4.874 1.787-1.84 0-3.52-.597-5.036-1.788l-85.12-85.15-85.122 85.15c-1.516 1.19-3.194 1.787-5.035 1.787-1.734 0-3.36-.597-4.875-1.788l-49.058-49.075c-1.19-1.516-1.787-3.14-1.787-4.874 0-1.842.596-3.52 1.787-5.038z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="chat" viewBox="0 0 750 750">
      <title>chat icon</title>
      <title>chat</title><path d="M375.2 723.3c52 0 101.5-10.3 146.3-28.6 1.1-.5 2-.9 3.1-1.3.2 0 .4 0 .4-.2 6.3-2.3 13.1-3.6 20.2-3.6 7.7 0 15.1 1.4 21.8 4.3l151.2 55.6-39.8-159.1c0-9.5 2.7-18.5 7-26.3 1.4-2.3 2.9-4.7 4.5-6.7 37.6-56.3 59.4-123.3 59.4-195.1C749.7 162.5 582.1.7 375.3.7S.8 162.6.8 362c0 199.7 167.6 361.3 374.4 361.3z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="check" viewBox="0 0 20 16">
      <title>check icon</title>
      <title>Fill 1 Copy 6</title><path d="M6.8 15.88L.12 9.173c-.16-.16-.16-.42 0-.58L1.46 7.26c.16-.16.418-.16.58 0l4.95 4.973L17.695.14c.15-.17.41-.187.58-.037l1.414 1.25c.17.15.186.41.035.58L7.4 15.863c-.16.176-.432.184-.6.016" fill-rule="evenodd"/>
    </symbol>
    <symbol id="circle-back" viewBox="0 0 17 16">
      <title>circle-back icon</title>
      <title>Fill 1 Copy 13</title><path d="M8.082 0C5.884 0 3.804.91 2.295 2.49l-.01-.01L.395.6C.265.47.043.562.043.746L0 5.927c0 .114.094.204.206.204l5.18-.068c.183 0 .275-.222.146-.353l-.73-.728L3.64 3.83l-.06-.06c1.17-1.24 2.786-1.966 4.5-1.966 3.417 0 6.197 2.78 6.197 6.195 0 3.417-2.78 6.196-6.198 6.196-2.564 0-4.834-1.58-5.76-3.947 0 0-.072-.273-.36-.184l-1.178.397c-.168.062-.238.115-.2.29C1.737 13.896 4.716 16 8.082 16c4.412 0 8-3.59 8-8s-3.588-8-8-8" fill-rule="evenodd"/>
    </symbol>
    <symbol id="circle-forward" viewBox="0 0 17 16">
      <title>circle-forward icon</title>
      <title>Fill 1 Copy 16</title><path d="M8 0c2.197 0 4.278.91 5.786 2.49l.01-.01L15.687.6c.13-.13.353-.037.353.147l.042 5.18c0 .114-.094.204-.206.204l-5.18-.068c-.183 0-.276-.222-.146-.353l.73-.728 1.16-1.153.058-.06c-1.17-1.24-2.784-1.966-4.5-1.966-3.415 0-6.196 2.78-6.196 6.195 0 3.417 2.78 6.196 6.197 6.196 2.563 0 4.833-1.58 5.76-3.947 0 0 .07-.273.36-.184l1.177.397c.17.062.238.115.2.29C14.346 13.896 11.366 16 8 16c-4.413 0-8-3.59-8-8s3.587-8 8-8" fill-rule="evenodd"/>
    </symbol>
    <symbol id="circle-k" viewBox="0 0 833 833">
      <title>circle-k icon</title>
      <title>circle-k</title><path d="M416.5 833C646.527 833 833 646.527 833 416.5S646.527 0 416.5 0 0 186.473 0 416.5 186.473 833 416.5 833zM223.063 590.81V242.887c0-21.746 7.7-40.36 23.104-55.846 15.403-15.486 34.06-23.228 55.97-23.228 21.58 0 40.154 7.783 55.722 23.35 15.567 15.57 23.35 34.143 23.35 55.724v85.004l96.125-127.754c12.85-17.297 29.982-27.552 51.398-30.764 21.416-3.213 40.937 1.77 58.564 14.95 17.298 12.85 27.553 29.982 30.765 51.398 3.213 21.416-1.77 41.02-14.95 58.81L507.73 406.224l108.973 123.553c13.673 16.968 19.357 36.448 17.05 58.44-2.306 21.993-11.943 39.826-28.91 53.5-16.804 13.343-35.79 19.068-56.96 17.173-21.168-1.895-38.836-10.75-53.003-26.565L381.21 494.193v96.618c0 21.912-7.742 40.568-23.227 55.97-15.486 15.404-34.1 23.105-55.846 23.105-22.075 0-40.773-7.66-56.093-22.98s-22.98-34.02-22.98-56.094z" stroke="#979797" fill-rule="evenodd"/>
    </symbol>
    <symbol id="circle-left" viewBox="0 0 730 730">
      <title>circle-left icon</title>
      <title>circle-left</title><path d="M365 0C163.416 0 0 163.416 0 365s163.416 365 365 365 365-163.416 365-365S566.584 0 365 0zm-66.96 365.003l81.934 81.935 16.387-16.387-65.433-65.547 65.44-65.554-16.387-16.388-81.94 81.94z" fill-rule="evenodd" opacity=".95"/>
    </symbol>
    <symbol id="circle-right" viewBox="0 0 730 730">
      <title>circle-right icon</title>
      <title>circle-right</title><path d="M365 730c201.584 0 365-163.416 365-365S566.584 0 365 0 0 163.416 0 365s163.416 365 365 365zm66.96-365.003l-81.934-81.935-16.387 16.387 65.433 65.547-65.44 65.554 16.387 16.388 81.94-81.94z" fill-rule="evenodd" opacity=".95"/>
    </symbol>
    <symbol id="clipboard" viewBox="0 0 622 793">
      <title>clipboard icon</title>
      <title>Artboard Copy 12</title><path d="M574.674 57.313c13.522 0 24.34 4.06 33.804 13.534C617.943 80.32 622 92.5 622 106.033v637.42c0 13.534-4.057 25.714-13.522 35.187-9.465 9.473-20.282 13.533-33.804 13.533H50.03c-13.52 0-24.34-4.06-33.804-13.533C5.41 769.167 0 758.34 0 743.453V107.387C0 93.853 5.41 81.673 14.874 72.2c9.465-9.473 21.635-13.533 33.804-13.533h128.457v23.006c0 9.474-2.705 17.594-9.465 24.36-6.76 6.767-14.874 9.474-24.34 9.474H78.426c-13.522 0-21.635 8.12-21.635 23.006v577.874c0 13.533 6.762 21.653 18.932 21.653h467.852c13.522 0 18.93-6.767 18.93-21.653V137.16c0-14.887-6.76-23.007-21.634-23.007h-64.905c-9.465 0-17.578-2.706-24.34-9.473-6.76-6.767-10.816-14.887-10.816-24.36V57.313h133.864zM113.584 340.16v-56.84H311v56.84H113.583zm0 113.68V397h367.79v56.84h-367.79zm0 112.327v-56.84H342.1v56.84H113.583zm0 113.68v-56.84h282.603v56.84H113.583zm28.394-452.014c4.057-39.246 20.283-62.253 50.03-70.373l1.353-1.353c24.34-5.414 36.51-17.594 36.51-35.187V81.673c0-23.006 8.113-41.953 24.34-56.84C270.434 9.947 289.364.473 311 .473c22.987 0 41.917 8.12 56.79 24.36 16.227 16.24 24.34 35.187 24.34 56.84v36.54c0 18.947 12.17 31.127 36.51 36.54h4.056c28.395 8.12 44.62 32.48 47.326 70.374H141.978v2.706zM311 57.313c-14.874 0-22.987 8.12-22.987 24.36 0 16.24 8.113 24.36 22.987 24.36 16.226 0 24.34-8.12 24.34-24.36 0-16.24-8.114-24.36-24.34-24.36z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="clock" viewBox="0 0 15 16">
      <title>clock icon</title>
      <title>Combined Shape</title><path d="M7.275 14.325c-3.088 0-5.6-2.512-5.6-5.6 0-3.086 2.512-5.6 5.6-5.6 3.087 0 5.6 2.514 5.6 5.6 0 3.088-2.513 5.6-5.6 5.6m5.84-9.917l.753-.752c.13-.132.13-.346 0-.478l-1.046-1.046c-.132-.13-.346-.13-.478 0l-.752.752c-.705-.522-1.505-.92-2.373-1.16V.337C9.22.15 9.07 0 8.88 0H5.668c-.187 0-.34.15-.34.338v1.385C2.263 2.577 0 5.39 0 8.726 0 12.736 3.264 16 7.275 16c4.01 0 7.275-3.263 7.275-7.274 0-1.618-.538-3.108-1.434-4.318m-5.784.678c-.366-.032-.687.238-.717.604l-.337 3.907c-.004.055-.005.115 0 .17.048.552.532.96 1.082.912.55-.048.96-.533.91-1.083L7.936 5.69c-.027-.316-.278-.576-.603-.604" fill-rule="evenodd"/>
    </symbol>
    <symbol id="close" viewBox="0 0 640 640">
      <title>close icon</title>
      <title>close</title><g fill-rule="evenodd"><path d="M565.027 617.58l26.277 26.278 52.554-52.554-26.277-26.277L74.95 22.395 48.67-3.882-3.882 48.672 22.395 74.95"/><path d="M617.046 75.508l26.277-26.277L590.77-3.322 564.49 22.954 22.954 564.492-3.323 590.77l52.554 52.553 26.278-26.277"/></g>
    </symbol>
    <symbol id="closed-caption" viewBox="0 0 23 16">
      <title>closed-caption icon</title>
      <title>Fill 1</title><path d="M17.83 10.85c-.628.513-1.43.77-2.41.77-.55 0-1.056-.093-1.517-.278-.46-.185-.853-.444-1.176-.777-.322-.332-.574-.73-.755-1.19-.18-.46-.27-.966-.27-1.518 0-.57.083-1.1.25-1.588.165-.49.41-.914.733-1.27.322-.357.717-.634 1.182-.834.466-.2.998-.3 1.597-.3.437 0 .857.058 1.26.172.405.114.766.288 1.084.52.32.233.578.523.777.87.2.346.313.757.342 1.233h-1.98c-.134-.845-.633-1.268-1.497-1.268-.324 0-.594.074-.813.22-.22.148-.396.338-.534.57-.138.233-.236.49-.292.77-.056.28-.085.56-.085.834 0 .266.03.537.086.812.057.276.15.525.28.75.127.222.3.405.52.547.217.143.483.214.797.214.484 0 .857-.136 1.12-.407.26-.27.424-.634.49-1.09h1.953c-.133.978-.513 1.724-1.14 2.237m-8.195 0c-.627.513-1.43.77-2.41.77-.55 0-1.055-.093-1.516-.278-.462-.185-.854-.444-1.177-.777-.323-.332-.575-.73-.755-1.19-.18-.46-.27-.966-.27-1.518 0-.57.082-1.1.25-1.588.164-.49.41-.914.732-1.27.323-.357.717-.634 1.183-.834.466-.2.998-.3 1.596-.3.436 0 .857.058 1.26.172.404.114.765.288 1.084.52.318.233.577.523.777.87.2.346.314.757.343 1.233H8.75c-.132-.845-.63-1.268-1.495-1.268-.323 0-.594.074-.812.22-.22.148-.397.338-.534.57-.14.233-.237.49-.294.77-.057.28-.085.56-.085.834 0 .266.03.537.086.812.057.276.15.525.278.75.128.222.302.405.52.547.22.143.485.214.8.214.483 0 .856-.136 1.117-.407.263-.27.426-.634.493-1.09h1.952c-.133.978-.513 1.724-1.14 2.237m11.81-9.456c-.154-.24-.447-.38-.688-.55C19.915.223 15.942 0 11.333 0c-4.61 0-8.77.223-9.596.843-.258.172-.55.31-.723.55C.17 2.514.05 4.096 0 7.727c.05 3.63.17 5.214 1.014 6.332.172.26.465.38.723.55.825.638 4.987.845 9.596.88 4.61-.035 8.582-.242 9.424-.88.24-.17.534-.29.688-.55.86-1.118.998-2.7 1.032-6.332-.034-3.63-.172-5.214-1.032-6.332" fill-rule="evenodd"/>
    </symbol>
    <symbol id="compass" viewBox="0 0 16 16">
      <title>compass icon</title>
      <title>Combined Shape Copy 2</title><path d="M8.543 8.6l-2.035.917.938-2.088 1.11 1.14-.013.03zm3.632-5.01l-.095.043-5.784 2.61-2.624 5.848c-.085.188.02.37.247.273v.004l5.783-2.61 2.66-5.928v-.003l.015-.028c.08-.178-.04-.283-.203-.21zM8 14.467c-3.565 0-6.467-2.902-6.467-6.467 0-3.565 2.902-6.467 6.467-6.467 3.565 0 6.467 2.902 6.467 6.467 0 3.565-2.902 6.467-6.467 6.467M8 0C3.583 0 0 3.583 0 8c0 4.42 3.583 8 8 8s8-3.58 8-8c0-4.417-3.583-8-8-8" fill-rule="evenodd"/>
    </symbol>
    <symbol id="conversion" viewBox="0 0 753 614">
      <title>conversion icon</title>
      <title>conversion</title><path d="M0 306.645l93.117-94.723 94.723 94.723H0zm105.96 0c0 74.922 26.49 138.872 79.472 191.853 52.98 52.98 116.396 79.47 190.248 79.47 48.164 0 93.384-12.308 135.662-36.925 42.277-24.617 75.724-58.332 100.342-101.145l3.21-4.816 30.504 16.055-1.605 6.422c-27.828 48.163-65.824 86.16-113.988 113.987-47.094 27.828-98.47 41.742-154.125 41.742-84.555 0-156.533-29.97-215.936-89.907C100.34 463.445 70.64 391.2 70.64 306.645h35.32zm541.044 0c0-74.923-26.49-138.873-79.47-191.854C514.55 61.81 450.6 35.32 375.68 35.32c-48.165 0-93.117 12.31-134.86 36.926-41.742 24.617-74.92 58.332-99.54 101.145l-3.21 4.817-32.11-16.055 3.212-6.422C137 107.566 174.996 69.57 223.16 41.742 270.254 13.914 321.093 0 375.68 0c84.555 0 156.8 29.968 216.738 89.906 59.938 59.938 89.906 132.183 89.906 216.74h-35.32zm-81.88 0h187.84l-93.116 94.722-94.723-94.722zm-234.397 88.3c9.632 9.633 21.94 15.52 36.925 17.66v-97.933c-12.843-3.21-24.082-6.422-33.714-9.633-9.633-4.282-17.66-9.1-24.083-14.45-6.42-5.352-10.97-11.774-13.646-19.266-2.677-7.492-4.015-16.59-4.015-27.293 0-10.702 1.873-20.87 5.62-30.503 3.746-9.633 9.097-17.66 16.054-24.082 6.956-6.422 14.983-11.506 24.08-15.252 9.1-3.746 19-6.154 29.702-7.224v-24.083h20.87v24.082c19.267 3.21 34.787 10.702 46.56 22.475 11.774 11.774 20.336 28.9 25.688 51.375h-32.11c-4.28-24.617-17.66-39.066-40.137-43.347v89.906l20.872 6.42c5.35 1.07 11.238 3.212 17.66 6.423 6.422 3.21 12.843 7.492 19.265 12.843 6.422 5.352 11.774 12.31 16.055 20.872 4.28 8.562 6.422 18.195 6.422 28.898 0 11.773-1.873 22.21-5.62 31.307-3.745 9.097-9.364 17.392-16.857 24.884-7.492 6.422-16.054 11.506-25.687 15.252-9.633 3.745-20.336 6.154-32.11 7.224v30.504h-20.87v-30.504c-24.618-2.14-44.15-10.436-58.6-24.885-14.45-14.45-22.744-34.518-24.885-60.206h32.11c0 16.055 4.816 28.898 14.45 38.53zm6.42-186.234c-8.56 7.493-12.842 18.196-12.842 32.11 0 6.422 1.07 12.04 3.21 16.858 2.14 4.816 5.085 8.562 8.83 11.238 3.747 2.676 8.296 5.084 13.647 7.225 5.352 2.14 11.238 4.282 17.66 6.423v-86.696c-11.773 1.07-21.94 5.352-30.504 12.844zm69.037 200.685c6.422-2.14 11.773-5.084 16.054-8.83 4.282-3.747 7.492-8.563 9.633-14.45 2.142-5.887 3.212-12.576 3.212-20.068 0-7.492-1.07-13.647-3.21-18.463-2.142-4.816-5.352-8.83-9.634-12.04-4.28-3.212-9.632-5.888-16.054-8.028-5.352-2.14-11.24-4.282-17.66-6.422v91.51c6.42 0 12.308-1.07 17.66-3.21z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="delta-down" viewBox="0 0 12 6">
      <title>delta-down icon</title>
      <title>Fill 1</title><path d="M.307 0h10.775c.273 0 .41.33.216.523L5.91 5.91c-.12.12-.312.12-.432 0L.09.523C-.103.33.034 0 .307 0" fill-rule="evenodd"/>
    </symbol>
    <symbol id="delta-left" viewBox="0 0 7 12">
      <title>delta-left icon</title>
      <path d="M6.694.613v10.774c0 .273-.33.41-.523.217L.785 6.217c-.12-.12-.12-.314 0-.434L6.17.396c.194-.193.524-.056.524.217" fill-rule="evenodd"/>
    </symbol>
    <symbol id="delta-right" viewBox="0 0 7 12">
      <title>delta-right icon</title>
      <title>Fill 1</title><path d="M.694.613v10.774c0 .273.33.41.524.217l5.387-5.387c.12-.12.12-.314 0-.434L1.218.396C1.024.203.694.34.694.613" fill-rule="evenodd"/>
    </symbol>
    <symbol id="delta-up" viewBox="0 0 12 6">
      <title>delta-up icon</title>
      <title>Fill 1</title><path d="M.307 6h10.775c.273 0 .41-.33.216-.523L5.91.09c-.12-.12-.312-.12-.432 0L.09 5.477C-.103 5.67.034 6 .307 6" fill-rule="evenodd"/>
    </symbol>
    <symbol id="duplicate" viewBox="0 0 591 751">
      <title>duplicate icon</title>
      <title>duplicate</title><path d="M65.59 688.417V93.875H0V751h491.935v-62.583H65.59zM437.208 0H98.387v657.125h491.935V146.68L437.207 0zm87.524 219.042H360.753V62.582h32.796V187.75H524.73v31.292z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="embed" viewBox="0 0 26 16">
      <title>embed icon</title>
      <title>Combined Shape Copy 6</title><path d="M25.33 7.473L18.005 2.32c-.213-.152-.432-.074-.432.186V4.4c0 .302.016.38.186.496l4.21 2.962v.002l.083.06-.084.06v.003l-4.21 2.962c-.17.115-.187.193-.187.494v1.894c0 .26.22.336.432.186l7.325-5.152c.23-.162.342-.307.342-.448 0-.142-.113-.285-.342-.447zM13.81 0c-.134 0-.19.074-.214.176L11.47 8h.002l-2.124 7.818c-.037.13-.006.182.115.182h1.995c.135 0 .188-.074.213-.176h.003L13.797 8 15.92.18c.036-.13.005-.182-.116-.182H13.81zM7.666 2.32L.342 7.472c-.23.16-.342.305-.342.448 0 .142.113.286.342.446l7.325 5.155c.213.15.432.075.432-.187v-1.895c0-.3-.017-.377-.187-.493L3.7 7.98h.003l-.084-.06.083-.062-.002-.002 4.213-2.962c.17-.115.186-.193.186-.494V2.507c0-.262-.22-.338-.433-.188z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="eye" viewBox="0 0 23 16">
      <title>eye icon</title>
      <title>Combined Shape Copy 12</title><path d="M22.935 7.746c.11.154.11.354 0 .508C21.962 9.62 17.73 16 11.51 16 5.286 16 1.056 9.62.082 8.254c-.11-.154-.11-.354 0-.508C1.057 6.38 5.287 0 11.51 0c6.22 0 10.452 6.38 11.425 7.746zM11.51 13.333c2.944 0 5.332-2.388 5.332-5.333 0-2.945-2.388-5.333-5.333-5.333-2.946 0-5.334 2.388-5.334 5.333 0 2.945 2.388 5.333 5.333 5.333zm0-8c1.47 0 2.666 1.197 2.666 2.667 0 1.47-1.197 2.667-2.667 2.667C10.04 10.667 8.84 9.47 8.84 8c0-1.47 1.197-2.667 2.667-2.667z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="facebook-contained" viewBox="0 0 17 16">
      <title>facebook-contained icon</title>
      <title>Facebook Contained</title><path d="M15.37 0H.9C.402 0 0 .395 0 .883v14.234c0 .488.402.883.898.883H8.69V9.804H6.57V7.39h2.12V5.607c0-2.066 1.283-3.19 3.158-3.19.898 0 1.67.064 1.894.094v2.16h-1.3c-1.02 0-1.217.476-1.217 1.176v1.54h2.432l-.317 2.416h-2.115V16h4.146c.497 0 .9-.395.9-.883V.883c0-.488-.403-.883-.9-.883" fill-rule="evenodd"/>
    </symbol>
    <symbol id="facebook" viewBox="0 0 17 16">
      <title>facebook icon</title>
      <title>Facebook logo</title><path d="M15.37 0H.9C.402 0 0 .395 0 .883v14.234c0 .488.402.883.898.883H8.69V9.804H6.57V7.39h2.12V5.607c0-2.066 1.283-3.19 3.158-3.19.898 0 1.67.064 1.894.094v2.16h-1.3c-1.02 0-1.217.476-1.217 1.176v1.54h2.432l-.317 2.416h-2.115V16h4.146c.497 0 .9-.395.9-.883V.883c0-.488-.403-.883-.9-.883" fill-rule="evenodd"/>
    </symbol>
    <symbol id="flag" viewBox="0 0 15 16">
      <title>flag icon</title>
      <title>Fill 1 Copy 3</title><path d="M12.63.662c-.097-.286-.41-.438-.695-.34l-2.628.908L9.01.37C8.913.083 8.6-.07 8.316.03l-5.77 1.99c-.044.015-.078.043-.114.066L1.904.556c-.055-.16-.23-.244-.39-.19L.207.82c-.16.054-.244.228-.19.388l5.03 14.585c.056.16.23.246.39.19l1.308-.45c.16-.056.245-.23.19-.39L4.55 8.225c.042-.004.085-.002.128-.017l3.245-1.12.297.86c.098.286.41.437.696.34l5.154-1.78c.285-.097.437-.408.34-.694L12.63.662z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="gear" viewBox="0 0 16 16">
      <title>gear icon</title>
      <title>Fill 1 Copy 14</title><path d="M7.592 11.02c-1.675 0-3.033-1.36-3.033-3.034 0-1.675 1.357-3.033 3.032-3.033s3.033 1.358 3.033 3.033c0 1.675-1.358 3.033-3.033 3.033M13.632 8c0-.284-.047-.554-.083-.826l1.634-1.533c-.357-1.144-.944-2.178-1.736-3.04l-2.155.652c-.442-.344-.92-.642-1.446-.854L9.334.204C8.77.08 8.192 0 7.592 0c-.6 0-1.18.08-1.743.204l-.513 2.194c-.527.212-1.004.51-1.446.854l-2.154-.65C.944 3.46.356 4.495 0 5.64l1.635 1.532c-.038.272-.082.542-.082.825 0 .282.044.554.082.825L0 10.36c.357 1.144.944 2.178 1.736 3.038l2.155-.65c.443.346.92.64 1.447.856l.512 2.192c.563.127 1.142.204 1.742.204.6 0 1.18-.077 1.742-.204l.513-2.192c.527-.215 1.004-.51 1.446-.856l2.155.65c.792-.86 1.38-1.894 1.736-3.037L13.55 8.826c.035-.27.08-.543.08-.826" fill-rule="evenodd"/>
    </symbol>
    <symbol id="global-africa" viewBox="0 0 16 16">
      <title>global-africa icon</title>
      <title>Fill 1 Copy 9</title><path d="M8 14.467c-3.565 0-6.467-2.902-6.467-6.467 0-3.48 2.768-6.304 6.214-6.44-.052.108-.118.217-.223.288-.275.183-.3.048-.523.34-.22.292-.09.18 0 .477.092.298.25.058.336.404.087.345.325.35.063.487-.264.136-.464.027-.62.12-.16.092-.036.28-.297.427-.262.148-.412-.017-.56.17-.146.187-.12.117-.2.378-.078.26-.136.543.153.4.29-.147.4-.073.696-.12.293-.044.56-.477 1.063-.547.5-.07.18.224.564.442.383.218.277-.158.713.122.436.278.698.034.663.382-.005.05.013.085.027.125h-.018c.012.126.07.35-.08.492-.12.11-.324.145-.528.23-.05.016-.1.03-.142.057-.006.003-.01.003-.014.006 0 0 0 .004-.003.005-.18.12-.313.276-.566.195-.37-.12-.395-.068-.397-.38 0-.31.144-.8-.3-.768-.444.032-.71-.036-1.277.116-.57.154-.865.523-1.227.723-.36.2-.43.41-.47 1.087-.04.68.27.51.2.96-.07.447.3.395.637.635.34.24.27.24 1.138.1.868-.14.698-.1.91.096.208.195-.06.535-.032.814.03.28.37.16.3.728-.07.57-.074.783.01 1.19.084.407.462.52.58.99.118.475.242.616.552.465.31-.15.658-.41.92-.47s.284-.51.442-1.047c.158-.536.563-.708.502-.983-.064-.274-.244-1.293-.144-1.657.1-.363.4-.21.524-.616.124-.405.363-.573-.19-.644-.517-.065-1-.69-.983-.94-.008-.25-.223-.4.06-.384.184.01.286.005.377-.02.053-.005.1-.025.145-.057.002-.003.003-.003.006-.004.08-.06.185-.137.44-.184.477-.084.193.112.624.19.432.08.757.04.856.458.1.42-.053.76.167.87.22.11.51.175.528-.258.018-.435-.217-.3-.098-.612.117-.31-.16-.256.185-.464.347-.21.076.23.306.464.105.11.262.25.4.372l.016.013c.037.034.067.06.1.088l.37.32c.007.123.038.242.038.367 0 3.565-2.9 6.467-6.468 6.467M8 0C3.583 0 0 3.58 0 8c0 4.417 3.583 8 8 8 4.42 0 8-3.583 8-8 0-4.42-3.58-8-8-8" fill-rule="evenodd"/>
    </symbol>
    <symbol id="global-america" viewBox="0 0 16 16">
      <title>global-america icon</title>
      <title>Fill 1 Copy 10</title><path d="M11.477 13.392c.154-.377.428-.52.62-.745.247-.288.186-.37.166-.66-.022-.288.332-.37.02-.7-.31-.33-.826-.475-1.052-.62-.225-.143-.02-.35-.494-.39-.473-.04-.392-.04-.948-.186-.556-.143-.97-.31-1.195-.205 0 0-.494.166-.557.475-.06.308-.103.535-.33.74-.226.208-.494.165 0 .68.495.516 1.01.68 1.05.847.043.164.25.082.66.536.34.373.496.537.588.914-.635.21-1.3.352-2.004.352-3.545 0-6.43-2.885-6.43-6.43 0-1.984.925-3.74 2.34-4.92.294.083.22 1.11.48 1.22.26.112-.594.556-.74 1.408-.15.852 0 2.335.37 2.224.37-.112.48.11.63.296.147.185-.037.48.59.964.632.48.78.444 1.336.667.556.22.52.22.593.517.073.296.333.148.333 0s.222-.89-.15-.89c-.37 0-1-.036-1.073-.295-.075-.26-.333-.483-.037-.89.296-.407.444-.37.704-.37.26 0 .222.296.406.407.142.083.216.417.31.484.126.06.224-.073.19-.23-.032-.155-.042-.39.07-.525.084-.1.054-.138.136-.214l.024-.02c.023-.017.05-.04.088-.06.06-.043.13-.088.22-.14.815-.483 1.073-.564 1-.93-.073-.367-.073-.627.26-.627s.815.147.815-.15c0-.295.556-.48 0-.703-.556-.223-.407-.815-.89-.742-.48.075-.48.223-.556.446-.072.223-.183.482-.48.407-.297-.073-.223-.37-.408-.444-.184-.074-.296-.222-.26-.556.037-.333.305-.416.593-.333.52.148.594.185.556-.075-.036-.26.445-.445.224-.593-.223-.148-.63.075-.704-.297-.075-.37-.26-.096-.48-.177-.224-.082-.187-.49-.817-.527-.6-.035-1.088.048-1.327-.388.656-.227 1.35-.376 2.084-.376 1.277 0 2.46.384 3.46 1.028-.065.153-.144.292-.248.512-.148.313-.22.277-.24.74-.02.46-.24.533.147.7.387.165.46.387.553 0 .092-.388.203-.536.37-.572.165-.037.406.036.534-.277.023-.054.048-.084.074-.116C13.746 4.74 14.43 6.287 14.43 8c0 2.263-1.18 4.245-2.95 5.392M8 0C3.588 0 0 3.59 0 8s3.588 8 8 8c4.41 0 8-3.59 8-8s-3.59-8-8-8" fill-rule="evenodd"/>
    </symbol>
    <symbol id="global-asia" viewBox="0 0 16 16">
      <title>global-asia icon</title>
      <title>Fill 1 Copy 17</title><path d="M11.72 13.223c.113-.2.243-.423.355-.62.258-.454.114-1-.258-1.398-.372-.398-.38-.86-.62-1.044-.24-.184.114-.6.852-.08s.387-.403-.11-.52c-.495-.117-.292-.27-.59-.66-.298-.387-.597-.313-.97-.324-.37-.012-.364.11-.505 0-.14-.11-.01-.404-.29-.31-.278.093-.48.257-.312.458.168.203.56.183.52.632-.042.448.89.065.698.893-.19.825-.635.237-.44.133.198-.104-.03-.338-.443-.303-.415.033-.57-.06-.754.337-.186.4-.75.62-1.078.788-.696.36-1.163.034-1.166.52-.002.487 0 .662-.01 1.055-.015.393-.507.3-.507.692 0 .392.438.288.994.31.556.02.042-.106.79-.373.75-.267.864-.58 1.11-.094.22.433.504.456.653.873-.527.14-1.07.238-1.64.238-3.427 0-6.21-2.703-6.393-6.085.058-.03.11-.047.177-.09.493-.312.39-.668.777-.804.387-.135.76-.342.803-.033.045.308.072.215.273.434.2.22.23.24.34.74.108.5.375.262.55.577.177.313.175.454.52.368.347-.086.146-.434-.078-.618-.224-.184-.228-.537-.035-.765.194-.228.346-.195.556-.556.21-.363.362-.27.686-.104.325.167.033.375.117.465.043.048.11.11.18.163H6.47c.334.325.657 1.017.977.872.32-.145.285-.83.58-1.136.146-.25.106-.25.298-.308l.008.005c.036-.014.06-.03.116-.045.41-.108.25-.16.447-.333.195-.175.34-.4.292-.6-.05-.2-.127-.182 0-.32.126-.14.222-.11.327-.146.106-.037-.077.15.278.257.354.108.28-.146.514-.28.235-.132.27.025.41-.094.14-.118.144-.092 0-.35-.144-.26-.05-.242-.12-.403-.065-.163-.067-.19.13-.232.194-.04.017-.368-.247-.435-.262-.068-.25-.05-.31-.248-.057-.197-.094-.172-.172-.352-.075-.18-.14-.48-.433-.464-.292.015-.575.258-.708.15-.135-.11-.124-.168-.04-.364.087-.196-.032-.243.287-.172.317.072.35.176.545.08.2-.095-.03-.364.255-.28.285.084.574 0 .505.172-.07.172-.25.327-.035.433.216.106.29.754.714.403.427-.35.11-.517-.02-.6-.13-.08-.375-.19-.185-.306.19-.118.256.097.598-.118l.222-.146C13.348 3.93 14.428 5.836 14.428 8c0 2.156-1.075 4.056-2.708 5.223M8 0C3.588 0 0 3.588 0 8c0 4.41 3.588 8 8 8s8-3.59 8-8c0-4.412-3.588-8-8-8" fill-rule="evenodd"/>
    </symbol>
    <symbol id="graph-bar" viewBox="0 0 21 16">
      <title>graph-bar icon</title>
      <title>Combined Shape Copy 9</title><path d="M20.36 16H.167C.075 16 0 15.925 0 15.83v-1.628c0-.092.075-.17.168-.17h20.19c.095 0 .172.078.172.17v1.63c0 .093-.077.168-.17.168zM5.685 3.122v9.15c0 .08-.075.144-.17.144h-1.63c-.09 0-.167-.064-.167-.144v-9.15c0-.08.076-.146.167-.146h1.63c.094 0 .17.065.17.146zM9.26.152v12.112c0 .085-.074.153-.17.153H7.464c-.093 0-.17-.068-.17-.153V.154c0-.086.077-.154.17-.154H9.09c.096 0 .17.068.17.153zm3.604 4.962v7.135c0 .093-.075.168-.17.168h-1.628c-.092 0-.17-.075-.17-.17V5.115c0-.094.078-.17.17-.17h1.63c.093 0 .168.076.168.17zm3.574-3.517V12.27c0 .08-.075.147-.17.147H14.64c-.092 0-.17-.067-.17-.148V1.596c0-.084.078-.15.17-.15h1.63c.093 0 .168.066.168.15z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="graph-line" viewBox="0 0 21 16">
      <title>graph-line icon</title>
      <title>Combined Shape Copy 16</title><path d="M19.88 16H.163C.074 16 0 15.927 0 15.835v-1.59c0-.093.074-.166.164-.166H19.88c.09 0 .166.072.166.164v1.59c0 .093-.075.166-.167.166zm.165-14.664c0 .74-.598 1.337-1.338 1.337-.737 0-1.336-.598-1.336-1.337C17.37.6 17.97 0 18.708 0c.74 0 1.338.6 1.338 1.336zm-2.27 2.012l-1.133-.998c-.037-.033-.084-.056-.14-.056-.07 0-.122.04-.16.095L11.34 8.086 8.71 5.053c-.288-.334-.708-.53-1.147-.543-.386-.008-.872.164-1.178.485l-6.3 6.57c-.13.13-.096.23 0 .325l1.075 1.03c.075.076.187.103.3-.014l6.05-6.308 2.635 3.046c.29.34.72.54 1.17.544.382-.005.883-.182 1.197-.528l5.286-6.02h-.002c.09-.105.085-.2-.02-.292z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="heart" viewBox="0 0 19 16">
      <title>heart icon</title>
      <title>Fill 1 Copy 8</title><path d="M17.122.952C15.87.042 14.17-.204 12.68.164c-1.452.368-2.547 1.46-3.204 2.734C8.82 1.624 7.726.532 6.276.164 4.783-.204 3.082.04 1.83.952.227 2.118-.367 4.202.224 6.075.666 7.48 1.637 8.722 2.67 9.753c2.1 2.102 5.254 5.032 6.372 6.062.11.112.264.185.434.185.172 0 .324-.073.436-.185 1.118-1.03 4.27-3.96 6.373-6.062 1.03-1.03 2-2.273 2.445-3.678.59-1.874-.003-3.957-1.608-5.123" fill-rule="evenodd"/>
    </symbol>
    <symbol id="help" viewBox="0 0 726 726">
      <title>help icon</title>
      <path d="M0 363c0-49.156 9.57-96.126 28.714-140.91 19.143-44.785 44.902-83.365 77.28-115.742C138.37 73.97 176.95 48.152 221.734 28.89 266.52 9.63 313.607 0 363 0c49.156 0 96.126 9.63 140.91 28.89 44.785 19.262 83.365 45.08 115.742 77.458 32.377 32.377 58.196 70.957 77.457 115.74C716.37 266.875 726 313.845 726 363c0 49.393-9.63 96.48-28.89 141.265-19.262 44.785-45.08 83.365-77.458 115.742-32.377 32.377-70.957 58.136-115.74 77.28C459.125 716.427 412.155 726 363 726c-49.393 0-96.48-9.57-141.265-28.714-44.785-19.143-83.365-44.902-115.742-77.28-32.377-32.376-58.136-70.956-77.28-115.74C9.573 459.48 0 412.392 0 363zm211.632-181.5l60.618 60.618c1.182-1.18 2.895-2.777 5.14-4.785 2.245-2.01 6.795-5.672 13.648-10.99 6.854-5.317 13.707-9.925 20.56-13.825 6.854-3.9 15.007-7.503 24.46-10.812 9.454-3.31 18.434-4.963 26.942-4.963 21.742 0 39.762 6.086 54.06 18.257 14.298 12.17 21.447 26.173 21.447 42.007 0 8.035-2.245 15.538-6.736 22.51-4.49 6.972-10.28 13.057-17.37 18.256-7.09 5.2-14.884 10.4-23.392 15.598-8.508 5.2-17.075 10.757-25.7 16.665-8.627 5.908-16.485 12.29-23.575 19.143-7.09 6.853-12.88 15.36-17.37 25.523-4.49 10.16-6.734 21.388-6.734 33.677v30.132h90.75v-14.89c0-6.853 3.012-13.41 9.04-19.674 6.025-6.263 13.47-11.817 22.332-16.66 8.86-4.846 18.55-11.05 29.068-18.612 10.517-7.563 20.206-15.775 29.068-24.637 8.863-8.863 16.307-20.856 22.333-35.98 6.027-15.126 9.04-32.142 9.04-51.048 0-44.43-16.01-80.707-48.034-108.83-32.022-28.123-71.43-42.185-118.223-42.185-17.015 0-33.794 2.6-50.337 7.8-16.543 5.198-30.663 11.52-42.362 18.964-11.697 7.444-22.154 14.83-31.37 22.155-9.218 7.326-16.07 13.59-20.56 18.788l-6.737 7.8zm90.75 393.132c0 16.78 5.908 31.077 17.724 42.893C331.923 629.342 346.22 635.25 363 635.25c16.78 0 31.077-5.908 42.894-17.725 11.816-11.816 17.724-26.114 17.724-42.893 0-16.78-5.908-31.018-17.724-42.716-11.817-11.7-26.115-17.548-42.894-17.548-16.78 0-31.077 5.85-42.894 17.548-11.816 11.698-17.724 25.936-17.724 42.716z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="human" viewBox="0 0 44 52">
      <title>human icon</title>
      <title>icon--human</title><path d="M36 14c0 7.732-6.268 14-14 14S8 21.732 8 14 14.268 0 22 0s14 6.268 14 14zM1 52c-.552 0-1-.448-1-1v-7.872c0-.28.114-.552.318-.746C5.78 37.23 13.46 34 22 34c8.538 0 16.218 3.228 21.682 8.382.204.194.318.466.318.746V51c0 .552-.448 1-1 1H1z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--alarm" viewBox="0 0 60 60">
      <title>icon--alarm icon</title>
      <title>icon--alarm</title><path d="M30 56C16.745 56 6 45.255 6 32S16.745 8 30 8s24 10.745 24 24-10.745 24-24 24zm0-6c9.94 0 18-8.06 18-18s-8.06-18-18-18-18 8.06-18 18 8.06 18 18 18zM6.128 11.27l9.948-6.71c.458-.31 1.08-.19 1.388.27L19.7 8.144l-11.605 7.83-2.237-3.317c-.31-.458-.188-1.08.27-1.388zm37.796-6.71l9.948 6.71c.458.308.58.93.27 1.388l-2.237 3.316L40.3 8.144l2.236-3.315c.308-.46.93-.58 1.388-.27zm-12.17 32.25c-.06.07-.123.14-.19.208-1.172 1.172-3.036 1.207-4.164.078-.12-.12-1.9-2.52-5.342-7.202-.43-.578-.355-1.4.172-1.928l.282-.282c.527-.527 1.35-.602 1.928-.173l3.984 2.956 8.137-7.203c.797-.6 1.913-.518 2.616.185l.376.376c.703.703.784 1.82.185 2.615L31.77 36.8c-.003.005-.01.008-.016.01z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--alert" viewBox="0 0 60 60">
      <title>icon--alert icon</title>
      <title>icon--alert</title><g fill-rule="evenodd"><path d="M30 4c14.36 0 26 11.64 26 26S44.36 56 30 56 4 44.36 4 30 15.64 4 30 4zm0 46.5c11.304 0 20.5-9.196 20.5-20.5S41.304 9.5 30 9.5 9.5 18.696 9.5 30 18.696 50.5 30 50.5zm0-13c1.93 0 3.5 1.57 3.5 3.5s-1.57 3.5-3.5 3.5-3.5-1.57-3.5-3.5 1.57-3.5 3.5-3.5zM28.23 34c-.277 0-.5-.202-.5-.45l-.48-4.95V16.45c0-.248.223-.45.5-.45h4.5c.275 0 .5.202.5.45V28.6l-.49 4.95c0 .248-.223.45-.5.45h-3.53z"/></g>
    </symbol>
    <symbol id="icon--arrow-down" viewBox="0 0 60 60">
      <title>icon--arrow-down icon</title>
      <title>icon--arrow-down</title><g fill-rule="evenodd"><path d="M40.707 42H33V5c0-.552-.447-1-1-1h-4c-.553 0-1 .448-1 1v37h-7.707c-.874 0-1.326 1.042-.732 1.68l10.707 11.53c.396.426 1.07.426 1.466 0L41.44 43.68c.593-.638.14-1.68-.733-1.68"/></g>
    </symbol>
    <symbol id="icon--arrow-left" viewBox="0 0 60 60">
      <title>icon--arrow-left icon</title>
      <title>icon--arrow-left</title><g fill-rule="evenodd"><path d="M55 27H18v-7.708c0-.872-1.042-1.326-1.68-.732L4.79 29.268c-.426.396-.426 1.068 0 1.464L16.32 41.44c.638.594 1.68.14 1.68-.732V33h37c.552 0 1-.448 1-1v-4c0-.552-.448-1-1-1"/></g>
    </symbol>
    <symbol id="icon--arrow-right" viewBox="0 0 60 60">
      <title>icon--arrow-right icon</title>
      <title>icon--arrow-right</title><g fill-rule="evenodd"><path d="M55.363 29.268L43.68 18.42c-.64-.594-1.68-.142-1.68.732V27H5c-.553 0-1 .448-1 1v4c0 .554.447 1 1 1h37v7.848c0 .874 1.04 1.328 1.68.734l11.683-10.85c.426-.394.426-1.068 0-1.464"/></g>
    </symbol>
    <symbol id="icon--arrow-up-right" viewBox="0 0 60 60">
      <title>icon--arrow-up-right icon</title>
      <title>icon--arrow-up-right</title><g fill-rule="evenodd"><path d="M53.03 6H36.97c-.863 0-1.295 1.042-.685 1.652l5.91 5.91-35.61 35.61c-.39.39-.39 1.024 0 1.414l2.828 2.828c.392.39 1.024.39 1.414 0l35.61-35.61 5.91 5.91c.61.61 1.652.178 1.652-.684V6.968c0-.534-.433-.968-.97-.968"/></g>
    </symbol>
    <symbol id="icon--arrow-up" viewBox="0 0 60 60">
      <title>icon--arrow-up icon</title>
      <title>icon--arrow-up</title><g fill-rule="evenodd"><path d="M41.44 16.32L30.73 4.79c-.393-.427-1.067-.427-1.463 0L18.56 16.32c-.595.64-.14 1.68.733 1.68H27v37c0 .553.447 1 1 1h4c.553 0 1-.447 1-1V18h7.707c.872 0 1.326-1.04.732-1.68"/></g>
    </symbol>
    <symbol id="icon--backer-badge" viewBox="0 0 784 750">
      <title>icon--backer-badge icon</title>
      <title>icon--backer-badge</title><path d="M768.94 337.98l-27.475-28.2c-19.414-20.144-32.236-59.698-28.206-87.532l5.127-38.82c4.03-28.202-15.385-54.937-43.225-59.7l-38.463-6.957c-27.84-4.76-61.542-29.298-74.73-54.203L543.656 28.14C530.467 3.237 498.598-7.017 473.322 5.07L438.156 22.28c-25.276 12.453-67.036 12.453-92.312 0L310.678 5.07c-25.276-12.086-57.145-1.832-70.333 23.073L222.03 62.568c-13.188 24.905-46.89 49.443-74.73 54.204l-38.462 6.96c-27.84 4.76-47.255 31.496-43.225 59.697l5.128 38.82c4.03 27.835-8.79 67.39-28.205 87.532l-27.474 28.2c-19.414 20.51-19.414 53.47 0 73.98l27.475 28.2C61.95 460.305 74.77 499.86 70.74 527.693l-5.127 38.822c-4.03 28.2 15.385 54.936 43.225 59.697l38.463 6.96c27.84 4.76 61.542 29.3 74.73 54.203l18.315 34.427c13.188 24.904 45.057 35.16 70.333 23.073l35.166-17.214c25.276-12.453 67.036-12.453 92.312 0l35.166 17.213c25.276 12.086 57.145 1.83 70.333-23.073l18.316-34.427c13.188-24.904 46.89-49.442 74.73-54.204l38.462-6.96c27.84-4.76 47.255-31.496 43.225-59.696l-5.128-38.822c-4.03-27.834 8.79-67.388 28.205-87.53l27.474-28.202c19.414-20.51 19.414-53.47 0-73.98zM483.944 504.985c-11.356 9.89-22.345 16.115-34.067 19.045-8.425 2.197-21.246 3.296-39.196 3.296h-80.59c-19.414 0-33.7-5.127-43.225-15.016-6.593-7.325-10.623-15.016-12.088-23.44-.734-4.028-1.1-13.184-1.1-27.467l-.366-188.248c-.367-18.678 7.326-32.96 22.345-42.85 7.325-4.76 17.582-7.69 30.403-8.423 2.93-.366 13.554-.366 45.79-.366 24.543 0 42.126 1.098 53.115 3.662 24.177 5.86 42.493 18.678 54.948 38.455 10.257 16.115 15.385 33.694 15.385 52.74 0 15.015-4.76 30.763-14.285 47.244 12.088 11.72 20.147 22.34 24.543 31.496 6.227 13.185 9.158 27.102 9.158 41.385 0 27.102-10.257 50.175-30.77 68.487z" fill-rule="nonzero"/>
    </symbol>
    <symbol id="icon--bell" viewBox="0 0 60 60">
      <title>icon--bell icon</title>
      <title>icon--bell</title><g fill-rule="evenodd"><path d="M51.14 41.56c.547 1.136.86 2.384.86 3.704v.282c0 .252-.223.454-.5.454h-43c-.275 0-.5-.202-.5-.454v-.282c0-1.32.313-2.568.86-3.704h-.01C14 33.272 14 26 14 20.546 14 13.412 19.654 7.49 27.108 6.25 27.44 4.958 28.603 4 30 4c1.397 0 2.56.958 2.893 2.25C40.347 7.49 46 13.412 46 20.546 46 26 46 33.272 51.15 41.56h-.01zM36.316 50c.724 0 1.232.756.922 1.412C35.957 54.124 33.197 56 30 56c-3.197 0-5.957-1.876-7.237-4.586-.31-.656.198-1.412.922-1.412L36.315 50z"/></g>
    </symbol>
    <symbol id="icon--bolt" viewBox="0 0 32 48">
      <title>icon--bolt icon</title>
      <title>icon--bolt</title><path d="M17.928 20.115L20.7 1.947C20.97.19 18.702-.735 17.684.72L.268 25.586c-.676.966.008 2.298 1.18 2.298h12.624l-2.77 18.168c-.27 1.76 1.998 2.682 3.014 1.228l17.416-24.87c.676-.963-.008-2.295-1.18-2.295H17.928z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--bookmark-outline" viewBox="0 0 12 16">
      <title>icon--bookmark-outline icon</title>
      <title>icon--bookmark-outline</title><path d="M0 0h12v15.067c0 .166-.134.3-.3.3-.055 0-.11-.015-.156-.043l-5.5-3.338-5.59 3.343c-.142.084-.326.037-.41-.105-.03-.046-.044-.1-.044-.154V0zm1.8 1.8v10.627l4.25-2.542 4.15 2.517V1.8H1.8z" fill-rule="nonzero"/>
    </symbol>
    <symbol id="icon--bookmark" viewBox="0 0 30 30">
      <title>icon--bookmark icon</title>
      <title>icon--bookmark</title><path d="M6.5 3.5v21.856l8.58-5.13 8.42 5.11V3.5h-17z"/>
    </symbol>
    <symbol id="icon--calculator" viewBox="0 0 30 30">
      <title>icon--calculator icon</title>
      <title>icon--calculator</title><path d="M8.02 8.02h13.96v4.65H8.02zM20.82 16.15v4.65a1.17 1.17 0 1 1-2.33 0v-4.65a1.17 1.17 0 0 1 2.33 0zM16.16 20.83A1.16 1.16 0 1 1 15 19.67a1.16 1.16 0 0 1 1.16 1.16zM16.16 16.16A1.16 1.16 0 1 1 15 15a1.16 1.16 0 0 1 1.16 1.16zM11.51 20.83a1.17 1.17 0 1 1-1.16-1.16 1.16 1.16 0 0 1 1.16 1.16zM11.51 16.16A1.17 1.17 0 1 1 10.35 15a1.16 1.16 0 0 1 1.16 1.16z"/><path d="M11.51 20.83a1.17 1.17 0 1 1-1.16-1.16 1.16 1.16 0 0 1 1.16 1.16zM11.51 16.16A1.17 1.17 0 1 1 10.35 15a1.16 1.16 0 0 1 1.16 1.16zM16.16 20.83A1.16 1.16 0 1 1 15 19.67a1.16 1.16 0 0 1 1.16 1.16zM16.16 16.16A1.16 1.16 0 1 1 15 15a1.16 1.16 0 0 1 1.16 1.16zM20.82 16.15v4.65a1.17 1.17 0 1 1-2.33 0v-4.65a1.17 1.17 0 0 1 2.33 0zM8.02 8.02h13.96v4.65H8.02z"/><path d="M11.51 20.83a1.17 1.17 0 1 1-1.16-1.16 1.16 1.16 0 0 1 1.16 1.16zM11.51 16.16A1.17 1.17 0 1 1 10.35 15a1.16 1.16 0 0 1 1.16 1.16zM16.16 20.83A1.16 1.16 0 1 1 15 19.67a1.16 1.16 0 0 1 1.16 1.16zM16.16 16.16A1.16 1.16 0 1 1 15 15a1.16 1.16 0 0 1 1.16 1.16zM20.82 16.15v4.65a1.17 1.17 0 1 1-2.33 0v-4.65a1.17 1.17 0 0 1 2.33 0zM8.02 8.02h13.96v4.65H8.02z"/><path d="M22 4.53H8a2.33 2.33 0 0 0-2.31 2.33v16.28A2.33 2.33 0 0 0 8 25.47h14a2.33 2.33 0 0 0 2.33-2.33V6.86A2.33 2.33 0 0 0 22 4.53zm1.16 18.61A1.16 1.16 0 0 1 22 24.31H8a1.16 1.16 0 0 1-1.16-1.17V6.86A1.16 1.16 0 0 1 8 5.69h14a1.16 1.16 0 0 1 1.16 1.17z"/>
    </symbol>
    <symbol id="icon--calendar-check" viewBox="0 0 60 60">
      <title>icon--calendar-check icon</title>
      <title>icon--calendar-check</title><path d="M44.636 12H53v42H7V12h8.364V7c0-.552.468-1 1.045-1h4.18c.578 0 1.046.448 1.046 1v5h16.728V7c0-.552.468-1 1.045-1h4.18c.578 0 1.046.448 1.046 1v5zm-32.41 5v32h35.547V17H12.227zM27 43l-8-7c-.074-.09-.116-.728 0-1l2-2c-.076-.095.555-.137 1 0l5 5 11-14c.042-.063.67-.124 1 0l2 2c.06-.124.123.515 0 1L28 43c-.306.072-.953.126-1 0z" fill-rule="nonzero"/>
    </symbol>
    <symbol id="icon--calendar" viewBox="0 0 60 60">
      <title>icon--calendar icon</title>
      <title>icon--calendar</title><g fill-rule="evenodd"><path d="M14 48h32V24H14v24zm30-36V7c0-.552-.448-1-1-1h-4c-.552 0-1 .448-1 1v5H22V7c0-.552-.448-1-1-1h-4c-.552 0-1 .448-1 1v5H8v42h44V12h-8z"/><path d="M20 34h4v-4h-4M28 34h4v-4h-4M36 34h4v-4h-4M20 42h4v-4h-4M28 42h4v-4h-4M36 42h4v-4h-4"/></g>
    </symbol>
    <symbol id="icon--campaign-outline" viewBox="0 0 30 30">
      <title>icon--campaign-outline icon</title>
      <title>icon--campaign-outline</title><g transform="translate(1 5)" fill-rule="evenodd"><path d="M7 3h21V0H7M7 12h12V9H7M7 21h21v-3H7"/><circle cx="1.5" cy="19.5" r="1.5"/><circle cx="1.5" cy="10.5" r="1.5"/><circle cx="1.5" cy="1.5" r="1.5"/></g>
    </symbol>
    <symbol id="icon--check" viewBox="0 0 60 60">
      <title>icon--check icon</title>
      <title>icon--check</title><g fill-rule="evenodd"><path d="M23.14 49.114l-16.798-14.7c-.416-.362-.458-.996-.094-1.41l2.634-3.012c.364-.414.996-.456 1.412-.092l12.92 11.306 25.4-30.842c.352-.426.982-.486 1.406-.136l3.088 2.542c.426.35.488.98.136 1.406L24.57 48.996c-.358.436-1.006.49-1.43.118z"/></g>
    </symbol>
    <symbol id="icon--chevron-down" viewBox="0 0 60 60">
      <title>icon--chevron-down icon</title>
      <title>icon--chevron-down</title><path fill-rule="nonzero" d="M30 45l26-26-5-5-21 21L9 14l-5 5"/>
    </symbol>
    <symbol id="icon--chevron-left" viewBox="0 0 60 60">
      <title>icon--chevron-left icon</title>
      <title>icon--chevron-left</title><path fill-rule="nonzero" d="M14 30l26 26 5-5-21-21L45 9l-5-5"/>
    </symbol>
    <symbol id="icon--chevron-right" viewBox="0 0 60 60">
      <title>icon--chevron-right icon</title>
      <title>icon--chevron-right</title><path fill-rule="nonzero" d="M45 30L19 4l-5 5 21 21-21 21 5 5"/>
    </symbol>
    <symbol id="icon--chevron-up" viewBox="0 0 60 60">
      <title>icon--chevron-up icon</title>
      <title>icon--chevron-up</title><path fill-rule="nonzero" d="M30 14L4 40l5 5 21-21 21 21 5-5"/>
    </symbol>
    <symbol id="icon--circle-around" viewBox="0 0 60 60">
      <title>icon--circle-around icon</title>
      <title>icon--circle-around</title><g fill-rule="evenodd"><path d="M4.878 23.667c-.476 0-.862-.384-.862-.862V8.53c0-.767.928-1.153 1.47-.61l4.832 4.833c5.084-5.924 12.766-9.548 21.296-9.038 13.142.788 23.858 11.736 24.382 24.892.014.356-.012.704-.012 1.06h-5.998c0-1.248-.082-2.514-.322-3.804-1.474-7.954-7.862-14.348-15.814-15.836-7.74-1.45-14.866 1.61-19.272 6.984l5.184 5.19c.544.54.158 1.467-.608 1.467H4.878zm50.26 12c.477 0 .863.384.863.862v14.273c0 .768-.927 1.154-1.47.61L49.7 46.58c-5.085 5.925-12.767 9.55-21.297 9.04C15.26 54.83 4.545 43.882 4.02 30.726c-.013-.356.013-.704.015-1.06h5.996c0 1.248.085 2.514.323 3.804 1.476 7.955 7.864 14.35 15.814 15.837 7.74 1.45 14.866-1.61 19.272-6.984l-5.185-5.188c-.542-.54-.158-1.468.608-1.468H55.14z"/></g>
    </symbol>
    <symbol id="icon--circle-back" viewBox="0 0 60 60">
      <title>icon--circle-back icon</title>
      <title>icon--circle-back</title><g fill-rule="evenodd"><path d="M31.598 4.05c13.142.787 23.858 11.733 24.38 24.89C56.568 43.78 44.712 56 30 56c-10.652 0-19.786-6.417-23.802-15.59-.234-.535.06-1.16.614-1.347l3.808-1.27c.486-.162 1.002.078 1.216.546C15.002 45.212 21.948 50 30 50c12.274 0 22-11.113 19.646-23.805-1.474-7.952-7.86-14.348-15.814-15.836-7.738-1.45-14.862 1.61-19.272 6.983l5.186 5.188c.544.543.158 1.47-.608 1.47H4.862C4.386 24 4 23.616 4 23.14V8.862c0-.768.928-1.152 1.47-.608l4.832 4.832c5.086-5.924 12.764-9.55 21.296-9.038z"/></g>
    </symbol>
    <symbol id="icon--circle-forward" viewBox="0 0 60 60">
      <title>icon--circle-forward icon</title>
      <title>icon--circle-forward</title><g fill-rule="evenodd"><path d="M54.53 8.254c.543-.542 1.47-.158 1.47.61v14.274c0 .478-.385.862-.86.862H40.862c-.768 0-1.152-.928-.61-1.468l5.186-5.188C41.03 11.97 33.904 8.91 26.166 10.36c-7.952 1.488-14.34 7.882-15.814 15.836C8 38.886 17.727 50 30 50c8.053 0 14.997-4.788 18.163-11.662.216-.466.732-.708 1.218-.544l3.807 1.268c.554.186.85.814.616 1.348C49.787 49.582 40.653 56 30 56 15.29 56 3.43 43.782 4.02 28.94 4.546 15.784 15.26 4.836 28.404 4.048c8.53-.51 16.21 3.114 21.296 9.038l4.83-4.832z"/></g>
    </symbol>
    <symbol id="icon--circle-loader" viewBox="0 0 52 52">
      <title>icon--circle-loader icon</title>
      <title>Page 1</title><g fill-rule="evenodd"><animateTransform attributeName="transform" type="rotate" from="0 26 26" to="360 26 26" dur="0.8s" repeatCount="indefinite"/><path d="M26 5.098C14.474 5.098 5.098 14.474 5.098 26c0 11.526 9.376 20.902 20.902 20.902 11.526 0 20.902-9.376 20.902-20.902 0-11.526-9.376-20.902-20.902-20.902M26 52C11.664 52 0 40.336 0 26S11.664 0 26 0s26 11.664 26 26-11.664 26-26 26" opacity=".1"/><path d="M42.582 11.967c-.652 0-1.304-.25-1.8-.748-3.95-3.95-9.2-6.123-14.782-6.123-1.408 0-2.548-1.14-2.548-2.548C23.452 1.14 24.592 0 26 0c6.946 0 13.474 2.705 18.384 7.615.996.996.996 2.608 0 3.604-.498.497-1.15.747-1.802.747"/></g>
    </symbol>
    <symbol id="icon--circle" viewBox="0 0 60 60">
      <title>icon--circle icon</title>
      <circle cx="30" cy="30" r="26"/>
    </symbol>
    <symbol id="icon--clipboard" viewBox="0 0 60 60">
      <title>icon--clipboard icon</title>
      <title>icon--clipboard</title><g fill-rule="evenodd"><path d="M49 10c.552 0 1 .448 1 1v44c0 .552-.448 1-1 1H11c-.552 0-1-.448-1-1V11c0-.552.448-1 1-1h11.284c.096-.378.194-.758.344-1.114.406-.958.992-1.818 1.716-2.544.362-.36.758-.688 1.184-.976.85-.574 1.818-.99 2.858-1.204C28.908 4.056 29.448 4 30 4c3.722 0 6.824 2.556 7.716 6H49zm-4.5 40.5v-35H40V19c0 .552-.448 1-1 1H21c-.552 0-1-.448-1-1v-3.5h-4.5v35h29zM27.782 10c-.482.532-.782 1.228-.782 2 0 1.654 1.346 3 3 3s3-1.346 3-3c0-.772-.3-1.468-.782-2-.264-.294-.586-.538-.948-.708-.016-.006-.028-.016-.044-.024-.16-.072-.326-.126-.5-.168-.032-.01-.062-.024-.096-.03-.204-.044-.414-.07-.63-.07-.216 0-.426.026-.63.07-.034.006-.064.02-.096.03-.172.042-.34.096-.5.168l-.042.024c-.364.17-.686.412-.95.708zm-1.05 32.365l-7.296-6.384c-.416-.363-.458-.993-.094-1.41l1.316-1.503c.364-.416.996-.458 1.41-.096l4.97 4.35L37.82 24.23c.352-.43.982-.49 1.408-.14l1.544 1.273c.424.352.486.982.136 1.408L28.162 42.248c-.358.436-1.006.49-1.43.118z"/></g>
    </symbol>
    <symbol id="icon--clock" viewBox="0 0 60 60">
      <title>icon--clock icon</title>
      <title>icon--clock</title><g fill-rule="evenodd"><path d="M50.276 19.198C52.622 22.906 54 27.288 54 32c0 13.254-10.746 24-24 24S6 45.254 6 32c0-10.446 6.686-19.306 16-22.606V5c0-.552.448-1 1-1h14c.552 0 1 .448 1 1v4.394c2.536.898 4.876 2.198 6.94 3.842l2.896-2.518c.416-.36 1.046-.316 1.41.1l3.936 4.528c.362.416.318 1.048-.098 1.41l-2.808 2.442zM30 50.5c10.202 0 18.5-8.298 18.5-18.5S40.202 13.5 30 13.5 11.5 21.798 11.5 32 19.798 50.5 30 50.5zm2.246-28.782l1.61 11.274c.086.324.144.658.144 1.008 0 2.21-1.792 4-4 4-2.21 0-4-1.79-4-4 0-.35.058-.684.144-1.008l1.61-11.274c.14-.986.986-1.718 1.98-1.718h.532c.994 0 1.84.732 1.98 1.718z"/></g>
    </symbol>
    <symbol id="icon--closed-caption" viewBox="0 0 60 60">
      <title>icon--closed-caption icon</title>
      <title>icon--closed-caption</title><g fill-rule="evenodd"><path d="M45.96 38.266c-1.355 1.3-3.107 1.954-5.26 1.954-1.21 0-2.32-.204-3.33-.606-1.007-.406-1.905-1.024-2.695-1.848-.788-.824-1.406-1.926-1.85-3.3-.446-1.38-.668-2.97-.668-4.774 0-1.574.242-3.004.722-4.286.48-1.28 1.123-2.324 1.927-3.128.802-.808 1.706-1.426 2.708-1.856 1.004-.426 2.052-.64 3.146-.64 2.023 0 3.74.628 5.15 1.886.883.79 1.505 1.774 1.92 2.91l-3.775.946c-.158-.35-.32-.694-.546-1-.293-.39-.67-.696-1.13-.914-.46-.218-.985-.328-1.58-.328-1.29 0-2.385.562-3.28 1.688-.893 1.124-1.34 2.698-1.34 4.722 0 1.23.125 2.312.377 3.242.25.93.594 1.664 1.032 2.2.435.538.925.936 1.46 1.198.54.258 1.123.388 1.75.388.623 0 1.16-.114 1.623-.348.458-.23.838-.57 1.134-1.012.268-.402.468-.86.632-1.344l3.753 1.25c-.436 1.18-1.048 2.196-1.884 3m-20 0c-1.355 1.3-3.107 1.954-5.26 1.954-1.21 0-2.32-.204-3.33-.606-1.007-.406-1.905-1.024-2.695-1.848-.788-.824-1.406-1.926-1.85-3.3-.446-1.38-.668-2.97-.668-4.774 0-1.574.24-3.004.722-4.286.48-1.28 1.123-2.324 1.927-3.128.802-.808 1.706-1.426 2.708-1.856 1.004-.426 2.052-.64 3.146-.64 2.023 0 3.74.628 5.147 1.886.886.79 1.508 1.774 1.924 2.91l-3.775.946c-.158-.35-.32-.694-.546-1-.293-.39-.67-.696-1.13-.914-.46-.218-.987-.328-1.58-.328-1.293 0-2.387.562-3.28 1.688-.893 1.124-1.34 2.698-1.34 4.722 0 1.23.125 2.312.377 3.242.25.93.594 1.664 1.032 2.2.435.538.923.936 1.46 1.198.54.258 1.123.388 1.75.388.62 0 1.16-.114 1.62-.348.46-.23.84-.57 1.137-1.012.268-.402.47-.86.634-1.344l3.753 1.25c-.436 1.18-1.05 2.196-1.884 3M52 8H8c-2.21 0-4 1.792-4 4v36c0 2.21 1.79 4 4 4h44c2.21 0 4-1.79 4-4V12c0-2.208-1.79-4-4-4"/></g>
    </symbol>
    <symbol id="icon--code" viewBox="0 0 60 60">
      <title>icon--code icon</title>
      <title>icon--code</title><g fill-rule="evenodd"><path d="M21.35 49.237L2.82 30.707c-.39-.39-.39-1.024 0-1.414l18.53-18.53c.39-.392 1.023-.392 1.413 0l2.474 2.474c.392.39.392 1.024 0 1.414L9.89 30l15.347 15.35c.392.39.392 1.02 0 1.413l-2.474 2.474c-.39.39-1.024.39-1.414 0zm15.887 0l-2.474-2.474c-.392-.392-.392-1.024 0-1.414L50.11 30 34.764 14.65c-.392-.39-.392-1.023 0-1.413l2.474-2.474c.39-.392 1.024-.392 1.414 0l18.53 18.53c.39.39.39 1.024 0 1.414l-18.53 18.53c-.39.39-1.023.39-1.413 0z"/></g>
    </symbol>
    <symbol id="icon--collapse" viewBox="0 0 60 60">
      <title>icon--collapse icon</title>
      <title>icon--collapse</title><path d="M43.19 20.864L54 10.054 49.947 6l-10.81 10.81-5.647-5.645c-.583-.583-1.578-.17-1.578.655v15.343c0 .51.412.925.925.925H48.18c.825 0 1.238-.995.655-1.578l-5.646-5.646zm-15.1 11.973V48.18c0 .825-.997 1.236-1.58.655l-5.646-5.646L10.054 54 6 49.947l10.81-10.81-5.645-5.65c-.58-.58-.17-1.577.655-1.577h15.343c.513 0 .927.414.927.927z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--commissions" viewBox="0 0 60 60">
      <title>icon--commissions icon</title>
      <title>icon--commissions</title><path d="M54 98c-24.3 0-44-19.7-44-44s19.7-44 44-44 44 19.7 44 44-19.7 44-44 44zm0-12c17.674 0 32-14.326 32-32S71.674 22 54 22 22 36.326 22 54s14.326 32 32 32z" fill-rule="nonzero"/>
    </symbol>
    <symbol id="icon--compass" viewBox="0 0 60 60">
      <title>icon--compass icon</title>
      <title>icon--compass</title><g fill-rule="evenodd"><path d="M30 4c14.36 0 26 11.64 26 26S44.36 56 30 56 4 44.36 4 30 15.64 4 30 4zm0 46.5c11.304 0 20.5-9.196 20.5-20.5S41.304 9.5 30 9.5 9.5 18.696 9.5 30 18.696 50.5 30 50.5zm11.898-31.83c.02.052.05.096.062.154.036.174.034.358-.04.548l-6.104 15.87c-.102.264-.31.474-.574.574l-15.87 6.104c-.122.048-.246.07-.364.07-.66 0-1.192-.676-.928-1.362l6.104-15.87c.1-.264.31-.472.574-.574l15.87-6.104c.122-.048.244-.068.364-.068.046 0 .084.026.128.032.07.01.128.024.192.048.104.038.194.088.278.156.05.04.098.074.14.122.076.09.126.188.168.3zM24.236 35.764l8.326-3.202-5.124-5.124-3.202 8.326z"/></g>
    </symbol>
    <symbol id="icon--confirmation" viewBox="0 0 52 52">
      <title>icon--confirmation icon</title>
      <title>icon--confirmation</title><path d="M26 0C11.64 0 0 11.64 0 26s11.64 26 26 26 26-11.64 26-26c0-6.896-2.74-13.51-7.615-18.385C39.51 2.74 32.895 0 26 0zm14 16.8L23.02 37.26c-.11.115-.26.18-.42.18-.16 0-.31-.065-.42-.18l-10-8.68c-.115-.11-.18-.26-.18-.42 0-.16.065-.31.18-.42l1.6-1.74c.233-.23.607-.23.84 0l7.62 6.66 14.98-18.2c.226-.226.594-.226.82 0L39.86 16c.212.176.27.477.14.72v.08z" fill-rule="nonzero"/>
    </symbol>
    <symbol id="icon--conversion" viewBox="0 0 60 60">
      <title>icon--conversion icon</title>
      <title>icon-conversion</title><g fill-rule="evenodd"><path d="M1 30.027l7.248-7.372 7.247 7.372H1zm8.146 0c0 5.838 2.044 10.822 6.117 14.98 4.074 4.157 8.988 6.22 14.728 6.22 3.697 0 7.176-.957 10.423-2.874 3.247-1.917 5.812-4.57 7.697-7.947l.232-.34 2.377 1.27-.233.456c-2.116 3.76-5 6.738-8.668 8.92C38.15 52.894 34.21 54 29.99 54c-6.493 0-12.045-2.344-16.64-7.033-4.61-4.688-6.914-10.32-6.914-16.925l2.71-.015zm41.674 0c0-5.84-2.043-10.822-6.116-14.98-4.074-4.157-8.988-6.22-14.713-6.22-3.696 0-7.174.957-10.42 2.873-3.248 1.917-5.814 4.57-7.698 7.947l-.232.34-2.378-1.27.232-.456c2.117-3.758 5-6.736 8.67-8.918 3.666-2.183 7.61-3.288 11.827-3.288 6.495 0 12.046 2.344 16.64 7.032 4.61 4.69 6.916 10.336 6.916 16.94H50.82zm-6.334 0H58.98L51.735 37.4l-7.248-7.373z"/><path d="M26.49 36.92c.745.747 1.69 1.218 2.818 1.41v-7.628c-1-.25-1.864-.526-2.592-.82-.728-.296-1.337-.656-1.82-1.062-.48-.415-.836-.913-1.063-1.513-.227-.59-.337-1.31-.337-2.16 0-.866.155-1.65.455-2.37.3-.72.71-1.347 1.238-1.873.518-.526 1.137-.94 1.846-1.254.71-.305 1.474-.49 2.283-.545v-1.9h1.564v1.928c1.53.194 2.757.766 3.658 1.725.91.96 1.555 2.288 1.928 3.976h-2.41c-.382-1.9-1.437-3.016-3.175-3.34v7.086l1.702.46c.382.093.82.27 1.337.51.508.238 1 .57 1.473.995.472.424.873.95 1.21 1.587.327.636.5 1.393.5 2.27 0 .94-.155 1.77-.464 2.5-.31.728-.747 1.356-1.293 1.88-.546.527-1.2.942-1.955 1.256-.755.304-1.592.498-2.5.572v2.362h-1.566v-2.37c-1.89-.195-3.392-.86-4.51-2.003-1.12-1.145-1.747-2.723-1.9-4.734h2.41c.026 1.282.417 2.297 1.163 3.054zm.508-14.52c-.637.562-.955 1.392-.955 2.49 0 .498.082.922.246 1.282.162.36.39.655.68.895.292.24.637.443 1.038.618.4.175.836.323 1.31.46v-6.733c-.91.083-1.683.415-2.32.987zm5.34 15.636c.444-.157.835-.378 1.163-.673.328-.296.583-.674.765-1.126.182-.452.273-.987.273-1.596 0-.552-.09-1.023-.282-1.392-.19-.378-.446-.692-.764-.97-.32-.266-.71-.497-1.164-.672-.455-.185-.937-.35-1.447-.507v7.222c.52-.037 1.01-.13 1.457-.286z"/></g>
    </symbol>
    <symbol id="icon--cpu" viewBox="0 0 26 26">
      <title>icon--cpu icon</title>
      <g fill-rule="nonzero"><path d="M19 7v12H7V7h12zm2.5-3h-17c-.276 0-.5.224-.5.5v17c0 .276.224.5.5.5h17c.276 0 .5-.224.5-.5v-17c0-.276-.224-.5-.5-.5zM15 22h2v4h-2zM9 22h2v4H9zM22 15h4v2h-4zM22 9h4v2h-4zM0 15h4v2H0zM0 9h4v2H0zM15 0h2v4h-2zM9 0h2v4H9z"/></g>
    </symbol>
    <symbol id="icon--cross" viewBox="0 0 60 60">
      <title>icon--cross icon</title>
      <title>icon--cross</title><path d="M34.242 30.3l15.556-15.557c.392-.392.392-1.024 0-1.414L46.97 10.5c-.39-.39-1.022-.39-1.414 0L30 26.058 14.444 10.5c-.392-.39-1.024-.39-1.414 0l-2.83 2.83c-.39.39-.39 1.02 0 1.413L25.758 30.3 10.2 45.854c-.39.392-.39 1.024 0 1.414l2.83 2.827c.39.392 1.022.392 1.414 0L30 34.54l15.556 15.557c.392.392 1.024.392 1.414 0l2.828-2.828c.392-.39.392-1.023 0-1.415L34.242 30.3z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--curve-right" viewBox="0 0 33 33">
      <title>icon--curve-right icon</title>
      <title>icon--curve-right</title><path d="M2.5 5c0-.276.224-.5.5-.5s.5.224.5.5h-1zM31 29.5c.276 0 .5.224.5.5s-.224.5-.5.5v-1zM3 20h-.5.5zm.5-15v15h-1V5h1zM13 29.5h18v1H13v-1zM3.5 20c0 5.247 4.253 9.5 9.5 9.5v1C7.2 30.5 2.5 25.8 2.5 20h1z"/><path d="M27.763 32.228c.683-1.438.72-3.01.015-4.446L31.938 30l-4.175 2.228z" stroke="#0A007D"/><circle r="2.25" transform="matrix(0 1 1 0 3 3)" stroke="#0A007D" stroke-width="1.5"/>
    </symbol>
    <symbol id="icon--delta-down" viewBox="0 0 60 60">
      <title>icon--delta-down icon</title>
      <title>icon--delta-down</title><defs><path id="a" d="M0 60h60V0H0z"/></defs><g fill-rule="evenodd"><path d="M13.05 20h33.9c.915 0 1.39 1.09.767 1.762L30.77 40.016c-.417.446-1.123.446-1.54 0L12.284 21.762C11.66 21.09 12.135 20 13.05 20z"/></g>
    </symbol>
    <symbol id="icon--delta-left" viewBox="0 0 60 60">
      <title>icon--delta-left icon</title>
      <title>icon--delta-left</title><g fill-rule="evenodd"><path d="M38 13.054v33.892c0 .918-1.094 1.396-1.766.772L17.984 30.77c-.448-.416-.448-1.124 0-1.54l18.25-16.946c.672-.626 1.766-.148 1.766.77z"/></g>
    </symbol>
    <symbol id="icon--delta-right" viewBox="0 0 60 60">
      <title>icon--delta-right icon</title>
      <title>icon--delta-right</title><g fill-rule="evenodd"><path d="M21.647 13.054c0-.918 1.094-1.396 1.766-.77l18.25 16.946c.448.416.448 1.124 0 1.54l-18.25 16.948c-.672.624-1.766.146-1.766-.772V13.054z"/></g>
    </symbol>
    <symbol id="icon--delta-up" viewBox="0 0 60 60">
      <title>icon--delta-up icon</title>
      <title>icon--delta-up</title><g fill-rule="evenodd"><path d="M13.054 40c-.918 0-1.396-1.094-.77-1.766l16.946-18.25c.416-.448 1.124-.448 1.54 0l16.948 18.25c.624.672.146 1.766-.772 1.766H13.054z"/></g>
    </symbol>
    <symbol id="icon--download" viewBox="0 0 60 60">
      <title>icon--download icon</title>
      <title>icon--download</title><g fill-rule="evenodd"><path d="M51 36h-4c-.552 0-1 .448-1 1v7H14v-7c0-.552-.448-1-1-1H9c-.552 0-1 .448-1 1v12c0 .552.448 1 1 1h42c.552 0 1-.448 1-1V37c0-.552-.448-1-1-1m-31.506-8.948c-.55-.592-.13-1.556.678-1.556h7.144V11.278c0-.552.448-1 1-1h3.56c.554 0 1 .448 1 1v14.218h6.974c.872 0 1.326 1.042.732 1.68L30.83 37.68c-.396.428-1.07.428-1.466 0l-9.87-10.628"/></g>
    </symbol>
    <symbol id="icon--ellipsis" viewBox="0 0 60 60">
      <title>icon--ellipsis icon</title>
      <g fill-rule="nonzero"><circle cx="11.5" cy="30.5" r="5.5"/><circle cx="30.5" cy="30.5" r="5.5"/><circle cx="48.5" cy="30.5" r="5.5"/></g>
    </symbol>
    <symbol id="icon--expand" viewBox="0 0 60 60">
      <title>icon--expand icon</title>
      <title>icon--expand</title><path d="M53.03 6H36.97c-.863 0-1.295 1.042-.685 1.654l5.91 5.908L30.88 24.878l4.24 4.244 11.317-11.318 5.91 5.91c.61.61 1.652.178 1.652-.684V6.968c0-.534-.433-.968-.97-.968zM29.12 35.122L17.806 46.438l5.91 5.91c.608.61.178 1.652-.686 1.652H6.97c-.537 0-.97-.434-.97-.968V36.97c0-.862 1.043-1.294 1.653-.684l5.91 5.91L24.88 30.878l4.24 4.244z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--external" viewBox="0 0 60 60">
      <title>icon--external icon</title>
      <title>icon--external</title><g fill-rule="evenodd"><path d="M51.03 8c.537 0 .97.434.97.968V25.03c0 .862-1.043 1.294-1.653.684l-6.086-6.086-21.607 21.61c-.392.39-1.024.39-1.414 0l-2.48-2.476c-.39-.39-.39-1.022 0-1.414L40.37 15.74l-6.085-6.086C33.675 9.042 34.107 8 34.97 8h16.06zM51 30c.552 0 1 .448 1 1v20c0 .552-.448 1-1 1H9c-.552 0-1-.448-1-1V9c0-.552.448-1 1-1h20c.552 0 1 .448 1 1v3.5c0 .552-.448 1-1 1H13.5v33h33V31c0-.552.448-1 1-1H51z"/></g>
    </symbol>
    <symbol id="icon--eye" viewBox="0 0 60 60">
      <title>icon--eye icon</title>
      <title>icon--eye</title><g fill-rule="evenodd"><path d="M55.708 29.095c.25.348.25.796 0 1.144C53.518 33.31 44 47.666 30 47.666c-14 0-23.518-14.358-25.708-17.428-.25-.35-.25-.797 0-1.145C6.482 26.025 16 11.667 30 11.667c14 0 23.518 14.358 25.708 17.428zM30 41.667c6.626 0 12-5.374 12-12s-5.374-12-12-12-12 5.374-12 12 5.374 12 12 12zm0-18c3.308 0 6 2.692 6 6s-2.692 6-6 6-6-2.692-6-6 2.692-6 6-6z"/></g>
    </symbol>
    <symbol id="icon--facebook" viewBox="0 0 60 60">
      <title>icon--facebook icon</title>
      <title>icon--facebook</title><path d="M54 30.147C54 16.81 43.255 6 30 6S6 16.81 6 30.147C6 42.2 14.776 52.19 26.25 54V37.127h-6.094v-6.98h6.094v-5.32c0-6.052 3.583-9.395 9.065-9.395 2.626 0 5.373.472 5.373.472v5.942H37.66c-2.98 0-3.91 1.862-3.91 3.77v4.53h6.656l-1.064 6.98H33.75V54C45.224 52.19 54 42.2 54 30.147" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--filter" viewBox="0 0 60 60">
      <title>icon--filter icon</title>
      <title>icon--filter</title><g fill-rule="evenodd"><path d="M13 16.5c.65 0 1.252-.19 1.774-.5 1.028-.61 1.726-1.72 1.726-3s-.698-2.39-1.726-3c-.522-.31-1.124-.5-1.774-.5-.65 0-1.252.19-1.774.5-1.028.61-1.726 1.72-1.726 3s.698 2.39 1.726 3c.522.31 1.124.5 1.774.5zM51 10c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1H21.45c-1.242 3.488-4.538 6-8.45 6-4.97 0-9-4.03-9-9s4.03-9 9-9c3.912 0 7.208 2.512 8.45 6H51zm-4 11c4.97 0 9 4.03 9 9s-4.03 9-9 9c-3.914 0-7.21-2.514-8.45-6.002V33H9c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h29.55v.002C39.79 23.512 43.086 21 47 21zm0 12.5c1.93 0 3.5-1.57 3.5-3.5s-1.57-3.5-3.5-3.5-3.5 1.57-3.5 3.5 1.57 3.5 3.5 3.5zM51 44c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1H21.45v-.002C20.21 53.486 16.914 56 13 56c-4.97 0-9-4.03-9-9s4.03-9 9-9c3.914 0 7.21 2.514 8.45 6.002V44H51zm-38 6.5c1.93 0 3.5-1.57 3.5-3.5s-1.57-3.5-3.5-3.5-3.5 1.57-3.5 3.5 1.57 3.5 3.5 3.5z"/></g>
    </symbol>
    <symbol id="icon--flag" viewBox="0 0 60 60">
      <title>icon--flag icon</title>
      <title>icon--flag</title><g fill-rule="evenodd"><path d="M10 51V9c0-.552.448-1 1-1h4c.552 0 1 .448 1 1v42c0 .552-.448 1-1 1h-4c-.552 0-1-.448-1-1zM20 9c0-.552.448-1 1-1h15l2 4h11c.552 0 1 .448 1 1v20c0 .552-.448 1-1 1H36l-2-4H21c-.552 0-1-.448-1-1V9z"/></g>
    </symbol>
    <symbol id="icon--frown-filled" viewBox="0 0 60 60">
      <title>icon--frown-filled icon</title>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M56 30c0 14.36-11.64 26-26 26S4 44.36 4 30 15.64 4 30 4s26 11.64 26 26zm-36.933 9.467c-.663.883-.483 2.137.4 2.8.884.663 2.138.483 2.8-.4 1.818-2.424 4.63-4.533 7.734-4.533s5.916 2.11 7.734 4.533c.663.884 1.916 1.063 2.8.4.883-.663 1.063-1.917.4-2.8-2.182-2.91-6.037-6.133-10.933-6.133-4.895 0-8.75 3.223-10.933 6.133zm8.71-17.91c0 1.962-1.59 3.554-3.555 3.554-1.963 0-3.555-1.59-3.555-3.554 0-1.964 1.592-3.556 3.555-3.556 1.964 0 3.556 1.592 3.556 3.556zm8 3.554c1.964 0 3.556-1.59 3.556-3.554 0-1.964-1.592-3.556-3.556-3.556-1.963 0-3.555 1.592-3.555 3.556 0 1.963 1.592 3.555 3.555 3.555z"/>
    </symbol>
    <symbol id="icon--frown" viewBox="0 0 60 60">
      <title>icon--frown icon</title>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M8 30C8 17.85 17.85 8 30 8s22 9.85 22 22-9.85 22-22 22S8 42.15 8 30zM30 4C15.64 4 4 15.64 4 30s11.64 26 26 26 26-11.64 26-26S44.36 4 30 4zM19.067 39.466c-.663.884-.484 2.138.4 2.8.883.663 2.137.484 2.8-.4 1.818-2.423 4.63-4.533 7.734-4.533 3.103 0 5.915 2.11 7.733 4.533.663.884 1.917 1.063 2.8.4.884-.662 1.063-1.916.4-2.8-2.18-2.91-6.036-6.133-10.932-6.133-4.895 0-8.75 3.224-10.933 6.133zm8.71-17.91c0 1.963-1.59 3.555-3.555 3.555-1.963 0-3.555-1.59-3.555-3.554 0-1.964 1.592-3.556 3.555-3.556 1.964 0 3.556 1.592 3.556 3.556zm8 3.555c1.964 0 3.556-1.59 3.556-3.554 0-1.964-1.592-3.556-3.556-3.556-1.963 0-3.555 1.592-3.555 3.556 0 1.963 1.592 3.555 3.555 3.555z"/>
    </symbol>
    <symbol id="icon--gear" viewBox="0 0 60 60">
      <title>icon--gear icon</title>
      <title>icon--gear</title><g fill-rule="evenodd"><path d="M31.557 39.706c4.148-.636 7.538-4.026 8.172-8.172 1.02-6.656-4.63-12.306-11.287-11.288-4.148.636-7.536 4.026-8.172 8.172-1.017 6.656 4.63 12.306 11.287 11.288zm18.056-9.686c0 .92-.148 1.798-.268 2.684l4.832 4.534c.286.27.398.692.272 1.066-1.1 3.258-2.79 6.226-5 8.76-.263.3-.683.414-1.063.3l-6.37-1.926c-1.43 1.122-2.982 2.084-4.692 2.776l-1.522 6.494c-.088.382-.39.684-.774.76C33.4 55.8 31.726 56 30 56c-1.727 0-3.4-.2-5.03-.532-.383-.076-.685-.378-.775-.76l-1.52-6.494c-1.71-.692-3.26-1.654-4.692-2.776l-6.37 1.926c-.38.114-.8 0-1.062-.3-2.21-2.534-3.9-5.502-5-8.76-.123-.374-.013-.796.275-1.066l4.832-4.534c-.122-.886-.27-1.764-.27-2.684 0-.918.148-1.796.27-2.682l-4.832-4.536c-.288-.27-.398-.69-.274-1.066 1.1-3.256 2.79-6.224 5-8.76.263-.3.683-.412 1.063-.298l6.37 1.926c1.432-1.122 2.982-2.086 4.692-2.776l1.52-6.496c.09-.382.392-.682.776-.76 1.63-.33 3.303-.532 5.03-.532 1.725 0 3.4.202 5.03.532.383.078.683.378.773.76l1.522 6.496c1.71.69 3.262 1.654 4.692 2.776l6.37-1.926c.38-.114.802 0 1.062.298 2.21 2.536 3.9 5.502 5 8.76.125.374.013.796-.273 1.066l-4.832 4.536c.12.886.268 1.764.268 2.682z"/></g>
    </symbol>
    <symbol id="icon--globe-africa" viewBox="0 0 60 60">
      <title>icon--globe-africa icon</title>
      <title>icon--globe-africa</title><g fill-rule="evenodd"><path d="M30 50.5C18.696 50.5 9.5 41.304 9.5 30c0-10.24 7.556-18.726 17.382-20.236L28 12v4l1.834 1.834c.11.11.242.192.388.24L36 20v2l-3.554 1.778c-.28.14-.612.14-.892 0L28 22v-2h-5.588c-.264 0-.516.106-.704.292l-3.416 3.416c-.188.186-.292.44-.292.704v3.354c0 .154.036.306.106.444l1.746 3.494c.096.192.252.348.444.444l3.494 1.746c.138.07.29.106.446.106H28v4l2 4v2l1.494 1.492c.302.302.764.38 1.148.188l2.808-1.404c.338-.17.55-.514.55-.892v-2.972c0-.264.104-.518.292-.704l1.416-1.416c.188-.186.292-.44.292-.704v-3.176c0-.264-.104-.518-.292-.704L36 32v-2h4v-2l-2-2v-2l3.79-1.894c.138-.07.29-.106.446-.106h3.352c.264 0 .516.106.704.292l1.594 1.594c.074.074.162.138.258.186l1.692.846c.418 1.628.664 3.324.664 5.082 0 11.304-9.196 20.5-20.5 20.5M30 4C15.64 4 4 15.64 4 30s11.64 26 26 26 26-11.64 26-26S44.36 4 30 4"/></g>
    </symbol>
    <symbol id="icon--globe-america" viewBox="0 0 60 60">
      <title>icon--globe-america icon</title>
      <title>icon--globe-america</title><g fill-rule="evenodd"><path d="M44 44.934V42h-4v-2l-1.706-1.704c-.188-.19-.444-.296-.71-.296H32v2l-2 2v2l2 2 3.682 3.682c-1.806.524-3.71.818-5.682.818-11.304 0-20.5-9.194-20.5-20.5 0-6.82 3.362-12.858 8.5-16.586v2.174c0 .264.104.518.292.704l1.004 1.006c.39.388.39 1.016 0 1.406l-3.004 3.006c-.188.184-.292.438-.292.702V28l2 2 2 2v2l5.918 3.946c.054.036.106.078.152.124L28 40h2v-3.006c0-.548-.446-.994-.996-.994h-2.592c-.264 0-.516-.106-.704-.29l-1.416-1.418c-.188-.186-.292-.44-.292-.704V30h2l2 2h2l5.556-3.704c.278-.184.444-.494.444-.828v-2.474c0-.548.446-.994.996-.994H40v-2l-3.554-1.776c-.28-.142-.612-.142-.892 0l-2.912 1.456c-.384.192-.846.116-1.148-.188L30 20v-2h6v-2h-2v-2l-1.708-1.708c-.188-.186-.44-.292-.704-.292h-5.176c-.264 0-.516-.106-.704-.29l-1.274-1.274c-.05-.05-.12-.062-.18-.102C26.08 9.802 28.004 9.5 30 9.5c11.304 0 20.5 9.196 20.5 20.5 0 5.89-2.51 11.192-6.5 14.934M30 4C15.64 4 4 15.642 4 30c0 14.36 11.64 26 26 26s26-11.64 26-26C56 15.642 44.36 4 30 4"/></g>
    </symbol>
    <symbol id="icon--globe-asia" viewBox="0 0 60 60">
      <title>icon--globe-asia icon</title>
      <title>icon--globe-asia</title><g fill-rule="evenodd"><path d="M47 41.444c2.21-3.27 3.5-7.21 3.5-11.444 0-7.8-4.382-14.596-10.812-18.058L36 14h-4v2h2v2h2l2 2v2h-3.582c-.268 0-.524.108-.714.296L32 24v2l-1.884 1.884c-.076.076-.14.164-.19.262L28 32h-2l-2-4v-2h-2l-1.704 1.704c-.19.188-.296.446-.296.714V34h-2l-1.926-3.854c-.05-.098-.114-.186-.19-.262l-3.588-3.588c-.19-.188-.446-.296-.714-.296H9.898c-.258 1.294-.398 2.63-.398 4 0 11.304 9.196 20.5 20.5 20.5 2.72 0 5.32-.533 7.7-1.5H37v-2l-2-2h-2l-1.707 1.708c-.188.186-.442.292-.706.292H25v-2h2l1.71-1.708c.185-.186.29-.44.29-.706v-2.968c0-.38.215-.726.55-.894l3.305-1.652c.096-.048.184-.112.26-.188L35 35h2l1.295 1.294c.388.39 1.022.39 1.412 0L41 35v-2h-2l-2-2v-2h7.383c.378 0 .724.212.892.55L47 33v2h-2l-2-2v2l2 4h2v2.444zM30 4c14.36 0 26 11.64 26 26S44.36 56 30 56 4 44.36 4 30 15.64 4 30 4z"/></g>
    </symbol>
    <symbol id="icon--graph-bar" viewBox="0 0 60 60">
      <title>icon--graph-bar icon</title>
      <title>icon--graph-bar</title><g fill-rule="evenodd"><path d="M51 46c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1H9c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h42zm-38-4c-.552 0-1-.448-1-1V17c0-.552.448-1 1-1h4c.552 0 1 .448 1 1v24c0 .552-.448 1-1 1h-4zm10 0c-.552 0-1-.448-1-1V9c0-.552.448-1 1-1h4c.552 0 1 .448 1 1v32c0 .552-.448 1-1 1h-4zm10 0c-.552 0-1-.448-1-1V23c0-.552.448-1 1-1h4c.552 0 1 .448 1 1v18c0 .552-.448 1-1 1h-4zm10 0c-.552 0-1-.448-1-1V13c0-.552.448-1 1-1h4c.552 0 1 .448 1 1v28c0 .552-.448 1-1 1h-4z"/></g>
    </symbol>
    <symbol id="icon--graph-line" viewBox="0 0 60 60">
      <title>icon--graph-line icon</title>
      <title>icon--graph-line</title><g fill-rule="evenodd"><path d="M51.5 52h-43c-.276 0-.5-.224-.5-.5v-5c0-.276.224-.5.5-.5h43c.276 0 .5.224.5.5v5c0 .276-.224.5-.5.5zM11.6 41.2l-3.2-2.4c-.442-.332-.53-.958-.2-1.4l12.638-16.852c.338-.45.984-.532 1.424-.18l9.296 7.436 15.488-18.93c.348-.426.978-.49 1.406-.14l3.098 2.532c.426.35.49.98.14 1.408L33.07 35.43c-.346.424-.97.49-1.398.148l-9.128-7.302L13 41c-.33.442-.956.532-1.4.2z"/></g>
    </symbol>
    <symbol id="icon--happy-filled" viewBox="0 0 60 60">
      <title>icon--happy-filled icon</title>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M56 30c0 14.36-11.64 26-26 26S4 44.36 4 30 15.64 4 30 4s26 11.64 26 26zm-34.743 3.45c-.304-1.062-1.41-1.677-2.473-1.373-1.062.303-1.677 1.41-1.373 2.473 1.672 5.852 6.623 9.472 12.59 9.472 5.966 0 10.918-3.62 12.59-9.472.303-1.063-.312-2.17-1.374-2.473-1.062-.303-2.17.312-2.472 1.374-1.172 4.104-4.53 6.572-8.744 6.572-4.214 0-7.57-2.468-8.743-6.57zm6.52-11.894c0 1.963-1.59 3.555-3.555 3.555-1.964 0-3.556-1.59-3.556-3.554 0-1.964 1.592-3.556 3.556-3.556s3.556 1.592 3.556 3.556zm8 3.555c1.964 0 3.556-1.59 3.556-3.554 0-1.964-1.592-3.556-3.555-3.556-1.964 0-3.556 1.592-3.556 3.556 0 1.963 1.592 3.555 3.556 3.555z"/>
    </symbol>
    <symbol id="icon--happy" viewBox="0 0 60 60">
      <title>icon--happy icon</title>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M8 30C8 17.85 17.85 8 30 8s22 9.85 22 22-9.85 22-22 22S8 42.15 8 30zM30 4C15.64 4 4 15.64 4 30s11.64 26 26 26 26-11.64 26-26S44.36 4 30 4zm-8.743 29.45c-.304-1.062-1.41-1.677-2.473-1.373-1.062.303-1.677 1.41-1.373 2.473 1.672 5.852 6.623 9.472 12.59 9.472 5.966 0 10.918-3.62 12.59-9.472.303-1.063-.312-2.17-1.374-2.473-1.062-.303-2.17.312-2.472 1.374-1.172 4.104-4.53 6.572-8.744 6.572-4.214 0-7.57-2.468-8.743-6.57zm6.52-11.894c0 1.963-1.59 3.555-3.555 3.555-1.964 0-3.556-1.59-3.556-3.554 0-1.964 1.592-3.556 3.556-3.556s3.556 1.592 3.556 3.556zm8 3.555c1.964 0 3.556-1.59 3.556-3.554 0-1.964-1.592-3.556-3.555-3.556-1.964 0-3.556 1.592-3.556 3.556 0 1.963 1.592 3.555 3.556 3.555z"/>
    </symbol>
    <symbol id="icon--heart-outline" viewBox="0 0 60 60">
      <title>icon--heart-outline icon</title>
      <title>icon--heart outline</title><path d="M18.817 12.55c-2.174 0-4.305.626-5.923 1.805-2.876 2.09-4.052 5.9-2.926 9.474.79 2.5 2.575 5.153 5.307 7.887C19.14 35.58 26.72 42.367 30 45.282c3.288-2.925 10.88-9.722 14.724-13.565 2.733-2.732 4.517-5.387 5.304-7.886 1.13-3.576-.046-7.384-2.924-9.476-2.28-1.657-5.574-2.224-8.596-1.48-3.326.842-5.213 3.668-6.043 5.276-.477.925-1.427 1.505-2.466 1.505-1.038 0-1.99-.58-2.465-1.503-.828-1.61-2.72-4.436-6.063-5.283-.87-.215-1.768-.32-2.655-.32zm12.42 33.828l.013.01-.014-.01zm-2.486.01l-.004.006.005-.005zM30 51.464c-.87 0-1.74-.31-2.434-.928-1.887-1.67-11.585-10.27-16.212-14.897-3.416-3.416-5.6-6.735-6.675-10.14-1.844-5.854.147-12.133 4.952-15.63 3.62-2.63 8.55-3.522 13.183-2.38 2.75.697 5.21 2.248 7.184 4.485 1.97-2.237 4.424-3.786 7.164-4.48 4.653-1.144 9.58-.258 13.202 2.376h.002c4.806 3.496 6.797 9.776 4.95 15.627-1.072 3.406-3.255 6.723-6.673 10.14-4.488 4.487-13.55 12.545-16.22 14.906-.692.613-1.557.92-2.424.92z" fill-rule="nonzero"/>
    </symbol>
    <symbol id="icon--heart-thin-outline" viewBox="0 0 16 14">
      <title>icon--heart-thin-outline icon</title>
      <title>Fill 1</title><path d="M8.13 13.05h.002zM8 12.93c.722-.644 1.543-1.384 2.373-2.142 1.293-1.183 2.342-2.17 3.02-2.852.968-.975 1.633-1.94 1.94-2.924.446-1.42-.02-2.955-1.174-3.8-.903-.662-2.176-.877-3.334-.59-.997.254-1.84 1.01-2.38 2.067L8 3.563l-.445-.87C7.015 1.635 6.17.878 5.175.625c-1.16-.288-2.432-.073-3.334.588-1.154.845-1.62 2.38-1.174 3.8.308.986.973 1.95 1.94 2.925.68.683 1.73 1.67 3.02 2.852.832.76 1.667 1.51 2.374 2.142z" stroke="#A0A0A0" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--heart" viewBox="0 0 60 60">
      <title>icon--heart icon</title>
      <title>icon--heart</title><g fill-rule="evenodd"><path d="M50.977 10.664c4.402 3.202 6.03 8.916 4.41 14.052-1.216 3.858-3.88 7.266-6.706 10.092-4.99 4.99-15.327 14.174-18.023 16.56-.38.336-.934.336-1.312 0-2.698-2.386-13.034-11.57-18.024-16.56-2.825-2.826-5.49-6.234-6.707-10.092-1.618-5.136.008-10.85 4.41-14.052 3.434-2.498 8.102-3.17 12.192-2.162C25.197 9.51 28.2 12.506 30 16.004c1.8-3.498 4.803-6.494 8.785-7.502 4.09-1.008 8.758-.336 12.192 2.162z"/></g>
    </symbol>
    <symbol id="icon--home-with-door" viewBox="0 0 18 18">
      <title>icon--home-with-door icon</title>
      <path fill-rule="evenodd" d="M9.155 1.89c-.118-.12-.31-.12-.43 0L1.59 9.025c-.19.19-.056.516.213.516h1.19c.276 0 .5.224.5.5v5.856c0 .166.136.302.303.302H4.5c.276 0 .5-.224.5-.5v-4.2c0-.276.224-.5.5-.5h3c.276 0 .5.224.5.5v4.2c0 .276.224.5.5.5h4.704c.166 0 .303-.136.303-.302v-5.856c0-.276.224-.5.5-.5h1.19c.27 0 .404-.325.214-.516L9.156 1.89z"/>
    </symbol>
    <symbol id="icon--home" viewBox="0 0 60 60">
      <title>icon--home icon</title>
      <title>icon--home</title><g fill-rule="evenodd"><path d="M29.088 6.296c.394-.394 1.034-.394 1.428 0l24.188 23.792c.634.634.184 1.72-.714 1.72h-5.634v21.184c0 .556-.454 1.008-1.01 1.008H12.654c-.556 0-1.01-.452-1.01-1.008V31.808H6.01c-.898 0-1.348-1.086-.714-1.72L29.088 6.296z"/></g>
    </symbol>
    <symbol id="icon--human" viewBox="0 0 60 60">
      <title>icon--human icon</title>
      <title>icon--human</title><g fill-rule="evenodd"><path d="M42 18c0 6.626-5.374 12-12 12s-12-5.374-12-12S23.374 6 30 6s12 5.374 12 12zM10 52v-8.278C14.982 38.984 22.086 36 30 36s15.018 2.984 20 7.722V52H10z"/></g>
    </symbol>
    <symbol id="icon--humans" viewBox="0 0 60 60">
      <title>icon--humans icon</title>
      <title>icon--humans</title><g fill-rule="evenodd"><path d="M20 32c-6.074 0-11-4.924-11-11s4.926-11 11-11 11 4.924 11 11-4.926 11-11 11zm24 0c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8-3.582 8-8 8zm-24 4.182c7.124 0 11.516 3.052 16 7.896V52H4v-7.922c4.484-4.844 8.876-7.896 16-7.896zM42 36c5.54 0 10.512 2.238 14 5.792V52H40v-9.488l-1.064-1.148c-1.294-1.4-2.684-2.748-4.212-3.982C36.968 36.504 39.418 36 42 36z"/></g>
    </symbol>
    <symbol id="icon--image" viewBox="0 0 60 60">
      <title>icon--image icon</title>
      <title>icon--image</title><g fill-rule="evenodd"><path d="M4 9c0-.552.448-1 1-1h50c.552 0 1 .448 1 1v42c0 .552-.448 1-1 1H5c-.552 0-1-.448-1-1V9zm5.5 37.5h41v-33h-41v33zm4.734-6.227l6.376-7.97c.398-.496 1.136-.536 1.582-.088l5.536 5.534 7.586-11.38c.43-.643 1.378-.63 1.786.027l8.736 13.978c.442.706-.066 1.624-.9 1.624H15.064c-.89 0-1.386-1.03-.83-1.727zM24 24c0 2.208-1.792 4-4 4s-4-1.792-4-4 1.792-4 4-4 4 1.792 4 4z"/></g>
    </symbol>
    <symbol id="icon--inbox" viewBox="0 0 60 60">
      <title>icon--inbox icon</title>
      <title>icon--inbox</title><g fill-rule="evenodd"><path d="M17.254 14h25.492l3.2 24h-9.004c-.482 0-.932.334-.996.812C35.546 41.738 33.034 44 30 44s-5.546-2.262-5.946-5.188c-.064-.478-.512-.812-.996-.812h-9.006l3.202-24zm34.744 24L48.114 8.868c-.068-.496-.488-.868-.99-.868H12.876c-.5 0-.924.372-.992.868L8 38l-.002 13c0 .552.448 1 1 1H51c.276 0 .526-.112.708-.292.18-.182.292-.432.292-.708V38h-.002z"/></g>
    </symbol>
    <symbol id="icon--info" viewBox="0 0 60 60">
      <title>icon--info icon</title>
      <title>icon--info</title><g fill-rule="evenodd"><path d="M30 4c14.36 0 26 11.64 26 26S44.36 56 30 56 4 44.36 4 30 15.64 4 30 4zm0 46.5c11.304 0 20.5-9.196 20.5-20.5S41.304 9.5 30 9.5 9.5 18.696 9.5 30 18.696 50.5 30 50.5zm0-35c1.93 0 3.5 1.57 3.5 3.5s-1.57 3.5-3.5 3.5-3.5-1.57-3.5-3.5 1.57-3.5 3.5-3.5zM31.75 26c.552 0 1 .448 1 1v16c0 .552-.448 1-1 1h-3.5c-.552 0-1-.448-1-1V27c0-.552.448-1 1-1h3.5z"/></g>
    </symbol>
    <symbol id="icon--instagram" viewBox="0 0 60 60">
      <title>icon--instagram icon</title>
      <title>icon/instagram</title><path d="M29.993 37.338c-4.05 0-7.33-3.282-7.33-7.33 0-4.05 3.28-7.332 7.33-7.332 4.05 0 7.33 3.282 7.33 7.33 0 4.05-3.28 7.332-7.33 7.332zm0-18.625c-6.237 0-11.294 5.057-11.294 11.294S23.755 41.3 29.992 41.3c6.237 0 11.294-5.056 11.294-11.293 0-6.237-5.057-11.294-11.294-11.294zm0-10.7c-5.973 0-6.722.026-9.068.133-2.34.107-3.94.48-5.338 1.023-1.446.56-2.673 1.313-3.896 2.535-1.22 1.223-1.973 2.45-2.535 3.896C8.61 17 8.24 18.6 8.132 20.94 8.025 23.284 8 24.033 8 30.006c0 5.973.025 6.722.132 9.068.107 2.34.48 3.94 1.023 5.338.562 1.446 1.314 2.673 2.536 3.896 1.224 1.22 2.45 1.973 3.897 2.535 1.4.544 2.997.916 5.338 1.023 2.346.107 3.095.132 9.068.132 5.973 0 6.722-.025 9.068-.132 2.342-.107 3.94-.48 5.34-1.023 1.446-.562 2.672-1.314 3.895-2.536 1.222-1.224 1.975-2.45 2.537-3.897.543-1.4.915-2.997 1.022-5.338.107-2.346.132-3.095.132-9.068 0-5.973-.025-6.722-.132-9.068-.107-2.342-.48-3.94-1.022-5.34-.562-1.446-1.315-2.672-2.537-3.895-1.223-1.222-2.45-1.975-3.896-2.536-1.4-.545-2.998-.917-5.34-1.024-2.345-.107-3.094-.132-9.067-.132zm0 3.964c5.872 0 6.568.022 8.887.128 2.144.098 3.31.456 4.084.757 1.027.4 1.76.876 2.53 1.645.768.77 1.245 1.502 1.644 2.53.3.774.66 1.94.757 4.083.106 2.32.128 3.015.128 8.887s-.022 6.568-.128 8.887c-.098 2.144-.456 3.31-.757 4.084-.4 1.026-.876 1.76-1.645 2.53-.77.768-1.502 1.245-2.53 1.644-.774.3-1.94.66-4.083.757-2.32.105-3.014.127-8.887.127-5.873 0-6.568-.022-8.887-.128-2.144-.1-3.31-.457-4.084-.758-1.026-.4-1.76-.876-2.53-1.645-.768-.77-1.245-1.503-1.644-2.53-.3-.774-.66-1.94-.757-4.083-.105-2.32-.127-3.015-.127-8.887s.022-6.568.128-8.887c.1-2.144.457-3.31.758-4.084.4-1.027.876-1.76 1.645-2.53.77-.768 1.503-1.245 2.53-1.644.774-.3 1.94-.66 4.083-.757 2.32-.106 3.015-.128 8.887-.128zm14.38 6.29c0-1.458-1.182-2.64-2.64-2.64-1.458 0-2.64 1.182-2.64 2.64 0 1.458 1.182 2.64 2.64 2.64 1.458 0 2.64-1.182 2.64-2.64z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--lightbulb" viewBox="0 0 60 60">
      <title>icon--lightbulb icon</title>
      <title>icon--lightbulb</title><g fill-rule="evenodd"><path d="M30 56c-3.198 0-5.958-1.876-7.238-4.586-.308-.656.198-1.412.924-1.412L36.314 50c.726 0 1.232.756.924 1.412C35.958 54.124 33.198 56 30 56zm18-34c0 3.406-.962 6.58-2.606 9.296h.018c-.162.26-.312.492-.464.732l-.028.044C41.286 37.746 40 37.642 40 43.786V45c0 .552-.446 1-1 1H21c-.552 0-1-.448-1-1v-1.214c0-6.144-1.284-6.04-4.92-11.714-.01-.014-.018-.03-.026-.044-.154-.24-.304-.472-.466-.732h.02C12.964 28.58 12 25.406 12 22c0-9.942 8.06-18 18-18 9.942 0 18 8.058 18 18zm-7.312 6.448C41.874 26.49 42.5 24.258 42.5 22c0-6.892-5.606-12.5-12.5-12.5-6.892 0-12.5 5.608-12.5 12.5 0 2.258.628 4.49 1.812 6.448l.36.594.004.004.048.076c.778 1.218 1.444 2.148 2.03 2.97 1.91 2.67 3.156 4.608 3.582 8.408h9.328c.426-3.8 1.672-5.738 3.582-8.408.586-.82 1.25-1.75 2.028-2.964l.038-.06.024-.036.352-.584z"/></g>
    </symbol>
    <symbol id="icon--link" viewBox="0 0 60 60">
      <title>icon--link icon</title>
      <title>icon--link</title><g fill-rule="evenodd"><path d="M28.874 45.896l-3.108 3.108c-3.722 3.722-9.756 3.722-13.476 0l-1.498-1.498c-3.72-3.72-3.72-9.754 0-13.476l10.512-10.512c3.72-3.72 9.756-3.72 13.476 0l-.012-.012c.392.39.392 1.024 0 1.416l-3.078 3.076c-.39.392-1.024.392-1.414 0l.012.012c-1.24-1.24-3.252-1.24-4.492 0L15.284 38.522c-1.24 1.242-1.24 3.252 0 4.492l1.498 1.498c1.24 1.24 3.252 1.24 4.492 0l3.108-3.108c.39-.39 1.024-.39 1.414 0l3.078 3.078c.39.39.39 1.024 0 1.414zm1.996-31.944l3.162-3.162c3.72-3.72 9.754-3.72 13.476 0l1.496 1.498c3.724 3.722 3.724 9.756 0 13.476L38.44 36.33c-3.72 3.722-9.756 3.722-13.476 0l.012.012c-.392-.39-.392-1.024 0-1.414l3.078-3.078c.39-.392 1.024-.392 1.414 0l-.012-.012c1.24 1.24 3.252 1.24 4.492 0l10.564-10.566c1.242-1.24 1.242-3.25 0-4.492l-1.496-1.496c-1.24-1.242-3.252-1.242-4.492 0l-3.162 3.16c-.39.39-1.024.39-1.414 0l-3.078-3.078c-.39-.39-.39-1.024 0-1.414z"/></g>
    </symbol>
    <symbol id="icon--lock-black-bg" viewBox="0 0 32 32">
      <title>icon--lock-black-bg icon</title>
      <title>lock-icon</title><path d="M16 32c8.837 0 16-7.163 16-16S24.837 0 16 0 0 7.163 0 16s7.163 16 16 16zm-2.508-16.737v-.934c0-1.836 1.35-3.33 3.008-3.33 1.66 0 3.008 1.494 3.008 3.33v.933h.783c.145 0 .26.128.26.286v5.162c0 .16-.115.288-.26.288h-7.58c-.144 0-.26-.13-.26-.288V15.55c0-.16.116-.287.26-.287h.782zm4.822 0v-.934c0-1.108-.813-2.008-1.814-2.008-1 0-1.813.9-1.813 2.007v.933h3.627z" fill-rule="nonzero"/>
    </symbol>
    <symbol id="icon--lock" viewBox="0 0 60 60">
      <title>icon--lock icon</title>
      <title>icon--lock</title><g fill-rule="evenodd"><path d="M40 26H20v-6.776c0-5.318 4.486-9.644 10-9.644s10 4.326 10 9.644V26zm9 0h-3v-6.776C46 10.598 38.822 3.58 30 3.58s-16 7.018-16 15.644V26h-3c-.552 0-1 .448-1 1v24c0 .552.448 1 1 1h38c.552 0 1-.448 1-1V27c0-.552-.448-1-1-1z"/></g>
    </symbol>
    <symbol id="icon--mail" viewBox="0 0 60 60">
      <title>icon--mail icon</title>
      <title>icon--mail</title><g fill-rule="evenodd"><path d="M30 31.39L8.138 12.88c-.356-.3-.142-.88.322-.88h43.08c.464 0 .676.58.322.88L30 31.39zM4.823 15.317l16.75 14.176-16.74 15.064c-.32.29-.834.06-.834-.37v-28.49c0-.424.497-.656.823-.38zm50.355 0c.324-.276.822-.044.822.38v28.49c0 .43-.512.66-.834.37L38.43 29.496l16.748-14.178zm-19.83 16.786L52.044 47.13c.34.306.122.87-.336.87H8.292c-.458 0-.674-.564-.334-.87l16.696-15.028 3.428 2.902c.554.462 1.232.694 1.914.694.686 0 1.372-.234 1.936-.704l3.416-2.89z"/></g>
    </symbol>
    <symbol id="icon--meh-filled" viewBox="0 0 60 60">
      <title>icon--meh-filled icon</title>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M56 30c0 14.36-11.64 26-26 26S4 44.36 4 30 15.64 4 30 4s26 11.64 26 26zm-36.035 4.77c-1.047-.35-2.18.216-2.53 1.264-.35 1.048.218 2.18 1.266 2.53C20.978 39.324 25.878 40 30 40c4.122 0 9.023-.677 11.3-1.436 1.047-.35 1.613-1.482 1.264-2.53-.35-1.048-1.482-1.614-2.53-1.265C38.31 35.343 33.877 36 30 36c-3.878 0-8.31-.656-10.035-1.23zm7.813-13.214c0 1.963-1.592 3.555-3.556 3.555s-3.556-1.59-3.556-3.554c0-1.964 1.592-3.556 3.556-3.556s3.556 1.592 3.556 3.556zm8 3.555c1.963 0 3.555-1.59 3.555-3.554 0-1.964-1.592-3.556-3.556-3.556-1.963 0-3.555 1.592-3.555 3.556 0 1.963 1.592 3.555 3.555 3.555z"/>
    </symbol>
    <symbol id="icon--meh" viewBox="0 0 60 60">
      <title>icon--meh icon</title>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M8 30C8 17.85 17.85 8 30 8s22 9.85 22 22-9.85 22-22 22S8 42.15 8 30zM30 4C15.64 4 4 15.64 4 30s11.64 26 26 26 26-11.64 26-26S44.36 4 30 4zM19.965 34.77c-1.047-.35-2.18.216-2.53 1.264-.35 1.048.218 2.18 1.266 2.53C20.978 39.324 25.878 40 30 40c4.122 0 9.023-.677 11.3-1.436 1.047-.35 1.613-1.482 1.264-2.53-.35-1.048-1.482-1.614-2.53-1.265C38.31 35.343 33.877 36 30 36c-3.878 0-8.31-.656-10.035-1.23zm7.813-13.214c0 1.963-1.592 3.555-3.556 3.555s-3.556-1.59-3.556-3.554c0-1.964 1.592-3.556 3.556-3.556s3.556 1.592 3.556 3.556zm8 3.555c1.963 0 3.555-1.59 3.555-3.554 0-1.964-1.592-3.556-3.556-3.556-1.963 0-3.555 1.592-3.555 3.556 0 1.963 1.592 3.555 3.555 3.555z"/>
    </symbol>
    <symbol id="icon--menu" viewBox="0 0 60 60">
      <title>icon--menu icon</title>
      <title>icon--menu</title><g fill-rule="evenodd"><path d="M51 48H9c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h42c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1zm-8-15H9c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h34c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1zm8-15H9c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h42c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1z"/></g>
    </symbol>
    <symbol id="icon--message" viewBox="0 0 60 60">
      <title>icon--message icon</title>
      <title>icon--message</title><g fill-rule="evenodd"><path d="M55 8c.552 0 1 .448 1 1v34c0 .552-.448 1-1 1H36L21.83 55.73c-.718.618-1.83.106-1.83-.842V44H5c-.552 0-1-.448-1-1V9c0-.552.448-1 1-1h50z"/></g>
    </symbol>
    <symbol id="icon--mobile" viewBox="0 0 60 60">
      <title>icon--mobile icon</title>
      <title>icon--mobile</title><g fill-rule="evenodd"><path d="M17.5 44h25V12h-25v32zM34 51c0 .552-.448 1-1 1h-6c-.552 0-1-.448-1-1v-2c0-.552.448-1 1-1h6c.552 0 1 .448 1 1v2zM47.316 5.764c-.286-.426-.654-.794-1.08-1.08C45.598 4.252 44.828 4 44 4H16c-.828 0-1.598.252-2.236.684-.426.286-.794.654-1.08 1.08C12.252 6.402 12 7.172 12 8v44c0 2.208 1.792 4 4 4h28c2.208 0 4-1.792 4-4V8c0-.828-.252-1.598-.684-2.236z"/></g>
    </symbol>
    <symbol id="icon--overflow" viewBox="0 0 60 60">
      <title>icon--overflow icon</title>
      <title>icon--overflow</title><g fill-rule="nonzero"><circle cx="29.5" cy="11.5" r="5.5"/><circle cx="29.5" cy="30.5" r="5.5"/><circle cx="29.5" cy="48.5" r="5.5"/></g>
    </symbol>
    <symbol id="icon--pause" viewBox="0 0 60 60">
      <title>icon--pause icon</title>
      <title>icon--pause</title><g fill-rule="evenodd"><rect x="11" y="7" width="14" height="44" rx="1"/><rect x="36" y="7" width="14" height="44" rx="1"/></g>
    </symbol>
    <symbol id="icon--pencil" viewBox="0 0 60 60">
      <title>icon--pencil icon</title>
      <title>icon--pencil</title><g fill-rule="evenodd"><path d="M46.242 22.242l-8.484-8.484c-.39-.39-.39-1.024 0-1.416l4.648-4.646c.39-.392 1.024-.392 1.414 0l8.484 8.484c.392.39.392 1.024 0 1.414l-4.648 4.648c-.39.39-1.024.39-1.414 0zm-12.908-5.478c.39-.39 1.024-.388 1.414 0l8.486 8.49c.392.388.392 1.02.002 1.412L18 52H9c-.552 0-1-.446-1-1v-9l25.334-25.236z"/></g>
    </symbol>
    <symbol id="icon--pin" viewBox="0 0 60 60">
      <title>icon--pin icon</title>
      <title>icon--pin</title><g fill-rule="evenodd"><path d="M39.778 24.01C43.22 24.052 46 26.85 46 30.304V31c0 .553-.448 1-1 1H15c-.554 0-1-.447-1-1v-.695c0-3.454 2.778-6.252 6.222-6.296L22 8l-1.638-3.277c-.168-.332.076-.722.446-.722h18.384c.37 0 .612.39.446.723L38 8l1.778 16.01zM32.5 36c.276 0 .5.224.5.5l-2 19c0 .276-.224.5-.5.5h-1c-.276 0-.5-.224-.5-.5l-2-19c0-.276.224-.5.5-.5h5z"/></g>
    </symbol>
    <symbol id="icon--pinterest" viewBox="0 0 60 60">
      <title>icon--pinterest icon</title>
      <title>icon--pinterest</title><g fill-rule="evenodd"><path d="M30 6c13.254 0 24 10.744 24 24S43.254 54 30 54c-2.474 0-4.86-.376-7.106-1.07.978-1.594 2.44-4.208 2.982-6.294.292-1.12 1.496-5.704 1.496-5.704.782 1.494 3.068 2.758 5.502 2.758 7.238 0 12.452-6.658 12.452-14.93 0-7.928-6.47-13.862-14.794-13.862-10.358 0-15.858 6.954-15.858 14.524 0 3.522 1.872 7.902 4.87 9.298.456.212.7.12.804-.32.078-.334.484-1.964.666-2.722.058-.242.03-.452-.166-.69-.992-1.2-1.786-3.414-1.786-5.476 0-5.294 4.008-10.414 10.836-10.414 5.896 0 10.026 4.018 10.026 9.764 0 6.492-3.28 10.99-7.546 10.99-2.356 0-4.118-1.948-3.552-4.338.676-2.852 1.986-5.932 1.986-7.99 0-1.844-.988-3.382-3.036-3.382-2.408 0-4.342 2.492-4.342 5.828 0 2.128.718 3.566.718 3.566s-2.38 10.056-2.816 11.926c-.482 2.076-.292 4.988-.082 6.888C12.326 48.852 6 40.168 6 30 6 16.744 16.746 6 30 6z"/></g>
    </symbol>
    <symbol id="icon--play" viewBox="0 0 60 60">
      <title>icon--play icon</title>
      <title>icon--play</title><g fill-rule="evenodd"><path d="M8.003 9.03c0-.78.836-1.277 1.522-.903l41.938 22.876c.746.406.706 1.488-.066 1.84L9.457 51.905c-.68.312-1.454-.186-1.454-.934V9.03z"/></g>
    </symbol>
    <symbol id="icon--plus-human" viewBox="0 0 60 60">
      <title>icon--plus-human icon</title>
      <title>icon--plus-human</title><g fill-rule="evenodd"><path d="M50 20c0 6.626-5.374 12-12 12s-12-5.374-12-12S31.374 8 38 8s12 5.374 12 12zM19 54c-.552 0-1-.448-1-1v-6.83c0-.286.118-.56.326-.752C23.29 40.858 30.258 38 38 38c7.742 0 14.708 2.856 19.674 7.416.208.194.326.468.326.754V53c0 .552-.448 1-1 1H19zm2-26c.552 0 1 .448 1 1v2c0 .552-.448 1-1 1h-7v7c0 .552-.448 1-1 1h-2c-.552 0-1-.448-1-1v-7H3c-.552 0-1-.448-1-1v-2c0-.552.448-1 1-1h7v-7c0-.552.448-1 1-1h2c.552 0 1 .448 1 1v7h7z"/></g>
    </symbol>
    <symbol id="icon--plus" viewBox="0 0 60 60">
      <title>icon--plus icon</title>
      <title>icon--plus</title><g fill-rule="evenodd"><path d="M51 27c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1H33v18c0 .552-.448 1-1 1h-4c-.552 0-1-.448-1-1V33H9c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h18V9c0-.552.448-1 1-1h4c.552 0 1 .448 1 1v18h18z"/></g>
    </symbol>
    <symbol id="icon--prohibit" viewBox="0 0 60 60">
      <title>icon--prohibit icon</title>
      <title>icon--prohibit</title><g fill-rule="evenodd"><path d="M30 50c11.028 0 20-8.972 20-20 0-4.434-1.466-8.52-3.918-11.84L18.16 46.082C21.48 48.534 25.566 50 30 50zm0-40c-11.028 0-20 8.972-20 20 0 4.434 1.466 8.52 3.918 11.84L41.84 13.918C38.52 11.466 34.434 10 30 10zm0-6c14.36 0 26 11.64 26 26S44.36 56 30 56 4 44.36 4 30 15.64 4 30 4z"/></g>
    </symbol>
    <symbol id="icon--project-budget" viewBox="0 0 24 24">
      <title>icon--project-budget icon</title>
      <path fill-rule="evenodd" d="M8.56 9.956c.534-.894 1.406-1.564 2.44-1.83V2.05c-3.86.383-7.076 2.962-8.378 6.47l5.94 1.436zm-.558 1.923l-5.884-1.424C2.04 10.96 2 11.476 2 12c0 5.523 4.477 10 10 10 .65 0 1.283-.062 1.897-.18l-1.643-5.828c-.084.005-.17.008-.254.008-2.21 0-4-1.79-4-4 0-.04 0-.08.002-.12zM16 12c0-1.864-1.275-3.43-3-3.874V2.05c5.053.5 9 4.765 9 9.95 0 4.172-2.555 7.748-6.186 9.247l-1.657-5.878C15.265 14.657 16 13.414 16 12z"/>
    </symbol>
    <symbol id="icon--pull-quote" viewBox="0 0 60 60">
      <title>icon--pull-quote icon</title>
      <title>icon--pull-quote</title><path d="M25.365 12v7.232c-4.708.964-7.064 4.232-7.064 9.804h7.065V48H8V31.446C8 19.338 13.79 12.858 25.364 12M52 12v7.232c-4.71.964-7.065 4.232-7.065 9.804H52V48H34.634V31.446C34.635 19.338 40.423 12.858 52 12" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--question-filled" viewBox="0 0 60 60">
      <title>icon--question-filled icon</title>
      <title>icon--question-filled</title><path d="M30 56C15.64 56 4 44.36 4 30S15.64 4 30 4s26 11.64 26 26-11.64 26-26 26zm-2.692-21h4.066v-1.178c0-1.862 1.52-2.584 3.534-3.952 2.09-1.406 3.914-2.85 3.914-6.536 0-4.18-3.61-7.334-8.436-7.334-6.308 0-9.31 3.876-9.386 9.006l4.256.418c.152-2.584 1.178-5.282 5.016-5.282 3.116 0 4.218 1.786 4.218 3.458 0 2.394-1.71 3.42-3.572 4.674-2.052 1.33-3.61 2.546-3.61 5.244V35zm-.38 8.17h5.244v-5.054h-5.244v5.054z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--question" viewBox="0 0 60 60">
      <title>icon--question icon</title>
      <title>icon--question</title><g fill-rule="evenodd"><path d="M30 4c14.36 0 26 11.64 26 26S44.36 56 30 56 4 44.36 4 30 15.64 4 30 4zm3.477 46.213c8.488-1.404 15.332-8.248 16.736-16.736C52.527 19.47 40.53 7.47 26.523 9.79c-8.488 1.4-15.332 8.247-16.736 16.733-2.314 14.008 9.682 26.004 23.69 23.69zM29 37.5c1.93 0 3.5 1.57 3.5 3.5s-1.57 3.5-3.5 3.5-3.5-1.57-3.5-3.5 1.57-3.5 3.5-3.5zm5.45-21.66c3.143 1.88 4.585 5.71 3.433 9.103-.774 2.27-2.392 3.7-3.692 4.848-.617.55-1.2 1.065-1.62 1.597-.343.432-.73 1.12-.793 1.964-.008 0-.022.17-.022.17 0 .26-.21.47-.47.47h-4.57c-.252 0-.45-.2-.464-.45.003-.07.02-.14.02-.21v-.005c.055-1.91.725-3.756 1.98-5.346.727-.92 1.563-1.657 2.3-2.307 1.02-.902 1.82-1.612 2.125-2.5.324-.958-.116-2.058-1.05-2.618-.914-.548-2.328-.46-3.218.2-.682.508-1.16 1.394-1.326 2.416-.075.47-.495.807-.97.807h-3.535c-.61 0-1.062-.54-.996-1.144.287-2.652 1.57-5.022 3.55-6.492 2.67-1.98 6.503-2.19 9.32-.5z"/></g>
    </symbol>
    <symbol id="icon--reorder" viewBox="0 0 60 60">
      <title>icon--reorder icon</title>
      <title>icon-reorder</title><defs><path d="M16.017 8.418L8.7.538c-.27-.29-.73-.29-1 0L.383 8.42c-.408.438-.097 1.148.5 1.148H6.15V34.85c0 .378.306.683.683.683h2.733c.38 0 .684-.305.684-.683V9.566h5.267c.596 0 .906-.71.5-1.148" id="a"/><path d="M16.017 8.418L8.7.538c-.27-.29-.73-.29-1 0L.383 8.42c-.408.438-.097 1.148.5 1.148H6.15V34.85c0 .378.306.683.683.683h2.733c.38 0 .684-.305.684-.683V9.566h5.267c.596 0 .906-.71.5-1.148" id="c"/></defs><g fill-rule="evenodd"><g stroke="#979797" stroke-width=".1"><path d="M0 0h60v4H0z"/><path d="M0 0h4v60H0zM56 0h4v60h-4z"/><path d="M0 56h60v4H0z"/><circle cx="30" cy="30" r="26"/><path d="M12 4h36v52H12z"/><path d="M4 12h52v36H4z"/><path d="M8.05 8.05h43.9v43.9H8.05z"/></g><g transform="translate(22.3 7.733)"><mask id="b"><use xlink:href="#a"/></mask><use xlink:href="#a"/><path d="M0 0h41v41H0z" transform="translate(-12.3 -2.733)" mask="url(#b)"/></g><g transform="rotate(-180 19.35 26.133)"><mask id="d"><use xlink:href="#c"/></mask><use xlink:href="#c"/><path d="M0 0h41v41H0z" transform="translate(-12.3 -2.733)" mask="url(#d)"/></g></g>
    </symbol>
    <symbol id="icon--reply" viewBox="0 0 60 60">
      <title>icon--reply icon</title>
      <title>icon--reply</title><g fill-rule="evenodd"><path d="M55.738 28.182c.478.44.478 1.196 0 1.636L31.86 51.708c-.712.652-1.86.146-1.86-.818V38.152c-13.012.93-18.378 6.538-23.866 15.3-.63 1.01-2.154.532-2.154-.664 0-22.45 13.14-32.74 26.02-34.486V7.112c0-.966 1.148-1.47 1.86-.818l23.878 21.888z"/></g>
    </symbol>
    <symbol id="icon--reward" viewBox="0 0 15 14">
      <title>icon--reward icon</title>
      <path d="M3.93 4.144c.923-.048 1.84-.173 2.742-.376.15-.038.29-.106.415-.198.07.042.145.074.223.096.892.24 1.804.405 2.724.49 1.218.09 2.073-.1 2.59-.56.22-.21.383-.472.472-.763.088-.29.1-.6.03-.896-.05-.37-.192-.724-.415-1.025-.223-.3-.518-.54-.858-.697C10.467-.36 8.44.655 6.978 1.6 5.55.635 3.648-.367 2.29.13c-.35.137-.658.362-.896.652-.238.29-.397.637-.463 1.006-.08.294-.08.603-.005.897.076.294.228.564.44.78.498.486 1.346.71 2.564.677zM10.58 1.49c.08.003.16.02.236.052.07 0 .287.12.383.555.04.274-.056.363-.095.395-.49.472-2.66-.16-2.66-.16.618-.478 1.36-.77 2.137-.84zm-7.73.543c.108-.434.33-.51.4-.536.077-.028.157-.043.237-.045.776.105 1.507.43 2.104.938 0 0-2.2.536-2.666.045-.032-.04-.128-.128-.077-.402zm10.543 2.953H.638c-.453 0-.638.16-.638.638v1.078c0 .478.166.676.638.676h.344v5.103c0 .205.043.406.122.593.08.187.197.357.343.498.146.143.32.253.51.327.19.073.39.108.594.102h8.932c.402-.002.787-.163 1.07-.447.286-.285.446-.67.448-1.072V7.38h.395c.453 0 .677-.166.638-.638V5.662c0-.484-.172-.69-.638-.676zm-7.342 7.017h-3.15c-.018 0-.036-.004-.052-.01-.015-.007-.03-.017-.042-.03-.013-.012-.023-.027-.03-.043-.006-.016-.01-.034-.01-.05V7.403h3.26l.025 4.6zm5.237-.134c0 .016 0 .033-.007.05-.006.016-.016.03-.028.043-.012.013-.026.023-.042.03-.016.006-.033.01-.05.01H8.037V7.36h3.253v4.51z"/>
    </symbol>
    <symbol id="icon--save" viewBox="0 0 60 60">
      <title>icon--save icon</title>
      <title>icon--save</title><path d="M21.2 9.1v11c0 .608.492 1.1 1.1 1.1h15.4c.608 0 1.1-.492 1.1-1.1v-11c0-.608.492-1.1 1.1-1.1h1.477c1.167 0 2.287.464 3.112 1.29l6.22 6.22c.826.826 1.29 1.946 1.29 3.113V47.6c0 2.43-1.97 4.4-4.4 4.4H12.4C9.97 52 8 50.03 8 47.6V12.4C8 9.97 9.97 8 12.4 8h7.7c.608 0 1.1.492 1.1 1.1zM30 43.2c3.645 0 6.6-2.955 6.6-6.6 0-3.645-2.955-6.6-6.6-6.6-3.645 0-6.6 2.955-6.6 6.6 0 3.645 2.955 6.6 6.6 6.6zM31.222 8h2.445c.675 0 1.222.547 1.222 1.222v7.334c0 .675-.548 1.222-1.223 1.222h-2.445c-.675 0-1.222-.547-1.222-1.222V9.222C30 8.547 30.547 8 31.222 8z" fill-rule="nonzero"/>
    </symbol>
    <symbol id="icon--saved" viewBox="0 0 60 60">
      <title>icon--saved icon</title>
      <title>icon--saved</title><path d="M21.2 9.1v11c0 .608.492 1.1 1.1 1.1h15.4c.608 0 1.1-.492 1.1-1.1v-11c0-.608.492-1.1 1.1-1.1h1.477c1.167 0 2.287.464 3.112 1.29l6.22 6.22c.826.826 1.29 1.946 1.29 3.113V47.6c0 2.43-1.97 4.4-4.4 4.4H12.4C9.97 52 8 50.03 8 47.6V12.4C8 9.97 9.97 8 12.4 8h7.7c.608 0 1.1.492 1.1 1.1zm5.83 34.944c.174.152.44.13.587-.05l11.76-14.28c.146-.176.12-.434-.054-.578l-1.267-1.043c-.174-.143-.432-.12-.577.056L27.06 40.8l-5.3-4.638c-.17-.15-.43-.132-.578.038l-1.08 1.236c-.15.17-.132.43.038.578l6.89 6.03zM31.222 8h2.445c.675 0 1.222.547 1.222 1.222v7.334c0 .675-.548 1.222-1.223 1.222h-2.445c-.675 0-1.222-.547-1.222-1.222V9.222C30 8.547 30.547 8 31.222 8z" fill-rule="nonzero"/>
    </symbol>
    <symbol id="icon--search" viewBox="0 0 60 60">
      <title>icon--search icon</title>
      <title>icon--search</title><g fill-rule="evenodd"><path d="M26.104 6.104c11.044 0 20 8.954 20 20 0 4.44-1.464 8.528-3.912 11.846l11.412 11.412c.39.39.39 1.024 0 1.414l-2.828 2.828c-.196.196-.452.292-.708.292-.256 0-.51-.096-.706-.292L37.95 42.192c-3.318 2.448-7.406 3.912-11.846 3.912-11.044 0-20-8.954-20-20s8.956-20 20-20zm0 6c-7.718 0-14 6.28-14 14s6.282 14 14 14c2.988 0 5.854-.948 8.284-2.74L36.1 36.1l1.264-1.712c1.792-2.43 2.74-5.294 2.74-8.284 0-7.72-6.282-14-14-14z"/></g>
    </symbol>
    <symbol id="icon--section-break" viewBox="0 0 60 60">
      <title>icon--section-break icon</title>
      <title>icon--section-break</title><path d="M55 28H5c-.552 0-1 .448-1 1v2c0 .552.448 1 1 1h50c.552 0 1-.448 1-1v-2c0-.552-.448-1-1-1m-8 10h-4c-.552 0-1 .448-1 1v7H18v-7c0-.552-.448-1-1-1h-4c-.552 0-1 .448-1 1v12c0 .552.448 1 1 1h34c.552 0 1-.448 1-1V39c0-.552-.448-1-1-1M12 21V9c0-.552.448-1 1-1h34c.552 0 1 .448 1 1v12c0 .552-.448 1-1 1h-4c-.552 0-1-.448-1-1v-7H18v7c0 .552-.448 1-1 1h-4c-.552 0-1-.448-1-1" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--small-k" viewBox="0 0 60 60">
      <title>icon--small-k icon</title>
      <path fill-rule="nonzero" d="M43.34 29.838l4.31-4.304c4.467-4.46 4.467-11.72 0-16.18-4.466-4.458-11.74-4.458-16.207 0l-1.57 1.568C27.793 7.942 24.367 6 20.453 6 14.13 6 9 11.12 9 17.433V42.22c0 6.313 5.13 11.434 11.454 11.434 3.913 0 7.34-1.943 9.42-4.922l1.57 1.567c4.465 4.457 11.74 4.457 16.206 0 4.467-4.46 4.467-11.72 0-16.18l-4.31-4.282z"/>
    </symbol>
    <symbol id="icon--sound-hi" viewBox="0 0 60 60">
      <title>icon--sound-hi icon</title>
      <title>icon--sound-hi</title><g fill-rule="evenodd"><path d="M28.27 8.246c.687-.572 1.73-.084 1.73.81v41.888c0 .894-1.043 1.382-1.73.81L16.65 42H5.056C4.473 42 4 41.528 4 40.946V19.054C4 18.472 4.472 18 5.054 18H16.65l11.62-9.754zm17.363.992C51.925 13.984 56 21.512 56 30c0 8.488-4.075 16.016-10.367 20.762-.454.34-1.108.22-1.43-.244l-2.28-3.3c-.308-.44-.198-1.028.228-1.356C46.918 42.204 50 36.458 50 30c0-6.46-3.083-12.206-7.85-15.864-.425-.326-.535-.914-.227-1.356l2.28-3.298c.322-.464.976-.584 1.43-.244zm-6.48 9.463C42.122 21.354 44 25.204 44 29.5c0 4.515-2.07 8.54-5.306 11.2-.444.365-1.118.243-1.444-.23l-2.318-3.347c-.284-.408-.186-.948.186-1.276C36.878 34.293 38 32.03 38 29.5c0-2.327-.96-4.417-2.484-5.945-.354-.356-.434-.896-.15-1.308l2.318-3.344c.334-.486 1.028-.594 1.468-.202z"/></g>
    </symbol>
    <symbol id="icon--sound-lo" viewBox="0 0 60 60">
      <title>icon--sound-lo icon</title>
      <title>icon--sound-lo</title><g fill-rule="evenodd"><path d="M28.27 8.246c.687-.572 1.73-.084 1.73.81v41.888c0 .894-1.043 1.382-1.73.81L16.65 42H5.056C4.473 42 4 41.528 4 40.946V19.054C4 18.472 4.472 18 5.054 18H16.65l11.62-9.754zm9.412 10.656c.336-.484 1.032-.594 1.47-.202C42.124 21.354 44 25.202 44 29.5c0 4.516-2.07 8.54-5.306 11.198-.446.366-1.118.246-1.444-.228l-2.318-3.348c-.284-.408-.186-.946.188-1.274C36.882 34.292 38 32.028 38 29.5c0-2.326-.958-4.416-2.484-5.946-.354-.356-.434-.894-.148-1.306l2.314-3.346z"/></g>
    </symbol>
    <symbol id="icon--sound-mute" viewBox="0 0 60 60">
      <title>icon--sound-mute icon</title>
      <title>icon--sound-mute</title><g fill-rule="evenodd"><path d="M28.27 8.246c.687-.572 1.73-.084 1.73.81v41.888c0 .894-1.043 1.382-1.73.81L16.65 42H5.056C4.473 42 4 41.528 4 40.946V19.054C4 18.472 4.472 18 5.054 18H16.65l11.62-9.754zm27.144 13.168c.39.39.39 1.024 0 1.414L49.242 29l6.172 6.172c.39.39.39 1.024 0 1.414l-2.828 2.828c-.39.39-1.024.39-1.414 0L45 33.242l-6.172 6.172c-.39.39-1.024.39-1.414 0l-2.828-2.828c-.39-.39-.39-1.024 0-1.414L40.758 29l-6.172-6.172c-.39-.39-.39-1.024 0-1.414l2.828-2.828c.39-.39 1.024-.39 1.414 0L45 24.758l6.172-6.172c.39-.39 1.024-.39 1.414 0l2.828 2.828z"/></g>
    </symbol>
    <symbol id="icon--star-outline" viewBox="0 0 20 20">
      <title>icon--star-outline icon</title>
      <title>Star Outline</title><path d="M18.847 7.73c.147.012.207.203.095.303l-4.71 4.24c-.063.056-.09.144-.072.227l1.41 6.215c.046.2-.163.358-.332.25l-5.243-3.303c-.07-.044-.16-.044-.23 0L4.52 18.966c-.168.107-.378-.05-.332-.25l1.41-6.216c.02-.083-.008-.17-.07-.227l-4.413-3.97c-.222-.202-.103-.582.19-.607l5.8-.5c.083-.007.156-.062.188-.142l2.38-5.912c.077-.19.336-.19.413 0l2.38 5.912c.032.08.104.135.188.142l6.193.534z" stroke="#037362" stroke-width="2" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--star" viewBox="0 0 60 60">
      <title>icon--star icon</title>
      <title>icon--star</title><g fill-rule="evenodd"><path d="M56.874 23.44c.442.036.62.586.286.876L43.042 36.564c-.188.162-.27.416-.212.658l4.226 17.954c.136.576-.49 1.032-.998.724l-15.712-9.544c-.212-.128-.48-.128-.692 0L13.942 55.9c-.508.308-1.136-.148-.998-.724l4.226-17.954c.058-.242-.024-.496-.212-.658L3.736 25.094c-.668-.58-.31-1.68.572-1.752l17.378-1.444c.248-.02.466-.178.562-.41L29.382 4.41c.23-.548 1.006-.548 1.236 0l7.134 17.078c.096.232.312.39.562.41l18.56 1.542z"/></g>
    </symbol>
    <symbol id="icon--subtitles-captions" viewBox="0 0 60 60">
      <title>icon--subtitles-captions icon</title>
      <title>icon--subtitles-captions</title><path d="M55 8c.552 0 1 .448 1 1v34c0 .552-.448 1-1 1H36L21.83 55.73c-.718.618-1.83.106-1.83-.842V44H5c-.552 0-1-.448-1-1V9c0-.552.448-1 1-1h50zM12 18v6h24v-6H12zm30 0v6h6v-6h-6zM12 30v6h6v-6h-6zm12 0v6h24v-6H24z" fill-rule="nonzero"/>
    </symbol>
    <symbol id="icon--text-bold" viewBox="0 0 60 60">
      <title>icon--text-bold icon</title>
      <title>icon--text-bold</title><path d="M14 52V8h17.488c3.888 0 7.008 1.1 9.36 3.298 2.353 2.2 3.527 4.955 3.527 8.27 0 2.086-.506 3.856-1.518 5.308s-2.315 2.577-3.912 3.374v.124c1.944.716 3.606 1.963 4.987 3.743 1.38 1.78 2.07 4.01 2.07 6.69 0 1.963-.28 3.72-.843 5.276-.565 1.556-1.448 2.942-2.655 4.158-1.208 1.218-2.85 2.15-4.924 2.794-2.076.644-4.547.966-7.41.966H14zm6.29-5.767h8.866c1.7 0 3.145-.104 4.343-.308 1.195-.205 2.285-.574 3.267-1.105.98-.532 1.72-1.293 2.21-2.287.49-.99.734-2.234.734-3.726 0-2.66-.853-4.512-2.56-5.554-1.708-1.043-4.332-1.566-7.87-1.566h-8.99v14.546zm0-19.946h10.186c5.072 0 7.61-2.066 7.61-6.197 0-2.026-.675-3.57-2.025-4.634-1.35-1.064-3.23-1.596-5.645-1.596H20.29v12.427z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--text-bullet" viewBox="0 0 60 60">
      <title>icon--text-bullet icon</title>
      <title>icon--text-bullet</title><path d="M52 47v-4c0-.552-.448-1-1-1H21c-.552 0-1 .448-1 1v4c0 .552.448 1 1 1h30c.552 0 1-.448 1-1m0-15v-4c0-.552-.448-1-1-1H21c-.552 0-1 .448-1 1v4c0 .552.448 1 1 1h30c.552 0 1-.448 1-1m0-15v-4c0-.552-.448-1-1-1H21c-.552 0-1 .448-1 1v4c0 .552.448 1 1 1h30c.552 0 1-.448 1-1m-38 0v-4c0-.552-.448-1-1-1H9c-.552 0-1 .448-1 1v4c0 .552.448 1 1 1h4c.552 0 1-.448 1-1m0 15v-4c0-.552-.448-1-1-1H9c-.552 0-1 .448-1 1v4c0 .552.448 1 1 1h4c.552 0 1-.448 1-1m-1 16H9c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h4c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--text-italic" viewBox="0 0 60 60">
      <title>icon--text-italic icon</title>
      <title>icon--text-italic</title><path d="M34.83 19.948h-1.458l-9.15 1.982-.35 1.224 4.43 1.806-4.486 18.066C23.29 45.24 23 46.698 23 48.038 23 50.426 24.398 52 26.614 52c2.914 0 5.478-1.748 9.032-7.05l-1.166-1.224c-2.622 3.204-4.312 4.37-5.42 4.37-.524 0-.816-.29-.816-.874 0-.466.234-1.458.526-2.566l6.06-24.708zM33.2 15.81c2.212 0 4.078-1.864 4.078-4.138 0-2.04-1.574-3.672-3.672-3.672-2.214 0-4.078 1.866-4.078 4.138 0 2.04 1.572 3.672 3.672 3.672z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--textalign-centered" viewBox="0 0 60 60">
      <title>icon--textalign-centered icon</title>
      <title>icon--textalign-centered</title><path d="M51 12c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1H9c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h42zm-4 21H13c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h34c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1zm4 9c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1H9c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h42z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--textalign-right" viewBox="0 0 60 60">
      <title>icon--textalign-right icon</title>
      <title>icon--textalign-right</title><path d="M51 42H9c-.552 0-1 .448-1 1v4c0 .552.448 1 1 1h42c.552 0 1-.448 1-1v-4c0-.552-.448-1-1-1zm0-9c.552 0 1-.448 1-1v-4c0-.552-.448-1-1-1H17c-.552 0-1 .448-1 1v4c0 .552.448 1 1 1h34zm1-20v4c0 .552-.448 1-1 1H9c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h42c.552 0 1 .448 1 1z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--thumbs-down" viewBox="0 0 60 60">
      <title>icon--thumbs-down icon</title>
      <title>icon--thumbs-down</title><path d="M44 11h6c1.33 0 2 .7 2 2v21c0 1.302-.67 2-2 2h-6c-.33 0-1-.698-1-2V13c0-1.3.67-2 1-2zm-27 0h20c1.31 0 2 .708 2 2v22c0 .09-.106.422 0 1l-9 11c-.545 1.345-1.873 2-3 2-2.873 0-4.966-2.15-5-5v-8h-8c-1.632.334-3.424-.583-5-2-.777-1.784-1.144-3.81-1-6l4-14c.796-1.583 2.624-3 5-3z" fill-rule="nonzero"/>
    </symbol>
    <symbol id="icon--thumbs-up" viewBox="0 0 60 60">
      <title>icon--thumbs-up icon</title>
      <title>icon--thumbs-up</title><path d="M52 32l-4 14c-.753 1.583-2.585 3-5 3H23c-1.31 0-2-.71-2-2V25c0-.09.107-.422 0-1l9-11c.56-1.345 1.89-2 3-2 2.897 0 4.994 2.15 5 5v8h8c1.676-.333 3.47.583 5 2 .827 1.784 1.196 3.81 1 6zm-36-8c.33 0 1 .7 1 2v21c0 1.3-.67 2-1 2h-6c-1.33 0-2-.7-2-2V26c0-1.3.67-2 2-2h6z" fill-rule="nonzero"/>
    </symbol>
    <symbol id="icon--thumbsdown-outline" viewBox="0 0 15 15">
      <title>icon--thumbsdown-outline icon</title>
      <title>icon--thumbsdown-outline</title><path d="M6.125 12.44v-1.848H1.14c-.63 0-1.14-.51-1.14-1.14 0-.097.012-.192.036-.285L2.17.857C2.3.353 2.756 0 3.276 0H11.8v.005h2.7c.276 0 .5.223.5.5v8.124c0 .275-.224.5-.5.5h-2.882l-.808 2.322v1.884c0 .57-.42 1.053-.986 1.13-2.26.31-3.7-.312-3.7-2.025zm2.974.388v-1.473c0-.127.02-.254.062-.375l.706-2.025V1.712h-6.15L1.876 8.88H6.41c.787 0 1.426.637 1.426 1.425v2.134c0 .31.285.474 1.263.388zm2.478-5.41h1.71V1.715h-1.71v5.703z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--thumbsup-outline" viewBox="0 0 15 15">
      <title>icon--thumbsup-outline icon</title>
      <title>icon--thumbsup-outline</title><path d="M8.875 2.1v1.85h4.984c.63 0 1.14.512 1.14 1.14 0 .097-.012.193-.036.285l-2.135 8.31c-.13.505-.585.858-1.105.858H3.2v-.005H.5c-.276 0-.5-.223-.5-.5V5.915c0-.276.224-.5.5-.5h2.882L4.19 3.09V1.208c0-.57.42-1.053.986-1.13 2.26-.31 3.7.312 3.7 2.024zM5.9 1.716v1.472c0 .128-.02.255-.062.375l-.706 2.026v7.243l6.15.002 1.842-7.17H8.59c-.787 0-1.426-.64-1.426-1.426V2.1c0-.307-.285-.47-1.263-.385zm-2.478 5.41h-1.71v5.703h1.71V7.125z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--trash" viewBox="0 0 60 60">
      <title>icon--trash icon</title>
      <title>icon--trash</title><g fill-rule="evenodd"><path d="M49 10c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1H11c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h9l1.722-3.448c.17-.338.516-.552.896-.552h14.764c.38 0 .726.214.896.552L40 10h9zM15.82 50.4L12 20h36l-3.82 30.4c-.102.907-.964 1.6-1.99 1.6H17.81c-1.028 0-1.888-.693-1.99-1.6z"/></g>
    </symbol>
    <symbol id="icon--tumblr" viewBox="0 0 60 60">
      <title>icon--tumblr icon</title>
      <title>icon--tumblr</title><g fill-rule="evenodd"><path d="M43.865 50.023c-.098.072-.242.16-.43.262-.188.102-.6.292-1.236.574-.637.283-1.307.527-2.013.737-.706.21-1.618.4-2.736.574-1.117.175-2.255.26-3.415.26-3.982 0-6.918-.917-8.804-2.753-1.885-1.838-2.827-4.62-2.827-8.354V27.44h-6.268v-6.487c1.146-.39 2.148-.81 3.008-1.26.858-.448 1.694-1.016 2.504-1.704.81-.685 1.492-1.475 2.044-2.363.553-.892 1.027-1.976 1.425-3.256.4-1.28.69-2.735.872-4.37h6.246v11.107h9.85v8.332h-9.85v11.107c0 1.23.068 2.224.208 2.984.14.76.407 1.417.8 1.973.39.56.935.952 1.633 1.184.7.23 1.608.348 2.724.348.798 0 1.716-.156 2.758-.468 1.04-.31 1.888-.626 2.546-.942l.965-.458v6.856z"/></g>
    </symbol>
    <symbol id="icon--twitter" viewBox="0 0 60 60">
      <title>icon--twitter icon</title>
      <title>icon--twitter</title><g fill-rule="evenodd"><path d="M4.11 46.748c.775.12 1.62.178 2.533.178 2.364 0 4.678-.458 6.942-1.37 2.264-.912 4.35-2.136 6.258-3.674-2.28-.014-4.336-.72-6.17-2.114-1.832-1.394-3.078-3.154-3.736-5.284.71.136 1.368.204 1.976.204.98 0 1.926-.128 2.838-.382-2.45-.488-4.485-1.708-6.105-3.66-1.622-1.95-2.434-4.21-2.434-6.776v-.128c1.523.826 3.127 1.266 4.815 1.316-1.468-.978-2.63-2.246-3.484-3.8-.85-1.552-1.277-3.224-1.277-5.016 0-1.74.48-3.462 1.444-5.17 2.668 3.244 5.894 5.816 9.678 7.718 3.784 1.9 7.864 2.968 12.238 3.204-.152-.66-.228-1.478-.228-2.458 0-2.94 1.036-5.444 3.104-7.512 2.067-2.07 4.573-3.104 7.51-3.104 3.025 0 5.635 1.116 7.83 3.344 2.417-.49 4.655-1.352 6.715-2.584-.81 2.566-2.372 4.534-4.688 5.904 2.112-.238 4.156-.802 6.132-1.7-1.42 2.148-3.183 3.988-5.297 5.524v1.394c0 2.366-.3 4.742-.898 7.134-.6 2.39-1.462 4.712-2.584 6.966-1.123 2.256-2.563 4.364-4.32 6.322-1.757 1.96-3.725 3.67-5.903 5.132-2.18 1.46-4.692 2.612-7.538 3.458-2.847.844-5.85 1.266-9.01 1.266-6.4 0-11.847-1.444-16.34-4.332z"/></g>
    </symbol>
    <symbol id="icon--unlink" viewBox="0 0 60 60">
      <title>icon--unlink icon</title>
      <title>Artboard</title><path d="M18.186 26.637l4.5 4.484-7.402 7.402c-1.24 1.242-1.24 3.252 0 4.492l1.498 1.498c1.24 1.24 3.252 1.24 4.492 0l3.108-3.108c.39-.39 1.024-.39 1.414 0l3.078 3.078c.39.39.39 1.024 0 1.414l-3.108 3.108c-3.722 3.722-9.756 3.722-13.476 0l-1.498-1.498c-3.72-3.72-3.72-9.754 0-13.476l7.394-7.393zm23.397 6.55l-4.484-4.5 7.412-7.415c1.242-1.24 1.242-3.25 0-4.492l-1.496-1.496c-1.24-1.242-3.252-1.242-4.492 0l-3.162 3.16c-.39.39-1.024.39-1.414 0l-3.078-3.078c-.39-.39-.39-1.024 0-1.414l3.162-3.162c3.72-3.72 9.754-3.72 13.476 0l1.496 1.498c3.724 3.722 3.724 9.756 0 13.476l-7.42 7.423zM15.15 10.907L49.093 44.85c.39.39.39 1.023 0 1.413l-2.83 2.83c-.39.39-1.022.39-1.413 0L10.907 15.15c-.39-.39-.39-1.023 0-1.413l2.83-2.83c.39-.39 1.022-.39 1.413 0z" fill-rule="nonzero"/>
    </symbol>
    <symbol id="icon--unlock" viewBox="0 0 60 60">
      <title>icon--unlock icon</title>
      <title>icon--unlock</title><g fill-rule="evenodd"><path d="M49 26H20v-6.776c0-5.318 4.486-9.644 10-9.644 4.854 0 8.914 3.284 9.816 7.78.104.518.552.894 1.08.844l3.992-.396c.566-.056.994-.578.9-1.138C44.534 9.138 37.924 3.58 30 3.58c-8.822 0-16 7.018-16 15.644V26h-3c-.552 0-1 .448-1 1v24c0 .552.448 1 1 1h38c.552 0 1-.448 1-1V27c0-.552-.448-1-1-1"/></g>
    </symbol>
    <symbol id="icon--update-freeform-round" viewBox="0 0 60 60">
      <title>icon--update-freeform-round icon</title>
      <title>icon--update-freeform-round</title><path d="M30 52C17.85 52 8 42.15 8 30S17.85 8 30 8s22 9.85 22 22-9.85 22-22 22zm-9-32c-.552 0-1 .448-1 1v1c0 .552.448 1 1 1h13c.552 0 1-.448 1-1v-1c0-.552-.448-1-1-1H21zm0 6c-.552 0-1 .448-1 1v1c0 .552.448 1 1 1h18c.552 0 1-.448 1-1v-1c0-.552-.448-1-1-1H21zm0 6c-.552 0-1 .448-1 1v1c0 .552.448 1 1 1h18c.552 0 1-.448 1-1v-1c0-.552-.448-1-1-1H21zm0 6c-.552 0-1 .448-1 1v1c0 .552.448 1 1 1h6c.552 0 1-.448 1-1v-1c0-.552-.448-1-1-1h-6z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--update-freeform" viewBox="0 0 60 60">
      <title>icon--update-freeform icon</title>
      <title>icon--update-freeform</title><path d="M12.095 11h25.81c1.157 0 2.095.938 2.095 2.095v.81C40 15.062 39.062 16 37.905 16h-25.81C10.938 16 10 15.062 10 13.905v-.81c0-1.157.938-2.095 2.095-2.095zm0 11h35.81c1.157 0 2.095.938 2.095 2.095v.81C50 26.062 49.062 27 47.905 27h-35.81C10.938 27 10 26.062 10 24.905v-.81c0-1.157.938-2.095 2.095-2.095zm0 11h35.81c1.157 0 2.095.938 2.095 2.095v.81C50 37.062 49.062 38 47.905 38h-35.81C10.938 38 10 37.062 10 35.905v-.81c0-1.157.938-2.095 2.095-2.095zm0 11h11.81c1.157 0 2.095.938 2.095 2.095v.81C26 48.062 25.062 49 23.905 49h-11.81C10.938 49 10 48.062 10 46.905v-.81c0-1.157.938-2.095 2.095-2.095z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--update-pinned" viewBox="0 0 60 60">
      <title>icon--update-pinned icon</title>
      <title>Artboard</title><path d="M30 8C17.85 8 8 17.85 8 30s9.85 22 22 22 22-9.85 22-22c0-5.835-2.318-11.43-6.444-15.556C41.43 10.318 35.836 8 30 8zm.525 36.537c0 .143-.11.262-.254.27h-.54c-.144-.008-.255-.127-.255-.27L28.41 34.502c0-.15.12-.27.27-.27h2.64c.15 0 .27.12.27.27l-1.065 10.035zm7.937-12.946c0 .29-.235.525-.525.525H22.063c-.29 0-.525-.234-.525-.524v-.372c0-1.83 1.454-3.33 3.284-3.384l.947-8.462-.864-1.692c-.04-.083-.036-.18.012-.26.048-.078.133-.127.225-.13h9.714c.092.003.177.052.225.13.048.08.052.177.012.26l-.863 1.692.948 8.462c1.83.055 3.284 1.554 3.284 3.384v.373z" fill-rule="nonzero"/>
    </symbol>
    <symbol id="icon--update-qa-round" viewBox="0 0 60 60">
      <title>icon--update-qa-round icon</title>
      <title>icon--update-qa-round</title><path d="M30 52C17.85 52 8 42.15 8 30S17.85 8 30 8s22 9.85 22 22-9.85 22-22 22zm2.402-18.69h8.85c1.192 0 1.61-.43 1.61-1.65v-9.89c0-1.22-.418-1.65-1.61-1.65h-8.85c-1.19 0-1.61.43-1.61 1.65v9.89c0 1.22.42 1.65 1.61 1.65zm-12.816 7.81l4.31-4.293h-4.31v4.294zm-1.84-4.293H26.6c1.19 0 1.61-.43 1.61-1.65v-9.89c0-1.22-.42-1.65-1.61-1.65h-8.85c-1.192 0-1.61.43-1.61 1.65v9.89c0 1.22.418 1.65 1.61 1.65zm21.668.863v-4.38h-4.31l4.31 4.38z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="icon--update-qa" viewBox="0 0 60 60">
      <title>icon--update-qa icon</title>
      <title>icon--update-qa</title><path d="M34.667 37C32.693 37 32 36.285 32 34.25v-16.5c0-2.035.693-2.75 2.667-2.75h14.666c1.974 0 2.667.715 2.667 2.75v16.5c0 2.035-.693 2.75-2.667 2.75H34.667zM13 49v-7h7l-7 7zm-2.333-7C8.693 42 8 41.285 8 39.25v-16.5c0-2.035.693-2.75 2.667-2.75h14.666c1.974 0 2.667.715 2.667 2.75v16.5c0 2.035-.693 2.75-2.667 2.75H10.667zM46 44l-7-7h7v7z" fill-rule="nonzero"/>
    </symbol>
    <symbol id="icon--upload" viewBox="0 0 60 60">
      <title>icon--upload icon</title>
      <title>icon--upload</title><g fill-rule="evenodd"><path d="M51 35.86h-4c-.552 0-1 .45-1 1v7H14v-7c0-.55-.448-1-1-1H9c-.552 0-1 .45-1 1v12c0 .553.448 1 1 1h42c.552 0 1-.447 1-1v-12c0-.55-.448-1-1-1M19.514 20.964l9.754-10.504c.394-.43 1.068-.43 1.464-.003l9.87 10.628c.55.594.13 1.558-.678 1.558H32.78V36.86c0 .553-.448 1-1 1h-3.562c-.55 0-1-.447-1-1V22.644h-6.972c-.872 0-1.326-1.04-.732-1.68"/></g>
    </symbol>
    <symbol id="icon--video" viewBox="0 0 60 60">
      <title>icon--video icon</title>
      <title>icon--video</title><g fill-rule="evenodd"><path d="M9.5 35.25h41V13.5h-41v21.75zm35 11.25h6v-5.75h-6v5.75zm-11.5 0h5.5v-5.75H33v5.75zm-11.5 0H27v-5.75h-5.5v5.75zm-12 0h6v-5.75h-6v5.75zM56 9v42c0 .552-.448 1-1 1H5c-.552 0-1-.448-1-1V9c0-.552.448-1 1-1h50c.552 0 1 .448 1 1zM26.916 28.684V20.33c0-.624.668-1.02 1.214-.722l8.356 4.558c.594.324.562 1.188-.052 1.468l-8.356 3.798c-.544.246-1.162-.15-1.162-.748z"/></g>
    </symbol>
    <symbol id="icon--youtube" viewBox="0 0 60 60">
      <title>icon--youtube icon</title>
      <title>icon--youtube</title><g fill-rule="evenodd"><path d="M55.207 18.547C55.54 19.85 56 26.98 56 29.7v.6c0 2.72-.46 9.85-.793 11.153-.99 3.87-2.848 5.362-6.27 5.9-1.972.284-11.44.648-18.954.648h.034c-7.514 0-16.982-.363-18.954-.647-3.422-.538-5.28-2.03-6.27-5.9C4.46 40.15 4 33.02 4 30.3v-.6c0-2.72.46-9.85.793-11.153.99-3.87 2.848-5.362 6.27-5.9 1.972-.284 11.44-.646 18.954-.646h-.034c7.514 0 16.982.363 18.954.647 3.422.538 5.28 2.03 6.27 5.9zM24 22.963v14.77l13.813-7.562L24 22.964z"/></g>
    </symbol>
    <symbol id="icon-imagealign-center" viewBox="0 0 60 60">
      <title>icon-imagealign-center icon</title>
      <title>icon-imagealign-center</title><path d="M51 42H9c-.552 0-1 .448-1 1v4c0 .552.448 1 1 1h42c.552 0 1-.448 1-1v-4c0-.552-.448-1-1-1zm-6.833-3c.46 0 .833-1.344.833-3V24c0-1.656-.373-3-.833-3H15.833c-.46 0-.833 1.344-.833 3v12c0 1.656.373 3 .833 3h28.334zM52 13v4c0 .552-.448 1-1 1H9c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h42c.552 0 1 .448 1 1z" fill-rule="nonzero"/>
    </symbol>
    <symbol id="icon-imagealign-left" viewBox="0 0 60 60">
      <title>icon-imagealign-left icon</title>
      <title>icon-imagealign-left</title><path d="M51 42H9c-.552 0-1 .448-1 1v4c0 .552.448 1 1 1h42c.552 0 1-.448 1-1v-4c0-.552-.448-1-1-1zm-13.833-3c.46 0 .833-1.344.833-3V24c0-1.656-.373-3-.833-3H8.833C8.373 21 8 22.344 8 24v12c0 1.656.373 3 .833 3h28.334zM52 13v4c0 .552-.448 1-1 1H9c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h42c.552 0 1 .448 1 1z" fill-rule="nonzero"/>
    </symbol>
    <symbol id="icon-imagealign-right" viewBox="0 0 60 60">
      <title>icon-imagealign-right icon</title>
      <title>icon-imagealign-right</title><path d="M51 42H9c-.552 0-1 .448-1 1v4c0 .552.448 1 1 1h42c.552 0 1-.448 1-1v-4c0-.552-.448-1-1-1zm.167-3c.46 0 .833-1.344.833-3V24c0-1.656-.373-3-.833-3H22.833c-.46 0-.833 1.344-.833 3v12c0 1.656.373 3 .833 3h28.334zM52 13v4c0 .552-.448 1-1 1H9c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h42c.552 0 1 .448 1 1z" fill-rule="nonzero"/>
    </symbol>
    <symbol id="info" viewBox="0 0 16 16">
      <title>info icon</title>
      <title>Combined Shape Copy</title><path d="M8 14.47c-3.565 0-6.467-2.902-6.467-6.47 0-3.567 2.902-6.468 6.467-6.468 3.567 0 6.467 2.9 6.467 6.468s-2.9 6.47-6.467 6.47M8 0C3.583 0 0 3.583 0 8c0 4.42 3.583 8 8 8s8-3.58 8-8c0-4.417-3.583-8-8-8m0 4.377c-.48 0-.867.388-.867.867 0 .48.388.867.867.867.48 0 .867-.387.867-.866 0-.48-.388-.867-.867-.867m.556 2.546H7.444c-.112 0-.203.104-.203.23v4.24c0 .127.092.23.204.23h1.112c.112 0 .203-.103.203-.23v-4.24c0-.126-.092-.23-.204-.23" fill-rule="evenodd"/>
    </symbol>
    <symbol id="instagram" viewBox="0 0 16 16">
      <title>instagram icon</title>
      <title>instagram copy</title><path d="M13.664 0c.646 0 1.197.228 1.652.684.456.455.684 1.006.684 1.652v11.328c0 .646-.228 1.197-.684 1.652-.455.456-1.006.684-1.652.684H2.336c-.646 0-1.197-.228-1.652-.684C.228 14.86 0 14.31 0 13.664V2.336C0 1.69.228 1.14.684.684 1.14.228 1.69 0 2.336 0h11.328zM8 5c-.828 0-1.535.293-2.12.88C5.292 6.464 5 7.17 5 8c0 .828.293 1.535.88 2.12.585.587 1.292.88 2.12.88.828 0 1.535-.293 2.12-.88.587-.585.88-1.292.88-2.12 0-.828-.293-1.535-.88-2.12C9.536 5.292 8.83 5 8 5zm6.336 9V7h-1.774c.068.307.102.64.102 1 0 .844-.208 1.624-.625 2.34-.418.716-.984 1.282-1.7 1.7-.716.416-1.496.624-2.34.624-.844 0-1.624-.208-2.34-.625-.716-.418-1.282-.984-1.7-1.7-.416-.716-.624-1.496-.624-2.34 0-.36.034-.693.102-1H1.663v7c0 .094.033.173.098.238s.144.098.238.098h12c.094 0 .173-.033.238-.098s.098-.144.098-.238zm0-10V2c0-.094-.033-.173-.098-.238s-.144-.098-.238-.098h-2c-.094 0-.173.033-.238.098s-.098.144-.098.238v2c0 .094.033.173.098.238s.144.098.238.098h2c.094 0 .173-.033.238-.098s.098-.144.098-.238z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="kickstarter" viewBox="0 0 590 726">
      <title>kickstarter icon</title>
      <title>Artboard Copy 5</title><path d="M0 612.563V113.438c0-31.196 11.048-57.9 33.145-80.116C55.242 11.107 82.005 0 113.438 0c30.96 0 57.604 11.166 79.937 33.5 22.334 22.333 33.5 48.978 33.5 79.938v121.945L364.772 52.11c18.434-24.814 43.012-39.526 73.735-44.134 30.723-4.608 58.727 2.54 84.014 21.447 24.816 18.434 39.527 43.01 44.136 73.734 4.608 30.723-2.54 58.846-21.447 84.37l-136.835 160.23 156.33 177.246c19.616 24.342 27.77 52.287 24.46 83.837-3.308 31.55-17.133 57.133-41.475 76.748-24.105 19.143-51.342 27.355-81.71 24.637-30.368-2.718-55.714-15.42-76.04-38.108l-163.065-198.16v138.606c0 31.43-11.107 58.195-33.322 80.292C171.338 714.952 144.633 726 113.438 726c-31.67 0-58.492-10.99-80.47-32.968C10.988 671.054 0 644.232 0 612.562z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="leaf" viewBox="0 0 749 682">
      <title>leaf icon</title>
      <title>leaf</title><path d="M730.733 558.748c-93.084-14.184-100.177-27.836-100.177-27.836 19.15-115.07-40.248-260.814-137.233-339.715C364.246 86.234 167.97 162.474 15.135 2.9-20.503-34.332.24 420.45 191.552 592.79c139.893 125.887 304.608 87.234 349.82 66.667 40.958-18.794 69.68-53.014 69.68-53.014 74.646 23.05 111.525 21.63 111.525 21.63 26.24 3.193 39.54-64.537 8.156-69.325zm-170.39 7.802C315.31 494.032 131.092 239.424 131.092 239.424s161.703 190.956 446.807 284.04c.355 14.363-8.156 34.93-17.553 43.086z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="lightbulb" viewBox="0 0 36 52">
      <title>lightbulb icon</title>
      <title>icon--lightbulb</title><g fill-rule="evenodd"><path d="M18 52c-3.198 0-5.958-1.876-7.238-4.586-.308-.656.198-1.412.924-1.412L24.314 46c.726 0 1.232.756.924 1.412C23.958 50.124 21.198 52 18 52zm18-34c0 3.406-.962 6.58-2.606 9.296h.018c-.162.26-.312.492-.464.732l-.028.044C29.286 33.746 28 33.642 28 39.786V41c0 .552-.446 1-1 1H9c-.552 0-1-.448-1-1v-1.214c0-6.144-1.284-6.04-4.92-11.714-.01-.014-.018-.03-.026-.044-.154-.24-.304-.472-.466-.732h.02C.964 24.58 0 21.406 0 18 0 8.058 8.06 0 18 0c9.942 0 18 8.058 18 18zm-7.312 6.448C29.874 22.49 30.5 20.258 30.5 18c0-6.892-5.606-12.5-12.5-12.5-6.892 0-12.5 5.608-12.5 12.5 0 2.258.628 4.49 1.812 6.448l.36.594.004.004.048.076c.778 1.218 1.444 2.148 2.03 2.97 1.91 2.67 3.156 4.608 3.582 8.408h9.328c.426-3.8 1.672-5.738 3.582-8.408.586-.82 1.25-1.75 2.028-2.964l.038-.06.024-.036.352-.584z"/><path d="M-12-4h60v60h-60z"/></g>
    </symbol>
    <symbol id="link" viewBox="0 0 16 16">
      <title>link icon</title>
      <title>Combined Shape Copy 8</title><path d="M8.43 7.57l-.022.02c.387.387.512.915.435 1.418-.052.335-.177.66-.435.915l-3.32 3.318c-.64.644-1.687.644-2.33 0-.642-.64-.642-1.688 0-2.33l1.426-1.426c-.42-.857-.58-1.798-.493-2.728L1.15 9.3c-1.53 1.53-1.53 4.02 0 5.552 1.532 1.53 4.02 1.53 5.552 0l3.32-3.32c.234-.232.42-.493.582-.765.822-1.378.724-3.14-.288-4.427-.096-.122-.183-.247-.295-.36L8.43 7.57zm-.86.86l.02-.02c-.385-.386-.51-.916-.433-1.418.052-.334.177-.658.434-.915l3.32-3.32c.642-.64 1.688-.64 2.332 0 .642.644.642 1.69 0 2.333l-1.426 1.427c.418.857.58 1.798.493 2.728L14.85 6.7c1.53-1.53 1.53-4.02 0-5.55C13.32-.384 10.83-.384 9.3 1.15L5.98 4.467c-.234.233-.42.493-.582.765-.823 1.38-.724 3.142.288 4.427.096.12.183.248.295.36l1.59-1.59z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="loading-spin" viewBox="0 0 32 32">
      <title>loading-spin icon</title>
      <path opacity=".25" d="M16 0a16 16 0 0 0 0 32 16 16 0 0 0 0-32m0 4a12 12 0 0 1 0 24 12 12 0 0 1 0-24"/><path d="M16 0a16 16 0 0 1 16 16h-4A12 12 0 0 0 16 4z"><animateTransform attributeName="transform" type="rotate" from="0 16 16" to="360 16 16" dur="0.8s" repeatCount="indefinite"/></path>
    </symbol>
    <symbol id="lock" viewBox="0 0 14 16">
      <title>lock icon</title>
      <title>Combined Shape Copy 4</title><path d="M3.473 6.927c.07 0 .128-.056.128-.127h.002V4.843c0-1.61 1.308-2.92 2.92-2.92 1.61 0 2.92 1.31 2.92 2.92V6.8c0 .07.056.127.126.127h1.664c.07 0 .128-.056.128-.127h.004V4.843C11.364 2.173 9.192 0 6.52 0 3.85 0 1.68 2.173 1.68 4.843V6.8c0 .07.058.127.128.127h1.667zm9.15.728H.42c-.233 0-.42.186-.42.417v7.51c0 .23.187.418.42.418h12.204c.232 0 .417-.188.417-.42V8.073c0-.23-.184-.417-.416-.417z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="mail" viewBox="0 0 20 14">
      <title>mail icon</title>
      <title>Combined Shape</title><path d="M0 12.356l5.6-5.65L0 1.526v10.83zm9.628-3.79c.23 0 .463-.09.657-.27L18.987.25c.097-.09.03-.25-.105-.25H.374C.238 0 .172.16.27.25l8.7 8.046c.195.18.427.27.658.27zm4.026-1.86l5.602 5.65V1.527l-5.602 5.18zm-2.578 2.546c-.402.36-.916.56-1.448.56-.532 0-1.047-.2-1.45-.56L6.427 7.675.444 13.542c-.164.162-.045.436.19.436h17.987c.238 0 .357-.274.19-.436l-5.98-5.867-1.754 1.577z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="map-pin" viewBox="0 0 609 905">
      <title>map-pin icon</title>
      <title>Fill 1</title><path d="M304.297 461.99c-.053 0-.1-.007-.152-.007-.046 0-.1.007-.145.007-82.286.57-150.808-67.627-151.776-151.04-.984-84.534 64.19-152.008 148.085-153.327 1.296-.023 2.546.116 3.835.13 1.288-.014 2.547-.153 3.843-.13 83.887 1.32 149.062 68.793 148.086 153.326-.97 83.413-69.498 151.61-151.777 151.04M304.145 0C70.105 0-47.28 238.352 17.803 417.857c34.23 94.4 242.374 438.596 273.043 480.36 6.642 9.044 19.963 9.044 26.605 0 30.663-41.764 238.814-385.96 273.044-480.36C655.57 238.352 538.184 0 304.144 0" fill-rule="evenodd"/>
    </symbol>
    <symbol id="menu" viewBox="0 0 17 12">
      <title>menu icon</title>
      <title>Group</title><defs><path id="a" d="M8.03 12H0v-2h16.06v2H8.03z"/></defs><g fill-rule="evenodd"><path d="M15.783 0H.276C.124 0 0 .124 0 .276v1.448C0 1.876.124 2 .276 2h15.507c.153 0 .276-.124.276-.276V.276c0-.152-.124-.276-.277-.276M.276 7H12.16c.154 0 .277-.124.277-.276V5.276c0-.152-.123-.276-.276-.276H.277C.124 5 0 5.124 0 5.276v1.448C0 6.876.124 7 .276 7"/><mask id="b"><use xlink:href="#a"/></mask><path d="M15.783 10H.276c-.152 0-.276.124-.276.276v1.448c0 .152.124.276.276.276h15.507c.153 0 .276-.124.276-.276v-1.448c0-.152-.124-.276-.277-.276" mask="url(#b)"/></g>
    </symbol>
    <symbol id="message" viewBox="0 0 20 16">
      <title>message icon</title>
      <title>Fill 1 Copy 12</title><path d="M17.526 0h-16C.684 0 0 .684 0 1.526v10.16c0 .843.684 1.526 1.526 1.526H3.45c-.103.87-.465 1.824-1.69 2.3l-.083.03v.02c-.09.033-.16.103-.16.203 0 .12.094.213.212.225V16H1.75l.004-.002c2.21-.006 4.674-.95 5.436-2.786h10.336c.84 0 1.525-.683 1.525-1.526V1.526C19.05.684 18.368 0 17.527 0" fill-rule="evenodd"/>
    </symbol>
    <symbol id="mobile" viewBox="0 0 10 16">
      <title>mobile icon</title>
      <title>Page 1 Copy 2</title><path d="M7.816 12.744c0 .067-.053.12-.12.12H1.663c-.068 0-.12-.053-.12-.12V1.664c0-.065.052-.12.12-.12h6.03c.07 0 .122.055.122.12v11.08zm-2.173 2c0 .115-.09.205-.204.205H3.916c-.113 0-.204-.09-.204-.205v-.702c0-.112.09-.204.204-.204H5.44c.112 0 .203.09.203.203v.702zM8.595 0H.76C.34 0 0 .34 0 .76v14.48c0 .42.34.76.76.76h7.835c.42 0 .76-.34.76-.76V.76c0-.42-.34-.76-.76-.76z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="pause" viewBox="0 0 12 12">
      <title>pause icon</title>
      <title>pause copy</title><path d="M0 11.748V.252c0-.07.024-.13.073-.18C.123.025.183 0 .253 0h3.995c.07 0 .13.024.18.073.048.05.072.11.072.18v11.495c0 .07-.024.13-.073.18-.05.048-.11.072-.18.072H.253c-.07 0-.13-.024-.18-.073-.048-.05-.072-.11-.072-.18zm7.5 0V.252c0-.07.024-.13.073-.18.05-.048.11-.072.18-.072h3.995c.07 0 .13.024.18.073.048.05.072.11.072.18v11.495c0 .07-.024.13-.073.18-.05.048-.11.072-.18.072H7.753c-.07 0-.13-.024-.18-.073-.048-.05-.072-.11-.072-.18z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="pencil" viewBox="0 0 16 16">
      <title>pencil icon</title>
      <title>Combined Shape Copy 3</title><path d="M15.787 3.22L12.78.216c-.286-.287-.75-.287-1.035 0L10.09 1.868l4.042 4.045 1.655-1.656c.286-.287.286-.75 0-1.036M3.523 14.744H2.495v-1.235H1.26v-1.03l1.137-1.14 2.265 2.266-1.14 1.14zM9.42 2.54L3.61 8.345 0 11.956v3.732c.007.213.105.312.307.312h3.74l3.61-3.61h-.002l5.807-5.808L9.42 2.54z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="pin" viewBox="0 0 10 16">
      <title>pin icon</title>
      <title>Combined Shape Copy 11</title><path d="M4.037 9.99c-.083 0-.107.05-.103.118l.314 5.82c.002.052.016.072.06.072h.59c.046 0 .062-.03.063-.07l.317-5.837c.004-.072-.036-.104-.093-.104H4.037zm3.487-3.195l-.59-5.574c.043-.027.08-.067.102-.12l.387-.99C7.448.042 7.416 0 7.345 0H1.877c-.072 0-.102.043-.077.11l.385.99c.02.05.052.09.092.117L1.687 6.8C.75 6.84 0 7.6 0 8.545v.31c0 .04.032.073.072.073h9.102c.04 0 .07-.032.07-.072v-.31c0-.958-.767-1.73-1.72-1.75z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="pinterest" viewBox="0 0 16 16">
      <title>pinterest icon</title>
      <title>pinterest</title><path d="M8 0C3.582 0 0 3.582 0 8c0 3.39 2.11 6.284 5.085 7.45-.07-.633-.134-1.604.027-2.295.146-.625.938-3.977.938-3.977s-.24-.48-.24-1.188c0-1.112.646-1.942 1.45-1.942.68 0 1.01.512 1.01 1.127 0 .686-.436 1.712-.662 2.663-.188.797.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.376-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.47 0 .69.265 1.426.595 1.827.065.08.074.15.055.23-.06.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.835-4.84 5.287-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.74 4.976-4.152 4.976-.81 0-1.573-.42-1.834-.92l-.498 1.903c-.18.695-.67 1.566-.995 2.097.75.232 1.545.357 2.37.357 4.418 0 8-3.582 8-8s-3.582-8-8-8" fill-rule="evenodd"/>
    </symbol>
    <symbol id="play" viewBox="0 0 12 12">
      <title>play icon</title>
      <title>play copy</title><path d="M0 .252C0 .155.037.084.11.042.19-.01.274-.014.364.03L11.86 5.777c.093.043.14.118.14.223 0 .106-.047.18-.14.223L.362 11.97c-.047.02-.084.03-.11.03-.056 0-.103-.014-.142-.04-.073-.044-.11-.114-.11-.212V.252z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="plus-human" viewBox="0 0 56 46">
      <title>plus-human icon</title>
      <title>icon--plus-human</title><path d="M48 12c0 6.626-5.374 12-12 12s-12-5.374-12-12S29.374 0 36 0s12 5.374 12 12zM17 46c-.552 0-1-.448-1-1v-6.83c0-.286.118-.56.326-.752C21.29 32.858 28.258 30 36 30c7.742 0 14.708 2.856 19.674 7.416.208.194.326.468.326.754V45c0 .552-.448 1-1 1H17zm2-26c.552 0 1 .448 1 1v2c0 .552-.448 1-1 1h-7v7c0 .552-.448 1-1 1H9c-.552 0-1-.448-1-1v-7H1c-.552 0-1-.448-1-1v-2c0-.552.448-1 1-1h7v-7c0-.552.448-1 1-1h2c.552 0 1 .448 1 1v7h7z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="plus" viewBox="0 0 16 16">
      <title>plus icon</title>
      <title>Fill 1 Copy 7</title><path d="M15.65 6.735H9.266V.35c0-.194-.157-.35-.35-.35h-1.83c-.194 0-.35.156-.35.35v6.385H.35c-.194 0-.35.157-.35.35v1.83c0 .193.156.35.35.35h6.385v6.386c0 .194.156.35.35.35h1.83c.193 0 .35-.156.35-.35V9.266h6.386c.193 0 .35-.157.35-.35v-1.83c0-.193-.157-.35-.35-.35" fill-rule="evenodd"/>
    </symbol>
    <symbol id="question" viewBox="0 0 16 16">
      <title>question icon</title>
      <title>Combined Shape Copy 14</title><path d="M8 14.47c-3.565 0-6.467-2.903-6.467-6.47 0-3.567 2.902-6.47 6.467-6.47 3.567 0 6.468 2.903 6.468 6.47 0 3.567-2.9 6.47-6.468 6.47M8 0C3.583 0 0 3.58 0 8s3.583 8 8 8 8-3.58 8-8-3.583-8-8-8m-.3 10.626c-.48 0-.867.388-.867.866 0 .48.388.867.866.867.477 0 .865-.39.865-.868s-.388-.866-.866-.866M9.327 4.23c-.836-.498-1.973-.436-2.764.15-.63.466-.98 1.23-1.01 2.15.006.086.038.134.17.134h1.073c.09 0 .14-.04.15-.14h.002c.017-.29.095-.76.45-1.02.34-.254.857-.282 1.21-.074.363.22.535.654.407 1.033-.11.324-.394.575-.724.865-.25.22-.498.446-.708.708-.39.495-.597 1.07-.597 1.666v.194c0 .092.035.127.12.127H8.27c.086 0 .12-.035.12-.127v-.194c0-.352.16-.63.295-.8.155-.196.347-.36.535-.526.417-.37.892-.786 1.123-1.464.34-.998-.088-2.125-1.015-2.68" fill-rule="evenodd"/>
    </symbol>
    <symbol id="search" viewBox="0 0 16 16">
      <title>search icon</title>
      <title>Fill 1 Copy 11</title><path d="M6.678 11.222c-2.507 0-4.544-2.04-4.544-4.545 0-2.506 2.037-4.545 4.544-4.545 2.506 0 4.545 2.04 4.545 4.545 0 2.506-2.04 4.545-4.545 4.545m9.26 3.208l-3.852-3.852c.795-1.1 1.27-2.445 1.27-3.9C13.356 2.994 10.36 0 6.678 0 2.995 0 0 2.995 0 6.677c0 3.682 2.995 6.677 6.678 6.677 1.457 0 2.802-.473 3.9-1.268l3.85 3.85c.037.037.082.064.138.064.056 0 .104-.027.142-.065l1.236-1.238c.035-.033.06-.077.06-.128 0-.057-.025-.105-.065-.14" fill-rule="evenodd"/>
    </symbol>
    <symbol id="shapeshift" viewBox="0 0 144 144">
      <title>shapeshift icon</title>
      <path d="M110.9 73.26c0 17.2 7.45 30.56-3.1 42.52-4.542 5.146-10.413 8.944-16.968 10.98-6.554 2.034-13.544 2.228-20.202.56-15.2-3.94-9-22.9-19.42-32.66C39.85 84 13.72 88.78 13.72 72s23-32.11 36.64-36.47c12.39-3.94 18-18.3 33.51-22.24 15.51-3.94 37.19.89 41.39 15.2 2.37 8.165-1.22 15.335-5.402 22.475-4.183 7.14-8.958 14.25-8.958 22.295z"><animate repeatCount="indefinite" attributeName="d" dur="3s" values="M 130.28 72 C 130.28 85.48 125.603 98.552 117.051 108.973 C 108.499 119.393 96.592 126.53 83.37 129.16 C 70.149 131.79 56.416 129.753 44.527 123.399 C 32.639 117.044 23.315 106.758 18.156 94.303 C 12.998 81.849 12.316 67.983 16.229 55.083 C 20.143 42.183 28.413 31.032 39.621 23.542 C 50.83 16.053 64.297 12.68 77.712 14.001 C 91.128 15.322 103.678 21.258 113.21 30.79 C 118.63 36.196 122.928 42.62 125.857 49.692 C 128.787 56.764 130.29 64.345 130.28 72 Z; M 110.9 73.26 C 110.9 90.46 118.35 103.82 107.8 115.78 C 103.258 120.926 97.387 124.724 90.832 126.759 C 84.278 128.794 77.288 128.988 70.63 127.32 C 55.43 123.38 61.63 104.42 51.21 94.66 C 39.85 84 13.72 88.78 13.72 72 C 13.72 55.22 36.72 39.89 50.36 35.53 C 62.75 31.59 68.36 17.23 83.87 13.29 C 99.38 9.35 121.06 14.18 125.26 28.49 C 127.63 36.655 124.04 43.825 119.858 50.965 C 115.675 58.105 110.9 65.215 110.9 73.26 Z; M 130.28 72 C 130.28 85.48 125.603 98.552 117.051 108.973 C 108.499 119.393 96.592 126.53 83.37 129.16 C 70.149 131.79 56.416 129.753 44.527 123.399 C 32.639 117.044 23.315 106.758 18.156 94.303 C 12.998 81.849 12.316 67.983 16.229 55.083 C 20.143 42.183 28.413 31.032 39.621 23.542 C 50.83 16.053 64.297 12.68 77.712 14.001 C 91.128 15.322 103.678 21.258 113.21 30.79 C 118.63 36.196 122.928 42.62 125.857 49.692 C 128.787 56.764 130.29 64.345 130.28 72 Z"/></path>
    </symbol>
    <symbol id="share" viewBox="0 0 19 16">
      <title>share icon</title>
      <title>Fill 1 Copy</title><path d="M10.017 4.092v-.266c-.004-.713.012-2.726.02-3.57.004-.222.267-.338.434-.19 1.302 1.16 5.26 4.683 7.244 6.443.278.246.56.49.835.74.245.222.245.302-.005.525-1.414 1.26-6.57 5.91-8.108 7.3-.167.15-.434.03-.433-.195l.008-3.873c-.342 0-.68-.02-1.013.004-1.836.135-3.748.643-5.268 1.642-1.3.834-2.442 2.235-3.142 3.212-.195.272-.626.106-.588-.227.226-1.98 1.157-5.912 3.608-8.42 2.67-2.73 6.333-3.117 6.407-3.125" fill-rule="evenodd"/>
    </symbol>
    <symbol id="slash" viewBox="0 0 12 16">
      <title>slash icon</title>
      <path d="M11 1L1 15" stroke="#A9A9A9"/>
    </symbol>
    <symbol id="solid-arrow" viewBox="0 0 859 537">
      <title>solid-arrow icon</title>
      <title>solid-arrow</title><path d="M17.89 0h822.93c7.55 0 12.862 3.355 15.938 10.066 3.076 6.99 2.516 13.282-1.678 18.875L443.196 529.746c-3.635 4.753-8.25 7.13-13.84 7.13-6.433 0-11.046-2.377-13.842-7.13L3.63 28.94C-.565 23.35-1.124 17.058 1.952 10.067 5.028 3.356 10.342 0 17.89 0z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="sound-hi" viewBox="0 0 19 16">
      <title>sound-hi icon</title>
      <title>Combined Shape</title><path d="M12.4 2.895L11.19 4.108c2.147 2.145 2.147 5.636 0 7.783l1.213 1.213c2.816-2.815 2.816-7.393 0-10.208zM8.33 1.363c-.135-.062-.258-.038-.367.07L4.003 5.006H.336c-.094 0-.174.032-.24.097C.033 5.167 0 5.246 0 5.34v5.33c0 .092.032.17.097.236.065.065.145.1.24.1H4l3.96 3.57c.06.06.14.093.233.093.042 0 .086-.01.133-.025.135-.052.203-.154.203-.306V1.67c0-.153-.067-.254-.202-.307zM15.296 0l-1.213 1.213c1.814 1.81 2.812 4.222 2.812 6.786 0 2.562-.998 4.974-2.812 6.786l1.213 1.212c2.137-2.136 3.313-4.976 3.313-8 0-3.022-1.177-5.862-3.314-7.998z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="sound-lo" viewBox="0 0 16 15">
      <title>sound-lo icon</title>
      <title>Combined Shape</title><path d="M13.355 1.686L12.05 2.992c2.31 2.31 2.31 6.07 0 8.382l1.305 1.305c3.03-3.032 3.03-7.962 0-10.994zM8.97.036c-.147-.067-.28-.04-.396.077L4.31 3.958H.362c-.1 0-.187.034-.257.105-.07.07-.105.155-.105.256v5.738c0 .1.034.186.105.256.07.07.156.106.257.106H4.31l4.264 3.844c.066.067.15.1.252.1.044 0 .092-.007.143-.024.145-.056.218-.165.218-.33V.366c0-.163-.073-.272-.22-.328z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="sound-mute" viewBox="0 0 23 16">
      <title>sound-mute icon</title>
      <title>Combined Shape</title><path d="M9.99.04c-.163-.074-.31-.046-.44.086L4.8 4.408H.404c-.112 0-.208.04-.286.117-.08.078-.117.173-.117.285v6.392c0 .113.038.207.117.285.078.078.174.118.286.118H4.8l4.75 4.283c.073.074.168.112.28.112.05 0 .103-.01.16-.03.16-.06.243-.182.243-.365V.407c0-.182-.082-.303-.244-.366zm12.75 4.744l-1.357-1.357-3.158 3.158-3.16-3.158-1.357 1.357 3.158 3.158-3.158 3.16 1.357 1.357 3.16-3.16 3.158 3.16 1.357-1.36-3.158-3.158 3.158-3.158z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="star" viewBox="0 0 17 16">
      <title>star icon</title>
      <title>Fill 1 Copy 2</title><path d="M8.398 12.888L3.506 15.96c-.197.124-.445-.057-.388-.284l1.41-5.6L.092 6.37c-.18-.148-.084-.44.148-.455l5.765-.392L8.158.163c.087-.217.394-.217.48 0l2.154 5.36 5.764.392c.232.016.327.307.148.456l-4.434 3.705 1.41 5.6c.056.228-.192.41-.39.285L8.4 12.888z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="stopwatch" viewBox="0 0 644 750">
      <title>stopwatch icon</title>
      <title>Group 2</title><defs><path id="a" d="M0 0h646.327v749.308H0z"/></defs><g fill-rule="evenodd"><path d="M271 478.308h58.77V302H271"/><path d="M461.675 609.237c-42.952 43.003-100.057 66.686-160.794 66.686-60.737 0-117.842-23.683-160.793-66.686C97.123 566.222 73.462 509.03 73.462 448.19c0-60.836 23.66-118.03 66.624-161.044 42.952-43.002 100.057-66.685 160.795-66.685 60.738 0 117.843 23.684 160.795 66.686C504.64 330.16 528.3 387.354 528.3 448.19c0 60.84-23.66 118.032-66.625 161.047zm184.65-396.153l-51.974-51.915-77.378 77.47c-1.103-1.14-2.198-2.284-3.32-3.408C456.82 178.334 381.256 147 300.88 147c-80.377 0-155.94 31.334-212.77 88.232C31.29 292.118 0 367.748 0 448.192c0 80.442 31.292 156.073 88.11 212.96 56.83 56.897 132.394 88.23 212.77 88.23 80.377 0 155.94-31.333 212.77-88.23 56.82-56.887 88.11-132.518 88.11-212.96 0-53.65-13.934-105.148-40.06-150.382l84.626-84.726z"/><mask id="b"><use xlink:href="#a"/></mask><path mask="url(#b)" d="M409.04 0H198v73.462h211.04"/></g>
    </symbol>
    <symbol id="thumbs-up" viewBox="0 0 733 740">
      <title>thumbs-up icon</title>
      <title>Shape</title><path d="M451.623 23.34c8.532-40.904 82.58-35.263 82.58 77.032 0 112.295-50.098 153.35-50.098 190.194 0 22.53 105.455 6.11 173.234 6.11 67.778 0 89.403 87.775 23.66 100.44 87.277 31.13 48.107 124.06-6.974 124.06 55.08 8.49 56.477 123.88-38.35 110.58 38.35 51.124-4.132 97.658-59.166 102.953-177.683 17.095-406.574-9.714-406.574-62.37V313.095c0-51.616 224.31-14.664 281.687-289.754zM45.477 299.77h28.436c25.117 0 45.478 20.365 45.478 45.472v312.71c0 25.112-20.388 45.47-45.477 45.47H45.477C20.36 703.422 0 683.06 0 657.952V345.24c0-25.113 20.388-45.47 45.477-45.47z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="tools" viewBox="0 0 819 756">
      <title>tools icon</title>
      <title>Shape</title><path d="M790.375 148.384c20.775 12.455 30.47 37.366 27.7 70.58-2.77 40.134-19.39 76.116-48.475 106.563-1.385 0-1.385 0-1.385 1.384l-4.155 1.385c-51.245 48.437-112.185 60.892-184.205 38.75-2.77-2.768-5.54-4.152-8.31-4.152-12.465-2.768-20.775 0-24.93 8.303l-73.405 77.5L683.73 636.91c5.54 4.153 5.54 8.304 0 13.84l-98.335 99.643c-5.54 4.152-9.695 4.152-13.85 0-58.17-71.964-119.11-142.545-182.82-210.357l-180.05 193.75c-13.85 15.223-31.855 23.527-54.015 22.143-22.16 0-40.165-8.305-54.015-22.144-13.85-15.223-22.16-34.598-22.16-56.74 0-22.144 8.31-40.135 23.545-52.59l191.13-182.68-23.545-23.526c-6.925-6.92-6.925-12.455-1.385-19.375l4.155-9.688c-24.93-26.294-44.32-42.9-59.555-52.59-13.85-8.302-31.855-12.454-51.245-11.07-36.01 1.384-66.48 19.375-94.18 55.357C46.63 407.18 41.09 447.312 52.17 502.67c1.385 8.303 0 12.455-4.155 12.455-6.925 0-12.465-4.152-19.39-12.455-13.85-13.84-20.775-35.983-26.315-67.813-5.54-31.83 0-70.58 12.465-116.25 23.545-59.51 55.4-107.946 94.18-146.696 15.235-15.222 31.855-29.062 47.09-41.517 5.54-4.152 13.85-5.536 27.7-5.536 12.465 0 22.16-1.384 24.93-5.536 6.925-6.918 9.695-16.606 9.695-31.83l-8.31-8.302c-5.54-5.536-5.54-9.688 0-13.84L271 4.455c4.155-5.535 8.31-5.535 13.85 0l98.335 98.26c5.54 5.535 5.54 11.07 0 15.222l-60.94 60.893c-4.155 4.152-8.31 4.152-13.85 0l-15.235-17.99c-16.62 0-27.7 6.92-33.24 19.374-9.695 19.375-11.08 41.518-5.54 65.045 4.155 12.454 27.7 41.517 70.635 84.42l9.695-5.537c8.31-4.152 13.85-2.768 19.39 1.384 1.385 2.768 9.695 12.455 24.93 27.678l74.79-73.348c6.925-5.536 9.695-13.84 8.31-24.91 0-5.536 0-8.304-1.385-9.688-22.16-74.733-9.695-137.01 37.395-188.215l4.155-4.152c31.855-31.83 66.48-48.438 103.875-51.206 11.08 1.384 24.93 4.152 40.165 9.688 15.235 5.536 24.93 13.84 29.085 22.143l-94.18 94.107-4.155 5.536-1.385 2.77c-1.385 1.382-1.385 4.15-1.385 8.302 0 4.152 0 6.92 1.385 9.688l4.155 4.15 4.155 4.153 80.33 83.036 5.54 5.535 1.385 1.384c1.385 1.382 4.155 1.382 8.31 1.382s6.925 0 8.31-1.383l4.155-1.385 4.155-5.536 94.18-96.876z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="trash" viewBox="0 0 14 16">
      <title>trash icon</title>
      <title>Combined Shape</title><path d="M1.894 14.816c.034.45.118.81.68.805 2.737-.02 5.248.003 7.985-.035.203-.002.546-.335.582-.56.13-.807.883-10.5.883-10.5s-3.907.013-5.497.013c-1.59 0-5.46-.012-5.46-.012s.697 8.594.826 10.29zM12.99 1.156H9.306L8.72 0H4.495L3.91 1.157H.223C.1 1.157 0 1.237 0 1.34v1.73c0 .1.1.182.223.182H12.99c.125 0 .225-.082.225-.182V1.34c0-.102-.1-.183-.224-.183z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="tumblr" viewBox="0 0 11 16">
      <title>tumblr icon</title>
      <title>tumblr copy</title><path d="M10.336 15.133c-.037.026-.09.057-.16.094-.07.036-.224.105-.46.207-.238.1-.488.19-.75.265-.264.075-.604.144-1.02.206-.417.063-.842.094-1.274.094-1.485 0-2.578-.33-3.28-.992-.705-.662-1.056-1.664-1.056-3.008V7H0V4.664c.427-.14.8-.292 1.12-.453.32-.16.633-.365.935-.612.302-.248.556-.532.76-.852.207-.32.384-.71.533-1.172.148-.46.256-.985.324-1.574H6v4h3.672v3H6v4c0 .443.026.8.078 1.074.052.274.15.51.297.71.146.202.35.344.61.427.26.084.598.126 1.015.126.297 0 .64-.056 1.027-.168.388-.112.705-.225.95-.34l.36-.164v2.47z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="twitter" viewBox="0 0 18 15">
      <title>twitter icon</title>
      <title>twitter copy</title><path d="M0 12.727c.26.04.546.06.852.06.796 0 1.575-.154 2.336-.46.762-.308 1.463-.72 2.106-1.237-.768-.006-1.46-.243-2.076-.712C2.6 9.908 2.182 9.318 1.96 8.6c.24.046.46.07.665.07.33 0 .648-.043.955-.13-.824-.164-1.51-.574-2.054-1.23C.98 6.653.708 5.893.708 5.03v-.043c.51.278 1.05.426 1.62.443-.495-.33-.886-.756-1.173-1.28-.287-.522-.43-1.084-.43-1.686 0-.586.162-1.165.485-1.74.898 1.092 1.984 1.957 3.257 2.596 1.273.64 2.645 1 4.117 1.08-.05-.223-.077-.5-.077-.828 0-.99.348-1.832 1.044-2.528C10.25.348 11.09 0 12.08 0c1.016 0 1.894.375 2.633 1.125.812-.165 1.565-.454 2.26-.87-.274.865-.8 1.527-1.578 1.987.71-.08 1.398-.27 2.063-.57-.478.72-1.072 1.34-1.782 1.857v.468c0 .795-.1 1.595-.303 2.4-.2.804-.49 1.585-.87 2.344-.377.758-.86 1.467-1.452 2.126-.59.66-1.252 1.235-1.986 1.727-.733.49-1.578.88-2.535 1.163-.96.284-1.97.426-3.032.426-2.154 0-3.986-.486-5.498-1.457z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="user" viewBox="0 0 739 739">
      <title>user icon</title>
      <title>Artboard Copy 10</title><path d="M0 723.484v-30.672c0-20.928 5.112-39.45 15.336-55.57 10.224-16.116 23.454-29.227 39.692-39.33 16.238-10.104 34.22-19.305 53.946-27.605s39.45-16.237 59.177-23.815c19.727-7.578 37.71-15.576 53.947-23.996 16.238-8.42 29.468-19.064 39.692-31.934 10.223-12.87 15.335-27.604 15.335-44.203-2.406-2.407-5.713-6.075-9.923-11.007-4.21-4.93-11.607-15.756-22.192-32.475-10.584-16.72-19.966-34.4-28.145-53.044-8.18-18.643-15.576-42.94-22.192-72.89-6.615-29.95-9.923-60.68-9.923-92.194 0-25.018 4.87-48.894 14.614-71.627 9.743-22.733 22.913-42.398 39.512-58.997 16.6-16.6 36.264-29.77 58.997-39.512C320.606 4.87 344.483 0 369.5 0c25.018 0 48.894 4.87 71.627 14.614 22.733 9.743 42.398 22.913 58.997 39.512 16.6 16.6 29.77 36.264 39.512 58.997 9.743 22.733 14.614 46.61 14.614 71.627 0 23.094-1.684 45.646-5.052 67.657-3.368 22.012-7.758 41.437-13.17 58.276-5.413 16.84-11.427 32.776-18.042 47.81-6.616 15.036-13.23 27.786-19.847 38.25-6.616 10.465-12.63 19.546-18.043 27.244-5.412 7.698-9.802 13.35-13.17 16.96l-5.052 5.412c0 16.598 5.112 31.332 15.336 44.202 10.225 12.87 23.455 23.514 39.693 31.934 16.238 8.42 34.22 16.418 53.946 23.996 19.725 7.578 39.45 15.516 59.176 23.815 19.726 8.3 37.708 17.5 53.946 27.605 16.238 10.103 29.468 23.214 39.692 39.33 10.224 16.12 15.336 34.642 15.336 55.57v30.672c0 4.33-1.503 7.998-4.51 11.006-3.008 3.007-6.676 4.51-11.006 4.51H15.516c-4.33 0-7.998-1.503-11.006-4.51C1.503 731.482 0 727.814 0 723.484z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="volume-up" viewBox="0 0 706 706">
      <title>volume-up icon</title>
      <title>Artboard Copy 9</title><path d="M0 470.207V235.104c0-4.137 1.436-7.642 4.31-10.515 2.872-2.873 6.377-4.31 10.513-4.31H126.17L283.71 62.74c4.826-4.826 10.227-5.86 16.202-3.102 5.975 2.298 8.963 6.78 8.963 13.444V632.23c0 6.663-2.988 11.145-8.963 13.443-2.068.69-4.022 1.034-5.86 1.034-4.137 0-7.584-1.38-10.342-4.137L126.17 485.03H14.823c-4.136 0-7.64-1.436-10.514-4.31C1.435 477.85 0 474.345 0 470.208zM380.578 534.5c0-4.023 1.38-7.413 4.137-10.17 31.025-31.026 52.054-67.395 63.085-109.107 11.03-41.712 11.03-83.423 0-125.136-11.03-41.712-32.06-78.08-63.085-109.106-2.758-2.756-4.137-6.146-4.137-10.168 0-4.022 1.38-7.527 4.137-10.514l41.712-41.712c2.987-2.988 6.492-4.482 10.514-4.482 4.023 0 7.413 1.494 10.17 4.482 31.715 31.715 55.846 68.198 72.393 109.45 16.547 41.253 24.82 82.792 24.82 124.62 0 41.826-8.273 83.365-24.82 124.618-16.547 41.252-40.678 77.736-72.393 109.45-2.757 2.988-6.147 4.482-10.17 4.482-4.02 0-7.526-1.494-10.513-4.48l-41.712-41.713c-2.758-2.988-4.137-6.493-4.137-10.514zm114.45 114.448c0-4.022 1.378-7.412 4.136-10.17 31.026-31.025 56.305-65.9 75.84-104.624 19.535-38.725 32.174-78.655 37.92-119.793 5.745-41.136 5.745-82.273 0-123.41-5.746-41.138-18.385-81.07-37.92-119.793-19.535-38.725-44.814-73.6-75.84-104.625-2.758-2.758-4.137-6.147-4.137-10.17 0-4.02 1.38-7.526 4.137-10.513l41.712-41.713C543.864 1.38 547.368 0 551.39 0c4.022 0 7.412 1.38 10.17 4.137 31.485 31.715 58.143 66.762 79.976 105.14 21.833 38.38 37.977 77.794 48.434 118.243 10.457 40.448 15.685 82.16 15.685 125.135 0 42.976-5.228 84.688-15.685 125.136-10.457 40.45-26.6 79.862-48.434 118.242-21.833 38.38-48.49 73.427-79.976 105.142-2.758 2.758-6.148 4.137-10.17 4.137s-7.526-1.378-10.514-4.136l-41.712-41.712c-2.758-2.988-4.137-6.492-4.137-10.514z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="warning" viewBox="0 0 16 16">
      <title>warning icon</title>
      <title>Combined Shape Copy 10</title><path d="M8 14.47c-3.567 0-6.468-2.902-6.468-6.47 0-3.567 2.9-6.468 6.468-6.468 3.565 0 6.467 2.9 6.467 6.468S11.565 14.47 8 14.47M8 0C3.58 0 0 3.583 0 8c0 4.42 3.58 8 8 8 4.417 0 8-3.58 8-8 0-4.417-3.583-8-8-8m0 10.344c-.516 0-.933.418-.933.934 0 .514.417.933.933.933s.932-.418.932-.932c0-.516-.416-.934-.932-.934m-.413-.874h.83c.094 0 .118-.065.13-.15l.212-1.89v-3.4c-.002-.045-.038-.083-.085-.083v-.002h-1.35v.002c-.046 0-.084.038-.084.083v3.4l.214 1.88c.01.09.035.16.133.16" fill-rule="evenodd"/>
    </symbol>
    <symbol id="write" viewBox="0 0 712 711">
      <title>write icon</title>
      <title>Artboard Copy 11</title><path d="M75.003 504.435c.694-1.852 1.736-3.472 3.124-4.86L444.39 133.313 577.7 266.625 211.44 632.887c-1.39 1.39-3.01 2.43-4.86 3.125L20.496 710.306c-1.62.463-3.47.694-5.554.694-3.703 0-7.29-1.39-10.763-4.166C.246 702.9-.91 697.46.71 690.517l74.293-186.082zm413.824-415.56l75.683-75.683C573.305 4.397 583.777 0 595.928 0c12.15 0 22.855 4.397 32.113 13.192l69.782 69.78c8.795 9.26 13.192 19.963 13.192 32.114 0 12.15-4.397 22.624-13.192 31.42l-75.683 75.68-133.313-133.31z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="x" viewBox="0 0 16 16">
      <title>x icon</title>
      <title>Fill 1 Copy 4</title><path d="M9.805 8l6.092-6.092c.138-.138.138-.36 0-.5L14.59.103c-.136-.136-.36-.136-.497 0L8 6.196 1.908.102c-.136-.136-.36-.136-.497 0L.103 1.41c-.137.137-.137.36 0 .498L6.197 8 .103 14.092c-.137.138-.137.36 0 .5l1.307 1.306c.138.136.36.136.497 0L8 9.804l6.093 6.094c.138.136.36.136.498 0l1.307-1.307c.138-.137.138-.36 0-.498L9.805 8z" fill-rule="evenodd"/>
    </symbol>
    <symbol id="youtube" viewBox="0 0 23 16">
      <title>youtube icon</title>
      <title>Combined Shape</title><path d="M22.226 2.91C21.796 1.19 20.99.527 19.504.287 18.648.162 14.54 0 11.278 0h.014c-3.26 0-7.37.162-8.226.287C1.58.527.774 1.19.344 2.91.2 3.49 0 6.658 0 7.868v.264c0 1.21.2 4.38.344 4.958.43 1.72 1.237 2.383 2.722 2.623.856.125 4.965.287 8.226.287h-.014c3.26 0 7.37-.162 8.226-.287 1.485-.24 2.292-.903 2.722-2.623.145-.58.344-3.748.344-4.958v-.264c0-1.21-.2-4.38-.344-4.958zM8.94 4.758l5.997 3.13-5.996 3.28V4.76z" fill-rule="evenodd"/>
    </symbol></svg>
<!-- / render admin nav last to ensure use of all feature flags is captured -->

</body>
</html>
'
];
