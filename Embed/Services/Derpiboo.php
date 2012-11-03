<?php
namespace Embed\Services;

class Derpiboo extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://derpibooru.org/oembed.json',
			'patterns' => array(
				'http://derpiboo.ru/*',
				'http://derpiboo.ru/images/*',
				'http://derpiboo.ru/thumbs/*',
				'http://derpiboo.ru/media/*'
			)
		)
	);
}