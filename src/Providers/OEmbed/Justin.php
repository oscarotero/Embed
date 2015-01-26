<?php
namespace Embed\Providers\OEmbed;

class Justin extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://api.justin.tv/api/embed/from_url.json';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return array('http://www.justin.tv/*');
    }
}
