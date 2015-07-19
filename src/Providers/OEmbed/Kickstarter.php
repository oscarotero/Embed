<?php
namespace Embed\Providers\OEmbed;

class Kickstarter extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://www.kickstarter.com/services/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https?://www.kickstarter.com/*'];
    }
}
