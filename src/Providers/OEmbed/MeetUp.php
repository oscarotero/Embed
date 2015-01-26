<?php
namespace Embed\Providers\OEmbed;

class MeetUp extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://api.meetup.com/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return array('http://www.meetup.com/*');
    }
}
