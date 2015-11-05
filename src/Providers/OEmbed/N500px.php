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
    	$matches=array();
    	preg_match('#(https?://500px.com/photo/\d+/)#si', $url->getUrl(),$matches);
    	
    	if (isset($matches[1]) && $matches[1]) {
    		return $matches[1].'/oembed.json';
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
