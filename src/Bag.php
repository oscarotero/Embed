<?php
/**
 * Class to store and access to data
 */
namespace Embed;

class Bag
{
    protected $parameters = [];

    /**
     * Save a value
     *
     * @param string|array $name  Name of the value
     * @param mixed        $value The value to save
     */
    public function set($name, $value = null)
    {
        if (is_array($name)) {
            $this->parameters = array_replace($this->parameters, $name);
        } else {
            $this->parameters[trim(strtolower($name))] = is_string($value) ? trim($value) : $value;
        }
    }

    /**
     * Adds a subvalue
     *
     * @param string $name  Name of the value
     * @param mixed  $value The value to add
     */
    public function add($name, $value = null)
    {
        $name = trim($name);

        if (!isset($this->parameters[$name])) {
            $this->parameters[$name] = [];
        } elseif (!is_array($this->parameters[$name])) {
            $this->parameters[$name] = (array) $this->parameters[$name];
        }

        $this->parameters[$name][] = $value;
    }

    /**
     * Get a value, all values or null if not exists
     *
     * @param string      $name    Value name
     * @param null|string $subname A subvalue name
     *
     * @return string|null
     */
    public function get($name, $subname = null)
    {
        if ($subname === null) {
            return isset($this->parameters[$name]) ? $this->parameters[$name] : null;
        }

        if (!isset($this->parameters[$name][$subname])) {
            return;
        }

        return $this->parameters[$name][$subname];
    }

    /**
     * Return all stored values
     *
     * @return array
     */
    public function getAll()
    {
        return $this->parameters;
    }

    /**
     * Check if a value exists
     *
     * @param string $name Value name
     *
     * @return boolean True if exists, false if not
     */
    public function has($name)
    {
        return isset($this->parameters[$name]);
    }
}
