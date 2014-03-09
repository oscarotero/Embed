<?php
/**
 * Generic oembed provider.
 * Load the oembed data of an url and store it
 */
namespace Embed\Providers;

abstract class OEmbedImplementationAbstract
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
        return array();
    }

    /**
     * @access public
     * @author Oliver Lillie
     * @return array
     */
    public static function getParams()
    {
        return array();
    }
}
