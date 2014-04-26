<?php
namespace Embed\Providers\OEmbed;

class Github extends \Embed\Providers\OEmbedImplementationAbstract
{
	/**
	 * {@inheritDoc}
	 */
    public static function getEndPoint()
    {
        return 'https://github.com/api/oembed';
    }


    /**
	 * {@inheritDoc}
	 */
    public static function getPatterns()
    {
        return array('https://gist.github.com/*');
    }
}
