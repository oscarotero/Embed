<?php
namespace Embed;

class Embed {
	static public $options = array();
	static public $services = array(
		'Youtube',
		'Vimeo',
		'Dailymotion',
		'Flickr',
		'Twitter',
		'Slideshare',
		'Viddler',
		'Qik',
		'Revision3',
		'Collegehumor',
		'Ifixit',
		'Smugmug',
		'Wordpress',
		'Chirbit',
		'Blip',
		'Scribd',
		'Photobucket',
		'Deviantart',
		'Instagram',
		'Rdio',
		'Dotsub',
		'Mobypicture',
		'Vhx',
		'Soundcloud',
		'Speakerdeck',
		'Screenr',
		'Justin',
		'N5min',
		'Nfb',
		'Yfrog',
		'Clikthrough',
		'Kinomap',
		'Jest',
		'Majorleaguegaming',
		'N23hq',
		
		'OpenGraph',
		'Embedly',
	);

	public static function create ($url) {
		$Url = new Url($url);

		foreach (self::$services as $name) {
			$service = call_user_func(array('Embed\\Services\\'.$name, 'create'), $Url, isset(self::$options[$name]) ? self::$options[$name] : array());

			if ($service && $service->hasData()) {
				return $service;
			}
		}

		return false;
	}
}
?>