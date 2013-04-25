<?php
namespace Embed\Providers\OEmbed;

class Meetup extends \Embed\Providers\OEmbedImplementationAbstract {
    public static function getEndPoint()
    {
        return 'http://api.meetup.com/oembed';
    }
    public static function getPatterns()
    {
        return array('http://www.meetup.com/*');
    }
}
