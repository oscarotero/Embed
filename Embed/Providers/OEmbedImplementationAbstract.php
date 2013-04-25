<?php
/**
 * Generic oembed provider.
 * Load the oembed data of an url and store it
 */
namespace Embed\Providers;

abstract class OEmbedImplementationAbstract{
    /**
     * @access public
     * @author Oliver Lillie
     * @return string
     */
    abstract public static function getEndPoint();
    
    /**
     * @access public
     * @author Oliver Lillie
     * @return array
     */
    abstract public static function getPatterns();
    
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
