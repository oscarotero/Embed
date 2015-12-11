<?php

namespace Embed\Providers\OEmbed;

use Embed\Url;

/**
 * Abstract class extended by all oembed classes.
 *
 * Provides the endPoint, pattern and params of the well known oembed implementations
 */
abstract class OEmbedImplementation
{
    /**
     * @author Oliver Lillie
     *
     * @return string
     */
    public static function getEndPoint(Url $url)
    {
        return '';
    }

    /**
     * @author Oliver Lillie
     *
     * @return array
     */
    public static function getPatterns()
    {
        return [];
    }

    /**
     * @author Oliver Lillie
     *
     * @return array
     */
    public static function getParams(Url $url)
    {
        return [];
    }

    /**
     * @author Dave Ross
     *
     * @return bool
     */
    public static function embedInDomIsBroken()
    {
        return false;
    }
}
