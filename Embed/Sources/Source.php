<?php
/**
 * Base Source extended by all sources
 *
 * Provide default functionalities
 */
namespace Embed\Sources;

abstract class Source
{
    public function __get($name)
    {
        $method = 'get'.$name;

        if (method_exists($this, $method)) {
            return $this->$name = $this->$method();
        }
    }
}
