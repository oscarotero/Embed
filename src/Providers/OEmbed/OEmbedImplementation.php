<?php
namespace Embed\Providers\Oembed;

/**
 * Abstract class extended by all oembed classes
 *
 * Provides the endPoint, pattern and params of the well known oembed implementations
 */
abstract class OEmbedImplementation
{
    /**
     * @access public
     * @author Oliver Lillie
     * @return string
     */
    public static function getEndPoint()
    {
        return '';
    }

    /**
     * @access public
     * @author Oliver Lillie
     * @return array
     */
    public static function getPatterns()
    {
        return [];
    }

    /**
     * @access public
     * @author Oliver Lillie
     * @return array
     */
    public static function getParams()
    {
        return [];
    }
}
