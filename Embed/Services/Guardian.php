<?php
namespace Embed\Services;

class Guardian extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://discussionapi.guardian.co.uk/discussion-api/oembed',
			'patterns' => array(
				'http://www.guardian.co.uk/discussion/comment-permalink/*'
			)
		)
	);
}