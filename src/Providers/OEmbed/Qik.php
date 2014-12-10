<?php
namespace Embed\Providers\OEmbed;

class Qik extends \Embed\Providers\OEmbedImplementationAbstract
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://qik.com/api/oembed.json';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('http://qik.com/video/*');
    }
}
