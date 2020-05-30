<?php

namespace Embed\Providers\OEmbed;

use Embed\Http\Url;

class Infogram extends EndPoint implements EndPointInterface
{
    protected static $pattern = [
        'infogr.am/*',
        'www.infogr.am/*',
    ];
    protected static $endPoint = 'https://infogr.am/oembed';

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        $url = $this->getUrl()->withScheme('https');

        return Url::create(static::$endPoint)
                ->withQueryParameters([
                    'url' => (string) $url,
                ]);
    }
}
