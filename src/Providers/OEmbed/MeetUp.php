<?php
namespace Embed\Providers\OEmbed;

class MeetUp extends \Embed\Providers\OEmbedImplementationAbstract
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://api.meetup.com/oembed';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('http://www.meetup.com/*');
    }
}
