<?php
namespace Embed\Providers\OEmbed;

use Embed\Url;

class Instagram extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://api.instagram.com/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['http://instagram.com/p/*'];
    }

    /**
     * {@inheritdoc}
     */
    public static function getParams(Url $url)
    {
        $url = clone $url;

        $url->setScheme('http');

        return ['url' => $url->getUrl()];
    }
}
