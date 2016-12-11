<?php

namespace Embed\Providers\OEmbed;

use Embed\Http\Uri;

class Facebook extends EndPoint implements EndpointInterface
{
    protected static $pattern = 'https://www.facebook.com/*';

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        if ($this->response->getUri()->match(['*/videos/*', '/video.php'])) {
            $endPoint = new Uri('https://www.facebook.com/plugins/video/oembed.json');
        } else {
            $endPoint = new Uri('https://www.facebook.com/plugins/post/oembed.json');
        }

        return $endPoint->withQueryParameters([
            'url' => (string) $this->response->getUri(),
            'format' => 'json',
        ]);
    }
}
