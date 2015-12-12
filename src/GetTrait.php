<?php

namespace Embed;

/**
 * Trait to provide a magic method to get parameters using get* methods.
 */
trait GetTrait
{
    /**
     * Magic method to execute methods on get paramaters
     * For example, $source->sourceUrl executes $source->getSourceUrl().
     *
     * @param string $name The property name
     *
     * @return mixed
     */
    public function __get($name)
    {
        $method = 'get'.$name;

        if (method_exists($this, $method)) {
            return $this->$name = $this->$method();
        }
    }
}
