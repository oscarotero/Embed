<?php
namespace Embed\Providers\OEmbed;

class Justin extends \Embed\Providers\OEmbedImplementationAbstract
{
    /**
     * {@inheritDoc}
     */
    public static function getEndPoint()
    {
        return 'http://api.justin.tv/api/embed/from_url.json';
    }

    /**
     * {@inheritDoc}
     */
    public static function getPatterns()
    {
        return array('http://www.justin.tv/*');
    }
}
