<?php
namespace Embed\Providers\OEmbed;

class MeetUp extends \Embed\Providers\OEmbedImplementationAbstract
{
    public static function getEndPoint()
    {
        return 'http://api.meetup.com/oembed';
    }
    public static function getPatterns()
    {
        return array('http://www.meetup.com/*');
    }
}
