<?php

namespace Embed\Providers\OEmbed;

use Embed\Http\Url;

class Tiktok extends EndPoint implements EndPointInterface
{
    protected static $pattern = [
    	'*.tiktok.com/*'
    ];

    protected static $endPoint = 'https://www.tiktok.com/oembed';

	/**
	 * {@inheritdoc}
	 */
	public function getEndPoint()
	{
		return Url::create(static::$endPoint)
			->withQueryParameters([
				'url' => (string) $this->response->getStartingUrl(),
				'format' => 'json',
			]);
	}
}
