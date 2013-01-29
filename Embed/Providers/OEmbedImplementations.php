<?php
/**
 * Generic oembed provider.
 * Load the oembed data of an url and store it
 */
namespace Embed\Providers;

use Embed\Url;

class OEmbedImplementations extends Provider {
	static public $implementations = array(
		array(
			'endPoint' => 'http://blip.tv/oembed/',
			'patterns' => array('http://blip.tv/*')
		),
		array(
			'endPoint' => 'http://backend.deviantart.com/oembed',
			'patterns' => array('http://www.deviantart.com/art/*', 'http://www.deviantart.com/#/d*'),
			'params' => array('for' => 'embed')
		),
		array(
			'endPoint' => 'http://dotsub.com/services/oembed',
			'patterns' => array('https?://dotsub.com/view/*')
		),
		array(
			'endPoint' => 'https://github.com/api/oembed',
			'patterns' => array('https://gist.github.com/*')
		),
		array(
			'endPoint' => 'http://oembed.graphicly.com/1/oembed',
			'patterns' => array('http://graphicly.com/*/*')
		),
		array(
			'endPoint' => 'http://api.imgur.com/oembed',
			'patterns' => array('http://imgur.com/*')
		),
		array(
			'endPoint' => 'http://api.instagram.com/oembed',
			'patterns' => array('http://instagram.com/p/*')
		),
		array(
			'endPoint' => 'http://api.justin.tv/api/embed/from_url.json',
			'patterns' => array('http://www.justin.tv/*')
		),
		array(
			'endPoint' => 'http://api.kewego.com/services/oembed/',
			'patterns' => array('http://www.kewego.*/video/*')
		),
		array(
			'endPoint' => 'http://www.kinomap.com/oembed',
			'patterns' => array('http://www.kinomap.com/*', 'http://kinomap.com/*')
		),
		array(
			'endPoint' => 'http://api.meetup.com/oembed',
			'patterns' => array('http://www.meetup.com/*')
		),
		array(
			'endPoint' => 'http://s51.photobucket.com/oembed/',
			'patterns' => array('http://*.photobucket.com/*')
		),
		array(
			'endPoint' => 'http://qik.com/api/oembed.json',
			'patterns' => array('http://qik.com/video/*')
		),
		array(
			'endPoint' => 'http://www.rdio.com/api/oembed/',
			'patterns' => array('http://www.rdio.com/*')
		),
		array(
			'endPoint' => 'http://revision3.com/api/oembed/',
			'patterns' => array('http://revision3.com/*')
		),
		array(
			'endPoint' => 'http://www.scribd.com/services/oembed',
			'patterns' => array('http://www.scribd.com/doc/*')
		),
		array(
			'endPoint' => 'http://skitch.com/oembed/',
			'patterns' => array('http://skitch.com/*','http://img.skitch.com/*')
		),
		array(
			'endPoint' => 'http://api.smugmug.com/services/oembed/',
			'patterns' => array('http://www.smugmug.com/*')
		),
		array(
			'endPoint' => 'http://soundcloud.com/oembed',
			'patterns' => array('https?://soundcloud.com/*')
		),
		array(
			'endPoint' => 'http://oembed.urtak.com/1/oembed',
			'patterns' => array('https://urtak.com/u/*','https://urtak.com/clr/*')
		),
		array(
			'endPoint' => 'http://www.yfrog.com/api/oembed',
			'patterns' => array('http://twitter.yfrog.com/*','http://www.yfrog.com/*')
		)
	);

	public static function create (Url $Url) {
		foreach (static::$implementations as $settings) {
			if ($Url->match($settings['patterns'])) {
				$EndPoint = new Url($settings['endPoint']);

				if (isset($settings['params'])) {
					$EndPoint->setParameter($settings['params']);
				}

				$EndPoint->setParameter('url', $Url->getUrl());

				return new OEmbed($EndPoint);
			}
		}
	}
}
?>
