<?php
namespace Embed\Providers\OEmbed;

class Rdio extends \Embed\Providers\OEmbedImplementationAbstract
{
	/**
	 * {@inheritDoc}
	 */
    public static function getEndPoint()
    {
        return 'http://www.rdio.com/api/oembed/';
    }


    /**
	 * {@inheritDoc}
	 */
    public static function getPatterns()
    {
        return array('http://www.rdio.com/*');
    }
}
