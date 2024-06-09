<?php
declare(strict_types = 1);

return [
    'http://www.23hq.com/23/oembed' => [
        '|^https?://www\\.23hq\\.com/.*/photo/.*$|i',
    ],
    'https://playout.3qsdn.com/oembed' => [
        '|^https?://playout\\.3qsdn\\.com/embed/.*$|i',
    ],
    'https://api.abraia.me/oembed' => [
        '|^https?://store\\.abraia\\.me/.*$|i',
    ],
    'https://oembed.acast.com/v1/embed-player' => [
        '|^https?://play\\.acast\\.com/s/.*$|i',
    ],
    'https://secure.actblue.com/cf/oembed' => [
        '|^https?://secure\\.actblue\\.com/donate/.*$|i',
    ],
    'https://adilo.bigcommand.com/web/oembed' => [
        '|^https?://adilo\\.bigcommand\\.com/watch/.*$|i',
    ],
    'https://openapi.afreecatv.com/oembed/embedinfo' => [
        '|^https?://vod\\.afreecatv\\.com/player/$|i',
        '|^https?://v\\.afree\\.ca/ST/$|i',
        '|^https?://vod\\.afreecatv\\.com/ST/$|i',
        '|^https?://vod\\.afreecatv\\.com/PLAYER/STATION/$|i',
        '|^https?://play\\.afreecatv\\.com/$|i',
    ],
    'https://viewer.altium.com/shell/oembed' => [
        '|^https?://altium\\.com/viewer/.*$|i',
    ],
    'https://api.altrulabs.com/api/v1/social/oembed' => [
        '|^https?://app\\.altrulabs\\.com/.*/.*\\?answer_id\\=.*$|i',
        '|^https?://app\\.altrulabs\\.com/player/.*$|i',
    ],
    'https://live.amcharts.com/oembed' => [
        '|^https?://live\\.amcharts\\.com/.*$|i',
    ],
    'https://api.amtraker.com/v2/oembed' => [
        '|^https?://amtraker\\.com/trains/.*$|i',
        '|^https?://beta\\.amtraker\\.com/trains/.*$|i',
    ],
    'https://animatron.com/oembed/json' => [
        '|^https?://www\\.animatron\\.com/project/.*$|i',
        '|^https?://animatron\\.com/project/.*$|i',
    ],
    'http://animoto.com/oembeds/create' => [
        '|^https?://animoto\\.com/play/.*$|i',
    ],
    'https://api.anniemusic.app/api/v1/oembed' => [
        '|^https?://anniemusic\\.app/t/.*$|i',
        '|^https?://anniemusic\\.app/p/.*$|i',
    ],
    'https://storymaps.arcgis.com/oembed' => [
        '|^https?://storymaps\\.arcgis\\.com/stories/.*$|i',
    ],
    'https://app.archivos.digital/oembed/' => [
        '|^https?://app\\.archivos\\.digital/app/view/.*$|i',
    ],
    'https://studio.assemblrworld.com/api/oembed' => [
        '|^https?://.*\\.studio\\.assemblrworld\\.com/creation/.*$|i',
        '|^https?://studio\\.assemblrworld\\.com/creation/.*$|i',
        '|^https?://.*\\.app\\-edu\\.assemblrworld\\.com/Creation/.*$|i',
        '|^https?://app\\-edu\\.assemblrworld\\.com/Creation/.*$|i',
        '|^https?://assemblr\\.world/.*$|i',
        '|^https?://editor\\.assemblrworld\\.com/.*$|i',
        '|^https?://.*\\.assemblrworld\\.com/creation/.*$|i',
        '|^https?://.*\\.assemblrworld\\.com/Creation/.*$|i',
    ],
    'https://api.audio.com/oembed' => [
        '|^https?://audio\\.com/.*$|i',
        '|^https?://www\\.audio\\.com/.*$|i',
    ],
    'https://audioboom.com/publishing/oembed.json' => [
        '|^https?://audioboom\\.com/channels/.*$|i',
        '|^https?://audioboom\\.com/channel/.*$|i',
        '|^https?://audioboom\\.com/playlists/.*$|i',
        '|^https?://audioboom\\.com/podcasts/.*$|i',
        '|^https?://audioboom\\.com/podcast/.*$|i',
        '|^https?://audioboom\\.com/posts/.*$|i',
        '|^https?://audioboom\\.com/episodes/.*$|i',
    ],
    'https://audioclip.naver.com/oembed' => [
        '|^https?://audioclip\\.naver\\.com/channels/.*/clips/.*$|i',
        '|^https?://audioclip\\.naver\\.com/audiobooks/.*$|i',
    ],
    'https://audiomack.com/oembed' => [
        '|^https?://audiomack\\.com/.*/song/.*$|i',
        '|^https?://audiomack\\.com/.*/album/.*$|i',
        '|^https?://audiomack\\.com/.*/playlist/.*$|i',
    ],
    'https://podcasts.audiomeans.fr/services/oembed' => [
        '|^https?://podcasts\\.audiomeans\\.fr/.*$|i',
    ],
    'https://stage-embed.avocode.com/api/oembed' => [
        '|^https?://app\\.avocode\\.com/view/.*$|i',
    ],
    'https://backtracks.fm/oembed' => [
        '|^https?://backtracks\\.fm/.*/.*/e/.*$|i',
        '|^https?://backtracks\\.fm/.*/s/.*/.*$|i',
        '|^https?://backtracks\\.fm/.*/.*/.*/.*/e/.*/.*$|i',
        '|^https?://backtracks\\.fm/.*$|i',
    ],
    'https://balsamiq.cloud/oembed' => [
        '|^https?://balsamiq\\.cloud/.*$|i',
    ],
    'https://api.beams.fm/oEmbed' => [
        '|^https?://beams\\.fm/.*$|i',
    ],
    'https://www.beautiful.ai/api/oembed' => [
        '|^https?://www\\.beautiful\\.ai/.*$|i',
    ],
    'https://www.behance.net/services/oembed' => [
        '|^https?://www\\.behance\\.net/gallery/.*/.*$|i',
        '|^https?://www\\.behance\\.net/.*/services/.*/.*$|i',
    ],
    'https://biqapp.com/api/v1/video/oembed' => [
        '|^https?://cloud\\.biqapp\\.com/.*$|i',
    ],
    'https://blackfire.io/oembed' => [
        '|^https?://blackfire\\.io/profiles/.*/graph$|i',
        '|^https?://blackfire\\.io/profiles/compare/.*/graph$|i',
    ],
    'https://blogcast.host/oembed' => [
        '|^https?://blogcast\\.host/embed/.*$|i',
        '|^https?://blogcast\\.host/embedly/.*$|i',
    ],
    'https://embed.bsky.app/oembed' => [
        '|^https?://bsky\\.app/profile/.*/post/.*$|i',
    ],
    'https://bookingmood.com/api/oembed' => [
        '|^https?://www\\.bookingmood\\.com/embed/.*/.*$|i',
    ],
    'http://boxofficebuz.com/oembed' => [
        '|^https?://boxofficebuz\\.com.*$|i',
    ],
    'https://view.briovr.com/api/v1/worlds/oembed/' => [
        '|^https?://view\\.briovr\\.com/api/v1/worlds/oembed/.*$|i',
    ],
    'https://www.bumper.com/oembed/bumper' => [
        '|^https?://www\\.bumper\\.com/oembed/bumper$|i',
        '|^https?://www\\.bumper\\.com/oembed\\-s/bumper$|i',
    ],
    'https://video.bunnycdn.com/OEmbed' => [
        '|^https?://iframe\\.mediadelivery\\.net/.*$|i',
        '|^https?://video\\.bunnycdn\\.com/.*$|i',
    ],
    'https://buttondown.email/embed' => [
        '|^https?://buttondown\\.email/.*$|i',
    ],
    'https://cmc.byzart.eu/oembed/' => [
        '|^https?://cmc\\.byzart\\.eu/files/.*$|i',
    ],
    'http://cacoo.com/oembed.json' => [
        '|^https?://cacoo\\.com/diagrams/.*$|i',
    ],
    'https://www.canva.com/_oembed' => [
        '|^https?://www\\.canva\\.com/design/.*/view$|i',
    ],
    'https://minesweeper.today/api/oembed' => [
        '|^https?://minesweeper\\.today/.*$|i',
    ],
    'http://img.catbo.at/oembed.json' => [
        '|^https?://img\\.catbo\\.at/.*$|i',
    ],
    'https://api.celero.io/api/oembed' => [
        '|^https?://embeds\\.celero\\.io/.*$|i',
    ],
    'http://view.ceros.com/oembed' => [
        '|^https?://view\\.ceros\\.com/.*$|i',
    ],
    'https://www.chainflix.net/video/oembed' => [
        '|^https?://chainflix\\.net/video/.*$|i',
        '|^https?://chainflix\\.net/video/embed/.*$|i',
        '|^https?://.*\\.chainflix\\.net/video/.*$|i',
        '|^https?://.*\\.chainflix\\.net/video/embed/.*$|i',
    ],
    'http://embed.chartblocks.com/1.0/oembed' => [
        '|^https?://public\\.chartblocks\\.com/c/.*$|i',
    ],
    'http://chirb.it/oembed.json' => [
        '|^https?://chirb\\.it/.*$|i',
    ],
    'https://chroco.ooo/embed' => [
        '|^https?://chroco\\.ooo/mypage/.*$|i',
        '|^https?://chroco\\.ooo/story/.*$|i',
    ],
    'https://www.circuitlab.com/circuit/oembed/' => [
        '|^https?://www\\.circuitlab\\.com/circuit/.*$|i',
    ],
    'https://www.clipland.com/api/oembed' => [
        '|^https?://www\\.clipland\\.com/v/.*$|i',
    ],
    'http://api.clyp.it/oembed/' => [
        '|^https?://clyp\\.it/.*$|i',
        '|^https?://clyp\\.it/playlist/.*$|i',
    ],
    'https://app.ilovecoco.video/api/oembed.json' => [
        '|^https?://app\\.ilovecoco\\.video/.*/embed$|i',
    ],
    'https://codehs.com/api/sharedprogram/1/oembed/' => [
        '|^https?://codehs\\.com/editor/share_abacus/.*$|i',
    ],
    'https://codepen.io/api/oembed' => [
        '|^https?://codepen\\.io/.*$|i',
    ],
    'https://codepoints.net/api/v1/oembed' => [
        '|^https?://codepoints\\.net/.*$|i',
        '|^https?://www\\.codepoints\\.net/.*$|i',
    ],
    'https://codesandbox.io/oembed' => [
        '|^https?://codesandbox\\.io/s/.*$|i',
        '|^https?://codesandbox\\.io/embed/.*$|i',
    ],
    'http://www.collegehumor.com/oembed.json' => [
        '|^https?://www\\.collegehumor\\.com/video/.*$|i',
    ],
    'https://commaful.com/api/oembed/' => [
        '|^https?://commaful\\.com/play/.*$|i',
    ],
    'http://coub.com/api/oembed.json' => [
        '|^https?://coub\\.com/view/.*$|i',
        '|^https?://coub\\.com/embed/.*$|i',
    ],
    'http://crowdranking.com/api/oembed.json' => [
        '|^https?://crowdranking\\.com/.*/.*$|i',
    ],
    'https://crumb.sh/oembed/' => [
        '|^https?://crumb\\.sh/.*$|i',
    ],
    'https://gql.cueup.io/oembed' => [
        '|^https?://cueup\\.io/user/.*/sounds/.*$|i',
    ],
    'https://api.curated.co/oembed' => [
        '|^https?://.*\\.curated\\.co/.*$|i',
    ],
    'https://app.customerdb.com/embed' => [
        '|^https?://app\\.customerdb\\.com/share/.*$|i',
    ],
    'https://app.dadan.io/api/video/oembed' => [
        '|^https?://app\\.dadan\\.io/.*$|i',
        '|^https?://stage\\.dadan\\.io/.*$|i',
    ],
    'https://www.dailymotion.com/services/oembed' => [
        '|^https?://www\\.dailymotion\\.com/video/.*$|i',
        '|^https?://geo\\.dailymotion\\.com/player\\.html\\?video\\=.*$|i',
    ],
    'https://dalexni.com/oembed/' => [
        '|^https?://dalexni\\.com/i/.*$|i',
    ],
    'https://api.datawrapper.de/v3/oembed/' => [
        '|^https?://datawrapper\\.dwcdn\\.net/.*$|i',
    ],
    'https://embed.deseret.com/' => [
        '|^https?://.*\\.deseret\\.com/.*$|i',
    ],
    'http://backend.deviantart.com/oembed' => [
        '|^https?://.*\\.deviantart\\.com/art/.*$|i',
        '|^https?://.*\\.deviantart\\.com/.*\\#/d.*$|i',
        '|^https?://fav\\.me/.*$|i',
        '|^https?://sta\\.sh/.*$|i',
        '|^https?://.*\\.deviantart\\.com/.*/art/.*$|i',
    ],
    'https://www.ultimedia.com/api/search/oembed' => [
        '|^https?://www\\.ultimedia\\.com/central/video/edit/id/.*/topic_id/.*/$|i',
        '|^https?://www\\.ultimedia\\.com/default/index/videogeneric/id/.*/showtitle/1/viewnc/1$|i',
        '|^https?://www\\.ultimedia\\.com/default/index/videogeneric/id/.*$|i',
    ],
    'https://www.docdroid.net/api/oembed' => [
        '|^https?://.*\\.docdroid\\.net/.*$|i',
        '|^https?://docdro\\.id/.*$|i',
        '|^https?://.*\\.docdroid\\.com/.*$|i',
    ],
    'https://www.docswell.com/service/oembed' => [
        '|^https?://docswell\\.com/s/.*/.*$|i',
        '|^https?://www\\.docswell\\.com/s/.*/.*$|i',
    ],
    'http://dotsub.com/services/oembed' => [
        '|^https?://dotsub\\.com/view/.*$|i',
    ],
    'https://dreambroker.com/channel/oembed' => [
        '|^https?://www\\.dreambroker\\.com/channel/.*/.*$|i',
    ],
    'https://api.d.tube/oembed' => [
        '|^https?://d\\.tube/v/.*$|i',
    ],
    'https://api.echoeshq.com/oembed' => [
        '|^https?://app\\.echoeshq\\.com/embed/.*$|i',
    ],
    'https://www.edumedia-sciences.com/oembed.json' => [
        '|^https?://www\\.edumedia\\-sciences\\.com/.*$|i',
    ],
    'https://www.edumedia-sciences.com/oembed.xml' => [
        '|^https?://www\\.edumedia\\-sciences\\.com/.*$|i',
    ],
    'http://egliseinfo.catholique.fr/api/oembed' => [
        '|^https?://egliseinfo\\.catholique\\.fr/.*$|i',
    ],
    'https://embedery.com/api/oembed' => [
        '|^https?://embedery\\.com/widget/.*$|i',
    ],
    'https://ethfiddle.com/services/oembed/' => [
        '|^https?://ethfiddle\\.com/.*$|i',
    ],
    'https://evt.live/api/oembed' => [
        '|^https?://evt\\.live/.*$|i',
        '|^https?://evt\\.live/.*/.*$|i',
        '|^https?://live\\.eventlive\\.pro/.*$|i',
        '|^https?://live\\.eventlive\\.pro/.*/.*$|i',
    ],
    'https://api.everviz.com/oembed' => [
        '|^https?://app\\.everviz\\.com/embed/.*$|i',
    ],
    'https://oembed.ex.co/item' => [
        '|^https?://app\\.ex\\.co/stories/.*$|i',
        '|^https?://www\\.playbuzz\\.com/.*$|i',
    ],
    'https://eyrie.io/v1/oembed' => [
        '|^https?://eyrie\\.io/board/.*$|i',
        '|^https?://eyrie\\.io/sparkfun/.*$|i',
    ],
    'https://graph.facebook.com/v16.0/oembed_post' => [
        '|^https?://www\\.facebook\\.com/.*/posts/.*$|i',
        '|^https?://www\\.facebook\\.com/.*/activity/.*$|i',
        '|^https?://www\\.facebook\\.com/.*/photos/.*$|i',
        '|^https?://www\\.facebook\\.com/photo\\.php\\?fbid\\=.*$|i',
        '|^https?://www\\.facebook\\.com/photos/.*$|i',
        '|^https?://www\\.facebook\\.com/permalink\\.php\\?story_fbid\\=.*$|i',
        '|^https?://www\\.facebook\\.com/media/set\\?set\\=.*$|i',
        '|^https?://www\\.facebook\\.com/questions/.*$|i',
        '|^https?://www\\.facebook\\.com/notes/.*/.*/.*$|i',
    ],
    'https://graph.facebook.com/v16.0/oembed_video' => [
        '|^https?://www\\.facebook\\.com/.*/videos/.*$|i',
        '|^https?://www\\.facebook\\.com/video\\.php\\?id\\=.*$|i',
        '|^https?://www\\.facebook\\.com/video\\.php\\?v\\=.*$|i',
    ],
    'https://graph.facebook.com/v16.0/oembed_page' => [
        '|^https?://www\\.facebook\\.com/.*$|i',
    ],
    'https://app.getfader.com/api/oembed' => [
        '|^https?://app\\.getfader\\.com/projects/.*/publish$|i',
    ],
    'https://faithlifetv.com/api/oembed' => [
        '|^https?://faithlifetv\\.com/items/.*$|i',
        '|^https?://faithlifetv\\.com/items/resource/.*/.*$|i',
        '|^https?://faithlifetv\\.com/media/.*$|i',
        '|^https?://faithlifetv\\.com/media/assets/.*$|i',
        '|^https?://faithlifetv\\.com/media/resource/.*/.*$|i',
    ],
    'https://www.figma.com/api/oembed' => [
        '|^https?://www\\.figma\\.com/file/.*$|i',
    ],
    'https://www.fireworktv.com/oembed' => [
        '|^https?://.*\\.fireworktv\\.com/.*$|i',
        '|^https?://.*\\.fireworktv\\.com/embed/.*/v/.*$|i',
    ],
    'https://www.fite.tv/oembed' => [
        '|^https?://www\\.fite\\.tv/watch/.*$|i',
    ],
    'https://flat.io/services/oembed' => [
        '|^https?://flat\\.io/score/.*$|i',
        '|^https?://.*\\.flat\\.io/score/.*$|i',
    ],
    'https://www.flickr.com/services/oembed/' => [
        '|^https?://.*\\.flickr\\.com/photos/.*$|i',
        '|^https?://flic\\.kr/p/.*$|i',
        '|^https?://.*\\..*\\.flickr\\.com/.*/.*$|i',
    ],
    'https://app.flourish.studio/api/v1/oembed' => [
        '|^https?://public\\.flourish\\.studio/visualisation/.*$|i',
        '|^https?://public\\.flourish\\.studio/story/.*$|i',
    ],
    'https://flowhub.org/o/embed' => [
        '|^https?://flowhub\\.org/f/.*$|i',
        '|^https?://flowhub\\.org/s/.*$|i',
    ],
    'https://fooday.app/oembed' => [
        '|^https?://fooday\\.app/.*/reviews/.*$|i',
        '|^https?://fooday\\.app/.*/spots/.*$|i',
    ],
    'https://fiso.foxsports.com.au/oembed' => [
        '|^https?://fiso\\.foxsports\\.com\\.au/isomorphic\\-widget/.*$|i',
    ],
    'https://framebuzz.com/oembed/' => [
        '|^https?://framebuzz\\.com/v/.*$|i',
    ],
    'https://api.framer.com/web/oembed' => [
        '|^https?://framer\\.com/share/.*$|i',
        '|^https?://framer\\.com/embed/.*$|i',
    ],
    'http://api.geograph.org.uk/api/oembed' => [
        '|^https?://.*\\.geograph\\.org\\.uk/.*$|i',
        '|^https?://.*\\.geograph\\.co\\.uk/.*$|i',
        '|^https?://.*\\.geograph\\.ie/.*$|i',
        '|^https?://.*\\.wikimedia\\.org/.*_geograph\\.org\\.uk_.*$|i',
    ],
    'http://www.geograph.org.gg/api/oembed' => [
        '|^https?://.*\\.geograph\\.org\\.gg/.*$|i',
        '|^https?://.*\\.geograph\\.org\\.je/.*$|i',
        '|^https?://channel\\-islands\\.geograph\\.org/.*$|i',
        '|^https?://channel\\-islands\\.geographs\\.org/.*$|i',
        '|^https?://.*\\.channel\\.geographs\\.org/.*$|i',
    ],
    'http://geo.hlipp.de/restapi.php/api/oembed' => [
        '|^https?://geo\\-en\\.hlipp\\.de/.*$|i',
        '|^https?://geo\\.hlipp\\.de/.*$|i',
        '|^https?://germany\\.geograph\\.org/.*$|i',
    ],
    'http://embed.gettyimages.com/oembed' => [
        '|^https?://gty\\.im/.*$|i',
    ],
    'https://www.gifnote.com/services/oembed' => [
        '|^https?://www\\.gifnote\\.com/play/.*$|i',
    ],
    'https://giphy.com/services/oembed' => [
        '|^https?://giphy\\.com/gifs/.*$|i',
        '|^https?://giphy\\.com/clips/.*$|i',
        '|^https?://gph\\.is/.*$|i',
        '|^https?://media\\.giphy\\.com/media/.*/giphy\\.gif$|i',
    ],
    'https://gloria.tv/oembed/' => [
        '|^https?://gloria\\.tv/.*$|i',
    ],
    'https://embed.gmetri.com/oembed/' => [
        '|^https?://view\\.gmetri\\.com/.*$|i',
        '|^https?://.*\\.gmetri\\.com/.*$|i',
    ],
    'https://app.gong.io/oembed' => [
        '|^https?://app\\.gong\\.io/call\\?id\\=.*$|i',
    ],
    'https://api.grain.com/_/api/oembed' => [
        '|^https?://grain\\.co/highlight/.*$|i',
        '|^https?://grain\\.co/share/.*$|i',
        '|^https?://grain\\.com/share/.*$|i',
    ],
    'https://api.luminery.com/oembed' => [
        '|^https?://gtchannel\\.com/watch/.*$|i',
    ],
    'https://api.gumlet.com/v1/oembed' => [
        '|^https?://gumlet\\.tv/watch/.*$|i',
        '|^https?://www\\.gumlet\\.com/watch/.*$|i',
        '|^https?://play\\.gumlet\\.io/embed/.*$|i',
    ],
    'https://api.gyazo.com/api/oembed' => [
        '|^https?://gyazo\\.com/.*$|i',
    ],
    'https://api.hash.ai/oembed' => [
        '|^https?://core\\.hash\\.ai/@.*$|i',
    ],
    'https://hearthis.at/oembed/?format=json' => [
        '|^https?://hearthis\\.at/.*/.*/$|i',
        '|^https?://hearthis\\.at/.*/set/.*/$|i',
    ],
    'https://heyzine.com/api1/oembed' => [
        '|^https?://heyzine\\.com/flip\\-book/.*$|i',
        '|^https?://.*\\.hflip\\.co/.*$|i',
        '|^https?://.*\\.aflip\\.in/.*$|i',
    ],
    'https://player.hihaho.com/services/oembed' => [
        '|^https?://player\\.hihaho\\.com/.*$|i',
    ],
    'https://www.hippovideo.io/services/oembed' => [
        '|^https?://.*\\.hippovideo\\.io/.*$|i',
    ],
    'https://homey.app/api/oembed/flow' => [
        '|^https?://homey\\.app/f/.*$|i',
        '|^https?://homey\\.app/.*/flow/.*$|i',
    ],
    'https://portal.hopvue.com/api/oembed/' => [
        '|^https?://.*\\.hopvue\\.com/.*$|i',
    ],
    'http://huffduffer.com/oembed' => [
        '|^https?://huffduffer\\.com/.*/.*$|i',
    ],
    'http://www.hulu.com/api/oembed.json' => [
        '|^https?://www\\.hulu\\.com/watch/.*$|i',
    ],
    'https://oembed.ideamapper.com/oembed' => [
        '|^https?://oembed\\.ideamapper\\.com/.*$|i',
    ],
    'https://oembed.idomoo.com/oembed' => [
        '|^https?://.*\\.idomoo\\.com/.*$|i',
    ],
    'http://www.ifixit.com/Embed' => [
        '|^https?://www\\.ifixit\\.com/Guide/View/.*$|i',
    ],
    'http://www.ifttt.com/oembed/' => [
        '|^https?://ifttt\\.com/recipes/.*$|i',
    ],
    'https://www.iheart.com/oembed' => [
        '|^https?://www\\.iheart\\.com/podcast/.*/.*$|i',
    ],
    'https://qr.imenupro.com/api/oembed' => [
        '|^https?://qr\\.imenupro\\.com/.*$|i',
    ],
    'https://oembed.incredible.dev/oembed' => [
        '|^https?://incredible\\.dev/watch/.*$|i',
    ],
    'https://player.indacolive.com/services/oembed' => [
        '|^https?://player\\.indacolive\\.com/player/jwp/clients/.*$|i',
    ],
    'https://infogram.com/oembed' => [
        '|^https?://infogram\\.com/.*$|i',
    ],
    'https://infoveave.net/services/oembed/' => [
        '|^https?://.*\\.infoveave\\.net/E/.*$|i',
        '|^https?://.*\\.infoveave\\.net/P/.*$|i',
    ],
    'https://www.injurymap.com/services/oembed' => [
        '|^https?://www\\.injurymap\\.com/exercises/.*$|i',
    ],
    'https://www.inoreader.com/oembed/api/' => [
        '|^https?://www\\.inoreader\\.com/oembed/$|i',
    ],
    'http://api.inphood.com/oembed' => [
        '|^https?://.*\\.inphood\\.com/.*$|i',
    ],
    'https://graph.facebook.com/v16.0/instagram_oembed' => [
        '|^https?://instagram\\.com/.*/p/.*,$|i',
        '|^https?://www\\.instagram\\.com/.*/p/.*,$|i',
        '|^https?://instagram\\.com/p/.*$|i',
        '|^https?://instagr\\.am/p/.*$|i',
        '|^https?://www\\.instagram\\.com/p/.*$|i',
        '|^https?://www\\.instagr\\.am/p/.*$|i',
        '|^https?://instagram\\.com/tv/.*$|i',
        '|^https?://instagr\\.am/tv/.*$|i',
        '|^https?://www\\.instagram\\.com/tv/.*$|i',
        '|^https?://www\\.instagr\\.am/tv/.*$|i',
        '|^https?://www\\.instagram\\.com/reel/.*$|i',
        '|^https?://instagram\\.com/reel/.*$|i',
        '|^https?://instagr\\.am/reel/.*$|i',
    ],
    'https://www.insticator.com/oembed' => [
        '|^https?://ppa\\.insticator\\.com/embed\\-unit/.*$|i',
    ],
    'https://issuu.com/oembed' => [
        '|^https?://issuu\\.com/.*/docs/.*$|i',
    ],
    'https://create.storage.api.itemis.io/api/embed' => [
        '|^https?://play\\.itemis\\.io/.*$|i',
    ],
    'https://api.jovian.com/oembed.json' => [
        '|^https?://jovian\\.ml/.*$|i',
        '|^https?://jovian\\.ml/viewer.*$|i',
        '|^https?://.*\\.jovian\\.ml/.*$|i',
        '|^https?://jovian\\.ai/.*$|i',
        '|^https?://jovian\\.ai/viewer.*$|i',
        '|^https?://.*\\.jovian\\.ai/.*$|i',
        '|^https?://jovian\\.com/.*$|i',
        '|^https?://jovian\\.com/viewer.*$|i',
        '|^https?://.*\\.jovian\\.com/.*$|i',
    ],
    'https://tv.kakao.com/oembed' => [
        '|^https?://tv\\.kakao\\.com/channel/.*/cliplink/.*$|i',
        '|^https?://tv\\.kakao\\.com/m/channel/.*/cliplink/.*$|i',
        '|^https?://tv\\.kakao\\.com/channel/v/.*$|i',
        '|^https?://tv\\.kakao\\.com/channel/.*/livelink/.*$|i',
        '|^https?://tv\\.kakao\\.com/m/channel/.*/livelink/.*$|i',
        '|^https?://tv\\.kakao\\.com/channel/l/.*$|i',
    ],
    'http://www.kickstarter.com/services/oembed' => [
        '|^https?://www\\.kickstarter\\.com/projects/.*$|i',
    ],
    'https://www.kidoju.com/api/oembed' => [
        '|^https?://www\\.kidoju\\.com/en/x/.*/.*$|i',
        '|^https?://www\\.kidoju\\.com/fr/x/.*/.*$|i',
    ],
    'https://halaman.email/service/oembed' => [
        '|^https?://halaman\\.email/form/.*$|i',
        '|^https?://aplikasi\\.kirim\\.email/form/.*$|i',
    ],
    'https://embed.kit.co/oembed' => [
        '|^https?://kit\\.co/.*/.*$|i',
    ],
    'http://www.kitchenbowl.com/oembed' => [
        '|^https?://www\\.kitchenbowl\\.com/recipe/.*$|i',
    ],
    'https://api.kmdr.sh/services/oembed' => [
        '|^https?://app\\.kmdr\\.sh/h/.*$|i',
        '|^https?://app\\.kmdr\\.sh/history/.*$|i',
    ],
    'https://jdr.knacki.info/oembed' => [
        '|^https?://jdr\\.knacki\\.info/meuh/.*$|i',
    ],
    'https://api.spoonacular.com/knowledge/oembed' => [
        '|^https?://knowledgepad\\.co/\\#/knowledge/.*$|i',
    ],
    'https://embed.kooapp.com/services/oembed' => [
        '|^https?://.*\\.kooapp\\.com/koo/.*$|i',
    ],
    'https://kurozora.app/oembed' => [
        '|^https?://kurozora\\.app/episodes.*$|i',
        '|^https?://kurozora\\.app/songs.*$|i',
    ],
    'http://learningapps.org/oembed.php' => [
        '|^https?://learningapps\\.org/.*$|i',
    ],
    'https://umotion-test.univ-lemans.fr/oembed' => [
        '|^https?://umotion\\-test\\.univ\\-lemans\\.fr/video/.*$|i',
    ],
    'https://pod.univ-lille.fr/video/oembed' => [
        '|^https?://pod\\.univ\\-lille\\.fr/video/.*$|i',
    ],
    'https://place.line.me/oembed' => [
        '|^https?://place\\.line\\.me/businesses/.*$|i',
    ],
    'https://livestream.com/oembed' => [
        '|^https?://livestream\\.com/accounts/.*/events/.*$|i',
        '|^https?://livestream\\.com/accounts/.*/events/.*/videos/.*$|i',
        '|^https?://livestream\\.com/.*/events/.*$|i',
        '|^https?://livestream\\.com/.*/events/.*/videos/.*$|i',
        '|^https?://livestream\\.com/.*/.*$|i',
        '|^https?://livestream\\.com/.*/.*/videos/.*$|i',
    ],
    'https://embed.lottiefiles.com/oembed' => [
        '|^https?://lottiefiles\\.com/.*$|i',
        '|^https?://.*\\.lottiefiles\\.com/.*$|i',
        '|^https?://.*\\.lottie\\.host/.*$|i',
        '|^https?://lottie\\.host/.*$|i',
    ],
    'https://app.ludus.one/oembed' => [
        '|^https?://app\\.ludus\\.one/.*$|i',
    ],
    'https://admin.lumiere.is/api/services/oembed' => [
        '|^https?://.*\\.lumiere\\.is/v/.*$|i',
    ],
    'http://mathembed.com/oembed' => [
        '|^https?://mathembed\\.com/latex\\?inputText\\=.*$|i',
    ],
    'https://my.matterport.com/api/v1/models/oembed/' => [
        '|^https?://matterport\\.com/.*$|i',
    ],
    'https://me.me/oembed' => [
        '|^https?://me\\.me/i/.*$|i',
    ],
    'https://mdstrm.com/oembed' => [
        '|^https?://mdstrm\\.com/embed/.*$|i',
        '|^https?://mdstrm\\.com/live\\-stream/.*$|i',
        '|^https?://mdstrm\\.com/image/.*$|i',
    ],
    'https://medienarchiv.zhdk.ch/oembed.json' => [
        '|^https?://medienarchiv\\.zhdk\\.ch/entries/.*$|i',
    ],
    'https://mermaid.ink/services/oembed' => [
        '|^https?://mermaid\\.ink/img/.*$|i',
        '|^https?://mermaid\\.ink/svg/.*$|i',
    ],
    'https://web.microsoftstream.com/oembed' => [
        '|^https?://.*\\.microsoftstream\\.com/video/.*$|i',
        '|^https?://.*\\.microsoftstream\\.com/channel/.*$|i',
    ],
    'https://oembed.minervaknows.com' => [
        '|^https?://www\\.minervaknows\\.com/featured\\-recipes/.*$|i',
        '|^https?://www\\.minervaknows\\.com/themes/.*$|i',
        '|^https?://www\\.minervaknows\\.com/themes/.*/recipes/.*$|i',
        '|^https?://app\\.minervaknows\\.com/recipes/.*$|i',
        '|^https?://app\\.minervaknows\\.com/recipes/.*/follow$|i',
    ],
    'https://miro.com/api/v1/oembed' => [
        '|^https?://miro\\.com/app/board/.*$|i',
    ],
    'https://www.mixcloud.com/oembed/' => [
        '|^https?://www\\.mixcloud\\.com/.*/.*/$|i',
    ],
    'https://mixpanel.com/api/app/embed/oembed/' => [
        '|^https?://mixpanel\\.com/.*$|i',
    ],
    'http://api.mobypicture.com/oEmbed' => [
        '|^https?://www\\.mobypicture\\.com/user/.*/view/.*$|i',
        '|^https?://moby\\.to/.*$|i',
    ],
    'https://musicboxmaniacs.com/embed/' => [
        '|^https?://musicboxmaniacs\\.com/explore/melody/.*$|i',
    ],
    'https://mybeweeg.com/services/oembed' => [
        '|^https?://mybeweeg\\.com/w/.*$|i',
    ],
    'https://namchey.com/api/oembed' => [
        '|^https?://namchey\\.com/embeds/.*$|i',
    ],
    'https://www.nanoo.tv/services/oembed' => [
        '|^https?://.*\\.nanoo\\.tv/link/.*$|i',
        '|^https?://nanoo\\.tv/link/.*$|i',
        '|^https?://.*\\.nanoo\\.pro/link/.*$|i',
        '|^https?://nanoo\\.pro/link/.*$|i',
        '|^https?://media\\.zhdk\\.ch/signatur/.*$|i',
        '|^https?://new\\.media\\.zhdk\\.ch/signatur/.*$|i',
    ],
    'https://api.nb.no/catalog/v1/oembed' => [
        '|^https?://www\\.nb\\.no/items/.*$|i',
    ],
    'https://naturalatlas.com/oembed.json' => [
        '|^https?://naturalatlas\\.com/.*$|i',
        '|^https?://naturalatlas\\.com/.*/.*$|i',
        '|^https?://naturalatlas\\.com/.*/.*/.*$|i',
        '|^https?://naturalatlas\\.com/.*/.*/.*/.*$|i',
    ],
    'https://ndla.no/oembed' => [
        '|^https?://ndla\\.no/.*$|i',
        '|^https?://ndla\\.no/article/.*$|i',
        '|^https?://ndla\\.no/audio/.*$|i',
        '|^https?://ndla\\.no/concept/.*$|i',
        '|^https?://ndla\\.no/image/.*$|i',
        '|^https?://ndla\\.no/video/.*$|i',
    ],
    'https://api.neetorecord.com/api/v1/oembed' => [
        '|^https?://.*\\.neetorecord\\.com/watch/.*$|i',
    ],
    'http://www.nfb.ca/remote/services/oembed/' => [
        '|^https?://.*\\.nfb\\.ca/film/.*$|i',
    ],
    'https://oembed.nopaste.ml' => [
        '|^https?://nopaste\\.ml/.*$|i',
    ],
    'https://api.observablehq.com/oembed' => [
        '|^https?://observablehq\\.com/@.*/.*$|i',
        '|^https?://observablehq\\.com/d/.*$|i',
        '|^https?://observablehq\\.com/embed/.*$|i',
    ],
    'https://www.odds.com.au/api/oembed/' => [
        '|^https?://www\\.odds\\.com\\.au/.*$|i',
        '|^https?://odds\\.com\\.au/.*$|i',
    ],
    'https://song.link/oembed' => [
        '|^https?://song\\.link/.*$|i',
        '|^https?://album\\.link/.*$|i',
        '|^https?://artist\\.link/.*$|i',
        '|^https?://playlist\\.link/.*$|i',
        '|^https?://pods\\.link/.*$|i',
        '|^https?://mylink\\.page/.*$|i',
        '|^https?://odesli\\.co/.*$|i',
    ],
    'https://odysee.com/$/oembed' => [
        '|^https?://odysee\\.com/.*/.*$|i',
        '|^https?://odysee\\.com/.*$|i',
    ],
    'http://official.fm/services/oembed.json' => [
        '|^https?://official\\.fm/tracks/.*$|i',
        '|^https?://official\\.fm/playlists/.*$|i',
    ],
    'https://omniscope.me/_global_/oembed/json' => [
        '|^https?://omniscope\\.me/.*$|i',
    ],
    'https://omny.fm/oembed' => [
        '|^https?://omny\\.fm/shows/.*$|i',
    ],
    'http://orbitvu.co/service/oembed' => [
        '|^https?://orbitvu\\.co/001/.*/ov3601/view$|i',
        '|^https?://orbitvu\\.co/001/.*/ov3601/.*/view$|i',
        '|^https?://orbitvu\\.co/001/.*/ov3602/.*/view$|i',
        '|^https?://orbitvu\\.co/001/.*/2/orbittour/.*/view$|i',
        '|^https?://orbitvu\\.co/001/.*/1/2/orbittour/.*/view$|i',
    ],
    'https://origits.net/oembed' => [
        '|^https?://origits\\.com/v/.*$|i',
    ],
    'https://origits.com/oembed' => [
        '|^https?://origits\\.com/v/.*$|i',
    ],
    'https://outplayed.tv/oembed' => [
        '|^https?://outplayed\\.tv/media/.*$|i',
    ],
    'https://overflow.io/services/oembed' => [
        '|^https?://overflow\\.io/s/.*$|i',
        '|^https?://overflow\\.io/embed/.*$|i',
    ],
    'https://core.oz.com/oembed' => [
        '|^https?://www\\.oz\\.com/.*/video/.*$|i',
    ],
    'https://padlet.com/oembed/' => [
        '|^https?://padlet\\.com/.*$|i',
    ],
    'https://api-v2.pandavideo.com.br/oembed' => [
        '|^https?://.*\\.tv\\.pandavideo\\.com\\.br/embed/\\?v\\=.*$|i',
        '|^https?://.*\\.tv\\.pandavideo\\.com\\.br/.*/playlist\\.m3u8$|i',
        '|^https?://dashboard\\.pandavideo\\.com\\.br/\\#/videos/.*$|i',
    ],
    'https://www.pastery.net/oembed' => [
        '|^https?://pastery\\.net/.*$|i',
        '|^https?://www\\.pastery\\.net/.*$|i',
    ],
    'https://api.picturelfy.com/service/oembed/' => [
        '|^https?://www\\.picturelfy\\.com/p/.*$|i',
    ],
    'https://piggy.to/oembed' => [
        '|^https?://piggy\\.to/@.*/.*$|i',
        '|^https?://piggy\\.to/view/.*$|i',
    ],
    'https://builder.pikasso.xyz/api/oembed' => [
        '|^https?://.*\\.builder\\.pikasso\\.xyz/embed/.*$|i',
    ],
    'https://beta.pingvp.com.kpnis.nl/p/oembed.php' => [
        '|^https?://www\\.pingvp\\.com/.*$|i',
    ],
    'https://tools.pinpoll.com/oembed' => [
        '|^https?://tools\\.pinpoll\\.com/embed/.*$|i',
    ],
    'https://www.pinterest.com/oembed.json' => [
        '|^https?://www\\.pinterest\\.com/.*$|i',
    ],
    'https://player.pitchhub.com/en/public/oembed' => [
        '|^https?://player\\.pitchhub\\.com/en/public/player/.*$|i',
    ],
    'https://store.pixdor.com/oembed' => [
        '|^https?://store\\.pixdor\\.com/place\\-marker\\-widget/.*/show$|i',
        '|^https?://store\\.pixdor\\.com/map/.*/show$|i',
    ],
    'https://app.plusdocs.com/oembed' => [
        '|^https?://app\\.plusdocs\\.com/.*/snapshots/.*$|i',
        '|^https?://app\\.plusdocs\\.com/.*/pages/edit/.*$|i',
        '|^https?://app\\.plusdocs\\.com/.*/pages/share/.*$|i',
    ],
    'https://api.podbean.com/v1/oembed' => [
        '|^https?://.*\\.podbean\\.com/e/.*$|i',
    ],
    'http://polldaddy.com/oembed/' => [
        '|^https?://.*\\.polldaddy\\.com/s/.*$|i',
        '|^https?://.*\\.polldaddy\\.com/poll/.*$|i',
        '|^https?://.*\\.polldaddy\\.com/ratings/.*$|i',
    ],
    'https://api.portfolium.com/oembed' => [
        '|^https?://portfolium\\.com/entry/.*$|i',
    ],
    'https://gateway.cobalt.run/present/decks/oembed' => [
        '|^https?://present\\.do/decks/.*$|i',
    ],
    'https://prezi.com/v/oembed' => [
        '|^https?://prezi\\.com/v/.*$|i',
        '|^https?://.*\\.prezi\\.com/v/.*$|i',
    ],
    'https://qtpi.gg/fashion/oembed' => [
        '|^https?://qtpi\\.gg/fashion/.*$|i',
    ],
    'http://www.quiz.biz/api/oembed' => [
        '|^https?://www\\.quiz\\.biz/quizz\\-.*\\.html$|i',
    ],
    'http://www.quizz.biz/api/oembed' => [
        '|^https?://www\\.quizz\\.biz/quizz\\-.*\\.html$|i',
    ],
    'https://oembed.radiopublic.com/oembed' => [
        '|^https?://play\\.radiopublic\\.com/.*$|i',
        '|^https?://radiopublic\\.com/.*$|i',
        '|^https?://www\\.radiopublic\\.com/.*$|i',
        '|^https?://.*\\.radiopublic\\.com/.*$|i',
    ],
    'https://pub.raindrop.io/api/oembed' => [
        '|^https?://raindrop\\.io/.*$|i',
        '|^https?://raindrop\\.io/.*/.*$|i',
        '|^https?://raindrop\\.io/.*/.*/.*$|i',
        '|^https?://raindrop\\.io/.*/.*/.*/.*$|i',
    ],
    'https://animatron.com/oembed' => [
        '|^https?://www\\.rcvis\\.com/v/.*$|i',
        '|^https?://www\\.rcvis\\.com/visualize\\=.*$|i',
        '|^https?://www\\.rcvis\\.com/ve/.*$|i',
        '|^https?://www\\.rcvis\\.com/visualizeEmbedded\\=.*$|i',
    ],
    'https://www.reddit.com/oembed' => [
        '|^https?://reddit\\.com/r/.*/comments/.*/.*$|i',
        '|^https?://www\\.reddit\\.com/r/.*/comments/.*/.*$|i',
    ],
    'http://publisher.releasewire.com/oembed/' => [
        '|^https?://rwire\\.com/.*$|i',
    ],
    'https://replit.com/data/oembed' => [
        '|^https?://repl\\.it/@.*/.*$|i',
        '|^https?://replit\\.com/@.*/.*$|i',
    ],
    'https://www.reverbnation.com/oembed' => [
        '|^https?://www\\.reverbnation\\.com/.*$|i',
        '|^https?://www\\.reverbnation\\.com/.*/songs/.*$|i',
    ],
    'http://roomshare.jp/en/oembed.json' => [
        '|^https?://roomshare\\.jp/post/.*$|i',
        '|^https?://roomshare\\.jp/en/post/.*$|i',
    ],
    'https://roosterteeth.com/oembed' => [
        '|^https?://roosterteeth\\.com/.*$|i',
    ],
    'https://rumble.com/api/Media/oembed.json' => [
        '|^https?://rumble\\.com/.*$|i',
    ],
    'https://embed.runkit.com/oembed' => [
        '|^https?://embed\\.runkit\\.com/.*,$|i',
    ],
    'https://octopus.saooti.com/oembed' => [
        '|^https?://octopus\\.saooti\\.com/main/pub/podcast/.*$|i',
    ],
    'http://videos.sapo.pt/oembed' => [
        '|^https?://videos\\.sapo\\.pt/.*$|i',
    ],
    'https://api.screen9.com/oembed' => [
        '|^https?://console\\.screen9\\.com/.*$|i',
        '|^https?://.*\\.screen9\\.tv/.*$|i',
    ],
    'https://api.screencast.com/external/oembed' => [
        '|^https?://www\\.screencast\\.com/.*$|i',
    ],
    'http://www.screenr.com/api/oembed.json' => [
        '|^https?://www\\.screenr\\.com/.*/$|i',
    ],
    'https://scribblemaps.com/api/services/oembed.json' => [
        '|^https?://www\\.scribblemaps\\.com/maps/view/.*$|i',
        '|^https?://scribblemaps\\.com/maps/view/.*$|i',
    ],
    'http://www.scribd.com/services/oembed/' => [
        '|^https?://www\\.scribd\\.com/doc/.*$|i',
    ],
    'https://embed.sendtonews.com/services/oembed' => [
        '|^https?://embed\\.sendtonews\\.com/oembed/.*$|i',
    ],
    'https://shopshare.tv/api/shopcast/oembed' => [
        '|^https?://shopshare\\.tv/shopboard/.*$|i',
        '|^https?://shopshare\\.tv/shopcast/.*$|i',
    ],
    'https://www.shortnote.jp/oembed/' => [
        '|^https?://www\\.shortnote\\.jp/view/notes/.*$|i',
    ],
    'http://shoudio.com/api/oembed' => [
        '|^https?://shoudio\\.com/.*$|i',
        '|^https?://shoud\\.io/.*$|i',
    ],
    'https://api.getshow.io/oembed.json' => [
        '|^https?://app\\.getshow\\.io/iframe/.*$|i',
        '|^https?://.*\\.getshow\\.io/share/.*$|i',
    ],
    'https://showtheway.io/oembed' => [
        '|^https?://showtheway\\.io/to/.*$|i',
    ],
    'https://simplecast.com/oembed' => [
        '|^https?://simplecast\\.com/s/.*$|i',
    ],
    'https://onsizzle.com/oembed' => [
        '|^https?://onsizzle\\.com/i/.*$|i',
    ],
    'http://sketchfab.com/oembed' => [
        '|^https?://sketchfab\\.com/.*models/.*$|i',
        '|^https?://sketchfab\\.com/.*/folders/.*$|i',
    ],
    'https://www.slideshare.net/api/oembed/2' => [
        '|^https?://www\\.slideshare\\.net/.*/.*$|i',
        '|^https?://fr\\.slideshare\\.net/.*/.*$|i',
        '|^https?://de\\.slideshare\\.net/.*/.*$|i',
        '|^https?://es\\.slideshare\\.net/.*/.*$|i',
        '|^https?://pt\\.slideshare\\.net/.*/.*$|i',
    ],
    'https://smashnotes.com/services/oembed' => [
        '|^https?://smashnotes\\.com/p/.*$|i',
        '|^https?://smashnotes\\.com/p/.*/e/.* \\- smashnotes\\.com/p/.*/e/.*/s/.*$|i',
    ],
    'https://open.smeme.com/api/oembed' => [
        '|^https?://open\\.smeme\\.com/.*$|i',
    ],
    'https://www.smrthi.com/api/oembed' => [
        '|^https?://www\\.smrthi\\.com/book/.*$|i',
    ],
    'https://api.smugmug.com/services/oembed/' => [
        '|^https?://.*\\.smugmug\\.com/.*$|i',
    ],
    'https://www.socialexplorer.com/services/oembed/' => [
        '|^https?://www\\.socialexplorer\\.com/.*/explore$|i',
        '|^https?://www\\.socialexplorer\\.com/.*/view$|i',
        '|^https?://www\\.socialexplorer\\.com/.*/edit$|i',
        '|^https?://www\\.socialexplorer\\.com/.*/embed$|i',
    ],
    'https://soundcloud.com/oembed' => [
        '|^https?://soundcloud\\.com/.*$|i',
        '|^https?://on\\.soundcloud\\.com/.*$|i',
        '|^https?://soundcloud\\.app\\.goog\\.gl/.*$|i',
    ],
    'https://speakerdeck.com/oembed.json' => [
        '|^https?://speakerdeck\\.com/.*/.*$|i',
    ],
    'https://open.spotify.com/oembed' => [
        '|^https?://open\\.spotify\\.com/.*$|i',
        '|^https?://spotify\\:.*$|i',
    ],
    'https://api.spotlightr.com/getOEmbed' => [
        '|^https?://.*\\.spotlightr\\.com/watch/.*$|i',
        '|^https?://.*\\.spotlightr\\.com/publish/.*$|i',
        '|^https?://.*\\.cdn\\.spotlightr\\.com/watch/.*$|i',
        '|^https?://.*\\.cdn\\.spotlightr\\.com/publish/.*$|i',
    ],
    'https://api.spreaker.com/oembed' => [
        '|^https?://.*\\.spreaker\\.com/.*$|i',
    ],
    'http://sproutvideo.com/oembed.json' => [
        '|^https?://sproutvideo\\.com/videos/.*$|i',
        '|^https?://.*\\.vids\\.io/videos/.*$|i',
    ],
    'https://api.spyke.social/embed/oembed' => [
        '|^https?://spyke\\.social/p/.*$|i',
        '|^https?://spyke\\.social/u/.*$|i',
        '|^https?://spyke\\.social/g/.*$|i',
        '|^https?://spyke\\.social/c/.*$|i',
        '|^https?://www\\.spyke\\.social/p/.*$|i',
        '|^https?://www\\.spyke\\.social/u/.*$|i',
        '|^https?://www\\.spyke\\.social/g/.*$|i',
        '|^https?://www\\.spyke\\.social/c/.*$|i',
    ],
    'https://purl.stanford.edu/embed.json' => [
        '|^https?://purl\\.stanford\\.edu/.*$|i',
    ],
    'https://api.streamable.com/oembed.json' => [
        '|^https?://streamable\\.com/.*$|i',
    ],
    'https://streamio.com/api/v1/oembed' => [
        '|^https?://s3m\\.io/.*$|i',
        '|^https?://23m\\.io/.*$|i',
    ],
    'https://subscribi.io/api/oembed' => [
        '|^https?://subscribi\\.io/api/oembed.*$|i',
    ],
    'https://www.sudomemo.net/oembed' => [
        '|^https?://www\\.sudomemo\\.net/watch/.*$|i',
        '|^https?://flipnot\\.es/.*$|i',
    ],
    'https://www.sutori.com/api/oembed' => [
        '|^https?://www\\.sutori\\.com/story/.*$|i',
    ],
    'https://sway.com/api/v1.0/oembed' => [
        '|^https?://sway\\.com/.*$|i',
        '|^https?://www\\.sway\\.com/.*$|i',
    ],
    'https://sway.office.com/api/v1.0/oembed' => [
        '|^https?://sway\\.office\\.com/.*$|i',
    ],
    'https://69jr5v75rc.execute-api.eu-west-1.amazonaws.com/prod/v2/oembed' => [
        '|^https?://share\\.synthesia\\.io/.*$|i',
    ],
    'https://www.ted.com/services/v1/oembed.json' => [
        '|^https?://ted\\.com/talks/.*$|i',
        '|^https?://www\\.ted\\.com/talks/.*$|i',
    ],
    'https://www.nytimes.com/svc/oembed/json/' => [
        '|^https?://www\\.nytimes\\.com/svc/oembed$|i',
        '|^https?://nytimes\\.com/.*$|i',
        '|^https?://.*\\.nytimes\\.com/.*$|i',
    ],
    'https://theysaidso.com/extensions/oembed/' => [
        '|^https?://theysaidso\\.com/image/.*$|i',
    ],
    'https://www.tickcounter.com/oembed' => [
        '|^https?://www\\.tickcounter\\.com/widget/.*$|i',
        '|^https?://www\\.tickcounter\\.com/countdown/.*$|i',
        '|^https?://www\\.tickcounter\\.com/countup/.*$|i',
        '|^https?://www\\.tickcounter\\.com/ticker/.*$|i',
        '|^https?://www\\.tickcounter\\.com/clock/.*$|i',
        '|^https?://www\\.tickcounter\\.com/worldclock/.*$|i',
    ],
    'https://www.tiktok.com/oembed' => [
        '|^https?://www\\.tiktok\\.com/.*$|i',
        '|^https?://www\\.tiktok\\.com/.*/video/.*$|i',
    ],
    'https://tonicaudio.com/oembed' => [
        '|^https?://tonicaudio\\.com/take/.*$|i',
        '|^https?://tonicaudio\\.com/song/.*$|i',
        '|^https?://tnic\\.io/song/.*$|i',
        '|^https?://tnic\\.io/take/.*$|i',
    ],
    'https://widget.toornament.com/oembed' => [
        '|^https?://www\\.toornament\\.com/tournaments/.*/information$|i',
        '|^https?://www\\.toornament\\.com/tournaments/.*/registration/$|i',
        '|^https?://www\\.toornament\\.com/tournaments/.*/matches/schedule$|i',
        '|^https?://www\\.toornament\\.com/tournaments/.*/stages/.*/$|i',
    ],
    'http://www.topy.se/oembed/' => [
        '|^https?://www\\.topy\\.se/image/.*$|i',
    ],
    'https://app-test.totango.com/oembed' => [
        '|^https?://app\\-test\\.totango\\.com/.*$|i',
    ],
    'https://trackspace.upitup.com/oembed' => [
        '|^https?://trackspace\\.upitup\\.com/.*$|i',
    ],
    'https://trinitymedia.ai/services/oembed' => [
        '|^https?://trinitymedia\\.ai/player/.*$|i',
        '|^https?://trinitymedia\\.ai/player/.*/.*$|i',
        '|^https?://trinitymedia\\.ai/player/.*/.*/.*$|i',
    ],
    'https://www.tumblr.com/oembed/1.0' => [
        '|^https?://.*\\.tumblr\\.com/post/.*$|i',
    ],
    'https://www.tuxx.be/services/oembed' => [
        '|^https?://www\\.tuxx\\.be/.*$|i',
    ],
    'https://play.tvcf.co.kr/rest/oembed' => [
        '|^https?://play\\.tvcf\\.co\\.kr/.*$|i',
        '|^https?://.*\\.tvcf\\.co\\.kr/.*$|i',
    ],
    'https://twinmotion.unrealengine.com/oembed' => [
        '|^https?://twinmotion\\.unrealengine\\.com/presentation/.*$|i',
        '|^https?://twinmotion\\.unrealengine\\.com/panorama/.*$|i',
    ],
    'https://publish.twitter.com/oembed' => [
        '|^https?://twitter\\.com/.*$|i',
        '|^https?://twitter\\.com/.*/status/.*$|i',
        '|^https?://.*\\.twitter\\.com/.*/status/.*$|i',
    ],
    'https://play.typecast.ai/oembed' => [
        '|^https?://play\\.typecast\\.ai/s/.*$|i',
        '|^https?://play\\.typecast\\.ai/e/.*$|i',
        '|^https?://play\\.typecast\\.ai/.*$|i',
    ],
    'https://typlog.com/oembed' => [
        '|^https?://typlog\\.com.*$|i',
    ],
    'https://uapod.univ-antilles.fr/oembed' => [
        '|^https?://uapod\\.univ\\-antilles\\.fr/video/.*$|i',
    ],
    'https://map.cam.ac.uk/oembed/' => [
        '|^https?://map\\.cam\\.ac\\.uk/.*$|i',
    ],
    'https://mediatheque.univ-paris1.fr/oembed' => [
        '|^https?://mediatheque\\.univ\\-paris1\\.fr/video/.*$|i',
    ],
    'https://pod.u-pec.fr/oembed' => [
        '|^https?://pod\\.u\\-pec\\.fr/video/.*$|i',
    ],
    'http://www.ustream.tv/oembed' => [
        '|^https?://.*\\.ustream\\.tv/.*$|i',
        '|^https?://.*\\.ustream\\.com/.*$|i',
    ],
    'https://app.ustudio.com/api/v2/oembed' => [
        '|^https?://.*\\.ustudio\\.com/embed/.*$|i',
        '|^https?://.*\\.ustudio\\.com/embed/.*/.*$|i',
    ],
    'https://api.veer.tv/oembed' => [
        '|^https?://veer\\.tv/videos/.*$|i',
    ],
    'https://api.veervr.tv/oembed' => [
        '|^https?://veervr\\.tv/videos/.*$|i',
    ],
    'https://www.vevo.com/oembed' => [
        '|^https?://www\\.vevo\\.com/.*$|i',
    ],
    'https://videfit.com/oembed' => [
        '|^https?://videfit\\.com/videos/.*$|i',
    ],
    'https://vidmount.com/oembed' => [
        '|^https?://vidmount\\.com/.*$|i',
    ],
    'https://api.vidyard.com/dashboard/v1.1/oembed' => [
        '|^https?://.*\\.vidyard\\.com/.*$|i',
        '|^https?://.*\\.hubs\\.vidyard\\.com/.*$|i',
    ],
    'https://vimeo.com/api/oembed.json' => [
        '|^https?://vimeo\\.com/.*$|i',
        '|^https?://vimeo\\.com/album/.*/video/.*$|i',
        '|^https?://vimeo\\.com/channels/.*/.*$|i',
        '|^https?://vimeo\\.com/groups/.*/videos/.*$|i',
        '|^https?://vimeo\\.com/ondemand/.*/.*$|i',
        '|^https?://player\\.vimeo\\.com/video/.*$|i',
        '|^https?://vimeo\\.com/event/.*/.*$|i',
    ],
    'https://play.viostream.com/oembed' => [
        '|^https?://share\\.viostream\\.com/.*$|i',
    ],
    'https://www.viously.com/oembed' => [
        '|^https?://www\\.viously\\.com/.*/.*$|i',
    ],
    'https://vizydrop.com/oembed' => [
        '|^https?://vizydrop\\.com/shared/.*$|i',
    ],
    'https://vlipsy.com/oembed' => [
        '|^https?://vlipsy\\.com/.*$|i',
    ],
    'https://www.vlive.tv/oembed' => [
        '|^https?://www\\.vlive\\.tv/video/.*$|i',
    ],
    'https://embed.vouchfor.com/v1/oembed' => [
        '|^https?://.*\\.vouchfor\\.com/.*$|i',
    ],
    'https://data.voxsnap.com/oembed' => [
        '|^https?://article\\.voxsnap\\.com/.*/.*$|i',
    ],
    'https://waltrack.net/oembed' => [
        '|^https?://waltrack\\.net/product/.*$|i',
    ],
    'https://embed.wave.video/oembed' => [
        '|^https?://watch\\.wave\\.video/.*$|i',
        '|^https?://embed\\.wave\\.video/.*$|i',
    ],
    'https://www.web3isgoinggreat.com/api/oembed' => [
        '|^https?://www\\.web3isgoinggreat\\.com/\\?id\\=.*$|i',
        '|^https?://www\\.web3isgoinggreat\\.com/single/.*$|i',
        '|^https?://www\\.web3isgoinggreat\\.com/embed/.*$|i',
    ],
    'https://play.wecandeo.com/oembed/' => [
        '|^https?://play\\.wecandeo\\.com/video/v/.*$|i',
    ],
    'https://whimsical.com/api/oembed' => [
        '|^https?://whimsical\\.com/.*$|i',
    ],
    'https://fast.wistia.com/oembed.json' => [
        '|^https?://fast\\.wistia\\.com/embed/iframe/.*$|i',
        '|^https?://fast\\.wistia\\.com/embed/playlists/.*$|i',
        '|^https?://.*\\.wistia\\.com/medias/.*$|i',
    ],
    'https://app.wizer.me/api/oembed.json' => [
        '|^https?://.*\\.wizer\\.me/learn/.*$|i',
        '|^https?://.*\\.wizer\\.me/preview/.*$|i',
    ],
    'https://wokwi.com/api/oembed' => [
        '|^https?://wokwi\\.com/share/.*$|i',
    ],
    'https://www.wolframcloud.com/oembed' => [
        '|^https?://.*\\.wolframcloud\\.com/.*$|i',
    ],
    'http://public-api.wordpress.com/oembed/' => [
        '|^https?://wordpress\\.com/.*$|i',
        '|^https?://.*\\.wordpress\\.com/.*$|i',
        '|^https?://.*\\..*\\.wordpress\\.com/.*$|i',
        '|^https?://wp\\.me/.*$|i',
    ],
    'https://publish.x.com/oembed' => [
        '|^https?://x\\.com/.*$|i',
        '|^https?://x\\.com/.*/status/.*$|i',
        '|^https?://.*\\.x\\.com/.*/status/.*$|i',
    ],
    'https://www.youtube.com/oembed' => [
        '|^https?://.*\\.youtube\\.com/watch.*$|i',
        '|^https?://.*\\.youtube\\.com/v/.*$|i',
        '|^https?://youtu\\.be/.*$|i',
        '|^https?://.*\\.youtube\\.com/playlist\\?list\\=.*$|i',
        '|^https?://youtube\\.com/playlist\\?list\\=.*$|i',
        '|^https?://.*\\.youtube\\.com/shorts.*$|i',
        '|^https?://.*\\.youtube\\.com/embed/.*$|i',
    ],
    'https://www.yumpu.com/services/oembed' => [
        '|^https?://www\\.yumpu\\.com/.*/document/view/.*/.*$|i',
    ],
    'https://app.zeplin.io/embed' => [
        '|^https?://app\\.zeplin\\.io/project/.*/screen/.*$|i',
        '|^https?://app\\.zeplin\\.io/project/.*/screen/.*/version/.*$|i',
        '|^https?://app\\.zeplin\\.io/project/.*/styleguide/components\\?coid\\=.*$|i',
        '|^https?://app\\.zeplin\\.io/styleguide/.*/components\\?coid\\=.*$|i',
    ],
    'https://app.zingsoft.com/oembed' => [
        '|^https?://app\\.zingsoft\\.com/embed/.*$|i',
        '|^https?://app\\.zingsoft\\.com/view/.*$|i',
    ],
    'https://api.znipe.tv/v3/oembed/' => [
        '|^https?://.*\\.znipe\\.tv/.*$|i',
    ],
    'https://srv2.zoomable.ca/oembed' => [
        '|^https?://srv2\\.zoomable\\.ca/viewer\\.php.*$|i',
    ],
];
