<?php
namespace Embed\Sources;

/**
 * Base Source extended by all sources
 * Provide default functionalities
 * 
 * @property null|string $providerUrl
 * @property string      $sourceUrl
 * @property array       $items
 */
abstract class Source
{
    public $request;

    /**
     * Magic method to execute methods on get paramaters
     * For example, $source->sourceUrl executes $source->getSourceUrl()
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
