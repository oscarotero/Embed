<?php
$tests = array(
	'Blip' => array(
		'http://blip.tv/gdtvshow/episode-8-finale-6411588'
	),
	'Chirbit' => array(
		'http://chirb.it/xpwsDw'
	),
	'Clickthrough' => array(
		'http://www.clikthrough.com/theater/video/23/en-US'
	),
	'Collegehumor' => array(
		'http://www.collegehumor.com/video/6829240/photoshops-new-chinese-food-tool'
	),
	'Dailymile' => array(
		'http://www.dailymile.com/people/ben/entries/18879774'
	),
	'Dailymotion' => array(
		'http://www.dailymotion.com/video/xty189_la-banca-espanola-necesita-capital-por-53-745-mill_news'
	),
	'Derpiboo' => array(
		'http://derpiboo.ru/17842'
	),
	'Deviantart' => array(
		'http://www.deviantart.com/#/d5gdfo5'
	),
	'Distrify' => array(
		'http://distrify.com/films/357'
	),
	'Dotsub' => array(
		'https://dotsub.com/view/6a7db231-4d64-407d-8026-a845eaf6c4a9'
	),
	'Flickr' => array(
		'https://www.flickr.com/photos/paarma/8036004563/'
	),
	'Github' => array(
		'https://gist.github.com/3976584'
	),
	'Graphicly' => array(
		'http://graphicly.com/platinum-studios/cowboys-and-aliens',
		'http://graphicly.com/platinum-studios/cowboys-and-aliens/1'
	),
	'Guardian' => array(
		'http://www.guardian.co.uk/discussion/comment-permalink/8436585'
	),
	'Ifixit' => array(
		'http://www.ifixit.com/guide/Replacing-Super-Nintendo-Motherboard/3873'
	),
	'Imgur' => array(
		'http://imgur.com/ZOGJ9'
	),
	'Instagram' => array(
		'http://instagram.com/p/NTO_p4Miqz/'
	),
	'Jest' => array(
		'http://www.jest.com/video/200157/mitt-romneys-self-destruct-button'
	),
	'Jsfiddle' => array(
		'http://jsfiddle.net/ImpressiveWebs/fGNNT/1333/'
	),
	'Justin' => array(
		'http://www.justin.tv/jessicaycombinator/b/264338435'
	),
	'Kewego' => array(
		'http://www.kewego.fr/video/iLyROoafz1ML.html'
	),
	'Kinomap' => array(
		'http://www.kinomap.com/#!kms-smfb9r'
	),
	'Majorleaguegaming' => array(
		'http://tv.majorleaguegaming.com/videos/97659-top-10-mlg-league-of-legends-plays-from-team-solomid'
	),
	'Meetup' => array(
		'http://www.meetup.com/ny-tech'
	),
	'Mixcloud' => array(
		'http://www.mixcloud.com/LaidBackRadio/kong-ensemble-part-2/'
	),
	'Mobypicture' => array(
		'http://www.mobypicture.com/user/glosemynt/view/13903616'
	),
	'N23hq' => array(
		'http://23hq.com/nachbarnebenan/photo/8233925'
	),
	'N5min' => array(
		'http://www.5min.com/Video/Underwater-Hotel-Planned-For-Dubai-517365762'
	),
	'Nfb' => array(
		'http://www.nfb.ca/film/singlehanders/'
	),
	'Photobucket' => array(
		'http://i80.photobucket.com/albums/j181/Pruglo/Album%20Sunsets/SaguaroNationalParkArizona.jpg'
	),
	'Qik' => array(
		'http://qik.com/video/5445046'
	),
	'Rdio' => array(
		'http://www.rdio.com/artist/Eugenio/album/Erase_Otra_Vez/'
	),
	'Revision3' => array(
		'http://revision3.com/wecomefromthefuture/time-travel'
	),
	'Screenr' => array(
		'http://www.screenr.com/fTK'
	),
	'Scribd' => array(
		'http://www.scribd.com/doc/99717073/Original-programme-for-the-British-premiere-of-Fritz-Lang%E2%80%99s-Metropolis-in-1927'
	),
	'Skitch' => array(
		'http://skitch.com/talonlzr/6yqb/robert-is-an-fbi-special-agent'
	),
	'Slideshare' => array(
		'http://www.slideshare.net/Britopian/how-to-build-your-own-advocate-army'
	),
	'Smugmug' => array(
		'http://www.smugmug.com/popular/today#!i=2189987603&k=6tptvqj'
	),
	'Soundcloud' => array(
		'http://soundcloud.com/officialswedishhousemafia/until-one-continuous-mix'
	),
	'Speakerdeck' => array(
		'https://speakerdeck.com/u/edds/p/what-the-flash-photography-introduction'
	),
	'Twitter' => array(
		'https://twitter.com/que_hacen/status/256105571332259841'
	),
	'Urtak' => array(
		'https://urtak.com/u/2779'
	),
	'Viddler' => array(
		'http://www.viddler.com/v/d3739ab9'
	),
	'Vimeo' => array(
		'http://vimeo.com/29067223'
	),
	'Wordpress' => array(
		'http://wordpress.tv/2012/08/24/daniel-bachhuber-zen-of-wp-development/',
		'http://dediseno.wordpress.com/2012/09/06/pantallas/'
	),
	'Yfrog' => array(
		'http://twitter.yfrog.com/0wgvcpj'
	),
	'Youtube' => array(
		'http://www.youtube.com/watch?v=nY7GnAq6Znw&feature=g-all-esi'
	)
);
?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		
		<title>Embed tests</title>
	</head>

	<body>
		<ul>
		<?php foreach ($tests as $titulo => $urls): ?>
			<li><strong><?php echo $titulo; ?></strong>
				<ul>
					<?php foreach ($urls as $url): ?>
					<li>
						<a href="test.php?url=<?php echo urlencode($url); ?>" target="_blank"><?php echo $url; ?></a>
					</li>
					<?php endforeach ?>
				</ul>
			</li>
		<?php endforeach; ?>
		</ul>
	</body>
</html>
