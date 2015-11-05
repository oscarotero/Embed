<?php

namespace Embed\Providers\OEmbed;
use Embed\Url;

/**
 * Class N500px
 * 500px.com embeds.
 */
class N500px extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint(Url $url)
    {
    	
		if (is_numeric($url->getDirectoryPosition(1))) {         
           return $url->createUrl()->withDirectoryPosition(2,'oembed.json');
        }    	
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return ['https?://500px.com/photo/*'];
    }

    /**
     * {@inheritdoc}
     */
    public static function embedInDomIsBroken()
    {
        return true;
    }
}
